<?php

/* /mail/signup.tpl */
class __TwigTemplate_743e859d6dc8588d89330181d341ea02f6c483617f00abc8df814eb81252f467 extends Twig_Template
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
        $this->env->loadTemplate("/mail/header.tpl")->display($context);
        // line 2
        echo "
<!-- 100% background wrapper (grey background) -->
<table border=\"0\" width=\"100%\" height=\"100%\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#F0F0F0\">
    <tr>
      <td align=\"center\" valign=\"top\" bgcolor=\"#F0F0F0\" style=\"background-color: #F0F0F0;\">

        <br>

        <!-- 600px container (white background) -->
        <table border=\"0\" width=\"600\" cellpadding=\"0\" cellspacing=\"0\" class=\"container\" style=\"width:600px;max-width:600px\">
          <tr>
            <td class=\"container-padding header\" align=\"left\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:24px;font-weight:bold;padding-bottom:12px;color:green;padding-left:24px;padding-right:24px\">
              ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["mail_title"]) ? $context["mail_title"] : null), "html", null, true);
        echo "
            </td>
          </tr>
          <tr>
            <td class=\"container-padding content\" align=\"left\" style=\"padding-left:24px;padding-right:24px;padding-top:12px;padding-bottom:12px;background-color:#ffffff\">
              <br>

                <div class=\"title\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:18px;font-weight:600;color:#374550\">Registration Successful! :)</div>
                <br>

                <div class=\"body-text\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:14px;line-height:20px;text-align:left;color:#333333\">
                    ";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["mail_content"]) ? $context["mail_content"] : null), "html", null, true);
        echo "
                    <br>
                    
                    <a href=http://localhost/activation/";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["activation_code"]) ? $context["activation_code"] : null), "html", null, true);
        echo ">Click Here</a> to activate
                    
                    <p> localhost/activation/";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["activation_code"]) ? $context["activation_code"] : null), "html", null, true);
        echo " </p>
                </div>
  
          </td>
        </tr>

";
        // line 36
        $this->env->loadTemplate("/mail/footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "/mail/signup.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 36,  60 => 30,  55 => 28,  49 => 25,  35 => 14,  21 => 2,  19 => 1,);
    }
}
