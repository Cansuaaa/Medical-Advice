<?php

/* pages/addCategory.tpl */
class __TwigTemplate_9ac6e7cd649ea6c53cf033f1f20c799de21e702919444ab1c0eaa2a68836633d extends Twig_Template
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
        echo "<style>
    .ccolor {
    color:#DC143C;
    }
</style>

<section>
    <div class=\"main-container\" style=\"background-color: #c0a16b\">
        <div class=\"row\">

            <div class=\"col-sm-12 text-center\">
                <h1  style=\"background-color:#DC143C\"> Add a category now! </h1>
                
            </div> 

                

            <div class=\"col-sm-12 col-md-3 col-lg-4\">
                 
            </div>



            <div class=\"col-sm-12 col-md-3 col-lg-4 text-center\">
                  
                <div class=\"alert alert-warning\" id=\"error\" style=\"display: none\" role=\"alert\"></div>
                
                    <div class=\"photo-form-wrapper text-center\">
                        <form method=\"post\" id=\"addCategoryForm\"> 
                            <div class=\"ccolor\"> Admin: </div>
                                <input disabled class=\"ccolor\" name=\"author\"   placeholder=\"Author\" type=\"text\"  value=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["adminEmail"]) ? $context["adminEmail"] : null), "html", null, true);
        echo "\">
                            <div class=\"ccolor\"> Category: </div>
                                <input class=\"ccolor\" name=\"category\"     placeholder=\"Category\" type=\"text\" value=\"\"type=\"text\" >
                                <input id=\"submit\"  class=\"btn-filled\" text=\"centered\" style=\"background-color:#DC143C ;\"  value=\"Add\" type=\"submit\">
                        </form>
                    </div>
            </div>

              
            <div class=\"col-sm-12 col-md-3 col-lg-4\">
          </div>  
        </div>
    </div>
</section>
                                   
";
        // line 47
        $this->env->loadTemplate("./common/footer.tpl")->display($context);
        // line 48
        echo "
";
    }

    public function getTemplateName()
    {
        return "pages/addCategory.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 48,  71 => 47,  53 => 32,  21 => 2,  19 => 1,);
    }
}
