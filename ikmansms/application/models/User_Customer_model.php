<?php
class User_Customer_model extends CI_Model{
    function AddUser_customer_number(){
        $values = array(
            'user_id'=> 1,
            'contact_no'=> $this->input->post('contact_number', TRUE),
            'user_name'=> $this->input->post('customer_name', TRUE),
            'customer_type'=> $this->input->post('usertype', TRUE)
        );
        return $this->db->insert('user_customer', $values);
    }

    function getUser_customer_number(){
        $userData=$this->db->query("SELECT * FROM user_customer");
		return $userData;
    }

    function get_contact_numbers(){
        $userContactNo=$this->db->query("SELECT contact_no FROM user_customer");
		return $userContactNo;
    }

   //msg log
   function add_msg_log(){
        $create_at = date('Y-m-d H:i:s');
        $mobile='';
        $numbers=$this->input->post('contact', TRUE);
        foreach($numbers as $number){
           $mobile.=$number.", ";
        }

        $values = array(
            'user_id'=> 1,
            'mobile_numbers'=> $mobile,
            'message'=> $this->input->post('message', TRUE),
            'sended_time'=> $create_at,
            'message_id'=>1,
            'status'=>0
            );
            return $this->db->insert('message_log', $values);
   }

   function get_msg_log(){
    $get_msg_log=$this->db->query("SELECT * FROM message_log ORDER BY sended_time DESC");
    return $get_msg_log;
   }
   
   function msg_log_search(){
        $from_date=$this->input->post('from_date', TRUE);
        $to_date=$this->input->post('to_date', TRUE);
        $search_msglog=$this->db->query("SELECT * FROM `message_log` WHERE sended_time BETWEEN '$from_date' AND '$to_date'");
	    return $search_msglog;
   }



}