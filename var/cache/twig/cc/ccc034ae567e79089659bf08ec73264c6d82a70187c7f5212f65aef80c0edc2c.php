<?php

/* base.twig */
class __TwigTemplate_1761533158dceb113af63959e4bdf0fca4a6fcfc22868517570004846f00bf9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo " - My Webpage</title>
    ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 9
        echo "</head>
<body class=\"hold-transition login-page\">
    ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.0.0.min.js\"></script>
    <script type=\"text/javascript\" src=\"/assets/bootstrap/js/bootstrap.min.js\"></script>
    <script src=\"/assets/plugins/iCheck/icheck.min.js\"></script>
    <script>
        \$(function () {
            \$('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
</body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Cesar";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "        <link rel=\"stylesheet\" href=\"/assets/bootstrap/css/bootstrap.min.css\"/>
        ";
        // line 7
        $this->loadTemplate("css.twig", "base.twig", 7)->display($context);
        // line 8
        echo "    ";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function getDebugInfo()
    {
        return array (  74 => 11,  70 => 8,  68 => 7,  65 => 6,  62 => 5,  56 => 4,  39 => 12,  37 => 11,  33 => 9,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <title>{% block title %}Cesar{% endblock %} - My Webpage</title>*/
/*     {% block head %}*/
/*         <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css"/>*/
/*         {% include 'css.twig' %}*/
/*     {% endblock %}*/
/* </head>*/
/* <body class="hold-transition login-page">*/
/*     {% block content %}{% endblock %}*/
/*     <script type="text/javascript" src="https://code.jquery.com/jquery-3.0.0.min.js"></script>*/
/*     <script type="text/javascript" src="/assets/bootstrap/js/bootstrap.min.js"></script>*/
/*     <script src="/assets/plugins/iCheck/icheck.min.js"></script>*/
/*     <script>*/
/*         $(function () {*/
/*             $('input').iCheck({*/
/*                 checkboxClass: 'icheckbox_square-blue',*/
/*                 radioClass: 'iradio_square-blue',*/
/*                 increaseArea: '20%' // optional*/
/*             });*/
/*         });*/
/*     </script>*/
/* </body>*/
/* </html>*/
