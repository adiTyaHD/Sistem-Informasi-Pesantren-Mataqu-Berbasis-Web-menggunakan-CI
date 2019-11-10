<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar extends CI_Controller
{
    public function santridauroh()
    {
        $data['title'] = 'Info Pendaftaran Dauroh ';
        $this->db->where('kategori', 2);
        $data['galeri'] = $this->db->get('galeri')->result_array();

        $this->db->where('kategori', 14);
        $data['brosure'] = $this->db->get('galeri')->result_array();
        $this->load->view('info/templates/header', $data);
        $this->load->view('info/infodauroh');
        $this->load->view('info/templates/footer', $data);
    }
    public function takhosus()
    {
        $data['title'] = 'Info Pendaftaran Takhosus ';
        $this->db->where('kategori', 4);
        $data['galeri'] = $this->db->get('galeri')->result_array();
        $this->db->where('kategori', 15);
        $data['brosure'] = $this->db->get('galeri')->result_array();
        $this->db->where('kategori', 4);
        $data['video'] = $this->db->get('video')->result_array();
        $this->load->view('info/templates/header', $data);
        $this->load->view('info/infotakhosus');
        $this->load->view('info/templates/footer', $data);
    }
    public function santrireguler()
    {
        $data['title'] = 'Info Pendaftaran Santri Al-Quran ';
        $this->db->where('kategori', 3);
        $data['galeri'] = $this->db->get('galeri')->result_array();
        $this->db->where('kategori', 15);
        $data['brosure'] = $this->db->get('galeri')->result_array();
        $this->db->where('kategori', 3);
        $data['video'] = $this->db->get('video')->result_array();
        $this->load->view('info/templates/header', $data);
        $this->load->view('info/inforeguler');
        $this->load->view('info/templates/footer', $data);
    }

    public function pendaftaran()

    {
        $this->form_validation->set_rules('nisn', 'Nisn', 'required|trim', ['required' => 'NISN harus benar ']);
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', ['required' => 'nama harus diisi ']);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[pendaftaran.email]', ['required' => 'email harus diisi dengan benar']);
        $this->form_validation->set_rules('jkel', 'Jkel', 'required|trim', ['required' => 'Pilih salah satu ']);
        $this->form_validation->set_rules('birthdate', 'Birthdate', 'required|trim', ['required' => 'Tanggal lahir harus diisi ']);
        $this->form_validation->set_rules('nama-wali', 'Nama-wali', 'required|trim', ['required' => 'nama-wali harus diisi ']);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', ['required' => 'Alamat harus diisi ']);
        $this->form_validation->set_rules('telp', 'Telp', 'required|trim', ['required' => 'No.Telp harus diisi ']);
        $this->form_validation->set_rules('kategori_santri', 'Kategori_santri', 'required|trim', ['required' => 'pilih kategori terlebih dahulu ']);
        $this->form_validation->set_rules('lulus', 'Lulus', 'required|trim', ['required' => ' harus diisi ']);
        $this->form_validation->set_rules('sederajat1', 'Sederajat1', 'required|trim', ['required' => ' harus diisi ']);
        $this->form_validation->set_rules('sederajat2', 'Sederajat2', 'required|trim', ['required' => ' harus diisi ']);
        $this->form_validation->set_rules('pesantren', 'Pesantren', 'required|trim', ['required' => ' harus diisi ']);
        $this->form_validation->set_rules('juz', 'Juz', 'required|trim', ['required' => 'harus diisi ']);
        // $this->form_validation->set_rules('g-recaptcha-response', 'recaptcha validation', 'required|callback_validate_captcha');
        // $this->form_validation->set_message('validate_captcha', 'Please check the the captcha form');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'form pendaftaran online santri Al-Quran Mahad Mataqu';
            $this->load->view('info/templates/header', $data);
            $this->load->view('pendaftaran/pendaftaransantri');
            $this->load->view('info/templates/footer');
        } else {

            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '2048';
            $config['upload_path'] = './upload/img/';

            $this->load->library('upload', $config);

            $this->upload->do_upload('photo');
            $new_image = $this->upload->data('file_name');

            $config1['allowed_types'] = 'gif|jpg|png|zip|tar|rar';
            $config1['max_size'] = '2048';
            $config1['upload_path'] = './upload/bukti/';

            $this->load->library('upload', $config1);

            $this->upload->do_upload('bukti', $config1);
            $new_image1 = $this->upload->data('file_name');

            $insert =
                [
                    'nisn' => $this->input->post('nisn'),
                    'nama_santri' => $this->input->post('nama'),
                    'email' => $this->input->post('email'),
                    'jkel' => $this->input->post('jkel'),
                    'birthdate' =>  date("d,F Y", strtotime($this->input->post('birthdate'))),
                    'kategori' => $this->input->post('kategori_santri'),
                    'nama_wali' => $this->input->post('nama-wali'),
                    'alamat' => $this->input->post('alamat'),
                    'telp' => $this->input->post('telp'),
                    'photo' => $new_image,
                    'lulusan' => $this->input->post('lulus'),
                    'sederajat1' => $this->input->post('sederajat1'),
                    'sederajat2' => $this->input->post('sederajat2'),
                    'pondok_pesantren' => $this->input->post('pesantren'),
                    'jml_juz' => $this->input->post('juz'),
                    'bukti' => $new_image1,

                ];
            $this->db->insert('pendaftaran', $insert);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            selamat pendaftaran anda berhasil dilakukan,Tunggu Konformasi Admin untuk mendapatkan kartu ujian 
          </div>');

            redirect('daftar/pendaftaran');
        }
    }
    function validate_captcha()
    {
        $recaptcha = trim($this->input->post('g-recaptcha-response'));
        $userIp = $this->input->ip_address();
        $secret = '6LfMEqoUAAAAAD_etZ8lvmK10Vbw0e0_galYZ0aV';
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
}
