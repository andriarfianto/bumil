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
        // var_dump($this->session->userdata);

        // load view admin/overview.php
        $this->load->view("ibuhamil/overview");
    }

    public function logout() {
		$this->session->unset_userdata(array('id_user','username','name', 'email','level'));

		$this->session->sess_destroy();

        redirect(base_url('auth'));
	}
}
