<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_log_m extends CI_Model {
    protected $table = "user_log";
    protected $primary = "id_log";

    public function getData(){
        $sql = "select a.username, a.nama_user, a.tipe, b.waktu from user a, user_log b where a.id_user  = b.id_user 
        order by id_log desc limit 5";
        return $this->db->query($sql)->result_array();
    }
    public function loadData(){
        $sql = "select a.username, a.nama_user, a.tipe, b.waktu from user a, user_log b where a.id_user  = b.id_user 
        order by id_log desc";
        return $this->db->query($sql)->result_array();
    }
}
  