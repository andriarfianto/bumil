<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class konsultasi_model extends CI_Model
{
    private $_table = "konsultasi";

    function __construct()
    {
        parent::__construct();
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

    public function getRiwayat($id = null)
    {
        // select tinggi_badan, berat_badan, nama
        // from konsultasi
        // inner join user
        // on konsultasi.id_user = user.id_user

        // // bukan id_konsultasi tapi id_user yang berada di konsultasi
        // $this->db->select('konsultasi.*, user.nama');
        // $this->db->join('user', 'user.id_user = '.$this->_table.'.id_user');
        // return $this->db->get($this->_table)->result();
        // select all dulu
        // select tabel konsultasi where id -user = login
        // dengan session user yg login

        // return $this->db->get($this->_table)->result();

        return $this->db->get_where($this->_table, ["id_user" => $id])->result(); // untuk mengambil id_konsultasi
    }

    public function getId($id_konsultasi = null)
    {
        //ambil data dari database where id parameter id_konsultasi
        // return $this->db->get('konsultasi')->where("id_konsultasi");

        return $this->db->get_where($this->_table, ["id_konsultasi" => $id_konsultasi])->row();
    }

    public function save($data)
    {
        $this->db->insert($this->_table, $data);
    }
}
