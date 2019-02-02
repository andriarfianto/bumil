<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

/**
 * Class Controller Profile
 * untuk update data user ibu hamil
 */
class Profile extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('user_model');
    }

    public function index()
    {
        // memanggil session
        $id = $this->session->userdata('id_user');

        // ambil data dari get konsultasi
        $data['user'] = $this->user_model->getById($id);        
        if (!$data['user']) show_404();

        $this->load->view('ibuhamil/profile', $data);
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
    public function check_emaillama($email_inputan)
    {
        // id ibu yg login - selain ibu yang login
        $id_ibulogin = $this->session->userdata('id_user');
        // var_dump($id_ibulogin ); die('dsd');

        $email_db = $this->user_model->updateEmail($email_inputan, $id_ibulogin)->row();
        // var_dump($email_db); die('ds');

        if (!empty($email_db)) {
            $this->form_validation->set_message('check_emaillama', 'Email yang anda inputkan sudah ada');
            return FALSE;
        }
        return TRUE;
    }

    // fungsi pengecekan username yang sudah ada didatabase
    public function check_usernamelama($username_inputan)
    {
        // id ibu yg login - selain ibu yang login
        $id_ibulogin = $this->session->userdata('id_user');
        // var_dump($id_ibulogin ); die('dsd');

        $username_db = $this->user_model->updateUsername($username_inputan, $id_ibulogin)->row();
        // var_dump($username_db); die('ds');

        if (!empty($username_db)) {
            $this->form_validation->set_message('check_usernamelama', 'Username yang anda inputkan sudah ada');
            return FALSE;
        }
        return TRUE;
    }

    public function edit($id = null)
    {
        // $username_inputan = $this->session->userdata('username');
        // $username_db = $this->user_model->checkUsernameLama($username_inputan)->row();
        // var_dump($username_db); die('ds');
        // memanggil session
        if (!isset($id)) redirect('ibuhamil/profile');

        $data['user'] = $this->user_model->getById($id);
        if (!$data['user']) show_404();

        $this->form_validation->set_rules('username', 'Username', 'required|callback_check_usernamelama');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email','Email Address','required|valid_email|callback_check_emaillama');
        $this->form_validation->set_rules('tanggal_lahir','Tanggal Lahir','required|callback_validasi_tgllahir');        
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
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                // 'foto' => 'default.jpg',
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
            } else {
                $this->input->post('old_image');
            }

            $this->user_model->update($post_data, $id);

            $this->session->set_flashdata('success', 'Data anda berhasil diubah');

            redirect(base_url('ibuhamil/profile'));
        }
        // else {
        //     var_dump($_POST($username_db)); die('dsd');
        // }
        // else {
        //     if (!empty($_POST)) die(validation_errors());
        // }

        $this->load->view('ibuhamil/edit_profile', $data);
    }
}
