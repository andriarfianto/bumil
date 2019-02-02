<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Chat extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('chat_model');
    }

    public function index()
    {
        // memanggil session
        $id = $this->session->userdata('id_user');        
        $data['user'] = $this->user_model->getById($id);
        $data['pesans'] = $this->chat_model->getId($id)->result(); // tampilkan data pesan
        // $data['pengirim'] = $this->chat_model->getPengirim($level);// ambil data pengirim
        if (!$data['user']) show_404();
        
        $this->form_validation->set_rules('isi_pesan', 'Isi pesan', 'required');

        if ($this->form_validation->run()) {
            
            $data_pesan = array(
                'pengirim' => $id,                
                'isi_pesan' => $this->input->post('isi_pesan'),
                'id_ibu' => $id,              
            );

            $this->chat_model->save($data_pesan);            
            
            redirect(base_url('ibuhamil/chat'), 'refresh');            
        }

        $this->load->view('ibuhamil/chat', $data);
    }    
}
