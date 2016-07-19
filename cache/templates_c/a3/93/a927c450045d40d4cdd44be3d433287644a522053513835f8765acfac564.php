<?php

/* pages/signupError.tpl */
class __TwigTemplate_a393a927c450045d40d4cdd44be3d433287644a522053513835f8765acfac564 extends Twig_Template
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
    <div class=\"col-sm-12 text-center\">
        ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
        echo "
    </div>
</section>
    
";
        // line 9
        $this->env->loadTemplate("./common/footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "pages/signupError.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 9,  26 => 5,  21 => 2,  19 => 1,);
    }
}
