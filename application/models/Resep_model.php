<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Resep_model extends CI_Model
{
    private $_table = "detail_menu";
    

    public function getResep()
    {
        $this->db->select('menu_makan.nama_menu, bahan_makan.nama_bahan, jumlah_bahan, satuan_takaran');
        $this->db->join('menu_makan', 'menu_makan.id_menu = detail_menu.id_menu');
        $this->db->join('bahan_makan', 'bahan_makan.id_bahan = detail_menu.id_bahan');
        return $this->db->get($this->_table);

        // SELECT menu_makan.nama_menu, bahan_makan.nama_bahan, jumlah_bahan, satuan_takaran
        // FROM `detail_menu`
        // JOIN menu_makan ON menu_makan.id_menu = detail_menu.id_menu
        // JOIN bahan_makan ON bahan_makan.id_bahan = detail_menu.id_bahan
    }
}
