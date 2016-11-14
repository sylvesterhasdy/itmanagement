<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard extends CI_Controller{
 function __construct(){
 parent::__construct();
 $this->load->model('model_login');
 $this->auth->cek_auth();
 }

 function index()
 {
 $ambil_akun = $this->model_login->ambil_user($this->session->userdata('npk'));
 $data = array(
 'user' => $ambil_akun,
 );
 $stat = $this->session->userdata('level');
 if($stat=='Admin'){
 $this->load->view('header_admin',$data);
 }else{ 
 $this->load->view('header_users',$data);
 }
 
 }
 function login()
 {
 $session = $this->session->userdata('isLogin');
     if($session == FALSE)
     {
       $this->load->view('login');
     }else
     {
       redirect('dashboard');
     }
 }
 function logout()
 {
 $this->session->sess_destroy();
 redirect('login','refresh');
 }
}
