<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

    public function __construct()
    {
    /*call CodeIgniter's default Constructor*/
      parent::__construct();
      $this->load->library('session');
      $this->load->helper('url'); 
      $this->load->database();
  
    /*load Model*/
    
    
      $this->load->model('Report_curd');



    }


	public function getReport()
	{
	    
	                if(!$this->session->userdata('isLogin')){
                
                 $config['message']="";
            $this->load->view('login',$config);
                
            }else{

                    $config['report_list'] = $this->Report_curd->Get();
  
                 $this->load->view('report.php',$config);

            }


    }
	

	
}
