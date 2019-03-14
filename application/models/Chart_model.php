<?php
class Chart_model extends CI_Model
{
    //get data from database
    public function get_data()
    {
        $this->db->select('tee,usia_kehamilan,batas_atas');
        return $result = $this->db->get('konsultasi');
    }

    public function getById($id)
    {
        // $data_user = $this->db->select("tee, CONCAT('Kehamilan minggu ke - ', usia_kehamilan) as usia_kehamilan, berat_badan")->where('id_user = '.$id)->get('konsultasi');
        $data_user = $this->db->select("tee, CONCAT('Kehamilan minggu ke - ', usia_kehamilan) as usia_kehamilan, CONCAT(berat_badan, ' kg') as berat_badan")->where('id_user = '.$id)->get('konsultasi');
        return $data_user;

        // $this->db->select("konsultasi.batas_bawah, konsultasi.usia_kehamilan , konsultasi.batas_atas");
        // $this->db->from('detail_konsultasi');
        // $this->db->join('menu_makan', 'menu_makan.id_menu = detail_konsultasi.id_menu');
        // $this->db->join('konsultasi', 'konsultasi.id_konsultasi = detail_konsultasi.id_konsultasi');
        // $query = $this->db->get_where('id_user = ' .$id);

        // return $query;
    }    
    
    // --- Ini yang benar tinggal menerapkan di model database ---
    // SELECT konsultasi.batas_bawah, SUM(menu_makan.energi_menu) as toal_menu_makan, konsultasi.batas_atas
    // FROM detail_konsultasi
    // JOIN menu_makan ON detail_konsultasi.id_menu = menu_makan.id_menu
    // JOIN konsultasi ON konsultasi.id_konsultasi = detail_konsultasi.id_konsultasi
    // WHERE konsultasi.id_konsultasi = 26

    // SELECT konsultasi.id_user, konsultasi.tee, konsultasi.batas_atas
    // FROM `konsultasi`
    // JOIN user ON user.id_user = konsultasi.id_user
    // WHERE konsultasi.id_user = 2

    // SELECT konsultasi.tee
    // FROM detail_konsultasi
    // JOIN menu_makan ON detail_konsultasi.id_menu = menu_makan.id_menu
    // JOIN konsultasi ON konsultasi.id_konsultasi = detail_konsultasi.id_konsultasi


}
