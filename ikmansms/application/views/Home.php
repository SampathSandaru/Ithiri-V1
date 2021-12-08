<?php



defined('BASEPATH') OR exit('No direct script access allowed');







class Home extends CI_Controller {


    public function __construct()

    {

    /*call CodeIgniter's default Constructor*/

    parent::__construct();

  

    /*load database libray manually*/

    $this->load->database();

    $this->load->library('session');

    /*load Model*/
    $this->load->model('Crud_model');


    }


    public function save_personal_details() {


        $result;

            $this->load->model('Crud_model');
    
            $fullName = $this->input->post('fname')." ".$this->input->post('lname');
    
            $email = $this->input->post('email');
    
            $phone = $this->input->post('phone');
    
            $address1 = $this->input->post('address1'); 
    
            $zip = $this->input->post('zip'); 
    
            $city = $this->input->post('city'); 
    
            $address2 = $this->input->post('address2'); 
    
     
            $user_id="713505429";
     
    
             $uploadedImage="";

             $config['upload_path']  = './public/uploads/';
    
             $config['allowed_types']  = 'gif|jpg|png|jpeg';
    
             $this->load->library('upload', $config);
    

             if ($this->upload->do_upload('image'))
    
             {
    
                 $uploadData = $this->upload->data(); 
    
     
    
               
    
                 $uploadedImage ='./public/uploads/'.$uploadData['file_name']; 
    
                 
    
             }

           $response=$this->Crud_model->save_cv_info($fullName,$email, $phone, $uploadedImage, $address1,$zip,$city,$address2);
    


             $result['education'] =$this->Crud_model->get_education_info($user_id);



          $this->load->view('user_details/education',$result);

    
     
    
         }
    

    public function personal_details() {



       
        $this->load->view('user_details/personal_details');

 

     }

     
//   public function save_cv_info() {
//     // $data['sub_main'] = 'cv_templates/cv_form';
//     // $this->load->view('cv_layouts/cv_main_view', $data);
//     $this->load->model('Crud_model');

//    $fullName = $this->input->post('fullName');
//     $profession = $this->input->post('profession');
//     $self_description = $this->input->post('short_description');

//     $fb = $this->input->post('fb'); 


//     $uploadedImage="";

//     $config['upload_path']  = './public/uploads/';
//     $config['allowed_types']  = 'gif|jpg|png|jpeg';
//     $this->load->library('upload', $config);


//     if ($this->upload->do_upload('image'))
//     {
//         $uploadData = $this->upload->data(); 

//         echo "success";
//      echo    $uploadedImage ='./public/uploads/'.$uploadData['file_name']; 
        
//     }


//     echo $response=$this->Crud_model->save_cv_info($fullName,$profession, $self_description, $uploadedImage, $fb);

//     $this->load->view('user_details/education');

// }



    public function LoginValidation() {



        $this->load->model('Crud_model');

 

        $username = $this->input->post('username');

        $password = $this->input->post('password');

        

 

        $response=$this->Crud_model->LoginValidation($username,$password);

 
        if($response == 0){


            $this->load->view('login');



        }else{



            $this->session->set_userdata('user_id',$username);


             $this->load->view('home');

        }



 

       

 

     }



    public function save_experience_info() {



        $this->load->model('Crud_model');

 

        $company = $this->input->post('company');

        $job_position = $this->input->post('job_position');

        $short_description_job = $this->input->post('short_description_job');

        $from_year = $this->input->post('from_year');

        $to_year = $this->input->post('to_year');



        $user_id =0;

 

        $response=$this->Crud_model->save_experience_info($company,$job_position, $short_description_job,$from_year,$to_year);

 

        $result['experience'] =$this->Crud_model->get_experience_info($user_id);

 

        $this->load->view('user_details/experience',$result);

 

     }

     public function save_skills_info() {



        $this->load->model('Crud_model');

 

        $skill = $this->input->post('skill');



        $precentage = $this->input->post('precentage');

       

        $user_id =0;

 

        $response=$this->Crud_model->save_skills_info($skill,$precentage);

 

        $result['skill'] =$this->Crud_model->get_skills_info($user_id);

 

        $this->load->view('user_details/skills',$result);

 

     }

     public function save_reference_info() {



        $this->load->model('Crud_model');

 

        $name = $this->input->post('name');

        $job_position = $this->input->post('job_position');

        $contact = $this->input->post('contact');

        $email = $this->input->post('email');

       

        $user_id =0;

 

        $response=$this->Crud_model->save_reference_info($name,$job_position, $contact, $email);

 

        $result['reference'] =$this->Crud_model->get_reference_info($user_id);

 

        $this->load->view('user_details/reference',$result);

 

     }

 

     



     public function save_hobbies_info() {



        $this->load->model('Crud_model');

 

        $hobbies = $this->input->post('hobbies');

        $user_id=0;

 

        $response=$this->Crud_model->save_hobbies_info($user_id,$hobbies);

 

        $result['hobbies'] =$this->Crud_model->get_hobbies_info($user_id);

 

        $this->load->view('user_details/hobbies',$result);

 

     }



    public function save_education_info() {



       $this->load->model('Crud_model');



       $institute = $this->input->post('institute');

       $edu_type = $this->input->post('edu_type');

       $short_description = $this->input->post('short_description');

       $from_year = $this->input->post('from_year');

       $to_year = $this->input->post('to_year');

       $user_id =0;



       $response=$this->Crud_model->save_education_info($institute,$edu_type, $short_description, $from_year, $to_year);



       $result['education'] =$this->Crud_model->get_education_info($user_id);



       $this->load->view('user_details/education',$result);



    }





    public function index() {







        $this->load->view('home');







    }



    public function experience() {



        $result;

        $user_id="713595429";

        // $this->load->view('user_details/experience');



        
        $result['experience'] =$this->Crud_model->get_experience_info($user_id);

 

        $this->load->view('user_details/experience',$result);




    }

    public function hobbies() {

        $result;

        $user_id ='713505429';







        $result['hobbies'] =$this->Crud_model->get_hobbies_info($user_id);

 

        $this->load->view('user_details/hobbies',$result);



        



    }



    public function reference() {

        $result;

        $user_id ='713505429';

        $result['reference'] =$this->Crud_model->get_reference_info($user_id);

        $this->load->view('user_details/reference',$result);


    }

    public function login() {







        $this->load->view('login');



        



    }



    public function registration() {







        $this->load->view('registration');



        



    }





    public function skills() {



        $user_id ="713505429";


        $result['skill'] =$this->Crud_model->get_skills_info($user_id);

 

        $this->load->view('user_details/skills',$result);


        



    }



    public function cv_templates() {







        $this->load->view('cv_templates');



        



    }





    public function cv_design() {







        $this->load->view('cv_designs/cv_one_design');



        



    }



  



}







?>























