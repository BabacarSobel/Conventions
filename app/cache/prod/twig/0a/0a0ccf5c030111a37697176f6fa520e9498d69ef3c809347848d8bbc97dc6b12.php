<?php

/* PCFicheBundle:PSCati:show.html.twig */
class __TwigTemplate_0ededcda244d4b5cd3470ef9bceb45a0bc71508cae3f486767d9a824ac5ae37e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCFicheBundle::showLayout.html.twig", "PCFicheBundle:PSCati:show.html.twig", 1);
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
        $__internal_ad3148631b3b144d17ce76f9db706dd4926a9af779deae840a38e9999a6f0235 = $this->env->getExtension("native_profiler");
        $__internal_ad3148631b3b144d17ce76f9db706dd4926a9af779deae840a38e9999a6f0235->enter($__internal_ad3148631b3b144d17ce76f9db706dd4926a9af779deae840a38e9999a6f0235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFicheBundle:PSCati:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad3148631b3b144d17ce76f9db706dd4926a9af779deae840a38e9999a6f0235->leave($__internal_ad3148631b3b144d17ce76f9db706dd4926a9af779deae840a38e9999a6f0235_prof);

    }

    // line 3
    public function block_barre($context, array $blocks = array())
    {
        $__internal_e9501c70c4daf43e905f9df3430e82d7372b8da62ad0b4eae6e49e6c6f5067e2 = $this->env->getExtension("native_profiler");
        $__internal_e9501c70c4daf43e905f9df3430e82d7372b8da62ad0b4eae6e49e6c6f5067e2->enter($__internal_e9501c70c4daf43e905f9df3430e82d7372b8da62ad0b4eae6e49e6c6f5067e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barre"));

        // line 4
        echo "<li><a id=\"\" name=\"\" class=\"pc_sidebar_element\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pscati_pdf", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">Générer une convention PDF <span class=\"fa fa-download\"></span></a></li>
    <li><a id=\"\" name=\"\" class=\"pc_sidebar_element\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pscati_word", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">Générer une convention Word <span class=\"fa fa-download\"></span></a></li>
    <li><a id=\"\" name=\"\" class=\"pc_sidebar_element\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pscati_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"> Editer</a> </li>
    <li><a class=\"pc_sidebar_element\" data-placement=\"top\" data-toggle=\"modal\" data-target='#delete'>Supprimer</a></li>
    <li><a id=\"\" name=\"\" class=\"pc_sidebar_element\" href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("fiche");
        echo "\"> Retour à la liste</a></a></li>
";
        
        $__internal_e9501c70c4daf43e905f9df3430e82d7372b8da62ad0b4eae6e49e6c6f5067e2->leave($__internal_e9501c70c4daf43e905f9df3430e82d7372b8da62ad0b4eae6e49e6c6f5067e2_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_15e6c205954e4ab186551d3bb7d8a062aab2ef2fadf45a0df8ea2a115301ca09 = $this->env->getExtension("native_profiler");
        $__internal_15e6c205954e4ab186551d3bb7d8a062aab2ef2fadf45a0df8ea2a115301ca09->enter($__internal_15e6c205954e4ab186551d3bb7d8a062aab2ef2fadf45a0df8ea2a115301ca09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "    <div class =\"pc_info_group form-horizontal\">
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Id</label>
                <div class='col-sm-4'>
                    <input disabled=\"disabled\" class=\"form-control\" value='";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "'/>
                </div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Type</label>
                <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type", array()), "nom", array()), "html", null, true);
        echo "'/></div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Sous type</label>
                <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sousType", array()), "nom", array()), "html", null, true);
        echo "'/></div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Etat de la demande</label>
                <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etatDemande", array()), "html", null, true);
        echo "'/></div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Intitulé de la demande</label>
                <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "intitule", array()), "html", null, true);
        echo "'/></div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Objet de la demande</label>
                <div class='col-sm-4'><textarea disabled=\"disabled\" class=\"form-control\">";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "objet", array()), "html", null, true);
        echo "</textarea></div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Etat de la convention</label>
                <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etatConvention", array()), "html", null, true);
        echo "'/></div>
            </div>
    </div>        
    <div class =\"pc_info_group form-horizontal\">      
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Co-contractant</label>
                <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cocontractant", array()), "html", null, true);
        echo "'/></div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Forme juridique du co-contractant</label>
                <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "formeJuridiqueCocontractant", array()), "html", null, true);
        echo "'/></div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Adresse siege</label>
                <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "adresseSiege", array()), "html", null, true);
        echo "'/></div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Numéro Siret</label>
                <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "numeroSiret", array()), "html", null, true);
        echo "'/></div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Code APE</label>
                <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "codeApe", array()), "html", null, true);
        echo "'/></div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Titre représentant</label>
                <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titreRepresentant", array()), "html", null, true);
        echo "'/></div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Nom représentant</label>
                <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomRepresentant", array()), "html", null, true);
        echo "'/></div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Prénom représentant</label>
                <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prenomRepresentant", array()), "html", null, true);
        echo "'/></div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Fonction représentant</label>
                <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fonctionRepresentant", array()), "html", null, true);
        echo "'/></div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Demandeur Polytech</label>
                <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "demandeurPolytech", array()), "html", null, true);
        echo "'/></div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Date d'effet</label>
                <div class='col-sm-4'>
                    ";
        // line 88
        if ((null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateEffet", array()))) {
            // line 89
            echo "                        <input disabled=\"disabled\" class=\"form-control\" value=''/>
                    ";
        } else {
            // line 91
            echo "                        <input disabled=\"disabled\" class=\"form-control\" value='";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateEffet", array()), "d/m/Y"), "html", null, true);
            echo "'/>
                    ";
        }
        // line 93
        echo "                </div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Date d'écheance</label>
                <div class='col-sm-4'>
                    ";
        // line 98
        if ((null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateEcheance", array()))) {
            // line 99
            echo "                        <input disabled=\"disabled\" class=\"form-control\" value=''/>
                    ";
        } else {
            // line 101
            echo "                        <input disabled=\"disabled\" class=\"form-control\" value='";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateEcheance", array()), "d/m/Y"), "html", null, true);
            echo "'/>
                    ";
        }
        // line 103
        echo "                </div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Reconduction tacite</label>
                <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "reconductionTacite", array()), "html", null, true);
        echo "'/></div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Validation juridique</label>
                <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "validationJuridique", array()), "html", null, true);
        echo "'/></div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Date de validation juridique</label>
                <div class='col-sm-4'>
                    ";
        // line 116
        if ((null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateValidationJuridique", array()))) {
            // line 117
            echo "                        <input disabled=\"disabled\" class=\"form-control\" value=''/>
                    ";
        } else {
            // line 119
            echo "                        <input disabled=\"disabled\" class=\"form-control\" value='";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateValidationJuridique", array()), "d/m/Y"), "html", null, true);
            echo "'/>
                    ";
        }
        // line 121
        echo "                </div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Validation par la direction</label>
                <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "validationDirection", array()), "html", null, true);
        echo "'/></div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Date de validation par la direction</label>
                <div class='col-sm-4'>
                    ";
        // line 130
        if ((null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateValidationDirection", array()))) {
            // line 131
            echo "                        <input disabled=\"disabled\" class=\"form-control\" value=''/>
                    ";
        } else {
            // line 133
            echo "                        <input disabled=\"disabled\" class=\"form-control\" value='";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateValidationDirection", array()), "d/m/Y"), "html", null, true);
            echo "'/>
                    ";
        }
        // line 135
        echo "                </div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Signature Polytech</label>
                <div class='col-sm-4'>
                        <input disabled=\"disabled\" class=\"form-control\" value='";
        // line 140
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "signaturePolytech", array()), "html", null, true);
        echo "'/>
                </div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Date signature Polytech</label>
                <div class='col-sm-4'>
                    ";
        // line 146
        if ((null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateSignaturePolytech", array()))) {
            // line 147
            echo "                        <input disabled=\"disabled\" class=\"form-control\" value=''/>
                    ";
        } else {
            // line 149
            echo "                        <input disabled=\"disabled\" class=\"form-control\" value='";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateSignaturePolytech", array()), "d/m/Y"), "html", null, true);
            echo "'/>
                    ";
        }
        // line 151
        echo "                </div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Action demandée</label>
                <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 155
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "actionDemandee", array()), "html", null, true);
        echo "'/></div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Suivi d'action</label>
                <div class='col-sm-4'><textarea disabled=\"disabled\" class=\"form-control\">";
        // line 159
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "suiviActionTexte", array()), "html", null, true);
        echo "</textarea></div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Date de Suivi d'action</label>
                <div class='col-sm-4'>
                    ";
        // line 164
        if ((null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "suiviActionDate", array()))) {
            // line 165
            echo "                        <input disabled=\"disabled\" class=\"form-control\" value=''/>
                    ";
        } else {
            // line 167
            echo "                        <input disabled=\"disabled\" class=\"form-control\" value='";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "suiviActionDate", array()), "d/m/Y"), "html", null, true);
            echo "'/>
                    ";
        }
        // line 169
        echo "                </div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Observations</label>
                <div class='col-sm-4'><textarea disabled=\"disabled\" class=\"form-control\">";
        // line 173
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "observations", array()), "html", null, true);
        echo "</textarea></div>
                
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Flux financier</label>
                <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 178
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fluxFinancier", array()), "html", null, true);
        echo "'/></div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Réservation de fonds</label>
                <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 182
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "reservationFonds", array()), "html", null, true);
        echo "'/></div>
            </div>
    </div>           
        <div class =\"pc_info_group form-horizontal\">

                <div class=\"form-group\">
                    <label class='col-sm-3 pc_label control-label'>Domaine de formation</label>
                    <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 189
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "domaineFormation", array()), "html", null, true);
        echo "'/></div>
                </div>
                <div class=\"form-group\">
                    <label class='col-sm-3 pc_label control-label'>Domaine de spécialité de la société</label>
                    <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 193
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "domaineSpecialiteSociete", array()), "html", null, true);
        echo "'/></div>
                </div>
                <div class=\"form-group\">
                    <label class='col-sm-3 pc_label control-label'>Département Polytech</label>
                    <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 197
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "departementPolytech", array()), "html", null, true);
        echo "'/></div>
                </div>
                <div class=\"form-group\">
                    <label class='col-sm-3 pc_label control-label'>Responsable du département</label>
                    <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 201
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "responsableDepartement", array()), "html", null, true);
        echo "'/></div>
                </div>
                <div class=\"form-group\">
                    <label class='col-sm-3 pc_label control-label'>Titre du projet</label>
                    <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 205
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titreProjet", array()), "html", null, true);
        echo "'/></div>
                </div>
                <div class=\"form-group\">
                    <label class='col-sm-3 pc_label control-label'>Année du projet PIFE</label>
                    <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 209
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "anneeProjetPIFE", array()), "html", null, true);
        echo "'/></div>
                </div>
                <div class=\"form-group\">
                    <label class='col-sm-3 pc_label control-label'>Titre de l'encadrant</label>
                    <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 213
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titreEncadrant", array()), "html", null, true);
        echo "'/></div>
                </div>
                <div class=\"form-group\">
                    <label class='col-sm-3 pc_label control-label'>Nom de de l'encadrant</label>
                    <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 217
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomEncadrant", array()), "html", null, true);
        echo "'/></div>
                </div>
                <div class=\"form-group\">
                    <label class='col-sm-3 pc_label control-label'>Prénom de de l'encadrant</label>
                    <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 221
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prenomEncadrant", array()), "html", null, true);
        echo "'/></div>
                </div>
                <div class=\"form-group\">
                    <label class='col-sm-3 pc_label control-label'>Titre du référent</label>
                    <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 225
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titreReferent", array()), "html", null, true);
        echo "'/></div>
                </div>
                <div class=\"form-group\">
                    <label class='col-sm-3 pc_label control-label'>Nom du référent</label>
                    <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 229
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomReferent", array()), "html", null, true);
        echo "'/></div>
                </div>
                <div class=\"form-group\">
                    <label class='col-sm-3 pc_label control-label'>Prénom du référent</label>
                    <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 233
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prenomReferent", array()), "html", null, true);
        echo "'/></div>
                </div>
                <div class=\"form-group\">
                    <label class='col-sm-3 pc_label control-label'>Montant TVA</label>
                    <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 237
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "montantTVA", array()), "html", null, true);
        echo "'/></div>
                </div>
                <div class=\"form-group\">
                    <label class='col-sm-3 pc_label control-label'>Montant TTC</label>
                    <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 241
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "montantTTC", array()), "html", null, true);
        echo "'/></div>
                </div>
                <div class=\"form-group\">
                    <label class='col-sm-3 pc_label control-label'>Première écheance</label>
                    <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 245
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "premiereEcheance", array()), "html", null, true);
        echo "'/></div>
                </div>
                <div class=\"form-group\">
                    <label class='col-sm-3 pc_label control-label'>Solde</label>
                    <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 249
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "solde", array()), "html", null, true);
        echo "'/></div>
                </div>
                <div class=\"form-group\">
                    <label class='col-sm-3 pc_label control-label'>Adresse d'envoi de la facture</label>
                    <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 253
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "adresseEnvoiFacture", array()), "html", null, true);
        echo "'/></div>
                </div>
                <div class=\"form-group\">
                    <label class='col-sm-3 pc_label control-label'>Annexe technique</label>
                    <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 257
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "annexeTechnique", array()), "html", null, true);
        echo "'/></div>
                </div>
                <div class=\"form-group\">
                    <label class='col-sm-3 pc_label control-label'>Annexe financière</label>
                    <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 261
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "annexeFinanciere", array()), "html", null, true);
        echo "'/></div>
                </div>
                <div class=\"form-group\">
                    <label class='col-sm-3 pc_label control-label'>Titre étudiant</label>
                    <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 265
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titreEtudiant", array()), "html", null, true);
        echo "'/></div>
                </div>
                <div class=\"form-group\">
                    <label class='col-sm-3 pc_label control-label'>Nom de l'étudiant</label>
                    <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 269
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomEtudiant", array()), "html", null, true);
        echo "'/></div>
                </div>
                <div class=\"form-group\">
                    <label class='col-sm-3 pc_label control-label'>Prénom de l'étudiant</label>
                    <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 273
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prenomEtudiant", array()), "html", null, true);
        echo "'/></div>
                </div>
                <div class=\"form-group\">
                    <label class='col-sm-3 pc_label control-label'>Adresse de l'étudiant</label>
                    <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 277
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "adresseEtudiant", array()), "html", null, true);
        echo "'/></div>
                </div>
                <div class=\"form-group\">
                    <label class='col-sm-3 pc_label control-label'>Date de naissance de l'étudiant</label>
                    <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 281
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateNaissanceEtudiant", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "'/></div>
                </div>
                <div class=\"form-group\">
                    <label class='col-sm-3 pc_label control-label'>Email de l'étudiant</label>
                    <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 285
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "emailEtudiant", array()), "html", null, true);
        echo "'/></div>
                </div>
                <div class=\"form-group\">
                    <label class='col-sm-3 pc_label control-label'>Numéro de convention PIFE</label>
                    <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 289
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "numeroConventionPIFE", array()), "html", null, true);
        echo "'/></div>
                </div>
        </div>
";
        
        $__internal_15e6c205954e4ab186551d3bb7d8a062aab2ef2fadf45a0df8ea2a115301ca09->leave($__internal_15e6c205954e4ab186551d3bb7d8a062aab2ef2fadf45a0df8ea2a115301ca09_prof);

    }

    public function getTemplateName()
    {
        return "PCFicheBundle:PSCati:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  556 => 289,  549 => 285,  542 => 281,  535 => 277,  528 => 273,  521 => 269,  514 => 265,  507 => 261,  500 => 257,  493 => 253,  486 => 249,  479 => 245,  472 => 241,  465 => 237,  458 => 233,  451 => 229,  444 => 225,  437 => 221,  430 => 217,  423 => 213,  416 => 209,  409 => 205,  402 => 201,  395 => 197,  388 => 193,  381 => 189,  371 => 182,  364 => 178,  356 => 173,  350 => 169,  344 => 167,  340 => 165,  338 => 164,  330 => 159,  323 => 155,  317 => 151,  311 => 149,  307 => 147,  305 => 146,  296 => 140,  289 => 135,  283 => 133,  279 => 131,  277 => 130,  269 => 125,  263 => 121,  257 => 119,  253 => 117,  251 => 116,  243 => 111,  236 => 107,  230 => 103,  224 => 101,  220 => 99,  218 => 98,  211 => 93,  205 => 91,  201 => 89,  199 => 88,  191 => 83,  184 => 79,  177 => 75,  170 => 71,  163 => 67,  156 => 63,  149 => 59,  142 => 55,  135 => 51,  128 => 47,  119 => 41,  112 => 37,  105 => 33,  98 => 29,  91 => 25,  84 => 21,  76 => 16,  70 => 12,  64 => 11,  55 => 8,  50 => 6,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'PCFicheBundle::showLayout.html.twig' %}*/
/* */
/* {% block barre -%}*/
/*     <li><a id="" name="" class="pc_sidebar_element" href="{{ path('pscati_pdf', { 'id': entity.id }) }}">Générer une convention PDF <span class="fa fa-download"></span></a></li>*/
/*     <li><a id="" name="" class="pc_sidebar_element" href="{{ path('pscati_word', { 'id': entity.id }) }}">Générer une convention Word <span class="fa fa-download"></span></a></li>*/
/*     <li><a id="" name="" class="pc_sidebar_element" href="{{ path('pscati_edit', { 'id': entity.id }) }}"> Editer</a> </li>*/
/*     <li><a class="pc_sidebar_element" data-placement="top" data-toggle="modal" data-target='#delete'>Supprimer</a></li>*/
/*     <li><a id="" name="" class="pc_sidebar_element" href="{{ path('fiche') }}"> Retour à la liste</a></a></li>*/
/* {% endblock %}*/
/* */
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
/*                         <input disabled="disabled" class="form-control" value='{{ entity.dateValidationJuridique|date('d/m/Y') }}'/>*/
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
/*                         <input disabled="disabled" class="form-control" value='{{ entity.signaturePolytech }}'/>*/
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
/*     </div>           */
/*         <div class ="pc_info_group form-horizontal">*/
/* */
/*                 <div class="form-group">*/
/*                     <label class='col-sm-3 pc_label control-label'>Domaine de formation</label>*/
/*                     <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.domaineFormation }}'/></div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label class='col-sm-3 pc_label control-label'>Domaine de spécialité de la société</label>*/
/*                     <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.domaineSpecialiteSociete }}'/></div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label class='col-sm-3 pc_label control-label'>Département Polytech</label>*/
/*                     <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.departementPolytech }}'/></div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label class='col-sm-3 pc_label control-label'>Responsable du département</label>*/
/*                     <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.responsableDepartement }}'/></div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label class='col-sm-3 pc_label control-label'>Titre du projet</label>*/
/*                     <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.titreProjet }}'/></div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label class='col-sm-3 pc_label control-label'>Année du projet PIFE</label>*/
/*                     <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.anneeProjetPIFE }}'/></div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label class='col-sm-3 pc_label control-label'>Titre de l'encadrant</label>*/
/*                     <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.titreEncadrant }}'/></div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label class='col-sm-3 pc_label control-label'>Nom de de l'encadrant</label>*/
/*                     <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.nomEncadrant }}'/></div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label class='col-sm-3 pc_label control-label'>Prénom de de l'encadrant</label>*/
/*                     <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.prenomEncadrant }}'/></div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label class='col-sm-3 pc_label control-label'>Titre du référent</label>*/
/*                     <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.titreReferent }}'/></div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label class='col-sm-3 pc_label control-label'>Nom du référent</label>*/
/*                     <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.nomReferent }}'/></div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label class='col-sm-3 pc_label control-label'>Prénom du référent</label>*/
/*                     <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.prenomReferent }}'/></div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label class='col-sm-3 pc_label control-label'>Montant TVA</label>*/
/*                     <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.montantTVA }}'/></div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label class='col-sm-3 pc_label control-label'>Montant TTC</label>*/
/*                     <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.montantTTC }}'/></div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label class='col-sm-3 pc_label control-label'>Première écheance</label>*/
/*                     <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.premiereEcheance }}'/></div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label class='col-sm-3 pc_label control-label'>Solde</label>*/
/*                     <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.solde }}'/></div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label class='col-sm-3 pc_label control-label'>Adresse d'envoi de la facture</label>*/
/*                     <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.adresseEnvoiFacture }}'/></div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label class='col-sm-3 pc_label control-label'>Annexe technique</label>*/
/*                     <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.annexeTechnique }}'/></div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label class='col-sm-3 pc_label control-label'>Annexe financière</label>*/
/*                     <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.annexeFinanciere }}'/></div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label class='col-sm-3 pc_label control-label'>Titre étudiant</label>*/
/*                     <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.titreEtudiant }}'/></div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label class='col-sm-3 pc_label control-label'>Nom de l'étudiant</label>*/
/*                     <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.nomEtudiant }}'/></div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label class='col-sm-3 pc_label control-label'>Prénom de l'étudiant</label>*/
/*                     <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.prenomEtudiant }}'/></div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label class='col-sm-3 pc_label control-label'>Adresse de l'étudiant</label>*/
/*                     <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.adresseEtudiant }}'/></div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label class='col-sm-3 pc_label control-label'>Date de naissance de l'étudiant</label>*/
/*                     <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.dateNaissanceEtudiant|date('Y-m-d H:i:s') }}'/></div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label class='col-sm-3 pc_label control-label'>Email de l'étudiant</label>*/
/*                     <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.emailEtudiant }}'/></div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label class='col-sm-3 pc_label control-label'>Numéro de convention PIFE</label>*/
/*                     <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.numeroConventionPIFE }}'/></div>*/
/*                 </div>*/
/*         </div>*/
/* {% endblock %}*/
/* */
