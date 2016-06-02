<?php

/* PCFicheBundle:Alerte:index.html.twig */
class __TwigTemplate_6d7c79d55806880e5e4e24e3cd46a41b152b02eefa0a30e33ee74aeb1cd6f30e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "PCFicheBundle:Alerte:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_87b8cd16a42a538e2e5b33b3f199641ed40ba3a841d6987d8f84e3a7aafcaad9 = $this->env->getExtension("native_profiler");
        $__internal_87b8cd16a42a538e2e5b33b3f199641ed40ba3a841d6987d8f84e3a7aafcaad9->enter($__internal_87b8cd16a42a538e2e5b33b3f199641ed40ba3a841d6987d8f84e3a7aafcaad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFicheBundle:Alerte:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87b8cd16a42a538e2e5b33b3f199641ed40ba3a841d6987d8f84e3a7aafcaad9->leave($__internal_87b8cd16a42a538e2e5b33b3f199641ed40ba3a841d6987d8f84e3a7aafcaad9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_099d46ebe0b89745e42eb26bb104f47180b5a9c8efa3bd4b105ea28ee15a44fd = $this->env->getExtension("native_profiler");
        $__internal_099d46ebe0b89745e42eb26bb104f47180b5a9c8efa3bd4b105ea28ee15a44fd->enter($__internal_099d46ebe0b89745e42eb26bb104f47180b5a9c8efa3bd4b105ea28ee15a44fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Alerte list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Intitule</th>
                <th>Objet</th>
                <th>Datealerte</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("alerte_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "intitule", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "objet", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["entity"], "dateAlerte", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateAlerte", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("alerte_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("alerte_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("alerte_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_099d46ebe0b89745e42eb26bb104f47180b5a9c8efa3bd4b105ea28ee15a44fd->leave($__internal_099d46ebe0b89745e42eb26bb104f47180b5a9c8efa3bd4b105ea28ee15a44fd_prof);

    }

    public function getTemplateName()
    {
        return "PCFicheBundle:Alerte:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 40,  103 => 35,  91 => 29,  85 => 26,  76 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Alerte list</h1>*/
/* */
/*     <table class="records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Intitule</th>*/
/*                 <th>Objet</th>*/
/*                 <th>Datealerte</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('alerte_show', { 'id': entity.id }) }}">{{ entity.id }}</a></td>*/
/*                 <td>{{ entity.intitule }}</td>*/
/*                 <td>{{ entity.objet }}</td>*/
/*                 <td>{% if entity.dateAlerte %}{{ entity.dateAlerte|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ path('alerte_show', { 'id': entity.id }) }}">show</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('alerte_edit', { 'id': entity.id }) }}">edit</a>*/
/*                     </li>*/
/*                 </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul>*/
/*         <li>*/
/*             <a href="{{ path('alerte_new') }}">*/
/*                 Create a new entry*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/*     {% endblock %}*/
/* */
