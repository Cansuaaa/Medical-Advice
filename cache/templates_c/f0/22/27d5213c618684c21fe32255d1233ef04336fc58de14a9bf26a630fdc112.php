<?php

/* pages/login.tpl */
class __TwigTemplate_f02227d5213c618684c21fe32255d1233ef04336fc58de14a9bf26a630fdc112 extends Twig_Template
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
                <div class=\"row\">
                        <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center\">
                               <div class=\"alert alert-warning\" id=\"error\" style=\"display: none\" role=\"alert\"></div>
                                <h1 class=\"text-white\">Login to continue</h1>
                                <div class=\"photo-form-wrapper clearfix\">
                                         <form id=\"loginForm\" method=\"post\" action=\"/ajax/login\">
                                                <input class=\"form-email\" placeholder=\"Email Address\" id=\"email\" name=\"email\" type=\"text\">
                                                <input class=\"form-password\" placeholder=\"Password\" id=\"password\" name=\"password\" type=\"password\">
                                                <input class=\"login-btn btn-filled\" value=\"Login\" id=\"subButtonLogIn\" type=\"submit\">
                                        </form>
                                </div>
                                <a href=\"/signup\" class=\"text-white\">Create an account ➞</a><br>
                                <a href=\"#\" class=\"text-white\">I've forgotten my password</a>
                        </div>
                </div>
        </div>
</section>
                        

";
        // line 29
        $this->env->loadTemplate("./common/footer.tpl")->display($context);
        echo "\t
";
    }

    public function getTemplateName()
    {
        return "pages/login.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 29,  21 => 2,  19 => 1,);
    }
}
