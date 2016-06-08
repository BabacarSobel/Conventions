<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_41c7e241d69696c7692ed63468b19c7f0c6766d21ee4cc871d411da3b95c35c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae652e84be4fa7db1e2da59170ebfa6fcd88ca82cbbc4583c6e6ab346a4fad91 = $this->env->getExtension("native_profiler");
        $__internal_ae652e84be4fa7db1e2da59170ebfa6fcd88ca82cbbc4583c6e6ab346a4fad91->enter($__internal_ae652e84be4fa7db1e2da59170ebfa6fcd88ca82cbbc4583c6e6ab346a4fad91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae652e84be4fa7db1e2da59170ebfa6fcd88ca82cbbc4583c6e6ab346a4fad91->leave($__internal_ae652e84be4fa7db1e2da59170ebfa6fcd88ca82cbbc4583c6e6ab346a4fad91_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fcd99de7243c0f9f7d7627d587c34b08f82b1157623dc1f9eb9df799f79427a7 = $this->env->getExtension("native_profiler");
        $__internal_fcd99de7243c0f9f7d7627d587c34b08f82b1157623dc1f9eb9df799f79427a7->enter($__internal_fcd99de7243c0f9f7d7627d587c34b08f82b1157623dc1f9eb9df799f79427a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fcd99de7243c0f9f7d7627d587c34b08f82b1157623dc1f9eb9df799f79427a7->leave($__internal_fcd99de7243c0f9f7d7627d587c34b08f82b1157623dc1f9eb9df799f79427a7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b09070ad1fce7442a2dc6e56a29eeb1be036a50d1a74bb6bb826debca26f0671 = $this->env->getExtension("native_profiler");
        $__internal_b09070ad1fce7442a2dc6e56a29eeb1be036a50d1a74bb6bb826debca26f0671->enter($__internal_b09070ad1fce7442a2dc6e56a29eeb1be036a50d1a74bb6bb826debca26f0671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b09070ad1fce7442a2dc6e56a29eeb1be036a50d1a74bb6bb826debca26f0671->leave($__internal_b09070ad1fce7442a2dc6e56a29eeb1be036a50d1a74bb6bb826debca26f0671_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9c116c80cd2f15b52703e98cb068c4bd80b1eb1dd96cb36e6e820325d5c83cb = $this->env->getExtension("native_profiler");
        $__internal_c9c116c80cd2f15b52703e98cb068c4bd80b1eb1dd96cb36e6e820325d5c83cb->enter($__internal_c9c116c80cd2f15b52703e98cb068c4bd80b1eb1dd96cb36e6e820325d5c83cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_c9c116c80cd2f15b52703e98cb068c4bd80b1eb1dd96cb36e6e820325d5c83cb->leave($__internal_c9c116c80cd2f15b52703e98cb068c4bd80b1eb1dd96cb36e6e820325d5c83cb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
