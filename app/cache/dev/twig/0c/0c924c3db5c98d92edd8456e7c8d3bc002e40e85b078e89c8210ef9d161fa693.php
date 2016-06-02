<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_cd7f3095c3003a66d3fafc1e0ba53ba3e333d059d3f852f8eb107c08feed6de2 extends Twig_Template
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
        $__internal_4488bcf4f05e1a8edef647d8cdd9539c546e8249fc676113f6d88b8fd9666458 = $this->env->getExtension("native_profiler");
        $__internal_4488bcf4f05e1a8edef647d8cdd9539c546e8249fc676113f6d88b8fd9666458->enter($__internal_4488bcf4f05e1a8edef647d8cdd9539c546e8249fc676113f6d88b8fd9666458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4488bcf4f05e1a8edef647d8cdd9539c546e8249fc676113f6d88b8fd9666458->leave($__internal_4488bcf4f05e1a8edef647d8cdd9539c546e8249fc676113f6d88b8fd9666458_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9aac610c1e44479273ebb2df532acb16ea5ddbd3e1abec14d26b2062c63c079a = $this->env->getExtension("native_profiler");
        $__internal_9aac610c1e44479273ebb2df532acb16ea5ddbd3e1abec14d26b2062c63c079a->enter($__internal_9aac610c1e44479273ebb2df532acb16ea5ddbd3e1abec14d26b2062c63c079a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9aac610c1e44479273ebb2df532acb16ea5ddbd3e1abec14d26b2062c63c079a->leave($__internal_9aac610c1e44479273ebb2df532acb16ea5ddbd3e1abec14d26b2062c63c079a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd6518c420a053e479616077515e21545a5f40acd24b725d637122b695698fdb = $this->env->getExtension("native_profiler");
        $__internal_dd6518c420a053e479616077515e21545a5f40acd24b725d637122b695698fdb->enter($__internal_dd6518c420a053e479616077515e21545a5f40acd24b725d637122b695698fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_dd6518c420a053e479616077515e21545a5f40acd24b725d637122b695698fdb->leave($__internal_dd6518c420a053e479616077515e21545a5f40acd24b725d637122b695698fdb_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_84be34297e5b6c326e40d5546adaf7ae7f9b6fc4857a22631bb808c1cd345fb6 = $this->env->getExtension("native_profiler");
        $__internal_84be34297e5b6c326e40d5546adaf7ae7f9b6fc4857a22631bb808c1cd345fb6->enter($__internal_84be34297e5b6c326e40d5546adaf7ae7f9b6fc4857a22631bb808c1cd345fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_84be34297e5b6c326e40d5546adaf7ae7f9b6fc4857a22631bb808c1cd345fb6->leave($__internal_84be34297e5b6c326e40d5546adaf7ae7f9b6fc4857a22631bb808c1cd345fb6_prof);

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
