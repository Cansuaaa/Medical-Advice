<?php

/* pages/articleForm.tpl */
class __TwigTemplate_7e986917203a10fa9e6b52c41dafc520bcd6239b4cd77e7408c36f224684e001 extends Twig_Template
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
                <h1 style=\"background-color: rgb(189, 21, 21);\">My article </h1>
                
            </div> 

                

            <div class=\"col-sm-12 col-md-3 col-lg-4\">
                 
            </div>



            <div class=\"col-sm-12 col-md-3 col-lg-4 text-center\">
                  
                <div class=\"alert alert-warning\" id=\"error\" style=\"display: none\" role=\"alert\"></div>
                
                    <div class=\"photo-form-wrapper text-center\">
                        <form id=\"myAccountForm\">   
                            <table class=\"table\">
                                <a href=\"#\" id=\"lastName\" name=\"lastName\" data-type=\"text\"  data-url=\"/articleForm\" data-title=\"Enter last name\"></a>
                                <a href=\"/articleForm\">Add an article</a>
                            </table>
                                   
                                      
                                    
                        </form>
                           
                    </div>            
                     
            
            </div>



            <div class=\"col-sm-12 col-md-3 col-lg-4\">
            </div>
        </div>
    </div>
</section>
                                    
";
        // line 48
        $this->env->loadTemplate("./common/footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "pages/articleForm.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 48,  21 => 2,  19 => 1,);
    }
}
