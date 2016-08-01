<?php

/* pages/signup.tpl */
class __TwigTemplate_02ce9d6e49282a54f0be5c5ed44424e7ad67d07f6b07dd05d1da18c632f264f7 extends Twig_Template
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
<section class=\"no-pad login-page fullscreen-element\">
\t\t\t
    <div class=\"background-image-holder\">
            <img src=\"/img/blur2.jpg\" class=\"background-image\" alt=\"Poster Image For Mobiles\">
    </div>
    <div class=\"container align-vertical\">
        <div class=\"alert alert-warning\" id=\"message-box\" style=\"display: none\" role=\"alert\">
            <p id=\"message-text\"></p>
        </div>
        ";
        // line 12
        echo (isset($context["messages"]) ? $context["messages"] : null);
        echo "
            <div class=\"row\">
                    <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center\">
                            <h1 class=\"text-white\">Sign-up now!</h1>
                            <div class=\"photo-form-wrapper clearfix\">
                                <form method=\"post\" action=\"/signup2\">
                                    <input class=\"form-email\" placeholder=\"Email Address\" id=\"email\" name=\"email\" type=\"text\" autocomplete=\"off\">
                                    <input class=\"form-password\" placeholder=\"Password\" id=\"password\" name=\"password\" type=\"password\" autocomplete=\"off\">
                                    <input class=\"form-password\" placeholder=\"Confirm Password\" id=\"re-password\" name=\"re-password\" type=\"password\" autocomplete=\"off\">
                                    <input class=\"login-btn btn-filled\" value=\"Sign-up\" id=\"subButtonSignUp\" type=\"submit\">
                                </form>
                            </div>
                        <a href=\"/login\" class=\"text-white\">Already have an account ➞</a><br>
                    </div>
            </div>
    </div>
</section>

";
        // line 30
        $this->env->loadTemplate("./common/footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "pages/signup.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 30,  33 => 12,  21 => 2,  19 => 1,);
    }
}
