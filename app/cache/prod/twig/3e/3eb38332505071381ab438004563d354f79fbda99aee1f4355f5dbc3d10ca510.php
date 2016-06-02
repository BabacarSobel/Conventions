<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_7e0e49f3c6f2e573f2e4da5b831aba664507841bec5e3a92f43f5756f8c4cc6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_94ba8114e6582b98d76636d3ff3a9e5b4fdc7b5504b156cc3c7117db6e0a6c20 = $this->env->getExtension("native_profiler");
        $__internal_94ba8114e6582b98d76636d3ff3a9e5b4fdc7b5504b156cc3c7117db6e0a6c20->enter($__internal_94ba8114e6582b98d76636d3ff3a9e5b4fdc7b5504b156cc3c7117db6e0a6c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94ba8114e6582b98d76636d3ff3a9e5b4fdc7b5504b156cc3c7117db6e0a6c20->leave($__internal_94ba8114e6582b98d76636d3ff3a9e5b4fdc7b5504b156cc3c7117db6e0a6c20_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}*/
/* */
