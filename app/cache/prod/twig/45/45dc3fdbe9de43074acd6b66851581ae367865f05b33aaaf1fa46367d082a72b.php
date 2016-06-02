<?php

/* SonataAdminBundle:Core:create_button.html.twig */
class __TwigTemplate_251d8404c90cdbd51c224275df1a1276847298a8ba96d48ea39ef5230671d9eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        $this->parent = $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:Core:create_button.html.twig", 15);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6298ce411814b4dabe5e7b74c0a1dcfd26302c6b425c183c798785ef75bf76e2 = $this->env->getExtension("native_profiler");
        $__internal_6298ce411814b4dabe5e7b74c0a1dcfd26302c6b425c183c798785ef75bf76e2->enter($__internal_6298ce411814b4dabe5e7b74c0a1dcfd26302c6b425c183c798785ef75bf76e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:create_button.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6298ce411814b4dabe5e7b74c0a1dcfd26302c6b425c183c798785ef75bf76e2->leave($__internal_6298ce411814b4dabe5e7b74c0a1dcfd26302c6b425c183c798785ef75bf76e2_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 15,);
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
/* {# DEPRECATED #}*/
/* {# This file is kept here for backward compatibility - Rather use SonataAdminBundle:Button:create_button.html.twig #}*/
/* */
/* {% extends 'SonataAdminBundle:Button:create_button.html.twig' %}*/
