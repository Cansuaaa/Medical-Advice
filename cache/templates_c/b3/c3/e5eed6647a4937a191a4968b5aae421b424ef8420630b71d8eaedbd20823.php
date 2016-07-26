<?php

/* pages/addQuestion.tpl */
class __TwigTemplate_b3c3e5eed6647a4937a191a4968b5aae421b424ef8420630b71d8eaedbd20823 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->loadTemplate("./common/header.tpl")->display($context);
        // line 2
        echo "
<section>
    <div class=\"main-container\" style=\"background-color: #c0a16b\">
        <div class=\"row\">

            <div class=\"col-sm-12 text-center\">
                <h1 style=\"background-color:#8A2BE2\"> My question </h1>
                
            </div> 

                

            <div class=\"col-sm-12 col-md-3 col-lg-4\">
                 
            </div>



            <div class=\"col-sm-12 col-md-3 col-lg-4 text-center\">
                  
                <div class=\"alert alert-warning\" id=\"error\" style=\"display: none\" role=\"alert\"></div>
                
                    <div class=\"photo-form-wrapper text-center\">
                                <h1 class=\"text-white\">Add a question now!</h1>
                       
                            <form method=\"post\" action=\"/addQuestion\">
                                <div style=\"color:#8A2BE2\"> Author: </div>
                                 <input style=\"color:#8A2BE2 \" name=\"author\"   placeholder=\"Author\" type=\"text\"  value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userDetail"]) ? $context["userDetail"] : null), "email"), "html", null, true);
        echo "\">
                                  <div style=\"color:#8A2BE2\"> Title: </div>
                                <input style=\"color:#8A2BE2 \" name=\"title\"     placeholder=\"Title\" type=\"text\" value=\"\"type=\"text\" >
                                 <div style=\"color:#8A2BE2\"> Content: </div>
                                 <textarea  class=\"form-control\" id=\"content\" name=\"content\" placeholder=\"Add your question\" 
                                           style=\"color:#8A2BE2; width:463px; height:150px; resize:none;\"></textarea><br>

                            </form>
                                 
                                    <select style=\"color:#8A2BE2\">
                                        <option style=\"color:#8A2BE2\" value=\"1\">
                                            Category 1
                                        </option>
                                        <option value=\"2\">
                                            Category 2
                                        </option>
                                        <option value=\"3\">
                                            Category 3
                                        </option>
                                    </select>
                                  <input id=\"Edit\"  class=\"btn-filled\" text=\"centered\" style=\"background-color: #8A2BE2;\"  value=\"Save Changes\" type=\"submit\">
                        </div>
                             
                     
            
            </div>

              
            <div class=\"col-sm-12 col-md-3 col-lg-4\">
          </div>  
        </div>
    </div>
</section>
                                   
";
        // line 63
        $this->env->loadTemplate("./common/footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "pages/addQuestion.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 63,  50 => 29,  21 => 2,  19 => 1,);
    }
}
