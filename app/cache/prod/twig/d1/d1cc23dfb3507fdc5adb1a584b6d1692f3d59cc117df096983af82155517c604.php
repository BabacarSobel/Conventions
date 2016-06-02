<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_7fff09c5941a5f66338530ca4e9e68e3c661fd77597aa56a5f509c2a468df1c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7c9eee172151bb0f5b79f36a07657e9ae777d8ad418cd018294f6a8789bc519 = $this->env->getExtension("native_profiler");
        $__internal_c7c9eee172151bb0f5b79f36a07657e9ae777d8ad418cd018294f6a8789bc519->enter($__internal_c7c9eee172151bb0f5b79f36a07657e9ae777d8ad418cd018294f6a8789bc519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7c9eee172151bb0f5b79f36a07657e9ae777d8ad418cd018294f6a8789bc519->leave($__internal_c7c9eee172151bb0f5b79f36a07657e9ae777d8ad418cd018294f6a8789bc519_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}*/
/* */
