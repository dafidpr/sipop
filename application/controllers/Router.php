<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Router extends CI_Controller {
  public function __construct(){
      parent:: __construct();
	   cek_login();
  }
  public function index(){	
	$sqlbts = "select * from bts_pop";
	$sqlop = "select * from operator";
	$this->data['title'] = "Data Router";
	$this->data['content'] = "router/index";
	$this->data['user'] = $this->db->get_where('user', ['USERNAME' => $this->session->userdata('username')])->row_array();
	$this->data['btspop'] = $this->bts_m->getData();
	$this->data['operator'] = $this->operator_m->getData();
    $this->load->view('templates/main', $this->data);
  }
  public function LoadData(){
	  $json = array(
	     "aaData"  => $this->router_m->getData()
	  );
	  echo json_encode($json);
  }
  public function LoadByLevel($id=''){
	  $output = array(
			"aaData"	=> $this->router_m->getDataByLevel($id)
	  );
	  echo json_encode($output);
  }
  public function infoRouter($id=''){
	  $data = $this->bts_m->getDataById($id);
	  echo json_encode($data);
  }
  public function inputrouter(){     
	$this->router_m->Save();
	$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span> </button><b>Success!</b> Data Router berhasil ditambahkan.</div>');
	redirect('router');
  }
  public function hapusdatarouter($id=''){
	  $this->router_m->deletedata($id);
	  $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span> </button><b>Success!</b> Data Router berhasil dihapus.</div>');
	 redirect('router');
  }
  public function detildata($id=''){
	$this->data['title'] = "Edit Data Router";
	$this->data['content'] = "router/editrouter";
	$this->data['user'] = $this->db->get_where('user', ['USERNAME' => $this->session->userdata('username')])->row_array();
	$this->data['btspop'] = $this->bts_m->getData();
	$this->data['operator'] = $this->operator_m->getData();
	$this->data['router'] = $this->router_m->getDataById($id);
	$this->data['produk'] = ['Mikrotik', 'Cisco', 'Juniper', 'Debian', 'Ubuntu', 'Huawei', 'Other']; 
    $this->load->view('templates/main', $this->data);
  }

  public function editrouter(){
	 $this->router_m->Edit();
	 $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span> </button><b>Success!</b> Data Router berhasil diubah.</div>');
	 redirect('router');
  }
}