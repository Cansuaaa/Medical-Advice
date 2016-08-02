<?php

/* ./common/footer.tpl */
class __TwigTemplate_a23fb666cb4056783560813466a8bdfc54e7e4ed41dd77c31826d1a3d93f4429 extends Twig_Template
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
        echo "</div>
\t\t
\t\t<div class=\"footer-container\">
\t\t
\t\t\t
\t\t
\t\t\t<footer class=\"details\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t<h1>Social Profiles</h1>
\t\t\t\t\t\t\t<ul class=\"social-icons\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon social_twitter\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon social_facebook\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon social_instagram\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon social_dribbble\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon social_tumblr\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon social_pinterest\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</footer>
\t\t</div>
\t\t\t\t
        <script src=\"/js/jquery.min.js\"></script>
        <script src=\"/js/jquery.plugin.min.js\"></script>
        <script src=\"/js/bootstrap.min.js\"></script>
        <script src=\"/js/jquery.flexslider-min.js\"></script>
        <script src=\"/js/smooth-scroll.min.js\"></script>
        <script src=\"/js/skrollr.min.js\"></script>
        <script src=\"/js/spectragram.min.js\"></script>
        <script src=\"/js/scrollReveal.min.js\"></script>
        <script src=\"/js/isotope.min.js\"></script>
        <script src=\"/js/twitterFetcher_v10_min.js\"></script>
        <script src=\"/js/lightbox.min.js\"></script>
        <script src=\"/js/jquery.countdown.min.js\"></script>
        <script src=\"/js/scripts.js\"></script>
        <script src=\"/js/bootstrap-editable.js\"></script>
        ";
        // line 79
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["javascript"]) ? $context["javascript"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["js"]) {
            // line 80
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["js"]) ? $context["js"] : null), "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "        
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "./common/footer.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 82,  103 => 80,  99 => 79,  19 => 1,);
    }
}
