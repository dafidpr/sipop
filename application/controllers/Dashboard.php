<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
  public function __construct(){
      parent:: __construct();
     cek_login();
  }
  public function index(){	

    $this->data['title'] = "Dashboard";
    $this->data['content'] = "dashboard/index";
    $this->data['user'] = $this->db->get_where('user', ['USERNAME' => $this->session->userdata('username')])->row_array();
    $this->data['userlog'] = $this->user_log_m->getData();
    $this->data['pengguna'] = $this->db->get('user')->num_rows();
    $this->data['operator'] = $this->db->get('operator')->num_rows();
    $this->data['bts'] = $this->db->get('bts_pop')->num_rows();
    $this->data['router'] = $this->db->get('pengguna_router')->num_rows();

     $this->load->view('templates/main', $this->data);
  }
}