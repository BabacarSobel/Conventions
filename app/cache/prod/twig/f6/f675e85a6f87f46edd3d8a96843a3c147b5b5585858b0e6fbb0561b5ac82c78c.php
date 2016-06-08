<?php

/* ::base.html.twig */
class __TwigTemplate_927b5edb6d79f976c49f040783fbfdfee31cf5e3eee7b509e3186377a4fcf056 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e021c7843b12bbd7daf8fef7082a7eb839422b2f5773f0a6fa9bfa045b6112f = $this->env->getExtension("native_profiler");
        $__internal_3e021c7843b12bbd7daf8fef7082a7eb839422b2f5773f0a6fa9bfa045b6112f->enter($__internal_3e021c7843b12bbd7daf8fef7082a7eb839422b2f5773f0a6fa9bfa045b6112f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_3e021c7843b12bbd7daf8fef7082a7eb839422b2f5773f0a6fa9bfa045b6112f->leave($__internal_3e021c7843b12bbd7daf8fef7082a7eb839422b2f5773f0a6fa9bfa045b6112f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_93dfe37575ffcb761a20d8eebfc8e45b90a45a435111019fa26f1dceb3ed3e32 = $this->env->getExtension("native_profiler");
        $__internal_93dfe37575ffcb761a20d8eebfc8e45b90a45a435111019fa26f1dceb3ed3e32->enter($__internal_93dfe37575ffcb761a20d8eebfc8e45b90a45a435111019fa26f1dceb3ed3e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_93dfe37575ffcb761a20d8eebfc8e45b90a45a435111019fa26f1dceb3ed3e32->leave($__internal_93dfe37575ffcb761a20d8eebfc8e45b90a45a435111019fa26f1dceb3ed3e32_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_15b332d127e4c7a9e785543cb22fb0498cb9f684745a35d21cc6aa60ffff549f = $this->env->getExtension("native_profiler");
        $__internal_15b332d127e4c7a9e785543cb22fb0498cb9f684745a35d21cc6aa60ffff549f->enter($__internal_15b332d127e4c7a9e785543cb22fb0498cb9f684745a35d21cc6aa60ffff549f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_15b332d127e4c7a9e785543cb22fb0498cb9f684745a35d21cc6aa60ffff549f->leave($__internal_15b332d127e4c7a9e785543cb22fb0498cb9f684745a35d21cc6aa60ffff549f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e91f76882e9ab3910da831174f0498cbcb6f9449252c7318845aa8a134b7797 = $this->env->getExtension("native_profiler");
        $__internal_9e91f76882e9ab3910da831174f0498cbcb6f9449252c7318845aa8a134b7797->enter($__internal_9e91f76882e9ab3910da831174f0498cbcb6f9449252c7318845aa8a134b7797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9e91f76882e9ab3910da831174f0498cbcb6f9449252c7318845aa8a134b7797->leave($__internal_9e91f76882e9ab3910da831174f0498cbcb6f9449252c7318845aa8a134b7797_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e6dc99febc2f193169642f436bb9ad2def480631732d49e528d61c0cbb64ddec = $this->env->getExtension("native_profiler");
        $__internal_e6dc99febc2f193169642f436bb9ad2def480631732d49e528d61c0cbb64ddec->enter($__internal_e6dc99febc2f193169642f436bb9ad2def480631732d49e528d61c0cbb64ddec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e6dc99febc2f193169642f436bb9ad2def480631732d49e528d61c0cbb64ddec->leave($__internal_e6dc99febc2f193169642f436bb9ad2def480631732d49e528d61c0cbb64ddec_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
