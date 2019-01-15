<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Konsultasi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');  
        $this->load->model('konsultasi_model');      
    }

    public function index()
    {                
        $data['users'] = $this->user_model->getIbuHamil();
        
        $this->load->view('admin/konsultasi/list_konsultasi', $data);
    }

    // riwayat / detail konsultasi
    public function detail($id = null)
    {
        $id = $this->session->userdata('id_user');
        $this->load->model('user_model');
        $data['user'] = $this->user_model->getById($id);
        // cuma memanggil data yang ada didatabase
        $data['konsultasi'] = $this->konsultasi_model->getId($id);

        // cuma memanggil data yang ada didatabase
        $data_detail = $this->konsultasi_model->getDetail($id)->result();
        $data['details'] = $data_detail;

        $this->load->view('admin/konsultasi/detail_konsultasi', $data);      
    }
}
