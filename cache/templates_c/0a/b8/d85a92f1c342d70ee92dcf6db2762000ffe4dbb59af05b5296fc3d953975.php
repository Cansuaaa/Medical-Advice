<?php

/* pages/categoryList.tpl */
class __TwigTemplate_0ab8d85a92f1c342d70ee92dcf6db2762000ffe4dbb59af05b5296fc3d953975 extends Twig_Template
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
    color:rgb(189, 21, 21);
    }
</style>
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
                          
                            <table class=\"table\">
                                <tr>
                                   <td>
                                        <a class=\"ccolor\">ID</a>
                                    </td>
                                    <td>
                                        <a class=\"ccolor\">Category</a>
                                    </td>
                                    <td>
                                        <a class=\"ccolor\">Actions</a>
                                    </td>
                                  
                                </tr>   
                                ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["content"]) ? $context["content"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 43
            echo "                                <tr>    
                                    <td>
                                           ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "id"), "html", null, true);
            echo " 
                                     </td>
                                     <td>    
                                           ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "category"), "html", null, true);
            echo "
                                    </td>
                                     <td>
                                         <a href=\"#\">Update</a>
                                         <a href=\"#\">Delete</a>
                                    </td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                            </table>
                    
                    </div>            
                     
            
            </div>



            <div class=\"col-sm-12 col-md-3 col-lg-4\">
            </div>
        </div>
    </div>
</section>
                                    
";
        // line 71
        $this->env->loadTemplate("./common/footer.tpl")->display($context);
        // line 72
        echo "
";
    }

    public function getTemplateName()
    {
        return "pages/categoryList.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 72,  108 => 71,  91 => 56,  77 => 48,  71 => 45,  67 => 43,  63 => 42,  21 => 2,  19 => 1,);
    }
}
