<?php

/* PCFicheBundle:Alerte:show.html.twig */
class __TwigTemplate_cf087f6f5b5b511826f7df37f4f188d008f8924c2ff417757da3c82a0a44cedc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "PCFicheBundle:Alerte:show.html.twig", 1);
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
        $__internal_69b4604af2494435a4d2f43b4b2418712a03b62442836b4707a2ce5a0f779dda = $this->env->getExtension("native_profiler");
        $__internal_69b4604af2494435a4d2f43b4b2418712a03b62442836b4707a2ce5a0f779dda->enter($__internal_69b4604af2494435a4d2f43b4b2418712a03b62442836b4707a2ce5a0f779dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFicheBundle:Alerte:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69b4604af2494435a4d2f43b4b2418712a03b62442836b4707a2ce5a0f779dda->leave($__internal_69b4604af2494435a4d2f43b4b2418712a03b62442836b4707a2ce5a0f779dda_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ff6b0ca9ffe1a09a8b990b22322189d94dab4f4b63b6a0d4b8371b219554a49 = $this->env->getExtension("native_profiler");
        $__internal_1ff6b0ca9ffe1a09a8b990b22322189d94dab4f4b63b6a0d4b8371b219554a49->enter($__internal_1ff6b0ca9ffe1a09a8b990b22322189d94dab4f4b63b6a0d4b8371b219554a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h3>Alerte ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "intitule", array()), "html", null, true);
        echo "<small> du ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateAlerte", array()), "Y-m-d H:i"), "html", null, true);
        echo "</small></h3>
    <div class=\"row\">
        <div id=\"bouton\" class=\"col-sm-12 col-md-2 col-lg-2 sidebar\">
            <ul class=\"nav nav-sidebar\">
                <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("alerte");
        echo "\">Retour</a></li>
                <li><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("alerte_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">Editer</a>  </li>
                <li>";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
            </ul>
            
        </div>
        <div class=\"col-sm-12 col-md-10 col-lg-10\">
            <p>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "objet", array()), "html", null, true);
        echo "</p>
        </div>
    </div>
";
        
        $__internal_1ff6b0ca9ffe1a09a8b990b22322189d94dab4f4b63b6a0d4b8371b219554a49->leave($__internal_1ff6b0ca9ffe1a09a8b990b22322189d94dab4f4b63b6a0d4b8371b219554a49_prof);

    }

    public function getTemplateName()
    {
        return "PCFicheBundle:Alerte:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 15,  58 => 10,  54 => 9,  50 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h3>Alerte {{ entity.intitule }}<small> du {{ entity.dateAlerte|date('Y-m-d H:i') }}</small></h3>*/
/*     <div class="row">*/
/*         <div id="bouton" class="col-sm-12 col-md-2 col-lg-2 sidebar">*/
/*             <ul class="nav nav-sidebar">*/
/*                 <li><a href="{{ path('alerte') }}">Retour</a></li>*/
/*                 <li><a href="{{ path('alerte_edit', { 'id': entity.id }) }}">Editer</a>  </li>*/
/*                 <li>{{ form(delete_form) }}</li>*/
/*             </ul>*/
/*             */
/*         </div>*/
/*         <div class="col-sm-12 col-md-10 col-lg-10">*/
/*             <p>{{ entity.objet }}</p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
