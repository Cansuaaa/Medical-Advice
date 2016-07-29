<?php

namespace App\Models\Category;
use \App\Library\Helpers;

class CategorySelectModel
{
  
   
    public function __construct()
    { 
    }
    
    public function categorySelect() {
        
        $app = \Yee\Yee::getInstance();
        
        
        return $app->db['default']->get("categories");
    }

   
    
}






