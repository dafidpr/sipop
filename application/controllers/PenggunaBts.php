<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PenggunaBts extends CI_Controller {
  public function __construct(){
      parent:: __construct();
	   cek_login();
  }
  public function index(){	
	$this->data['title'] = "Daftar BTS/POP";
	$this->data['content'] = "penggunabts/index";
	$this->data['user'] = $this->db->get_where('user', ['USERNAME' => $this->session->userdata('username')])->row_array();
	$this->data['pengguna'] = $this->bts_m->getData();
	$this->data['operator'] = $this->operator_m->getData();
    $this->load->view('templates/main', $this->data);

  }
  public function LoadData(){
	  $output = array(
			"aaData"	=> $this->pengguna_bts_m->getData()
	  );
	  echo json_encode($output);
  }
  public function LoadByLevel($id=''){
	  $output = array(
			"aaData"	=> $this->pengguna_bts_m->getDataByLevel($id)
	  );
	  echo json_encode($output);
  }
  public function infoBts($id=''){
	  $data = $this->bts_m->getDataById($id);
	  echo json_encode($data);
  }
  public function inputpop(){
	  $this->pengguna_bts_m->Save();
	  $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span> </button><b>Success!</b> Data berhasil ditambahkan.</div>');
	  redirect('penggunabts');
  }
  public function hapuspengguna($id=''){
	  $this->pengguna_bts_m->deletedata($id);
	  $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span> </button><b>Success!</b> Data berhasil dihapus.</div>');
	  redirect('penggunabts');
  }
  public function detilpop($id=''){
	  $data = $this->pengguna_bts_m->getDataById($id);
	  echo json_encode($data);
  }
  public function detildata($id=''){
	$this->data['user'] = $this->db->get_where('user', ['USERNAME' => $this->session->userdata('username')])->row_array();
	$this->data['operator'] = $this->operator_m->getData();
	$this->data['pengguna'] = $this->bts_m->getData();
	$this->data['title'] = "Edit Data BTS/POP";
	$this->data['content'] = "penggunabts/editpop";
	$this->data['detil'] = $this->pengguna_bts_m->detailData($id);
	$this->data['width'] = ['20 MHz', '40 MHz', '20 / 40 MHz', '80 MHz'];
	$this->data['mode'] = ['Access Point', 'Station'];
	$this->data['band'] = ['2 GHz', '5 GHz'];
	$this->data['security'] = ['WPA PSK', 'WPA PSK 2'];
	$this->data['produk'] = ['Ubiquity', 'Mikrotik', 'TP Link', 'Tenda', 'Other'];
  
    $this->load->view('templates/main', $this->data);
  }

public function editpop(){
	$this->pengguna_bts_m->Edit();
    $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span> </button><b>Success!</b> Data berhasil diubah.</div>');
    redirect('penggunabts');
  }
}