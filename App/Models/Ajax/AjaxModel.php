<?php

use App\Library\Helpers;

namespace App\Models\Ajax;


class AjaxModel
{
    private $email;
    private $password;
    private $app;
    
    public function __construct($email, $password)
    {
        $this->app = \Yee\Yee::getInstance();
        $this->email = $email;
        $this->password = $password;
    }
    
    public function userProperty() {
        
        $app= $this->app;
        return $app->db['default']->where('email', $this->email)->getOne('users');
    }
    
    
     public function doesUserExist() // Razbiram dali ima syshtestvuvash user true/false
    {
        $app = $this->app;
        $isUserExist = $this->userProperty();
        
        if($isUserExist){
            return true;
        }
        return FALSE;
    }
    
    
   public function passwCompare(){
       
       $app = $this->app;
       
       if ($this->doesUserExist()) { //vzimam samo rezultata dali syshtestvuva takyv user
           
            $user = $this->userProperty(); // Vzimam masiva
            if ($user['password'] == md5($this->password)) {
               return true;
            }
       }
       return false;
   }
   

   public function validateLogin() {
       
       if($this->doesUserExist() && $this->passwCompare())
       {
           return true;
       }
       return false;
   }
   
    
    public function isUserActive(){
       
       $app = $this->app;
       
       if ($this->doesUserExist()) { //vzimam samo rezultata dali syshtestvuva takyv user
           
            $user = $this->userProperty(); // Vzimam masiva
            if ($user['active'] == 1) {
               return true;
            }
       }
       return false;
   }
        
    
    
}
