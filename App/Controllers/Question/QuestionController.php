<?php
use Yee\Managers\Controller\Controller;
use Yee\Managers\CacheManager;
use App\Models\Question\QuestionModel;
use App\Models\Question\QuestionListModel;
use App\Models\Category\CategorySelectModel;

class QuestionController extends Controller
{
     /**
     * @Route('/questionList')
     * @Name('questionList.index')
     */
    public function indexAction( )
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();
        
        $questionDetails = new QuestionListModel( );
        $questionArray = $questionDetails->questionList();
        
       // var_dump($questionArray);
        if(isset($_SESSION["islogged"]) == true)
        {
            $data = array(
            "title" => "Question's List",
            'content' => $questionArray,
        );
            
            $app->render('pages/questionList.tpl', $data );
        }else{
                $app->redirect('/');
            }
        
    }
    
     /**
     * @Route('/addQuestion')
     * @Name('addQuestion.index')
     */
    public function addArticlePost( )
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();
        
        
        $selectCategoryModel = new CategorySelectModel();
        $categoryArray = $selectCategoryModel->categorySelect();
      
        
        $javascript = array(
        
            '/js/question.js',
        );
        
        $jquerytinymce = array(
        
            '/js/question.js',
        );
        
        
         if(isset($_SESSION["islogged"]) == true)
         {
              $data = array(
            "title" => "Add question",
            "javascript" => $javascript,
            'userEmail' => $_SESSION['username'],
            'content' => $categoryArray,
        );
        
        $app->render('pages/addQuestion.tpl', $data );
        
         }else{
             $app->redirect('/');
         }
       
    }
    
     /**
     * @Route('/questionList')
     * @Name('questionList.index')
     */
      public function questionList( )
    {
        /** @var Yee\Yee $yee */
        $app = $this->getYee();
       
        $questionDetails = new QuestionModel();
        $questionArray = $questionDetails->questionList();
        
        var_dump($questionArray);
        
        
        $data = array(
            "title" => "Question's List",
            'content' => $questionArray,
        );
        
        $app->render('pages/questionList.tpl', $data );
    }

}



 
