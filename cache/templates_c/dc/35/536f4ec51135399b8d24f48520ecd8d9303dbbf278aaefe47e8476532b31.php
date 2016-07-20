<?php

/* pages/myAccount.tpl */
class __TwigTemplate_dc35536f4ec51135399b8d24f48520ecd8d9303dbbf278aaefe47e8476532b31 extends Twig_Template
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
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-sm-12 text-center\">
                <h1> My account </h1>
            </div> 



            <div class=\"col-sm-12 col-md-3 col-lg-4\">
                ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "username"), "html", null, true);
        echo "
            </div>



            <div class=\"col-sm-12 col-md-3 col-lg-4\">
                ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "username"), "html", null, true);
        echo "
            </div>



            <div class=\"col-sm-12 col-md-6 col-lg-4\">
                ghjghjgj
            </div>
        </div>
    </div>
</section>

";
        // line 32
        $this->env->loadTemplate("./common/footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "pages/myAccount.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 32,  44 => 20,  35 => 14,  21 => 2,  19 => 1,);
    }
}
