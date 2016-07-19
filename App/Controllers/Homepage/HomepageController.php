<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;

class HomepageController extends Controller
{
     /**
     * @Route('/')
     * @Name('homepage.index')
     */
    public function indexAction( )
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();
        
        $data = array(
            "test"=>"hello world!",
            "smith"=>"Hi, everyone! :)",
            "cats"=>"Meow, Meow, Meow",
            "dogs"=>"Bau, Bau, Bau",
            "db"=> array(
                "level2"=>"Su",
                "level3"=>"Zamaen"
                ),
            );
        
        $app->render('pages/homepage.tpl', $data );
       
    }
    
}
