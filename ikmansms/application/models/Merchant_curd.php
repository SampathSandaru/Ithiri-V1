<?php
class Merchant_Curd extends CI_Model 
{


    function MerchantNameValidation($value){
        
        $sql="SELECT * FROM `merchant` WHERE mer_name='$value'";
        $query=$this->db->query($sql)->num_rows();

        return $query;
    }
    
    function MerchantBizRegValidation($value){
               $sql="SELECT * FROM `merchant` WHERE mer_reg='$value'";
        $query=$this->db->query($sql)->num_rows();

        return $query;
        
    }
  function AddNewMerchant($name,$phone,$biz_registration,$email,$address,$fb_name,$fb_link,$insta_name,$insta_link,$location_link,$status)
  {
    $sql="INSERT INTO `merchant`(`mer_name`, `mer_reg`, `mer_address`, `mer_geo`, `mer_phone`, `mer_email`, `mer_fb_name`, `mer_fb_link`,
     `mer_insta_name`, `mer_insta_link`, `mer_status`) VALUES ('$name','$biz_registration','$address','$location_link','$phone','$email','$fb_name','$fb_link','$insta_name','$insta_link','$status') ";

    $query=$this->db->query($sql);

    return $query;
    
  }


  function UpdateMerchant($id,$name,$phone,$biz_registration,$email,$address,$fb_name,$fb_link,$insta_name,$insta_link,$location_link,$status)
  {

    $sql="UPDATE `merchant` SET `mer_name`='$name',`mer_reg`='$biz_registration'
    ,`mer_address`='$address',`mer_geo`='$location_link',`mer_phone`='$phone',`mer_email`='$email',`mer_fb_name`='$fb_name'
    ,`mer_fb_link`='$fb_link',`mer_insta_name`='$insta_name',`mer_insta_link`='$insta_link',`mer_status`='$status' WHERE mer_id='$id'";

    $query=$this->db->query($sql);
    return $query;
  }


    function AddNewAppUsers($username,$password,$status,$id){
        
        $new_password = md5($password);
        
     $query="INSERT INTO `merchant_user`( `mer_id`, `mer_user_username`, `mer_user_pass`, `mer_user_status`) 
        VALUES ('$id','$username','$new_password','$status')";
        
      $query=$this->db->query($query);
     return $query;
        
    }
    
      function getActiveMerchantList()
  {  
    
    $sql="select * from merchant WHERE mer_status= 1 ORDER BY mer_id DESC ";
    $query=$this->db->query($sql);
    return $query;
  }
  
 function SearchMerchant($name){
     
   $sql="select * from merchant WHERE mer_name LIKE '%$name%' ORDER BY mer_id DESC ";
    $query=$this->db->query($sql);
    return $query;
      
  }
  function getMerchantList()
  {  
    
    $sql="select * from merchant ORDER BY mer_id DESC ";
    $query=$this->db->query($sql);
    return $query;
  }

    function getMerchantDiscount($id){
      
     $sql="select * from discount WHERE mer_id='$id'";
    $query=$this->db->query($sql);
    return $query; 
        
    }
    
        function getMerchantAppUser($id){
      
     $sql="select * from merchant_user WHERE mer_id='$id'";
    $query=$this->db->query($sql);
    return $query; 
        
    }
    

} 