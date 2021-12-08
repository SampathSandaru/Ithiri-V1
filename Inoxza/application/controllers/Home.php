<?php

class Home extends CI_Controller {

    public function Index() 
    {
        $this->load->model('student');
		$data["fletchData"] = $this->student->students();
        $this->load->view('index',$data);
    }


    function AddStudent() 
    {
        $this->form_validation->set_rules('name','Student Name','required');
		$this->form_validation->set_rules('phone','Phone Number','required');
		$this->form_validation->set_rules('Email','Email Address','required');
        $this->form_validation->set_rules('Password','Password','required');

        if($this->form_validation->run()==false){
            $this->session->set_flashdata('status', 'Error!');
			$this->load->model('student');
		    $data["fletchData"] = $this->student->students();
            $this->load->view('index',$data);
		}else{
            $this->load->model('student');
           $this->student->addData();
           $this->session->set_flashdata('status', 'Successful!');

        //    $this->load->model('student');
           $data["fletchData"] = $this->student->students();
           $this->load->view('index',$data);

        }
    }
}


?>