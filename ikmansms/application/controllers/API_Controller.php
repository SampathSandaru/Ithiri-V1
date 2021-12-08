<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class API_Controller extends CI_Controller  {

	public function __construct()
	{

		parent::__construct();


		$this->load->database();

		$this->load->model('Api_model');


   }
   
   
   
   	function transactionconfirm(){

		$auth_token	= $this->input->post('auth_token');
		
		$cust_id	= $this->input->post('cust_id');
		
		$offer_id	= $this->input->post('offer_id');
		
		$mer_id	= $this->input->post('mer_id');
		
		$transaction_amount	= $this->input->post('transaction_amount');
			
		if($auth_token==AUTH_TOKEN) {

			$json['status'] = STATUS_BAD_REQUEST;

			$json['msg'] = 'Session Expired';

		} else {

			$rsData = array();

			$rs = $this->Api_model->transactionconfirm($cust_id,$mer_id,$offer_id,$transaction_amount);

			if($rs){
			    
			    
            $json['status'] = STATUS_OK;
			
        	$json['msg'] = 'success';

			}else{
			    
			$json['status'] = 400;
			
        	$json['msg'] = 'fail';
			    
			}


		//	$json['data'] = $rsData;


		}


     

        header("Content-Type: application/json");

		echo json_encode($json);


	}

		function merchantlogin(){

		$auth_token	= $this->input->post('auth_token');
		
		$username	= $this->input->post('username');
		
		$password	= $this->input->post('password');
		
		$mer_user_id;
		$mer_id;
		$is_available = false;
		
		if($auth_token==AUTH_TOKEN) {

			$json['status'] = STATUS_BAD_REQUEST;

			$json['msg'] = 'Session Expired';

		} else {

			$rsData = array();

			$rs = $this->Api_model->merchantlogin($username,$password);

			if($rs){
			    
			    
			    
                 if(count($rs) == 1){
    				foreach($rs as $k => $v){
                 
                            $is_available = true;
                            
                            $mer_user_id = $v['mer_user_id'];
                            
                            $mer_id =$v['mer_id'];
                            
                        }
    
    				}

			}




            if($is_available){
                
                
            $json['status'] = STATUS_OK;

			$json['msg'] = 'Success';
			
			$json['mer_user_id'] = $mer_user_id;
			
			$json['mer_id'] = $mer_id;
			
			
                
            }else{
                
         

            $json['status'] = 400;

			$json['error'] = 'invalid_creds';
			
		   $json['error_description'] = 'Invalid email or password.';
                
                
            }



		}

        header("Content-Type: application/json");

		echo json_encode($json);


	}



	function discountvalidate(){

		$auth_token	= $this->input->post('auth_token');
		
		$cust_id	= $this->input->post('cust_id');
		
		$offer_id	= $this->input->post('offer_id');

        $is_active_customer_id=false;
        
        $is_active_customer_status=false;
        
        $is_active_offer_id=false;
        
       $is_active_offer_status=false;


		if($auth_token==AUTH_TOKEN) {

			$json['status'] = STATUS_BAD_REQUEST;

			$json['msg'] = 'Session Expired';

		} else {

			$rsData = array();

			$offer_rs = $this->Api_model->getOfferFromId($offer_id);
			
			$customer_rs = $this->Api_model->getCustomerFromId($cust_id);
			
			
			if($offer_rs){
			    
			  
			    
			    $offer_count = count($offer_rs);
			    
			 
			 if($offer_count == 1){
			     
			   $is_active_offer_id = true;
			   
			   
			  
			  $current_date = date("Y-m-d");
	
			   foreach($offer_rs as $k => $v){
			    	    
			    	   $new_date;
			    	    
			    	 if($current_date <= $v['disc_expiry']){
			    	     
			    	     $is_active_offer_status=true;
			    	 }   
			   }
			   
			   
			 }else{
			     
			   $is_active_offer_id=false; 
			    $is_active_offer_status=false;   
			     
			 }
			 
			    
			}
			
			
			if($customer_rs){
			    
			  
			    
			    $customer_count = count($customer_rs);
			    
			 
			 if($customer_count == 1){
			     
			   $is_active_customer_id = true;
			   $current_date = date('y-m-d');
			    
			   foreach($customer_rs as $k => $v){
			    	    
			    	 if($v['cust_status'] == 1){
			    	      $is_active_customer_status=true;
			    	 }   
			   }
			   
			   
			 }else{
			     
			   $is_active_customer_id=false; 
			    $is_active_customer_status=false;   
			     
			 }
			 
			    
			}
			
			
			
			
			$json['status'] =$is_active_customer_id && $is_active_offer_id? STATUS_OK:400;

	
			$json['cust_id'] = $cust_id;
			
        	$json['is_active_customer_id'] =	$is_active_customer_id;
                
            $json['is_active_customer_status'] =    $is_active_customer_status;
                
             $json['is_active_offer_id'] =   $is_active_offer_id;
                
            $json['is_active_offer_status'] =    $is_active_offer_status;

		}

        header("Content-Type: application/json");

		echo json_encode($json);


	}
	
	
		function merchenthistory(){

		$auth_token	= $this->input->post('auth_token');
		
		$mer_id	= $this->input->post('mer_id');
		
		
		if($auth_token==AUTH_TOKEN) {

			$json['status'] = STATUS_BAD_REQUEST;

			$json['msg'] = 'Session Expired';

		} else {

			$rsData = array();

			$rs = $this->Api_model->merchenthistory($mer_id);

			if($rs){

				foreach($rs as $k => $v){
             

					$rsData[$k]['offer_id'] = $v['disc_id'];

				 	$rsData[$k]['cust_id'] =  $v['cust_id'];
				 	
				 	$rsData[$k]['offer_title'] =  $v['disc_title'];
				 		
				 	$rsData[$k]['merchant_name'] =  $v['mer_name'];
				 			
				 	$rsData[$k]['description'] =  $v['disc_info'];
				 				
				 	$rsData[$k]['claim_date'] =  $v['trans_date'];


				}



			}



			$json['status'] = STATUS_OK;

			$json['msg'] = 'Success';
			
			$json['cust_id'] = $mer_id;

			$json['data'] = $rsData;



		}

        header("Content-Type: application/json");

		echo json_encode($json);


	}


	function customerhistory(){

		$auth_token	= $this->input->post('auth_token');
		
		$cust_id	= $this->input->post('cust_id');
		
		
		if($auth_token==AUTH_TOKEN) {

			$json['status'] = STATUS_BAD_REQUEST;

			$json['msg'] = 'Session Expired';

		} else {

			$rsData = array();

			$rs = $this->Api_model->customerhistory($cust_id);

			if($rs){

				foreach($rs as $k => $v){
             

					$rsData[$k]['offer_id'] = $v['disc_id'];

				 	$rsData[$k]['merchant_id'] =  $v['mer_id'];
				 	
				 	$rsData[$k]['offer_title'] =  $v['disc_title'];
				 		
				 	$rsData[$k]['merchant_name'] =  $v['mer_name'];
				 			
				 	$rsData[$k]['description'] =  $v['disc_info'];
				 				
				 	$rsData[$k]['claim_date'] =  $v['trans_date'];


				}



			}



			$json['status'] = STATUS_OK;

			$json['msg'] = 'Success';
			
			$json['cust_id'] = $cust_id;

			$json['data'] = $rsData;



		}

        header("Content-Type: application/json");

		echo json_encode($json);


	}




	function getcustomerlevel(){

		$auth_token	= $this->input->post('auth_token');
		
		$cust_id	= $this->input->post('cust_id');
		
		$cust_name	= $this->input->post('cust_name');
		
		$cust_status	= $this->input->post('cust_status');
        
        $cust_level_id="";
        
        $level_name="";

		if($auth_token==AUTH_TOKEN) {

			$json['status'] = STATUS_BAD_REQUEST;

			$json['msg'] = 'Session Expired';

		} else {

			$rsData = array();

			$rs = $this->Api_model->getCustomerLevel($cust_id,$cust_status,$cust_name);

			if($rs){

				foreach($rs as $k => $v){
             
             
                 $cust_level_id =$v['cust_level'];
                 
                 $level_name =$v['level_name'];

				// 	$rsData[$k]['cust_id'] = $v['cust_id'];

				//  	$rsData[$k]['cust_level'] =  $v['cust_level'];

    //                 $rsData[$k]['level_name'] =  $v['level_name'];

				}



			}



			$json['status'] = STATUS_OK;

			$json['msg'] = 'Success';
			
			$json['cust_id'] = $cust_id;
			
			$json['cust_level'] = $cust_level_id;
			
			$json['level_name'] = $level_name;
			
			

		//	$json['data'] = $rsData;



		}

        header("Content-Type: application/json");

		echo json_encode($json);


	}



	function getDiscount(){

		$auth_token	= $this->input->post('auth_token');
		
		$cust_id	= $this->input->post('cust_id');
		
		$cust_level	= $this->input->post('cust_level');


		if($auth_token==AUTH_TOKEN) {

			$json['status'] = STATUS_BAD_REQUEST;

			$json['msg'] = 'Session Expired';

		} else {

			$rsData = array();

			$rs = $this->Api_model->getDiscount();

			if($rs){

				foreach($rs as $k => $v){
             

                    $contact_array = array(
                        "disc_address"  =>  $v['disc_address']==""?NULL:$v['disc_address'],
                        "disc_phone" => $v['disc_phone']==""?NULL:$v['disc_phone'],
                        "disc_email"  =>  $v['disc_email']==""?NULL:$v['disc_email'],
                        "disc_fb_link" => $v['disc_fb_link']==""?NULL:$v['disc_fb_link'],
                        "disc_insta_link" =>$v['disc_insta_link']==""?NULL:$v['disc_insta_link'],
                        "disc_geo" =>$v['disc_geo']==""?NULL:$v['disc_geo'],
                        "disc_fb_name" => $v['disc_fb_name']==""?NULL:$v['disc_fb_name'],
                        "disc_insta_name" => $v['disc_insta_name']==""?NULL:$v['disc_insta_name'],  );
                   
                   $i=0;
                   
                  $cust_array=array();
                
                  $CodeWallTutorialArray = json_decode($v['cus_type']);//array($row->cus_type);
                                                            
                  $arrayLength = count($CodeWallTutorialArray);
                                                            
                     while ($i < $arrayLength) {  
                       
                        array_push($cust_array,$CodeWallTutorialArray[$i]);     
                       $i++;
                     }
                    
                    $i=0;
                    
					$rsData[$k]['mer_id'] =  $v['mer_id'];

					$rsData[$k]['disc_title'] =$v['disc_title']==""?NULL:$v['disc_title'];  

					$rsData[$k]['disc_info'] = $v['disc_info']==""?NULL:$v['disc_info'];   
					
                 	$rsData[$k]['cust_type']  =  $cust_array;
                 	
                    $rsData[$k]['disc_contact']  =	$contact_array;
                	
				//	$rsData[$k]['disc_availability'] = $v['disc_availability'];
					
					//$rsData[$k]['disc_address'] = $v['disc_address'];
					
					$rsData[$k]['disc_expiry'] = $v['disc_expiry']==""?NULL:$v['disc_expiry'];  
								
				 	$rsData[$k]['disc_id'] =  $v['disc_id']==""?NULL:$v['disc_id']; 
				 	
				    $rsData[$k]['disc_location'] =  $v['disc_location']==""?NULL:$v['disc_location'];  
				 		
				 	$rsData[$k]['disc_category'] = $v['disc_category']==""?NULL:$v['disc_category'];  
					
				//	$rsData[$k]['disc_geo'] = $v['disc_geo'];
								
					//$rsData[$k]['disc_phone'] = $v['disc_phone'];
											
				//	$rsData[$k]['disc_email'] = $v['disc_email'];
														
				//	$rsData[$k]['disc_fb_name'] = $v['disc_fb_name'];
					
					//$rsData[$k]['disc_fb_link'] = $v['disc_fb_link'];
					
					//$rsData[$k]['disc_insta_name'] = $v['disc_insta_name'];
					
				//	$rsData[$k]['disc_insta_link'] = $v['disc_insta_link'];
					
					$rsData[$k]['location_name'] = $v['location_name']==""?NULL:$v['location_name'];
					
					$rsData[$k]['category_name'] = $v['category_name']==""?NULL:$v['category_name']; 
					
					$rsData[$k]['disc_type'] = $v['disc_type']==""?NULL:$v['disc_type'];
					
					$rsData[$k]['disc_code'] = $v['disc_code']==""?NULL:$v['disc_code'];
					
					$rsData[$k]['disc_url'] = $v['disc_url']==""?NULL:$v['disc_url'];
					
					$rsData[$k]['disc_img_small'] = $v['small_image']==""?NULL:$v['small_image'];
					
					$rsData[$k]['disc_img_large'] =  $v['large_image']==""?NULL:$v['large_image'];
					
				//	$rsData[$k]['disc_status'] = $v['disc_status'];
                                  
                 //    }            
                                                          

				//	$rsData[$k]['id'] = (int) $v['product_id'];



				


				}



			}



			$json['status'] = STATUS_OK;

			$json['msg'] = 'Success';
			
			$json['cust_id'] = $cust_id;

			$json['data'] = $rsData;



		}


     
	   //header('Access-Control-Allow-Origin: *');
    //   header('Access-Control-Allow-Credentials: true');
        header("Content-Type: application/json");

		echo json_encode($json);


	}


}