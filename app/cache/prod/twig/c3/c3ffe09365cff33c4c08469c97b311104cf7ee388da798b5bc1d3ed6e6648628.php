<?php

/* PCFicheBundle:Demande:index.html.twig */
class __TwigTemplate_444b776e7376c7999d7eebfed25096b5313717afa5a69a7c8245f27cd8bc5ecf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "PCFicheBundle:Demande:index.html.twig", 1);
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
        $__internal_5088fd262e25de241992c3ec58d19f72bfba7ad48ead00debfd6dee050c29bd3 = $this->env->getExtension("native_profiler");
        $__internal_5088fd262e25de241992c3ec58d19f72bfba7ad48ead00debfd6dee050c29bd3->enter($__internal_5088fd262e25de241992c3ec58d19f72bfba7ad48ead00debfd6dee050c29bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFicheBundle:Demande:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5088fd262e25de241992c3ec58d19f72bfba7ad48ead00debfd6dee050c29bd3->leave($__internal_5088fd262e25de241992c3ec58d19f72bfba7ad48ead00debfd6dee050c29bd3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c38e0ca67b3d9f4c084eec9a641049c8be02829efd28d9c287a43bea2474eb05 = $this->env->getExtension("native_profiler");
        $__internal_c38e0ca67b3d9f4c084eec9a641049c8be02829efd28d9c287a43bea2474eb05->enter($__internal_c38e0ca67b3d9f4c084eec9a641049c8be02829efd28d9c287a43bea2474eb05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-12 page-header\"><h1>Mes demandes</h1></div>
        </div>
        <div class=\"row\">    
            <a class=\"btn pc_skyblue_btn\" style='font-size: 150%; margin-bottom: 2%;' href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("demande_new");
        echo "\">Nouvelle demande </a>
        </div> 
        <div class=\"row\">
            <table id=\"tableDemandes\" class=\"table table-striped table-bordered table-hover\">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Type</th>
                        <th>Sous-type</th>
                        <th>Intitule</th>
                        <th>Etat</th>
                        <th>Date d'effet</th>
                        <th>Date de fin</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 28
            echo "                        <tr>
                            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "type", array()), "nom", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "sousType", array()), "nom", array()), "html", null, true);
            echo "</td>
                            <td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(twig_join_filter(array(0 => $this->getAttribute($context["entity"], "route", array()), 1 => "_showrequest")), array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "intitule", array()), "html", null, true);
            echo "</a> </td>
                            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "etatConvention", array()), "html", null, true);
            echo "</td>      
                            <td>";
            // line 34
            if ($this->getAttribute($context["entity"], "dateEffet", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateEffet", array()), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                            <td>";
            // line 35
            if ($this->getAttribute($context["entity"], "dateEcheance", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateEcheance", array()), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                            <td><a  data-placement=\"top\" data-toggle=\"tooltip\" title=\"Voir fiche\" class=\"btn pc_skyblue_btn btn-xs\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(twig_join_filter(array(0 => $this->getAttribute($context["entity"], "route", array()), 1 => "_showrequest")), array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" ><span class=\"glyphicon glyphicon-eye-open\"></span></a></td>   
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                </tbody>
            </table>
        </div>   
    </div>
                    
    <script>
        \$(document).ready( function () {
            \$('#tableDemandes').DataTable();
        } );
    </script>
";
        
        $__internal_c38e0ca67b3d9f4c084eec9a641049c8be02829efd28d9c287a43bea2474eb05->leave($__internal_c38e0ca67b3d9f4c084eec9a641049c8be02829efd28d9c287a43bea2474eb05_prof);

    }

    public function getTemplateName()
    {
        return "PCFicheBundle:Demande:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 39,  108 => 36,  102 => 35,  96 => 34,  92 => 33,  86 => 32,  82 => 31,  78 => 30,  74 => 29,  71 => 28,  67 => 27,  47 => 10,  40 => 5,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* */
/* {% block body -%}*/
/*         */
/*     <div class="container-fluid">*/
/*         <div class="row">*/
/*             <div class="col-lg-12 page-header"><h1>Mes demandes</h1></div>*/
/*         </div>*/
/*         <div class="row">    */
/*             <a class="btn pc_skyblue_btn" style='font-size: 150%; margin-bottom: 2%;' href="{{ path('demande_new') }}">Nouvelle demande </a>*/
/*         </div> */
/*         <div class="row">*/
/*             <table id="tableDemandes" class="table table-striped table-bordered table-hover">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th>Id</th>*/
/*                         <th>Type</th>*/
/*                         <th>Sous-type</th>*/
/*                         <th>Intitule</th>*/
/*                         <th>Etat</th>*/
/*                         <th>Date d'effet</th>*/
/*                         <th>Date de fin</th>*/
/*                         <th>Actions</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     {% for entity in entities %}*/
/*                         <tr>*/
/*                             <td>{{ entity.id }}</td>*/
/*                             <td>{{ entity.type.nom }}</td>*/
/*                             <td>{{ entity.sousType.nom }}</td>*/
/*                             <td><a href="{{ path([entity.route ,'_showrequest']|join, { 'id': entity.id }) }}">{{ entity.intitule }}</a> </td>*/
/*                             <td>{{ entity.etatConvention }}</td>      */
/*                             <td>{% if entity.dateEffet %}{{ entity.dateEffet|date('d-m-Y') }}{% endif %}</td>*/
/*                             <td>{% if entity.dateEcheance %}{{ entity.dateEcheance|date('d-m-Y') }}{% endif %}</td>*/
/*                             <td><a  data-placement="top" data-toggle="tooltip" title="Voir fiche" class="btn pc_skyblue_btn btn-xs" href="{{ path([entity.route ,'_showrequest']|join, { 'id': entity.id }) }}" ><span class="glyphicon glyphicon-eye-open"></span></a></td>   */
/*                         </tr>*/
/*                     {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>   */
/*     </div>*/
/*                     */
/*     <script>*/
/*         $(document).ready( function () {*/
/*             $('#tableDemandes').DataTable();*/
/*         } );*/
/*     </script>*/
/* {% endblock %}*/
/* */
