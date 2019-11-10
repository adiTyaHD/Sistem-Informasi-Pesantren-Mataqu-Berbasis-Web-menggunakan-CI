<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Pesantren Takhfiz Al-Quran Mataqu';
        $this->db->where('kategori', 1);
        $this->db->limit(6);
        $this->db->order_by('date', 'DESC');
        $data['video'] = $this->db->get('video')->result_array();
        $this->db->where('kategori', 1);
        $data['kegiatan'] = $this->db->get('galeri')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('index');
        $this->load->view('templates/footer');
    }

    public function program()
    {
        $data['title'] = 'Program : Takhfiz Quran Mataqu';
        $this->load->view('program/templates/header', $data);
        $this->load->view('program/program');
        $this->load->view('program/templates/footer');
    }
    public function Santrialquran()
    {
        $data['title'] = 'Program Santri Al-Quran Pesantren Takhfiz Al-Quran Mataqu';
        $this->db->where('kategori', 15);
        $data['brosure'] = $this->db->get('galeri')->result_array();
        $this->db->where('kategori', 1);
        $data['jadwal'] = $this->db->get('jadwal_santri')->result_array();
        $this->db->where('kategori', 3);
        $data['video'] = $this->db->get('video')->result_array();
        $this->load->view('program/templates/header', $data);
        $this->load->view('program/santri/alquran', $data);
        $this->load->view('program/templates/footer');
    }
    public function Santritakhosus()
    {
        $data['title'] = 'Program Santri Takhosus Pesantren Takhfiz Al-Quran Mataqu';
        $this->db->where('kategori', 15);
        $data['brosure'] = $this->db->get('galeri')->result_array();
        $this->db->where('kategori', 1);
        $data['jadwal'] = $this->db->get('jadwal_santri')->result_array();
        $this->db->where('kategori', 4);
        $data['video'] = $this->db->get('video')->result_array();
        $this->load->view('program/templates/header', $data);
        $this->load->view('program/santri/takhosus', $data);
        $this->load->view('program/templates/footer');
    }
    public function Santrikaderisasi()
    {
        $data['title'] = 'Program Santri kaderisasi Pesantren Takhfiz Al-Quran Mataqu';
        $this->load->view('program/templates/header', $data);
        $this->load->view('program/santri/kaderisasi');
        $this->load->view('program/templates/footer');
    }
    public function Santridauroh()
    {
        $data['title'] = 'Program Dauroh Pesantren Takhfiz Al-Quran Mataqu';
        $this->db->where('kategori', 14);
        $data['brosure'] = $this->db->get('galeri')->result_array();
        $this->db->where('kategori', 2);
        $data['jadwal'] = $this->db->get('jadwal_santri')->result_array();
        $this->db->where('kategori', 2);
        $data['video'] = $this->db->get('video')->result_array();
        $this->load->view('program/templates/header', $data);
        $this->load->view('program/santri/dauroh', $data);
        $this->load->view('program/templates/footer');
    }


    public function pengurus()
    {
        $data['title'] = 'Pengurus : Pesantren Takhfiz Al-Quran Mataqu';
        $this->load->view('pengurus/templates/header', $data);
        $this->load->view('pengurus/pengurus');
        $this->load->view('pengurus/templates/footer');
    }

    public function detail($id)
    {
        $data['title'] = 'Detail : Berita Mataqu News';
        $this->db->where('id', $id);
        $data['detailwakaf'] = $this->db->get('berita')->row();
        $this->load->view('info/templates/header', $data);
        $this->load->view('news/detailnews');
        $this->load->view('info/templates/footer');
    }

    public function info()
    {
        $data['title'] = 'informasi : Takhfiz Quran Mataqu';
        $this->db->where('kategori', 2);
        $this->db->limit(4);
        $this->db->order_by('date_created', 'DESC');
        $data['penghafal'] = $this->db->get('berita')->result_array();

        $this->db->limit(3);
        $this->db->order_by('date_created', 'DESC');
        $this->db->where('kategori', 4);
        $data['wakaf'] = $this->db->get('berita')->result_array();
        $this->load->view('info/templates/header', $data);
        $this->load->view('info/info', $data);
        $this->load->view('info/templates/footer');
    }

    public function panduan()
    {
        $data['title'] = 'Panduan Hafalan : Takhfiz Quran Mataqu';
        $this->load->model('news_model', 'berita');

        //CONFIG
        $config['base_url'] = 'http://localhost/Pesantren/home/panduan';
        $config['total_rows'] = $this->berita->countAllBerita2();
        $config['per_page'] = 6;


        // STYLING
        $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['First_link'] = 'First';
        $config['First_tag_open'] = '<li class="page-item">';
        $config['First_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['Next_link'] = '&raquo';
        $config['Next_tag_open'] = '<li class="page-item">';
        $config['Next_tag_close'] = '</li>';

        $config['Prev_link'] = '&laquo';
        $config['Prev_tag_open'] = '<li class="page-item">';
        $config['Prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class ="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        //Init

        $this->pagination->initialize($config);


        $data['start'] = $this->uri->segment(3);
        $data['berita'] = $this->berita->getBerita1($config['per_page'], $data['start']);
        // $this->db->where('kategori', 3);
        // $this->db->order_by('date_created', 'DESC');
        // $data['berita'] = $this->db->get('berita')->result_array();

        if ($this->input->post('keyword')) {
            $keyword = $this->input->post('keyword', true);
            $this->db->like('judul', $keyword);
            // $this->db->where('kategori', 3);
            $data['berita'] = $this->berita->getAllBerita();
        }
        $this->load->view('info/laporan/templates/header', $data);
        $this->load->view('info/laporan/laporanhafal', $data);
        $this->load->view('info/laporan/templates/footer');
    }

    public function laporanhafalan()
    {
        $data['title'] = 'Laporan Hafalan : Takhfiz Quran Mataqu';
        $this->load->model('news_model', 'berita');

        //CONFIG
        $config['base_url'] = 'http://localhost/Pesantren/home/laporanhafalan';
        $config['total_rows'] = $this->berita->countAllBerita3();
        $config['per_page'] = 6;


        // STYLING
        $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['First_link'] = 'First';
        $config['First_tag_open'] = '<li class="page-item">';
        $config['First_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['Next_link'] = '&raquo';
        $config['Next_tag_open'] = '<li class="page-item">';
        $config['Next_tag_close'] = '</li>';

        $config['Prev_link'] = '&laquo';
        $config['Prev_tag_open'] = '<li class="page-item">';
        $config['Prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class ="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        //Init

        $this->pagination->initialize($config);


        $data['start'] = $this->uri->segment(3);
        $data['berita'] = $this->berita->getBerita2($config['per_page'], $data['start']);

        // $this->db->where('kategori', 2);
        // $this->db->order_by('date_created', 'DESC');
        // $data['berita'] = $this->db->get('berita')->result_array();
        if ($this->input->post('keyword')) {
            $keyword = $this->input->post('keyword', true);
            $this->db->like('judul', $keyword);
            // $this->db->where('kategori', 2);
            $data['berita'] = $this->berita->getAllBerita();
        }

        $this->load->view('info/laporan/templates/header', $data);
        $this->load->view('info/laporan/panduanhafal', $data);
        $this->load->view('info/laporan/templates/footer');
    }


    public function news()
    {
        $data['title'] = 'Artikel : Takhfiz Quran Mataqu';

        $this->load->model('news_model', 'berita');

        //CONFIG
        $config['base_url'] = 'http://localhost/Pesantren/home/news';
        $config['total_rows'] = $this->berita->countAllBerita1();
        $config['per_page'] = 6;


        // STYLING
        $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['First_link'] = 'First';
        $config['First_tag_open'] = '<li class="page-item">';
        $config['First_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['Next_link'] = '&raquo';
        $config['Next_tag_open'] = '<li class="page-item">';
        $config['Next_tag_close'] = '</li>';

        $config['Prev_link'] = '&laquo';
        $config['Prev_tag_open'] = '<li class="page-item">';
        $config['Prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class ="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        //Init

        $this->pagination->initialize($config);

        if ($this->input->post('keyword')) {
            $data['keyword'] = $this->input->post('keyword');
            // $data['berita'] = $this->berita->getAllBerita();
        } else {
            $data['keyword'] = null;
        }



        $data['start'] = $this->uri->segment(3);
        $data['berita'] = $this->berita->getBerita($config['per_page'], $data['start'], $data['keyword']);
        // $this->db->where('kategori', 1);

        // $this->db->order_by('date_created', 'DESC');
        // $data['berita'] = $this->db->get('berita')->result_array();


        $this->load->view('news/templates/header', $data);
        $this->load->view('news/news', $data);
        $this->load->view('news/templates/footer');
    }


    public function contact()
    {
        $data['title'] = 'hubungi kami : Takhfiz Quran Mataqu';

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', ['required' => 'nama harus diisi ! ']);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
            'valid_email' => 'Email harus benar ! ',
            'required' => 'Email harus diisi !'
        ]);

        $this->form_validation->set_rules('phone', 'Phone', 'required|trim', ['required' => 'telfon tidak boleh kosong ! ']);
        $this->form_validation->set_rules('pesan', 'Pesan', 'required|trim', ['required' => 'Saran harus diisi ! ']);
        $this->form_validation->set_rules('g-recaptcha-response', 'recaptcha validation', 'required|callback_validate_captcha');
        $this->form_validation->set_message('validate_captcha', 'Please check the the captcha form');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Hubungi Kami : Takhfiz Quran Mahad mataqu';
            $this->load->view('contact/templates/header', $data);
            $this->load->view('contact/contact');
            $this->load->view('contact/templates/footer');
        } else {

            $data =
                [
                    'nama_lengkap' => $this->input->post('nama'),
                    'email' => $this->input->post('email'),
                    'phone' => $this->input->post('phone'),
                    'saran' => $this->input->post('pesan'),
                    'is_read' => 0,


                ];
            $this->db->insert('hubungi_kami', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Saran telah diterima, Terimakasih. Atas perhatiannya :D
          </div>');
            redirect('home/contact');
        }
    }
    function validate_captcha()
    {
        $recaptcha = trim($this->input->post('g-recaptcha-response'));
        $userIp = $this->input->ip_address();
        $secret = '6LfFCKMUAAAAAGndpJUyWXeULtlS7yiW-bsDpL4h';
        $data = array(
            'secret' => "$secret",
            'response' => "$recaptcha",
            'remoteip' => "$userIp"
        );

        $verify = curl_init();
        curl_setopt($verify, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
        curl_setopt($verify, CURLOPT_POST, true);
        curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($verify, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($verify);
        $status = json_decode($response, true);
        if (empty($status['success'])) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function profile()
    {
        $data['title'] = 'Profile : Takhfiz Quran mataqu';
        $this->db->where('kategori', 13);
        $this->db->limit(3);
        $data['dokumen'] = $this->db->get('galeri')->result_array();
        $this->load->view('profile/templates/header', $data);
        $this->load->view('profile/profile', $data);
        $this->load->view('profile/templates/footer');
    }
    public function campborneo()
    {
        $data['title'] = 'fasilitas : Camp Borneo';
        $this->db->where('kategori', 5);
        $data['interior'] = $this->db->get('galeri')->result_array();

        $this->db->where('kategori', 6);
        $data['eksterior'] = $this->db->get('galeri')->result_array();
        $this->load->view('profile/templates/header', $data);
        $this->load->view('profile/fasilitas/camp-borneo');
        $this->load->view('profile/templates/footer');
    }
    public function villakembar()
    {

        $data['title'] = 'fasilitas : Villa Kembar';
        $this->db->where('kategori', 7);
        $data['interior'] = $this->db->get('galeri')->result_array();

        $this->db->where('kategori', 8);
        $data['eksterior'] = $this->db->get('galeri')->result_array();
        $this->load->view('profile/templates/header', $data);
        $this->load->view('profile/fasilitas/villa-kembar');
        $this->load->view('profile/templates/footer');
    }
    public function santriputra()
    {
        $data['title'] = 'fasilitas : Santri Putra ';
        $this->db->where('kategori', 9);
        $data['interior'] = $this->db->get('galeri')->result_array();

        $this->db->where('kategori', 10);
        $data['eksterior'] = $this->db->get('galeri')->result_array();
        $this->load->view('profile/templates/header', $data);
        $this->load->view('profile/fasilitas/asramaputra');
        $this->load->view('profile/templates/footer');
    }
    public function santriputri()
    {
        $data['title'] = 'fasilitas : Santri Putri';
        $this->db->where('kategori', 11);
        $data['interior'] = $this->db->get('galeri')->result_array();

        $this->db->where('kategori', 12);
        $data['eksterior'] = $this->db->get('galeri')->result_array();
        $this->load->view('profile/templates/header', $data);
        $this->load->view('profile/fasilitas/asramaputri');
        $this->load->view('profile/templates/footer');
    }
}
