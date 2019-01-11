<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Chat extends CI_Controller
{
    // function __construct()
    // {
    //     $this->load->model('user_model');
    // }

    public function index()
    {
        // memanggil session
        $id = $this->session->userdata('id_user');
        $this->load->model('user_model');
        $data['user'] = $this->user_model->getById($id);
        if (!$data['user']) show_404();

        // $this->load->view('ibuhamil/konsultasi/new_konsultasi');
        $this->load->view('ibuhamil/chat', $data);
    }

    public function kirim()
    {

    }
}
