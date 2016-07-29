<?php

/* pages/home.tpl */
class __TwigTemplate_2be3429d67837cc3ea62cb1bb39bf23deb86ad519a2724f0be671df506c85ab5 extends Twig_Template
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
<section class=\"skill-bars\">
\t\t
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center\">
\t\t\t\t\t\t\t<h1>Skills &amp; Expertise</h1>
\t\t\t\t\t\t\t<p class=\"lead\">
\t\t\t\t\t\t\t\tSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae. 
\t\t\t\t\t\t\t</p>\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6 col-sm-12\">
\t\t\t\t\t\t\t<div class=\"skills-left skills\">
\t\t\t\t\t\t\t\t<h3>Design</h3>
\t\t\t\t\t\t\t\t<ul class=\"skills-ul\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<span>Responsive Web Design</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"skill-bar-holder\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"skill-capacity col-xs-11\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<span>Branding &amp; Identity</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"skill-bar-holder\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"skill-capacity col-xs-9\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<span>Photoshop &amp; Illustrator</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"skill-bar-holder\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"skill-capacity col-xs-7\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<span>Macaw</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"skill-bar-holder\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"skill-capacity col-xs-6\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-md-6 col-sm-12\">
\t\t\t\t\t\t\t<div class=\"skills-right skills\">
\t\t\t\t\t\t\t\t<h3>Develop</h3>
\t\t\t\t\t\t\t\t<ul class=\"skills-ul\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<span>HTML &amp; CSS3</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"skill-bar-holder\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"skill-capacity col-xs-11\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<span>Javascript / Jquery</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"skill-bar-holder\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"skill-capacity col-xs-9\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<span>PHP &amp; MySQL</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"skill-bar-holder\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"skill-capacity col-xs-7\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<span>WordPress</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"skill-bar-holder\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"skill-capacity col-xs-";
        // line 79
        echo twig_escape_filter($this->env, ((isset($context["wordpress"]) ? $context["wordpress"] : null) - (isset($context["skill"]) ? $context["skill"] : null)), "html", null, true);
        echo "\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t
\t\t\t\t</div>
\t\t\t</section>

<section class=\"duplicatable-content\">
\t\t\t
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12 text-center\">
\t\t\t\t\t\t\t<h1>Showcase services in a<br>spacious &amp; clean manner</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"feature feature-icon-large\">
\t\t\t\t\t\t\t\t<i class=\"icon icon-notebook\"></i>
\t\t\t\t\t\t\t\t<h5>Consistent Typography</h5>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tNam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"feature feature-icon-large\">
\t\t\t\t\t\t\t\t<i class=\"icon icon-strategy\"></i>
\t\t\t\t\t\t\t\t<h5>Varied Element Set</h5>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tNam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"feature feature-icon-large\">
\t\t\t\t\t\t\t\t<i class=\"icon icon-tools\"></i>
\t\t\t\t\t\t\t\t<h5>Variant Builder</h5>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tNam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"feature feature-icon-large\">
\t\t\t\t\t\t\t\t<i class=\"icon icon-documents\"></i>
\t\t\t\t\t\t\t\t<h5>Clear Documentation</h5>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tNam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t
\t\t\t</section>

";
        // line 145
        $this->env->loadTemplate("./common/footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "pages/home.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 145,  100 => 79,  21 => 2,  19 => 1,);
    }
}
