<?php

/* error_default.twig */
class __TwigTemplate_5ddb57a9d3e5241481781670a1ce18e22a7ac3ab3af48a18d321b70c7836d686 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "error_default.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        if ((array_key_exists("error", $context) && (twig_length_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) > 0))) {
            // line 4
            echo "    <div class=\"alert alert-danger alert-dismissable\" role=\"alert\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span
                    aria-hidden=\"true\">x</span></button>
        <strong>Erro!</strong> ";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "error_default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  33 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'base.twig' %}*/
/* {% block content %}*/
/* {% if error is defined and error|length > 0 %}*/
/*     <div class="alert alert-danger alert-dismissable" role="alert">*/
/*         <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span*/
/*                     aria-hidden="true">x</span></button>*/
/*         <strong>Erro!</strong> {{ error }}*/
/*     </div>*/
/* {% endif %}*/
/* {% endblock %}*/
