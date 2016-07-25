<?php

/* lockscreen.twig */
class __TwigTemplate_26c4aca46d9beec11ce68df7402f5a7b4219d0149781da84a053154590aa8419 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "lockscreen.twig", 1);
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
        echo "LockScreen";
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <style type=\"text/css\">
        .lockscreen-name{
            text-align: center;
        }
    </style>
    ";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "    <div class=\"lockscreen-wrapper\">
        <div class=\"lockscreen-logo\">
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\"><b>S</b>ilex</a>
        </div>
        <!-- User name -->
        <div class=\"lockscreen-name\">";
        // line 16
        echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "user"), "method"), "user", array()), "username", array()), 0, 22), "html", null, true);
        echo "</div>

        <!-- START LOCK SCREEN ITEM -->
        <div class=\"lockscreen-item\">
            <!-- lockscreen image -->
            <div class=\"lockscreen-image\">
                <img src=\"
                ";
        // line 23
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "user"), "method"), "user", array()), "avatar", array())) > 0)) {
            // line 24
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "user"), "method"), "user", array()), "avatar", array()), "html", null, true);
            echo "
                ";
        } else {
            // line 26
            echo "                /assets/custom/img/avatar.png
                ";
        }
        // line 28
        echo "                \" alt=\"User Image\">
            </div>
            <!-- /.lockscreen-image -->

            <!-- lockscreen credentials (contains the form) -->
            <form class=\"lockscreen-credentials\" action=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\">
                <div class=\"input-group\">
                    <input type=\"password\" class=\"form-control\" placeholder=\"password\">
                    <div class=\"input-group-btn\">
                        <button class=\"btn\"><i class=\"fa fa-arrow-right text-muted\"></i></button>
                    </div>
                </div>
            </form><!-- /.lockscreen credentials -->

        </div><!-- /.lockscreen-item -->
        <div class=\"help-block text-center\">
            Enter your password to retrieve your session
        </div>
        <div class=\"text-center\">
            <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Or sign in as a different user</a>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "lockscreen.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 47,  91 => 33,  84 => 28,  80 => 26,  74 => 24,  72 => 23,  62 => 16,  56 => 13,  52 => 11,  49 => 10,  36 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'base.twig' %}*/
/*     {% block title %}LockScreen{% endblock %}*/
/*     {% block head %}{{ parent() }}*/
/*     <style type="text/css">*/
/*         .lockscreen-name{*/
/*             text-align: center;*/
/*         }*/
/*     </style>*/
/*     {% endblock %}*/
/* {% block content %}*/
/*     <div class="lockscreen-wrapper">*/
/*         <div class="lockscreen-logo">*/
/*             <a href="{{ path('index') }}"><b>S</b>ilex</a>*/
/*         </div>*/
/*         <!-- User name -->*/
/*         <div class="lockscreen-name">{{ app.session.get('user').user.username|slice(0, 22) }}</div>*/
/* */
/*         <!-- START LOCK SCREEN ITEM -->*/
/*         <div class="lockscreen-item">*/
/*             <!-- lockscreen image -->*/
/*             <div class="lockscreen-image">*/
/*                 <img src="*/
/*                 {% if app.session.get('user').user.avatar|length > 0 %}*/
/*                 {{ app.session.get('user').user.avatar }}*/
/*                 {% else %}*/
/*                 /assets/custom/img/avatar.png*/
/*                 {% endif %}*/
/*                 " alt="User Image">*/
/*             </div>*/
/*             <!-- /.lockscreen-image -->*/
/* */
/*             <!-- lockscreen credentials (contains the form) -->*/
/*             <form class="lockscreen-credentials" action="{{ path('index') }}">*/
/*                 <div class="input-group">*/
/*                     <input type="password" class="form-control" placeholder="password">*/
/*                     <div class="input-group-btn">*/
/*                         <button class="btn"><i class="fa fa-arrow-right text-muted"></i></button>*/
/*                     </div>*/
/*                 </div>*/
/*             </form><!-- /.lockscreen credentials -->*/
/* */
/*         </div><!-- /.lockscreen-item -->*/
/*         <div class="help-block text-center">*/
/*             Enter your password to retrieve your session*/
/*         </div>*/
/*         <div class="text-center">*/
/*             <a href="{{ path('logout') }}">Or sign in as a different user</a>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
