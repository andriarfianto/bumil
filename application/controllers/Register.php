<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('login_model');
    }

    public function index()
    {
        $this->load->view('register');
    }
}

/**
* End of file ./controller/Admin.php
* untuk login dan daftar
*/
