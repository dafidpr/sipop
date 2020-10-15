<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {
    protected $table = "user";
    protected $primary = "id_user";

    public function getData(){
        return $this->db->get_where($this->table, ['is_active' => 1])->result_array();
    }
    public function deletedata($id){
        return $this->db->delete($this->table, array($this->primary => $id));
    }
    public function getDataById($id){
        return $this->db->get_where($this->table, [$this->primary => $id])->row_array();
    }
    public function change_password($pass){
        $this->db->set('PASSWORD', password_hash($pass, PASSWORD_DEFAULT))
                 ->where('USERNAME', $this->session->userdata('username'))
                 ->update($this->table);
    }
    public function Save(){
        $data = array(
            'NAMA_USER'  => $this->input->post('nama'),
            'USERNAME'      => $this->input->post('username'),
            'PASSWORD'      => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'TIPE'          => $this->input->post('tipe'),
            'TELP'    	   => $this->input->post('telp'),
            'EMAIL'	   	   => $this->input->post('email'),
            'ALAMAT'   	   => $this->input->post('alamat'),
            'IS_ACTIVE'	   => 1,
 
         );
         return $this->db->insert($this->table, $data);
    }
    public function Edit(){
        $id = $this->input->post('iduser');
        $data = array(
             'NAMA_USER'     => $this->input->post('editnama'),
             'USERNAME'      => $this->input->post('editusername'),
             'TIPE'          => $this->input->post('edittipe'),
             'TELP'    	   => $this->input->post('edittelp'),
             'EMAIL'	   	   => $this->input->post('editemail'),
             'ALAMAT'   	   => $this->input->post('editalamat'),
          );
          return $this->db->set($data)
               ->where($this->primary, $id)
               ->update($this->table);
    }
    public function cek($id){
        $sql = "SELECT a.id_user, b.id_user AS pop, c.id_user AS router FROM USER a LEFT JOIN pengguna_pop b ON a.id_user = b.id_user LEFT JOIN pengguna_router c ON a.id_user = c.id_user WHERE a.id_user = '$id'";
        $result = $this->db->query($sql)->row_array();
        if ($result['pop'] == NULL && $result['router'] == NULL){
            return array('num' => 0);
         } else {
             return array('num' => 1);
         }
    }
}
 