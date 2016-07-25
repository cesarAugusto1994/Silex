<?php

/* base.twig */
class __TwigTemplate_14d5f2b17a2adfb623f7099c6239b68cdccefc88f1150da24e5318c802a3a174 extends Twig_Template
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
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    ";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 10
        echo "</head>
<body class=\"hold-transition login-page\">
    ";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        // line 13
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

    // line 6
    public function block_head($context, array $blocks = array())
    {
        // line 7
        echo "        <link rel=\"stylesheet\" href=\"/assets/bootstrap/css/bootstrap.min.css\"/>
        ";
        // line 8
        $this->loadTemplate("css.twig", "base.twig", 8)->display($context);
        // line 9
        echo "    ";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function getDebugInfo()
    {
        return array (  75 => 12,  71 => 9,  69 => 8,  66 => 7,  63 => 6,  57 => 4,  40 => 13,  38 => 12,  34 => 10,  32 => 6,  27 => 4,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <title>{% block title %}Cesar{% endblock %} - My Webpage</title>*/
/*     <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">*/
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
