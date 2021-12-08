<?php
class Category_curd extends CI_Model 
{
 
  function Get()
  {  
    
    $sql="select * from customer_level";
    $query=$this->db->query($sql);
    return $query;
  }


  function Update($name,$status,$id){

    $query="UPDATE `customer_level` SET `level_name`='$name',`status`='$status' WHERE   customer_level_id ='$id'";

    $query=$this->db->query($query);

    return $query;

  }


  function Add($name,$status){

    $query="INSERT INTO `customer_level`(`level_name`, `status`) VALUES ('$name','$status')";

    $query=$this->db->query($query);
    return $query;

  }


  

} 