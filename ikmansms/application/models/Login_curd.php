<?php
class Login_curd extends CI_Model 
{
 
 
  function loginValidation($username,$password)
  {  
    
    $sql="SELECT * FROM `admin_user` WHERE admin_username='$username' AND admin_pass='$password'";
    $query=$this->db->query($sql);
    return $query->num_rows();
  }

  

} 