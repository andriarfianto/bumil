<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Konsultasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('konsultasi_model');
    }

    public function index()
    {
        $data['konsultasis'] = $this->konsultasi_model->getAll();
        $this->load->view('ibuhamil/konsultasi/new_konsultasi', $data);
    }

    public function hitung()
    {
        //cek POST
        // var_dump($this->input->post()); die('die');

        // variabel data
        $berat_badan = $this->input->post('berat_badan'); // $_POST
        $tinggi_badan = $this->input->post('tinggi_badan');
        $usia_ibuhamil = $this->input->post('usia_ibuhamil');
        $usia_kehamilan = $this->input->post('usia_kehamilan');
        $aktifitas_fisik = $this->input->post('aktifitas_fisik');
        $id_user = $this->session->userdata('id_user');

        $this->form_validation->set_rules('berat_badan', 'Berat Badan', 'required');
        $this->form_validation->set_rules('tinggi_badan', 'Tinggi Badan', 'required');
        $this->form_validation->set_rules('usia_ibuhamil', 'Usia Ibu Hamil', 'required');
        $this->form_validation->set_rules('usia_kehamilan', 'Usia Kehamilan', 'required');
        $this->form_validation->set_rules('aktifitas_fisik','Aktifitas Fisik','required');

        if ($this->form_validation->run()) {

            // fungsi mencari nilai imt
            $imt = $berat_badan / (($tinggi_badan / 100) * ($tinggi_badan / 100));
            // var_dump($imt);

            // untuk mencari kriteria berat badan ibu hamil
            if ($imt < 19.8) {
                $status = "Kurus";
            }
            elseif ($imt >= 19.9 && $imt <= 26.0) {
                $status = "Normal";
            }
            elseif ($imt >= 26.1 && $imt <= 29.0) {
                $status = "Gemuk";
            }
            elseif ($imt >29.0) {
                $status = "Obesitas";
            }
            else {
                $status = null;
            }
            // var_dump($status);

            /**
            * mencari berat badan ideal
            * TB > 160 dikurangi nilai 110
            * TB < 160 dikurangi nilai 105
            */
            if ($tinggi_badan > 160) {
                $bbi = $tinggi_badan - 110;
            } else {
                $bbi = $tinggi_badan - 105;
            }

            /**
             * fungsi untuk mencari berat badan ideal ibu hamil
             * bbih = bbi + (usia kehamilan * 0.35) - perhitungan benar
             */
            $bbih = $bbi + ($usia_kehamilan * 0.35);
            // var_dump("nilai bbih:", $bbih);

            /**
             * untuk mencari basal energi expenditure - menerapkan methode harris benedict
             * bee = 65,5 + (9.6 * BB) + (1.8 * TB) - (4.7 * Usia ibu hamil) - perhitungan benar
             */
            $bee = 655 + (9.6 * $berat_badan) + (1.8 * $tinggi_badan) - (4.7 * $usia_ibuhamil);
            // var_dump($bee);

            /**
             * % aktifitas * BEE - perhitungan benar
             */
            $nilai_aktifitas_fisik = $bee * $aktifitas_fisik;
            // var_dump($nilai_aktifitas_fisik);

            /**
            * fit = 0.1 * (bee() + nilai_aktifitas_fisik()) - perhitungan benar
            */
            $fit = 0.1 * ($bee + $nilai_aktifitas_fisik);
            // var_dump($fit);

            /**
            * usia kehamilan untuk mengetahui nilai pertambahan sesuai nilai trisemester
            * trisemester 1 = minggu 1 -12 -> 180
            * trisemester 2 = minggu 13 - 28 -> 300
            * trisemester 3 = minggu 29 - 40 -> 300
            */
           if (($usia_kehamilan >= 1 && $usia_kehamilan <= 12)){
                $nilai_trisemester = 180;
           } if (($usia_kehamilan >= 13 && $usia_kehamilan <= 28)) {
                $nilai_trisemester = 300;
           } if (($usia_kehamilan >= 29 && $usia_kehamilan <= 40)) {
                $nilai_trisemester = 300;
           } else {
                null;
           }

            /**
            * tee = bee() + nilai_aktifitas_fisik() + faktor pertumbuhan
            */
            $tee = $bee + $nilai_aktifitas_fisik + $fit + $usia_kehamilan;
            // var_dump($tee);

            // kurang mengubah nilai kedalam bentuk karbihidrat, protein dan lemak
            $karbohidrat = ($tee * 0.6) / 4;
            $protein = ($tee * 0.15) / 4;
            $lemak = ($tee * 0.25) / 4;

            // var_dump('kebutuhan karbihidrat anda: ', $karbohidrat ,' gram');
            // var_dump('kebutuhan protein anda: ', $protein ,' gram');
            // var_dump('kebutuhan lemak anda: ', $lemak ,' gram');

            // inisailisasi data yg akan disimpan ke db
            $data = array(
                'id_user' => $id_user,
                'tinggi_badan' => $tinggi_badan,
                'berat_badan' => $berat_badan,
                'usia_ibuhamil' => $usia_ibuhamil,
                'usia_kehamilan' => $usia_kehamilan,
                'nilai_trisemester' => $nilai_trisemester,
                'aktifitas_fisik' => $aktifitas_fisik,
                'imt' => $imt,
                'bbih' => $bbih,
                'tee' => $tee,
                'kebutuhan_karbohidrat' => $karbohidrat,
                'kebutuhan_protein' => $protein,
                'kebutuhan_lemak' => $lemak,
            );

            //input kedb lewat model
            $this->konsultasi_model->save($data);

            $this->session->set_flashdata('success', 'Data bahan berhasil ditambah');

            // belum menapilkan hasil perhitungan

            redirect(base_url('ibuhamil/konsultasi'));
        }
    }

    // untuk mencari indeks masa tubuh
    public function imt()
    {
        /**
        * imt = berat badan / ((tinggi badan / 100) * (tinggi badan / 100))
        * return value ke view
        */
        $berat_badan = $this->input->post('berat_badan');
        $tinggi_badan = $this->input->post('tinggi_badan');

        $imt = $berat_badan / (($tinggi_badan / 100) * ($tinggi_badan / 100));
        var_dump($imt);
        // $this->load->view('ibuhamil/konsultasi/new_konsultasi', $imt);
    }

    // untuk mencari berat badan ideal ibu hamil
    public function bbih()
    {
        /**
        * mencari berat badan ideal
        * TB > 160 dikurangi nilai 110
        * TB < 160 dikurangi nilai 105
        */
        $berat_badan = $this->input->post('berat_badan');
        $tinggi_badan = $this->input->post('tinggi_badan');

        if ($tinggi_badan > 160) {
            $bbi = $tinggi_badan - 110;
        } else {
            $bbi = $tinggi_badan - 105;
        }

        /**
        * bbih = bbi + (usia kehamilan * 0.35)
        */
        $usia_kehamilan = $this->input->post('usia_kehamilan');
        $bbih = $bbi + ($usia_kehamilan * 0.35);
        var_dump($bbih);
    }

    // untuk mencari basal energi expenditure - menerapkan methode harris benedict
    public function bee()
    {
        /**
        * bee = 65,5 + (9.6 * BB) + (1.8 * TB) - (4.7 * Usia ibu hamil)
        */
        $berat_badan = $this->input->post('berat_badan');
        $tinggi_badan = $this->input->post('tinggi_badan');
        $usia_ibuhamil = $this->input->post('usia_ibuhamil');

        $bee = 65.5 + (9.6 * $berat_badan) + (1.8 * $tinggi_badan) - (4.7 * $usia_ibuhamil);
        var_dump($bee);
    }

    // nilai aktifitas fisik
    public function aktifitas_fisik()
    {
        /**
        * % aktifitas * BEE
        */
        $berat_badan = $this->input->post('berat_badan');
        $tinggi_badan = $this->input->post('tinggi_badan');
        $usia_ibuhamil = $this->input->post('usia_ibuhamil');
        $usia_kehamilan = $this->input->post('usia_kehamilan');
        $aktifitas_fisik = $this->input->post('aktifitas_fisik');

        $bee = 65.5 + (9.6 * $berat_badan) + (1.8 * $tinggi_badan) - (4.7 * $usia_ibuhamil);
        // var_dump($bee);

        $nilai_aktifitas_fisik = $bee * $aktifitas_fisik;

        /**
        * fit = 0.1 * (bee() + nilai_aktifitas_fisik())
        */
        $fit = 0.1 * ($bee + $nilai_aktifitas_fisik);

        /**
        * usia kehamilan untuk mengetahui nilai pertambahan sesuai nilai trisemester
        * trisemester 1 = minggu 1 -12 -> 180
        * trisemester 2 = minggu 13 - 28 -> 300
        * trisemester 3 = minggu 29 - 40 -> 300
        */
       if (($usia_kehamilan >= 1 && $usia_kehamilan <= 12)){
            $usia_kehamilan = 180;
       } if (($usia_kehamilan >= 13 && $usia_kehamilan <= 28)) {
            $usia_kehamilan = 300;
       } if (($usia_kehamilan >= 29 && $usia_kehamilan <= 40)) {
            $usia_kehamilan = 300;
       } else {
            null;
       }
       // var_dump($usia_kehamilan);

        /**
        * tee = bee() + nilai_aktifitas_fisik() + faktor pertumbuhan
        */
        $tee = $bee + $nilai_aktifitas_fisik + $usia_kehamilan;
        echo '<pre>' . var_dump($tee) . '</pre>';
    }

    // Food Induced Thermogenesis -
    // untuk mencari nilai kebutuhan dari jumlah makanan didalam tubuh
    public function fit()
    {
        /**
        * fit = 0.1 * (bee() + nilai_aktifitas_fisik())
        */
    }

    // Faktor penambahan nilai pertumbuhan
    // trisemester 1 = 180 kalori
    // trisemester 2 & 3 = 300 kalori

    // Total Energi Expenditure - Hasil Akhir
    public function tee()
    {
        /**
        * tee = bee() + nilai_aktifitas_fisik() + faktor pertumbuhan
        */
    }

// ngak kepakai
   //  /**
   //   * fungsi untuk mencari imt
   //   */
   //  $imt = $berat_badan / (($tinggi_badan / 100) * ($tinggi_badan / 100));
   //
   //  // sama kriteria berat badan ibu hamil apakah kurus, gemuk atau obesitas
   //  // var_dump($imt);
   //
   //  if ($imt < 19.8) {
   //      $status = "Kurus";
   //  }
   //  elseif ($imt >= 19.9 && $imt <= 26.0) {
   //      $status = "Normal";
   //  }
   //  elseif ($imt >= 26.1 && $imt <= 29.0) {
   //      $status = "Gemuk";
   //  }
   //  elseif ($imt >29.0) {
   //      $status = "Obesitas";
   //  }
   //  else {
   //      $status = null;
   //  }
   //
   //  // var_dump($status);
   //
   //  /**
   //  * mencari berat badan ideal
   //  * TB > 160 dikurangi nilai 110
   //  * TB < 160 dikurangi nilai 105
   //  */
   //  if ($tinggi_badan > 160) {
   //      $bbi = $tinggi_badan - 110;
   //  } else {
   //      $bbi = $tinggi_badan - 105;
   //  }
   //
   //  /**
   //   * fungsi untuk mencari berat badan ideal ibu hamil
   //   * bbih = bbi + (usia kehamilan * 0.35) - perhitungan benar
   //   */
   //  $bbih = $bbi + ($usia_kehamilan * 0.35);
   //  // var_dump($bbih);
   //
   //  /**
   //   * untuk mencari basal energi expenditure - menerapkan methode harris benedict
   //   * bee = 65,5 + (9.6 * BB) + (1.8 * TB) - (4.7 * Usia ibu hamil) - perhitungan benar
   //   */
   //  $bee = 655 + (9.6 * $berat_badan) + (1.8 * $tinggi_badan) - (4.7 * $usia_ibuhamil);
   //  // var_dump($bee);
   //
   //  /**
   //   * % aktifitas * BEE - perhitungan benar
   //   */
   //  $nilai_aktifitas_fisik = $bee * $aktifitas_fisik;
   //  // var_dump($nilai_aktifitas_fisik);
   //
   //  /**
   //  * fit = 0.1 * (bee() + nilai_aktifitas_fisik()) - perhitungan benar
   //  */
   //  $fit = 0.1 * ($bee + $nilai_aktifitas_fisik);
   //  // var_dump($fit);
   //
   //  /**
   //  * usia kehamilan untuk mengetahui nilai pertambahan sesuai nilai trisemester
   //  * trisemester 1 = minggu 1 -12 -> 180
   //  * trisemester 2 = minggu 13 - 28 -> 300
   //  * trisemester 3 = minggu 29 - 40 -> 300
   //  */
   // if (($usia_kehamilan >= 1 && $usia_kehamilan <= 12)){
   //      $usia_kehamilan = 180;
   // } if (($usia_kehamilan >= 13 && $usia_kehamilan <= 28)) {
   //      $usia_kehamilan = 300;
   // } if (($usia_kehamilan >= 29 && $usia_kehamilan <= 40)) {
   //      $usia_kehamilan = 300;
   // } else {
   //      null;
   // }
   //
   //  /**
   //  * tee = bee() + nilai_aktifitas_fisik() + faktor pertumbuhan
   //  */
   //  $tee = $bee + $nilai_aktifitas_fisik + $fit + $usia_kehamilan;
   //  // var_dump($tee);
   //
   //  // kurang mengubah nilai kedalam bentuk karbihidrat, protein dan lemak
   //  // $karbohidrat = ($tee * 0.6) / 4;
   //  // $protein = ($tee * 0.15) / 4;
   //  // $lemak = ($tee * 0.25) / 4;
   //  //
   //  // var_dump('kebutuhan karbihidrat anda: ', $karbohidrat ,' gram');
   //  // var_dump('kebutuhan protein anda: ', $protein ,' gram');
   //  // var_dump('kebutuhan lemak anda: ', $lemak ,' gram');

}
