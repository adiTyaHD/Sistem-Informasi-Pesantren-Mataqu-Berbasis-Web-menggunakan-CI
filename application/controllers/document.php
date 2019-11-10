<?php

defined('BASEPATH') or exit('No direct script access allowed');

class document extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('pdf_report');
    }

    public function index($id)
    {
        $data['pendaftar'] = $this->db->get_where('pendaftaran', ['id' => $id])->row_array();
        $this->load->view('document/kartu_pendaftaran', $data);
    }

    public function offline()
    {
        $this->load->view('document/kartu_pendaftaran_off');
    }
}
