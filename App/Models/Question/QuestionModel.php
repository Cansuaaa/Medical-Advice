<?php

namespace App\Models\Question;
use \App\Library\Helpers;

class QuestionModel
{

    private $title;
    private $content;
   


    public function __construct($title, $content)
    {  
        
        $this->title = $title;
        $this->content = $content;
    }
    
    /**
     * Inserts the new account data into the DB-userss-
     */
    public function addQuestionDB()
    {
        $app = \Yee\Yee::getInstance();
        $db = $app->db['default'];
        $email = $_SESSION['username'];
        
        $db->insert("questions", array(
            'title' => $this->title,
            'content' => $this->content,
            'date' => date("Y-m-d H:i:s"),
        ));
    }

   
    
}


