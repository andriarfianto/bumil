<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

/**
 * Class Controller Profile
 * untuk update data user ibu hamil
 */
class Profile extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function index()
    {
        // memanggil session
        $id = $this->session->userdata('id_user');
        $data['user'] = $this->user_model->getById($id);
        if (!$data['user']) show_404();

        $this->load->view('ibuhamil/profile', $data);
    }

    public function edit($id = null)
    {
        // memanggil session
        if (!isset($id)) redirect('ibuhamil/profile');

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

            $this->session->set_flashdata('success', 'Data user berhasil diubah');

            redirect(base_url('ibuhamil/profile'));
        }

        $this->load->view('ibuhamil/edit_profile', $data);
    }
}
