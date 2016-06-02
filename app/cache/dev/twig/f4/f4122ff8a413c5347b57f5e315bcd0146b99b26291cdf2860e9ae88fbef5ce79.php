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
        $__internal_b209820679cbc3d7700e9dd7a4f5a30b3bc0dd7c7cd068c3520eacbc4fa20c80 = $this->env->getExtension("native_profiler");
        $__internal_b209820679cbc3d7700e9dd7a4f5a30b3bc0dd7c7cd068c3520eacbc4fa20c80->enter($__internal_b209820679cbc3d7700e9dd7a4f5a30b3bc0dd7c7cd068c3520eacbc4fa20c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFicheBundle:Fiche:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b209820679cbc3d7700e9dd7a4f5a30b3bc0dd7c7cd068c3520eacbc4fa20c80->leave($__internal_b209820679cbc3d7700e9dd7a4f5a30b3bc0dd7c7cd068c3520eacbc4fa20c80_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e48a5feb1adedfe3a0a19ace129db3e43863d363917e225adf5fb8f296e5962a = $this->env->getExtension("native_profiler");
        $__internal_e48a5feb1adedfe3a0a19ace129db3e43863d363917e225adf5fb8f296e5962a->enter($__internal_e48a5feb1adedfe3a0a19ace129db3e43863d363917e225adf5fb8f296e5962a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo "- liste des fiches
";
        
        $__internal_e48a5feb1adedfe3a0a19ace129db3e43863d363917e225adf5fb8f296e5962a->leave($__internal_e48a5feb1adedfe3a0a19ace129db3e43863d363917e225adf5fb8f296e5962a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_700929afb09f88ec248feaeea5209ab5b9aa6828b035589ba76c584b732d4b0e = $this->env->getExtension("native_profiler");
        $__internal_700929afb09f88ec248feaeea5209ab5b9aa6828b035589ba76c584b732d4b0e->enter($__internal_700929afb09f88ec248feaeea5209ab5b9aa6828b035589ba76c584b732d4b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <a data-toggle=\"modal\" data-target=\"#autres2\" title=\"Voir la liste des avenants, fichiers, etc...\" class='btn pc_skyblue_btn' style=\"font-size: 150%; margin-bottom: 2%;\">Autres listes </a>
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
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entitiesNonAssignees"]) ? $context["entitiesNonAssignees"] : $this->getContext($context, "entitiesNonAssignees")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 43
            echo "                                <tr>
                                    <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateCreation", array()), "Ymd"), "html", null, true);
            echo "</td>
                                    <td><a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(twig_join_filter(array(0 => $this->getAttribute($context["entity"], "route", array()), 1 => "_show")), array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                                    <td><a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(twig_join_filter(array(0 => $this->getAttribute($context["entity"], "route", array()), 1 => "_show")), array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "type", array()), "nom", array()), "html", null, true);
            echo "</a></td>
                                    <td><a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(twig_join_filter(array(0 => $this->getAttribute($context["entity"], "route", array()), 1 => "_show")), array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "sousType", array()), "nom", array()), "html", null, true);
            echo "</a></td>
                                    <td><a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(twig_join_filter(array(0 => $this->getAttribute($context["entity"], "route", array()), 1 => "_show")), array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "intitule", array()), "html", null, true);
            echo "</a></td>
                                    <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "etatConvention", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 50
            if ($this->getAttribute($context["entity"], "dateEffet", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateEffet", array()), "d/m/Y"), "html", null, true);
            }
            echo "</td>
                                    <td>";
            // line 51
            if ($this->getAttribute($context["entity"], "dateEcheance", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateEcheance", array()), "d/m/Y"), "html", null, true);
            }
            echo "</td>
                                    <td>
                                        ";
            // line 53
            if (($this->getAttribute($context["entity"], "nombreNouveauxAvenants", array()) > 0)) {
                // line 54
                echo "                                            <a  data-placement=\"top\" data-toggle=\"tooltip\" title=\"Avenants\" class=\"btn pc_skyblue_btn btn-xs\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(twig_join_filter(array(0 => $this->getAttribute($context["entity"], "route", array()), 1 => "_show")), array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" ><span class=\"label label-primary\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombreNouveauxAvenants", array()), "html", null, true);
                echo "</span></a>
                                        ";
            }
            // line 56
            echo "                                    </td> 
                                    <td><a data-placement=\"top\" data-toggle=\"tooltip\" title=\"Editer\" class=\"btn pc_skyblue_btn btn-xs\" href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(twig_join_filter(array(0 => $this->getAttribute($context["entity"], "route", array()), 1 => "_edit")), array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" ><span class=\"fa fa-edit\"></span></a></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
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
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entitiesEnCours"]) ? $context["entitiesEnCours"] : $this->getContext($context, "entitiesEnCours")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 81
            echo "                                <tr>
                                    <td>";
            // line 82
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateCreation", array()), "Ymd"), "html", null, true);
            echo "</td>
                                    <td><a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(twig_join_filter(array(0 => $this->getAttribute($context["entity"], "route", array()), 1 => "_show")), array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                                    <td><a href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(twig_join_filter(array(0 => $this->getAttribute($context["entity"], "route", array()), 1 => "_show")), array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "type", array()), "nom", array()), "html", null, true);
            echo "</a></td>
                                    <td><a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(twig_join_filter(array(0 => $this->getAttribute($context["entity"], "route", array()), 1 => "_show")), array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "sousType", array()), "nom", array()), "html", null, true);
            echo "</a></td>
                                    <td><a href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(twig_join_filter(array(0 => $this->getAttribute($context["entity"], "route", array()), 1 => "_show")), array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "intitule", array()), "html", null, true);
            echo "</a></td>
                                    <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "etatConvention", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 88
            if ($this->getAttribute($context["entity"], "dateEffet", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateEffet", array()), "d/m/Y"), "html", null, true);
            }
            echo "</td>
                                    <td>";
            // line 89
            if ($this->getAttribute($context["entity"], "dateEcheance", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateEcheance", array()), "d/m/Y"), "html", null, true);
            }
            echo "</td>
                                    <td><a data-placement=\"top\" data-toggle=\"tooltip\" title=\"Editer\" class=\"btn pc_skyblue_btn btn-xs\" href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(twig_join_filter(array(0 => $this->getAttribute($context["entity"], "route", array()), 1 => "_edit")), array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" ><span class=\"fa fa-edit\"></span></a></td>
                                    <td>
                                        ";
            // line 92
            if (($this->getAttribute($context["entity"], "nombreNouveauxAvenants", array()) > 0)) {
                // line 93
                echo "                                            <a  data-placement=\"top\" data-toggle=\"tooltip\" title=\"Avenants\" class=\"btn pc_skyblue_btn btn-xs\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(twig_join_filter(array(0 => $this->getAttribute($context["entity"], "route", array()), 1 => "_show")), array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" ><span class=\"label label-primary\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "ficheNewAvenanstNumber", array()), "html", null, true);
                echo "</span></a>
                                        ";
            }
            // line 95
            echo "                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
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
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entitiesEnVigueur"]) ? $context["entitiesEnVigueur"] : $this->getContext($context, "entitiesEnVigueur")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 119
            echo "                                <tr>
                                    <td>";
            // line 120
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateCreation", array()), "Ymd"), "html", null, true);
            echo "</td>
                                    <td><a href=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(twig_join_filter(array(0 => $this->getAttribute($context["entity"], "route", array()), 1 => "_show")), array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                                    <td><a href=\"";
            // line 122
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(twig_join_filter(array(0 => $this->getAttribute($context["entity"], "route", array()), 1 => "_show")), array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "type", array()), "nom", array()), "html", null, true);
            echo "</a></td>
                                    <td><a href=\"";
            // line 123
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(twig_join_filter(array(0 => $this->getAttribute($context["entity"], "route", array()), 1 => "_show")), array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "sousType", array()), "nom", array()), "html", null, true);
            echo "</a></td>
                                    <td><a href=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(twig_join_filter(array(0 => $this->getAttribute($context["entity"], "route", array()), 1 => "_show")), array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "intitule", array()), "html", null, true);
            echo "</a></td>
                                    <td>";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "etatConvention", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 126
            if ($this->getAttribute($context["entity"], "dateEffet", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateEffet", array()), "d/m/Y"), "html", null, true);
            }
            echo "</td>
                                    <td>";
            // line 127
            if ($this->getAttribute($context["entity"], "dateEcheance", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateEcheance", array()), "d/m/Y"), "html", null, true);
            }
            echo "</td>
                                    <td>
                                        ";
            // line 129
            if (($this->getAttribute($context["entity"], "nombreNouveauxAvenants", array()) > 0)) {
                // line 130
                echo "                                        <a  data-placement=\"top\" data-toggle=\"tooltip\" title=\"Avenants\" class=\"btn pc_skyblue_btn btn-xs\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(twig_join_filter(array(0 => $this->getAttribute($context["entity"], "route", array()), 1 => "_show")), array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" ><span class=\"label label-primary\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "ficheNewAvenanstNumber", array()), "html", null, true);
                echo "</span></a>
                                        ";
            }
            // line 132
            echo "                                    </td>
                                    <td><a data-placement=\"top\" data-toggle=\"tooltip\" title=\"Editer\" class=\"btn pc_skyblue_btn btn-xs\" href=\"";
            // line 133
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(twig_join_filter(array(0 => $this->getAttribute($context["entity"], "route", array()), 1 => "_edit")), array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\" ><span class=\"fa fa-edit\"></span></a></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "                        </tbody>
                    </table>
                </div>
            </div>            
        </div>
    </div>
    
    <div class=\"modal\" style=\"top:25%\" id=\"autres2\"  aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></button>
                    <h4 class=\"modal-title custom_align\" id=\"Heading\">Autres listes</h4>
                </div>
                <div class=\"modal-body\">
                    <ul>
                        <li><a href=\"";
        // line 152
        echo $this->env->getExtension('routing')->getPath("avenant");
        echo "\">Les avenants</a></li>
                        <li><a href=\"";
        // line 153
        echo $this->env->getExtension('routing')->getPath("fichier");
        echo "\">Les fichiers</a></li>
                        <li><a href=\"";
        // line 154
        echo $this->env->getExtension('routing')->getPath("alerte");
        echo "\" >Les alertes</a></li>
                    </ul>
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
        
        $__internal_700929afb09f88ec248feaeea5209ab5b9aa6828b035589ba76c584b732d4b0e->leave($__internal_700929afb09f88ec248feaeea5209ab5b9aa6828b035589ba76c584b732d4b0e_prof);

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
        return array (  390 => 154,  386 => 153,  382 => 152,  364 => 136,  355 => 133,  352 => 132,  344 => 130,  342 => 129,  335 => 127,  329 => 126,  325 => 125,  319 => 124,  313 => 123,  307 => 122,  301 => 121,  297 => 120,  294 => 119,  290 => 118,  268 => 98,  260 => 95,  252 => 93,  250 => 92,  245 => 90,  239 => 89,  233 => 88,  229 => 87,  223 => 86,  217 => 85,  211 => 84,  205 => 83,  201 => 82,  198 => 81,  194 => 80,  172 => 60,  163 => 57,  160 => 56,  152 => 54,  150 => 53,  143 => 51,  137 => 50,  133 => 49,  127 => 48,  121 => 47,  115 => 46,  109 => 45,  105 => 44,  102 => 43,  98 => 42,  66 => 13,  62 => 12,  50 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
/*                 <a data-toggle="modal" data-target="#autres2" title="Voir la liste des avenants, fichiers, etc..." class='btn pc_skyblue_btn' style="font-size: 150%; margin-bottom: 2%;">Autres listes </a>*/
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
/*     */
/*     <div class="modal" style="top:25%" id="autres2"  aria-hidden="true">*/
/*         <div class="modal-dialog">*/
/*             <div class="modal-content">*/
/*                 <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>*/
/*                     <h4 class="modal-title custom_align" id="Heading">Autres listes</h4>*/
/*                 </div>*/
/*                 <div class="modal-body">*/
/*                     <ul>*/
/*                         <li><a href="{{ path('avenant') }}">Les avenants</a></li>*/
/*                         <li><a href="{{ path('fichier') }}">Les fichiers</a></li>*/
/*                         <li><a href="{{ path('alerte') }}" >Les alertes</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div> */
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
