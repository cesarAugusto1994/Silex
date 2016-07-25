<?php

/* template.twig */
class __TwigTemplate_e91c9151af99e1a9044b0477d427c975d9c6819dc01cac620954f9ff1afbe0fa extends Twig_Template
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
        // line 9
        echo "</head>
<body>
<div id=\"wrapper\">
    ";
        // line 12
        $this->loadTemplate("head.twig", "template.twig", 12)->display($context);
        // line 13
        echo "    ";
        $this->loadTemplate("side-bar-menu.twig", "template.twig", 13)->display($context);
        // line 14
        echo "    <div class=\"content-wrapper\">
            ";
        // line 15
        $this->displayBlock('content', $context, $blocks);
        // line 16
        echo "    </div>
    ";
        // line 17
        $this->loadTemplate("footer.twig", "template.twig", 17)->display($context);
        // line 18
        echo "    ";
        $this->loadTemplate("configurations.twig", "template.twig", 18)->display($context);
        // line 19
        echo "</div>
";
        // line 20
        $this->loadTemplate("javascript.twig", "template.twig", 20)->display($context);
        // line 21
        echo "</body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Usuarios";
    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
        // line 7
        echo "        ";
        $this->loadTemplate("css.twig", "template.twig", 7)->display($context);
        // line 8
        echo "    ";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "template.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 15,  79 => 8,  76 => 7,  73 => 6,  67 => 4,  62 => 21,  60 => 20,  57 => 19,  54 => 18,  52 => 17,  49 => 16,  47 => 15,  44 => 14,  41 => 13,  39 => 12,  34 => 9,  32 => 6,  27 => 4,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <title>{% block title %}Usuarios{% endblock %} - My Webpage</title>*/
/*     <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">*/
/*     {% block head %}*/
/*         {% include 'css.twig' %}*/
/*     {% endblock %}*/
/* </head>*/
/* <body>*/
/* <div id="wrapper">*/
/*     {% include 'head.twig' %}*/
/*     {% include 'side-bar-menu.twig' %}*/
/*     <div class="content-wrapper">*/
/*             {% block content %}{% endblock %}*/
/*     </div>*/
/*     {% include 'footer.twig' %}*/
/*     {% include 'configurations.twig' %}*/
/* </div>*/
/* {% include 'javascript.twig' %}*/
/* </body>*/
/* </html>*/
