<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Home extends CI_Controller
{
    private $_table = "artikel";

    public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->model('artikel_model');
    }

    public function index()
    {
        $data['artikels'] = $this->artikel_model->getRecords();
        $this->load->view('home_page', $data);
    }

    // menampilkan artikel dihalaman utama
    public function artikel()
    {
        // $data['artikels'] = $this->artikel_model->getRecords();
        // $this->load->view('artikel', $data);

        // konfigurasi pagination
        $config['base_url'] = site_url('home/artikel');
        $config['total_rows'] = $this->db->count_all('artikel');
        $config['per_page'] = 3;
        $config['uri_segment'] = 3;
        $choice = $config['total_rows'] / $config['per_page'];
        $config['num_links'] = floor($choice);

        // Style pagination Bootstrap
        $config['first_link']   = 'First';
        $config['last_link']    = 'Last';
        $config['next_link']    = 'Next';
        $config['prev_link']    = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        // panggil function getUsers yang ada pada model users_model.
        // data array artikels disini untuk menampilkan data paging
        $data['artikels'] = $this->artikel_model->getListArtikel($config['per_page'], $data['page']);

        // sedangkan untuk sidebar artikels nya dibedakan
        // yang akan di lemparkan datanya di site_url(home/artikel)
        // dengan membawa data array artikel atau yang lainnya $data[tampil]
        $data['list_artikel'] = $this->artikel_model->getLimit(5);        

        $data['pagination'] = $this->pagination->create_links();

        // load data users
        $this->load->view('artikel',$data);
    }

    public function limit()
    {
        $data['limits'] = $this->artikel_model->limit();
        $this->load->view('artikel', $data);
    }

    public function detail_artikel($id = null)
    {
        $data['artikel'] = $this->artikel_model->getById($id);
        $data['list_artikel'] = $this->artikel_model->getLimit(5);
        if (!$data['artikel']) show_404();

        $this->load->view('detail_artikel', $data);
    }

    // ngak kepakai
    public function kategori_artikel($kategori = null)
    {
        $data['artikel'] = $this->artikel_model->getKategori($kategori);        
        if (!$data['artikel']) show_404();

        $this->load->view('kategori_artikel', $data);
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
