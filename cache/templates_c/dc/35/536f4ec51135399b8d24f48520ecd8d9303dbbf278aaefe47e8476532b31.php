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
    <div class=\"main-container\" style=\"background-color: #c0a16b\">
        <div class=\"row\">

            <div class=\"col-sm-12 text-center\">
                <h1>My account's details </h1>
                
            </div> 

                

            <div class=\"col-sm-12 col-md-3 col-lg-4\">
               
            </div>



            <div class=\"col-sm-12 col-md-3 col-lg-4 text-center\">
                <div class=\"alert alert-warning\" id=\"error\" style=\"display: none\" role=\"alert\"></div>
                <div class=\"photo-form-wrapper\">
                    <form id=\"myAccountForm\">
                        <input style=\"background-color:orange\" name=\"email\"  type=\"text\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userDetail"]) ? $context["userDetail"] : null), "email"), "html", null, true);
        echo "\" disabled><br>
                        <input style=\"background-color:orange\" name=\"password\"   placeholder=\"Password\" type=\"text\" value=\"\">
                        <input style=\"background-color:orange\" name=\"rePassword\" placeholder=\"Confirm your password\" type=\"text\" value=\"\">
                        <input style=\"background-color:orange\" name=\"firstName\"   placeholder=\"First name\" type=\"text\"  value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userDetail"]) ? $context["userDetail"] : null), "firstName"), "html", null, true);
        echo "\">
                        <input style=\"background-color:orange\" name=\"lastName\"    placeholder=\"Last name\" type=\"text\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userDetail"]) ? $context["userDetail"] : null), "lastName"), "html", null, true);
        echo "\">
                        <input  class=\"btn-filled\" style=\"background-color: orangered\"  value=\"Submit\" type=\"submit\">
                    </form>
                    
                </div>
                
                
            </div>



            <div class=\"col-sm-12 col-md-3 col-lg-4\">
            </div>
        </div>
    </div>
</section>

";
        // line 45
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
        return array (  75 => 45,  55 => 28,  51 => 27,  45 => 24,  21 => 2,  19 => 1,);
    }
}
