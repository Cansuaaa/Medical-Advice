<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;

use App\Models\Ajax\AjaxModel;

class AjaxController extends Controller
{
     /**
     * @Route('/ajax/login')
     * @Name('ajax.index')
     */
    
    public function indexAction( )
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();
        
        $email = $app->request()->post('email');
        $password = $app->request()->post('password');
        
        
        $ajaxModel = new AjaxModel($email,$password);
        
        if(!$ajaxModel->validateLogin())
        {
            $error = "Your email/password are not correct!";
        }
        if (!$ajaxModel->isUserActive()) {
            $error = "Activate your account!";
        }
        
        
//       $user = $ajaxModel->isUserActive();
//       var_dump($error);
//       die();
        
        $data = array(
            'error' => $error,
        );
        $app->response()->headers()->set('Content-Type', 'application/json');
        echo json_encode($data);
    }
}