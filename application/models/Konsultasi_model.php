<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
/**
 *
 */
class konsultasi_model extends CI_Model
{
    private $_table = "konsultasi";

    function __construct()
    {

    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();

    }
    
    public function save($data)
    {
        $this->db->insert($this->_table, $data);
    }
}
