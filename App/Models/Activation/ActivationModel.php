<?php

namespace App\Models\Activation;

class ActivationModel
{
    private $activationCode;
    
    public function __construct($activationCode)
    {
        $this->activationCode = $activationCode;
    }
    
    public function activateAccount()
    {   
        $app = \Yee\Yee::getInstance();
        
        $data = array(
          'active' => 1,
          'activationCode' => ''
        );
        
        $app->db['default']->where('activationCode', $this->activationCode)->update('users',$data);

    }
    
    public function doesActivationCodeExist()
    {
        $app = \Yee\Yee::getInstance();
        
        if($app->db['default']->where('activationCode', $this->activationCode)->getOne('users')){
            return TRUE;
        }
        return FALSE;
    }
    
}

