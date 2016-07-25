<?php

/* login.twig */
class __TwigTemplate_599cf7a9dd7895eef87bd6d235338a961fe992bb7fc9bcbf10359bd289728509 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "login.twig", 1);
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
        echo "Login";
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
    <div class=\"login-box\">
        <div class=\"login-logo\">
            <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\"><b>S</b>ilex</a>
        </div>

        ";
        // line 11
        if (array_key_exists("sucesso", $context)) {
            // line 12
            echo "            <div class=\"alert alert-success\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span
                            aria-hidden=\"true\">×</span></button>
                <strong>Sucesso!</strong> ";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["sucesso"]) ? $context["sucesso"] : $this->getContext($context, "sucesso")), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 18
        echo "        ";
        if ((array_key_exists("error", $context) && (twig_length_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) > 0))) {
            // line 19
            echo "            <div class=\"alert alert-danger alert-dismissable\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span
                            aria-hidden=\"true\">x</span></button>
                <strong>Erro!</strong> ";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 25
        echo "
        <div class=\"login-box-body\">
            <p class=\"login-box-msg\">Sign in to start your session</p>
            <form method=\"post\" action=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\">
                <div class=\"form-group has-feedback\">
                    <input type=\"email\" name=\"_username\" class=\"form-control\" placeholder=\"Email\">
                    <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
                </div>
                <div class=\"form-group has-feedback\">
                    <input type=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Password\">
                    <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-4\">
                        <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Sign In</button>
                    </div>
                </div>
            </form>

            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "url_generator", array()), "generate", array(0 => "forget_pass"), "method"), "html", null, true);
        echo "\">I forgot my password</a><br>
            <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "url_generator", array()), "generate", array(0 => "register"), "method"), "html", null, true);
        echo "\" class=\"text-center\">Register a new membership</a>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 45,  107 => 44,  88 => 28,  83 => 25,  77 => 22,  72 => 19,  69 => 18,  63 => 15,  58 => 12,  56 => 11,  50 => 8,  45 => 5,  42 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'base.twig' %}*/
/*     {% block title %}Login{% endblock %}*/
/*     {% block head %}{{ parent() }}{% endblock %}*/
/* {% block content %}*/
/* */
/*     <div class="login-box">*/
/*         <div class="login-logo">*/
/*             <a href="{{ path('index') }}"><b>S</b>ilex</a>*/
/*         </div>*/
/* */
/*         {% if sucesso is defined %}*/
/*             <div class="alert alert-success" role="alert">*/
/*                 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span*/
/*                             aria-hidden="true">×</span></button>*/
/*                 <strong>Sucesso!</strong> {{ sucesso }}*/
/*             </div>*/
/*         {% endif %}*/
/*         {% if error is defined and error|length > 0 %}*/
/*             <div class="alert alert-danger alert-dismissable" role="alert">*/
/*                 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span*/
/*                             aria-hidden="true">x</span></button>*/
/*                 <strong>Erro!</strong> {{ error }}*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*         <div class="login-box-body">*/
/*             <p class="login-box-msg">Sign in to start your session</p>*/
/*             <form method="post" action="{{ path('login_check') }}">*/
/*                 <div class="form-group has-feedback">*/
/*                     <input type="email" name="_username" class="form-control" placeholder="Email">*/
/*                     <span class="glyphicon glyphicon-envelope form-control-feedback"></span>*/
/*                 </div>*/
/*                 <div class="form-group has-feedback">*/
/*                     <input type="password" name="_password" class="form-control" placeholder="Password">*/
/*                     <span class="glyphicon glyphicon-lock form-control-feedback"></span>*/
/*                 </div>*/
/*                 <div class="row">*/
/*                     <div class="col-xs-4">*/
/*                         <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>*/
/*                     </div>*/
/*                 </div>*/
/*             </form>*/
/* */
/*             <a href="{{ app.url_generator.generate('forget_pass') }}">I forgot my password</a><br>*/
/*             <a href="{{ app.url_generator.generate('register') }}" class="text-center">Register a new membership</a>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
