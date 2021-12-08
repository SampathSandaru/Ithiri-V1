<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

    public function __construct()
    {
    /*call CodeIgniter's default Constructor*/
    parent::__construct();
    $this->load->library('session');
      $this->load->helper('url'); 
          $this->load->database();
  
    /*load Model*/
    
    
      $this->load->model('Category_curd');



    }

	public function index()
	{
	    
	    
	   if(!$this->session->userdata('isLogin')){
                
            $config['message']="";
            $this->load->view('login',$config);
            
                
            }else{
                  
                    
                 $config['message']="";
        
                
                $config['category_list']=$this->Category_curd->get();
        
              
        
                $this->load->view('categories.php',$config);
            }
            
            



		//$this->load->view('merchant');
	}
	




        public function Update()
        {


                        if($this->input->post('id'))
                        {
                        
                           

                            $name=$this->input->post('name');	

                            $id=$this->input->post('id');	

                            $status = $this->input->post('status');

                            $response=$this->Category_curd->Update($name,$status,$id);

                            if($response==true){
                        
                                    
                                    $config['message']="success";

                                    $config['category_list']=$this->Category_curd->get();

      

                                    $this->load->view('categories.php',$config);

                            }
                            else{
                            
                                  $config['message']="fail";

                                  $config['category_list']=$this->Category_curd->get();

      

                                  $this->load->view('categories.php',$config);
                            }


                        }else {

                        $config['message']="";

                        $config['category_list']=$this->Category_curd->get();

      

                        $this->load->view('categories.php',$config);

                    }


        }



        public function Add()
        {


                        if($this->input->post('name'))
                        {
                        
                           

                            $name=$this->input->post('name');	


                            $status = $this->input->post('status');

                            $response=$this->Category_curd->Add($name,$status);

                            if($response==true){
                        
                                    
                                    $config['message']="success";

                                    $config['category_list']=$this->Category_curd->get();

      

                                    $this->load->view('categories.php',$config);

                            }
                            else{
                            
                                  $config['message']="fail";

                                  $config['category_list']=$this->Category_curd->get();

      

                                  $this->load->view('categories.php',$config);
                            }


                        }else {

                        $config['message']="";

                        $config['category_list']=$this->Category_curd->get();

      

                        $this->load->view('categories.php',$config);

                    }


        }

	
	
}
