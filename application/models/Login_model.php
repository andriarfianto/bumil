<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
    
    private $table = "admin";
    private $pk = "id";

    public function __construct() {
        parent::__construct();
    }

    // ambil data dari database yang usernamenya $username dan passwordnya p$assword
    public function cekLogin($username, $password)
    {
        // var_dump($username, $password); die('cek model');

        // $this->db->where('field1', 'value1');
        // $this->db->where('field1', 'value1');

        // $this->db->where(array('field1' => 'value1', 'field2' => 'value2'));
        // $this->db->where(['field1' => 'value1']);
        // $this->db->where(['field2' => 'value2']);

        $this->db->select('*');
        $this->db->from('user');
        $this->db->where(['username' => $username, 'password' => md5($password)]);        
        return $this->db->get();

        // var_dump($return->row()); die('cek model');

        // if ($return->num_rows() > 0) {
        //     redirect('admin/overview','refresh');
        // } else {
        //     $this->session->set_flashdata('pesan', 'Username dan password tidak valid');
        //     redirect('login','refresh');
        // }
    }
}