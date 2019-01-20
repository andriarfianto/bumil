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
    public function detail($id_konsultasi = null)
    {        
        // $this->load->model('user_model');
        // $data['user'] = $this->user_model->getById($id);
        // cuma memanggil data yang ada didatabase

        $data['konsultasi'] = $this->konsultasi_model->getId($id_konsultasi);
        // var_dump($data['konsultasi']); die('sa');

        // cuma memanggil data yang ada didatabase
        $data_detail = $this->konsultasi_model->getDetail($id_konsultasi)->result();
        $data['details'] = $data_detail;

        // ambil data nama ibu dengan join
        $data['ibu'] = $this->konsultasi_model->getIbu();

        $this->load->view('admin/konsultasi/detail_konsultasi', $data);
    }

    // riwayat / detail konsultasi
    public function print_detail($id_konsultasi = null)
    {        
        // $this->load->model('user_model');
        // $data['user'] = $this->user_model->getById($id);
        // cuma memanggil data yang ada didatabase

        $data['konsultasi'] = $this->konsultasi_model->getId($id_konsultasi);
        // var_dump($data['konsultasi']); die('sa');

        // cuma memanggil data yang ada didatabase
        $data_detail = $this->konsultasi_model->getDetail($id_konsultasi)->result();
        $data['details'] = $data_detail;

        // ambil data nama ibu dengan join
        $data['ibu'] = $this->konsultasi_model->getIbu();

        $this->load->view('admin/konsultasi/print_detail', $data);
    }
}
