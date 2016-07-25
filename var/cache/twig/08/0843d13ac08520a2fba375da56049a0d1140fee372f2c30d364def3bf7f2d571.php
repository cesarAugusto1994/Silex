<?php

/* forget_pass.twig */
class __TwigTemplate_0bba2a6bc8aa334903bd82da1e4f192710003fb0d5c53cfeb252d45d0d0244e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "forget_pass.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "Forgot Password";
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $this->displayParentBlock("head", $context, $blocks);
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
    <div class=\"register-box\">
        <div class=\"register-logo\">
            <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\"><b>C</b>esar</a>
        </div>

        <div class=\"register-box-body\">
            <p class=\"login-box-msg\">I Forgot My Password</p>
            <form method=\"post\" action=\"\">
                <div class=\"form-group has-feedback\">
                    <input type=\"email\" name=\"_username\" class=\"form-control\" placeholder=\"Email\" required>
                    <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-4\">
                        <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Send</button>
                    </div>
                </div>
            </form>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "url_generator", array()), "generate", array(0 => "login"), "method"), "html", null, true);
        echo "\">Go back</a>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "forget_pass.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 24,  50 => 8,  45 => 5,  42 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'base.twig' %}*/
/*     {% block title %}Forgot Password{% endblock %}*/
/*     {% block head %}{{ parent() }}{% endblock %}*/
/* {% block content %}*/
/* */
/*     <div class="register-box">*/
/*         <div class="register-logo">*/
/*             <a href="{{ path('index') }}"><b>C</b>esar</a>*/
/*         </div>*/
/* */
/*         <div class="register-box-body">*/
/*             <p class="login-box-msg">I Forgot My Password</p>*/
/*             <form method="post" action="">*/
/*                 <div class="form-group has-feedback">*/
/*                     <input type="email" name="_username" class="form-control" placeholder="Email" required>*/
/*                     <span class="glyphicon glyphicon-envelope form-control-feedback"></span>*/
/*                 </div>*/
/*                 <div class="row">*/
/*                     <div class="col-xs-4">*/
/*                         <button type="submit" class="btn btn-primary btn-block btn-flat">Send</button>*/
/*                     </div>*/
/*                 </div>*/
/*             </form>*/
/*             <a href="{{ app.url_generator.generate('login') }}">Go back</a>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
