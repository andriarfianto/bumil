<?php
Class Laporan extends CI_Controller {    
    
    public function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }
    
    public function index() {
        $pdf = new FPDF('p','mm','A4');

        // membuat halaman baru
        $pdf->AddPage();

        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','',16);
        $pdf->Cell(190,7,'SEKOLAH MENENGAH KEJURUSAN NEEGRI 2 LANGSA',0,1,'C');

        $pdf->SetFont('Arial','',12);
        $pdf->Cell(190,7,'DAFTAR SISWA KELAS IX JURUSAN REKAYASA PERANGKAT LUNAK',0,1,'C');

        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);

        // data
        $pdf->Cell(30,6,'Tinggi Badan',1,0);
        $pdf->Cell(30,6,'Berat Badan',1,0);
        $pdf->Cell(27,6,'Usia Ibu Hamil',1,0);
        $pdf->Cell(30,6,'Usia Kehamilan',1,0);
        $pdf->Cell(25,6,'Nilai Trisemester',1,0);
        $pdf->Cell(25,6,'Imt',1,0);
        $pdf->Cell(25,6,'Status Gizi',1,0);
        $pdf->Cell(25,6,'BBIH',1,0);
        $pdf->Cell(25,6,'TEE',1,0);
        $pdf->Cell(25,6,'Energi Karbohidrat',1,0);
        $pdf->Cell(25,6,'Energi Protein',1,0);
        $pdf->Cell(25,6,'Energi Lemak',1,0);
        $pdf->Cell(25,6,'Kebutuhan Karbohidrat',1,0);
        $pdf->Cell(25,6,'Kebutuhan Protein',1,0);
        $pdf->Cell(25,6,'Kebutuhan Lemak',1,0);
        $pdf->SetFont('Arial','',10);

        // ambil data
        $konsultasi = $this->db->get('konsultasi')->result();
        foreach ($konsultasi as $row){
            $pdf->Cell(20,6,$row->tinggi_badan);
            $pdf->Cell(85,6,$row->berat_badan);
            $pdf->Cell(27,6,$row->usia_ibuhamil);
            $pdf->Cell(25,6,$row->usia_kehamilan,2,1);
            $pdf->Cell(25,6,$row->nilai_trisemester,2,1); 
            $pdf->Cell(25,6,$row->imt,2,1); 
            $pdf->Cell(25,6,$row->status_gizi,2,1); 
            $pdf->Cell(25,6,$row->bbih,2,1); 
            $pdf->Cell(25,6,$row->tee,2,1); 
            $pdf->Cell(25,6,$row->energi_karbohidrat,2,1);
            $pdf->Cell(25,6,$row->energi_protein,2,1); 
            $pdf->Cell(25,6,$row->energi_lemak,2,1); 
            $pdf->Cell(25,6,$row->kebutuhan_karbohidrat,2,1);
            $pdf->Cell(25,6,$row->kebutuhan_protein,2,1); 
            $pdf->Cell(25,6,$row->kebutuhan_lemak,2,1); 
        }
        $pdf->Output();
    }

    // Laporan model
    // SELECT user.nama, konsultasi.*
    // FROM `konsultasi`
    // JOIN user ON user.id_user = konsultasi.id_konsultasi
    // WHERE user.level = 2
}