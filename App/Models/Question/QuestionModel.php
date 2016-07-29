<?php

namespace App\Models\Question;
use \App\Library\Helpers;

class QuestionModel
{
    private $title;
    private $content;
    private $category;
   
    public function __construct($title, $content, $category)
    {  
        $this->title = $title;
        $this->content = $content;
        $this->category = $category;
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
            'category_id' => $this->category,
            'main_picture' => 1,
        ));
    }
    
   

   
    
}


