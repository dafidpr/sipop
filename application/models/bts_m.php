<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bts_m extends CI_Model {
    protected $table = "bts_pop";
    protected $primary = "id_bts";

    public function getData(){
        return $this->db->get($this->table)->result_array();
    }
    public function deletedata($id){
         return $this->db->delete($this->table, array($this->primary => $id));
    }
    public function getDataById($id){
        return $this->db->get_where($this->table, [$this->primary => $id])->row_array();
    }
    public function Save(){
        $data = array(
            'NAMA_BTS'		=> $this->input->post('namabts'),
            'LOKASI_BTS'	=> $this->input->post('lokasi'),
            'LAT_BTS'		=> $this->input->post('lat'),
            'LONG_BTS'		=> $this->input->post('long'),
         );
         return $this->db->insert($this->table, $data);
    }
    public function Edit(){
        $id = $this->input->post('editidbts');
        $data = array(
           'NAMA_BTS'		=> $this->input->post('editnamabts'),
           'LOKASI_BTS'	=> $this->input->post('editlokasi'),
           'LAT_BTS'		=> $this->input->post('editlat'),
           'LONG_BTS'		=> $this->input->post('editlong'),
        );
        return $this->db->set($data)
               ->where($this->primary, $id)
               ->update($this->table);
    }
    public function cek($id){
        $sql = "SELECT a.id_bts, b.id_bts AS pop, c.id_bts AS router FROM bts_pop a LEFT JOIN pengguna_pop b ON a.id_bts = b.id_bts LEFT JOIN pengguna_router c ON a.id_bts = c.id_bts WHERE a.id_bts = '$id'";
        $result = $this->db->query($sql)->row_array();
        if ($result['pop'] == NULL && $result['router'] == NULL){
            return array('num' => 0);
         } else {
             return array('num' => 1);
         }
    }
}
  