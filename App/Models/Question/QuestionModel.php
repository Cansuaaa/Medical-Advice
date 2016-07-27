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
    public function addQuestionDB($email)
    {
        $app = \Yee\Yee::getInstance();
        $db = $app->db['default'];
         // Tuk za da vzema email-a za author_id, inicializiram promenliva $email
        
        $db->insert("questions", array(
            'title' => $this->title,
            'author_id'=> $email,
            'content' => $this->content,
            'date' => date("Y-m-d H:i:s"),
            'category_id' => 0,
            'main_picture' => 1,
        ));
    }
    
   

   
    
}


