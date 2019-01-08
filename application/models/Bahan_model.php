<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Bahan_model extends CI_Model
{
    private $_table = "bahan_makan";

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_bahan" => $id])->row();
    }

    public function jumlah()
    {
        return $this->db->get($this->_table)->num_rows('*');
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

    public function update($data, $id)
    {
        return $this->db->where('id_bahan', $id)->update($this->_table, $data);
    }

    public function delete($id)
    {
        $this->db->delete($this->_table, array('id_bahan' => $id));
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
