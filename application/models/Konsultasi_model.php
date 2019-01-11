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

    public function getAll($where = NULL)
    {
        if (!empty($where))
            $this->db->where($where);

        return $this->db->get($this->_table)->result();
    }

    public function getWhere($where = NULL)
    {
        if (!empty($where))
            $this->db->where($where);

        return $this->db->get($this->_table);
    }

    function getMenu()
    {
        return $this->db->get('menu_makan');
    }

    public function saveDetail($data)
    {
        $this->db->insert('detail_konsultasi', $data);
    }


    public function get_id_konsultasi_terakhir()
    {
        $new_id = $this->db->order_by('id_konsultasi', 'DESC')->get($this->_table)->row('id_konsultasi');

        return $new_id + 1;
    }

    public function save($data)
    {
        $this->db->insert($this->_table, $data);
    }
}
