<?php
use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;
use App\Models\MyAccount\MyAccountModel;
use App\Models\Question\QuestionModel;
use App\Models\Question\QuestionListModel;
use App\Models\Category\CategoryModel;

class CategoryController extends Controller
{
   
    
        /**
     * @Route('/addCategory')
     * @Name('addCategory.index')
     *
     */
    public function addCategory( )
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();
       
        
        $javascript = array(
        
            '/js/category.js',
        );
        
        $jquerytinymce = array(
        
            '/js/jquery.tinymce.min.js',
        );
        
        
         if(isset($_SESSION["islogged"]) == true)
         {
            $data = array(
                            "title" => "Add category",
                            "javascript" => $javascript,
                            'adminEmail' => $_SESSION['username'],
                          );
        
        $app->render('pages/addCategory.tpl', $data );
        
         }
         else{
             $app->redirect('/');
         }
       
    }
    
   
       /**
     * @Route('/categoryList')
     * @Name('categoryList.index')
     *
     */
    public function categoryList( )
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();
       
        
        $javascript = array(
        
            '/js/category.js',
        );
        

        
        
         if(isset($_SESSION["islogged"]) == true)
         {
              $data = array(
                            "title" => "Add category",
                            "javascript" => $javascript,
                            'adminEmail' => $_SESSION['username'],
                           );
        
        $app->render('pages/categoryList.tpl', $data );
        
         }else{
             $app->redirect('/');
         }
       
    }
    
  

}



 
