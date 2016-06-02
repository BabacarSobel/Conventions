<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_e93f40d6e594fae67c63421d246912486a7341335072620ebc859e90c117909d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bcead764bcb041baacc234e2377d438ff2304094778f1e015c0f07659927ce54 = $this->env->getExtension("native_profiler");
        $__internal_bcead764bcb041baacc234e2377d438ff2304094778f1e015c0f07659927ce54->enter($__internal_bcead764bcb041baacc234e2377d438ff2304094778f1e015c0f07659927ce54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_bcead764bcb041baacc234e2377d438ff2304094778f1e015c0f07659927ce54->leave($__internal_bcead764bcb041baacc234e2377d438ff2304094778f1e015c0f07659927ce54_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}*/
/* */
