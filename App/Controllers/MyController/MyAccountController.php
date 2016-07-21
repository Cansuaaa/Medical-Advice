<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;
use App\Models\MyAccount\MyAccountModel;

class MyAccountController extends Controller
{
     /**
     * @Route('/myAccount')
     * @Name('myAccount.index')
     */
    
    public function indexAction( )
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();
        
        $javascript = array(
            '/js/myAccount.js'
        );
        
        $myAccount = new MyAccountModel();
        $accDetail = $myAccount->getAccountDetails();
        
//        var_dump($accDetail);
//        die();
        $data = array(
            "title" => "MyAccount",
            'userDetail' => $accDetail,
            'javascript' => $javascript,
        );
        
        $app->render('pages/myAccount.tpl', $data);
    }
}


