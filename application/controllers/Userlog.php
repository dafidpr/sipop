<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userlog extends CI_Controller {
  public function __construct(){
      parent:: __construct();
	   cek_login();
     cek_user();
  }
  public function index(){	
    $this->data['title'] = "User Log";
    $this->data['content'] = "userlog/index";
    $this->data['user'] = $this->db->get_where('user', ['USERNAME' => $this->session->userdata('username')])->row_array();
    $this->load->view('templates/main', $this->data);
  }
  public function LoadData(){
	  $json = array(
	     "aaData"  => $this->user_log_m->loadData()
	  );
	  echo json_encode($json);
  }
}