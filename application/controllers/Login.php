<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }

    public function index()
    {
        $data['title'] = "Admin";
        $this->load->view('login', $data);
    }

    public function user_login()
    {
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">','</span>');

        if ($this->form_validation->run()) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            // model user - method cekUser
            // die('a');
            $result = $this->login_model->cekLogin($username, $password)->row();

            // var_dump($result); die('aaa');

            if (isset($result)) {
                $session_login = array(
                    "id_user"	=> $result->id_user,
                    "username"	=> $result->username,
                    "nama"		=> $result->nama,
                    "email"		=> $result->email,
                    "level"     => $result->level,
                );

                $this->session->set_userdata($session_login);

                // admin
                if ($this->session->userdata('level') == '1') {
                    $this->session->set_flashdata('success', '<h4> <i class="icon fa fa-check"></i> Success</h4> <p>Selamat anda berhasil login</p>');
                    redirect(base_url('admin/overview'),'refresh');
                }
                // ibu hamil
                elseif ($this->session->userdata('level') == '2') {
                    $this->session->set_flashdata('success', '<h4> <i class="icon fa fa-check"></i> Success</h4> <p>Selamat anda berhasil login</p>');
                    redirect(base_url('ibuhamil/dashboard'),'refresh');
                }
                // petugas
                elseif ($this->session->userdata('level') == '3') {
                    redirect(base_url('petugas/dashboard'),'refresh');
                }

                // var_dump($this->session); die('a');
            }
            else {
                $this->session->set_flashdata('pesan', 'Username dan password tidak valid');
                $this->load->view('login');
                // redirect(base_url('admin/overview'));
            }
        } else {
            $this->index();
        }
    }

    public function logout() {
        $this->session->unset_userdata(array('id_user','username','name', 'email'));

        $this->session->sess_destroy();

        redirect(base_url());
    }
}

/**
* End of file ./controller/Admin.php
* untuk login dan daftar
*/
