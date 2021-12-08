<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthValidation extends CI_Controller {

    public function __construct()
    {
    /*call CodeIgniter's default Constructor*/
      parent::__construct();
      $this->load->library('session');
      $this->load->helper('url'); 
      $this->load->library('encryption');
      $this->load->database();
  
    /*load Model*/
    
    
      $this->load->model('ManageCustomer_curd');



    }
    
    
    function encrypt_decrypt($string, $action = 'encrypt')
{
    $encrypt_method = "AES-256-CBC";
    $secret_key = 'AA74CDCC2BBRT935136HH7B63C27'; // user define private key
    $secret_iv = '5fgf5HJ5g27'; // user define secret key
    $key = hash('sha256', $secret_key);
    $iv = substr(hash('sha256', $secret_iv), 0, 16); // sha256 is hash_hmac_algo
    if ($action == 'encrypt') {
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    } else if ($action == 'decrypt') {
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }
    return $output;
}
    
    public function encryptIt( $q ) {

    $cryptKey  = '06c219e5bc8378f3a8a3f83b4b7e4649';

    $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );

    return( $qEncoded );

}

    	public function index()
	{
        // $input = 'mytest';
        
        // $res = $this->encryptIt($input);
        
        // echo $res;
        
        echo "Your Encrypted password is = ". $pwd = $this->encrypt_decrypt('spaceo', 'encrypt');
echo "Your Decrypted password is = ". $this->encrypt_decrypt($pwd, 'decrypt');


    }


	

  
	
	
}
