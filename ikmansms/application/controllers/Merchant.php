<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Merchant extends CI_Controller {

    public function __construct()
    {
    /*call CodeIgniter's default Constructor*/
    parent::__construct();
    
      $this->load->library('session');
  
      $this->load->helper('url'); 
  
      $this->load->database();
  
      $this->load->model('Merchant_curd');



    }




	public function index()
	{
	    
	    
	 if(!$this->session->userdata('isLogin')){
                
                 $config['message']="";
            $this->load->view('login',$config);
                
            }else{

                    
        $config['message']="";

        
        $config['merchant_list']=$this->Merchant_curd->getMerchantList();

      

        $this->load->view('merchant',$config);
            }
            
            


		//$this->load->view('merchant');
	}
	


       public   function   MerchantNameValidation(){
            
           $value=$this->input->post('value');	
           echo $this->Merchant_curd->MerchantNameValidation($value);
            
        }
    
      public   function getMerchantList()
        {  
            
            $result['merchant_list']=$this->Merchant_curd->getMerchantList();

            $this->load->view('merchant',$result);


        }
        
        
        
              public   function getMerchantDiscount($id)
        {  
            
            $result['discount_list']=$this->Merchant_curd->getMerchantDiscount($id);

            $this->load->view('merchant_discount',$result);


        }
        
       public   function  MerchantBizRegValidation(){
           
           
           $value=$this->input->post('value');	
           echo $this->Merchant_curd->MerchantBizRegValidation($value);
            
        }
        
             public   function getMerchantAppUser($id)
        {  
            
             $result['id']=$id;
            $result['merchant_app_list']=$this->Merchant_curd->getMerchantAppUser($id);


            
            $this->load->view('merchant_app_user',$result);


        }
        
        
        public function SearchMerchant(){

                                    $name=$this->input->get('name');

                                    $config['message']="";

                                    $config['merchant_list']=$this->Merchant_curd->SearchMerchant($name);

                                    $this->load->view('merchant',$config);

        }


        public function UpdateMerchant(){


                        if($this->input->post('name'))
                        {
                        
                            $id=$this->input->post('id');	

                            $name=$this->input->post('name');	

                            $phone=$this->input->post('phone');	
                            
                            $biz_registration=$this->input->post('biz_registration');

                            $email=$this->input->post('email');
                    
                            $address = $this->input->post('address');

                            $fb_name=$this->input->post('fb_name');

                            $fb_link=$this->input->post('fb_link');
                        
                            $insta_name=$this->input->post('insta_name');

                            $insta_link = $this->input->post('insta_link');

                            $status = $this->input->post('status');

                            $location_link = $this->input->post('location');

                            $response=$this->Merchant_curd->UpdateMerchant($id,$name,$phone,$biz_registration,$email,$address,$fb_name,$fb_link,$insta_name,$insta_link,$location_link,$status);

                            if($response==true){
                        
                                    
                                    $config['message']="success";

                                    $config['merchant_list']=$this->Merchant_curd->getMerchantList();

                                    $this->load->view('merchant',$config);

                            }
                            else{
                            
                                $config['message']="fail";

                                $config['merchant_list']=$this->Merchant_curd->getMerchantList();

                                $this->load->view('merchant',$config);
                            }


                        }else {

                        $config['message']="";

                        $config['merchant_list']=$this->Merchant_curd->getMerchantList();

                        $this->load->view('merchant',$config);

                        }



        }


        public function AddNewAppUsers()
        {


                        if($this->input->post('username'))
                        {
                        
                           

                            $username=$this->input->post('username');	

                            $password=$this->input->post('password');	
                            
                            $status=$this->input->post('status');
                            
                             $id=$this->input->post('id');
                            
                            

                         
                            $response=$this->Merchant_curd->AddNewAppUsers($username,$password,$status,$id);
                            
                            

                            if($response==true){
                        
                                    
                                    $result['message']="success";

                                     $result['id']=$id;
                                     
                                     $result['merchant_app_list']=$this->Merchant_curd->getMerchantAppUser($id);

                                    $this->load->view('merchant_app_user',$result);

                            }
                            else{
                            
                                  $config['message']="fail";

                               
                                $result['id']=$id;
                                     
                                $result['merchant_app_list']=$this->Merchant_curd->getMerchantAppUser($id);

                                $this->load->view('merchant_app_user',$result);
                            }


                        }else {

                        $config['message']="";

                        $config['merchant_list']=$this->Merchant_curd->getMerchantList();

                        $this->load->view('merchant',$config);

                    }


        }
        
        public function AddNewMerchant()
        {


                        if($this->input->post('name'))
                        {
                        
                           

                            $name=$this->input->post('name');	

                            $phone=$this->input->post('phone');	
                            
                            $biz_registration=$this->input->post('biz_registration');

                            $email=$this->input->post('email');
                    
                            $address = $this->input->post('address');

                            $fb_name=$this->input->post('fb_name');

                            $fb_link=$this->input->post('fb_link');
                        
                            $insta_name=$this->input->post('insta_name');

                            $insta_link = $this->input->post('insta_link');

                            $status = $this->input->post('status');

                            $location_link = $this->input->post('location');
                            
                            
                                                
                            $bizRegValidation = $this->Merchant_curd->MerchantBizRegValidation($biz_registration);
                            
                            $nameValidation = $this->Merchant_curd->MerchantNameValidation($name);
                            
                            if($bizRegValidation == 0 && $nameValidation==0){
                                
                                 $response=$this->Merchant_curd->AddNewMerchant($name,$phone,$biz_registration,$email,$address,$fb_name,$fb_link,$insta_name,$insta_link,$location_link,$status);

                            if($response==true){
                        
                                    
                                    $config['message']="success";

                                    $config['merchant_list']=$this->Merchant_curd->getMerchantList();

                                    $this->load->view('merchant',$config);

                            }
                            else{
                            
                                  $config['message']="fail";

                                  $config['merchant_list']=$this->Merchant_curd->getMerchantList();

                                  $this->load->view('merchant',$config);
                            }
                                
                            }else{
                                
                                 $config['message']="duplicate";

                                    $config['merchant_list']=$this->Merchant_curd->getMerchantList();

                                    $this->load->view('merchant',$config);
                                
                            }

             


                        }else {

                        $config['message']="";

                        $config['merchant_list']=$this->Merchant_curd->getMerchantList();

                        $this->load->view('merchant',$config);

                    }


        }

	
	
}
