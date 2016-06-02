<?php

/* PCFicheBundle:ChartePartenariat:show.html.twig */
class __TwigTemplate_da1701452a2f9f2d3528dcc3cb73ec3d8077cf3578d0c91c0fc037975e26355b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PCFicheBundle::showLayout.html.twig", "PCFicheBundle:ChartePartenariat:show.html.twig", 1);
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
        $__internal_49e54db3c7832cbb2b5764f67d12fed38c7d1405728271cee41dd1dbea8295f6 = $this->env->getExtension("native_profiler");
        $__internal_49e54db3c7832cbb2b5764f67d12fed38c7d1405728271cee41dd1dbea8295f6->enter($__internal_49e54db3c7832cbb2b5764f67d12fed38c7d1405728271cee41dd1dbea8295f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFicheBundle:ChartePartenariat:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49e54db3c7832cbb2b5764f67d12fed38c7d1405728271cee41dd1dbea8295f6->leave($__internal_49e54db3c7832cbb2b5764f67d12fed38c7d1405728271cee41dd1dbea8295f6_prof);

    }

    // line 3
    public function block_barre($context, array $blocks = array())
    {
        $__internal_328ac93e1bbe431189e1d59dd6ba5069681505a2859f9403f437e0315a0dd19c = $this->env->getExtension("native_profiler");
        $__internal_328ac93e1bbe431189e1d59dd6ba5069681505a2859f9403f437e0315a0dd19c->enter($__internal_328ac93e1bbe431189e1d59dd6ba5069681505a2859f9403f437e0315a0dd19c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barre"));

        // line 4
        echo "    <li><a id=\"\" name=\"\" class=\"pc_sidebar_element\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chartepartenariat_pdf", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">Générer une convention PDF <span class=\"fa fa-download\"></span></a></li>
    <li><a id=\"\" name=\"\" class=\"pc_sidebar_element\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chartepartenariat_word", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">Générer une convention Word <span class=\"fa fa-download\"></span></a></li>
    <li><a id=\"\" name=\"\"  class=\"pc_sidebar_element\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("chartepartenariat_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\"> Editer</a> </li>
    <li><a class=\"pc_sidebar_element\" data-placement=\"top\" data-toggle=\"modal\" data-target='#delete'>Supprimer</a></li>
    <li><a id=\"\" name=\"\" class=\"pc_sidebar_element\" href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("fiche");
        echo "\"> Retour à la liste</a></a></li>
";
        
        $__internal_328ac93e1bbe431189e1d59dd6ba5069681505a2859f9403f437e0315a0dd19c->leave($__internal_328ac93e1bbe431189e1d59dd6ba5069681505a2859f9403f437e0315a0dd19c_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_d00fa9548028352a9ebf3e1418e85b7ea9ffd1fee998384a44b35898c110a7a8 = $this->env->getExtension("native_profiler");
        $__internal_d00fa9548028352a9ebf3e1418e85b7ea9ffd1fee998384a44b35898c110a7a8->enter($__internal_d00fa9548028352a9ebf3e1418e85b7ea9ffd1fee998384a44b35898c110a7a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
            echo "                    <input disabled=\"disabled\" class=\"form-control\" value=''/>
                ";
        } else {
            // line 91
            echo "                    <input disabled=\"disabled\" class=\"form-control\" value='";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateEffet", array()), "d/m/Y"), "html", null, true);
            echo "'/>
                ";
        }
        // line 93
        echo "            </div>
        </div>
        <div class=\"form-group\">
            <label class='col-sm-3 pc_label control-label'>Date d'écheance</label>
            <div class='col-sm-4'>
                ";
        // line 98
        if ((null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateEcheance", array()))) {
            // line 99
            echo "                    <input disabled=\"disabled\" class=\"form-control\" value=''/>
                ";
        } else {
            // line 101
            echo "                    <input disabled=\"disabled\" class=\"form-control\" value='";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateEcheance", array()), "d/m/Y"), "html", null, true);
            echo "'/>
                ";
        }
        // line 103
        echo "            </div>
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
            echo "                    <input disabled=\"disabled\" class=\"form-control\" value=''/>
                ";
        } else {
            // line 119
            echo "                    <input disabled=\"disabled\" class=\"form-control\" value='";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateValidationJuridique", array()), "d/m/Y"), "html", null, true);
            echo "'/>
                ";
        }
        // line 121
        echo "            </div>
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
            echo "                    <input disabled=\"disabled\" class=\"form-control\" value=''/>
                ";
        } else {
            // line 133
            echo "                    <input disabled=\"disabled\" class=\"form-control\" value='";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateValidationDirection", array()), "d/m/Y"), "html", null, true);
            echo "'/>
                ";
        }
        // line 135
        echo "            </div>
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
                    <input disabled=\"disabled\" class=\"form-control\" value='";
        // line 146
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateSignaturePolytech", array()), "html", null, true);
        echo "'/>
            </div>
        </div>
        <div class=\"form-group\">
            <label class='col-sm-3 pc_label control-label'>Action demandée</label>
            <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 151
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "actionDemandee", array()), "html", null, true);
        echo "'/></div>
        </div>
        <div class=\"form-group\">
            <label class='col-sm-3 pc_label control-label'>Suivi d'action</label>
            <div class='col-sm-4'><textarea disabled=\"disabled\" class=\"form-control\">";
        // line 155
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "suiviActionTexte", array()), "html", null, true);
        echo "</textarea></div>
        </div>
        <div class=\"form-group\">
            <label class='col-sm-3 pc_label control-label'>Date de Suivi d'action</label>
            <div class='col-sm-4'>
                ";
        // line 160
        if ((null === $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "suiviActionDate", array()))) {
            // line 161
            echo "                    <input disabled=\"disabled\" class=\"form-control\" value=''/>
                ";
        } else {
            // line 163
            echo "                    <input disabled=\"disabled\" class=\"form-control\" value='";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "suiviActionDate", array()), "d/m/Y"), "html", null, true);
            echo "'/>
                ";
        }
        // line 165
        echo "            </div>
        </div>
        <div class=\"form-group\">
            <label class='col-sm-3 pc_label control-label'>Observations</label>
            <div class='col-sm-4'><textarea disabled=\"disabled\" class=\"form-control\">";
        // line 169
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "observations", array()), "html", null, true);
        echo "</textarea></div>

        </div>
        <div class=\"form-group\">
            <label class='col-sm-3 pc_label control-label'>Flux financier</label>
            <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 174
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fluxFinancier", array()), "html", null, true);
        echo "'/></div>
        </div>
        <div class=\"form-group\">
            <label class='col-sm-3 pc_label control-label'>Réservation de fonds</label>
            <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 178
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "reservationFonds", array()), "html", null, true);
        echo "'/></div>
        </div>
    </div>
    <div class =\"pc_info_group form-horizontal\">
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Date de versement de la taxe</label>
                <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 184
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateVersementTaxe", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "'/></div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Versement de la taxe</label>
                <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 188
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "versementTaxe", array()), "html", null, true);
        echo "'/></div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Titre du référent entreprise</label>
                <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 192
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titreReferentEntreprise", array()), "html", null, true);
        echo "'/></div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Nom du référent</label>
                <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 196
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomReferent", array()), "html", null, true);
        echo "'/></div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Prénom du référent</label>
                <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 200
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prenomReferent", array()), "html", null, true);
        echo "'/></div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>E-mail du référent</label>
                <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 204
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "emailReferent", array()), "html", null, true);
        echo "'/></div>
            </div>
            <div class=\"form-group\">
                <label class='col-sm-3 pc_label control-label'>Téléphone du référent</label>
                <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 208
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "telephoneReferent", array()), "html", null, true);
        echo "'/></div>
            </div>
    </div>
";
        
        $__internal_d00fa9548028352a9ebf3e1418e85b7ea9ffd1fee998384a44b35898c110a7a8->leave($__internal_d00fa9548028352a9ebf3e1418e85b7ea9ffd1fee998384a44b35898c110a7a8_prof);

    }

    public function getTemplateName()
    {
        return "PCFicheBundle:ChartePartenariat:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  412 => 208,  405 => 204,  398 => 200,  391 => 196,  384 => 192,  377 => 188,  370 => 184,  361 => 178,  354 => 174,  346 => 169,  340 => 165,  334 => 163,  330 => 161,  328 => 160,  320 => 155,  313 => 151,  305 => 146,  296 => 140,  289 => 135,  283 => 133,  279 => 131,  277 => 130,  269 => 125,  263 => 121,  257 => 119,  253 => 117,  251 => 116,  243 => 111,  236 => 107,  230 => 103,  224 => 101,  220 => 99,  218 => 98,  211 => 93,  205 => 91,  201 => 89,  199 => 88,  191 => 83,  184 => 79,  177 => 75,  170 => 71,  163 => 67,  156 => 63,  149 => 59,  142 => 55,  135 => 51,  128 => 47,  119 => 41,  112 => 37,  105 => 33,  98 => 29,  91 => 25,  84 => 21,  76 => 16,  70 => 12,  64 => 11,  55 => 8,  50 => 6,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'PCFicheBundle::showLayout.html.twig' %}*/
/* */
/* {% block barre %}*/
/*     <li><a id="" name="" class="pc_sidebar_element" href="{{ path('chartepartenariat_pdf', { 'id': entity.id }) }}">Générer une convention PDF <span class="fa fa-download"></span></a></li>*/
/*     <li><a id="" name="" class="pc_sidebar_element" href="{{ path('chartepartenariat_word', { 'id': entity.id }) }}">Générer une convention Word <span class="fa fa-download"></span></a></li>*/
/*     <li><a id="" name=""  class="pc_sidebar_element" href="{{ path('chartepartenariat_edit', { 'id': entity.id }) }}"> Editer</a> </li>*/
/*     <li><a class="pc_sidebar_element" data-placement="top" data-toggle="modal" data-target='#delete'>Supprimer</a></li>*/
/*     <li><a id="" name="" class="pc_sidebar_element" href="{{ path('fiche') }}"> Retour à la liste</a></a></li>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class ="pc_info_group form-horizontal">*/
/*         <div class="form-group">*/
/*             <label class='col-sm-3 pc_label control-label'>Id</label>*/
/*             <div class='col-sm-4'>*/
/*                 <input disabled="disabled" class="form-control" value='{{ entity.id }}'/>*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class='col-sm-3 pc_label control-label'>Type</label>*/
/*             <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.type.nom }}'/></div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class='col-sm-3 pc_label control-label'>Sous type</label>*/
/*             <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.sousType.nom }}'/></div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class='col-sm-3 pc_label control-label'>Etat de la demande</label>*/
/*             <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.etatDemande }}'/></div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class='col-sm-3 pc_label control-label'>Intitulé de la demande</label>*/
/*             <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.intitule }}'/></div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class='col-sm-3 pc_label control-label'>Objet de la demande</label>*/
/*             <div class='col-sm-4'><textarea disabled="disabled" class="form-control">{{ entity.objet }}</textarea></div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class='col-sm-3 pc_label control-label'>Etat de la convention</label>*/
/*             <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.etatConvention }}'/></div>*/
/*         </div>*/
/*     </div>        */
/*     <div class ="pc_info_group form-horizontal">      */
/*         <div class="form-group">*/
/*             <label class='col-sm-3 pc_label control-label'>Co-contractant</label>*/
/*             <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.cocontractant }}'/></div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class='col-sm-3 pc_label control-label'>Forme juridique du co-contractant</label>*/
/*             <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.formeJuridiqueCocontractant }}'/></div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class='col-sm-3 pc_label control-label'>Adresse siege</label>*/
/*             <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.adresseSiege }}'/></div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class='col-sm-3 pc_label control-label'>Numéro Siret</label>*/
/*             <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.numeroSiret }}'/></div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class='col-sm-3 pc_label control-label'>Code APE</label>*/
/*             <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.codeApe }}'/></div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class='col-sm-3 pc_label control-label'>Titre représentant</label>*/
/*             <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.titreRepresentant }}'/></div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class='col-sm-3 pc_label control-label'>Nom représentant</label>*/
/*             <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.nomRepresentant }}'/></div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class='col-sm-3 pc_label control-label'>Prénom représentant</label>*/
/*             <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.prenomRepresentant }}'/></div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class='col-sm-3 pc_label control-label'>Fonction représentant</label>*/
/*             <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.fonctionRepresentant }}'/></div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class='col-sm-3 pc_label control-label'>Demandeur Polytech</label>*/
/*             <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.demandeurPolytech }}'/></div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class='col-sm-3 pc_label control-label'>Date d'effet</label>*/
/*             <div class='col-sm-4'>*/
/*                 {%if entity.dateEffet is null%}*/
/*                     <input disabled="disabled" class="form-control" value=''/>*/
/*                 {%else%}*/
/*                     <input disabled="disabled" class="form-control" value='{{ entity.dateEffet|date('d/m/Y') }}'/>*/
/*                 {%endif%}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class='col-sm-3 pc_label control-label'>Date d'écheance</label>*/
/*             <div class='col-sm-4'>*/
/*                 {%if entity.dateEcheance is null%}*/
/*                     <input disabled="disabled" class="form-control" value=''/>*/
/*                 {%else%}*/
/*                     <input disabled="disabled" class="form-control" value='{{ entity.dateEcheance|date('d/m/Y') }}'/>*/
/*                 {%endif%}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class='col-sm-3 pc_label control-label'>Reconduction tacite</label>*/
/*             <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.reconductionTacite }}'/></div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class='col-sm-3 pc_label control-label'>Validation juridique</label>*/
/*             <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.validationJuridique }}'/></div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class='col-sm-3 pc_label control-label'>Date de validation juridique</label>*/
/*             <div class='col-sm-4'>*/
/*                 {%if entity.dateValidationJuridique is null%}*/
/*                     <input disabled="disabled" class="form-control" value=''/>*/
/*                 {%else%}*/
/*                     <input disabled="disabled" class="form-control" value='{{ entity.dateValidationJuridique|date('d/m/Y') }}'/>*/
/*                 {%endif%}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class='col-sm-3 pc_label control-label'>Validation par la direction</label>*/
/*             <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.validationDirection }}'/></div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class='col-sm-3 pc_label control-label'>Date de validation par la direction</label>*/
/*             <div class='col-sm-4'>*/
/*                 {%if entity.dateValidationDirection is null%}*/
/*                     <input disabled="disabled" class="form-control" value=''/>*/
/*                 {%else%}*/
/*                     <input disabled="disabled" class="form-control" value='{{ entity.dateValidationDirection|date('d/m/Y') }}'/>*/
/*                 {%endif%}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class='col-sm-3 pc_label control-label'>Signature Polytech</label>*/
/*             <div class='col-sm-4'>*/
/*                     <input disabled="disabled" class="form-control" value='{{ entity.signaturePolytech }}'/>*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class='col-sm-3 pc_label control-label'>Date signature Polytech</label>*/
/*             <div class='col-sm-4'>*/
/*                     <input disabled="disabled" class="form-control" value='{{ entity.dateSignaturePolytech}}'/>*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class='col-sm-3 pc_label control-label'>Action demandée</label>*/
/*             <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.actionDemandee }}'/></div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class='col-sm-3 pc_label control-label'>Suivi d'action</label>*/
/*             <div class='col-sm-4'><textarea disabled="disabled" class="form-control">{{ entity.suiviActionTexte }}</textarea></div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class='col-sm-3 pc_label control-label'>Date de Suivi d'action</label>*/
/*             <div class='col-sm-4'>*/
/*                 {%if entity.suiviActionDate is null%}*/
/*                     <input disabled="disabled" class="form-control" value=''/>*/
/*                 {%else%}*/
/*                     <input disabled="disabled" class="form-control" value='{{ entity.suiviActionDate|date('d/m/Y') }}'/>*/
/*                 {%endif%}*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class='col-sm-3 pc_label control-label'>Observations</label>*/
/*             <div class='col-sm-4'><textarea disabled="disabled" class="form-control">{{ entity.observations }}</textarea></div>*/
/* */
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class='col-sm-3 pc_label control-label'>Flux financier</label>*/
/*             <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.fluxFinancier }}'/></div>*/
/*         </div>*/
/*         <div class="form-group">*/
/*             <label class='col-sm-3 pc_label control-label'>Réservation de fonds</label>*/
/*             <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.reservationFonds }}'/></div>*/
/*         </div>*/
/*     </div>*/
/*     <div class ="pc_info_group form-horizontal">*/
/*             <div class="form-group">*/
/*                 <label class='col-sm-3 pc_label control-label'>Date de versement de la taxe</label>*/
/*                 <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.dateVersementTaxe|date('Y-m-d H:i:s') }}'/></div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class='col-sm-3 pc_label control-label'>Versement de la taxe</label>*/
/*                 <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.versementTaxe }}'/></div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class='col-sm-3 pc_label control-label'>Titre du référent entreprise</label>*/
/*                 <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.titreReferentEntreprise }}'/></div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class='col-sm-3 pc_label control-label'>Nom du référent</label>*/
/*                 <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.nomReferent }}'/></div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class='col-sm-3 pc_label control-label'>Prénom du référent</label>*/
/*                 <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.prenomReferent }}'/></div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class='col-sm-3 pc_label control-label'>E-mail du référent</label>*/
/*                 <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.emailReferent }}'/></div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*                 <label class='col-sm-3 pc_label control-label'>Téléphone du référent</label>*/
/*                 <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ entity.telephoneReferent }}'/></div>*/
/*             </div>*/
/*     </div>*/
/* {% endblock %}*/
