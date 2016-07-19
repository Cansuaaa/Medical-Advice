<?php

class signUp extends signUpValidations
{
    protected $username = 'default';
    private $password;
    
    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }
    
    
    public function signUp()
    {
        echo "Username: {$this->username} ; Password: {$this->password}";
        echo '<br>';
        echo var_dump($this->validateEmail($this->username));
    }

}

class signUpValidations
{
    /**
     * Validates whether the username is an e-mail.
     * 
     * @param type $username
     * @return boolean
     */
    protected function validateEmail($username)
    {
        if(filter_var($username, FILTER_VALIDATE_EMAIL)){
            return TRUE;
        }
        return FALSE;
    }
}