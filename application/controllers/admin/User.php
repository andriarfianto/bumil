<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function index()
    {
        $data['users'] = $this->user_model->getAll();
        $this->load->view('admin/user/list_user', $data);
    }

    public function profile()
    {
        // memanggil session
        $id = $this->session->userdata('id_user');
        $data['user'] = $this->user_model->getById($id);
        if (!$data['user']) show_404();

        // $this->load->view('admin/_partials/navbar', $data);
        $this->load->view('admin/user/profile', $data);
    }

    // edit profile user admin
    public function edit_profile($id = null)
    {
        // memanggil session
        if (!isset($id)) redirect('admin/user/profile');

        $data['user'] = $this->user_model->getById($id);
        if (!$data['user']) show_404();

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email','Email Address','required|valid_email');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('no_telp', 'No. Telephone', 'required|numeric');

        // if (!empty($_POST)) {
        //     var_dump($this->form_validation->run());
        //
        //     echo validation_errors();
        //     // var_dump(form_error('username'));
        //     die('fffff');
        //
        //     $post = $this->input->post();
        //     var_dump($post);
        //
        //     // var_dump($_POST);
        //     var_dump($_FILES);
        //     die('d');
        // }

        if ($this->form_validation->run()) {
            // die('a');

            $post_data = array(
                'username' => $this->input->post('username'),
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),                
                'alamat' => $this->input->post('alamat'),
                'no_telp' => $this->input->post('no_telp'),
                'foto' => 'default.jpg',
            );
            // var_dump($post_data); die('$post_data');

            // edit foto
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
                    redirect(base_url('admin/user/add'));
                    exit();
                }
                else {
                    // die('B');
                    $uploaded = $this->upload->data();
                    $post_data['foto'] = $uploaded['file_name'];
                    // var_dump($data); die('a');
                }
            }

            $this->user_model->update($post_data, $id);

            $this->session->set_flashdata('success', 'Data admin berhasil diubah');

            redirect(base_url('admin/user/profile'));
        }

        $this->load->view('admin/user/edit_profile', $data);
    }

    public function detail($id = null)
    {
        $data['user'] = $this->user_model->getById($id);
        if (!$data['user']) show_404();

        $this->load->view('admin/user/detail_user', $data);
    }

    // form untuk menampilkan
    // $data dipindah di model
    // jalankan validasi
    // load view ke list
    public function add()
    {
        $data = array(
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')),
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'level' => 2,
            'alamat' => $this->input->post('alamat'),
            'no_telp' => $this->input->post('no_telp'),
            'foto' => 'default.jpg',
        );

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email','Email Address','required|valid_email');
        // $this->form_validation->set_rules('level', 'Level User', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('no_telp', 'No. Telephone', 'required|numeric');


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
                    redirect(base_url('admin/user/add'));
                    exit();
                }
                else {
                    // die('B');
                    $uploaded = $this->upload->data();
                    $data['foto'] = $uploaded['file_name'];
                    // var_dump($file); die('a');
                }
            }
            $this->user_model->save($data);

            $this->session->set_flashdata('success', 'Data user berhasil ditambah');

            redirect(base_url('admin/user'));
        }

        $this->load->view('admin/user/new_user', $data);
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/user/');

        $data['user'] = $this->user_model->getById($id);
        if (!$data['user']) show_404();

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email','Email Address','required|valid_email');
        $this->form_validation->set_rules('level', 'Level User', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('no_telp', 'No. Telephone', 'required|numeric');

        if ($this->form_validation->run()) {
            $post_data = array(
                'username' => $this->input->post('username'),
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'level' => $this->input->post('level'),
                'alamat' => $this->input->post('alamat'),
                'no_telp' => $this->input->post('no_telp'),
                'foto' => 'default.jpg',
            );

            // edit foto
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
                    redirect(base_url('admin/user/add'));
                    exit();
                }
                else {
                    // die('B');
                    $uploaded = $this->upload->data();
                    $post_data['foto'] = $uploaded['file_name'];
                    // var_dump($data); die('a');
                }
            }

            $this->user_model->update($post_data, $id);

            $this->session->set_flashdata('success', 'Data user berhasil diubah');

            redirect(base_url('admin/user'));
        }

        $this->load->view('admin/user/edit_user', $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        $this->user_model->delete($id);
        $this->session->set_flashdata('success', 'User berhasil dihapus');
        redirect('admin/user/', 'refresh');
    }
}
