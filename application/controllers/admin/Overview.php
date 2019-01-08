<?php
class Overview extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('username')=="") {
            redirect('auth');
        }
        $this->load->model('user_model');
        $this->load->model('artikel_model');
        $this->load->model('menu_model');
        $this->load->model('bahan_model');

    }

    public function index()
    {
        // var_dump($this->session->userdata);
        // load view admin/overview.php
        $data['jumlah_user'] = $this->user_model->jumlah();
        $data['jumlah_artikel'] = $this->artikel_model->jumlah();
        $data['menu_makan'] = $this->menu_model->jumlah();
        $data['bahan_makan'] = $this->bahan_model->jumlah();

        $this->load->view("admin/overview", $data);
    }

    public function logout() {
		$this->session->unset_userdata(array('id_user','username','name', 'email','level'));

		$this->session->sess_destroy();

        redirect(base_url('auth'));
	}
}
