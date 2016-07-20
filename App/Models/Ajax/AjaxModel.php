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
    
   
        
    
   public function validate()
   {
       $app= $this->app;
       $app->db['default']->where('email', $this->email);
       $app->db['default']->where('password', md5( $this->password ) );
       $app->db['default']->where('active', 1);
               
       $data = $app->db['default']->getOne('users');
       
       if ( $data == NULL ) 
       {
           return false;
       } else {
           return $data;
       }
       
   }
    
}
