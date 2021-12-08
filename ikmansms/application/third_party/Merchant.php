<?php
class Merchant extends CI_Model 
{

  function AddNewMerchant($name,$phone,$biz_registration,$email,$address,$fb_name,$fb_link,$insta_name,$insta_link,$location_link,$status)
  {


    $date = date('y-m-d');

    $sql="INSERT INTO `merchant`(`mer_name`, `mer_reg`, `mer_address`, `mer_geo`, `mer_phone`, `mer_email`, `mer_fb_name`, `mer_fb_link`,
     `mer_insta_name`, `mer_insta_link`, `mer_status`) 
     VALUES ('$name','$biz_registration','$address','$location_link','$phone','$email','$fb_name','$fb_link','$insta_name','$insta_link','$status') ";


    $query=$this->db->query($sql);
    return $query;
  }

  function getMerchantList()
  {  
    
    $sql="select * from merchant ";
    $query=$this->db->query($sql);
    return $query;
  }



  function getHomeTreeList()
  {
    $sql="select * from newuser_plants order by created_time DESC  LIMIT 12";
    $query=$this->db->query($sql);
    return $query;
  }
	

  function loginValidation($uname,$password){


    $sql="SELECT * FROM `users` WHERE user_id='$uname' AND password='$password  '";

    $query=$this->db->query($sql);
    return $query;

  }

  function getMapList($keyword)
  {

    $sql;
    if($keyword =="no_keyword"){

      $sql="select * from newuser_plants   ORDER BY created_time DESC LIMIT 20";

    }else{


      $sql="select * from newuser_plants WHERE plant_name='$keyword'   ORDER BY created_time DESC ";
   

    }
  
    $query=$this->db->query($sql);
    return $query;
  }

  
  

  function getMyInfo($user_id){

    $sql="SELECT * FROM `users` WHERE user_id='$user_id'";
  
    return  $query=$this->db->query($sql);

  
  }


  function getMyTreeList($user_id){

    $sql="SELECT * FROM `newuser_plants` WHERE user_id='$user_id'";
  
    return  $query=$this->db->query($sql);

  
  }

    function getTreeCount()
  {
    $sql="select * from newuser_plants";
    $query=$this->db->query($sql);
    return $query->num_rows();
  }

  function userRegistration($number,$fname,$email,$district,$city,$password){

    $date= date('y-m-d');
    $sql ="INSERT INTO `users`(`user_id`, `name`, `city`, `email`, `password`, `created_date`, `profile`, `status`)
     VALUES ('$number','$fname','$city','$email','$password','$date','','activate')";


    return  $query=$this->db->query($sql);
  }

  function validationOtp($mobile,$otp){

    $sql="select * from user_otp WHERE user_id='$mobile' AND otp_number='$otp'";
    $query=$this->db->query($sql);

    return $query->num_rows();
  }

  function validateUser($mobile){

    $sql="select * from users WHERE user_id='$mobile'";
    $query=$this->db->query($sql);

      //Following qQUery Will Send Otp to User

      if($query->num_rows() == 0){

       		   
      $otp_number = str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);
                
      $mobile_numbe1 ='94'.$mobile;
          
      $message =$otp_number;
  
       //following query will send sms to user
  //       $curl1 = curl_init();
   
  // curl_setopt($curl1, CURLOPT_URL,'https://richcommunication.dialog.lk/api/sms/inline/send?q=994c2a181323d6d&destination='.$mobile_numbe1.'&message='.$message.'&from=Test');
  
        $curl1 = curl_init();

        curl_setopt($curl1, CURLOPT_URL,'https://richcommunication.dialog.lk/api/sms/inline/send?q=994c2a181323d6d&destination='.$mobile_numbe1.'&message='.$message.'&from=Test');
    
        curl_setopt($curl1, CURLOPT_FAILONERROR, true);
        curl_setopt($curl1, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl1, CURLOPT_RETURNTRANSFER, true);
     
        $output1 = curl_exec($curl1);
        
  
        $otp_query="INSERT INTO `user_otp`( `user_id`, `otp_number`,`status`) VALUES ('$mobile','$otp_number','pending')";
      
        $query=$this->db->query($otp_query);

        return 0;

      }else{

         return 1;
      }

  }

  function add_new_tree($user_plant_id,$user_id,$plant_name,$plant_description,$location,
  $lat,$long,$status,$created_type,$height,$created_date,$image)
	{
    $sql ="INSERT INTO `newuser_plants`(`user_plant_id`, `user_id`, `plant_name`, `plant_description`, `created_date`,
     `plant_image`, `location`, `height`,`lat`, `lng`, `created_type`, `status`) 
    VALUES ('$user_plant_id','$user_id','$plant_name','$plant_description','$created_date','$image','$location','$height','$lat','$long','$created_type','activate')";

   return $this->db->query($sql);
	}
} 