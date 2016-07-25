<?php

/* 404.twig */
class __TwigTemplate_a5f9d1d9f2658a467981c1e103298e4f040843de82a0fb8fa5d093ab8022cb32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template.twig", "404.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Users List";
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
    <div class=\"error-page\">
        <h2 class=\"headline text-yellow\"> 404</h2>
        <div class=\"error-content\">
            <h3><i class=\"fa fa-warning text-yellow\"></i> Oops! Pagina nao Encontrada.</h3>
            <p class=\"text-center\">
               ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
        echo "
            </p>
            <form class=\"search-form\">
                <div class=\"input-group\">
                    <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Search\">
                    <div class=\"input-group-btn\">
                        <button type=\"submit\" name=\"submit\" class=\"btn btn-warning btn-flat\"><i
                                    class=\"fa fa-search\"></i></button>
                    </div>
                </div><!-- /.input-group -->
            </form>
        </div><!-- /.error-content -->
    </div><!-- /.error-page -->

";
    }

    public function getTemplateName()
    {
        return "404.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 12,  47 => 6,  44 => 5,  36 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'template.twig' %}*/
/*     {% block title %}Users List{% endblock %}*/
/*     {% block head %}{{ parent() }}*/
/*     {% endblock %}*/
/* {% block content %}*/
/* */
/*     <div class="error-page">*/
/*         <h2 class="headline text-yellow"> 404</h2>*/
/*         <div class="error-content">*/
/*             <h3><i class="fa fa-warning text-yellow"></i> Oops! Pagina nao Encontrada.</h3>*/
/*             <p class="text-center">*/
/*                {{ error }}*/
/*             </p>*/
/*             <form class="search-form">*/
/*                 <div class="input-group">*/
/*                     <input type="text" name="search" class="form-control" placeholder="Search">*/
/*                     <div class="input-group-btn">*/
/*                         <button type="submit" name="submit" class="btn btn-warning btn-flat"><i*/
/*                                     class="fa fa-search"></i></button>*/
/*                     </div>*/
/*                 </div><!-- /.input-group -->*/
/*             </form>*/
/*         </div><!-- /.error-content -->*/
/*     </div><!-- /.error-page -->*/
/* */
/* {% endblock %}*/
