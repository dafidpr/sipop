<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna_bts_m extends CI_Model {
    protected $table = "pengguna_pop";
    protected $primary = "id_pengguna_pop";

    public function getData(){
        $sql = "SELECT c.id_pengguna_pop, a.nama_bts, c.ssid, c.produk, c.ip_address, c.mac_address, b.nama_operator
			  FROM bts_pop a, operator b, pengguna_pop c
			  WHERE a.id_bts = c.id_bts AND b.id_operator = c.id_operator";
        return $this->db->query($sql)->result_array();
    }
    public function deletedata($id){
        return $this->db->where($this->primary, $id)
                        ->delete($this->table);
    }
    public function getDataById($id){
        return $this->db->get_where($this->table, [$this->primary => $id])->row_array();
    }
    public function getDataByLevel($id){
        $sql = "SELECT c.id_pengguna_pop, a.nama_bts, c.ssid, c.produk, c.ip_address, c.mac_address, b.nama_operator
			    FROM bts_pop a, operator b, pengguna_pop c, user d
                WHERE a.id_bts = c.id_bts AND b.id_operator = c.id_operator AND d.id_user = c.id_user AND c.id_user ='$id'";
         return $this->db->query($sql)->result_array();
    }
    public function detailData($id){
        $sql = "SELECT a.id_bts, b.id_operator, c.id_pengguna_pop, a.*, c.*
                FROM bts_pop a, operator b, pengguna_pop c WHERE a.id_bts = c.id_bts AND b.id_operator = c.id_operator AND c.id_pengguna_pop='$id'";
        return $this->db->query($sql)->row_array();
    }
    public function Save(){
        $data = array(
            'ID_BTS'		=> $this->input->post('namabtspop'),
            'ID_OPERATOR'   => $this->input->post('operatorpop'),
            'ID_USER'		=> $this->input->post('idloginpop'),
            'SSID'          => $this->input->post('ssid'),
            'WIDTH'         => $this->input->post('width'),
            'MODE'          => $this->input->post('mode'),
            'BAND'          => $this->input->post('band'),
            'SECURITY'      => $this->input->post('security'),
            'KODE_SECURITY' => $this->input->post('kodesecurity'),
            'PRODUK'        => $this->input->post('produk'),
            'NAMA_PRODUK'   => $this->input->post('namaproduk'),
            'MAC_ADDRESS'   => $this->input->post('mac'),
            'IP_ADDRESS'    => $this->input->post('ip'),
          );
          return $this->db->insert($this->table, $data);
    }
    public function Edit(){
        $id = $this->input->post('id_pengguna_pop');
        $editdata = array(
              'ID_BTS'		=> $this->input->post('namabtspop'),
              'ID_OPERATOR'   => $this->input->post('operatorpop'),
              'SSID'          => $this->input->post('ssid'),
              'WIDTH'         => $this->input->post('width'),
              'MODE'          => $this->input->post('mode'),
              'BAND'          => $this->input->post('band'),
              'SECURITY'      => $this->input->post('security'),
              'KODE_SECURITY' => $this->input->post('kodesecurity'),
              'PRODUK'        => $this->input->post('produk'),
              'NAMA_PRODUK'   => $this->input->post('namaproduk'),
              'MAC_ADDRESS'   => $this->input->post('mac'),
              'IP_ADDRESS'    => $this->input->post('ip'),
      );
      return $this->db->set($editdata)
               ->where($this->primary, $id)
               ->update($this->table);
    }
}
