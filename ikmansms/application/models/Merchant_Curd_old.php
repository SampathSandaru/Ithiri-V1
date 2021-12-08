<?php
class Merchant_Curd extends CI_Model 
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
    
    $sql="select * from merchant";
    $query=$this->db->query($sql);
    return $query;
  }



} 