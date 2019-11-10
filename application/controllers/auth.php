<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()

    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('auth/index');
        }
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'password', 'required|trim');


        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Admin ';
            $this->load->view('auth/templates/header', $data);
            $this->load->view('auth/login');
            $this->load->view('auth/templates/footer');
        } else {  
            //validasi berhasil 
            $this->_login();
        }
    }

    private function _login()
    {

        $email    = $this->input->post('email');
        $password    = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        //jika usernya ada
        if ($user) {
            //jika usernya aktif 
            if ($user['is_active'] == 1) {
                //check passwordnya dulu ya 
                if (password_verify($password, $user['password'])) {

                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('admin/index');
                    } else {
                        redirect('user/tampiluser');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    WRONG PASSWORD!
                  </div>');
                    redirect('auth/index');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Sorry this email has not been activated!. 
              </div>');
                redirect('auth/index');
            }
            //user telah terdaftar 
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            This Email has not been registered!. 
          </div>');
            redirect('auth/index');
        }

        // siapkan token 
        $token = base64_encode(random_bytes(32));
        $user_token = [
            'email' => $email,
            'token' => $token,
            'data_created' => time()
        ];


        $this->db->insert('user', $data);
        $this->db->insert('user_token', $user_token);
        $this->sendmail($token, 'verify');
    }


    private function sendmail($token, $type)
    {

        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl//smtp.googlemail.com',
            'smtp_user' => 'adityafame09@gmail.com',
            'smtp_pass' =>  '085890019191adityaMaximum',
            'smtp_port' => 25,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        ];

        $this->load->library('email', $config);
        $this->load->initialize($config);

        $this->email->from('adityafame09@gmail.com', 'Pesantren');
        $this->email->to($this->input->post('email'));
        if ($type == 'verify') {

            $this->email->subject('Email Activation');
            $this->email->message('Click this link to verify your account : 
            
            <a href="' . base_url() . 'utama/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Activated </a>');
        } else if ($type == 'forgot') {

            $this->email->subject('RESET PASSWORD ');
            $this->email->message('Click this link to Reset your Password your account : 
            
            <a href="' . base_url() . 'auth/resetpassword?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '"> Reset Password </a>');
        }
        if ($this->email->send()) {
            return true;
        } else {

            echo $this->email->print_debugger();
            die;
        }
    }


    public function verify()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

            if ($user_token) {

                if (time() - $user_token['data_created'] < (60 * 60 * 24)) {
                    $this->db->set('is_active', 1);
                    $this->db->where('email', $email);
                    $this->db->update('user');

                    $this->db->delete('user_token', ['email' => $email]);
                    $this->session->set_flashdata('message', '<div class ="alert alert-success" role="alert"> ' . $email . 'Congratulations! This Mail has been Activated
                  </div>');
                    redirect('auth/index');
                } else {
                    $this->db->delete('user', ['email' => $email]);
                    $this->db->delete('user_token', ['email' => $email]);
                    $this->session->set_flashdata(' message ', '<div class ="alert alert-warning" role="alert">
                Email Activation Failed ! This Mail has been Expired 
                  </div>');
                    redirect('auth/index');
                }
            } else {

                $this->session->set_flashdata(' message ', ' <div class ="alert alert-warning" role="alert">
                Email Activation Failed ! Wrong Accesstoken  
                  </div>');
                redirect('auth/index');
            }
        } else {
            $this->session->set_flashdata(' message ', ' <div class ="alert alert-success" role="alert">
            Email Activation Failed ! Wrong Email  
              </div>');
            redirect('auth/index');
        }
    }

    public function forgot()

    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');


        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "Forgot Password";
            $this->load->view('auth/templates/header', $data);
            $this->load->view('auth/forgotpass');
            $this->load->view('auth/templates/footer');
        } else {
            $email = $this->input->post('email');
            $user = $this->db->get_where('user', ['email' => $email, 'is_active' => 1])->row_array();

            if ($user) {
                $token = base64_encode(random_bytes(32));
                $user_token = [
                    'email' => $email,
                    'token' => $token,
                    'data_created' => time()
                ];
                $this->db->insert('user_token', $user_token);
                $this->sendmail($token, 'forgot');
                $this->session->set_flashdata(' message', '<div class ="alert alert-danger" role="alert">
                 Plase check your email to reset your  password!
                  </div>');
                redirect('auth/forgot');
            } else {

                $this->session->set_flashdata('message', '<div class ="alert alert-danger" role="alert">
             Email is not Registered or Activated !
              </div>');
                redirect('auth/forgot');
            }
        }
    }
    public function resetpassword()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

            if ($user_token) {
                $this->session->set_userdata('reset_email', $email);
                $this->newreset();
            } else {
                $this->session->set_flashdata('message', '<div class ="alert alert-danger"role="alert">
                  Reset Password Failed ! Wrong Token.
                  </div>');
                redirect('auth/index');
            }
        } else {
            $this->session->set_flashdata('message', '<div class ="alert alert-danger" role="alert">
                 Reset Password Fail Please Check your email !
                  </div>');
            redirect('auth/index');
        }
    }

    public function newreset()
    {
        if (!$this->session->userdata('reset_email')) {
            redirect('auth/index');
        }
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]|matches[password1]');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password]');
        if ($this->form_validation->run() == FALSE) {

            $data['title'] = "New  Password";
            $this->load->view('auth/templates/header', $data);
            $this->load->view('auth/new_forgot');
            $this->load->view('auth/templates/footer');
        } else {
            $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
            $email = $this->session->userdata('reset_email');

            $this->db->set('password', $password);
            $this->db->set('email', $email);
            $this->db->update('user');
            $this->session->unset_userdata('reset_email');

            $this->session->set_flashdata('message', '<div class ="alert alert-success" role="alert">
                 Password Has been Changed,Please Login !
                  </div>');
            redirect('auth/index');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '<div  class="alert alert-success" role ="alert">
               you has been logged out your account !</div>');
        redirect('auth/index');
    }
    public function blocked()
    {
        $this->load->view('auth/blocked');
    }
}
