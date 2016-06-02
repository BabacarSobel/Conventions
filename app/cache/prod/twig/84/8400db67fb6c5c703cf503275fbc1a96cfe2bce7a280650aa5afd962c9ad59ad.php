<?php

/* SonataAdminBundle:CRUD:list_datetime.html.twig */
class __TwigTemplate_ddd39c7eed028a0455f2d4db03709aae9771125744598c34586c358de2226f19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_datetime.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5dd71d23c3e9b24d6643354b03f8af3dc4080f1a1d961ebe4d48815da02fdeba = $this->env->getExtension("native_profiler");
        $__internal_5dd71d23c3e9b24d6643354b03f8af3dc4080f1a1d961ebe4d48815da02fdeba->enter($__internal_5dd71d23c3e9b24d6643354b03f8af3dc4080f1a1d961ebe4d48815da02fdeba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_datetime.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5dd71d23c3e9b24d6643354b03f8af3dc4080f1a1d961ebe4d48815da02fdeba->leave($__internal_5dd71d23c3e9b24d6643354b03f8af3dc4080f1a1d961ebe4d48815da02fdeba_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_2f06c1287212a42f73a835766810159a0da385bbe7a3a3f8aa7ff68ac340d6d2 = $this->env->getExtension("native_profiler");
        $__internal_2f06c1287212a42f73a835766810159a0da385bbe7a3a3f8aa7ff68ac340d6d2->enter($__internal_2f06c1287212a42f73a835766810159a0da385bbe7a3a3f8aa7ff68ac340d6d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } elseif ($this->getAttribute($this->getAttribute(        // line 17
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "format", array())), "html", null, true);
        } else {
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
        }
        
        $__internal_2f06c1287212a42f73a835766810159a0da385bbe7a3a3f8aa7ff68ac340d6d2->leave($__internal_2f06c1287212a42f73a835766810159a0da385bbe7a3a3f8aa7ff68ac340d6d2_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 20,  45 => 18,  43 => 17,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field %}*/
/*     {%- if value is empty -%}*/
/*         &nbsp;*/
/*     {%- elseif field_description.options.format is defined -%}*/
/*         {{ value|date(field_description.options.format) }}*/
/*     {%- else -%}*/
/*         {{ value|date }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */
