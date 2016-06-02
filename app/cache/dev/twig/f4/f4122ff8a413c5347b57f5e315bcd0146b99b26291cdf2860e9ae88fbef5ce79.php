<?php

/* PCFicheBundle:Fiche:index.html.twig */
class __TwigTemplate_c81c84544cf888354e4c38c4e4a65edb10ca64061fd1d4cf5ebeeb6f98761450 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "PCFicheBundle:Fiche:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a20d10f0d295ac305242d8918620bf1c001f04a1cfaa236fb0447b29977f794 = $this->env->getExtension("native_profiler");
        $__internal_0a20d10f0d295ac305242d8918620bf1c001f04a1cfaa236fb0447b29977f794->enter($__internal_0a20d10f0d295ac305242d8918620bf1c001f04a1cfaa236fb0447b29977f794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFicheBundle:Fiche:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a20d10f0d295ac305242d8918620bf1c001f04a1cfaa236fb0447b29977f794->leave($__internal_0a20d10f0d295ac305242d8918620bf1c001f04a1cfaa236fb0447b29977f794_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ded161f1fe470fd6bbd0ad7333feaa6ac5a01ba7393d4ad84adb4d6e2688054e = $this->env->getExtension("native_profiler");
        $__internal_ded161f1fe470fd6bbd0ad7333feaa6ac5a01ba7393d4ad84adb4d6e2688054e->enter($__internal_ded161f1fe470fd6bbd0ad7333feaa6ac5a01ba7393d4ad84adb4d6e2688054e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo "- liste des fiches
";
        
        $__internal_ded161f1fe470fd6bbd0ad7333feaa6ac5a01ba7393d4ad84adb4d6e2688054e->leave($__internal_ded161f1fe470fd6bbd0ad7333feaa6ac5a01ba7393d4ad84adb4d6e2688054e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_b52f98570a60538384697e6b4feb1c49534e9638a9a58367d7709d2c54389cca = $this->env->getExtension("native_profiler");
        $__internal_b52f98570a60538384697e6b4feb1c49534e9638a9a58367d7709d2c54389cca->enter($__internal_b52f98570a60538384697e6b4feb1c49534e9638a9a58367d7709d2c54389cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "        
    <div class=\"container container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-12 page-header\">
                <h1>Liste des fiches.</h1>
                <a data-placement=\"top\" data-toggle=\"tooltip\" title=\"Créer une nouvelle fiche\" class=\"btn pc_skyblue_btn\" style=\"font-size: 150%; margin-bottom: 2%;\" href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("fiche_new");
        echo "\">Créer <span class=\"fa fa-plus\"></span></a>
                <a data-placement=\"top\" data-toggle=\"tooltip\" title=\"Exporter les fiches en csv ou en pdf\" class='btn pc_skyblue_btn' style=\"font-size: 150%; margin-bottom: 2%;\" href='";
        // line 13
        echo $this->env->getExtension('routing')->getPath("export");
        echo "'>Exporter <span class=\"fa fa-file\"></span></a>
            </div>
        </div>
        <div class=\"row\">
            <ul class=\"nav nav-pills\" style='margin: 2%'>
               <li class=\"active\"><a data-toggle=\"pill\" href=\"#1\">Les en attente</a></li>
                <li><a data-toggle=\"pill\" href=\"#2\">Les en cours</a></li>
                <li><a data-toggle=\"pill\" href=\"#3\">Les traitées</a></li>
            </ul>
            
            <div class=\"tab-content\">
                <div id=\"1\" class=\"tab-pane fade in active col-lg-12\">
                    <table  id=\"table1\" class=\"table table-striped table-bordered table-hover\">
                        <thead>
                            <tr>
                                <th>Date de création</th>
                                <th>Id</th>
                                <th>Type</th>
                                <th>Sous-type</th>
                                <th>Intitulé</th>
                                <th>Etat de la convention</th>
                                <th>Date d'effet</th>
                                <th>Date d'écheance</th>
                                <th>Nombre d'avenants</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entitiesNonAssignees"]) ? $context["entitiesNonAssignees"] : $this->getContext($context, "entitiesNonAssignees")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 42
            echo "                                <tr>
                                    <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateCreation", array()), "Ymd"), "html", null, true);
            echo "</td>
                                    <td><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(twig_join_filter(array(0 => $this->getAttribute($context["entity"], "route", array()), 1 => "_show")), array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                                    <td><a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(twig_join_filter(array(0 => $this->getAttribute($context["entity"], "route", array()), 1 => "_show")), array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "type", array()), "nom", array()), "html", null, true);
            echo "</a></td>
                                    <td><a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(twig_join_filter(array(0 => $this->getAttribute($context["entity"], "route", array()), 1 => "_show")), array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "sousType", array()), "nom", array()), "html", null, true);
            echo "</a></td>
                                    <td><a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(twig_join_filter(array(0 => $this->getAttribute($context["entity"], "route", array()), 1 => "_show")), array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "intitule", array()), "html", null, true);
            echo "</a></td>
                                    <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "etatConvention", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 49
            if ($this->getAttribute($context["entity"], "dateEffet", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateEffet", array()), "d/m/Y"), "html", null, true);
            }
            echo "</td>
                                    <td>";
            // line 50
            if ($this->getAttribute($context["entity"], "dateEcheance", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateEcheance", array()), "d/m/Y"), "html", null, true);
            }
            echo "</td>
                                    <td>
                                        ";
            // line 52
            if (($this->getAttribute($context["entity"], "nombreNouveauxAvenants", array()) > 0)) {
                // line 53
                echo "                                            <a  data-placement=\"top\" data-toggle=\"tooltip\" title=\"Avenants\" class=\"btn pc_skyblue_btn btn-xs\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(twig_join_filter(array(0 => $this->getAttribute($context["entity"], "route", array()), 1 => "_show")), array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" ><span class=\"label label-primary\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombreNouveauxAvenants", array()), "html", null, true);
                echo "</span></a>
                                        ";
            }
            // line 55
            echo "                                    </td> 
                                    <td><a data-placement=\"top\" data-toggle=\"tooltip\" title=\"Editer\" class=\"btn pc_skyblue_btn btn-xs\" href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(twig_join_filter(array(0 => $this->getAttribute($context["entity"], "route", array()), 1 => "_edit")), array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" ><span class=\"fa fa-edit\"></span></a></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                        </tbody>
                    </table>
                </div>
                <div id=\"2\" class=\"tab-pane fade col-lg-12\">
                    <table id=\"table2\" class=\"table table-striped table-bordered table-hover\">
                        <thead>
                            <tr>
                                <th>Date de création</th>
                                <th>Id</th>
                                <th>Type</th>
                                <th>Sous-type</th>
                                <th>Intitulé</th>
                                <th>Etat de la convention</th>
                                <th>Date d'effet</th>
                                <th>Date d'écheance</th>
                                <th>Nombre d'avenants</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entitiesEnCours"]) ? $context["entitiesEnCours"] : $this->getContext($context, "entitiesEnCours")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 80
            echo "                                <tr>
                                    <td>";
            // line 81
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateCreation", array()), "Ymd"), "html", null, true);
            echo "</td>
                                    <td><a href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(twig_join_filter(array(0 => $this->getAttribute($context["entity"], "route", array()), 1 => "_show")), array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                                    <td><a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(twig_join_filter(array(0 => $this->getAttribute($context["entity"], "route", array()), 1 => "_show")), array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "type", array()), "nom", array()), "html", null, true);
            echo "</a></td>
                                    <td><a href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(twig_join_filter(array(0 => $this->getAttribute($context["entity"], "route", array()), 1 => "_show")), array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "sousType", array()), "nom", array()), "html", null, true);
            echo "</a></td>
                                    <td><a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(twig_join_filter(array(0 => $this->getAttribute($context["entity"], "route", array()), 1 => "_show")), array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "intitule", array()), "html", null, true);
            echo "</a></td>
                                    <td>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "etatConvention", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 87
            if ($this->getAttribute($context["entity"], "dateEffet", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateEffet", array()), "d/m/Y"), "html", null, true);
            }
            echo "</td>
                                    <td>";
            // line 88
            if ($this->getAttribute($context["entity"], "dateEcheance", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateEcheance", array()), "d/m/Y"), "html", null, true);
            }
            echo "</td>
                                    <td><a data-placement=\"top\" data-toggle=\"tooltip\" title=\"Editer\" class=\"btn pc_skyblue_btn btn-xs\" href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(twig_join_filter(array(0 => $this->getAttribute($context["entity"], "route", array()), 1 => "_edit")), array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" ><span class=\"fa fa-edit\"></span></a></td>
                                    <td>
                                        ";
            // line 91
            if (($this->getAttribute($context["entity"], "nombreNouveauxAvenants", array()) > 0)) {
                // line 92
                echo "                                            <a  data-placement=\"top\" data-toggle=\"tooltip\" title=\"Avenants\" class=\"btn pc_skyblue_btn btn-xs\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(twig_join_filter(array(0 => $this->getAttribute($context["entity"], "route", array()), 1 => "_show")), array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" ><span class=\"label label-primary\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "ficheNewAvenanstNumber", array()), "html", null, true);
                echo "</span></a>
                                        ";
            }
            // line 94
            echo "                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                        </tbody>
                    </table>
                </div>
                <div id=\"3\" class=\"tab-pane fade col-lg-12\">
                    <table id=\"table3\" class=\"table table-striped table-bordered table-hover\">
                        <thead>
                            <tr>
                                <th>Date de création</th>
                                <th>Id</th>
                                <th>Type</th>
                                <th>Sous-type</th>
                                <th>Intitule</th>
                                <th>Etat</th>
                                <th>Date d'effet</th>
                                <th>Date de fin</th>
                                <th>Actions</th>
                                <th>Avenants</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entitiesEnVigueur"]) ? $context["entitiesEnVigueur"] : $this->getContext($context, "entitiesEnVigueur")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 118
            echo "                                <tr>
                                    <td>";
            // line 119
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateCreation", array()), "Ymd"), "html", null, true);
            echo "</td>
                                    <td><a href=\"";
            // line 120
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(twig_join_filter(array(0 => $this->getAttribute($context["entity"], "route", array()), 1 => "_show")), array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                                    <td><a href=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(twig_join_filter(array(0 => $this->getAttribute($context["entity"], "route", array()), 1 => "_show")), array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "type", array()), "nom", array()), "html", null, true);
            echo "</a></td>
                                    <td><a href=\"";
            // line 122
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(twig_join_filter(array(0 => $this->getAttribute($context["entity"], "route", array()), 1 => "_show")), array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "sousType", array()), "nom", array()), "html", null, true);
            echo "</a></td>
                                    <td><a href=\"";
            // line 123
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(twig_join_filter(array(0 => $this->getAttribute($context["entity"], "route", array()), 1 => "_show")), array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "intitule", array()), "html", null, true);
            echo "</a></td>
                                    <td>";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "etatConvention", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 125
            if ($this->getAttribute($context["entity"], "dateEffet", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateEffet", array()), "d/m/Y"), "html", null, true);
            }
            echo "</td>
                                    <td>";
            // line 126
            if ($this->getAttribute($context["entity"], "dateEcheance", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateEcheance", array()), "d/m/Y"), "html", null, true);
            }
            echo "</td>
                                    <td>
                                        ";
            // line 128
            if (($this->getAttribute($context["entity"], "nombreNouveauxAvenants", array()) > 0)) {
                // line 129
                echo "                                        <a  data-placement=\"top\" data-toggle=\"tooltip\" title=\"Avenants\" class=\"btn pc_skyblue_btn btn-xs\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(twig_join_filter(array(0 => $this->getAttribute($context["entity"], "route", array()), 1 => "_show")), array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" ><span class=\"label label-primary\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "ficheNewAvenanstNumber", array()), "html", null, true);
                echo "</span></a>
                                        ";
            }
            // line 131
            echo "                                    </td>
                                    <td><a data-placement=\"top\" data-toggle=\"tooltip\" title=\"Editer\" class=\"btn pc_skyblue_btn btn-xs\" href=\"";
            // line 132
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(twig_join_filter(array(0 => $this->getAttribute($context["entity"], "route", array()), 1 => "_edit")), array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" ><span class=\"fa fa-edit\"></span></a></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "                        </tbody>
                    </table>
                </div>
            </div>            
        </div>
    </div>
                    
    <script>
        \$(document).ready( function () {
            \$('#table1').DataTable();
            \$('#table2').DataTable();
            \$('#table3').DataTable();
        } );
    </script>
";
        
        $__internal_b52f98570a60538384697e6b4feb1c49534e9638a9a58367d7709d2c54389cca->leave($__internal_b52f98570a60538384697e6b4feb1c49534e9638a9a58367d7709d2c54389cca_prof);

    }

    public function getTemplateName()
    {
        return "PCFicheBundle:Fiche:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  363 => 135,  354 => 132,  351 => 131,  343 => 129,  341 => 128,  334 => 126,  328 => 125,  324 => 124,  318 => 123,  312 => 122,  306 => 121,  300 => 120,  296 => 119,  293 => 118,  289 => 117,  267 => 97,  259 => 94,  251 => 92,  249 => 91,  244 => 89,  238 => 88,  232 => 87,  228 => 86,  222 => 85,  216 => 84,  210 => 83,  204 => 82,  200 => 81,  197 => 80,  193 => 79,  171 => 59,  162 => 56,  159 => 55,  151 => 53,  149 => 52,  142 => 50,  136 => 49,  132 => 48,  126 => 47,  120 => 46,  114 => 45,  108 => 44,  104 => 43,  101 => 42,  97 => 41,  66 => 13,  62 => 12,  50 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* */
/* {% block title %}*/
/* {{ parent()}}- liste des fiches*/
/* {% endblock %}*/
/* */
/* {% block body %}        */
/*     <div class="container container-fluid">*/
/*         <div class="row">*/
/*             <div class="col-lg-12 page-header">*/
/*                 <h1>Liste des fiches.</h1>*/
/*                 <a data-placement="top" data-toggle="tooltip" title="Créer une nouvelle fiche" class="btn pc_skyblue_btn" style="font-size: 150%; margin-bottom: 2%;" href="{{ path('fiche_new') }}">Créer <span class="fa fa-plus"></span></a>*/
/*                 <a data-placement="top" data-toggle="tooltip" title="Exporter les fiches en csv ou en pdf" class='btn pc_skyblue_btn' style="font-size: 150%; margin-bottom: 2%;" href='{{path('export')}}'>Exporter <span class="fa fa-file"></span></a>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <ul class="nav nav-pills" style='margin: 2%'>*/
/*                <li class="active"><a data-toggle="pill" href="#1">Les en attente</a></li>*/
/*                 <li><a data-toggle="pill" href="#2">Les en cours</a></li>*/
/*                 <li><a data-toggle="pill" href="#3">Les traitées</a></li>*/
/*             </ul>*/
/*             */
/*             <div class="tab-content">*/
/*                 <div id="1" class="tab-pane fade in active col-lg-12">*/
/*                     <table  id="table1" class="table table-striped table-bordered table-hover">*/
/*                         <thead>*/
/*                             <tr>*/
/*                                 <th>Date de création</th>*/
/*                                 <th>Id</th>*/
/*                                 <th>Type</th>*/
/*                                 <th>Sous-type</th>*/
/*                                 <th>Intitulé</th>*/
/*                                 <th>Etat de la convention</th>*/
/*                                 <th>Date d'effet</th>*/
/*                                 <th>Date d'écheance</th>*/
/*                                 <th>Nombre d'avenants</th>*/
/*                                 <th>Actions</th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                             {% for entity in entitiesNonAssignees%}*/
/*                                 <tr>*/
/*                                     <td>{{entity.dateCreation |date('Ymd')}}</td>*/
/*                                     <td><a href="{{ path([entity.route ,'_show']|join, { 'id': entity.id }) }}"> {{ entity.id}}</a></td>*/
/*                                     <td><a href="{{ path([entity.route ,'_show']|join, { 'id': entity.id }) }}">{{ entity.type.nom }}</a></td>*/
/*                                     <td><a href="{{ path([entity.route ,'_show']|join, { 'id': entity.id }) }}" >{{ entity.sousType.nom }}</a></td>*/
/*                                     <td><a href="{{ path([entity.route ,'_show']|join, { 'id': entity.id }) }}" >{{ entity.intitule }}</a></td>*/
/*                                     <td>{{ entity.etatConvention }}</td>*/
/*                                     <td>{% if entity.dateEffet %}{{ entity.dateEffet|date('d/m/Y') }}{% endif %}</td>*/
/*                                     <td>{% if entity.dateEcheance %}{{ entity.dateEcheance|date('d/m/Y') }}{% endif %}</td>*/
/*                                     <td>*/
/*                                         {% if entity.nombreNouveauxAvenants > 0%}*/
/*                                             <a  data-placement="top" data-toggle="tooltip" title="Avenants" class="btn pc_skyblue_btn btn-xs" href="{{ path([entity.route ,'_show']|join, { 'id': entity.id }) }}" ><span class="label label-primary">{{ entity.nombreNouveauxAvenants }}</span></a>*/
/*                                         {% endif %}*/
/*                                     </td> */
/*                                     <td><a data-placement="top" data-toggle="tooltip" title="Editer" class="btn pc_skyblue_btn btn-xs" href="{{ path([entity.route ,'_edit']|join, { 'id': entity.id }) }}" ><span class="fa fa-edit"></span></a></td>*/
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </div>*/
/*                 <div id="2" class="tab-pane fade col-lg-12">*/
/*                     <table id="table2" class="table table-striped table-bordered table-hover">*/
/*                         <thead>*/
/*                             <tr>*/
/*                                 <th>Date de création</th>*/
/*                                 <th>Id</th>*/
/*                                 <th>Type</th>*/
/*                                 <th>Sous-type</th>*/
/*                                 <th>Intitulé</th>*/
/*                                 <th>Etat de la convention</th>*/
/*                                 <th>Date d'effet</th>*/
/*                                 <th>Date d'écheance</th>*/
/*                                 <th>Nombre d'avenants</th>*/
/*                                 <th>Actions</th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                             {% for entity in entitiesEnCours%}*/
/*                                 <tr>*/
/*                                     <td>{{entity.dateCreation |date('Ymd')}}</td>*/
/*                                     <td><a href="{{ path([entity.route ,'_show']|join, { 'id': entity.id }) }}" >{{ entity.id }}</a></td>*/
/*                                     <td><a href="{{ path([entity.route ,'_show']|join, { 'id': entity.id }) }}" >{{ entity.type.nom }}</a></td>*/
/*                                     <td><a href="{{ path([entity.route ,'_show']|join, { 'id': entity.id }) }}" >{{ entity.sousType.nom }}</a></td>*/
/*                                     <td><a href="{{ path([entity.route ,'_show']|join, { 'id': entity.id }) }}" >{{ entity.intitule }}</a></td>*/
/*                                     <td>{{ entity.etatConvention }}</td>*/
/*                                     <td>{% if entity.dateEffet %}{{ entity.dateEffet|date('d/m/Y') }}{% endif %}</td>*/
/*                                     <td>{% if entity.dateEcheance %}{{ entity.dateEcheance|date('d/m/Y') }}{% endif %}</td>*/
/*                                     <td><a data-placement="top" data-toggle="tooltip" title="Editer" class="btn pc_skyblue_btn btn-xs" href="{{ path([entity.route ,'_edit']|join, { 'id': entity.id }) }}" ><span class="fa fa-edit"></span></a></td>*/
/*                                     <td>*/
/*                                         {% if entity.nombreNouveauxAvenants > 0%}*/
/*                                             <a  data-placement="top" data-toggle="tooltip" title="Avenants" class="btn pc_skyblue_btn btn-xs" href="{{ path([entity.route ,'_show']|join, { 'id': entity.id }) }}" ><span class="label label-primary">{{ entity.ficheNewAvenanstNumber }}</span></a>*/
/*                                         {% endif %}*/
/*                                     </td>*/
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </div>*/
/*                 <div id="3" class="tab-pane fade col-lg-12">*/
/*                     <table id="table3" class="table table-striped table-bordered table-hover">*/
/*                         <thead>*/
/*                             <tr>*/
/*                                 <th>Date de création</th>*/
/*                                 <th>Id</th>*/
/*                                 <th>Type</th>*/
/*                                 <th>Sous-type</th>*/
/*                                 <th>Intitule</th>*/
/*                                 <th>Etat</th>*/
/*                                 <th>Date d'effet</th>*/
/*                                 <th>Date de fin</th>*/
/*                                 <th>Actions</th>*/
/*                                 <th>Avenants</th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                             {% for entity in entitiesEnVigueur%}*/
/*                                 <tr>*/
/*                                     <td>{{entity.dateCreation |date('Ymd')}}</td>*/
/*                                     <td><a href="{{ path([entity.route ,'_show']|join, { 'id': entity.id }) }}" >{{ entity.id }}</a></td>*/
/*                                     <td><a href="{{ path([entity.route ,'_show']|join, { 'id': entity.id }) }}" >{{ entity.type.nom }}</a></td>*/
/*                                     <td><a href="{{ path([entity.route ,'_show']|join, { 'id': entity.id }) }}" >{{ entity.sousType.nom }}</a></td>*/
/*                                     <td><a href="{{ path([entity.route ,'_show']|join, { 'id': entity.id }) }}" >{{ entity.intitule }}</a></td>*/
/*                                     <td>{{ entity.etatConvention }}</td>*/
/*                                     <td>{% if entity.dateEffet %}{{ entity.dateEffet|date('d/m/Y') }}{% endif %}</td>*/
/*                                     <td>{% if entity.dateEcheance %}{{ entity.dateEcheance|date('d/m/Y') }}{% endif %}</td>*/
/*                                     <td>*/
/*                                         {% if entity.nombreNouveauxAvenants > 0%}*/
/*                                         <a  data-placement="top" data-toggle="tooltip" title="Avenants" class="btn pc_skyblue_btn btn-xs" href="{{ path([entity.route ,'_show']|join, { 'id': entity.id }) }}" ><span class="label label-primary">{{ entity.ficheNewAvenanstNumber }}</span></a>*/
/*                                         {% endif %}*/
/*                                     </td>*/
/*                                     <td><a data-placement="top" data-toggle="tooltip" title="Editer" class="btn pc_skyblue_btn btn-xs" href="{{ path([entity.route ,'_edit']|join, { 'id': entity.id }) }}" ><span class="fa fa-edit"></span></a></td>*/
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </div>*/
/*             </div>            */
/*         </div>*/
/*     </div>*/
/*                     */
/*     <script>*/
/*         $(document).ready( function () {*/
/*             $('#table1').DataTable();*/
/*             $('#table2').DataTable();*/
/*             $('#table3').DataTable();*/
/*         } );*/
/*     </script>*/
/* {% endblock %}*/
/* */
