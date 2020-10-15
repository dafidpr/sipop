<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdf extends CI_Controller {
  public function __construct(){
      parent:: __construct();
	   cek_login();
  }
 public function report_bts(){
    $pdf = new FPDF('P','mm','A4');
    $pdf->AddPage(); 
    $pdf->SetFont('Times','B',18);
    $pdf->Image('./assets/img/wifi.png',25,5,25,25);
    $pdf->Cell(25);
    $pdf->SetFont('Times','B',20);
    $pdf->Cell(0,5,'SISTEM INFORMASI BTS/POP',0,1,'C');
    $pdf->Cell(25);
    $pdf->SetFont('Times','B',10);
    $pdf->Cell(0,5,'Jln. Rogojampi - Banyuwangi / Selatan Mitra Swalayan Rogojampi',0,1,'C');
    $pdf->Cell(25);
    $pdf->SetFont('Times','B',10);
    $pdf->Cell(0,5,'Telp : 087637289374 / Email : sipop@gmail.com',0,1,'C');
    
    $pdf->SetLineWidth(1);
    $pdf->Line(10,36,197,36);
    $pdf->SetLineWidth(0);
    $pdf->Line(10,37,197,37);
    
    $pdf->Cell(30,17,'',0,1);
    $pdf->SetFont('Times','B',14);
    $pdf->Cell(0,5,'LAPORAN DATA BTS/POP',0,1,'C');
    
    $bts = $this->report_m->getDataBts();
    $detil = $this->db->get('pengguna_pop')->result_array();
    foreach($bts as $b){
        $pdf->Cell(30,17,'',0,1);
        $pdf->SetFont('Times','',10);
        $pdf->Cell(35,6,'NAMA BTS',0,0, 'L');
        $pdf->Cell(2,6,': ',0,0, 'C');
        $pdf->Cell(75,6,$b['nama_bts'],0,0, 'L');
        $pdf->Cell(37,6,'LOKASI',0,0, 'L');
        $pdf->Cell(3,6,': ',0,0, 'R');
        $pdf->Cell(30,6,$b['lokasi_bts'],0,1, 'L');
        $pdf->Cell(30,0,'',0,1);
        $pdf->Cell(35,6,'KOORDINAT',0,0, 'L');
        $pdf->Cell(2,6,': ',0,0, 'C');
        $pdf->Cell(75,6,$b['lat_bts'].', '.$b['long_bts'],0,0, 'L');
        $pdf->Cell(37,6,'OPERATOR',0,0, 'L');
        $pdf->Cell(3,6,': ',0,0, 'R');
        $pdf->Cell(20,6,$b['nama_operator'],0,0, 'L');
        $pdf->Cell(30,6,'',0,1);
        $pdf->Cell(35,6,'IP ADDRESS',0,0, 'L');
        $pdf->Cell(2,6,': ',0,0, 'C');
        $pdf->Cell(75,6,$b['ip_address'],0,0, 'L');
        $pdf->Cell(37,6,'MAC ADDRESS',0,0, 'L');
        $pdf->Cell(2,6,': ',0,0, 'C');
        $pdf->Cell(40,6,$b['mac_address'],0,0, 'L');
        $pdf->Cell(30,6,'',0,1);
        $pdf->Cell(35,6,'SSID',0,0, 'L');
        $pdf->Cell(2,6,': ',0,0, 'C');
        $pdf->Cell(75,6,$b['ssid'],0,0, 'L');
        $pdf->Cell(37,6,'SECURITY',0,0, 'L');
        $pdf->Cell(2,6,': ',0,0, 'C');
        $pdf->Cell(40,6,$b['security'],0,0, 'L');
        $pdf->Cell(10,9,'',0,1);
        
        $pdf->SetFont('Times','B',10);
        $pdf->Cell(35,6,'PRODUK',1,0, 'C');
        $pdf->Cell(35,6,'NAMA PRODUK',1,0, 'C');
        $pdf->Cell(20,6,'WIDTH',1,0, 'C');
        $pdf->Cell(20,6,'BAND',1,0, 'C');
        $pdf->Cell(40,6,'MODE',1,0, 'C');
        $pdf->Cell(40,6,'KODE SECURITY',1,1, 'C');
        foreach($detil as $d){
            if($b['id_pengguna_pop'] == $d['ID_PENGGUNA_POP']){
                $pdf->SetFont('Times','',10);
                $pdf->Cell(35,6,$d['PRODUK'],1,0);
                $pdf->Cell(35,6,$d['NAMA_PRODUK'],1,0);
                $pdf->Cell(20,6,$d['WIDTH'],1,0);
                $pdf->Cell(20,6,$d['BAND'],1,0);
                $pdf->Cell(40,6,$d['MODE'],1,0);
                $pdf->Cell(40,6,$d['KODE_SECURITY'],1,1);
            }
        }
    }
    $pdf->SetFont('Times','',10);
    $pdf->Output('daftar_bts.pdf', 'I');
 }
 public function report_router(){
    $pdf = new FPDF('P','mm','A4');
    $pdf->AddPage(); 
    $pdf->SetFont('Times','B',18);
    $pdf->Image('./assets/img/wifi.png',25,5,25,25);
    $pdf->Cell(25);
    $pdf->SetFont('Times','B',20);
    $pdf->Cell(0,5,'SISTEM INFORMASI BTS/POP',0,1,'C');
    $pdf->Cell(25);
    $pdf->SetFont('Times','B',10);
    $pdf->Cell(0,5,'Jln. Rogojampi - Banyuwangi / Selatan Mitra Swalayan Rogojampi',0,1,'C');
    $pdf->Cell(25);
    $pdf->SetFont('Times','B',10);
    $pdf->Cell(0,5,'Telp : 087637289374 / Email : sipop@gmail.com',0,1,'C');
    
    $pdf->SetLineWidth(1);
    $pdf->Line(10,36,197,36);
    $pdf->SetLineWidth(0);
    $pdf->Line(10,37,197,37);
    
    $pdf->Cell(30,17,'',0,1);
    $pdf->SetFont('Times','B',14);
    $pdf->Cell(0,5,'LAPORAN DATA ROUTER',0,1,'C');
    
    $router = $this->report_m->getDataRouter();
    $detil = $this->db->get('pengguna_router')->result_array();
    foreach($router as $r){
        $pdf->Cell(30,17,'',0,1);
        $pdf->SetFont('Times','',10);
        $pdf->Cell(35,6,'NAMA BTS',0,0, 'L');
        $pdf->Cell(2,6,': ',0,0, 'C');
        $pdf->Cell(75,6,$r['nama_bts'],0,0, 'L');
        $pdf->Cell(37,6,'LOKASI',0,0, 'L');
        $pdf->Cell(3,6,': ',0,0, 'R');
        $pdf->Cell(30,6,$r['lokasi_bts'],0,1, 'L');
        $pdf->Cell(30,0,'',0,1);
        $pdf->Cell(35,6,'KOORDINAT',0,0, 'L');
        $pdf->Cell(2,6,': ',0,0, 'C');
        $pdf->Cell(75,6,$r['lat_bts'].', '.$r['long_bts'],0,0, 'L');
        $pdf->Cell(37,6,'OPERATOR',0,0, 'L');
        $pdf->Cell(3,6,': ',0,0, 'R');
        $pdf->Cell(20,6,$r['nama_operator'],0,0, 'L');
        $pdf->Cell(10,9,'',0,1);
        
        $pdf->SetFont('Times','B',10);
        $pdf->Cell(35,6,'ROUTER',1,0, 'C');
        $pdf->Cell(40,6,'NAMA ROUTER',1,0, 'C');
        $pdf->Cell(50,6,'IDENTITAS',1,0, 'C');
        $pdf->Cell(35,6,'IP ROUTER',1,0, 'C');
        $pdf->Cell(33,6,'MAC ROUTER',1,1, 'C');
        foreach($detil as $d){
            if($r['id_pengguna_router'] == $d['ID_PENGGUNA_ROUTER']){
                $pdf->SetFont('Times','',10);
                $pdf->Cell(35,6,$d['PRODUK_ROUTER'],1,0);
                $pdf->Cell(40,6,$d['NAMA_PRODUK_ROUTER'],1,0);
                $pdf->Cell(50,6,$d['IDENTITAS'],1,0);
                $pdf->Cell(35,6,$d['IP_ROUTER'],1,0);
                $pdf->Cell(33,6,$d['MAC_ROUTER'],1,0);
            }
        }
    }
    $pdf->SetFont('Times','',10);
    $pdf->Output('daftar_router.pdf', 'I');
 }
}