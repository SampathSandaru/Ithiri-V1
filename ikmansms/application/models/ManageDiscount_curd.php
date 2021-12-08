<?php
class ManageDiscount_curd extends CI_Model 
{

  function Add($merchant_id,$offer_title,$valid_date,
  $contact,$description,$customer_type,$offer_type,$offer_url,$fb_name,$fb_link,$insta_name,$insta_link,$availability,$address,$code,$status,$location_link,$email,
  $upload_small_image,$upload_large_image,$disc_location,$disc_category_type)
  {

//   echo  $new_contact=empty($contact) ? NULL : $contact;//$contact==""?NULL:$contact;
//   echo null;

    $sql="INSERT INTO `discount`( `mer_id`, `disc_title`,`disc_info`,`cus_type`,`disc_availability`, `disc_address`, 
    `disc_geo`, `disc_phone`, `disc_email`, `disc_fb_name`, `disc_fb_link`, `disc_insta_name`, `disc_insta_link`, `disc_expiry`,
     `disc_type`, `disc_code`, `disc_url`,`large_image`,`small_image`,`disc_location`, `disc_category`, `disc_status`) VALUES ('$merchant_id','$offer_title','$description',
     '$customer_type','$availability','$address','$location_link','$contact','$email','$fb_name','$fb_link','$insta_name','$insta_link',
    '$valid_date','$offer_type','$code','$offer_url','$upload_large_image','$upload_small_image','$disc_location','$disc_category_type','$status')";

    $query=$this->db->query($sql);
    
    
    
    
    #API access key from Google API's Console
    define( 'API_ACCESS_KEY', 'AAAAIZlWECA:APA91bFjwb1B43bZz194A7oVh-I6If56vaBpITcbVmNEQ1CsLlxGeuidujphMnWHW9C4fvZyFDc8ZkLZX2CrSMA4tsMo5nWmaMs7ago7Rt_zu_yID56BRXaJuQ9DEi4GBKqPpZRHXFUi');


#prep the bundle
     $msg = array
          (
		'body' 	=> $offer_title,
		'title'	=> 'New Offer',
        
          );

	$fields = array
			(
				'to'		=> "/topics/messaging",
				'notification'	=> $msg
			);
	
	
	$headers = array
			(
				'Authorization: Bearer ' . API_ACCESS_KEY,
				'Content-Type: application/json'
			);


		$ch = curl_init();
		curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
		curl_setopt( $ch,CURLOPT_POST, true );
		curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
		curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
		curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
		curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
		$result = curl_exec($ch );
		curl_close( $ch );

        #Echo Result Of FireBase Server
        echo $result;


    return $query;

  }
  
  function Update($id,$merchant_id,$offer_title,$address,
                            $valid_date,$contact,$description,$customer_type,$offer_type,$offer_url,$discount_code,
                            $location,$fb_name,$fb_link,$insta_name,$insta_link,$status,$email,$discount_type,$upload_small_image,$upload_large_image,$disc_location,$disc_category_type){
                        $sql="";
                        
                        
                        
                        if($upload_small_image ==""  && $upload_small_image ==""){
                                                    $sql="UPDATE `discount` SET `mer_id`='$merchant_id',`disc_title`='$offer_title',`disc_info`='$description',
                        `cus_type`='$customer_type',`disc_address`='$address',`disc_geo`='$location',`disc_phone`='$contact',
                        `disc_email`='$email',`disc_fb_name`='$fb_name',`disc_fb_link`='$fb_link',`disc_insta_name`='$insta_name',
                        `disc_insta_link`='$insta_link',
                        `disc_expiry`='$valid_date',`disc_type`='$discount_type',
                        `disc_code`='$discount_code'
                        ,`disc_url`='$offer_url',`disc_status`='$status',`disc_location`='$disc_location',`disc_category`='$disc_category_type' WHERE disc_id='$id'";      
                            
                        }else{
                    
                            if($upload_small_image !="" && $upload_large_image !="" ){
                                       $sql="UPDATE `discount` SET `mer_id`='$merchant_id',`disc_title`='$offer_title',`disc_info`='$description',
                        `cus_type`='$customer_type',`disc_address`='$address',`disc_geo`='$location',`disc_phone`='$contact',
                        `disc_email`='$email',`disc_fb_name`='$fb_name',`disc_fb_link`='$fb_link',`disc_insta_name`='$insta_name',
                        `disc_insta_link`='$insta_link',
                        `disc_expiry`='$valid_date',`disc_type`='$discount_type',
                        `disc_code`='$discount_code'
                        ,`disc_url`='$offer_url',`disc_status`='$status',`large_image`='$upload_large_image',`small_image`='$upload_small_image',`disc_location`='$disc_location',`disc_category`='$disc_category_type' WHERE disc_id='$id'";      

                            }else if($upload_small_image !="" ){
                                
                                 $sql="UPDATE `discount` SET `mer_id`='$merchant_id',`disc_title`='$offer_title',`disc_info`='$description',
                        `cus_type`='$customer_type',`disc_address`='$address',`disc_geo`='$location',`disc_phone`='$contact',
                        `disc_email`='$email',`disc_fb_name`='$fb_name',`disc_fb_link`='$fb_link',`disc_insta_name`='$insta_name',
                        `disc_insta_link`='$insta_link',
                        `disc_expiry`='$valid_date',`disc_type`='$discount_type',
                        `disc_code`='$discount_code'
                        ,`disc_url`='$offer_url',`disc_status`='$status',`small_image`='$upload_small_image',`disc_location`='$disc_location',`disc_category`='$disc_category_type' WHERE disc_id='$id'";      

                            } else if($upload_large_image !="" ){
                                
                                 $sql="UPDATE `discount` SET `mer_id`='$merchant_id',`disc_title`='$offer_title',`disc_info`='$description',
                        `cus_type`='$customer_type',`disc_address`='$address',`disc_geo`='$location',`disc_phone`='$contact',
                        `disc_email`='$email',`disc_fb_name`='$fb_name',`disc_fb_link`='$fb_link',`disc_insta_name`='$insta_name',
                        `disc_insta_link`='$insta_link',
                        `disc_expiry`='$valid_date',`disc_type`='$discount_type',
                        `disc_code`='$discount_code'
                        ,`disc_url`='$offer_url',`disc_status`='$status',`large_image`='$upload_large_image',`disc_location`='$disc_location',`disc_category`='$disc_category_type' WHERE disc_id='$id'";      

                            }
                            
                                                   
                        }
  
                   
                   
                       $query=$this->db->query($sql);
    return $query;             
                                
                            }
  
//     function Update($id,$merchant_id,$offer_title,$valid_date,
//   $contact,$description,$customer_type,$offer_type,$offer_url,$fb_name,$fb_link,$insta_name,$insta_link,$availability,$address,$code,$status,$location_link,$email)
//   {

//     $sql="INSERT INTO `discount`( `mer_id`, `disc_title`,`disc_info`,`cus_type`,`disc_availability`, `disc_address`, 
//     `disc_geo`, `disc_phone`, `disc_email`, `disc_fb_name`, `disc_fb_link`, `disc_insta_name`, `disc_insta_link`, `disc_expiry`,
//      `disc_type`, `disc_code`, `disc_url`, `disc_status`) VALUES ('$merchant_id','$offer_title','$description',
//      '$customer_type','$availability','$address','$location_link','$contact','$email','$fb_name','$fb_link','$insta_name','$insta_link',
//     '$valid_date','$offer_type','$code','$offer_url','$status')";

//     $query=$this->db->query($sql);

//     return $query;

//   }

    function getDiscountType(){
          $sql="SELECT * FROM disc_categories  ORDER BY disc_category_id DESC";
    $query=$this->db->query($sql);
    return $query;
      
  }
  function getLocation(){
          $sql="SELECT * FROM locationList  ORDER BY location_id DESC";
    $query=$this->db->query($sql);
    return $query;
      
  }
  function Get()
  {  
  //    AND discount.cus_type =category.category_id
    $sql="select * from discount inner join merchant inner join locationList inner join disc_categories WHERE disc_categories.disc_category_id  = discount.disc_category AND locationList.location_id = discount.disc_location AND merchant.mer_id = discount.mer_id AND merchant.mer_status=1 ORDER BY discount.disc_id DESC
  ";
    $query=$this->db->query($sql);
    return $query;
  }

function SearchDiscount($name){
       $sql="select * from discount inner join merchant inner join locationList inner join disc_categories WHERE disc_categories.disc_category_id  = discount.disc_category AND locationList.location_id = discount.disc_location AND merchant.mer_id = discount.mer_id AND merchant.mer_status=1 AND merchant.mer_name LIKE '%$name%' OR discount.disc_title LIKE '%$name%' ORDER BY discount.disc_id DESC
  ";
    $query=$this->db->query($sql);
    return $query;
    
}

} 