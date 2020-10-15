<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	
    public function __construct(){
        parent:: __construct();
        $this->load->library('form_validation');
    }
    public function index(){
       $this->form_validation->set_rules('username', 'Username', 'required|trim');
       $this->form_validation->set_rules('password', 'Password', 'required|trim');
       $recaptcha = $this->input->post('g-recaptcha-response');
       $response = $this->recaptcha->verifyResponse($recaptcha);
        if( $this->form_validation->run() == false || !isset($response['success']) || $response['success'] <> true){
            $this->data["title"] = "User Login";
            $this->data["content"] = "auth/login";
            $this->data['captcha'] = $this->recaptcha->getWidget();
            $this->load->view('templates/main_auth', $this->data);
          }else {
            $this->_login();
          }
     }
	private function _user_log(){
		date_default_timezone_set('Asia/Jakarta');
		$username = $this->input->post('username');
		$pswd = $this->input->post('password');
	
		$user = $this->db->get_where('user', ['USERNAME' => $username])->row_array();
		$user_log = array(
		   'ID_USER'     => $user['ID_USER'],
		   'WAKTU'       => date('d/m/Y H:i:s'),
		);
		$this->model->Simpan('user_log', $user_log);
	}
    private function _login(){
	    $username = $this->input->post('username');
		$pswd = $this->input->post('password');
        $user = $this->db->get_where('user', ['USERNAME' => $username])->row_array();
        if($user){

        if ( password_verify($pswd, $user['PASSWORD']) ){
            $data = [
                'username'     => $user['USERNAME'],
				'tipe'         => $user['TIPE']
            ];
            $this->session->set_userdata($data);
			 if($user['TIPE'] == 'Administrator'){
				 $this->_user_log();
				  redirect('dashboard');
			 } else {
				  $this->_user_log();
				  redirect('penggunabts');
			 }
        }else{
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade in" role="alert"> <b>Error :</b> Password Salah. </div>');
            redirect('auth'); 
        }
        }else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade in" role="alert">
		   <b>Error :</b> Username belum terdaftar. </div>');
        redirect('auth');
       }
    }
	public function logout(){
        $this->session->unset_userdata('username');
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade in" role="alert">
		   <b>Success :</b> Berhasil Logout. </div>');
        redirect('auth');
    }
	public function blocked(){
	   $data = array (
		  'user'    => $this->db->get_where('user', ['USERNAME' => $this->session->userdata('username')])->row_array(),
		  'title'   => 'Access Denied!'
		);
       $this->load->view('auth/blocked', $data);
	}
}