<?php
class Dashboard extends MY_Controller
{
    public function ___construct()
    {
        parent::__construct();
        if ($this->session->userdata('username')=="") {
            redirect('auth');
        }
    }

    public function index()
    {
        // memanggil session
        $id = $this->session->userdata('id_user');
        $this->load->model('user_model');
        $data['user'] = $this->user_model->getById($id);
        if (!$data['user']) show_404();

        // $this->load->view('admin/_partials/navbar', $data);
        $this->load->view('ibuhamil/_partials/sidebar', $data);
    }

    public function logout() {
		$this->session->unset_userdata(array('id_user','username','name', 'email','level'));

		$this->session->sess_destroy();

        redirect(base_url('auth'));
	}
}
