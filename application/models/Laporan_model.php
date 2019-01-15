<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_model extends CI_Model {
    
    private $table = "admin";
    private $pk = "id";

    public function __construct() {
        parent::__construct();
    }
    
    public function cekLogin($username, $password)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where(['username' => $username, 'password' => md5($password)]);        
        return $this->db->get();
    }
}