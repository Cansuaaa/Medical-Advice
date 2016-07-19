<?php

/* pages/homepage.tpl */
class __TwigTemplate_c2dc32e7190711218ca0b2dd63882270d1daa9ac0ab972bf04229dff7ab7710a extends Twig_Template
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
<header class=\"fullscreen-element no-pad centered-text\">
\t\t\t\t<div class=\"background-image-holder parallax-background overlay\">
\t\t\t\t\t<img src=\"img/hero8.jpg\" class=\"background-image\" alt=\"Background Image\">
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"container align-vertical\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12 text-center\">
\t\t\t\t\t\t\t<span class=\"text-white alt-font\">Say Hello To Pivot</span>
\t\t\t\t\t\t\t<h1 class=\"text-white\">The biggest, baddest new template on the block <br>has arrived, build yours now.</h1>
\t\t\t\t\t\t\t<p class=\"lead text-white\">Tons of elements, Consistent style, Variant builder included.</p>
\t\t\t\t\t\t\t<a target=\"_blank\" href=\"http://www.mediumra.re/pivot/variant/builder.html\" class=\"btn btn-primary btn-white\">Customize Pivot</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary btn-filled\">Purchase Pivot</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</header>

<section class=\"hero-slider\">
\t\t\t\t<ul class=\"slides\">
\t\t\t\t\t<li class=\"overlay\">
\t\t\t\t\t\t<div class=\"background-image-holder parallax-background\">
\t\t\t\t\t\t\t<img src=\"img/hero4.jpg\" class=\"background-image\" alt=\"Background Image\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"video-wrapper\">
\t\t\t\t\t\t\t<video autoplay=\"\" muted=\"\" loop=\"\">
\t\t\t\t\t\t\t\t<source src=\"video/video.webm\" type=\"video/webm\">
\t\t\t\t\t\t\t\t<source src=\"video/video.mp4\" type=\"video/mp4\">
\t\t\t\t\t\t\t\t<source src=\"video/video.ogv\" type=\"video/ogg\">\t
\t\t\t\t\t\t\t</video>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"container align-vertical\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-9\">
\t\t\t\t\t\t\t\t\t<h1 class=\"text-white\">Get ready for the launch of our amazing new template Pivot, You will be awed.</h1>
\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"http://www.mediumra.re/pivot/variant/builder.html\" class=\"btn btn-primary btn-white\">Customize Pivot</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary btn-filled\">Purchase Pivot</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t\t<li class=\"overlay\">
\t\t\t\t\t\t<div class=\"background-image-holder parallax-background\">
\t\t\t\t\t\t\t<img src=\"img/hero1.jpg\" class=\"background-image\" alt=\"Background Image\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"container align-vertical\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-sm-9\">
\t\t\t\t\t\t\t\t\t<h1 class=\"text-white\">Get ready for the launch of our amazing new template Pivot, You will be awed.</h1>
\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"http://www.mediumra.re/pivot/variant/builder.html\" class=\"btn btn-primary btn-white\">Customize Pivot</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary btn-filled\">Purchase Pivot</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t
\t\t\t\t</ul>
\t\t\t</section>



";
        // line 68
        $this->env->loadTemplate("./common/footer.tpl")->display($context);
        // line 69
        echo "
";
    }

    public function getTemplateName()
    {
        return "pages/homepage.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 69,  89 => 68,  21 => 2,  19 => 1,);
    }
}
