<?php
 class student extends CI_model {
   function addData(){
    $values = array(
        'name'=> $this->input->post('name', TRUE),
        'phone_number'=> $this->input->post('phone', TRUE),
        'email'=> $this->input->post('Email', TRUE),
        'password'=> $this->input->post('Password', TRUE),
      
    );
    return $this->db->insert('student', $values);
   }

   function students(){
    $studentData=$this->db->query("SELECt * FROM student");
		return $studentData;
   }
 }

?>