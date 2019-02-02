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
        $data['users'] = $this->user_model->getIbuHamil();
        $data['pesans'] = $this->chat_model->getId($id); // tampilkan data pesan
        // $data['pengirim'] = $this->chat_model->getPengirim($level);// ambil data pengirim
        // if (!$data['users']) show_404();
        
        $this->form_validation->set_rules('isi_pesan', 'Isi pesan', 'required');

        if ($this->form_validation->run()) {
            
            $data_pesan = array(
                'pengirim' => $this->session->userdata('level'),                
                'isi_pesan' => $this->input->post('isi_pesan'),
                'id_ibu' => $this->session->userdata('id_user'),                
            );

            $this->chat_model->save($data_pesan);            
            
            redirect(base_url('admin/chat', 'reload'));
        }

        $this->load->view('admin/chat/list_chat', $data);
    }

    public function reply($id_ibu = null)
    {        
        // yang diambil data chat column id_ibu
        $data['user'] = $this->chat_model->getId($id_ibu)->row();
        $data['pesans'] = $this->chat_model->getId($id_ibu)->result(); // tampilkan data pesan        

        $this->form_validation->set_rules('isi_pesan', 'Isi pesan', 'required');

        if ($this->form_validation->run()) {
            
            $data_pesan = array(
                'pengirim' => $this->session->userdata('id_user'),                
                'isi_pesan' => $this->input->post('isi_pesan'),
                'id_ibu' => $id_ibu,                
            );

            $this->chat_model->save($data_pesan);            
            
            redirect(base_url('admin/chat/reply/'.$id_ibu), 'refresh');
        }

        $this->load->view('admin/chat/reply_chat', $data);
    }
}
