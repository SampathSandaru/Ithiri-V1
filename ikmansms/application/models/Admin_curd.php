<?php
class Admin_curd extends CI_Model 
{

    function AdminNameValidation($value){
         
        $sql="SELECT * FROM `admin_user` WHERE admin_name='$value'";
        $query=$this->db->query($sql)->num_rows();

        return $query;
        
    }
    
        function AdminUsernameValidation($value){
         
        $sql="SELECT * FROM `admin_user` WHERE admin_username='$value'";
        $query=$this->db->query($sql)->num_rows();

        return $query;
        
    }
  function Add($name,$level,$username,$password,$status)
  {
    $sql="INSERT INTO `admin_user`(`admin_name`, `admin_level`, `admin_username`, `admin_pass`, `admin_status`) 
    VALUES ('$name','$level','$username','$password','$status')";

    $query=$this->db->query($sql);

    return $query;
    
  }


  function Update($id,$name,$level,$username,$password,$status)
  {

    $sql="UPDATE `admin_user` SET `admin_name`='$name',`admin_level`='$level',`admin_username`='$username',`admin_pass`='$password',`admin_status`='$status' WHERE admin_id='$id'";

    $query=$this->db->query($sql);

    return $query;
  }

  function Get()
  {      
    $sql="select * from admin_user ORDER BY admin_created_date DESC";
    $query=$this->db->query($sql);
    return $query;
  }



} 