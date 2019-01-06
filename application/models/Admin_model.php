<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Admin_model extends CI_Model
{
    private $_table = "admin ";

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save($data)
    {
        // $data = [
        //     'username' => $this->input->post('username'),
        //     'email' => $this->input->post('email'),
        //     'address' => $this->input->post('address'),
        //     'image' => 'default.jpg',
        //     'mobile' => $this->input->post('mobile'),
        // ];

        // $image_name = $this->_uploadImage();        

        $this->db->insert($this->_table, $data);
    }

    public function update()
    {
        $id = ['id' => $this->input->post('id')];

        $data = [
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'address' => $this->input->post('address'),
            // 'image' => $this->input->post('old_image'),
            'mobile' => $this->input->post('mobile'),
        ];

        $this->db->update($this->_table, $data, $id);
    }

    public function delete($id)
    {
        $this->db->delete($this->_table, array('id' => $id));
    }

    private function _uploadImage()
    {
        $config['upload_path'] = './upload/user/';
        $config['allowed_types'] = 'gif|jpg|png';
        // Ini nanti, ngak usah dipakai
        // $config['file_name'] = $this->product_id;
        $config['overwrite'] = true;
        $config['max_size'] = 1024; // 1 MB
        // $config['max_height'] = 1024; // maksimal tinggi
        // $config['max_width'] = 768; // maksimal lebar

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data('file_name'); // untuk menentukan nama file                      
        }

        return "default.jpg";          
    }
}