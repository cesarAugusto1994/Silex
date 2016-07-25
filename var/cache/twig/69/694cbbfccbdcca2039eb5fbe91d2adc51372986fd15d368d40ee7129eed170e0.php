<?php

/* admin/users_list.twig */
class __TwigTemplate_02b1e09b4ce97db1357455e5933725254c1ce8d061167d22663cb5dd6d13b589 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template_tela.twig", "admin/users_list.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'nome_tela' => array($this, 'block_nome_tela'),
            'nome_relatorio' => array($this, 'block_nome_relatorio'),
            'content_form' => array($this, 'block_content_form'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "Users List";
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $this->displayParentBlock("head", $context, $blocks);
    }

    // line 4
    public function block_nome_tela($context, array $blocks = array())
    {
        echo "Usuarios WebPDV";
    }

    // line 5
    public function block_nome_relatorio($context, array $blocks = array())
    {
        echo "Usuarios WebPDV";
    }

    // line 6
    public function block_content_form($context, array $blocks = array())
    {
        // line 7
        echo "        <form role=\"form\" class=\"form-horizontal\" action=\"";
        echo $this->env->getExtension('routing')->getPath("users_list_find");
        echo "\" method=\"get\">
            <div class=\"box-body\">

                <div class=\"form-group\">
                    <label for=\"loja\" class=\"col-sm-2 control-label\">Loja</label>
                    <div class=\"col-sm-10\">
                        <select name=\"loja\" class=\"selectpicker show-tick\" data-live-search=\"true\">
                            <option value=\"\"></option>
                            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lojas"]) ? $context["lojas"] : $this->getContext($context, "lojas")));
        foreach ($context['_seq'] as $context["_key"] => $context["loja"]) {
            // line 16
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loja"], "id", array()), "html", null, true);
            echo "\"
                                    ";
            // line 17
            if (($this->getAttribute($context["loja"], "id", array()) == (isset($context["loja_request"]) ? $context["loja_request"] : $this->getContext($context, "loja_request")))) {
                // line 18
                echo "                                        selected=\"selected\"
                                    ";
            }
            // line 20
            echo "                                >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loja"], "id", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loja"], "nome", array()), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['loja'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                        </select>
                    </div>
                </div>

                <div class=\"form-group\">
                    <label for=\"inputName\" class=\"col-sm-2 control-label\">Name</label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"username\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["nome_request"]) ? $context["nome_request"] : $this->getContext($context, "nome_request")), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"Name\">
                    </div>
                </div>

                <div class=\"form-group\">
                    <label for=\"inputName\" class=\"col-sm-2 control-label\">Login</label>
                    <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"login\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["login_request"]) ? $context["login_request"] : $this->getContext($context, "login_request")), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"login\">
                    </div>
                </div>

                <div class=\"form-group\">
                    <label for=\"ativo\" class=\"col-sm-2 control-label\">Situacao</label>
                    <div class=\"col-sm-10\">
                        <select id=\"ativo\" name=\"ativo\" class=\"selectpicker show-tick\">
                            <option value=\"\">Todos</option>
                            <option value=\"\">Ativo</option>
                            <option value=\"\">Inativo</option>
                        </select>
                    </div>
                </div>

                <div class=\"form-group\">
                    <div class=\"col-sm-offset-2 col-sm-10\">
                        <button type=\"submit\" class=\"btn btn-default\">Buscar</button>
                    </div>
                </div>

            </div>
        </form>
    ";
    }

    // line 60
    public function block_content_table($context, array $blocks = array())
    {
        // line 61
        echo "        <div class=\"box-body table-responsive no-padding\">
            <table id=\"example2\" class=\"table table-bordered table-striped\">
                <caption>Lista de Usuarios</caption>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Created</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 73
            echo "                    <tr ";
            if (($this->getAttribute($context["user"], "active", array()) == 0)) {
                echo " class=\"info\" ";
            }
            echo ">
                        <td>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</td>
                        <td><a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profile", array("idUser" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_convert_encoding($this->getAttribute($context["user"], "username", array()), "UTF-8", "iso-8859-1"), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 76
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "created", array()), "d/F/y g:i A"), "html", null, true);
            echo "</td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 79
            echo "                    <tr>
                        <td><em>Nada encontrado.</em></td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                </tbody>
                <tfoot>
                <tr>
                    <th colspan=\"3\"></th>
                </tr>
                </tfoot>
            </table>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "admin/users_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 83,  191 => 79,  183 => 76,  177 => 75,  173 => 74,  166 => 73,  161 => 72,  148 => 61,  145 => 60,  117 => 36,  107 => 29,  98 => 22,  87 => 20,  83 => 18,  81 => 17,  76 => 16,  72 => 15,  60 => 7,  57 => 6,  51 => 5,  45 => 4,  39 => 3,  33 => 2,  11 => 1,);
    }
}
/* {% extends 'template_tela.twig' %}*/
/*     {% block title %}Users List{% endblock %}*/
/* {% block head %}{{ parent() }}{% endblock %}*/
/*     {% block nome_tela %}Usuarios WebPDV{% endblock %}*/
/*     {% block nome_relatorio %}Usuarios WebPDV{% endblock %}*/
/*     {% block content_form %}*/
/*         <form role="form" class="form-horizontal" action="{{ path('users_list_find') }}" method="get">*/
/*             <div class="box-body">*/
/* */
/*                 <div class="form-group">*/
/*                     <label for="loja" class="col-sm-2 control-label">Loja</label>*/
/*                     <div class="col-sm-10">*/
/*                         <select name="loja" class="selectpicker show-tick" data-live-search="true">*/
/*                             <option value=""></option>*/
/*                             {% for loja in lojas %}*/
/*                                 <option value="{{ loja.id }}"*/
/*                                     {% if loja.id == loja_request %}*/
/*                                         selected="selected"*/
/*                                     {% endif %}*/
/*                                 >{{ loja.id }} - {{ loja.nome }}</option>*/
/*                             {% endfor %}*/
/*                         </select>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     <label for="inputName" class="col-sm-2 control-label">Name</label>*/
/*                     <div class="col-sm-10">*/
/*                         <input type="text" name="username" value="{{ nome_request }}" class="form-control" placeholder="Name">*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     <label for="inputName" class="col-sm-2 control-label">Login</label>*/
/*                     <div class="col-sm-10">*/
/*                         <input type="text" name="login" value="{{ login_request }}" class="form-control" placeholder="login">*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     <label for="ativo" class="col-sm-2 control-label">Situacao</label>*/
/*                     <div class="col-sm-10">*/
/*                         <select id="ativo" name="ativo" class="selectpicker show-tick">*/
/*                             <option value="">Todos</option>*/
/*                             <option value="">Ativo</option>*/
/*                             <option value="">Inativo</option>*/
/*                         </select>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     <div class="col-sm-offset-2 col-sm-10">*/
/*                         <button type="submit" class="btn btn-default">Buscar</button>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </form>*/
/*     {% endblock %}*/
/*     {% block content_table %}*/
/*         <div class="box-body table-responsive no-padding">*/
/*             <table id="example2" class="table table-bordered table-striped">*/
/*                 <caption>Lista de Usuarios</caption>*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <th>ID</th>*/
/*                     <th>Name</th>*/
/*                     <th>Created</th>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for user in users %}*/
/*                     <tr {% if user.active == 0 %} class="info" {% endif %}>*/
/*                         <td>{{ user.id }}</td>*/
/*                         <td><a href="{{ path('profile', { idUser : user.id }) }}">{{ user.username|convert_encoding('UTF-8', 'iso-8859-1') }}</a></td>*/
/*                         <td>{{ user.created|date('d/F/y g:i A') }}</td>*/
/*                     </tr>*/
/*                 {% else %}*/
/*                     <tr>*/
/*                         <td><em>Nada encontrado.</em></td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*                 <tfoot>*/
/*                 <tr>*/
/*                     <th colspan="3"></th>*/
/*                 </tr>*/
/*                 </tfoot>*/
/*             </table>*/
/*         </div>*/
/*     {% endblock %}*/
