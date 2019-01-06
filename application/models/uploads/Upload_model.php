<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class upload_model extends CI_Model
{
    private $_table = 'files';

    public function __construct()
    {
        parent::__construct();
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    // yang dikirm dr controller kan insert_data
    // nanti dicoba kalau $data diubah $insert_data - bisa tidak
    public function file_insert($data)
    {
        // print_r($data);
        $this->db->insert($this->_table, $data);
        return $this->db->insert_id();
    }
}

