<?php

/* ::base.html.twig */
class __TwigTemplate_927b5edb6d79f976c49f040783fbfdfee31cf5e3eee7b509e3186377a4fcf056 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86362d317688b455d6b3267aa6bdc3784f54046fa92e031c3c049a5183feab6e = $this->env->getExtension("native_profiler");
        $__internal_86362d317688b455d6b3267aa6bdc3784f54046fa92e031c3c049a5183feab6e->enter($__internal_86362d317688b455d6b3267aa6bdc3784f54046fa92e031c3c049a5183feab6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_86362d317688b455d6b3267aa6bdc3784f54046fa92e031c3c049a5183feab6e->leave($__internal_86362d317688b455d6b3267aa6bdc3784f54046fa92e031c3c049a5183feab6e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ccb489d992ebe70fcd6672c9f35a434167bfba487953dc8959767dae4915d5f7 = $this->env->getExtension("native_profiler");
        $__internal_ccb489d992ebe70fcd6672c9f35a434167bfba487953dc8959767dae4915d5f7->enter($__internal_ccb489d992ebe70fcd6672c9f35a434167bfba487953dc8959767dae4915d5f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ccb489d992ebe70fcd6672c9f35a434167bfba487953dc8959767dae4915d5f7->leave($__internal_ccb489d992ebe70fcd6672c9f35a434167bfba487953dc8959767dae4915d5f7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_53c8cfc83dd09713d4f76b79ed9a90d2ab8ee1494393b5bf1cd248e518033660 = $this->env->getExtension("native_profiler");
        $__internal_53c8cfc83dd09713d4f76b79ed9a90d2ab8ee1494393b5bf1cd248e518033660->enter($__internal_53c8cfc83dd09713d4f76b79ed9a90d2ab8ee1494393b5bf1cd248e518033660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_53c8cfc83dd09713d4f76b79ed9a90d2ab8ee1494393b5bf1cd248e518033660->leave($__internal_53c8cfc83dd09713d4f76b79ed9a90d2ab8ee1494393b5bf1cd248e518033660_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e68d57191ff5b8bf07eee0e4c2311d8453ec40a965618fbe0ad0335bd14e75f8 = $this->env->getExtension("native_profiler");
        $__internal_e68d57191ff5b8bf07eee0e4c2311d8453ec40a965618fbe0ad0335bd14e75f8->enter($__internal_e68d57191ff5b8bf07eee0e4c2311d8453ec40a965618fbe0ad0335bd14e75f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e68d57191ff5b8bf07eee0e4c2311d8453ec40a965618fbe0ad0335bd14e75f8->leave($__internal_e68d57191ff5b8bf07eee0e4c2311d8453ec40a965618fbe0ad0335bd14e75f8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_78a1f9dad38e16d67d5546b7278c26164509f1fbc915a32e292d27b79e7de02a = $this->env->getExtension("native_profiler");
        $__internal_78a1f9dad38e16d67d5546b7278c26164509f1fbc915a32e292d27b79e7de02a->enter($__internal_78a1f9dad38e16d67d5546b7278c26164509f1fbc915a32e292d27b79e7de02a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_78a1f9dad38e16d67d5546b7278c26164509f1fbc915a32e292d27b79e7de02a->leave($__internal_78a1f9dad38e16d67d5546b7278c26164509f1fbc915a32e292d27b79e7de02a_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
