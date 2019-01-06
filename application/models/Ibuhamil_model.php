<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Ibuhamil_model extends CI_Model
{
    private $_table = "ibuhamil";
    
    public function save($data)
    {                   
        $this->db->insert($this->_table, $data);
    }
}