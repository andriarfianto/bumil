<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Chat_model extends CI_Model
{
    private $_table = "chat ";
    
    public function getId($id = null)
    {
        return $this->db->get_where($this->_table, ['id_ibu' => $id]);
        
    }

    public function getPengirim($level) // level
    {
        // ngambil data pengirim
        $this->db->get_where($this->_table, ['pengirim' => $level])->result();
    }

    public function save($data)
    {
        $this->db->insert($this->_table, $data);
    }

    // join untuk meng
    // ngambil datanya dari id diparamter url
}
