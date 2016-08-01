<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;

class LogoutController extends Controller
{
     /**
     * @Route('/logout')
     * @Name('logout.action')
     */
    
    public function logoutAction( )
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();
        
        session_destroy();
        $app->redirect('/');
     
     
     
       
    }
}


