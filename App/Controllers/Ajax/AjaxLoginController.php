<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;

class AjaxLoginController extends Controller
{
     /**
     * @Route('/ajaxlogin')
     * @Name('login.index')
     */
    public function LoginAction( )
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();
        
//        $javascript = array(
//            '/js/Login.js'
//        );
        
        $data = array(
//            "javascript" => $javascript,
        );
        
        
        
        
        
        $app->render('pages/login.tpl', $data);
    }
    
    public function testAction() {
            echo "Test";
        }

}