<?php
class Api_model extends CI_Model 
{


    function merchantlogin($username,$password){
               $new_password = md5($password);
        $sql="SELECT * FROM `merchant_user` WHERE `mer_user_username` ='$username' AND  `mer_user_pass` ='$new_password'";
        
        $query=$this->db->query($sql);

        return $query->result_array();
        
    }
    
    
    
    function getDiscount(){
         
        $sql="SELECT * FROM `discount` inner join locationList inner join disc_categories WHERE discount.disc_location = locationList.location_id AND 
     discount.disc_category =   disc_categories.disc_category_id";
        $query=$this->db->query($sql);

        return $query->result_array();
        
    }
    
  function getOfferFromId($id){
         
        $sql="SELECT * FROM `discount` inner join locationList inner join disc_categories WHERE discount.disc_location = locationList.location_id AND 
     discount.disc_category =   disc_categories.disc_category_id AND discount.disc_id='$id'";
        $query=$this->db->query($sql);

        return $query->result_array();
        
    }
    
      function getCustomerFromId($id){
         
        $sql="SELECT * FROM `customer` WHERE cust_id='$id'";
        
        $query=$this->db->query($sql);

        return $query->result_array();
        
    }
    
    
    
   function transactionconfirm($cust_id,$mer_id,$offer_id,$transaction_amount){
        $date = date('y-m-d');
        $sql ="INSERT INTO `transaction`( `disc_id`,`mer_id`,`cust_id`, `trans_amount`, `trans_date`, `trans_cust_confirm`, `trans_mer_confirm`) VALUES 
        ('$offer_id','$mer_id','$cust_id','$transaction_amount','$date','1','1')";
        
        return  $this->db->query($sql);
    }
    
   function getCustomerLevel($cust_id,$cust_status,$cust_name){
       
       
        $check_availability="SELECT * FROM `customer` WHERE cust_id='$cust_id'";
       
        $availabity_query=$this->db->query($check_availability);
        
        $row_count = $availabity_query->num_rows();
        
        if($row_count == 0){
            
            $status_id = $cust_status =="LC_R"?2:1;
            
            $insert="INSERT INTO `customer`(`cust_id`, `cust_name`, `cust_level`, `cust_status`) 
            VALUES ('$cust_id','$cust_name','$status_id','1')";
            
            $this->db->query($insert);
             
        //     $sql="SELECT * FROM  customer_level  ORDER BY customer_level_id ASC LIMIT 2";
    
        //    
            
        //     $resultList = $query->result_array();
        
        //     $i=0;    
        
        //   foreach($resultList as $row) {
               
        //          echo $row['customer_level_id'];
                 
        //          if($i == 0){
                     
        //              $status_id 
                     
        //          }else{
                     
                     
                     
        //          }
                 
                 
        //         $i++; 
        //     }
        
        
        
            
        }
   
            $sql="SELECT * FROM `customer` inner join customer_level WHERE customer_level.customer_level_id = customer.cust_level AND  customer.cust_id='$cust_id'";
    
            $query=$this->db->query($sql);
          
            return $query->result_array();
      
        
    }
    

     function customerhistory($cust_id){
        
       $sql="SELECT * FROM `transaction` inner join merchant inner join discount WHERE
       transaction.cust_id ='$cust_id' AND transaction.disc_id =discount.disc_id AND discount.mer_id = merchant.mer_id";
       $query=$this->db->query($sql);
        return $query->result_array();
        
    }
    
       function merchenthistory($mer_id){
        
       $sql="SELECT * FROM `transaction` inner join merchant inner join discount WHERE
       transaction.mer_id ='$mer_id' AND transaction.disc_id =discount.disc_id AND discount.mer_id = merchant.mer_id";
       $query=$this->db->query($sql);
        return $query->result_array();
        
    }
    
    
    
      
} 