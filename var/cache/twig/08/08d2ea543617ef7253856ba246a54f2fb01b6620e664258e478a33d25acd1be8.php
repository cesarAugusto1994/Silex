<?php

/* /users/profile.twig */
class __TwigTemplate_942fe820627abdeb0dc433d1ddd53ab40813ff8f4e0f69bc176a64ce4bc9e7c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template2.twig", "/users/profile.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'nome_tela' => array($this, 'block_nome_tela'),
            'nome_relatorio' => array($this, 'block_nome_relatorio'),
            'template' => array($this, 'block_template'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template2.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Perfil";
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $this->displayParentBlock("head", $context, $blocks);
    }

    // line 4
    public function block_nome_tela($context, array $blocks = array())
    {
        echo "Perfil";
    }

    // line 5
    public function block_nome_relatorio($context, array $blocks = array())
    {
        echo "Perfil";
    }

    // line 6
    public function block_template($context, array $blocks = array())
    {
        // line 7
        echo "    <div class=\"row\">
        <div class=\"col-md-3\">

            ";
        // line 10
        if (array_key_exists("sucesso", $context)) {
            // line 11
            echo "                <div class=\"alert alert-success\" role=\"alert\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span
                                aria-hidden=\"true\">×</span></button>
                    <strong>Sucesso!</strong> ";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["sucesso"]) ? $context["sucesso"] : $this->getContext($context, "sucesso")), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 17
        echo "            ";
        if ((array_key_exists("error", $context) && (twig_length_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) > 0))) {
            // line 18
            echo "                <div class=\"alert alert-danger alert-dismissable\" role=\"alert\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span
                                aria-hidden=\"true\">x</span></button>
                    <strong>Erro!</strong> ";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 24
        echo "
            <!-- Profile Image -->
            <div class=\"box box-primary\">
                <div class=\"box-body box-profile\">
                    <img class=\"profile-user-img img-responsive img-circle\"
                         src=\"
                        ";
        // line 30
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "avatar", array())) > 0)) {
            // line 31
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "avatar", array()), "html", null, true);
            echo "
                        ";
        } else {
            // line 33
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "application.default.user.avatar", array(), "array"), "html", null, true);
            echo "
                        ";
        }
        // line 35
        echo "                         \" alt=\"User profile picture\">
                    <h3 class=\"profile-username text-center\">";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</h3>
                    <p class=\"text-muted text-center\">";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "cargo", array()), "nome", array()), "html", null, true);
        echo "</p>
                    <p class=\"text-muted text-center\">
                        ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "isActive", array()), "html", null, true);
        echo "
                    </p>

                    <ul class=\"list-group list-group-unbordered\">
                        <li class=\"list-group-item\">
                            <b>Loja</b> <b class=\"pull-right\">";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "loja", array()), "id", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "loja", array()), "nome", array()), "html", null, true);
        echo "</b>
                        </li>
                        <li class=\"list-group-item\">
                            <b>Criado</b> <b class=\"pull-right\">";
        // line 47
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "created", array()), "d/F/y"), "html", null, true);
        echo "</b>
                        </li>
                        <li class=\"list-group-item\">
                            <b>Login</b> <i class=\"pull-right\">";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</i>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"col-md-9\">
            <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs\">
                    <li class=\"active\"><a href=\"#activity\" data-toggle=\"tab\">Activity</a></li>
                    <li><a href=\"#timeline\" data-toggle=\"tab\">Timeline</a></li>
                    <li><a href=\"#settings\" data-toggle=\"tab\">Settings</a></li>
                </ul>
                <div class=\"tab-content\">
                    <div class=\"active tab-pane\" id=\"activity\"></div>
                    <div class=\"tab-pane\" id=\"timeline\"></div>
                    <div class=\"tab-pane\" id=\"settings\">
                        <form class=\"form-horizontal\" action=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("update_user", array("idUser" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">
                            <div class=\"form-group\">
                                <label for=\"inputName\" class=\"col-sm-2 control-label\">Name</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" class=\"form-control\" id=\"inputName\" name=\"username\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "\" placeholder=\"Name\">
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"inputEmail\" class=\"col-sm-2 control-label\">Email</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"email\" class=\"form-control\" id=\"inputEmail\" name=\"email\" value=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "\" placeholder=\"Email\">
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"login\" class=\"col-sm-2 control-label\">Login</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" class=\"form-control\" id=\"login\" name=\"login\" value=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "login", array()), "html", null, true);
        echo "\" placeholder=\"Name\">
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"loja\" class=\"col-sm-2 control-label\">Loja</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"loja\" id=\"loja\" class=\"selectpicker show-tick\">
                                        ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lojas"]) ? $context["lojas"] : $this->getContext($context, "lojas")));
        foreach ($context['_seq'] as $context["_key"] => $context["loja"]) {
            // line 91
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loja"], "id", array()), "html", null, true);
            echo "\"
                                                    ";
            // line 92
            if (($this->getAttribute($context["loja"], "id", array()) == $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "loja", array()), "id", array()))) {
                // line 93
                echo "                                                        selected=\"selected\"
                                                    ";
            }
            // line 95
            echo "                                            >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loja"], "id", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loja"], "nome", array()), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['loja'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"cargo\" class=\"col-sm-2 control-label\">Cargo</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"cargo\" id=\"cargo\" class=\"selectpicker show-tick\">
                                        ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cargos"]) ? $context["cargos"] : $this->getContext($context, "cargos")));
        foreach ($context['_seq'] as $context["_key"] => $context["cargo"]) {
            // line 105
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cargo"], "id", array()), "html", null, true);
            echo "\"
                                                    ";
            // line 106
            if (($this->getAttribute($context["cargo"], "id", array()) == $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "cargo", array()), "id", array()))) {
                // line 107
                echo "                                                        selected=\"selected\"
                                                    ";
            }
            // line 109
            echo "                                            >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cargo"], "nome", array()), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cargo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-sm-offset-2 col-sm-10\">
                                    <button type=\"submit\" class=\"btn btn-danger\">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "/users/profile.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 111,  252 => 109,  248 => 107,  246 => 106,  241 => 105,  237 => 104,  228 => 97,  217 => 95,  213 => 93,  211 => 92,  206 => 91,  202 => 90,  192 => 83,  183 => 77,  174 => 71,  167 => 67,  147 => 50,  141 => 47,  133 => 44,  125 => 39,  120 => 37,  116 => 36,  113 => 35,  107 => 33,  101 => 31,  99 => 30,  91 => 24,  85 => 21,  80 => 18,  77 => 17,  71 => 14,  66 => 11,  64 => 10,  59 => 7,  56 => 6,  50 => 5,  44 => 4,  38 => 3,  32 => 2,  11 => 1,);
    }
}
/* {% extends 'template2.twig' %}*/
/*     {% block title %}Perfil{% endblock %}*/
/* {% block head %}{{ parent() }}{% endblock %}*/
/*     {% block nome_tela %}Perfil{% endblock %}*/
/*     {% block nome_relatorio %}Perfil{% endblock %}*/
/* {% block template %}*/
/*     <div class="row">*/
/*         <div class="col-md-3">*/
/* */
/*             {% if sucesso is defined %}*/
/*                 <div class="alert alert-success" role="alert">*/
/*                     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span*/
/*                                 aria-hidden="true">×</span></button>*/
/*                     <strong>Sucesso!</strong> {{ sucesso }}*/
/*                 </div>*/
/*             {% endif %}*/
/*             {% if error is defined and error|length > 0 %}*/
/*                 <div class="alert alert-danger alert-dismissable" role="alert">*/
/*                     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span*/
/*                                 aria-hidden="true">x</span></button>*/
/*                     <strong>Erro!</strong> {{ error }}*/
/*                 </div>*/
/*             {% endif %}*/
/* */
/*             <!-- Profile Image -->*/
/*             <div class="box box-primary">*/
/*                 <div class="box-body box-profile">*/
/*                     <img class="profile-user-img img-responsive img-circle"*/
/*                          src="*/
/*                         {% if user.avatar|length > 0 %}*/
/*                             {{ user.avatar }}*/
/*                         {% else %}*/
/*                             {{ app['application.default.user.avatar'] }}*/
/*                         {% endif %}*/
/*                          " alt="User profile picture">*/
/*                     <h3 class="profile-username text-center">{{ user.username }}</h3>*/
/*                     <p class="text-muted text-center">{{ user.cargo.nome }}</p>*/
/*                     <p class="text-muted text-center">*/
/*                         {{ user.isActive }}*/
/*                     </p>*/
/* */
/*                     <ul class="list-group list-group-unbordered">*/
/*                         <li class="list-group-item">*/
/*                             <b>Loja</b> <b class="pull-right">{{ user.loja.id }} - {{ user.loja.nome }}</b>*/
/*                         </li>*/
/*                         <li class="list-group-item">*/
/*                             <b>Criado</b> <b class="pull-right">{{ user.created|date('d/F/y') }}</b>*/
/*                         </li>*/
/*                         <li class="list-group-item">*/
/*                             <b>Login</b> <i class="pull-right">{{ user.email }}</i>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-md-9">*/
/*             <div class="nav-tabs-custom">*/
/*                 <ul class="nav nav-tabs">*/
/*                     <li class="active"><a href="#activity" data-toggle="tab">Activity</a></li>*/
/*                     <li><a href="#timeline" data-toggle="tab">Timeline</a></li>*/
/*                     <li><a href="#settings" data-toggle="tab">Settings</a></li>*/
/*                 </ul>*/
/*                 <div class="tab-content">*/
/*                     <div class="active tab-pane" id="activity"></div>*/
/*                     <div class="tab-pane" id="timeline"></div>*/
/*                     <div class="tab-pane" id="settings">*/
/*                         <form class="form-horizontal" action="{{ path('update_user', { idUser : user.id }) }}">*/
/*                             <div class="form-group">*/
/*                                 <label for="inputName" class="col-sm-2 control-label">Name</label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <input type="text" class="form-control" id="inputName" name="username" value="{{ user.username }}" placeholder="Name">*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label for="inputEmail" class="col-sm-2 control-label">Email</label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <input type="email" class="form-control" id="inputEmail" name="email" value="{{ user.email }}" placeholder="Email">*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label for="login" class="col-sm-2 control-label">Login</label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <input type="text" class="form-control" id="login" name="login" value="{{ user.login }}" placeholder="Name">*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label for="loja" class="col-sm-2 control-label">Loja</label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <select name="loja" id="loja" class="selectpicker show-tick">*/
/*                                         {% for loja in lojas %}*/
/*                                             <option value="{{ loja.id }}"*/
/*                                                     {% if loja.id == user.loja.id %}*/
/*                                                         selected="selected"*/
/*                                                     {% endif %}*/
/*                                             >{{ loja.id }} - {{ loja.nome }}</option>*/
/*                                         {% endfor %}*/
/*                                     </select>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label for="cargo" class="col-sm-2 control-label">Cargo</label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <select name="cargo" id="cargo" class="selectpicker show-tick">*/
/*                                         {% for cargo in cargos %}*/
/*                                             <option value="{{ cargo.id }}"*/
/*                                                     {% if cargo.id == user.cargo.id %}*/
/*                                                         selected="selected"*/
/*                                                     {% endif %}*/
/*                                             >{{ cargo.nome }}</option>*/
/*                                         {% endfor %}*/
/*                                     </select>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <div class="col-sm-offset-2 col-sm-10">*/
/*                                     <button type="submit" class="btn btn-danger">Save</button>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </form>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
