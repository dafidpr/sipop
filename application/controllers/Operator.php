<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operator extends CI_Controller {
  public function __construct(){
      parent:: __construct();
	   cek_login();
  }
  public function index(){	
	$this->data['title'] = "Data Operator";
	$this->data['content'] = "operator/index";
	$this->data['user'] = $this->db->get_where('user', ['USERNAME' => $this->session->userdata('username')])->row_array();; 
    $this->load->view('templates/main', $this->data);
  }
  public function LoadData(){
	  $json = array(
	     "aaData"  => $this->operator_m->getData()
	  );
	  echo json_encode($json);
  }
  public function inputoperator(){
	  $this->operator_m->Save();
	  $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span> </button><b>Success!</b> Data Operator berhasil disimpan.</div>');
	  redirect('operator');
  }
  public function hapusoperator($id=''){
	  $id = $this->input->post('idoperator');
	  $this->operator_m->deletedata($id);
	  $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span> </button><b>Success!</b> Data Operator berhasil dihapus.</div>');
	  redirect('operator');
  }
  public function detiloperator($id=''){
	  $data = $this->operator_m->getDataById($id);
	  echo json_encode($data);
  }
  public function editoperator(){
	  $this->operator_m->Edit();
	  $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span> </button><b>Success!</b> Data Operator berhasil diubah.</div>');
	  redirect('operator');
  }
  public function cekDelete($id=''){
	$data = $this->operator_m->cek($id);
	echo json_encode($data);
  }
}