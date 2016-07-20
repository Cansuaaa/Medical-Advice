<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;

class HomeController extends Controller
{
     /**
     * @Route('/')
     * @Name('home.index')
     */
    
    public function indexAction( )
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();
        
        $data = array(
            "title" => "Home"
        );
        
        $_SESSION['ID'] = '55';
        
        $app->render('pages/home.tpl', $data );
    }
    
    
    
    
    
}

