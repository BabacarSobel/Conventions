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
        $__internal_2ab25e075ba1a18688e586c634ff3c68ed6959abb80150b2cfed87af82c130dd = $this->env->getExtension("native_profiler");
        $__internal_2ab25e075ba1a18688e586c634ff3c68ed6959abb80150b2cfed87af82c130dd->enter($__internal_2ab25e075ba1a18688e586c634ff3c68ed6959abb80150b2cfed87af82c130dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ab25e075ba1a18688e586c634ff3c68ed6959abb80150b2cfed87af82c130dd->leave($__internal_2ab25e075ba1a18688e586c634ff3c68ed6959abb80150b2cfed87af82c130dd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_383e401e11fca8f8c7a999443eec8c98fa15531a242e7289ca1710a258f5de4d = $this->env->getExtension("native_profiler");
        $__internal_383e401e11fca8f8c7a999443eec8c98fa15531a242e7289ca1710a258f5de4d->enter($__internal_383e401e11fca8f8c7a999443eec8c98fa15531a242e7289ca1710a258f5de4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_383e401e11fca8f8c7a999443eec8c98fa15531a242e7289ca1710a258f5de4d->leave($__internal_383e401e11fca8f8c7a999443eec8c98fa15531a242e7289ca1710a258f5de4d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f60219c9a205fbf92d4684f7103481a048fa4552e41b758f68e9f66e62b4975e = $this->env->getExtension("native_profiler");
        $__internal_f60219c9a205fbf92d4684f7103481a048fa4552e41b758f68e9f66e62b4975e->enter($__internal_f60219c9a205fbf92d4684f7103481a048fa4552e41b758f68e9f66e62b4975e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f60219c9a205fbf92d4684f7103481a048fa4552e41b758f68e9f66e62b4975e->leave($__internal_f60219c9a205fbf92d4684f7103481a048fa4552e41b758f68e9f66e62b4975e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_560c37f3e1cf9452d44dfb880316d3a84dc6bda7a701928defcb27ae3ba45d23 = $this->env->getExtension("native_profiler");
        $__internal_560c37f3e1cf9452d44dfb880316d3a84dc6bda7a701928defcb27ae3ba45d23->enter($__internal_560c37f3e1cf9452d44dfb880316d3a84dc6bda7a701928defcb27ae3ba45d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_560c37f3e1cf9452d44dfb880316d3a84dc6bda7a701928defcb27ae3ba45d23->leave($__internal_560c37f3e1cf9452d44dfb880316d3a84dc6bda7a701928defcb27ae3ba45d23_prof);

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
