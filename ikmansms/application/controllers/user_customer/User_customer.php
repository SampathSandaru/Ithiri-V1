<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_customer extends CI_Controller {
    public function index(){
        $this->load->view('user_customer/user_customer');
    }
}

