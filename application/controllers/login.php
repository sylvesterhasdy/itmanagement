<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('model_login'); 
    }
    function index()
    {
        $session = $this->session->userdata('isLogin'); 
        if($session == FALSE) 
        {
            $this->load->view('test');
        }else 
        {
            redirect('dashboard');
        }
    }    
    function autentifikasi()
    {
        $npk = $this->input->post("npk");
        $password = $this->input->post("password");
        
        $cek = $this->model_login->cek_user($npk,md5($password));
        if(count($cek) == 1){
            foreach ($cek as $cek) {
                $level = $cek['level'];
            }
            $this->session->set_userdata(array(
                'isLogin'   => TRUE,
                'npk'  => $npk,
                'level'      => $level,
            ));
                
            redirect('dashboard','refresh');
        }else{
            echo "<script>alert('Username atau Password salah!')</script>";
            redirect('login','refresh');
        }
        
    }
}