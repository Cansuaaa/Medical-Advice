<?php

/* pages/questionForm.tpl */
class __TwigTemplate_8fc33677d6e3b598f7c6e8cc72956c29784782e8721b0a3aa1877740af0251ec extends Twig_Template
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
                <h1 style=\"background-color: rgb(189, 21, 21);\">My question </h1>
                
            </div> 

                

            <div class=\"col-sm-12 col-md-3 col-lg-4\">
                 
            </div>



            <div class=\"col-sm-12 col-md-3 col-lg-4 text-center\">
                  
                <div class=\"alert alert-warning\" id=\"error\" style=\"display: none\" role=\"alert\"></div>
                    <div class=\"photo-form-wrapper text-center\">
                        <form id=\"myAccountForm\">   
                            <table>
                                <td>
                                    <tr>
                                        <a style=\"color: rgb(189, 21, 21);\" href=\"/addQuestion\">Add a question</a>
                                    </tr>
                                    <tr>
                                         <!-- <a style=\"color: rgb(189, 21, 21);\" href=\"/addQuestion\">Question's list</a> -->
                                    </tr>
                                </td>
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
        // line 51
        $this->env->loadTemplate("./common/footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "pages/questionForm.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 51,  21 => 2,  19 => 1,);
    }
}
