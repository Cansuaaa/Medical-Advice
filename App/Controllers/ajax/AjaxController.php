<?php

use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;
use App\Models\MyAccount\MyAccountModel;
use App\Models\Ajax\AjaxModel;
use App\Models\Question\QuestionModel;
use App\Models\Category\CategoryModel;

class AjaxController extends Controller {

    /**
     * @Route('/ajax/login')
     * @Name('ajax.index')
     * @Method('post')
     */
    public function indexAction() {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();

        $email = $app->request()->post('email');
        $password = $app->request()->post('password');


        $ajaxModel = new AjaxModel($email, $password);

        $ret = $ajaxModel->validate();

        if ($ret == false) {
            $error = "Your email/password are not correct!";
            $data = array(
                'error' => true,
                'message' => $error,
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

//        $password = $app->request()->post('password');
//        $confirmPassword = $app->request()->post('rePassword');
//        
        $name = $app->request()->post('name');
        $value = $app->request()->post('value');

        if ($value == "") {
            $error = "Complete the field!";
        }

        $model = new MyAccountModel();

        if (isset($error) == false) {
            $model->updateDetails($name, $value);
        }



//        if (strlen($password) > 0) {
//            if (!$model->validatePassword($password, $confirmPassword)) {
//                $error = "Passwords do not match!";
//            }
//        }
//        if (!isset($error) && !$model->updateDetails($email, $password, $firstName, $lastName)) {
//            $error = "Couldn't save the new details! Please check the data and try again!";
//        }

        if (isset($error)) {
            $data = array(
                "success" => FALSE,
                "error" => FALSE,
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

    /**
     * @Route('/ajax/editPassword')
     * @Name('ajax.editPassword')
     * @Method('post')
     */
    public function editPassword() {
        $app = $this->getYee();

        $email = $_SESSION['username'];

        $password = $app->request()->post('password');
        $newPassword = $app->request()->post('newPassword');
        $confirmPassword = $app->request()->post('rePassword');

//        var_dump($_POST);
//        die();

        $model = new MyAccountModel();
        $userData = $model->getAccountDetails();

        if (strlen($password) > 0 && strlen($newPassword) > 0 && strlen($confirmPassword) > 0) {

            if ($userData['password'] != $password) {
                $error = "Your password is not correct!";
            }
            if (!$model->validatePassword($newPassword, $confirmPassword)) {
                $error = "Passwords do not match!";
            }
        } else {
            $error = "Complete the fields!";
        }


        if (isset($error) == false) {
            $model->updatePass($newPassword);
        }

        if (isset($error)) {
            $data = array(
                "success" => FALSE,
                "error" => FALSE,
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

    /**
     * @Route('/ajax/addQuestion')
     * @Name('ajax/addQuestion')
     * @Method('POST')
     */
    public function addQuestion() {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();


        // $author = $app->request()->post('author');
        $title = $app->request()->post('title');
        $content = $app->request()->post('content');
        $category = $app->request()->post('category');
        
        $email = $_SESSION['username'];
//        var_dump($_POST);
//        die();

        $questionModel = new QuestionModel($title, $content, $category);

        if (strlen($title) > 0 && strlen($content) > 0) {
            $questionModel->addQuestionDB($email);
        } else {
            $error = "Complete the fields!";
        }


        if (isset($error)) {
            $data = array(
                "success" => FALSE,
                "error" => FALSE,
                "message" => $error,
            );
        } else {
            $data = array(
                "success" => TRUE,
                "message" => "Successfully added!",
            );
        }

        $app->response()->headers()->set('Content-Type', 'application/json');
        echo json_encode($data);
    }

    
    /**
     * @Route('/ajax/addCategory')
     * @Name('ajax/addCategory')
     * @Method('POST')
     */
    public function addCategory() {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();
        
        $category = $app->request()->post('category');
        $email = $_SESSION['username'];
//        var_dump($_POST);
//        die();
   
        $categoryModel = new CategoryModel();

        if (strlen($category) > 0) {
            $categoryModel->addCategoryDB($email, $category);
        } else {
            $error = "Complete the fields!";
        }


        if (isset($error)) {
            $data = array(
                "success" => FALSE,
                "error" => FALSE,
                "message" => $error,
            );
        } else {
            $data = array(
                "success" => TRUE,
                "message" => "Successfully added!",
            );
        }

        $app->response()->headers()->set('Content-Type', 'application/json');
        echo json_encode($data);
    }

    
}
