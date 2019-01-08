<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class User_model extends CI_Model
{
    private $_table = "user";

    public function cekLogin()
    {
        $query = $this->db->get_where(['username' => $username, 'password' => md5($password)]);
        return $query;
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_user" => $id])->row();
    }

    public function jumlah()
    {        
        return $this->db->get($this->_table)->num_rows('*');
    }

    public function save($data)
    {
        $this->db->insert($this->_table, $data);
    }

    public function update($data, $id)
    {
        return $this->db->where('id_user', $id)->update($this->_table, $data);
    }

    public function delete($id)
    {
        $this->db->delete($this->_table, array('id_user' => $id));
    }
}
