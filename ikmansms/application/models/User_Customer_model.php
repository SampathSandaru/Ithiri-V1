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

   

}