<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bts extends CI_Controller {
  public function __construct(){
      parent:: __construct();
	   cek_login();
	   $this->load->model('bts_m');
  }
  public function index(){	
	  $this->data['title'] = "Data BTS";
	  $this->data['content'] = "bts/index";
	  $this->data['user'] = $this->db->get_where('user', ['USERNAME' => $this->session->userdata('username')])->row_array();
      $this->load->view('templates/main', $this->data);

  }
  public function LoadData(){
	  $output = array(
		"aaData"  => $this->bts_m->getData()
	  );
	  echo json_encode($output);
  }
  public function inputbts(){
	   $this->bts_m->Save();
	   $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span> </button><b>Success!</b> Data BTS berhasil disimpan.</div>');
		redirect('bts');
  }
  public function hapusbts(){
	  $id = $this->input->post('idbts');
	  $this->bts_m->deletedata($id);
	  $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span> </button><b>Success!</b> Data BTS berhasil dihapus.</div>');
	  redirect('bts');
  }
  public function detilbts($id=''){
	  $data = $this->bts_m->getDataById($id);
	  echo json_encode($data);
  }
  public function editbts(){
	  $this->bts_m->Edit();
	  $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span> </button><b>Success!</b> Data BTS berhasil diubah.</div>');
     redirect('bts');
  }
  public function cekDelete($id=''){
	$data = $this->bts_m->cek($id);
	echo json_encode($data);
  }
}