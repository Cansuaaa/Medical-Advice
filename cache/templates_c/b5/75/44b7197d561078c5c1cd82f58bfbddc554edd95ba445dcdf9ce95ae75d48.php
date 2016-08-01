<?php

/* pages/questionList.tpl */
class __TwigTemplate_b57544b7197d561078c5c1cd82f58bfbddc554edd95ba445dcdf9ce95ae75d48 extends Twig_Template
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
                                        <a class=\"ccolor\">Title</a>
                                    </td>
                                    <td>
                                        <a class=\"ccolor\">Author</a>
                                    </td>
                                    <td>
                                        <a class=\"ccolor\">Date</a>
                                    </td>
                                    <td>
                                        <a class=\"ccolor\">Content</a>
                                    </td>
                                    <td>
                                        <a class=\"ccolor\">Category</a>
                                    </td>
                                    <td>
                                        <a class=\"ccolor\">Main picture</a>
                                    </td>
                                </tr>   
                                ";
        // line 53
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["content"]) ? $context["content"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 54
            echo "                                <tr>    
                                    <td>
                                           ";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "id"), "html", null, true);
            echo " 
                                     </td>      
                                     <td>
                                           ";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "title"), "html", null, true);
            echo "
                                    </td>
                                     <td>
                                           ";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "author_id"), "html", null, true);
            echo "
                                    </td>
                                     <td>
                                           ";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "date"), "html", null, true);
            echo " 
                                    </td>
                                     <td>
                                           ";
            // line 68
            echo $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "content");
            echo " 
                                    </td>
                                     <td>
                                           ";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "category_id"), "html", null, true);
            echo " 
                                    </td>
                                     <td>
                                           ";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "main_picture"), "html", null, true);
            echo " 
                                    </td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                            </table>
                    
                    </div>            
                     
            
            </div>



            <div class=\"col-sm-12 col-md-3 col-lg-4\">
            </div>
        </div>
    </div>
</section>
                                    
";
        // line 93
        $this->env->loadTemplate("./common/footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "pages/questionList.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 93,  128 => 78,  118 => 74,  112 => 71,  106 => 68,  100 => 65,  94 => 62,  88 => 59,  82 => 56,  78 => 54,  74 => 53,  21 => 2,  19 => 1,);
    }
}
