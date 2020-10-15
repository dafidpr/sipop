<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
  public function __construct(){
      parent:: __construct();
	   cek_login();
  }
  public function index(){	
	$this->data['title'] = "Data User";
	$this->data['content'] = "user/index";
	$this->data['user'] = $this->db->get_where('user', ['USERNAME' => $this->session->userdata('username')])->row_array();
    $this->load->view('templates/main', $this->data);

  }
  public function LoadData(){
	  $json = array(
	     "aaData"  => $this->user_m->getData()
	  );
	  echo json_encode($json);
  }
  public function inputuser(){
		$this->user_m->Save();
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span> </button><b>Success!</b> Data User berhasil disimpan.</div>');
		redirect('user');
  }
  public function detiluser($id=''){
	  $data = $this->user_m->getDataById($id);
	  echo json_encode($data);
  }
  public function edituser(){
		$this->user_m->Edit();
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span> </button><b>Success!</b> Data User berhasil diubah.</div>');
		redirect('user');
  }
  public function hapususer(){
	  $id = $this->input->post('iduser');
	  $this->user_m->deletedata($id);
	  $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span> </button><b>Success!</b> Data User berhasil dihapus.</div>');
	  redirect('user');
  }
  public function ubahpassword(){
	  $this->form_validation->set_rules('curent', 'Current Password', 'required|trim');
	  $this->form_validation->set_rules('new', 'New Password', 'required|trim|matches[repeat]');
	  $this->form_validation->set_rules('repeat', 'Confirm Password', 'required|trim|matches[new]');
	  $this->data['title'] = "Ubah Password";
	  $this->data['content'] = "user/ubahpassword";
	  $this->data['user'] = $this->db->get_where('user', ['USERNAME' => $this->session->userdata('username')])->row_array(); 
	
	if($this->form_validation->run() == false){
		$this->load->view('templates/main', $this->data);
	}else{
		$password = $this->input->post('curent');
		$new_pass = $this->input->post('new');
		
		if(!password_verify($password, $this->data['user']['PASSWORD'])){
		 $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span> </button><b>Error!</b> Password salah.</div>');
		redirect('user/ubahpassword');
		}else{
			if($password == $new_pass){
				 $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span> </button><b>Error!</b> Password baru tidak boleh sama dengan password lama.</div>');
				redirect('user/ubahpassword');
			}else{
				$this->user_m->change_password($new_pass);
				 $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span> </button><b>Success!</b> Password berhasil diubah.</div>');
				redirect('user/ubahpassword');
		  	 }
		 }
	  }
   }
   public function cekDelete($id=''){
	$data = $this->user_m->cek($id);
	echo json_encode($data);
  }
}