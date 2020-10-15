<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operator_m extends CI_Model {
    protected $table = "operator";
    protected $primary = "id_operator";

    public function getData(){
        return $this->db->get($this->table)->result_array();
    }
    public function deletedata($id){
        $this->db->delete($this->table, array($this->primary => $id));
    }
    public function getDataById($id){
        return $this->db->get_where($this->table, [$this->primary => $id])->row_array();
    }
    public function Save(){
        $data = array(
            'NAMA_OPERATOR'		=> $this->input->post('nama'),
            'ALAMAT'			=> $this->input->post('alamat'),
            'KELURAHAN'			=> $this->input->post('kelurahan'),
            'KECAMATAN'			=> $this->input->post('kecamatan'),
            'KABUPATEN'			=> $this->input->post('kabupaten'),
            'KODE_POS'			=> $this->input->post('kodepos'),
          );
          return $this->db->insert($this->table, $data);
    }
    public function Edit(){
     $id = $this->input->post('editidop');
	  $data = array(
		'NAMA_OPERATOR'		=> $this->input->post('editnama'),
		'ALAMAT'			=> $this->input->post('editalamat'),
		'KELURAHAN'			=> $this->input->post('editkelurahan'),
		'KECAMATAN'			=> $this->input->post('editkecamatan'),
		'KABUPATEN'			=> $this->input->post('editkabupaten'),
		'KODE_POS'			=> $this->input->post('editkodepos'),
      );
      return $this->db->set($data)
               ->where($this->primary, $id)
               ->update($this->table);
    }
    public function cek($id){
        $sql = "SELECT a.id_operator, b.id_operator AS pop, c.id_operator AS router FROM operator a LEFT JOIN pengguna_pop b ON a.id_operator = b.id_operator LEFT JOIN pengguna_router c ON a.id_operator = c.id_operator WHERE a.id_operator = '$id'";
        $result = $this->db->query($sql)->row_array();
        if ($result['pop'] == NULL && $result['router'] == NULL){
           return array('num' => 0);
        } else {
            return array('num' => 1);
        }
    }
}
  