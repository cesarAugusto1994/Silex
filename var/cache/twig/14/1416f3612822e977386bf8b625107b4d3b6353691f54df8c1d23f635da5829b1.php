<?php

/* register.twig */
class __TwigTemplate_2ef3ae2603c4e4db4cf31c9f6d5b4cbbb575047e0864f943d509d99a5a0d65d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "register.twig", 1);
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
        echo "Register";
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

        ";
        // line 11
        if (array_key_exists("error", $context)) {
            // line 12
            echo "            <div class=\"alert alert-warning alert-dismissable fade in\" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span
                            aria-hidden=\"true\">x</span></button>
                <strong>Opss...</strong> ";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 18
        echo "
        <div class=\"register-box-body\">
            <p class=\"login-box-msg\">Register a new membership</p>
            <form action=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("register");
        echo "\" method=\"post\">
                ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                <div class=\"form-group has-feedback\">
                    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
                    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
        echo "
                    <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                </div>
                <div class=\"form-group has-feedback\">
                    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
                    ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                    <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
                </div>
                <div class=\"form-group has-feedback\">
                    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget');
        echo "
                    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'errors');
        echo "
                    <span class=\"glyphicon glyphicon-log-in form-control-feedback\"></span>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-8\">
                        <div class=\"checkbox icheck\">
                            <label>
                                <input type=\"checkbox\"> I agree to the <a href=\"#\">terms</a>
                            </label>
                        </div>
                    </div><!-- /.col -->
                    <div class=\"col-xs-4\">
                        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "
                        ";
        // line 49
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                    </div><!-- /.col -->
                </div>
                <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "url_generator", array()), "generate", array(0 => "login"), "method"), "html", null, true);
        echo "\" class=\"text-left\">Go back</a>
            </form>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 52,  132 => 49,  128 => 48,  113 => 36,  109 => 35,  102 => 31,  98 => 30,  91 => 26,  87 => 25,  82 => 23,  78 => 22,  74 => 21,  69 => 18,  63 => 15,  58 => 12,  56 => 11,  50 => 8,  45 => 5,  42 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'base.twig' %}*/
/*     {% block title %}Register{% endblock %}*/
/*     {% block head %}{{ parent() }}{% endblock %}*/
/* {% block content %}*/
/* */
/*     <div class="register-box">*/
/*         <div class="register-logo">*/
/*             <a href="{{ path('index') }}"><b>C</b>esar</a>*/
/*         </div>*/
/* */
/*         {% if error is defined %}*/
/*             <div class="alert alert-warning alert-dismissable fade in" role="alert">*/
/*                 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span*/
/*                             aria-hidden="true">x</span></button>*/
/*                 <strong>Opss...</strong> {{ error }}*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*         <div class="register-box-body">*/
/*             <p class="login-box-msg">Register a new membership</p>*/
/*             <form action="{{ path('register') }}" method="post">*/
/*                 {{ form_start(form) }}*/
/*                 {{ form_errors(form) }}*/
/*                 <div class="form-group has-feedback">*/
/*                     {{ form_widget(form.name) }}*/
/*                     {{ form_errors(form.name) }}*/
/*                     <span class="glyphicon glyphicon-user form-control-feedback"></span>*/
/*                 </div>*/
/*                 <div class="form-group has-feedback">*/
/*                     {{ form_widget(form.email) }}*/
/*                     {{ form_errors(form.email) }}*/
/*                     <span class="glyphicon glyphicon-envelope form-control-feedback"></span>*/
/*                 </div>*/
/*                 <div class="form-group has-feedback">*/
/*                     {{ form_widget(form.password) }}*/
/*                     {{ form_errors(form.password) }}*/
/*                     <span class="glyphicon glyphicon-log-in form-control-feedback"></span>*/
/*                 </div>*/
/*                 <div class="row">*/
/*                     <div class="col-xs-8">*/
/*                         <div class="checkbox icheck">*/
/*                             <label>*/
/*                                 <input type="checkbox"> I agree to the <a href="#">terms</a>*/
/*                             </label>*/
/*                         </div>*/
/*                     </div><!-- /.col -->*/
/*                     <div class="col-xs-4">*/
/*                         {{ form_widget(form.save) }}*/
/*                         {{ form_end(form) }}*/
/*                     </div><!-- /.col -->*/
/*                 </div>*/
/*                 <a href="{{ app.url_generator.generate('login') }}" class="text-left">Go back</a>*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
