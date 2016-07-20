<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;

class myAccountController extends Controller
{
     /**
     * @Route('/myAccount')
     * @Name('myAccount.index')
     */
    
    public function indexAction( )
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();
        
        
        
        $data = array(
            "title" => "MyAccount",
            //'javascript' => $javascript,
        );
        
        $app->render('pages/myAccount.tpl', $data );
    }
}


