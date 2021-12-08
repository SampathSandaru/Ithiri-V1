<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
    /*call CodeIgniter's default Constructor*/
    
    parent::__construct();
   
    $this->load->library('session');
    $this->load->helper('url'); 
    $this->load->database();
    $this->load->model('Security_model');
     $this->load->library('encryption');
    $this->load->model('Admin_curd');

    }
    

    
    function testenc(){
     

     $input = 'mytest';
    
     echo $this->Security_model->encryptIt($input);
    
      
    }


       public   function  AdminUsernameValidation(){
           
           $value=$this->input->post('value');	
           
           echo $this->Admin_curd->AdminUsernameValidation($value);
            
        }


       public   function  AdminNameValidation(){
           
           
           $value=$this->input->post('value');	
           echo $this->Admin_curd->AdminNameValidation($value);
            
        }

	public function index()
	{


            if(!$this->session->userdata('isLogin')){
                
                 $config['message']="";
            $this->load->view('login',$config);
                
            }else{
                   $config['message']="";
                    $config['admin_list']=$this->Admin_curd->get();
                    $this->load->view('admin',$config); 
            }
    

		//$this->load->view('merchant');
	}
	


    
      public   function Get()
        {  
            
            $result['merchant_list']=$this->Merchant_curd->getMerchantList();

            $this->load->view('merchant',$result);


        }

        public function Update()
        {

                        if($this->input->post('name'))
                        {
                        
                            $name=$this->input->post('name');	

                            $level=$this->input->post('level');	
                            
                            $username=$this->input->post('username');

                            $password=$this->input->post('password');

                            $old_name=$this->input->post('old_name');
                            
                            $old_username=$this->input->post('old_username');

                            $status=$this->input->post('status');

                            $id=$this->input->post('id');
                            
                           $username_result =$old_username== $username?0: $this->Admin_curd->AdminUsernameValidation($username);
                           
                           $name_result =$old_name ==$name?0:   $this->Admin_curd->AdminNameValidation($name);
                           
                           
                           
                          if($username_result == 0 && $name_result == 0){
                              
                                                  
                            $response=$this->Admin_curd->Update($id,$name,$level,$username,$password,$status);

                            if($response==true){
                                                           
                                    $config['message']="success";

                                    $config['admin_list']=$this->Admin_curd->get();

                                    $this->load->view('admin',$config);

                            }
                            else{
                            
                                  $config['message']="fail";

                                  $config['admin_list']=$this->Admin_curd->get();

                                  $this->load->view('admin',$config);
                            }
                              
                          }else{
                                    $config['message']="duplicate";

                                    $config['admin_list']=$this->Admin_curd->get();

                                    $this->load->view('admin',$config);
                          }
                              



                        }else {

                        $config['message']="";

                        $config['admin_list']=$this->Admin_curd->get();

                        $this->load->view('admin',$config);

                    }


        }



        public function Add()
        {

                        if($this->input->post('name'))
                        {
                        
                            $name=$this->input->post('name');	

                            $level=$this->input->post('level');	
                            
                            $username=$this->input->post('username');

                            $password=$this->input->post('password');

                            $status=$this->input->post('status');
                            
                            $username_result =  $this->Admin_curd->AdminUsernameValidation($username);
                           
                           $name_result =  $this->Admin_curd->AdminNameValidation($name);
                           
                           
                          if($username_result == 0 && $name_result == 0){
                               
                                $response=$this->Admin_curd->Add($name,$level,$username,$password,$status);

                            if($response==true){
                        
                                    
                                    $config['message']="success";

                                    $config['admin_list']=$this->Admin_curd->get();

                                    $this->load->view('admin',$config);



                            }
                            else{
                            
                                  $config['message']="fail";

                                  $config['admin_list']=$this->Admin_curd->get();

                                  $this->load->view('admin',$config);
                            }
                            
                                

                               
                          }else{
                               
                                 
                                    $config['message']="duplicate";

                                    $config['admin_list']=$this->Admin_curd->get();

                                    $this->load->view('admin',$config);

                        }
                    
                            // $response=$this->Admin_curd->Add($name,$level,$username,$password,$status);

                            // if($response==true){
                        
                                    
                            //         $config['message']="success";

                            //         $config['admin_list']=$this->Admin_curd->get();

                            //         $this->load->view('admin',$config);



                            // }
                            // else{
                            
                            //       $config['message']="fail";

                            //       $config['admin_list']=$this->Admin_curd->get();

                            //       $this->load->view('admin',$config);
                            // }


                        }else {

                        $config['message']="";

                        $config['admin_list']=$this->Admin_curd->get();

                        $this->load->view('admin',$config);

                    }


        }

	
	
}
