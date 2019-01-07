<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('register_model');
    }

    public function index()
    {
        $data = array(
            'username'         => $this->input->post('username'),
            'password'         => md5($this->input->post('password')),
            'nama'             => $this->input->post('nama'),
            'email'            => $this->input->post('email'),
            'tanggal_lahir'    => $this->input->post('tanggal_lahir'),
            'no_telp'          => $this->input->post('no_telp'),
            'foto'             => 'default.jpg',
            'alamat'           => $this->input->post('alamat')    ,
            'level'            => '2',
        );

        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('nama','Nama Lengkap','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('no_telp','No. Telephone','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">','</span>');

        if ($this->form_validation->run()) {

            $file = $_FILES;
            // var_dump($file['foto']["name"]); die('a');
            if (!empty($file['foto']["name"])) {
                $filename = $file['foto']["name"]; // $post['id'].'-'.$mapel;

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

        $this->load->view('register', $data);
    }
    // user input data form
    // lakukan form validasi Data
    // kalau benar maka muncul notifikasi data user berhasil ditambah
    // kalau gagal kembali lagi ke halaman register untuk memeriksa inputan form
}

/**
* End of file ./controller/Admin.php
* untuk login dan daftar
*/
