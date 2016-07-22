<?php

/* pages/editMyAccount.tpl */
class __TwigTemplate_daab2c219ccb01862b4bb5c69606d04210e9011c9b11e85db46a2b0101ada6c5 extends Twig_Template
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
                    <div class=\"photo-form-wrapper text-center\">
                        <form id=\"myAccountForm\">   
                            <table class=\"table\">
                                    <tr>
                                             Email: 
                                        <input style=\"background-color:orange\" name=\"email\"  type=\"text\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userDetail"]) ? $context["userDetail"] : null), "email"), "html", null, true);
        echo "\" disabled><br></td>
                                    </tr>    
                                            Password: 
                                        <input style=\"background-color:orange\" name=\"password\"   placeholder=\"Password\" type=\"text\" value=\"\">
                                    </tr> 

                                     <tr>
                                            Confirm Password: 
                                            <input style=\"background-color:orange\" name=\"rePassword\" placeholder=\"Confirm your password\" type=\"text\" value=\"\">
                                    </tr> 
                                    
                                     <tr>
                                            First Name: 
                                             <input style=\"background-color:orange\" name=\"firstName\"   placeholder=\"First name\" type=\"text\"  value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userDetail"]) ? $context["userDetail"] : null), "firstName"), "html", null, true);
        echo "\">
                                     <tr> 
                                            Last Name:
                                             <input style=\"background-color:orange\" name=\"lastName\"    placeholder=\"Last name\" type=\"text\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userDetail"]) ? $context["userDetail"] : null), "lastName"), "html", null, true);
        echo "\">
                                    </tr> 
                            </table>
                                        <input id=\"Edit\"  class=\"btn-filled\" text=\"centered\" style=\"background-color: orangered\"  value=\"Submit\" type=\"submit\">
                        </form>
                           
                    </div>     
                
            </div>



            <div class=\"col-sm-12 col-md-3 col-lg-4\">
            </div>
        </div>
    </div>
</section>

";
        // line 59
        $this->env->loadTemplate("./common/footer.tpl")->display($context);
    }

    public function getTemplateName()
    {
        return "pages/editMyAccount.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 59,  68 => 41,  62 => 38,  46 => 25,  21 => 2,  19 => 1,);
    }
}
