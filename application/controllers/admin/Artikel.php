<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Artikel extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('artikel_model');
    }
    
    public function index()
    {
        $data['artikels'] = $this->artikel_model->getAll();
        $this->load->view('admin/artikel/list_artikel', $data);
    }

    public function detail($id = null)
    {                
        $data['artikel'] = $this->artikel_model->getById($id);
        if (!$data['artikel']) show_404();

        $this->load->view('admin/artikel/detail_artikel', $data);
    }

    public function add()
    {        
        // session user - id user
        $user_session = $this->session->userdata('id_user');

        $data = array(
            'judul_artikel' => $this->input->post('judul_artikel'),
            'isi_artikel' => $this->input->post('isi_artikel'),
            'kategori' => $this->input->post('kategori'),
            'foto' => 'default.jpg',           
            'id_user' => $user_session,                             
        );

        $this->form_validation->set_rules('judul_artikel', 'Judul Artikel', 'required');
        $this->form_validation->set_rules('isi_artikel','Isi Artikel','required');
        $this->form_validation->set_rules('kategori','Kategori','required');        

        if ($this->form_validation->run()) {

            $file = $_FILES;
            // var_dump($file['foto']["name"]); die('a');     
            if (!empty($file['foto']["name"])) {
                $filename = $file['foto']["name"]; // $post['id'].'-'.$mapel;
                
                $config['upload_path']   = './upload/artikel/';
                $config['allowed_types'] = 'gif|jpg|png';
                // $config['max_size']      = 100;
                // $config['max_width']     = 1024;
                // $config['max_height']    = 768;
                $config['file_name'] 	 = $filename;
                
                $this->load->library('upload', $config);
                
                if (!$this->upload->do_upload('foto')) {
                    echo $this->upload->display_errors();
                    // die('A');
                    $this->session->set_flashdata('gagal', 'Gagal upload foto artikel');                      
                    redirect(base_url('admin/artikel/add'));
                    exit();
                }
                else {
                    // die('B');
                    $uploaded = $this->upload->data();
                    $data['foto'] = $uploaded['file_name'];
                    // var_dump($file); die('a');
                }
            }          
            $this->artikel_model->save($data);

            $this->session->set_flashdata('success', 'Data artikel berhasil disimpan');                        

            redirect(base_url('admin/artikel'));
        }         

        $this->load->view('admin/artikel/new_artikel', $data);                 
    }
 
    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/artikel/');
        
        $data['artikel'] = $this->artikel_model->getById($id);
        if (!$data['artikel']) show_404();
        
        $this->form_validation->set_rules('judul_artikel', 'Judul Artikel', 'required');
        $this->form_validation->set_rules('isi_artikel','Isi Artikel','required');
        $this->form_validation->set_rules('kategori','Kategori','required');

        if ($this->form_validation->run()) {
            $post_data = array(
                'judul_artikel' => $this->input->post('judul_artikel'),
                'isi_artikel' => $this->input->post('isi_artikel'),
                'kategori' => $this->input->post('kategori'),                                          
            );

            // edit foto
            $file = $_FILES;
            // var_dump($file['foto']["name"]); die('a');    
            if (!empty($file['foto']["name"])) {

                $filename = $file['foto']["name"]; // $post['id'].'-'.$mapel;
                
                $config['upload_path']   = './upload/artikel/';
                $config['allowed_types'] = 'gif|jpg|png';
                // $config['max_size']      = 100;
                // $config['max_width']     = 1024;
                // $config['max_height']    = 768;
                $config['file_name'] 	 = $filename;
                
                $this->load->library('upload', $config);
                
                if (!$this->upload->do_upload('foto')) {
                    echo $this->upload->display_errors();
                    // die('A');
                    $this->session->set_flashdata('gagal', 'Gagal upload foto user');                      
                    redirect(base_url('admin/artikel/add'));
                    exit();
                }
                else {
                    // die('B');
                    $uploaded = $this->upload->data();
                    $post_data['foto'] = $uploaded['file_name'];
                    // var_dump($data); die('a');
                }
            }

            $this->artikel_model->update($post_data, $id);

            $this->session->set_flashdata('success', 'Data artikel berhasil diubah');

            redirect(base_url('admin/artikel'));
        }
        
        $this->load->view('admin/artikel/edit_artikel', $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();
              
        $this->artikel_model->delete($id);
        $this->session->set_flashdata('success', 'Artikel berhasil dihapus');
        redirect('admin/artikel/index', 'refresh');        
    }

}