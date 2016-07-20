<?php

/* /mail/footer.tpl */
class __TwigTemplate_baa4e497eee63efb5f1f6990fff2b52ba526483eb41a7cc874370f3327d28aa0 extends Twig_Template
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
        <tr>
          <td class=\"container-padding footer-text\" align=\"left\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:16px;color:#aaaaaa;padding-left:24px;padding-right:24px\">
            <br><br>
            Sample Footer text: © 2015 Acme, Inc.
            <br><br>

            You are receiving this email because you opted in on our website. Update your <a href=\"#\" style=\"color:#aaaaaa\">email preferences</a> or <a href=\"#\" style=\"color:#aaaaaa\">unsubscribe</a>.
            <br><br>

            <strong>COMPANY NAME</strong><br>
            <span class=\"ios-footer\">
                ADDRESS<br>
            </span>
            <a href=\"#\" style=\"color:#aaaaaa\">";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["mail_sender"]) ? $context["mail_sender"] : null), "html", null, true);
        echo "</a><br>

            <br><br>

          </td>
        </tr>
      </table>
<!--/600px container -->


    </td>
  </tr>
</table>
<!--/100% background wrapper-->

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/mail/footer.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 34,  55 => 28,  49 => 25,  35 => 15,  21 => 2,  19 => 1,);
    }
}
