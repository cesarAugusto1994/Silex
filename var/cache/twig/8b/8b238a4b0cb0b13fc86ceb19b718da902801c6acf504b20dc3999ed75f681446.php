<?php

/* side-bar-menu.twig */
class __TwigTemplate_4c11cae3aa51354470cd49fc775659fd33bf01e10c653c480d53fcc16b5fb872 extends Twig_Template
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
        echo "<aside class=\"main-sidebar\">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class=\"sidebar\">
        <!-- Sidebar user panel -->
        <div class=\"user-panel\">
            <div class=\"pull-left image\">
                <img src=\"
                ";
        // line 8
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "user"), "method"), "user", array()), "avatar", array())) > 0)) {
            // line 9
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "user"), "method"), "user", array()), "avatar", array()), "html", null, true);
            echo "
                ";
        } else {
            // line 11
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "application.default.user.avatar", array(), "array"), "html", null, true);
            echo "
                ";
        }
        // line 13
        echo "                \" class=\"img-circle\" alt=\"User Image\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "user"), "method"), "user", array()), "username", array()), "html", null, true);
        echo "\">
            </div>
            <div class=\"pull-left info\">
                <p><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profile", array("idUser" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "user"), "method"), "user", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "user"), "method"), "user", array()), "username", array()), "html", null, true);
        echo "</a></p>
                <a href=\"#\"><i class=\"fa fa-circle
                 ";
        // line 18
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "user"), "method"), "user", array()), "active", array())) {
            // line 19
            echo "                    text-success
                 ";
        } else {
            // line 21
            echo "                    text-danger
                 ";
        }
        // line 23
        echo "                 \"></i>
                    ";
        // line 24
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "user"), "method"), "user", array()), "active", array())) {
            // line 25
            echo "                        Online
                    ";
        } else {
            // line 27
            echo "                        Offline
                    ";
        }
        // line 29
        echo "                    </a>
            </div>
        </div>
        <!-- search form -->
        <form action=\"#\" method=\"get\" class=\"sidebar-form\">
            <div class=\"input-group\">
                <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\">
              <span class=\"input-group-btn\">
                <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class=\"sidebar-menu\">
            <li class=\"header\">MAIN NAVIGATION</li>

            <li class=\"treeview\">
                <a href=\"#\">
                    <i class=\"fa fa-files-o\"></i>
                    <span>Usuarios</span>
                    <i class=\"fa fa-angle-left pull-right\"></i>
                </a>
                <ul class=\"treeview-menu\">
                    <li><a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("users_list");
        echo "\"><i class=\"fa fa-circle-o\"></i> Listar</a></li>
                </ul>
            </li>

            <li class=\"treeview\">
                <a href=\"#\">
                    <i class=\"fa fa-files-o\"></i>
                    <span>Sessao</span>
                    <i class=\"fa fa-angle-left pull-right\"></i>
                </a>
                <ul class=\"treeview-menu\">
                    <li><a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\"><i class=\"fa fa-circle-o\"></i> Sair</a></li>
                    <li><a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("lockscreen");
        echo "\"><i class=\"fa fa-circle-o\"></i> Lockscreen</a></li>
                </ul>
            </li>

            <li class=\"treeview\">
                <a href=\"#\">
                    <i class=\"fa fa-files-o\"></i>
                    <span>Cadastros</span>
                    <i class=\"fa fa-angle-left pull-right\"></i>
                </a>
                <ul class=\"treeview-menu\">
                    <li><a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("cargos");
        echo "\"><i class=\"fa fa-circle-o\"></i> Cargos</a></li>
                </ul>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>";
    }

    public function getTemplateName()
    {
        return "side-bar-menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 76,  123 => 65,  119 => 64,  105 => 53,  79 => 29,  75 => 27,  71 => 25,  69 => 24,  66 => 23,  62 => 21,  58 => 19,  56 => 18,  49 => 16,  42 => 13,  36 => 11,  30 => 9,  28 => 8,  19 => 1,);
    }
}
/* <aside class="main-sidebar">*/
/*     <!-- sidebar: style can be found in sidebar.less -->*/
/*     <section class="sidebar">*/
/*         <!-- Sidebar user panel -->*/
/*         <div class="user-panel">*/
/*             <div class="pull-left image">*/
/*                 <img src="*/
/*                 {% if app.session.get('user').user.avatar|length > 0 %}*/
/*                     {{ app.session.get('user').user.avatar }}*/
/*                 {% else %}*/
/*                     {{ app['application.default.user.avatar'] }}*/
/*                 {% endif %}*/
/*                 " class="img-circle" alt="User Image" title="{{ app.session.get('user').user.username }}">*/
/*             </div>*/
/*             <div class="pull-left info">*/
/*                 <p><a href="{{ path('profile', { idUser : app.session.get('user').user.id }) }}">{{ app.session.get('user').user.username }}</a></p>*/
/*                 <a href="#"><i class="fa fa-circle*/
/*                  {% if app.session.get('user').user.active %}*/
/*                     text-success*/
/*                  {% else %}*/
/*                     text-danger*/
/*                  {% endif %}*/
/*                  "></i>*/
/*                     {% if app.session.get('user').user.active %}*/
/*                         Online*/
/*                     {% else %}*/
/*                         Offline*/
/*                     {% endif %}*/
/*                     </a>*/
/*             </div>*/
/*         </div>*/
/*         <!-- search form -->*/
/*         <form action="#" method="get" class="sidebar-form">*/
/*             <div class="input-group">*/
/*                 <input type="text" name="q" class="form-control" placeholder="Search...">*/
/*               <span class="input-group-btn">*/
/*                 <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>*/
/*               </span>*/
/*             </div>*/
/*         </form>*/
/*         <!-- /.search form -->*/
/*         <!-- sidebar menu: : style can be found in sidebar.less -->*/
/*         <ul class="sidebar-menu">*/
/*             <li class="header">MAIN NAVIGATION</li>*/
/* */
/*             <li class="treeview">*/
/*                 <a href="#">*/
/*                     <i class="fa fa-files-o"></i>*/
/*                     <span>Usuarios</span>*/
/*                     <i class="fa fa-angle-left pull-right"></i>*/
/*                 </a>*/
/*                 <ul class="treeview-menu">*/
/*                     <li><a href="{{ path('users_list') }}"><i class="fa fa-circle-o"></i> Listar</a></li>*/
/*                 </ul>*/
/*             </li>*/
/* */
/*             <li class="treeview">*/
/*                 <a href="#">*/
/*                     <i class="fa fa-files-o"></i>*/
/*                     <span>Sessao</span>*/
/*                     <i class="fa fa-angle-left pull-right"></i>*/
/*                 </a>*/
/*                 <ul class="treeview-menu">*/
/*                     <li><a href="{{ path('logout') }}"><i class="fa fa-circle-o"></i> Sair</a></li>*/
/*                     <li><a href="{{ path('lockscreen') }}"><i class="fa fa-circle-o"></i> Lockscreen</a></li>*/
/*                 </ul>*/
/*             </li>*/
/* */
/*             <li class="treeview">*/
/*                 <a href="#">*/
/*                     <i class="fa fa-files-o"></i>*/
/*                     <span>Cadastros</span>*/
/*                     <i class="fa fa-angle-left pull-right"></i>*/
/*                 </a>*/
/*                 <ul class="treeview-menu">*/
/*                     <li><a href="{{ path('cargos') }}"><i class="fa fa-circle-o"></i> Cargos</a></li>*/
/*                 </ul>*/
/*             </li>*/
/* */
/*         </ul>*/
/*     </section>*/
/*     <!-- /.sidebar -->*/
/* </aside>*/
