<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report_m extends CI_Model {

    public function getDataBts(){
        $sql = "SELECT c.id_pengguna_pop, a.nama_bts, a.lokasi_bts, a.lat_bts, a.long_bts, b.nama_operator, c.ip_address, 
                c.mac_address, c.ssid, c.security FROM bts_pop a, operator b, pengguna_pop c
                WHERE a.id_bts = c.id_bts AND b.id_operator = c.id_operator";
        return $this->db->query($sql)->result_array();
    }
    public function getDataRouter(){
        $sql = "SELECT b.id_pengguna_router, a.nama_bts, a.lokasi_bts, a.lat_bts, a.long_bts, c.nama_operator
        FROM bts_pop a, pengguna_router b, operator c
        WHERE a.id_bts = b.id_bts AND c.id_operator = b.id_operator";
        return $this->db->query($sql)->result_array();
    }
}
