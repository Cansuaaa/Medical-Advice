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
                                     <td>
                                           ";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "title"), "html", null, true);
            echo "
                                    </td>
                                     <td>
                                           ";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "author_id"), "html", null, true);
            echo "
                                    </td>
                                     <td>
                                           ";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "date"), "html", null, true);
            echo " 
                                    </td>
                                     <td>
                                           ";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "content"), "html", null, true);
            echo " 
                                    </td>
                                     <td>
                                           ";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "category_id"), "html", null, true);
            echo " 
                                    </td>
                                     <td>
                                           ";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "main_picture"), "html", null, true);
            echo " 
                                    </td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                            </table>
                    
                    </div>            
                     
            
            </div>



            <div class=\"col-sm-12 col-md-3 col-lg-4\">
            </div>
        </div>
    </div>
</section>
                                    
";
        // line 92
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
        return array (  144 => 92,  127 => 77,  117 => 73,  111 => 70,  105 => 67,  99 => 64,  93 => 61,  87 => 58,  82 => 56,  78 => 54,  74 => 53,  21 => 2,  19 => 1,);
    }
}
