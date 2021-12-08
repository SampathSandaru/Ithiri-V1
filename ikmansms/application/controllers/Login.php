<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
    /*call CodeIgniter's default Constructor*/
    parent::__construct();
    $this->load->library('session');
    $this->load->helper('url'); 
    $this->load->database();
    $this->load->model('Admin_curd');
    $this->load->model('Login_curd');

    }


	public function index()
	{

        $config['message']="";
       // $config['admin_list']=$this->Admin_curd->get();
        $this->load->view('login',$config);
		//$this->load->view('merchant');
	}
	
	public function loginValidation()
	{

        $username=$this->input->post('username');	

        $password=$this->input->post('password');	
        
        $config['message']="";
        
        if($this->Login_curd->loginValidation($username,$password) == 0){
            
            $config['message']="Invalid Login";
            $this->load->view('login',$config);
            
        }else{
            
             $this->session->set_userdata('isLogin', true);
              $config['admin_list']=$this->Admin_curd->get();
              $config['message']="Login Success";
              $this->load->view('admin.php',$config);
              
        }
        
      
		//$this->load->view('merchant');
	}
	
	
	public function Logout()
    {
        $this->session->sess_destroy();
        $config['message']="";
        $this->load->view('login',$config);
    }
	

	
}
