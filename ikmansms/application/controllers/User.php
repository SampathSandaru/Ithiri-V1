<?php

class User extends CI_Controller {

    public function users(){
        $this->load->model('User_model');
        $data["userData"] = $this->User_model->getUserData();
		$this->load->view('user',$data);

	}
    function AddUser(){

        $this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('email','User Email','required|is_unique[user.user_email]');
		$this->form_validation->set_rules('contact','Contact Number','required');
        $this->form_validation->set_rules('companyName','Company Name','required');
        $this->form_validation->set_rules('usertype','User Type','required');
        $this->form_validation->set_rules('userStatus','Status','required');

        $this->load->model('User_model');

        if($this->form_validation->run()==false){
            $this->session->set_flashdata('Error_status', 'Error!');
		}else{
            $this->User_model->AddUser();
            $this->session->set_flashdata('status', 'Successful!');
        }
        $data["userData"] = $this->User_model->getUserData();
        $this->load->view('user',$data);
    }

   function UpdateUser(){
    $this->form_validation->set_rules('name','Name','required');
    $this->form_validation->set_rules('email','User Email','required');
    $this->form_validation->set_rules('contact','Contact Number','required');
    $this->form_validation->set_rules('companyName','Company Name','required');
    $this->form_validation->set_rules('usertype','User Type','required');
    $this->form_validation->set_rules('userStatus','Status','required');

    $this->load->model('User_model');

    if($this->form_validation->run()==false){
        $this->session->set_flashdata('Error_status', 'Error!');
    }else{
        $this->User_model->UpdateUser();
        $this->session->set_flashdata('status', 'Update Successful!');
    }
    $data["userData"] = $this->User_model->getUserData();
    $this->load->view('user',$data);
   }

   public function user_masking(){
        $this->load->model('User_model');
        $data["usersId"]=$this->User_model->GetUserId();
        $data["maskingData"] = $this->User_model->getUserMaskingData();
        $this->load->view('user_masking',$data);
   }

   function AddMasking(){
    $this->form_validation->set_rules('user_id','User ID','required');
    $this->form_validation->set_rules('masking','Masking','required');
    $this->form_validation->set_rules('activate_at','Activated Date','required');
    $this->form_validation->set_rules('deactivate_at','Deactivated Date','required');
    $this->form_validation->set_rules('smsbal','SMS balance','required');
    $this->form_validation->set_rules('package','Package','required');
    $this->form_validation->set_rules('smsCharge','SMS Charge','required');
    $this->form_validation->set_rules('status','Status','required');
    
    $this->load->model('User_model');

    if($this->form_validation->run()==false){
        $this->session->set_flashdata('Error_status', 'Error!');
    }else{
        $this->User_model->saveMasking();
        $this->session->set_flashdata('status', 'Inserted Successful!');
    }
    $data["maskingData"] = $this->User_model->getUserMaskingData();
    $data["usersId"]=$this->User_model->GetUserId();
    $this->load->view('user_masking',$data);
   }

   function deleteUser(){
    $this->load->model('User_model');
    if( $this->User_model->delete_User()){
        $this->session->set_flashdata('status', 'Deleted Successfuly!');
    }else{
        $this->session->set_flashdata('Error_status', 'Error!');
    }
 
    $data["userData"] = $this->User_model->getUserData();
    $this->load->view('user',$data);

   }

   function deleteUserMasking(){
    $this->load->model('User_model');
    if( $this->User_model->delete_UserMasking()){
        $this->session->set_flashdata('status', 'Deleted Successfuly!');
    }else{
        $this->session->set_flashdata('Error_status', 'Error!');
    }
 
    $data["maskingData"] = $this->User_model->getUserMaskingData();
    $data["usersId"]=$this->User_model->GetUserId();
    $this->load->view('user_masking',$data);
   }

   function updateUserMasking(){
    $this->form_validation->set_rules('masking','User Masking','required');
    $this->form_validation->set_rules('activate_at','Activated date','required');
    $this->form_validation->set_rules('deactivate_at','Deactivated date','required');
    $this->form_validation->set_rules('smsbal','SMS balance','required');
    $this->form_validation->set_rules('package','Package','required');
    $this->form_validation->set_rules('smsCharge','SMS charge','required');
    $this->form_validation->set_rules('status','Status','required');

    $this->load->model('User_model');

    if($this->form_validation->run()==false){
        $this->session->set_flashdata('Error_status', 'Error!');
    }else{
        $this->User_model->Update_masking();
        $this->session->set_flashdata('status', 'Update Successful!');
    }
    $data["maskingData"] = $this->User_model->getUserMaskingData();
    $data["usersId"]=$this->User_model->GetUserId();
    $this->load->view('user_masking',$data);
   }

   public function userpayment(){
        $this->load->model('User_model');

        $data["PayemntData"] = $this->User_model->getUserPayment();
        $data["maskingIds"] = $this->User_model->get_maskingId();
        $this->load->view('user_payment',$data);
   }

   //save user payment
   function AddPayment(){
        $this->form_validation->set_rules('masking_id','Masking id ','required');
        $this->form_validation->set_rules('amount','amount ','required');
        $this->form_validation->set_rules('paid_date','paid date','required');
        $this->form_validation->set_rules('discount_amount','Discount amount ','required');
        $this->form_validation->set_rules('paymentStatus','Payment Status','required');

        $this->load->model('User_model');

        if($this->form_validation->run()==false){
            $this->session->set_flashdata('Error_status', 'Error!');
        }else{
            $this->User_model->Add_user_payment();
            $this->session->set_flashdata('status', 'Payment Add Successful!');
        }

        $data["PayemntData"] = $this->User_model->getUserPayment();
        $data["maskingIds"] = $this->User_model->get_maskingId();
        $this->load->view('user_payment',$data);
   }

   //search payment data
   function SearchDate(){
        $this->load->model('User_model');
        $data["PayemntData"] = $this->User_model->SearchPayment();
        $data["maskingIds"] = $this->User_model->get_maskingId();
        $this->load->view('user_payment',$data);
   }

   //user messag
   public function user_msg(){
        $this->load->model('User_model');
        $data["maskingIds"] = $this->User_model->get_maskingId();
        $data["msglog"] = $this->User_model->getmsgLog();
        $this->load->view('user_msg',$data);
   }

   //get data msg log
   function SearchMsgLog(){


        $this->load->model('User_model');

        $data["maskingIds"] = $this->User_model->get_maskingId();
        $data["msglog"] = $this->User_model->getmsgLog();
        $data["msglog"] = $this->User_model->SearchMsg_Log();
        $this->load->view('user_msg',$data);
   }


}

?>