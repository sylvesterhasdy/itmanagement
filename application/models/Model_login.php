<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_login extends CI_Model{
 function __construct()
 {
 parent::__construct();
 $this->tbl = "datauser"; // untuk membuat variabel tbl yang mewakili nama tabel yang digunakan dibawah
 }
 
 function cek_user($npk="",$password="")
 {
 $query = $this->db->get_where($this->tbl,array('npk' => $npk, 'password' => $password));
 $query = $query->result_array();
 return $query;
 }
 function ambil_user($npk)
        {
        $query = $this->db->get_where($this->tbl, array('npk' => $npk));
        $query = $query->result_array();
        if($query){
            return $query[0];
        }
    }
}