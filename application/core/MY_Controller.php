<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();

        $userdata = $this->session->userdata('id_user');

        if (empty($userdata)) {
            redirect('login');
        }
    }    
}