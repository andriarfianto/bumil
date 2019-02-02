<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Menu_model extends CI_Model
{
    private $_table = "menu_makan";

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_menu" => $id])->row();
    }

    public function jumlah()
    {
        return $this->db->get($this->_table)->num_rows('*');
    }

    public function get_id_menu_terakhir()
    {
        $new_id = $this->db->order_by('id_menu', 'DESC')->get($this->_table)->row('id_menu');

        return $new_id + 1;
    }

    public function detail_bahan($id)
    {
        $db = $this->db->join('bahan_makan', 'bahan_makan.id_bahan = detail_menu.id_bahan')
            ->get_where('detail_menu', ["id_menu" => $id])->result();

        return $db;

//         $this->db->select('artikel.*, user.nama');
//         $this->db->join('user', 'user.id_user = '.$this->_table.'.id_user');
//         return $this->db->get($this->_table)->result();
    }

    public function save_menu($data)
    {
        $this->db->insert($this->_table, $data);
    }

    public function save_detail($data)
    {
        $this->db->insert('detail_menu', $data);
    }

    public function update($data, $id)
    {
        return $this->db->where('id_menu', $id)->update($this->_table, $data);
    }

    public function delete($id)
    {
        $this->db->delete($this->_table, array('id_menu' => $id));
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
