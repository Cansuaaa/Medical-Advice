<?php

class Validate
{
    private $username;
    private $password;
    
    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }
    
    public function validateUsername()
    {
        $this->username = trim($this->username);
        if(empty($this->username) && strlen($this->username) < 3 && strlen($this->username) > 20 && strpos($this->username, " ") == TRUE){
            return FALSE;
        }
        return TRUE;
    }
    
    public function validatePassword()
    {
        $this->password = trim($this->password);
        if(empty($this->password) && strlen($this->password) < 6 && strlen($this->password) > 20){
            return FALSE;
        }
        return TRUE;
    }
    
}