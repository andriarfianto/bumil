<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Ibuhamils extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ibuhamil_model');
        $this->load->helper('url');
        $this->load->library('form_validation','session');
    }

    public function index()
    {       
        $data['users'] = $this->ibuhamil_model->getAll();
        $this->load->view('admin/ibuhamil/list', $data);
    }
    
    public function add()
    {
        // data_array di load diview
        $data = [
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'address' => $this->input->post('address'),
            'image' => 'default.jpg',
            'mobile' => $this->input->post('mobile'),
        ];

        // 2. set rule form validation
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email','Email Address','required|valid_email');
        $this->form_validation->set_rules('address','Address','required');
        $this->form_validation->set_rules('mobile','Mobile','required|numeric');

        if ($this->form_validation->run()) {
            // kirim variable data disini
            $this->user_model->save($data);
            $this->session->set_flashdata('success', 'Data user berhasil disimpan');                        
        }        

        $this->load->view('admin/ibuhamil/new_form');
    }
}