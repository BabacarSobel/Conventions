<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_fea8c0d1d595921683d03b2a4dea34bd52cb718ddad63cd5408f90edae363db0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bbe3be7cc11c9ac1c6829d3459b790f628f4c45dd138102754022907804f50c0 = $this->env->getExtension("native_profiler");
        $__internal_bbe3be7cc11c9ac1c6829d3459b790f628f4c45dd138102754022907804f50c0->enter($__internal_bbe3be7cc11c9ac1c6829d3459b790f628f4c45dd138102754022907804f50c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbe3be7cc11c9ac1c6829d3459b790f628f4c45dd138102754022907804f50c0->leave($__internal_bbe3be7cc11c9ac1c6829d3459b790f628f4c45dd138102754022907804f50c0_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}*/
/* */
