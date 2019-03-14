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

    function getMenuRandom()
    {
        return $this->db->order_by('id_menu', 'RANDOM')->get('menu_makan');
    }

    public function saveDetail($data)
    {
        $this->db->insert('detail_konsultasi', $data);
    }

    // Menjumlahkan total menu makan dari hasil konsultasi
    // Total menu makan berdasarkan menu makan yang disarankan
    public function getTotalEnergiMenuSaran($id = null)
    {
        // return $this->db->get_where($this->_table, ['tee' => $id]);

        $this->db->select_sum('menu_makan.energi_menu');
        $this->db->join('menu_makan', 'menu_makan.id_menu = detail_konsultasi.id_menu');
        return $this->db->get_where('detail_konsultasi', ['id_konsultasi' => $id]);

        // SELECT SUM(menu_makan.energi_menu)
        // FROM `detail_konsultasi`
        // JOIN menu_makan ON menu_makan.id_menu = detail_konsultasi.id_menu
        // WHERE id_konsultasi = 2
    }

    // Menjumlahkan total karbohidrat menu makan dari hasil konsultasi    
    public function getTotalKarbohidratMenuMakan($id = null)
    {
        $this->db->select_sum('menu_makan.karbohidrat_menu');
        $this->db->join('menu_makan', 'menu_makan.id_menu = detail_konsultasi.id_menu');
        return $this->db->get_where('detail_konsultasi', ['id_konsultasi' => $id]);
    }

    // Menjumlahkan total protein menu makan dari hasil konsultasi    
    public function getTotalProteinMenuMakan($id = null)
    {
        $this->db->select_sum('menu_makan.protein_menu');
        $this->db->join('menu_makan', 'menu_makan.id_menu = detail_konsultasi.id_menu');
        return $this->db->get_where('detail_konsultasi', ['id_konsultasi' => $id]);
    }

    // Menjumlahkan total lemak menu makan dari hasil konsultasi    
    public function getTotalLemakMenuMakan($id = null)
    {
        $this->db->select_sum('menu_makan.lemak_menu');
        $this->db->join('menu_makan', 'menu_makan.id_menu = detail_konsultasi.id_menu');
        return $this->db->get_where('detail_konsultasi', ['id_konsultasi' => $id]);
    }

    public function getEnergiMenu($id = null)
    {
        // SELECT menu_makan.energi_menu
        // FROM `detail_konsultasi`
        // JOIN menu_makan ON menu_makan.id_menu = detail_konsultasi.id_menu
        // WHERE id_konsultasi = 1

        $this->db->select('menu_makan.energi_menu, menu_makan.nama_menu');
        $this->db->join('menu_makan', 'menu_makan.id_menu = detail_konsultasi.id_menu');
        return $this->db->get_where('detail_konsultasi', ['id_konsultasi' => $id]);
    }

    public function getDetail($id = null)
    {
        $this->db->select('*');
        $this->db->join('menu_makan', 'menu_makan.id_menu = detail_konsultasi.id_menu');
        return $this->db->get_where('detail_konsultasi', ['id_konsultasi' => $id]);

        // return $this->db->get_where('detail_konsultasi', ['id_konsultasi' => $id]);
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
        // var_dump($id_konsultasi); die('ds');
        return $this->db->get_where($this->_table, ["id_konsultasi" => $id_konsultasi])->row();
    }

    public function getIbu($id_konsultasi = null)
    {
        // var_dump($id_konsultasi);
        $this->db->select('user.*');
        $this->db->join('user', 'user.id_user = '.$this->_table.'.id_user');
        return $this->db->get_where($this->_table, ["id_konsultasi" => $id_konsultasi])->row();
        // SELECT konsultasi.*, user.nama 
        // FROM `konsultasi`
        // JOIN user ON konsultasi.id_user = user.id_user
        // WHERE user.level = 2
    }

    public function save($data)
    {
        $this->db->insert($this->_table, $data);
    }
}
