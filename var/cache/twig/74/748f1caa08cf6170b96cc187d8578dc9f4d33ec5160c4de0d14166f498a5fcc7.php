<?php

/* email_confirmation.twig */
class __TwigTemplate_cc60863561c931f986930ec40bfa11d762f2a2fc08265af93f5df3375dd6fdf4 extends Twig_Template
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
        echo "<html>
<body style=\" width: 660px; margin-left: 25px; color: black; border-color: #E8E8E8;\">

<div style=\"position: relative; width: 100%; -moz-border-radius: 4px; border-radius: 1px; padding: 0.5em 1em; text-shadow: 0 1px 0 #fff;
     line-height: 1.5; margin: 10px auto;  border: solid; border-width: 2px; border-color: #E8E8E8;  background: white;\">
    <p style=\"font-size: 12px; margin-left: 10px;\">Ol&aacute;, <span
                style=\"font-size: 12px; color: firebrick; font-weight: bold;\">";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["body"]) ? $context["body"] : $this->getContext($context, "body")), "html", null, true);
        echo "</span>
    </p>
    <p style=\"font-size: 12px; margin-left: 10px;\">
        Voce esta cadastrado, so falta confirmar o email.
    </p>

    <div style=\"text-align: center\">
        <a href=\"http://localhost:8081/index.php/confirm_email/";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["uuid"]) ? $context["uuid"] : $this->getContext($context, "uuid")), "html", null, true);
        echo "\">
            <button style=\"height:28px; background: red;border: none;color: white;border-radius: 2px;cursor: pointer;\">
                Confirmar Cadastro
            </button></a>
    </div>

    <p style=\"font-size: 12px; margin-left: 10px;\">Ou confirme pelo link abaixo:</p>

    <p style=\"font-size: 12px; margin-left: 10px;\">
        <a style=\"color: red;\" target=\"_blank\" href=\"http://localhost:8081/index.php/confirm_email/";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["uuid"]) ? $context["uuid"] : $this->getContext($context, "uuid")), "html", null, true);
        echo "\">http://localhost:8081/index_dev.php/confirm_email/";
        echo twig_escape_filter($this->env, (isset($context["uuid"]) ? $context["uuid"] : $this->getContext($context, "uuid")), "html", null, true);
        echo "</a>
    </p>

</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "email_confirmation.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 23,  37 => 14,  27 => 7,  19 => 1,);
    }
}
/* <html>*/
/* <body style=" width: 660px; margin-left: 25px; color: black; border-color: #E8E8E8;">*/
/* */
/* <div style="position: relative; width: 100%; -moz-border-radius: 4px; border-radius: 1px; padding: 0.5em 1em; text-shadow: 0 1px 0 #fff;*/
/*      line-height: 1.5; margin: 10px auto;  border: solid; border-width: 2px; border-color: #E8E8E8;  background: white;">*/
/*     <p style="font-size: 12px; margin-left: 10px;">Ol&aacute;, <span*/
/*                 style="font-size: 12px; color: firebrick; font-weight: bold;">{{ body }}</span>*/
/*     </p>*/
/*     <p style="font-size: 12px; margin-left: 10px;">*/
/*         Voce esta cadastrado, so falta confirmar o email.*/
/*     </p>*/
/* */
/*     <div style="text-align: center">*/
/*         <a href="http://localhost:8081/index.php/confirm_email/{{ uuid }}">*/
/*             <button style="height:28px; background: red;border: none;color: white;border-radius: 2px;cursor: pointer;">*/
/*                 Confirmar Cadastro*/
/*             </button></a>*/
/*     </div>*/
/* */
/*     <p style="font-size: 12px; margin-left: 10px;">Ou confirme pelo link abaixo:</p>*/
/* */
/*     <p style="font-size: 12px; margin-left: 10px;">*/
/*         <a style="color: red;" target="_blank" href="http://localhost:8081/index.php/confirm_email/{{ uuid }}">http://localhost:8081/index_dev.php/confirm_email/{{ uuid }}</a>*/
/*     </p>*/
/* */
/* </div>*/
/* </body>*/
/* </html>*/
