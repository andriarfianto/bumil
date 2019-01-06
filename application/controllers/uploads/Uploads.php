<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Uploads extends CI_Controller 
{
    public $file_type = "default.jpg";
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session','database','upload');
        $this->load->helper('url','form');
        $this->load->model('uploads/upload_model');
    }

    public function index()
    {
        $data['uploads'] = $this->upload_model->getAll();
        $this->load->view('admin/uploads/list', $data);
    }

    // untuk menampilkan form upload
    public function add()
    {
        $this->load->view('admin/uploads/uploads', array('error' => ''));
    }

    // method untuk konfigurasi file upload foto
    // dan simpan ke database
    public function upload_file()
    {
        $config = array(
            'upload_path' => "./upload/file/",
            'allowed_types' => "gif|jpg|png|jpeg|pdf|docx",
            'overwrite' => TRUE,
            'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
            // 'max_height' => "768",
            // 'max_width' => "1024"
        );

        /*  for load library for upload file start */
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if ($this->upload->do_upload()) {
            /*  for upload file start */
            $data = array('upload_data' => $this->upload->data());

            // nama file dan ekstensi file upload
            $file_name = $data['upload_data']['raw_name'].$data['upload_data']['file_ext'];

            // insert data ke database
            $insert_data = array(
                'file_type' => $this->input->post('file_type'),
                'file_name' => $file_name,
                'created_date' => date('Y-m-d H:i:s'),
            );

            $this->upload_model->file_insert($insert_data);

            $this->load->view('admin/uploads/uploads_success', $data);
        } else {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('admin/uploads/uploads', $error);
        }

        return "default.jpg";
    }
}
