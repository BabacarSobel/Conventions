<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_2060ffaca6782fbfbba37a05ddff949e53e6406e3c4821479cfe6bad52e91853 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c663698c3c31649257a40643ca2e6b4de16e929cf1f54b707bf301a5493304d2 = $this->env->getExtension("native_profiler");
        $__internal_c663698c3c31649257a40643ca2e6b4de16e929cf1f54b707bf301a5493304d2->enter($__internal_c663698c3c31649257a40643ca2e6b4de16e929cf1f54b707bf301a5493304d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_c663698c3c31649257a40643ca2e6b4de16e929cf1f54b707bf301a5493304d2->leave($__internal_c663698c3c31649257a40643ca2e6b4de16e929cf1f54b707bf301a5493304d2_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_8ab82734621634cb5f3699de1cb5cfd5a6368c8447fbf97545962bfe1c18335a = $this->env->getExtension("native_profiler");
        $__internal_8ab82734621634cb5f3699de1cb5cfd5a6368c8447fbf97545962bfe1c18335a->enter($__internal_8ab82734621634cb5f3699de1cb5cfd5a6368c8447fbf97545962bfe1c18335a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_8ab82734621634cb5f3699de1cb5cfd5a6368c8447fbf97545962bfe1c18335a->leave($__internal_8ab82734621634cb5f3699de1cb5cfd5a6368c8447fbf97545962bfe1c18335a_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
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
/* <div id="cms-block-{{ block.id }}" class="cms-block cms-block-element">*/
/*     {% block block %}EMPTY CONTENT{% endblock %}*/
/* </div>*/
/* */
