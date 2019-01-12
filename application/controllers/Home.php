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

    public function artikel()
    {
        $data['artikels'] = $this->artikel_model->getRecords();
        $this->load->view('artikel', $data);
    }

    public function limit()
    {
        $data['limits'] = $this->artikel_model->limit();
        $this->load->view('artikel', $data);

    }

    public function detail_artikel($id = null)
    {
        $data['artikel'] = $this->artikel_model->getById($id);
        // $data['limit'] = $this->artikel_model->limit();
        if (!$data['artikel']) show_404();

        $this->load->view('detail_artikel', $data);
    }

    public function informasi()
    {
        $this->load->view('informasi');
    }

    public function kontak()
    {
        $this->load->view('kontak');
    }

    public function tentang()
    {
        $this->load->view('tentang');
    }
}
