<?php
class ManageCustomer_curd extends CI_Model 
{
 
  function Get()
  {  
    
    $sql="select * from customer inner join customer_level WHERE customer_level.customer_level_id = customer.cust_level";
    $query=$this->db->query($sql);
    return $query;
  }

  function getCutomerLevel()
  {  
    
    $sql="select * from customer_level";
    $query=$this->db->query($sql);
    return $query;
  }




  function Update($id,$status,$level,$name){

    $query="UPDATE `customer` SET `cust_name`='$name',`cust_level`='$level',`cust_status`='$status' WHERE cust_id='$id'";

    $query=$this->db->query($query);

    return $query;

  }


  function getSearch($id)
  {  
    
     $sql="select * from customer inner join customer_level WHERE customer_level.customer_level_id = customer.cust_level AND customer.cust_id='$id'";
    // $sql="select * from customer WHERE cust_id='$id'";
    $query=$this->db->query($sql);
    return $query;
  }

  

} 