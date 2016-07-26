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
                <h1 style=\"background-color: orangered;\" > Change password! </h1>
                
            </div> 

                

            <div class=\"col-sm-12 col-md-3 col-lg-4\">
                
            </div>
            
                
            <div class=\"col-sm-12 col-md-3 col-lg-4 text-center\">
                        
                <div class=\"alert alert-danger\" id=\"error\" style=\"display: none\" role=\"alert\"></div>
                
                    <div class=\"photo-form-wrapper text-center\">
                        <form id=\"myAccountForm\">   
                            Password: 
                                <input style=\"background-color:orange\" name=\"password\"   placeholder=\"Password\" type=\"password\" value=\"\">
                                 New password: 
                                <input style=\"background-color:orange\" name=\"newPassword\"   placeholder=\"New password\" type=\"password\" value=\"\">
                            Confirm Password: 
                                <input style=\"background-color:orange\" name=\"rePassword\" placeholder=\"Confirm your password\" type=\"password\" value=\"\">
                                        <input id=\"Edit\"  class=\"btn-filled\" text=\"centered\" style=\"background-color: orangered;\"  value=\"Save Changes\" type=\"submit\">
                                        
                        </form>
                           
                      
                
                    </div>



            <div class=\"col-sm-12 col-md-3 col-lg-4\">
                
            </div>
                
                
            </div>
        </div>
</section>

";
        // line 50
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
        return array (  71 => 50,  21 => 2,  19 => 1,);
    }
}
