<?php

/* PCFicheBundle:Fichier:edit.html.twig */
class __TwigTemplate_cd6c4241772e5811114c1a4e3e85af321d28b0598ac34e6e07655595670aab5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PCFicheBundle:Fichier:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce10d9e8b3bae8799cb6a7d75844df5ffd87dd82b1505ebbce8f54ab7abca557 = $this->env->getExtension("native_profiler");
        $__internal_ce10d9e8b3bae8799cb6a7d75844df5ffd87dd82b1505ebbce8f54ab7abca557->enter($__internal_ce10d9e8b3bae8799cb6a7d75844df5ffd87dd82b1505ebbce8f54ab7abca557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFicheBundle:Fichier:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce10d9e8b3bae8799cb6a7d75844df5ffd87dd82b1505ebbce8f54ab7abca557->leave($__internal_ce10d9e8b3bae8799cb6a7d75844df5ffd87dd82b1505ebbce8f54ab7abca557_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_985444bbc71c7a13746a4f726a110c5ff93a52a3a23850dc1dd0706a0348cf0e = $this->env->getExtension("native_profiler");
        $__internal_985444bbc71c7a13746a4f726a110c5ff93a52a3a23850dc1dd0706a0348cf0e->enter($__internal_985444bbc71c7a13746a4f726a110c5ff93a52a3a23850dc1dd0706a0348cf0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Fichier edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fichier");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_985444bbc71c7a13746a4f726a110c5ff93a52a3a23850dc1dd0706a0348cf0e->leave($__internal_985444bbc71c7a13746a4f726a110c5ff93a52a3a23850dc1dd0706a0348cf0e_prof);

    }

    public function getTemplateName()
    {
        return "PCFicheBundle:Fichier:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Fichier edit</h1>*/
/* */
/*     {{ form(edit_form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('fichier') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
