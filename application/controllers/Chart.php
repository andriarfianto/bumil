<?php
class Chart extends CI_Controller
{
    function __construct(){
        parent::__construct();
        //load chart_model from model
        $this->load->model('chart_model');
    }

    function index(){
        $id = $this->session->userdata('id_user');
        // var_dump($id); die('fd');
        $user_konsultasi = $this->chart_model->getById($id)->result();
        // var_dump($user_konsultasi); die('ds');
        $data['konsultasi'] = json_encode($user_konsultasi);
        $this->load->view('chart_view', $data);        
    }
}