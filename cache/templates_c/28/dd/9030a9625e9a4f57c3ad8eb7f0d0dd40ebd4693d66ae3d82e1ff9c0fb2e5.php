<?php

/* ./common/header.tpl */
class __TwigTemplate_28dd9030a9625e9a4f57c3ad8eb7f0d0dd40ebd4693d66ae3d82e1ff9c0fb2e5 extends Twig_Template
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
        echo "
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class=\"no-js\"> <!--<![endif]-->
    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <link href=\"/css/flexslider.min.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\"/>
        <link href=\"/css/line-icons.min.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\"/>
        <link href=\"/css/elegant-icons.min.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\"/>
        <link href=\"/css/lightbox.min.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\"/>
        <link href=\"/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\"/>
        <link href=\"/css/theme-cobalt.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\"/>
        <link href=\"/css/custom.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\"/>
        <link href=\"/css/bootstrap-editable.css\" rel=\"stylesheet\">
        <!--[if gte IE 9]>
        \t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/ie9.css\" />
\t\t<![endif]-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700%7CRaleway:700' rel='stylesheet' type='text/css'>
        <script src=\"/js/modernizr-2.6.2-respond-1.1.0.min.js\"></script>
        <script src=\"https://code.jquery.com/jquery-3.0.0.min.js\"></script>
    </head>
    <body>
    \t<div class=\"loader\" >
    \t\t<div class=\"spinner\">
\t\t\t  <div class=\"double-bounce1\"></div>
\t\t\t  <div class=\"double-bounce2\"></div>
\t\t\t</div>
    \t</div>
\t\t\t\t
\t\t<div class=\"nav-container\">
\t\t\t<nav class=\"simple-bar top-bar\">
\t\t\t\t<div class=\"container\">
\t\t\t\t
\t\t\t\t
\t\t\t\t\t<div class=\"row nav-menu\">
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-3 columns\">
\t\t\t\t\t\t\t<img src=\"/img/logo-light.png\" class=\"logo logo-light\" alt=\"Logo\">
\t\t\t\t\t\t\t<img src=\"/img/logo-dark.png\" class=\"logo logo-dark\" alt=\"Logo\">
\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-md-9 col-sm-9 columns text-right\">
\t\t\t\t\t\t\t<ul class=\"menu\">
\t\t\t\t\t\t\t\t<li><a href=\"/\">Home</a></li>
                                                                ";
        // line 51
        if (($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "islogged") == false)) {
            echo " 
\t\t\t\t\t\t\t\t<li><a href=\"/login\">Login</a></li>
                                                                <li><a href=\"/signup\">Sign Up</a></li>
                                                                 ";
        } else {
            // line 54
            echo " 
                                                                <li><a href=\"/logout\">Logout</a></li>
                                                                <li><a href=\"/myAccount\">My account</a></li>
                                                                <li><a href=\"/questionForm\">Questions</a></li>
                                                                 ";
        }
        // line 58
        echo " 
                                                                <!--START OF DROPDOWN LINKS
\t\t\t\t\t\t\t\t<li class=\"has-dropdown\"><a href=\"#\">Dropdown</a>
\t\t\t\t\t\t\t\t\t<ul class=\"subnav\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"has-dropdown\"><a href=\"#\">Half Width</a>
\t\t\t\t\t\t\t\t\t<div class=\"subnav subnav-halfwidth\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"alt-font\">Subnav Title</h6>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"subnav\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"alt-font\">Subnav Title</h6>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"subnav\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"has-dropdown\"><a href=\"#\">Fullwidth</a>
\t\t\t\t\t\t\t\t\t<div class=\"subnav subnav-fullwidth\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"alt-font\">Subnav Title</h6>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"subnav\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"alt-font\">Subnav Title</h6>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"subnav\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"alt-font\">Subnav Title</h6>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"subnav\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"alt-font\">Subnav Title</h6>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"subnav\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Example</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
                                                                END OF DROPDOWN LINKS--> 
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul>
\t\t
\t\t\t\t\t\t\t<ul class=\"social-icons text-right\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon social_twitter text-twitter\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon social_facebook text-facebook\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"mobile-toggle\">
\t\t\t\t\t\t<i class=\"icon icon_menu\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</nav>
\t\t
\t\t\t
\t\t
\t\t\t
\t\t
\t\t</div>
\t\t
\t\t<div class=\"main-container\">";
    }

    public function getTemplateName()
    {
        return "./common/header.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 58,  81 => 54,  74 => 51,  30 => 10,  19 => 1,);
    }
}
