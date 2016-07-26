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
        
        $jsEditable = array(
            '/js/bootstrap-editable.js'
        );
        
        $cssEditable = array(
            '/css/bootstrap-editable.css'
        );
        
        $myAccount = new MyAccountModel();
        $accDetail = $myAccount->getAccountDetails();
        

        $data = array(
            "title" => "MyAccount",
            'userDetail' => $accDetail,
            'javascript' => $javascript,
            'jsEditable' => $jsEditable,
            'cssEditable' => $cssEditable,
        );
        
        $app->render('pages/myAccount.tpl', $data);
    }
    
    /**
     * @Route('/editMyAccount')
     * @Name('editMyAccount.index')
     */
    
    public function editMyAccount( )
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();
        
        $javascript = array(
            '/js/editPassword.js'
        );
        
        $myAccount = new MyAccountModel();
        $accDetail = $myAccount->getAccountDetails();
        

        $data = array(
            "title" => "Edit Account",
            'userDetail' => $accDetail,
            'javascript' => $javascript,
        );
        
        $app->render('pages/editMyAccount.tpl', $data);
    }
    
    
}


