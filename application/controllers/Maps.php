<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maps extends CI_Controller {
  public function __construct(){
      parent:: __construct();
	   cek_login();
  }
  public function index(){
    $this->data['title'] = "Pemetaan Lokasi BTS";
    $this->data['content'] = "maps/index";
    $this->data['user'] = $this->db->get_where('user', ['USERNAME' => $this->session->userdata('username')])->row_array();
    $this->data['lokasi'] = $this->db->get('bts_pop')->result();
    $this->load->view('templates/main_maps', $this->data);
  }
}