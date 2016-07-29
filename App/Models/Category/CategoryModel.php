<?php

namespace App\Models\Category;
use \App\Library\Helpers;

class CategoryModel
{
    /**
     * Inserts the new account data into the DB-userss-
     */
    public function addCategoryDB($email, $category)
    {
        $app = \Yee\Yee::getInstance();
        $db = $app->db['default'];
         // Tuk za da vzema email-a za author_id, inicializiram promenliva $email
        
        $db->insert("categories", array(
            'category' => $category,
            'admin_id'=> $email,
            'date' => date("Y-m-d H:i:s"),
        ));
    }
    
   

   
    
}




