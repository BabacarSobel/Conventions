<?php

/* PCFicheBundle:Fichier:show.html.twig */
class __TwigTemplate_891b4e7aad1a8295da98e8aa745db691296e97cf6588673260a7aa00f22a5c3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "PCFicheBundle:Fichier:show.html.twig", 1);
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
        $__internal_c76b0d26972437ff801e2400316a8033b902b4b1b52092eec1015177adce80fa = $this->env->getExtension("native_profiler");
        $__internal_c76b0d26972437ff801e2400316a8033b902b4b1b52092eec1015177adce80fa->enter($__internal_c76b0d26972437ff801e2400316a8033b902b4b1b52092eec1015177adce80fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFicheBundle:Fichier:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c76b0d26972437ff801e2400316a8033b902b4b1b52092eec1015177adce80fa->leave($__internal_c76b0d26972437ff801e2400316a8033b902b4b1b52092eec1015177adce80fa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c25ec326dc1ca3df60e7a47ff250182caca4c8f24d2b3fc17aece7f75f23436a = $this->env->getExtension("native_profiler");
        $__internal_c25ec326dc1ca3df60e7a47ff250182caca4c8f24d2b3fc17aece7f75f23436a->enter($__internal_c25ec326dc1ca3df60e7a47ff250182caca4c8f24d2b3fc17aece7f75f23436a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"row\">
        <div id=\"bouton\" class=\"col-sm-12 col-md-2 col-lg-2 sidebar\">
            <ul class=\"nav nav-sidebar\">
                <li><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fiche_download", array("filename" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom", array()))), "html", null, true);
        echo "\">Télécharger</a></li>
                <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("pc_home");
        echo "\">Retour</a></li>
                <li><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fichier_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">Remplacer fichier</a>  </li>
                <li>";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
            </ul>
            
        </div>
        <div class=\"col-sm-12 col-md-10 col-lg-10\">
            <h3>Fichier ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom", array()), "html", null, true);
        echo "<small> du ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateDeCreation", array()), "Y-m-d H:i"), "html", null, true);
        echo "</small></h3>
            <p>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom", array()), "html", null, true);
        echo "</p>
        </div>
    </div>
";
        
        $__internal_c25ec326dc1ca3df60e7a47ff250182caca4c8f24d2b3fc17aece7f75f23436a->leave($__internal_c25ec326dc1ca3df60e7a47ff250182caca4c8f24d2b3fc17aece7f75f23436a_prof);

    }

    public function getTemplateName()
    {
        return "PCFicheBundle:Fichier:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 17,  65 => 16,  57 => 11,  53 => 10,  49 => 9,  45 => 8,  40 => 5,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     */
/*     <div class="row">*/
/*         <div id="bouton" class="col-sm-12 col-md-2 col-lg-2 sidebar">*/
/*             <ul class="nav nav-sidebar">*/
/*                 <li><a href="{{ path('fiche_download', { 'filename': entity.nom }) }}">Télécharger</a></li>*/
/*                 <li><a href="{{ path('pc_home') }}">Retour</a></li>*/
/*                 <li><a href="{{ path('fichier_edit', { 'id': entity.id }) }}">Remplacer fichier</a>  </li>*/
/*                 <li>{{ form(delete_form) }}</li>*/
/*             </ul>*/
/*             */
/*         </div>*/
/*         <div class="col-sm-12 col-md-10 col-lg-10">*/
/*             <h3>Fichier {{ entity.nom }}<small> du {{ entity.dateDeCreation|date('Y-m-d H:i') }}</small></h3>*/
/*             <p>{{ entity.nom }}</p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
