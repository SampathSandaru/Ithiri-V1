<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManageCustomer extends CI_Controller {

    public function __construct()
    {
    /*call CodeIgniter's default Constructor*/
      parent::__construct();
      $this->load->library('session');
      $this->load->helper('url'); 
      $this->load->database();
  
    /*load Model*/
    
    
      $this->load->model('ManageCustomer_curd');



    }


	public function index()
	{


            if(!$this->session->userdata('isLogin')){
                
                 $config['message']="";
            $this->load->view('login',$config);
                
            }else{

                    
                    
                    $config['message']="";
                
                $config['customer_list'] = $this->ManageCustomer_curd->get();
               
                $config['customer_level'] = $this->ManageCustomer_curd->getCutomerLevel();
          
                $this->load->view('manage_customer.php',$config);
            }
            


    }
	

      public function getSearchResult()
        {  
            
            $id=$this->input->get('id');
            $config['customer_level'] = $this->ManageCustomer_curd->getCutomerLevel();
            $config['customer_list'] = $this->ManageCustomer_curd->getSearch($id);

            $this->load->view('manage_customer.php',$config);


        }

      public function getCutomerLevel()
        {  
            
          

            $config['customer_level'] = $this->ManageCustomer_curd->getCutomerLevel();

            $this->load->view('manage_customer.php',$config);


        }
        
        public function Update(){

            

                        if($this->input->post('id'))
                        {
                        
                            $id=$this->input->post('id');	

                            $status=$this->input->post('status');	

                            $level=$this->input->post('level');	

                            
                            $name=$this->input->post('name');	
                            

                            $response=$this->ManageCustomer_curd->Update($id,$status,$level,$name);

                            if($response==true){
                        
                                    
                                    $config['message']="success";

                                //     $config['customer_list'] = $this->ManageCustomer_curd->getSearch($id);


                                //   $this->load->view('manage_customer.php',$config);

                                $config['customer_list'] = $this->ManageCustomer_curd->get();
                               
                                $config['customer_level'] = $this->ManageCustomer_curd->getCutomerLevel();
                          
                                $this->load->view('manage_customer.php',$config);


                            }
                            else{
                            
                                $config['message']="fail";

                                     $config['customer_list'] = $this->ManageCustomer_curd->get();
       
                                $config['customer_level'] = $this->ManageCustomer_curd->getCutomerLevel();
                          
                                $this->load->view('manage_customer.php',$config);

                            }


                        }else {

                        $config['message']="";

                                // $config['customer_list'] = $this->ManageCustomer_curd->getSearch($id);

                                // $this->load->view('manage_customer.php',$config);
                        
                                $config['customer_list'] = $this->ManageCustomer_curd->get();
                               
                                $config['customer_level'] = $this->ManageCustomer_curd->getCutomerLevel();
                          
                                $this->load->view('manage_customer.php',$config);


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

                            $location_link = $this->input->post('location_link');

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


                        }else {

                        $config['message']="";

                        $config['merchant_list']=$this->Merchant_curd->getMerchantList();

                        $this->load->view('merchant',$config);

                    }


        }

	
	
}
