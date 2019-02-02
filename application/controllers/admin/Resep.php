<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Resep extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('resep_model');
    }

    public function index()
    {
        $data['reseps'] = $this->resep_model->getResep()->result();
        // var_dump($data['reseps']); die('dsf');
        $this->load->view('admin/resep/list_resep', $data);
    }    
}
