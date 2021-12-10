<?php
class User_Customer_model extends CI_Model{
    function AddUser_customer_number(){
        $values = array(
            'user_id'=> 1,
            'contact_no'=> $this->input->post('contact_number', TRUE),
            'user_name'=> 'sa',
            'customer_type'=> $this->input->post('usertype', TRUE)
        );
        return $this->db->insert('user_customer', $values);
    }

    function getUser_customer_number(){
        $userData=$this->db->query("SELECT * FROM user_customer");
		return $userData;
    }
}