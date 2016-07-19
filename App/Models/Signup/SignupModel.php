<?php

namespace App\Models\Signup;
use \App\Library\Helpers;

class SignupModel
{

    
    private $email;
    private $password;
    private $rePassword;
    public $activationCode;


    public function __construct($email, $password, $rePassword)
    {  
        $this->email = $email;
        $this->password = $password;
        $this->rePassword = $rePassword;
    }
    
    /**
     * Inserts the new account data into the DB-userss-
     */
    public function register()
    {
        $app = \Yee\Yee::getInstance();
        $db = $app->db['default'];
        $hasPass = md5($this->password);
              
        $this->activationCode = sha1($this->email);
        $db->insert("users", array(
            'email' => $this->email,
            'password' => $hasPass,
            'active' => 0,
            'signupDate' => date("Y-m-d H:i:s"),
            'ip' => Helpers::get_client_ip(),
            'activationCode' => $this->activationCode,
        ));
    }

    /**
     * Executes the email and password validation.
     * 
     * -Uses '\App\Library\Helpers' for validation
     * 
     * @return boolean TRUE -> If email and password are valid
     * @return boolean FALSE -> If the email and password are NOT valid
     * 
     * 
     * @return boolean
    */
   public function validateSignup()
    {
        if(!(Helpers::validateEmail($this->email))){
            return FALSE;
        }
        if(!(Helpers::validatePassword($this->password, $this->rePassword))){
            return FALSE;
        }
        return TRUE;
    }
    
    /**
     * Checks the DB-users if the 'email' already exists or not.
     * 
     * @return boolean TRUE -> If the email exists
     * @return boolean FALSE -> If the email doesn't exist
     * 
     */
    public function doesEmailExist()
    {
        $app = \Yee\Yee::getInstance();
        
        if($app->db['default']->where('email', $this->email)->getOne('users')){
            return TRUE;
        }
        return FALSE;
    }
}
