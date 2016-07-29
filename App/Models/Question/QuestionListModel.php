<?php

namespace App\Models\Question;
use \App\Library\Helpers;

class QuestionListModel
{   
    public function questionList() {
        
        $app = \Yee\Yee::getInstance();
        //$db = $app->db['default'];
        
        $question = Array ("id", "title", "author_id", "date", "content", "category_id", "main_picture");
        $data = $app->db['default']->get("questions", null, $question);
        return $data;
        
    }

   
    
}




