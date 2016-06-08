<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_7311d45402a8c9c23f663c5f404c20e31c2a78c84f1eb2ea6301510fcd30ad19 extends Twig_Template
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
        $__internal_a7a4a5a517b2befe9ff88a6d1a41e6dbe60dcf814f7ce281d7caadc343c5f3c8 = $this->env->getExtension("native_profiler");
        $__internal_a7a4a5a517b2befe9ff88a6d1a41e6dbe60dcf814f7ce281d7caadc343c5f3c8->enter($__internal_a7a4a5a517b2befe9ff88a6d1a41e6dbe60dcf814f7ce281d7caadc343c5f3c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_a7a4a5a517b2befe9ff88a6d1a41e6dbe60dcf814f7ce281d7caadc343c5f3c8->leave($__internal_a7a4a5a517b2befe9ff88a6d1a41e6dbe60dcf814f7ce281d7caadc343c5f3c8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include 'TwigBundle:Exception:trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
