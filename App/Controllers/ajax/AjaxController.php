<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;
use App\Models\MyAccount\MyAccountModel;
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
    
    /**
     * @Route('/ajax/updateMyAccount')
     * @Name('ajax.updateMyAccount')
     * @Method('post')
     */
    public function postUpdateMyAccount() {
        $app = $this->getYee();
        
        $email = $_SESSION['username'];
        
        $password = $app->request()->post('password');
        $confirmPassword = $app->request()->post('rePassword');
        $firstName = $app->request()->post('firstName');
        $lastName = $app->request()->post('lastName');
        
        $model = new MyAccountModel();
        
        if (strlen($password) > 0) {
            if (!$model->validatePassword($password, $confirmPassword)) {
                $error = "Passwords do not match!";
            }
        }
        
        if (!isset($error) && !$model->updateDetails($email, $password, $firstName, $lastName)) {
            $error = "Couldn't save the new details! Please check the data and try again!";
        }
        
        if (isset($error)) {
            $data = array(
                "success" => FALSE,
                "error" => TRUE,
                "message" => $error
            );
        } else {
            $data = array(
                "success" => TRUE,
                "message" => "Successfully updated!"
            );
        }
        
        $app->response()->headers()->set('Content-Type', 'application/json');
        echo json_encode($data); 
    }
}