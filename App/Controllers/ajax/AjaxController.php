<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;

use App\Models\Ajax\AjaxModel;

class AjaxController extends Controller
{
     /**
     * @Route('/ajax/login')
     * @Name('ajax.index')
     * @Method('post')
     */
    
    public function indexAction( )
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();
  
        $email = $app->request()->post('email');
        $password = $app->request()->post('password');
 
        
        $ajaxModel = new AjaxModel($email,$password);
        
        $ret = $ajaxModel->validate();
        
        if( $ret == false )
        {
            $error = "Your email/password are not correct!";
            $data = array(
                'error' => true,
                'message'=> $error,
            );
        } else {
            $data = array(
                'error' => false
            );
            $_SESSION["islogged"] = true;
            $_SESSION["username"] = $email;
        }
        $app->response()->headers()->set('Content-Type', 'application/json');
        echo json_encode($data);
        
      
        
    }
}