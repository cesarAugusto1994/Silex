<?php

/* /admin/index.twig */
class __TwigTemplate_ddbcdd649e0855354fa9a7df2bdcef9ae44a5602aac327f700724a0edc11167b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template_tela.twig", "/admin/index.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'content_table' => array($this, 'block_content_table'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template_tela.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        if (array_key_exists("sucesso", $context)) {
            // line 4
            echo "        <div class=\"alert alert-success\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span
                        aria-hidden=\"true\">×</span></button>
            <strong>Sucesso!</strong> ";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["sucesso"]) ? $context["sucesso"] : $this->getContext($context, "sucesso")), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 10
        echo "    ";
        if ((array_key_exists("error", $context) && (twig_length_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) > 0))) {
            // line 11
            echo "        <div class=\"alert alert-danger alert-dismissable\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span
                        aria-hidden=\"true\">x</span></button>
            <strong>Erro!</strong> ";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 17
        echo "
    ";
        // line 18
        $this->displayBlock('content_table', $context, $blocks);
        // line 21
        echo "
";
    }

    // line 18
    public function block_content_table($context, array $blocks = array())
    {
        // line 19
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "/admin/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 19,  70 => 18,  65 => 21,  63 => 18,  60 => 17,  54 => 14,  49 => 11,  46 => 10,  40 => 7,  35 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'template_tela.twig' %}*/
/* {% block content %}*/
/*     {% if sucesso is defined %}*/
/*         <div class="alert alert-success" role="alert">*/
/*             <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span*/
/*                         aria-hidden="true">×</span></button>*/
/*             <strong>Sucesso!</strong> {{ sucesso }}*/
/*         </div>*/
/*     {% endif %}*/
/*     {% if error is defined and error|length > 0 %}*/
/*         <div class="alert alert-danger alert-dismissable" role="alert">*/
/*             <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span*/
/*                         aria-hidden="true">x</span></button>*/
/*             <strong>Erro!</strong> {{ error }}*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     {% block content_table %}*/
/* */
/*     {% endblock %}*/
/* */
/* {% endblock %}*/
