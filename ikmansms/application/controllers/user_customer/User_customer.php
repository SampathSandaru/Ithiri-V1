<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_customer extends CI_Controller {
    public function index(){
        $this->load->model('User_Customer_model');
        $data["user_cus_number"] = $this->User_Customer_model->getUser_customer_number();
        $this->load->view('user_customer/user_customer',$data);
    }

    function Add_user_customer_msg(){

        $this->form_validation->set_rules('contact_number','Number','required');
        $this->form_validation->set_rules('usertype','User Type','required');
        $this->form_validation->set_rules('customer_name','customer name','required');

        $this->load->model('User_Customer_model');
        if($this->form_validation->run()==false){
            $this->session->set_flashdata('Error_status', 'Error!');
        }else{
            $this->User_Customer_model->AddUser_customer_number();
            $this->session->set_flashdata('status', 'Successful!');
        }
        $this->load->model('User_Customer_model');
        $data["user_cus_number"] = $this->User_Customer_model->getUser_customer_number();
        $this->load->view('user_customer/user_customer',$data);
    }

    public function send_messages(){
        $this->load->model('User_Customer_model');
        $data["customer_numbers"] = $this->User_Customer_model->get_contact_numbers();
        $this->load->view('user_customer/send_customer_messages',$data);
    }
}

