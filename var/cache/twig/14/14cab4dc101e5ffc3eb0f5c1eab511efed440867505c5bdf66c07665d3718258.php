<?php

/* head.twig */
class __TwigTemplate_0e9d013c9dc742b3af3e9ddd2b123ffd59e1e5c8407c9e31a34517adcf56648e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<header class=\"main-header\">
    <!-- Logo -->
    <a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\" class=\"logo\">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class=\"logo-mini\"><b>S</b>lx</span>
        <!-- logo for regular state and mobile devices -->
        <span class=\"logo-lg\"><b>S</b>ilex</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
        <!-- Sidebar toggle button-->
        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
            <span class=\"sr-only\">Toggle navigation</span>
        </a>
        <div class=\"navbar-custom-menu\">
            <ul class=\"nav navbar-nav\">

                <!--

                 AQUI Social

                 -->
                <!-- User Account: style can be found in dropdown.less -->
                <li class=\"dropdown user user-menu\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <img src=\"
                        ";
        // line 27
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "user"), "method"), "user", array()), "avatar", array())) > 0)) {
            // line 28
            echo "                                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "user"), "method"), "user", array()), "avatar", array()), "html", null, true);
            echo "
                            ";
        } else {
            // line 30
            echo "                                ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "application.default.user.avatar", array(), "array"), "html", null, true);
            echo "
                            ";
        }
        // line 32
        echo "                        \" class=\"user-image\" alt=\"User Image\">
                        <span class=\"hidden-xs\">";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "user"), "method"), "user", array()), "username", array()), "html", null, true);
        echo "</span>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <!-- User image -->
                        <li class=\"user-header\">
                            <img src=\"
                            ";
        // line 39
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "user"), "method"), "user", array()), "avatar", array())) > 0)) {
            // line 40
            echo "                                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "user"), "method"), "user", array()), "avatar", array()), "html", null, true);
            echo "
                            ";
        } else {
            // line 42
            echo "                                ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "application.default.user.avatar", array(), "array"), "html", null, true);
            echo "
                            ";
        }
        // line 44
        echo "                            \" class=\"img-circle\" alt=\"User Image\">
                            <p>
                                ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "user"), "method"), "user", array()), "username", array()), "html", null, true);
        echo " - Web Developer
                                <small>Member since Nov. 2012</small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li class=\"user-body\">
                            <div class=\"col-xs-4 text-center\">
                                <a href=\"#\">Followers</a>
                            </div>
                            <div class=\"col-xs-4 text-center\">
                                <a href=\"#\">Sales</a>
                            </div>
                            <div class=\"col-xs-4 text-center\">
                                <a href=\"#\">Friends</a>
                            </div>
                        </li>
                        <!-- Menu Footer-->
                        <li class=\"user-footer\">
                            <div class=\"pull-left\">
                                <a href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profile", array("idUser" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "user"), "method"), "user", array()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default btn-flat\">Profile</a>
                            </div>
                            <div class=\"pull-right\">
                                <a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\" class=\"btn btn-default btn-flat\">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>


                <!-- Control Sidebar Toggle Button -->
                <li>
                    <a href=\"#\" data-toggle=\"control-sidebar\"><i class=\"fa fa-gears\"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>";
    }

    public function getTemplateName()
    {
        return "head.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 68,  116 => 65,  94 => 46,  90 => 44,  84 => 42,  78 => 40,  76 => 39,  67 => 33,  64 => 32,  58 => 30,  52 => 28,  50 => 27,  23 => 3,  19 => 1,);
    }
}
/* <header class="main-header">*/
/*     <!-- Logo -->*/
/*     <a href="{{ path('index') }}" class="logo">*/
/*         <!-- mini logo for sidebar mini 50x50 pixels -->*/
/*         <span class="logo-mini"><b>S</b>lx</span>*/
/*         <!-- logo for regular state and mobile devices -->*/
/*         <span class="logo-lg"><b>S</b>ilex</span>*/
/*     </a>*/
/*     <!-- Header Navbar: style can be found in header.less -->*/
/*     <nav class="navbar navbar-static-top" role="navigation">*/
/*         <!-- Sidebar toggle button-->*/
/*         <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">*/
/*             <span class="sr-only">Toggle navigation</span>*/
/*         </a>*/
/*         <div class="navbar-custom-menu">*/
/*             <ul class="nav navbar-nav">*/
/* */
/*                 <!--*/
/* */
/*                  AQUI Social*/
/* */
/*                  -->*/
/*                 <!-- User Account: style can be found in dropdown.less -->*/
/*                 <li class="dropdown user user-menu">*/
/*                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                         <img src="*/
/*                         {% if app.session.get('user').user.avatar|length > 0 %}*/
/*                                 {{ app.session.get('user').user.avatar }}*/
/*                             {% else %}*/
/*                                 {{ app['application.default.user.avatar'] }}*/
/*                             {% endif %}*/
/*                         " class="user-image" alt="User Image">*/
/*                         <span class="hidden-xs">{{ app.session.get('user').user.username }}</span>*/
/*                     </a>*/
/*                     <ul class="dropdown-menu">*/
/*                         <!-- User image -->*/
/*                         <li class="user-header">*/
/*                             <img src="*/
/*                             {% if app.session.get('user').user.avatar|length > 0 %}*/
/*                                 {{ app.session.get('user').user.avatar }}*/
/*                             {% else %}*/
/*                                 {{ app['application.default.user.avatar'] }}*/
/*                             {% endif %}*/
/*                             " class="img-circle" alt="User Image">*/
/*                             <p>*/
/*                                 {{ app.session.get('user').user.username }} - Web Developer*/
/*                                 <small>Member since Nov. 2012</small>*/
/*                             </p>*/
/*                         </li>*/
/*                         <!-- Menu Body -->*/
/*                         <li class="user-body">*/
/*                             <div class="col-xs-4 text-center">*/
/*                                 <a href="#">Followers</a>*/
/*                             </div>*/
/*                             <div class="col-xs-4 text-center">*/
/*                                 <a href="#">Sales</a>*/
/*                             </div>*/
/*                             <div class="col-xs-4 text-center">*/
/*                                 <a href="#">Friends</a>*/
/*                             </div>*/
/*                         </li>*/
/*                         <!-- Menu Footer-->*/
/*                         <li class="user-footer">*/
/*                             <div class="pull-left">*/
/*                                 <a href="{{ path('profile', { idUser : app.session.get('user').user.id }) }}" class="btn btn-default btn-flat">Profile</a>*/
/*                             </div>*/
/*                             <div class="pull-right">*/
/*                                 <a href="{{ path('logout') }}" class="btn btn-default btn-flat">Sign out</a>*/
/*                             </div>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </li>*/
/* */
/* */
/*                 <!-- Control Sidebar Toggle Button -->*/
/*                 <li>*/
/*                     <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>*/
/*                 </li>*/
/*             </ul>*/
/*         </div>*/
/*     </nav>*/
/* </header>*/
