<?php
class Security_model extends CI_Model 
{


    function encryptIt($q) {
        
            $cryptKey  = '06c219e5bc8378f3a8a3f83b4b7e4649';
        
            $qEncoded  = base64_encode( $this->encryption( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
        
            return($qEncoded);
        
    }
    
    
      
} 