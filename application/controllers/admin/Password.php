<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

/**
 * Class Controller Profile
 * untuk update data user ibu hamil
 */
class Password extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function index($id = null)
    {
        // $data = $this->db->get_where('user', ["id_user" => $this->session->userdata('id_user')])->row();
        // var_dump($data); die('ds');

        // memanggil session
        $id = $this->session->userdata('id_user');
        $data['user'] = $this->user_model->getById($id);
        if (!$data['user']) show_404();

        $this->form_validation->set_rules('password_lama', 'Password Lama', 'trim|required|callback_check_passwordlama'); // dari yg diinputkan
        $this->form_validation->set_rules('password_baru', 'Password', 'required');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password_baru]');

        if ($this->form_validation->run()) {
            $data = array(
                'password' =>  md5($this->input->post('password_baru')),
            );

            $this->user_model->update($data, $id);

            $this->session->set_flashdata('success', 'Selamat! password anda berhasil diperbarui');

            redirect(base_url('admin/password'));
        }

        $this->load->view('admin/user/ganti_password', $data);
    }

    public function check_passwordlama($passwordlama_inputan){
        $passwordlama_inputan_baru = md5($passwordlama_inputan);
        $password_db = $this->user_model->checkPasswordLama();

        if ($passwordlama_inputan_baru != $password_db) {
            $this->form_validation->set_message('check_passwordlama', 'Password Lama not match');
            return FALSE;
        }
        return TRUE;
    }
}
