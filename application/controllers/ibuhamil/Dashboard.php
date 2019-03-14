<?php
class Dashboard extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('username')=="") {
            redirect('auth');
        }
        $this->load->model('chart_model');
        $this->load->model('user_model');
    }

    public function index()
    {
        // memanggil session
        $id = $this->session->userdata('id_user');
        $data['user'] = $this->user_model->getById($id);        
        if (!$data['user']) show_404();

        // $this->load->view('ibuhamil/overview', $data);
        // $this->load->view('admin/_partials/navbar', $data);

        // var_dump($this->session->userdata);

        // load view admin/overview.php
        // $this->load->view("ibuhamil/overview");

        // menampilkan data chart ibu hamil        
        // var_dump($id); die('fd');
        // var_dump($user_konsultasi); die('ds');
        $user_konsultasi = $this->chart_model->getById($id)->result();
        $data['konsultasi'] = json_encode($user_konsultasi);
        // var_dump($data['berat_badan']);
        $this->load->view('ibuhamil/overview', $data); 
    }

    public function logout() {
		$this->session->unset_userdata(array('id_user','username','name', 'email','level'));

		$this->session->sess_destroy();

        redirect(base_url('auth'));
	}
}
