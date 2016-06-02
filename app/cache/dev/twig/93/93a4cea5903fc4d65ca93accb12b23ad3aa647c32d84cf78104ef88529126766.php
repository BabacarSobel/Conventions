<?php

/* PCFicheBundle:Autre:show.html.twig */
class __TwigTemplate_166d32e6da97d207b070241dbc702759e9187dcfe2764d4de55208c440932f70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCFicheBundle::showLayout.html.twig", "PCFicheBundle:Autre:show.html.twig", 1);
        $this->blocks = array(
            'barre' => array($this, 'block_barre'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PCFicheBundle::showLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d322272c0a071047bd23d5ab0b430d87d18349a493bda950a0e5e0841129e694 = $this->env->getExtension("native_profiler");
        $__internal_d322272c0a071047bd23d5ab0b430d87d18349a493bda950a0e5e0841129e694->enter($__internal_d322272c0a071047bd23d5ab0b430d87d18349a493bda950a0e5e0841129e694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFicheBundle:Autre:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d322272c0a071047bd23d5ab0b430d87d18349a493bda950a0e5e0841129e694->leave($__internal_d322272c0a071047bd23d5ab0b430d87d18349a493bda950a0e5e0841129e694_prof);

    }

    // line 3
    public function block_barre($context, array $blocks = array())
    {
        $__internal_30b82531fb39f12cdabbb44531bda0be5c0d9d334481326fba8c216765a0f443 = $this->env->getExtension("native_profiler");
        $__internal_30b82531fb39f12cdabbb44531bda0be5c0d9d334481326fba8c216765a0f443->enter($__internal_30b82531fb39f12cdabbb44531bda0be5c0d9d334481326fba8c216765a0f443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barre"));

        // line 4
        echo "    <li><a id=\"\" name=\"\" class=\"pc_sidebar_element\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("autre_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"> Editer</a> </li>
    <li><a class=\"pc_sidebar_element\" data-placement=\"top\" data-toggle=\"modal\" data-target='#delete'>Supprimer</a></li>
    <li><a id=\"\" name=\"\" class=\"pc_sidebar_element\" href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("fiche");
        echo "\"> Retour à la liste</a></a></li>
";
        
        $__internal_30b82531fb39f12cdabbb44531bda0be5c0d9d334481326fba8c216765a0f443->leave($__internal_30b82531fb39f12cdabbb44531bda0be5c0d9d334481326fba8c216765a0f443_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_d99fdbe2ef19e130ff70244dcff2fa5bfc60309cb31e91722aedb23511e1a17a = $this->env->getExtension("native_profiler");
        $__internal_d99fdbe2ef19e130ff70244dcff2fa5bfc60309cb31e91722aedb23511e1a17a->enter($__internal_d99fdbe2ef19e130ff70244dcff2fa5bfc60309cb31e91722aedb23511e1a17a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <div class =\"pc_info_group form-horizontal\">
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Id</label>
                <div class='col-sm-4'>
                    <input disabled=\"disabled\" class=\"form-control\" value='";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "'/>
                </div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Type</label>
                <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type", array()), "nom", array()), "html", null, true);
        echo "'/></div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Sous type</label>
                <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sousType", array()), "nom", array()), "html", null, true);
        echo "'/></div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Etat de la demande</label>
                <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etatDemande", array()), "html", null, true);
        echo "'/></div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Intitulé de la demande</label>
                <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "intitule", array()), "html", null, true);
        echo "'/></div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Objet de la demande</label>
                <div class='col-sm-4'><textarea disabled=\"disabled\" class=\"form-control\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "objet", array()), "html", null, true);
        echo "</textarea></div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Etat de la convention</label>
                <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etatConvention", array()), "html", null, true);
        echo "'/></div>
            </div>
    </div>        
    <div class =\"pc_info_group form-horizontal\">      
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Co-contractant</label>
                <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cocontractant", array()), "html", null, true);
        echo "'/></div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Forme juridique du co-contractant</label>
                <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "formeJuridiqueCocontractant", array()), "html", null, true);
        echo "'/></div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Adresse siege</label>
                <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "adresseSiege", array()), "html", null, true);
        echo "'/></div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Numéro Siret</label>
                <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "numeroSiret", array()), "html", null, true);
        echo "'/></div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Code APE</label>
                <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "codeApe", array()), "html", null, true);
        echo "'/></div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Titre représentant</label>
                <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titreRepresentant", array()), "html", null, true);
        echo "'/></div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Nom représentant</label>
                <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomRepresentant", array()), "html", null, true);
        echo "'/></div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Prénom représentant</label>
                <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prenomRepresentant", array()), "html", null, true);
        echo "'/></div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Fonction représentant</label>
                <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fonctionRepresentant", array()), "html", null, true);
        echo "'/></div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Demandeur Polytech</label>
                <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "demandeurPolytech", array()), "html", null, true);
        echo "'/></div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Date d'effet</label>
                <div class='col-sm-4'>
                    ";
        // line 85
        if ((null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateEffet", array()))) {
            // line 86
            echo "                        <input disabled=\"disabled\" class=\"form-control\" value=''/>
                    ";
        } else {
            // line 88
            echo "                        <input disabled=\"disabled\" class=\"form-control\" value='";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateEffet", array()), "d/m/Y"), "html", null, true);
            echo "'/>
                    ";
        }
        // line 90
        echo "                </div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Date d'écheance</label>
                <div class='col-sm-4'>
                    ";
        // line 95
        if ((null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateEcheance", array()))) {
            // line 96
            echo "                        <input disabled=\"disabled\" class=\"form-control\" value=''/>
                    ";
        } else {
            // line 98
            echo "                        <input disabled=\"disabled\" class=\"form-control\" value='";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateEcheance", array()), "d/m/Y"), "html", null, true);
            echo "'/>
                    ";
        }
        // line 100
        echo "                </div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Reconduction tacite</label>
                <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "reconductionTacite", array()), "html", null, true);
        echo "'/></div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Validation juridique</label>
                <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "validationJuridique", array()), "html", null, true);
        echo "'/></div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Date de validation juridique</label>
                <div class='col-sm-4'>
                    ";
        // line 113
        if ((null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateValidationJuridique", array()))) {
            // line 114
            echo "                        <input disabled=\"disabled\" class=\"form-control\" value=''/>
                    ";
        } else {
            // line 116
            echo "                        <input disabled=\"disabled\" class=\"form-control\" value='";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateValidationJuridique", array()), "d/m/Y"), "html", null, true);
            echo "'/>
                    ";
        }
        // line 118
        echo "                </div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Validation par la direction</label>
                <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "validationDirection", array()), "html", null, true);
        echo "'/></div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Date de validation par la direction</label>
                <div class='col-sm-4'>
                    ";
        // line 127
        if ((null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateValidationDirection", array()))) {
            // line 128
            echo "                        <input disabled=\"disabled\" class=\"form-control\" value=''/>
                    ";
        } else {
            // line 130
            echo "                        <input disabled=\"disabled\" class=\"form-control\" value='";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateValidationDirection", array()), "d/m/Y"), "html", null, true);
            echo "'/>
                    ";
        }
        // line 132
        echo "                </div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Signature Polytech</label>
                <div class='col-sm-4'>
                        <input disabled=\"disabled\" class=\"form-control\" value='";
        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "signaturePolytech", array()), "html", null, true);
        echo "'/>
                </div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Date signature Polytech</label>
                <div class='col-sm-4'>
                    ";
        // line 143
        if ((null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateSignaturePolytech", array()))) {
            // line 144
            echo "                        <input disabled=\"disabled\" class=\"form-control\" value=''/>
                    ";
        } else {
            // line 146
            echo "                        <input disabled=\"disabled\" class=\"form-control\" value='";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateSignaturePolytech", array()), "d/m/Y"), "html", null, true);
            echo "'/>
                    ";
        }
        // line 148
        echo "                </div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Action demandée</label>
                <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 152
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "actionDemandee", array()), "html", null, true);
        echo "'/></div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Suivi d'action</label>
                <div class='col-sm-4'><textarea disabled=\"disabled\" class=\"form-control\">";
        // line 156
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "suiviActionTexte", array()), "html", null, true);
        echo "</textarea></div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Date de Suivi d'action</label>
                <div class='col-sm-4'>
                    ";
        // line 161
        if ((null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "suiviActionDate", array()))) {
            // line 162
            echo "                        <input disabled=\"disabled\" class=\"form-control\" value=''/>
                    ";
        } else {
            // line 164
            echo "                        <input disabled=\"disabled\" class=\"form-control\" value='";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "suiviActionDate", array()), "d/m/Y"), "html", null, true);
            echo "'/>
                    ";
        }
        // line 166
        echo "                </div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Observations</label>
                <div class='col-sm-4'><textarea disabled=\"disabled\" class=\"form-control\">";
        // line 170
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "observations", array()), "html", null, true);
        echo "</textarea></div>
                
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Flux financier</label>
                <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 175
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fluxFinancier", array()), "html", null, true);
        echo "'/></div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Réservation de fonds</label>
                <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 179
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "reservationFonds", array()), "html", null, true);
        echo "'/></div>
            </div>
    </div>        
";
        
        $__internal_d99fdbe2ef19e130ff70244dcff2fa5bfc60309cb31e91722aedb23511e1a17a->leave($__internal_d99fdbe2ef19e130ff70244dcff2fa5bfc60309cb31e91722aedb23511e1a17a_prof);

    }

    public function getTemplateName()
    {
        return "PCFicheBundle:Autre:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  363 => 179,  356 => 175,  348 => 170,  342 => 166,  336 => 164,  332 => 162,  330 => 161,  322 => 156,  315 => 152,  309 => 148,  303 => 146,  299 => 144,  297 => 143,  288 => 137,  281 => 132,  275 => 130,  271 => 128,  269 => 127,  261 => 122,  255 => 118,  249 => 116,  245 => 114,  243 => 113,  235 => 108,  228 => 104,  222 => 100,  216 => 98,  212 => 96,  210 => 95,  203 => 90,  197 => 88,  193 => 86,  191 => 85,  183 => 80,  176 => 76,  169 => 72,  162 => 68,  155 => 64,  148 => 60,  141 => 56,  134 => 52,  127 => 48,  120 => 44,  111 => 38,  104 => 34,  97 => 30,  90 => 26,  83 => 22,  76 => 18,  68 => 13,  62 => 9,  56 => 8,  47 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'PCFicheBundle::showLayout.html.twig' %}*/
/* */
/* {% block barre %}*/
/*     <li><a id="" name="" class="pc_sidebar_element" href="{{ path('autre_edit', { 'id': entity.id }) }}"> Editer</a> </li>*/
/*     <li><a class="pc_sidebar_element" data-placement="top" data-toggle="modal" data-target='#delete'>Supprimer</a></li>*/
/*     <li><a id="" name="" class="pc_sidebar_element" href="{{ path('fiche') }}"> Retour à la liste</a></a></li>*/
/* {% endblock %}*/
/* {% block content %}*/
/*     <div class ="pc_info_group form-horizontal">*/
/*             <div class="form-group">*/
/*                 <label class='col-sm-3 pc_label control-label'>Id</label>*/
/*                 <div class='col-sm-4'>*/
/*                     <input disabled="disabled" class="form-control" value='{{ entity.id }}'/>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class='col-sm-3 pc_label control-label'>Type</label>*/
/*                 <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.type.nom }}'/></div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class='col-sm-3 pc_label control-label'>Sous type</label>*/
/*                 <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.sousType.nom }}'/></div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class='col-sm-3 pc_label control-label'>Etat de la demande</label>*/
/*                 <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.etatDemande }}'/></div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class='col-sm-3 pc_label control-label'>Intitulé de la demande</label>*/
/*                 <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.intitule }}'/></div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class='col-sm-3 pc_label control-label'>Objet de la demande</label>*/
/*                 <div class='col-sm-4'><textarea disabled="disabled" class="form-control">{{ entity.objet }}</textarea></div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class='col-sm-3 pc_label control-label'>Etat de la convention</label>*/
/*                 <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.etatConvention }}'/></div>*/
/*             </div>*/
/*     </div>        */
/*     <div class ="pc_info_group form-horizontal">      */
/*             <div class="form-group">*/
/*                 <label class='col-sm-3 pc_label control-label'>Co-contractant</label>*/
/*                 <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.cocontractant }}'/></div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class='col-sm-3 pc_label control-label'>Forme juridique du co-contractant</label>*/
/*                 <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.formeJuridiqueCocontractant }}'/></div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class='col-sm-3 pc_label control-label'>Adresse siege</label>*/
/*                 <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.adresseSiege }}'/></div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class='col-sm-3 pc_label control-label'>Numéro Siret</label>*/
/*                 <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.numeroSiret }}'/></div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class='col-sm-3 pc_label control-label'>Code APE</label>*/
/*                 <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.codeApe }}'/></div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class='col-sm-3 pc_label control-label'>Titre représentant</label>*/
/*                 <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.titreRepresentant }}'/></div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class='col-sm-3 pc_label control-label'>Nom représentant</label>*/
/*                 <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.nomRepresentant }}'/></div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class='col-sm-3 pc_label control-label'>Prénom représentant</label>*/
/*                 <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.prenomRepresentant }}'/></div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class='col-sm-3 pc_label control-label'>Fonction représentant</label>*/
/*                 <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.fonctionRepresentant }}'/></div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class='col-sm-3 pc_label control-label'>Demandeur Polytech</label>*/
/*                 <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.demandeurPolytech }}'/></div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class='col-sm-3 pc_label control-label'>Date d'effet</label>*/
/*                 <div class='col-sm-4'>*/
/*                     {%if entity.dateEffet is null%}*/
/*                         <input disabled="disabled" class="form-control" value=''/>*/
/*                     {%else%}*/
/*                         <input disabled="disabled" class="form-control" value='{{ entity.dateEffet|date('d/m/Y') }}'/>*/
/*                     {%endif%}*/
/*                 </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class='col-sm-3 pc_label control-label'>Date d'écheance</label>*/
/*                 <div class='col-sm-4'>*/
/*                     {%if entity.dateEcheance is null%}*/
/*                         <input disabled="disabled" class="form-control" value=''/>*/
/*                     {%else%}*/
/*                         <input disabled="disabled" class="form-control" value='{{ entity.dateEcheance|date('d/m/Y') }}'/>*/
/*                     {%endif%}*/
/*                 </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class='col-sm-3 pc_label control-label'>Reconduction tacite</label>*/
/*                 <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.reconductionTacite }}'/></div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class='col-sm-3 pc_label control-label'>Validation juridique</label>*/
/*                 <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.validationJuridique }}'/></div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class='col-sm-3 pc_label control-label'>Date de validation juridique</label>*/
/*                 <div class='col-sm-4'>*/
/*                     {%if entity.dateValidationJuridique is null%}*/
/*                         <input disabled="disabled" class="form-control" value=''/>*/
/*                     {%else%}*/
/*                         <input disabled="disabled" class="form-control" value='{{ entity.dateValidationJuridique|date('d/m/Y')}}'/>*/
/*                     {%endif%}*/
/*                 </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class='col-sm-3 pc_label control-label'>Validation par la direction</label>*/
/*                 <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.validationDirection }}'/></div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class='col-sm-3 pc_label control-label'>Date de validation par la direction</label>*/
/*                 <div class='col-sm-4'>*/
/*                     {%if entity.dateValidationDirection is null%}*/
/*                         <input disabled="disabled" class="form-control" value=''/>*/
/*                     {%else%}*/
/*                         <input disabled="disabled" class="form-control" value='{{ entity.dateValidationDirection|date('d/m/Y') }}'/>*/
/*                     {%endif%}*/
/*                 </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class='col-sm-3 pc_label control-label'>Signature Polytech</label>*/
/*                 <div class='col-sm-4'>*/
/*                         <input disabled="disabled" class="form-control" value='{{ entity.signaturePolytech}}'/>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class='col-sm-3 pc_label control-label'>Date signature Polytech</label>*/
/*                 <div class='col-sm-4'>*/
/*                     {%if entity.dateSignaturePolytech is null%}*/
/*                         <input disabled="disabled" class="form-control" value=''/>*/
/*                     {%else%}*/
/*                         <input disabled="disabled" class="form-control" value='{{ entity.dateSignaturePolytech|date('d/m/Y') }}'/>*/
/*                     {%endif%}*/
/*                 </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class='col-sm-3 pc_label control-label'>Action demandée</label>*/
/*                 <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.actionDemandee }}'/></div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class='col-sm-3 pc_label control-label'>Suivi d'action</label>*/
/*                 <div class='col-sm-4'><textarea disabled="disabled" class="form-control">{{ entity.suiviActionTexte }}</textarea></div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class='col-sm-3 pc_label control-label'>Date de Suivi d'action</label>*/
/*                 <div class='col-sm-4'>*/
/*                     {%if entity.suiviActionDate is null%}*/
/*                         <input disabled="disabled" class="form-control" value=''/>*/
/*                     {%else%}*/
/*                         <input disabled="disabled" class="form-control" value='{{ entity.suiviActionDate|date('d/m/Y') }}'/>*/
/*                     {%endif%}*/
/*                 </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class='col-sm-3 pc_label control-label'>Observations</label>*/
/*                 <div class='col-sm-4'><textarea disabled="disabled" class="form-control">{{ entity.observations }}</textarea></div>*/
/*                 */
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class='col-sm-3 pc_label control-label'>Flux financier</label>*/
/*                 <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.fluxFinancier }}'/></div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class='col-sm-3 pc_label control-label'>Réservation de fonds</label>*/
/*                 <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.reservationFonds }}'/></div>*/
/*             </div>*/
/*     </div>        */
/* {% endblock %}*/
/* */
/* */
