<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Home extends CI_Controller
{
    private $_table = "artikel";

    public function __construct()
    {
        parent::__construct();
        $this->load->model('artikel_model');
    }

    public function index()
    {
        $data['artikels'] = $this->artikel_model->getRecords();
        $this->load->view('home_page', $data);
    }
}
