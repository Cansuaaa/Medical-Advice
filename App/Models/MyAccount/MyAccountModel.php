<?php

namespace App\Models\myAccount;
use \App\Library\Helpers;

class MyAccountModel
{
    public function __construct()
    {  
    }
    
    public function getAccountDetails() {
        $app = \Yee\Yee::getInstance();
         
        $data =  $app->db['default']->where('email', $_SESSION['username'])->getOne('users');
         
        //$sql = "SELECT * FROM users WHERE username = ".$_SESSION['email']; прави същото като горното, само че това е директна sql заявка.
        //$app->db['default']->rawQuery(SQL);
        
        return $data;       
    }
    
    public function validatePassword($password, $rePassword) {
        $password = trim($password);
        $rePassword = trim($rePassword);
        
        if($password == $rePassword){
            return preg_match("/\b(.{6,20})\b/", $password);
        }
        return FALSE;
    }
        
    public function updateDetails($email, $password, $firstName, $lastName) {
        $app = \Yee\Yee::getInstance();
        
        $data = array(
            "firstName" => $firstName,
            "lastName" => $lastName
        );
                
        if (strlen($password) > 0) {
            $data['password'] = $password;
        }
        
        return $app->db['default']->where("email", $email)->update("users", $data);
    }
    
}
