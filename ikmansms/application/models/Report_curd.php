<?php
class Report_curd extends CI_Model 
{
 
  function Get()
  {  
    
    $sql="select * from transaction inner join merchant inner join discount inner join customer  WHERE
    transaction.disc_id =discount.disc_id AND transaction.mer_id =merchant.mer_id AND customer.cust_id = transaction.cust_id  ";
    $query=$this->db->query($sql);
    return $query;
  }




} 