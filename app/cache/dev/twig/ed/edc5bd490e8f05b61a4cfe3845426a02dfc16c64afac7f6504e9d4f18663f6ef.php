<?php

/* SonataUserBundle:Profile:action.html.twig */
class __TwigTemplate_8f562307dc5df5db4fd83fe1c1f87668f8b2f9338c561cc886de779fdf87f02e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_page_breadcrumb' => array($this, 'block_sonata_page_breadcrumb'),
            'sonata_profile_title' => array($this, 'block_sonata_profile_title'),
            'sonata_profile_menu' => array($this, 'block_sonata_profile_menu'),
            'sonata_profile_content' => array($this, 'block_sonata_profile_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f14857fcea94451b9c23a3050f4be44c31480400edf7be3986779ec844de49b = $this->env->getExtension("native_profiler");
        $__internal_9f14857fcea94451b9c23a3050f4be44c31480400edf7be3986779ec844de49b->enter($__internal_9f14857fcea94451b9c23a3050f4be44c31480400edf7be3986779ec844de49b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Profile:action.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('sonata_page_breadcrumb', $context, $blocks);
        // line 20
        echo "
<h2>";
        // line 21
        $this->displayBlock('sonata_profile_title', $context, $blocks);
        echo "</h2>

<div class=\"sonata-user-show row row-fluid\">

    <div class=\"span2 col-lg-2\" style=\"padding: 8px 0;\">
        ";
        // line 26
        $this->displayBlock('sonata_profile_menu', $context, $blocks);
        // line 29
        echo "    </div>

    <div class=\"span10 col-lg-10\">
        ";
        // line 32
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "SonataUserBundle:Profile:action.html.twig", 32)->display($context);
        // line 33
        echo "
        ";
        // line 34
        $this->displayBlock('sonata_profile_content', $context, $blocks);
        // line 35
        echo "    </div>

</div>
";
        
        $__internal_9f14857fcea94451b9c23a3050f4be44c31480400edf7be3986779ec844de49b->leave($__internal_9f14857fcea94451b9c23a3050f4be44c31480400edf7be3986779ec844de49b_prof);

    }

    // line 12
    public function block_sonata_page_breadcrumb($context, array $blocks = array())
    {
        $__internal_4551dae3b92426f4ecc58ba059f45be5dbe55a63e672c69df5997defaa0f3beb = $this->env->getExtension("native_profiler");
        $__internal_4551dae3b92426f4ecc58ba059f45be5dbe55a63e672c69df5997defaa0f3beb->enter($__internal_4551dae3b92426f4ecc58ba059f45be5dbe55a63e672c69df5997defaa0f3beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_breadcrumb"));

        // line 13
        echo "    ";
        if ( !array_key_exists("breadcrumb_context", $context)) {
            // line 14
            echo "        ";
            $context["breadcrumb_context"] = "user_index";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div class=\"row-fluid clearfix\">
        ";
        // line 17
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("breadcrumb", array("context" => (isset($context["breadcrumb_context"]) ? $context["breadcrumb_context"] : $this->getContext($context, "breadcrumb_context")), "current_uri" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "requestUri", array()))));
        echo "
    </div>
";
        
        $__internal_4551dae3b92426f4ecc58ba059f45be5dbe55a63e672c69df5997defaa0f3beb->leave($__internal_4551dae3b92426f4ecc58ba059f45be5dbe55a63e672c69df5997defaa0f3beb_prof);

    }

    // line 21
    public function block_sonata_profile_title($context, array $blocks = array())
    {
        $__internal_e1cd938498bdc8be94566c2a313092605e43593b01c6c08ae05b6ba688bab7ca = $this->env->getExtension("native_profiler");
        $__internal_e1cd938498bdc8be94566c2a313092605e43593b01c6c08ae05b6ba688bab7ca->enter($__internal_e1cd938498bdc8be94566c2a313092605e43593b01c6c08ae05b6ba688bab7ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_title"));

        echo $this->env->getExtension('translator')->getTranslator()->trans("sonata_profile_title", array(), "SonataUserBundle");
        
        $__internal_e1cd938498bdc8be94566c2a313092605e43593b01c6c08ae05b6ba688bab7ca->leave($__internal_e1cd938498bdc8be94566c2a313092605e43593b01c6c08ae05b6ba688bab7ca_prof);

    }

    // line 26
    public function block_sonata_profile_menu($context, array $blocks = array())
    {
        $__internal_19449a37fd1b913936f006eb21b527cbc49560f8346f17cec43b0abbf331ee19 = $this->env->getExtension("native_profiler");
        $__internal_19449a37fd1b913936f006eb21b527cbc49560f8346f17cec43b0abbf331ee19->enter($__internal_19449a37fd1b913936f006eb21b527cbc49560f8346f17cec43b0abbf331ee19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_menu"));

        // line 27
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "sonata.user.block.menu"), array("current_uri" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "requestUri", array()))));
        echo "
        ";
        
        $__internal_19449a37fd1b913936f006eb21b527cbc49560f8346f17cec43b0abbf331ee19->leave($__internal_19449a37fd1b913936f006eb21b527cbc49560f8346f17cec43b0abbf331ee19_prof);

    }

    // line 34
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        $__internal_3a7b859ef9f17f30245103d7a01045c9a224366ac282ea066cad0062c939d74d = $this->env->getExtension("native_profiler");
        $__internal_3a7b859ef9f17f30245103d7a01045c9a224366ac282ea066cad0062c939d74d->enter($__internal_3a7b859ef9f17f30245103d7a01045c9a224366ac282ea066cad0062c939d74d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_content"));

        echo "";
        
        $__internal_3a7b859ef9f17f30245103d7a01045c9a224366ac282ea066cad0062c939d74d->leave($__internal_3a7b859ef9f17f30245103d7a01045c9a224366ac282ea066cad0062c939d74d_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Profile:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 34,  112 => 27,  106 => 26,  94 => 21,  84 => 17,  81 => 16,  78 => 15,  75 => 14,  72 => 13,  66 => 12,  56 => 35,  54 => 34,  51 => 33,  49 => 32,  44 => 29,  42 => 26,  34 => 21,  31 => 20,  29 => 12,  26 => 11,);
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
/* {% block sonata_page_breadcrumb %}*/
/*     {% if breadcrumb_context is not defined %}*/
/*         {% set breadcrumb_context = 'user_index' %}*/
/*     {% endif %}*/
/*     <div class="row-fluid clearfix">*/
/*         {{ sonata_block_render_event('breadcrumb', { 'context': breadcrumb_context, 'current_uri': app.request.requestUri }) }}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* <h2>{% block sonata_profile_title %}{% trans from 'SonataUserBundle' %}sonata_profile_title{% endtrans %}{% endblock %}</h2>*/
/* */
/* <div class="sonata-user-show row row-fluid">*/
/* */
/*     <div class="span2 col-lg-2" style="padding: 8px 0;">*/
/*         {% block sonata_profile_menu %}*/
/*             {{ sonata_block_render({'type': 'sonata.user.block.menu'}, {'current_uri': app.request.requestUri}) }}*/
/*         {% endblock %}*/
/*     </div>*/
/* */
/*     <div class="span10 col-lg-10">*/
/*         {% include 'SonataCoreBundle:FlashMessage:render.html.twig' %}*/
/* */
/*         {% block sonata_profile_content '' %}*/
/*     </div>*/
/* */
/* </div>*/
/* */
