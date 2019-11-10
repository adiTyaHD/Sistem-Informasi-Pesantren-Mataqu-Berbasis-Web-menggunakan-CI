<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Manage Menu';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('user_menu')->result_array();


        $this->form_validation->set_rules('menu', 'Menu', 'required');
        if ($this->form_validation->run() == false) {

            $this->load->view('admin/templates/header_admin', $data);
            $this->load->view('admin/templates/sidebar_admin', $data);
            $this->load->view('admin/templates/topbar_admin', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('admin/templates/footer_admin');
        } else {
            $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('message', 'Menu baru berhasil ditambahkan !');
            redirect('menu');
        }
    }
    public function updatemenuu($id)
    {
        $data['title'] =  'Menu Management Edit';
        $data['menu'] = $this->db->get_where('user_menu', ['id' => $id])->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->form_validation->set_rules('title', 'Title', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/templates/header_admin', $data);
            $this->load->view('admin/templates/sidebar_admin', $data);
            $this->load->view('admin/templates/topbar_admin', $data);
            $this->load->view('menu/edit', $data);
            $this->load->view('admin/templates/footer_admin');
        } else {
            $update = [
                'menu' => $this->input->post('title'),
            ];
            $this->db->update('user_menu', $update, ['id' => $id]);
            $this->session->set_flashdata('message', '
            Menu berhasil di Update!');
            redirect('menu/index');
        }
    }
    public function deletemenuu($id)
    {
        $this->session->set_flashdata('message', '
            Menu berhasil dihapus !');
        $this->db->delete('user_menu', ['id' => $id]);
        redirect('menu/index');
    }

    public function subMenu()
    {
        $data['title'] =  'Sub Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $querysubMenu = "SELECT `user_sub_menu`.*,`user_menu`.`menu`
       FROM `user_sub_menu` JOIN `user_menu` ON `user_sub_menu`.`menu_id`
       = `user_menu`.`id`";

        $data['subMenu'] = $this->db->query($querysubMenu)->result_array();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'icon', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/templates/header_admin', $data);
            $this->load->view('admin/templates/sidebar_admin', $data);
            $this->load->view('admin/templates/topbar_admin', $data);
            $this->load->view('menu/submenu', $data);
            $this->load->view('admin/templates/footer_admin');
        } else {
            $insert = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            ];
            $this->db->insert('user_sub_menu', $insert);
            $this->session->set_flashdata('message', '
            Submenu baru berhasil ditambahkan!');
            redirect('menu/subMenu');
        }
    }

    public function updateMenu($id)
    {
        $data['menu_edit'] = $this->db->get_where('user_sub_menu', ['id' => $id])->row_array();
        $data['title'] = 'Edit Submenu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $querysubMenu = "SELECT `user_sub_menu`.*,`user_menu`.`menu`
       FROM `user_sub_menu` JOIN `user_menu` ON `user_sub_menu`.`menu_id`
       = `user_menu`.`id`";

        $data['subMenu'] = $this->db->query($querysubMenu)->result_array();

        $this->load->view('admin/templates/header_admin', $data);
        $this->load->view('admin/templates/sidebar_admin', $data);
        $this->load->view('admin/templates/topbar_admin', $data);
        $this->load->view('menu/index_edit', $data);
        $this->load->view('admin/templates/footer_admin');
    }

    public function menuUpdate($id)
    {
        $data['title'] =  'Submenu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu_edit'] = $this->db->get_where('user_sub_menu', ['menu_id' => $id])->row_array();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $querysubMenu = "SELECT `user_sub_menu`.*,`user_menu`.`menu`
       FROM `user_sub_menu` JOIN `user_menu` ON `user_sub_menu`.`menu_id`
       = `user_menu`.`id`";

        $data['subMenu'] = $this->db->query($querysubMenu)->result_array();

        $this->form_validation->set_rules('title', 'Title', 'required');
        if ($this->form_validation->run() == false) {

            $this->load->view('admin/templates/header_admin', $data);
            $this->load->view('admin/templates/sidebar_admin', $data);
            $this->load->view('admin/templates/topbar_admin', $data);
            $this->load->view('menu/index_edit', $data);
            $this->load->view('admin/templates/footer_admin');
        } else {
            $update = [
                'title' => $this->input->post('title'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'menu_id' => $this->input->post('menu_id'),
            ];
            $this->db->update('user_sub_menu ', $update, ['id' => $id]);
            $this->session->set_flashdata('message', '
            submenu berhasil di update !');
            redirect('menu/subMenu');
        }
    }

    public function deleteMenu($id)
    {
        $this->session->set_flashdata('message', '
        Submenu Berhasil di delete !');
        $this->db->delete('user_sub_menu', ['id' => $id]);
        redirect('menu/subMenu');
    }
}
