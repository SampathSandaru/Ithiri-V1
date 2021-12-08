<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManageDiscount extends CI_Controller {

    public function __construct()
    {
    
    parent::__construct();
    $this->load->library('session');
    $this->load->helper('url'); 
    $this->load->database();
    $this->load->model('ManageDiscount_curd');
    $this->load->model('ManageCustomer_curd');
    $this->load->model('Merchant_curd');
     $this->load->helper('url', 'form');

    }


	public function index()
	{

            if(!$this->session->userdata('isLogin')){
                
                 $config['message']="";
            $this->load->view('login',$config);
                
            }else{

                    
        $config['message']="";

        $config['discount_type_list']=$this->ManageDiscount_curd->getDiscountType();

        $config['location_list']=$this->ManageDiscount_curd->getLocation();

        $config['discount_list']=$this->ManageDiscount_curd->get();
        
        $config['merchant_list']=$this->Merchant_curd->getActiveMerchantList();
        
        $config['customer_type']=$this->ManageCustomer_curd->getCutomerLevel();

        $this->load->view('manage_discount',$config);
            }


		//$this->load->view('merchant');
	}
	


    
      public   function Get()
        {  
            
            $result['merchant_list']=$this->Merchant_curd->getActiveMerchantList();


            $this->load->view('merchant',$result);


        }

        public function Update()
        {

                        if($this->input->post('merchant_id'))
                        {
                        
                            $upload_small_image="";
                            
                             $upload_large_image="";
                                                //Upload Large Image

                            if(is_uploaded_file($_FILES['large_image']['tmp_name'])){
                                
                                $config1['upload_path'] = './public/Images';
                                $config1['allowed_types'] = 'jpeg|jpg|png';

                                $this->load->library('upload', $config1);
                        
                                if (!$this->upload->do_upload('large_image')) {
                                    
                                    
                                    $error = array('error' => $this->upload->display_errors());

                                } else{
                                    
                                    $uploadData = $this->upload->data(); 

				                    $upload_large_image ='https://ithiri.sadaharitha.com/ithiri/new_admin/public/Images/'.$uploadData['file_name']; 
                                    
                                    
                                }

                                
                            }
                            
                            
                            if(is_uploaded_file($_FILES['small_image']['tmp_name'])){
                                
                                                                
                                 $config['upload_path'] = './public/Images';
                                 $config['allowed_types'] = 'jpeg|jpg|png';
                                // $config['max_size'] = 2000;
                                // $config['max_width'] = 1500;
                                // $config['max_height'] = 1500;
                        
                                $this->load->library('upload', $config);
                        
                                if (!$this->upload->do_upload('small_image')) {
                                    
                                    
                                    $error = array('error' => $this->upload->display_errors());
                        
                                  // $this->load->view('files/upload_form', $error);
                                } else{
                                    
                                    $uploadData = $this->upload->data(); 

				                    $upload_small_image ='https://ithiri.sadaharitha.com/ithiri/new_admin/public/Images/'.$uploadData['file_name']; 
                                    
                                    
                                }
                        
                            }

                        //Upload samll Image
                           
                            $merchant_id=$this->input->post('merchant_id');	

                            $offer_title=$this->input->post('offer_title');	
                            
                            $discount_type=$this->input->post('discount_type');	
                            
                            // $image=$this->input->post('image');

                            $contact=$this->input->post('contact');
                            
                            $emailnew=$this->input->post('newemail');
                            
                            $address =$this->input->post('address');
                            
                            $discount_code =$this->input->post('discount_code');
                              
                            $offer_url=$this->input->post('offer_url');

                            $location=$this->input->post('location');

                            $valid_date=$this->input->post('valid_date');
                    
                            $description=$this->input->post('description');	
                            
                            $customer_type=json_encode($this->input->post('customer_type'));
                            
                            $offer_type=$this->input->post('offer_type');

                            $fb_name=$this->input->post('fb_name');	
                            
                            $fb_link=$this->input->post('fb_link');

                            $insta_name=$this->input->post('insta_name');

                            $insta_link=$this->input->post('insta_link');

                            $status=$this->input->post('status');

                            $id=$this->input->post('id');
                            
                            $disc_location=$this->input->post('disc_location');
                             
                            $main_category_type=$this->input->post('main_category_type');

                            $response=$this->ManageDiscount_curd->Update($id,$merchant_id,$offer_title,$address,
                            $valid_date,$contact,$description,$customer_type,$offer_type,$offer_url,$discount_code,
                            $location,$fb_name,$fb_link,$insta_name,$insta_link,$status,$emailnew,$discount_type,$upload_small_image,$upload_large_image,$disc_location,$main_category_type);

                            if($response==true){
                        
                                    
                                    $config['message']="success";

                                    $config['merchant_list']=$this->Merchant_curd->getActiveMerchantList();

                                    $config['discount_list']=$this->ManageDiscount_curd->get();

                                    $config['customer_type']=$this->ManageCustomer_curd->getCutomerLevel();

                                    $config['discount_type_list']=$this->ManageDiscount_curd->getDiscountType();
                            
                                    $config['location_list']=$this->ManageDiscount_curd->getLocation();
        
                                    $this->load->view('manage_discount',$config);



                            }
                            else{
                            
                                  $config['message']="fail";

                                  $config['discount_list']=$this->ManageDiscount_curd->get();

                                  $config['merchant_list']=$this->Merchant_curd->getActiveMerchantList();
                                  
                                  $config['customer_type']=$this->ManageCustomer_curd->getCutomerLevel();

                                    $config['discount_type_list']=$this->ManageDiscount_curd->getDiscountType();
                            
                                    $config['location_list']=$this->ManageDiscount_curd->getLocation();

                                  $this->load->view('manage_discount',$config);
                            }


                        }else {

                            $config['message']="fail";

                            $config['merchant_list']=$this->Merchant_curd->getActiveMerchantList();

                            $config['discount_list']=$this->ManageDiscount_curd->get();
                            
                            $config['discount_type_list']=$this->ManageDiscount_curd->getDiscountType();

                             $config['location_list']=$this->ManageDiscount_curd->getLocation();

                            $this->load->view('manage_discount',$config);
                    }


        }



        public function Add()
        {

                        if($this->input->post('merchant_id'))
                        {
                        
                            $upload_small_image="";
                            
                             $upload_large_image="";
                        
                        
                          //Upload Large Image

   if(is_uploaded_file($_FILES['large_image']['tmp_name'])){
                                       $config1['upload_path'] = './public/Images';
                                $config1['allowed_types'] = 'gif|jpg|png';

                                $this->load->library('upload', $config1);
                        
                                if (!$this->upload->do_upload('large_image')) {
                                    
                                    
                                    $error = array('error' => $this->upload->display_errors());

                                } else{
                                    
                                    $uploadData = $this->upload->data(); 

				                    $upload_large_image ='https://ithiri.sadaharitha.com/ithiri/new_admin/public/Images/'.$uploadData['file_name']; 
                                    
                                    
                                }
                                
       
   }
   if(is_uploaded_file($_FILES['small_image']['tmp_name'])){
       
                               
                        //Upload samll Image
                                $config['upload_path'] = './public/Images';
                                $config['allowed_types'] = 'jpeg|jpg|png';
                                // $config['max_size'] = 2000;
                                // $config['max_width'] = 1500;
                                // $config['max_height'] = 1500;
                        
                                $this->load->library('upload', $config);
                        
                                if (!$this->upload->do_upload('small_image')) {
                                    
                                    
                                    $error = array('error' => $this->upload->display_errors());
                        
                                  // $this->load->view('files/upload_form', $error);
                                } else{
                                    
                                    $uploadData = $this->upload->data(); 

				                    $upload_small_image ='https://ithiri.sadaharitha.com/ithiri/new_admin/public/Images/'.$uploadData['file_name']; 
                                    
                                    
                                }
       
   }


                        


        
                            //   $upload_path="public/Images";
                            //     $uid='10'; //creare seperate folder for each user 
                            //     $upPath=$upload_path;
                             
                            //     $config = array(
                            //     'upload_path' => $upPath,
                            //      );
                            //     $this->load->library('upload', $config);
                            //     if(!$this->upload->do_upload('small_image'))
                            //     { 
                            //         echo  $this->upload->display_errors();
                        
                            //     }
             
                            $merchant_id=$this->input->post('merchant_id');	

                            $offer_title=$this->input->post('offer_title');	

                            $offer_type=$this->input->post('discount_type');

                            $description=$this->input->post('description');	

                            $email=$this->input->post('email');	

                        //    $contact=$this->input->post('contact');

                            $contact=$this->input->post('contact');
                            
                            $valid_date=$this->input->post('valid_date');
                    
                         //   $customer_type=$this->input->post('customer_type');
                            
                            $customer_type = json_encode($this->input->post('customer_type'));
                            
                           // $customer_type = json_decode($this->customer_type, true );

                            $availability=$this->input->post('availability');

                            $address=$this->input->post('address');

                            $code=$this->input->post('discount_code');

                            $offer_url=$this->input->post('offer_url');

                            $fb_name=$this->input->post('fb_name');	
                            
                            $fb_link=$this->input->post('fb_link');

                            $insta_name=$this->input->post('insta_name');

                            $insta_link=$this->input->post('insta_link');

                            $status=$this->input->post('status');

                            $location_link=$this->input->post('location_link');

                            $disc_location=$this->input->post('disc_location');
                             
                            $main_category_type=$this->input->post('main_category_type');

                            $response=$this->ManageDiscount_curd->Add($merchant_id,$offer_title,$valid_date,
                            $contact,$description,$customer_type,$offer_type,$offer_url,$fb_name,$fb_link,$insta_name,$insta_link,$availability,$address,$code,$status,$location_link,$email,$upload_small_image,$upload_large_image,$disc_location,$main_category_type);

                            if($response==true){
                        
                                    
                                    $config['message']="success";

                                    $config['merchant_list']=$this->Merchant_curd->getActiveMerchantList();

                                    $config['discount_list']=$this->ManageDiscount_curd->get();

                                    $config['customer_type']=$this->ManageCustomer_curd->getCutomerLevel();

                                    $config['discount_type_list']=$this->ManageDiscount_curd->getDiscountType();
                            
                                    $config['location_list']=$this->ManageDiscount_curd->getLocation();
                                    
                                    $this->load->view('manage_discount',$config);

                            }
                            else{
                            
                                  $config['message']="fail";

                                  $config['discount_list']=$this->ManageDiscount_curd->get();

                                  $config['merchant_list']=$this->Merchant_curd->getActiveMerchantList();
 
                                  $config['customer_type']=$this->ManageCustomer_curd->getCutomerLevel();
                                  
                                  $config['discount_type_list']=$this->ManageDiscount_curd->getDiscountType();

                                  $config['location_list']=$this->ManageDiscount_curd->getLocation();
                                 
                                  $this->load->view('manage_discount',$config);
                            }


                        }else {

                            $config['message']="fail";

                            $config['merchant_list']=$this->Merchant_curd->getActiveMerchantList();

                            $config['discount_list']=$this->ManageDiscount_curd->get();

                            $config['customer_type']=$this->ManageCustomer_curd->getCutomerLevel();
                        
                            $config['discount_type_list']=$this->ManageDiscount_curd->getDiscountType();

                            $config['location_list']=$this->ManageDiscount_curd->getLocation(); 
                            
                            $this->load->view('manage_discount',$config);
                    }


        }
        
      function  SearchDiscount(){
          
          
             $name=$this->input->get('name');	
            
             $config['message']="";

                            $config['merchant_list']=$this->Merchant_curd->getActiveMerchantList();

                            $config['discount_list']=$this->ManageDiscount_curd->SearchDiscount($name);

                            $config['customer_type']=$this->ManageCustomer_curd->getCutomerLevel();
                        
                            $config['discount_type_list']=$this->ManageDiscount_curd->getDiscountType();

                            $config['location_list']=$this->ManageDiscount_curd->getLocation(); 
                            
                            $this->load->view('manage_discount',$config);
            
        }

	
	
}
