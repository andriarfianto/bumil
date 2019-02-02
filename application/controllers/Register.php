<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('register_model');
        $this->load->model('user_model');
    }

    // fungsi pengecekan usia tanggal lahir
    public function validasi_tgllahir($date)
    {
        $birthday = new DateTime($date);
        $today = new DateTime();

        $interval = $today->diff($birthday);
        $usia_ibu = $interval->y;

        if ($usia_ibu < 17) {
            $this->form_validation->set_message('validasi_tgllahir', 'Umur anda terlalu muda, usia minimal 17 tahun');
            return FALSE;            
        }
        return TRUE;
        // var_dump($birthday->format('d/m/y')); die('dsh');
        // var_dump($interval->y." Tahun"); die('sajk');
    }

    // fungsi pengecekan email yang sudah ada didatabase
    public function check_emaillama($email_inputan) {
        $email_db = $this->user_model->checkEmailLama($email_inputan)->row();
        // var_dump($email_db); die('ds');

        if (!empty($email_db)) {
            $this->form_validation->set_message('check_emaillama', 'Email yang anda inputkan sudah ada');
            return FALSE;
        }
        return TRUE;
    }

    // fungsi pengecekan username yang sudah ada didatabase
    public function check_usernamelama($username_inputan) {
        $username_db = $this->user_model->checkUsernameLama($username_inputan)->row();
        // var_dump($username_db); die('ds');

        if (!empty($username_db)) {
            $this->form_validation->set_message('check_usernamelama', 'Username yang anda inputkan sudah ada');
            return FALSE;
        }
        return TRUE;
    }

    public function index()
    {
        // $username_inputan = $this->session->userdata('username');
        // $username_db = $this->user_model->checkUsernameLama($username_inputan)->row();
        // var_dump($username_db); die('ds');
        // var_dump($check); die('dsad');
        $data = array(
            'username'         => $this->input->post('username'),
            'password'         => md5($this->input->post('password')),
            'nama'             => $this->input->post('nama'),
            'email'            => $this->input->post('email'),
            'tanggal_lahir'    => $this->input->post('tanggal_lahir'),
            'no_telp'          => $this->input->post('no_telp'),
            'alamat'           => $this->input->post('alamat'),
            'level'            => '2',
            'foto'             => 'default.jpg',
        );

        // var_dump($data);
        $this->form_validation->set_rules('username','Username','required|callback_check_usernamelama');
        $this->form_validation->set_rules('email','Email','required|valid_email|callback_check_emaillama');

        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('nama','Nama Lengkap','required');
        
        $this->form_validation->set_rules('tanggal_lahir','Tanggal Lahir','required|callback_validasi_tgllahir');
        $this->form_validation->set_rules('no_telp','No. Telephone','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">','</span>');
        
        if ($this->form_validation->run()) {
        
            $file = $_FILES;
            // var_dump($file['foto']["name"]); die('a');
            if (!empty($file['foto']["name"])) {
                $filename = $file['foto']["name"]; // $post['id'].'-'.$mapel;
                // var_dump($filename); die('a');

                $config['upload_path']   = './upload/user/';
                $config['allowed_types'] = 'gif|jpg|png';
                // $config['max_size']      = 100;
                // $config['max_width']     = 1024;
                // $config['max_height']    = 768;
                $config['file_name'] 	 = $filename;

                $this->load->library('upload', $config);                

                if (!$this->upload->do_upload('foto')) {
                    echo $this->upload->display_errors();
                    // die('A');
                    $this->session->set_flashdata('gagal', 'Gagal upload foto user');
                    redirect(base_url('register'));
                    exit();
                }
                else {
                    // die('B');
                    $uploaded = $this->upload->data();
                    $data['foto'] = $uploaded['file_name'];
                    // var_dump($file); die('a');
                }                
            }          
            $this->register_model->save($data);

            $this->session->set_flashdata('success', 'Selamat! Akun anda berhasil terdaftar');

            redirect(base_url('register'));
        }
        // else {
        //     if (!empty($_POST)) die(validation_errors());
        // }

        $this->load->view('register', $data);
    }    
}

/**
* End of file ./controller/Admin.php
* untuk login dan daftar
*/
