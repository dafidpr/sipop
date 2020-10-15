<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Router_m extends CI_Model {
    protected $table = "pengguna_router";
    protected $primary = "id_pengguna_router";

    public function getData(){
        $sql = "SELECT c.id_pengguna_router, a.nama_bts, c.produk_router, c.identitas, c.nama_produk_router, 
                c.ip_router, c.mac_router, b.nama_operator FROM bts_pop a, operator b, pengguna_router c
                WHERE a.id_bts = c.id_bts AND b.id_operator = c.id_operator";
        return $this->db->query($sql)->result_array();
    }
    public function deletedata($id){
        return $this->db->where($this->primary, $id)
                        ->delete('bts_pop');
    }
    public function getDataById($id){
        $sql = "SELECT a.id_bts, b.id_operator, a.*, c.*
				FROM bts_pop a, operator b, pengguna_router c WHERE a.id_bts = c.id_bts AND b.id_operator = c.id_operator AND c.id_pengguna_router='$id'";
        return $this->db->query($sql)->row_array();
    }
    public function getDataByLevel($id){
        $sql = "SELECT c.id_pengguna_router, a.nama_bts, c.produk_router, c.identitas, c.nama_produk_router, 
                c.ip_router, c.mac_router, b.nama_operator FROM bts_pop a, operator b, pengguna_router c, user d
                WHERE a.id_bts = c.id_bts AND b.id_operator = c.id_operator AND d.id_user = c.id_user AND c.id_user = '$id'";
         return $this->db->query($sql)->result_array();
    }
    public function Save(){
        $data = array(
            'ID_BTS'			 	=> $this->input->post('namabts'),
            'ID_OPERATOR'           => $this->input->post('operator'),
            'ID_USER'				=> $this->input->post('iduserlevel'),
            'IDENTITAS'             => $this->input->post('identitas'),
            'IP_ROUTER'             => $this->input->post('iprouter'),
            'MAC_ROUTER'            => $this->input->post('macrouter'),
            'PRODUK_ROUTER'         => $this->input->post('produkrouter'),
            'NAMA_PRODUK_ROUTER' 	=> $this->input->post('namarouter'),
          );
          return $this->db->insert($this->table, $data);
    }
    public function Edit(){
        $id = $this->input->post('id_pengguna_router');
        $data = array(
          'ID_BTS'			 	=> $this->input->post('namabts'),
          'ID_OPERATOR'           => $this->input->post('operator'),
          'IDENTITAS'             => $this->input->post('identitas'),
          'IP_ROUTER'             => $this->input->post('iprouter'),
          'MAC_ROUTER'            => $this->input->post('macrouter'),
          'PRODUK_ROUTER'         => $this->input->post('produkrouter'),
          'NAMA_PRODUK_ROUTER' 	=> $this->input->post('namarouter'),
        );
        return $this->db->set($data)
               ->where($this->primary, $id)
               ->update($this->table);
    }
}
 