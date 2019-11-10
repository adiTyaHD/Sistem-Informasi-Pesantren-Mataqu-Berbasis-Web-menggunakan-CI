<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }


    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $data["counthubkami"] = $this->count_hubkami();
        $data['pesan'] = $this->db->get_where('hubungi_kami', ['is_read' => 0])->result_array();
        $data['countsantri'] = $this->db->get_where('pendaftaran', ['is_approve' => 1])->result_array();
        $data['berita'] = $this->db->get('berita')->result_array();

        $this->db->limit(5);
        $data['santri'] = $this->db->get('pendaftaran')->result_array();


        // $query = "SELECT COUNT(id_saran) as counthubkami FROM hubungi_kami";
        // $result = $this->db->query($query);
        // $result->row()->counthubkami;

        $this->load->view('admin/templates/header_admin', $data);
        $this->load->view('admin/templates/sidebar_admin', $data);
        $this->load->view('admin/templates/topbar_admin', $data);
        $this->load->view('admin/tampiladmin', $data);
        $this->load->view('admin/templates/footer_admin');
    }
    public function music()
    {
        $data['title'] = 'Music Player';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('admin/music/templates/header_admin', $data);
        $this->load->view('admin/music/templates/sidebar_admin', $data);
        $this->load->view('admin/music/templates/topbar_admin', $data);
        $this->load->view('admin/music/music', $data);
        $this->load->view('admin/music/templates/footer_admin');
    }
    public function jadwal()
    {
        $data['title'] = 'Atur Jadwal Santri';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['jadwal'] = $this->db->get('jadwal_santri')->result_array();
        $this->form_validation->set_rules('jam', 'Jam', 'required|trim', ['required' => 'jadwal jam harus diisi']);
        $this->form_validation->set_rules('senin', 'Senin', 'required|trim', ['required' => 'jadwal hari senin harus diisi']);
        $this->form_validation->set_rules('selasa', 'Selasa', 'required|trim', ['required' => 'jadwal hari selasa harus diisi']);
        $this->form_validation->set_rules('rabu', 'Rabu', 'required|trim', ['required' => 'jadwal hari rabu harus diisi']);
        $this->form_validation->set_rules('kamis', 'Kamis', 'required|trim', ['required' => 'jadwal hari kamis harus diisi']);
        $this->form_validation->set_rules('jumat', 'Jumat', 'required|trim', ['required' => 'jadwal hari jumat harus diisi']);
        $this->form_validation->set_rules('kategori', 'Kategori', 'required|trim', ['required' => 'pilih jadwal harus diisi']);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/templates/header_admin', $data);
            $this->load->view('admin/templates/sidebar_admin', $data);
            $this->load->view('admin/templates/topbar_admin', $data);
            $this->load->view('admin/jadwal', $data);
            $this->load->view('admin/templates/footer_admin');
        } else {
            $insert =
                [
                    'jam' => $this->input->post('jam'),
                    'senin' => $this->input->post('senin'),
                    'selasa' => $this->input->post('selasa'),
                    'rabu' => $this->input->post('rabu'),
                    'kamis' => $this->input->post('kamis'),
                    'jumat' => $this->input->post('jumat'),
                    'kategori' => $this->input->post('kategori'),
                ];
            $this->db->insert('jadwal_santri', $insert);
            $this->session->set_flashdata('message', '
            schedule baru berhasil ditambahkan !');
            redirect('admin/jadwal');
        }
    }

    public function editjadwal($id)
    {
        $data['title'] =  'Edit Jadwal Santri';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['editjadwal'] = $this->db->get_where('jadwal_santri', ['id_jadwal' => $id])->row_array();


        $this->form_validation->set_rules('jam', 'Jam', 'required|trim', ['required' => 'jadwal jam harus diisi']);
        $this->form_validation->set_rules('senin', 'Senin', 'required|trim', ['required' => 'jadwal hari senin harus diisi']);
        $this->form_validation->set_rules('selasa', 'Selasa', 'required|trim', ['required' => 'jadwal hari selasa harus diisi']);
        $this->form_validation->set_rules('rabu', 'Rabu', 'required|trim', ['required' => 'jadwal hari rabu harus diisi']);
        $this->form_validation->set_rules('kamis', 'Kamis', 'required|trim', ['required' => 'jadwal hari kamis harus diisi']);
        $this->form_validation->set_rules('jumat', 'Jumat', 'required|trim', ['required' => 'jadwal hari jumat harus diisi']);
        $this->form_validation->set_rules('kategori', 'Kategori', 'required|trim', ['required' => 'pilih jadwal harus diisi']);

        if ($this->form_validation->run() == false) {

            $this->load->view('admin/templates/header_admin', $data);
            $this->load->view('admin/templates/sidebar_admin', $data);
            $this->load->view('admin/templates/topbar_admin', $data);
            $this->load->view('admin/editjadwal', $data);
            $this->load->view('admin/templates/footer_admin');
        } else {
            $update = [
                'jam' => $this->input->post('jam'),
                'senin' => $this->input->post('senin'),
                'selasa' => $this->input->post('selasa'),
                'rabu' => $this->input->post('rabu'),
                'kamis' => $this->input->post('kamis'),
                'jumat' => $this->input->post('jumat'),
                'kategori' => $this->input->post('kategori'),

            ];
            $this->db->update('jadwal_santri ', $update, ['id_jadwal' => $id]);
            $this->session->set_flashdata('message', '
            Jadwal berhasil di update !');
            redirect('admin/jadwal');
        }
    }

    public function aboutme()
    {
        $data['title'] = 'Profile Pembuat';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('admin/templates/header_admin', $data);
        $this->load->view('admin/templates/sidebar_admin', $data);
        $this->load->view('admin/templates/topbar_admin', $data);
        $this->load->view('admin/aboutme', $data);
        $this->load->view('admin/templates/footer_admin');
    }


    public function role()
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['role'] = $this->db->get('user_role')->result_array();
        $this->form_validation->set_rules('menu', 'Menu', 'required|trim', ['required' => 'Menu harus diisi']);
        if ($this->form_validation->run() == FALSE) {

            $this->load->view('admin/templates/header_admin', $data);
            $this->load->view('admin/templates/sidebar_admin', $data);
            $this->load->view('admin/templates/topbar_admin', $data);
            $this->load->view('admin/role', $data);
            $this->load->view('admin/templates/footer_admin');
        } else {
            $insert = [
                'role' => $this->input->post('menu'),
            ];
            $this->db->insert('user_role', $insert);
            $this->session->set_flashdata('message', '
            user role telah ditambahkan!');
            redirect('admin/role');
        }
    }
    public function hapusrole($id)
    {
        $this->db->get_where('user_role', ['id' => $id])->row_array();
        $where = $this->db->where('id', $id);
        $this->db->delete('user_role', $where);
        $this->session->set_flashdata('message', '
        user role telah dihapus !');
        redirect('admin/role');
    }

    public function role_akses($role_id)
    {
        $data['title'] = 'Change Access';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();
        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();


        $this->load->view('admin/templates/header_admin', $data);
        $this->load->view('admin/templates/sidebar_admin', $data);
        $this->load->view('admin/templates/topbar_admin', $data);
        $this->load->view('admin/roleakses', $data);
        $this->load->view('admin/templates/footer_admin');
    }

    public function changeakses()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_akses_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_akses_menu', $data);
        } else {
            $this->db->delete('user_akses_menu', $data);
        }
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
       This role has been changed.
      </div>');
    }
    public function changepass()
    {
        $data['title'] = 'Change Password Admin';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();



        $this->form_validation->set_rules('old_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('password_new', 'New Password', 'required|trim|min_length[6]|matches[password_new1]');
        $this->form_validation->set_rules('password_new1', 'Confrim New Pass', 'required|trim|min_length[6]|matches[password_new]');


        if ($this->form_validation->run() == false) {


            $this->load->view('admin/templates/header_admin', $data);
            $this->load->view('admin/templates/sidebar_admin', $data);
            $this->load->view('admin/templates/topbar_admin', $data);
            $this->load->view('admin/changepass', $data);
            $this->load->view('admin/templates/footer_admin');
        } else {
            $old_password = $this->input->post('old_password');
            $password_new = $this->input->post('password_new');
            if (!password_verify($old_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
       Password Lama Anda salah,Harap dicheck kembali!
      </div>');
                redirect('admin/changepass');
            } else {
                if ($old_password == $password_new) {
                    $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">
       Password Anda tidak boleh sama dengan yang lama!
      </div>');
                    redirect('admin/changepass');
                } else {
                    // password sudah mantab!    //
                    $password_hash = password_hash($password_new, PASSWORD_DEFAULT);
                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Password baru telah di terapkan!
               </div>');
                    redirect('admin/changepass');
                }
            }
        }
    }

    public function pendaftar()
    {
        $data['title'] = 'Calon Santri';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['pendaftar'] = $this->db->get('pendaftaran')->result_array();
        $this->load->view('admin/templates/header_admin', $data);
        $this->load->view('admin/templates/sidebar_admin', $data);
        $this->load->view('admin/templates/topbar_admin', $data);
        $this->load->view('admin/pendaftar', $data);
        $this->load->view('admin/templates/footer_admin');
    }

    public function approve($id)
    {

        $update = [
            'is_approve' => 1
        ];

        $this->db->update('pendaftaran', $update, ['id' => $id]);
        $this->send_email($id);
        redirect('admin/pendaftar');
    }
    public function decline($id)
    {
        $data = $this->db->get('pendaftaran', array('id' => $id))->row();
        unlink('./upload/img/' . $data->photo);
        $data = $this->db->get('pendaftaran', array('id' => $id))->row();
        unlink('./upload/img/' . $data->bukti);

        $where = array('id' => $id);
        $this->db->delete('pendaftaran', $where);
        $this->session->set_flashdata('message', '
        Calon Santri ini sudah dihapus !');
        redirect('admin/pendaftar');
    }

    public function send_email($id)
    {
        $user = $this->db->get_where('pendaftaran', array('id' => $id))->row();


        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl//smtp.googlemail.com';
        $config['smtp_user'] = 'pendaftaranmataqu@gmail.com';
        $config['smtp_pass'] =  'gunadarma2016';
        $config['smtp_port'] = 25;
        $config['mailtype'] = 'html';
        $config['charset'] = 'Iso-8859-1';
        $config['crlf'] = "\r\n";
        $config['newline'] = "\r\n";


        $this->load->library('email', $config);
        $this->load->initialize($config);
        // Data Email
        $this->email->set_newline("\r\n");
        $this->email->from('mataqu@gmail.com', 'Pondok Pesantren Takhfiz Quran Mataqu');
        $this->email->to($user->email);
        $this->email->subject('Unduh Kartu Pendaftaran');
        $message = ' Download Kartu pendaftaran dengan click link dibawah ini ';
        $message .=  'http://localhost/Pesantren/document/index/' . $id . '>';

        $this->email->message($message);
        // $this->email->message('<html>Download Kartu pendaftaran dengan clink link dibawah ini : <br> <a href="http://localhost/Pesantren/document/index/' . $id . '"> Unduh Kartu Pendaftaran </a></html>');
        // $this->email->message("<a href='http://localhost/Pesantren/document/index/" . $id . "'> Unduh kartu </a>");

        if ($this->email->send()) {
            $this->session->set_flashdata('message', '
        email telah dikirim !');
        } else {
            echo show_error($this->email->print_debugger());
        }
    }
    public function berita()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['berita'] = $this->db->get('berita')->result_array();

        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');
        $this->form_validation->set_rules('berita', 'berita', 'required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'post artikel';
            $this->load->view('admin/berita/templates/header_admin', $data);
            $this->load->view('admin/berita/templates/sidebar_admin', $data);
            $this->load->view('admin/berita/templates/topbar_admin', $data);
            $this->load->view('admin/berita/berita', $data);
            $this->load->view('admin/berita/templates/footer_admin');
        } else {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '2048';
            $config['upload_path'] = './upload/img/';

            $this->load->library('upload', $config);

            $this->upload->do_upload('gambar');
            $new_image = $this->upload->data('file_name');

            $insert =
                [
                    'judul' => $this->input->post('judul'),
                    'berita' => $this->input->post('berita'),
                    'gambar' => $new_image,
                    'kategori' => $this->input->post('kategori'),
                    'date_created' => time()
                ];
            $this->db->insert('berita', $insert);
            $this->session->set_flashdata('message', '
            Berita Berhasil di tambahkan !');
            redirect('admin/kelolaberita');
        }
    }
    public function kelolaberita()
    {
        $data['title'] = 'Kelola Artikel';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['kelola'] = $this->db->get('berita')->result_array();

        $this->load->view('admin/berita/kelola/templates/header_admin', $data);
        $this->load->view('admin/berita/kelola/templates/sidebar_admin', $data);
        $this->load->view('admin/berita/kelola/templates/topbar_admin', $data);
        $this->load->view('admin/berita/kelola/kelolaberita', $data);
        $this->load->view('admin/berita/kelola/templates/footer_admin');
    }

    public function updateberita($id)
    {
        $data['title'] = 'edit artikel';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['editberita'] = $this->db->get_where('berita', ['id' => $id])->row_array();

        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');
        $this->form_validation->set_rules('berita', 'berita', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('admin/berita/templates/header_admin', $data);
            $this->load->view('admin/berita/templates/sidebar_admin', $data);
            $this->load->view('admin/berita/templates/topbar_admin', $data);
            $this->load->view('admin/berita/editberita', $data);
            $this->load->view('admin/berita/templates/footer_admin');
        } else {
            $judul = $this->input->post('judul');
            $kategori = $this->input->post('kategori');
            $berita = $this->input->post('berita');
            $upload_image = $_FILES['gambar']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['overwrite'] = true;
                $config['upload_path'] = './upload/img/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('gambar')) {
                    $old_image = $data['berita']['gambar'];
                    if ($old_image != ['gambar' => $id]) {
                        unlink(FCPATH . './upload/img/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->db->set('judul', $judul);
            $this->db->set('kategori', $kategori);
            $this->db->set('berita', $berita);
            $this->db->where('id', $id);
            $this->db->update('berita');
            $this->session->set_flashdata('message', '
            berita telah diupdate !');
            redirect('admin/kelolaberita');
        }
    }
    public function deleteberita($id)
    {
        $data = $this->db->get_where('berita', ['id' => $id])->row_array();
        unlink('./upload/img/' . $data['gambar']);
        $where = $this->db->where('id', $id);
        $this->db->delete('berita', $where);
        $this->session->set_flashdata('message', '
        berita telah dihapus !');
        redirect('admin/kelolaberita');
    }

    public function message()
    {
        $data['title'] = 'Pesan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['hubungi_kami'] = $this->db->get('hubungi_kami')->result_array();

        $this->load->view('admin/kontak/templates/header_admin', $data);
        $this->load->view('admin/kontak/templates/sidebar_admin', $data);
        $this->load->view('admin/kontak/templates/topbar_admin', $data);
        $this->load->view('admin/kontak/hubungi_kami', $data);
        $this->load->view('admin/kontak/templates/footer_admin');
    }
    public function lihatpesan($id)
    {
        $data['title'] = 'Lihat Pesan Pengunjung';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kontak'] = $this->db->get_where('hubungi_kami', ['id_saran' => $id])->row_array();

        $this->load->view('admin/kontak/templates/header_admin', $data);
        $this->load->view('admin/kontak/templates/sidebar_admin', $data);
        $this->load->view('admin/kontak/templates/topbar_admin', $data);
        $this->load->view('admin/kontak/lihatpesan', $data);
        $this->load->view('admin/kontak/templates/footer_admin');
    }

    public function send_mail($id)
    {
        $saran = $this->db->get_where('hubungi_kami', array('id' => $id))->row();

        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl//smtp.googlemail.com',
            'smtp_user' => 'pendaftaranmataqu@gmail.com',
            'smtp_pass' =>  'gunadarma2016',
            'smtp_port' => 25,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        ];

        $this->load->library('email', $config);
        $this->load->initialize($config);
        // Data Email

        $this->email->from('mataqu@gmail.com', 'Pondok Pesantren Takhfiz Quran Mataqu');
        $this->email->to($saran->email);
        $this->email->subject('Saran Anda Diterima ');
        $this->email->message(' TERIMA KASIH ATAS PERHATIANNYA SARAN ANDA SANGAT MEMBANTU SEKALI ' . $id);

        if ($this->email->send()) {
            $this->session->set_flashdata('message', '
        email telah dikirim !');
        } else {
            echo show_error($this->email->print_debugger());
        }
    }
    public function isread($id)
    {

        $this->db->set('is_read', 1);
        $this->db->where('id_saran', $id);
        $this->db->update('hubungi_kami');
        $this->send_email($id);
        redirect('admin/message');
    }


    public function hapuspesan($id)
    {
        $where = array('id_saran' => $id);
        $this->db->delete('hubungi_kami', $where);
        $this->session->set_flashdata('message', '
            Data ini telah dihapus !');
        redirect('admin/message');
    }

    public function tambahgambar()
    {
        $data['title'] = 'gambar';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['galeri'] = $this->db->get('galeri')->result_array();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('image_category', 'image_category', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/templates/header_admin', $data);
            $this->load->view('admin/templates/sidebar_admin', $data);
            $this->load->view('admin/templates/topbar_admin', $data);
            $this->load->view('admin/gambar', $data);
            $this->load->view('admin/templates/footer_admin');
        } else {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '2048';
            $config['upload_path'] = './upload/img/';

            $this->load->library('upload', $config);

            $this->upload->do_upload('image');
            $new_image = $this->upload->data('file_name');
            $insert = [
                'caption' => $this->input->post('title'),
                'gambar' => $new_image,
                'kategori' => $this->input->post('image_category'),
            ];
            $this->db->insert('galeri', $insert);
            $this->session->set_flashdata('message', '
            Data gambar baru berhasil ditambahkan !');
            redirect('admin/tambahgambar');
        }
    }
    public function editgambar($id)
    {
        $data['title'] =  'Edit Gambar';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['editgambar'] = $this->db->get_where('galeri', ['id' => $id])->row_array();

        $this->form_validation->set_rules('caption', 'Caption', 'required');
        $this->form_validation->set_rules('image_category', 'image_category', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('admin/templates/header_admin', $data);
            $this->load->view('admin/templates/sidebar_admin', $data);
            $this->load->view('admin/templates/topbar_admin', $data);
            $this->load->view('admin/editgambar', $data);
            $this->load->view('admin/templates/footer_admin');
        } else {
            $title = $this->input->post('caption');
            $image_category = $this->input->post('image_category');
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['overwrite'] = true;
                $config['upload_path'] = './upload/img/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('gambar')) {
                    $old_image = $data['editgambar']['gambar'];
                    if ($old_image != ['gambar' => $id]) {
                        unlink(FCPATH . './upload/img/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->db->set('caption', $title);
            $this->db->set('kategori', $image_category);
            $this->db->where('id', $id);
            $this->db->update('galeri');
            $this->session->set_flashdata('message', '
            gambar telah diupdate !');
            redirect('admin/tambahgambar');
        }
    }
    public function deletegambar($id)
    {
        $data = $this->db->get_where('galeri', ['id' => $id])->row_array();
        unlink('./upload/img/' . $data['gambar']);

        $where = array('id' => $id);
        $this->db->delete('galeri', $where);
        $this->session->set_flashdata('message', '
        Data gambar berhasil dihapus !');
        redirect('admin/tambahgambar');
    }

    public function tambahvideo()
    {
        $data['title'] = 'video';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['video'] = $this->db->get('video')->result_array();


        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('URL', 'url', 'required');
        $this->form_validation->set_rules('vid_kategori', 'Vid_kategori', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('admin/templates/header_admin', $data);
            $this->load->view('admin/templates/sidebar_admin', $data);
            $this->load->view('admin/templates/topbar_admin', $data);
            $this->load->view('admin/video', $data);
            $this->load->view('admin/templates/footer_admin');
        } else {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '2048';
            $config['upload_path'] = './upload/img/';

            $this->load->library('upload', $config);

            $this->upload->do_upload('image');
            $new_image = $this->upload->data('file_name');
            $insert = [
                'name_id' => $this->input->post('title'),
                'gambar' => $new_image,
                'url' => $this->input->post('URL'),
                'kategori' => $this->input->post('vid_kategori'),
                'date' => time()

            ];
            $this->db->insert('video', $insert);
            $this->session->set_flashdata('message', '
            video baru berhasil ditambah !');
            redirect('admin/tambahvideo');
        }
    }

    public function editvideo($id)
    {
        $data['title'] =  'Edit Video';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['editvideo'] = $this->db->get_where('video', ['id' => $id])->row_array();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('URL', 'url', 'required');


        if ($this->form_validation->run() == false) {

            $this->load->view('admin/templates/header_admin', $data);
            $this->load->view('admin/templates/sidebar_admin', $data);
            $this->load->view('admin/templates/topbar_admin', $data);
            $this->load->view('admin/editvideo', $data);
            $this->load->view('admin/templates/footer_admin');
        } else {
            $title = $this->input->post('title');
            $url = $this->input->post('URL');
            // $tanggal =
            //     [
            //         'date' => time(),
            //     ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['overwrite'] = true;
                $config['upload_path'] = './upload/img/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('gambar')) {
                    $old_image = $data['editvideo']['gambar'];
                    if ($old_image != ['gambar' => $id]) {
                        unlink(FCPATH . './upload/img/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->db->set('name_id', $title);
            $this->db->set('url', $url);
            // $this->db->set($tanggal);
            $this->db->where('id', $id);
            $this->db->update('video');
            $this->session->set_flashdata('message', 'video telah diupdate !');
            redirect('admin/tambahvideo');
        }
    }
    public function hapusvideo($id)
    {
        $data = $this->db->get_where('video', ['id' => $id])->row_array();
        unlink('./upload/img/' . $data['gambar']);
        $where = array('id' => $id);
        $this->db->delete('video', $where);
        $this->session->set_flashdata('message', '
        video telah dihapus !');
        redirect('admin/tambahvideo');
    }
}
