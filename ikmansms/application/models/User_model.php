<?php
class User_model extends CI_Model {
    function AddUser(){
        $values = array(
            'user_name'=> $this->input->post('name', TRUE),
            'user_email'=> $this->input->post('email', TRUE),
            'user_contact'=> $this->input->post('contact', TRUE),
            'user_companyName'=> $this->input->post('companyName', TRUE),
            'user_status'=> $this->input->post('userStatus', TRUE),
            'user_type'=> $this->input->post('usertype', TRUE),
          
        );
        return $this->db->insert('user', $values);
       }

    function getUserData(){
        $userData=$this->db->query("SELECT * FROM user");
		return $userData;
    }

    function UpdateUser(){
        $id = $this->input->post('id');
        $values = array(
            'user_name'=> $this->input->post('name', TRUE),
            'user_email'=> $this->input->post('email', TRUE),
            'user_contact'=> $this->input->post('contact', TRUE),
            'user_companyName'=> $this->input->post('companyName', TRUE),
            'user_status'=> $this->input->post('userStatus', TRUE),
            'user_type'=> $this->input->post('usertype', TRUE),
          
        );
        $this->db->where('user_id',$id);
        return $this->db->update('user', $values);
    }

    function GetUserId(){
        $userID=$this->db->query("SELECT user_id,user_name FROM user");
		return $userID;
    }

    function saveMasking(){
        $create_at = date('Y-m-d');
        $values = array(
            'user_id'=> $this->input->post('user_id', TRUE),
            'masking'=> $this->input->post('masking', TRUE),
            'created_date'=> $create_at,
            'activated_date'=> $this->input->post('activate_at', TRUE),
            'deactivated_date'=> $this->input->post('deactivate_at', TRUE),
            'sms_balance'=> $this->input->post('smsbal', TRUE),
            'package'=> $this->input->post('package', TRUE),
            'sms_charge'=> $this->input->post('smsCharge', TRUE),
            'status'=> $this->input->post('status', TRUE),
          
        );
        return $this->db->insert('user_masking', $values);
    }

    function getUserMaskingData(){
        $maskingData=$this->db->query("SELECT * FROM user_masking");
	    return $maskingData;
    }

    function delete_User(){
        $id = $this->input->post('user_id');
        $values = array(
            'user_status'=> 2
          
        );
        $this->db->where('user_id',$id);
        return $this->db->update('user', $values);
    }
    
    function delete_UserMasking(){
        $id = $this->input->post('masking_id');
        $values = array(
            'status'=> 2
          
        );
        $this->db->where('user_masking_id',$id);
        return $this->db->update('user_masking', $values);
    }

    function Update_masking(){
        $id = $this->input->post('id');
        $values = array(
            'user_name'=> $this->input->post('name', TRUE),
            'user_email'=> $this->input->post('email', TRUE),
            'user_contact'=> $this->input->post('contact', TRUE),
            'user_companyName'=> $this->input->post('companyName', TRUE),
            'user_status'=> $this->input->post('userStatus', TRUE),
            'user_type'=> $this->input->post('usertype', TRUE),
          
        );
        $this->db->where('user_id',$id);
        return $this->db->update('user', $values);
    }
}

?>