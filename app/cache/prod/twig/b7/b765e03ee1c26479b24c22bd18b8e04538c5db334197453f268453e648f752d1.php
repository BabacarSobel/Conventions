<?php

/* SonataAdminBundle:CRUD:list_inner_row.html.twig */
class __TwigTemplate_15ebc43e749d2fe22785f050e81d0e47a004c4b9d60078b9ae52906874b05759 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_inner_row.html.twig", "SonataAdminBundle:CRUD:list_inner_row.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_inner_row.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72eea207fbfa3d2a5c27b70b7cde77ea4c8c56b735285d8c71b008ae98a3ce28 = $this->env->getExtension("native_profiler");
        $__internal_72eea207fbfa3d2a5c27b70b7cde77ea4c8c56b735285d8c71b008ae98a3ce28->enter($__internal_72eea207fbfa3d2a5c27b70b7cde77ea4c8c56b735285d8c71b008ae98a3ce28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_inner_row.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72eea207fbfa3d2a5c27b70b7cde77ea4c8c56b735285d8c71b008ae98a3ce28->leave($__internal_72eea207fbfa3d2a5c27b70b7cde77ea4c8c56b735285d8c71b008ae98a3ce28_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_inner_row.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_list_inner_row.html.twig' %}*/
/* */
