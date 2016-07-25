<?php

/* users/cargos.twig */
class __TwigTemplate_053fcce8d7ee7105af88ab61f24b1bdf093f4b3265c4153286419ceb40c07bba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template2.twig", "users/cargos.twig", 1);
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

        <div class=\"col-md-9\">
            <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs\">
                    <li class=\"active\"><a href=\"#settings\" data-toggle=\"tab\">Settings</a></li>
                </ul>
                <div class=\"tab-content\">
                    <div class=\"active tab-pane\" id=\"settings\">
                        <form class=\"form-horizontal\" action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("cargos");
        echo "\">
                            <div class=\"form-group\">
                                <label for=\"nome\" class=\"col-sm-2 control-label\">Nome</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" class=\"form-control\" id=\"nome\" name=\"nome\" placeholder=\"Nome\">
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

        <div class=\"col-md-3\">

            ";
        // line 36
        if (array_key_exists("sucessos", $context)) {
            // line 37
            echo "                <div class=\"alert alert-success\" role=\"alert\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span
                                aria-hidden=\"true\">×</span></button>
                    <strong>Sucesso!</strong> ";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["sucesso"]) ? $context["sucesso"] : $this->getContext($context, "sucesso")), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 43
        echo "            ";
        if ((array_key_exists("error", $context) && (twig_length_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) > 0))) {
            // line 44
            echo "                <div class=\"alert alert-danger alert-dismissable\" role=\"alert\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span
                                aria-hidden=\"true\">x</span></button>
                    <strong>Erro!</strong> ";
            // line 47
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 50
        echo "
            <!-- Profile Image -->
            <div class=\"box box-primary\">
                <div class=\"box-body box-profile\">

                    <table class=\"table table-bordered table-responsive\">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cargos"]) ? $context["cargos"] : $this->getContext($context, "cargos")));
        foreach ($context['_seq'] as $context["_key"] => $context["cargo"]) {
            // line 64
            echo "                        <tr>
                            <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["cargo"], "id", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["cargo"], "nome", array()), "html", null, true);
            echo "</td>
                        </tr>
                        </tbody>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cargo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                    </table>

                </div>
            </div>
        </div>

    </div>
";
    }

    public function getTemplateName()
    {
        return "users/cargos.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 70,  146 => 66,  142 => 65,  139 => 64,  135 => 63,  120 => 50,  114 => 47,  109 => 44,  106 => 43,  100 => 40,  95 => 37,  93 => 36,  70 => 16,  59 => 7,  56 => 6,  50 => 5,  44 => 4,  38 => 3,  32 => 2,  11 => 1,);
    }
}
/* {% extends 'template2.twig' %}*/
/*     {% block title %}Perfil{% endblock %}*/
/* {% block head %}{{ parent() }}{% endblock %}*/
/*     {% block nome_tela %}Perfil{% endblock %}*/
/*     {% block nome_relatorio %}Perfil{% endblock %}*/
/* {% block template %}*/
/*     <div class="row">*/
/* */
/*         <div class="col-md-9">*/
/*             <div class="nav-tabs-custom">*/
/*                 <ul class="nav nav-tabs">*/
/*                     <li class="active"><a href="#settings" data-toggle="tab">Settings</a></li>*/
/*                 </ul>*/
/*                 <div class="tab-content">*/
/*                     <div class="active tab-pane" id="settings">*/
/*                         <form class="form-horizontal" action="{{ path('cargos') }}">*/
/*                             <div class="form-group">*/
/*                                 <label for="nome" class="col-sm-2 control-label">Nome</label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">*/
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
/* */
/*         <div class="col-md-3">*/
/* */
/*             {% if sucessos is defined %}*/
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
/* */
/*                     <table class="table table-bordered table-responsive">*/
/*                         <thead>*/
/*                         <tr>*/
/*                             <th>ID</th>*/
/*                             <th>Nome</th>*/
/*                         </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                         {% for cargo in cargos %}*/
/*                         <tr>*/
/*                             <td>{{ cargo.id }}</td>*/
/*                             <td>{{ cargo.nome }}</td>*/
/*                         </tr>*/
/*                         </tbody>*/
/*                         {% endfor %}*/
/*                     </table>*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*     </div>*/
/* {% endblock %}*/
/* */
