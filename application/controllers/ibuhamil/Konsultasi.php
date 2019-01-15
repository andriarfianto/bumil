<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Konsultasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('konsultasi_model');
        $this->load->model('user_model');
    }

    public function index($id_konsultasi = null)
    {
        // parameter 1 = NULL
        // if id_konsultasi not null ngeget
        // kalau parameter ada isi nya
        // jalankan fungsi data - manggil get dari id_konsultasi = parameter
        // tampung variabel dibawa ke view yang sama
        // diview harus ada kondisi kalau parameter kosong form kosong kalau ada tampilkan
        if (!empty($id_konsultasi)) {
            $data_konsultasi = $this->konsultasi_model->getId($id_konsultasi);
            //ambil data dari database where id parameter id_konsultasi
            // tampung ke variabel untuk menampilkan view
            $data['konsultasi'] = $data_konsultasi;

            $data_detail = $this->konsultasi_model->getDetail($id_konsultasi)->result();
            $data['details'] = $data_detail;
            // var_dump($data['details']); die('dsd');
            // $this->load->view('ibuhamil/konsultasi/new_konsultasi', $data_konsultasi);
        }

        // memanggil session
        $id = $this->session->userdata('id_user');
        $data['user'] = $this->user_model->getById($id);
        if (!$data['user']) show_404();

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
                $status_gizi = "Kurus";
            }
            elseif ($imt >= 19.9 && $imt <= 26.0) {
                $status_gizi = "Normal";
            }
            elseif ($imt >= 26.1 && $imt <= 29.0) {
                $status_gizi = "Gemuk";
            }
            elseif ($imt >29.0) {
                $status_gizi = "Obesitas";
            }
            else {
                $status_gizi = null;
            }
            // var_dump($status_gizi); die('sasd');

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
            if (($usia_kehamilan >= 1 && $usia_kehamilan <= 12)) 
                $nilai_trisemester = 180;
            elseif (($usia_kehamilan >= 13 && $usia_kehamilan <= 28)) 
                $nilai_trisemester = 300;
            elseif (($usia_kehamilan >= 29 && $usia_kehamilan <= 40)) 
                $nilai_trisemester = 300;
            else 
                null;
            

            /**
             * cadangan kalau error
             */
            // if (($usia_kehamilan >= 1 && $usia_kehamilan <= 12)) {
            //     $nilai_trisemester = 180;
            // } if (($usia_kehamilan >= 13 && $usia_kehamilan <= 28)) {
            //     $nilai_trisemester = 300;
            // } if (($usia_kehamilan >= 29 && $usia_kehamilan <= 40)) {
            //     $nilai_trisemester = 300;
            // } else {
            //     null;
            // }

            /**
            * tee = bee() + nilai_aktifitas_fisik() + faktor pertumbuhan
            */
            $tee = $bee + $nilai_aktifitas_fisik + $fit + $usia_kehamilan;
            // var_dump($tee);

            // kurang mengubah nilai kedalam bentuk karbihidrat, protein dan lemak
            $energi_karbohidrat = $tee * 0.6;
            $energi_protein = $tee * 0.15;
            $energi_lemak = $tee * 0.25;

            $karbohidrat = $energi_karbohidrat / 4;
            $protein = $energi_protein / 4;
            $lemak = $energi_lemak / 9;

            // var_dump('kebutuhan karbihidrat anda: ', $karbohidrat ,' gram');
            // var_dump('kebutuhan protein anda: ', $protein ,' gram');
            // var_dump('kebutuhan lemak anda: ', $lemak ,' gram');

            $id_konsultasi_terbaru = $this->konsultasi_model->get_id_konsultasi_terakhir();

            // inisailisasi data yg akan disimpan ke db
            $data_input = array(
                'id_konsultasi' => $id_konsultasi_terbaru,
                'id_user' => $id_user,
                'tinggi_badan' => $tinggi_badan,
                'berat_badan' => $berat_badan,
                'usia_ibuhamil' => $usia_ibuhamil,
                'usia_kehamilan' => $usia_kehamilan,
                'nilai_trisemester' => $nilai_trisemester,
                'aktifitas_fisik' => $aktifitas_fisik,
                'imt' => $imt,
                'status_gizi' => $status_gizi,
                'bbih' => $bbih,
                'tee' => $tee,
                'energi_karbohidrat' => $energi_karbohidrat,
                'energi_protein' => $energi_protein,
                'energi_lemak' => $energi_lemak,
                'kebutuhan_karbohidrat' => $karbohidrat,
                'kebutuhan_protein' => $protein,
                'kebutuhan_lemak' => $lemak,
            );
            // var_dump($data_input); die('ds');

            //input kedb lewat model
            $this->konsultasi_model->save($data_input);

            // saran makanan
            // nilai tee / energi menu
            // perulangan energi menu untuk mendapatkan hasil yang mendekati dengan batas nilai tee
            // 10% dari tee, bisa lebih bisa dikurang = 10% keatas dan 10% kebawah

            // inisailisasi batas atas dan bawah
            $persen    = $tee * 0.1;
            $ten_atas  = $tee + $persen;

            // // ambil data menu makanan dengan randon dan cek yang jika jumlah energinya lebih batas bawah dan kurang dari batas atas

            $menu = $this->konsultasi_model->getMenuRandom();
            $menus = $menu->result();

            $total = 0;

            // simpan data saran makanan, tb = detail_konsultasi
            foreach ($menus as $key => $val)
            {
                // var_dump($key); die('cek saran key');
                // var_dump($val); die('cek saran val');

                if ($total <= $ten_atas) {
                    // prose simpan ke database
                    $id_menu_disarankan = $val->id_menu;

                    $data = array(
                        'id_konsultasi' => $id_konsultasi_terbaru,
                        'id_menu' => $id_menu_disarankan,
                    );

                    //input kedb lewat model
                    $this->konsultasi_model->saveDetail($data);

                    // tambah total, agar total energi yang disimpan sebagai saran tidak melebihi batas atas
                    $total += $val->energi_menu;
                }
                else {
                    break;
                }
            }

            $this->session->set_flashdata('success', 'Selamat! Hasil konsultasi anda sebagai berikut :');

            // menapilkan hasil perhitungan
            redirect(base_url('ibuhamil/konsultasi/index/'. $id_konsultasi_terbaru));
            // atau load view dengan modal menampilkan hasil dengan id terbaru
        }

        // $this->load->view('ibuhamil/konsultasi/new_konsultasi');
        $this->load->view('ibuhamil/konsultasi/new_konsultasi', $data);
    }

    public function nyoba()
    {
        // memanggil session
        $id = $this->session->userdata('id_user');
        $data['user'] = $this->user_model->getById($id);
        if (!$data['user']) show_404();

        $this->load->view('ibuhamil/nyoba', $data);
    }

    public function riwayat()
    {
        // memanggil session
        $id = $this->session->userdata('id_user');
        $this->load->model('user_model');
        $data['user'] = $this->user_model->getById($id);
        $data['konsultasis'] = $this->konsultasi_model->getRiwayat($id);
        // var_dump($data['konsultasis']);
        //
        // if (!empty($id)) {
        //     $data['konsultasi'] = $this->konsultasi_model->getRiwayat();
        //     // by id user login
        // }

        $this->load->view('ibuhamil/konsultasi/riwayat_konsultasi', $data);
    }

    public function detail($id = null)
    {
        $id = $this->session->userdata('id_user');
        $this->load->model('user_model');
        $data['user'] = $this->user_model->getById($id);
        // cuma memanggila data yang ada didatabase
        $data['konsultasi'] = $this->konsultasi_model->getId($id);

        // cuma memanggila data yang ada didatabase
        $data_detail = $this->konsultasi_model->getDetail($id)->result();
        $data['details'] = $data_detail;

        $this->load->view('ibuhamil/konsultasi/detail_konsultasi', $data);
        // var_dump($data['konsultasis']);
        //
        // if (!empty($id)) {
        //     $data['konsultasi'] = $this->konsultasi_model->getRiwayat();
        //     // by id user login
        // }
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

            $id_konsultasi_terbaru = $this->konsultasi_model->get_id_konsultasi_terakhir();

            // inisailisasi data yg akan disimpan ke db
            $data = array(
                'id_konsultasi' => $id_konsultasi_terbaru,
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

            // saran makanan
            // nilai tee / energi menu
            // perulangan energi menu untuk mendapatkan hasil yang mendekati dengan batas nilai tee
            // 10% dari tee, bisa lebih bisa dikurang = 10% keatas dan 10% kebawah

            // inisailisasi batas atas dan bawah
            // $persen    = $tee * 0.1;
            // $ten_atas  = $tee + $persen;
            // $ten_bawah = $tee - $persen;
            // // cek var
            //
            // // ambil data menu makanan lalu randon dan cek yang jika jumlah energinya lebih batas bawah dan kurang dari batas atas
            //
            // $menu = $this->konsultasi_model->getMenu();
            // $menus = $menu->result();
            // $count_menu = $menu->num_rows();
            // // var_dump($sarans); die('cek saran');
            //
            // $total = 0;
            // $detail = array();
            //
            // // simpan data saran makanan, tb = detail_konsultasi
            // foreach ($menus as $key => $val)
            // {
            //     // var_dump($key); die('cek saran key');
            //     // var_dump($val); die('cek saran val');
            //
            //     // acak dengan range jumlah count semua menu ($count_menu)
            //     $id_acak = rand(1, $count_menu);
            //
            //     // cek apakah id menu yg diacak ini sudah digunakan atau belum untuk id konsultasi ini
            //     if (!empty($detail[$id_acak])) {
            //         // berarti id acak ini sudah digunaka, jadi tidak dipakai lagi
            //     }
            //     else {
            //         // belum ada ditambahkan ke array sebagai penanda agar tidak digunakan lagi
            //         $detail[$id_acak] = $val->id_menu;
            //
            //         // tambah total
            //         $total += $val->energi_menu;
            //
            //         // array('energi_menu >= ' => $ten_bawah, 'energi_menu <=' => $ten_atas)
            //         if ($total <= $ten_atas)
            //         {
            //             // ??? :=> $total >= $ten_bawah
            //
            //             // prose simpan ke database
            //             $id_menu_disarankan = $val->id_menu;
            //
            //             $data = array(
            //                 'id_konsultasi' => $id_konsultasi_terbaru,
            //                 'id_menu' => $id_menu_disarankan,
            //             );
            //
            //             //input kedb lewat model
            //             $this->konsultasi_model->saveDetail($data);
            //         }
            //     }
            // }

            $this->session->set_flashdata('success', 'Selamat! Hasil konsultasi anda sebagai berikut');

            // menapilkan hasil perhitungan
            redirect(base_url('ibuhamil/konsultasi/hasil/'.$id_konsultasi_terbaru));
            // atau load view dengan modal menampilkan hasil dengan id terbaru
        }
    }

    function hasil($id_konsultasi)
    {
        $konsul = $this->konsultasi_model->getWhere(array('id_konsultasi' => $id_konsultasi))->row();

        // get saran makanan by id konsultasi

        $data = array(
            'hasil' => $konsul,
        );

        $this->load->view('ibuhamil/konsultasi/hasil_konsultasi', $data);
    }

}
