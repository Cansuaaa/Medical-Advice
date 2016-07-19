<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;

use App\Models\Activation\ActivationModel;
//use App\Library\MessageHandler;

class ActivationController extends Controller
{
     /**
     * @Route('/activation/:activation_code')
     * @Name('activation.index')
     */
     public function indexAction($activationCode)
     {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();
        
        
        $activationModel = new ActivationModel($activationCode);
         
        if($activationModel->doesActivationCodeExist()){
            $activationModel->activateAccount();

            $app->redirect('/login');          
        } else{

            $app->redirect('/signup');
        }

     }
}
