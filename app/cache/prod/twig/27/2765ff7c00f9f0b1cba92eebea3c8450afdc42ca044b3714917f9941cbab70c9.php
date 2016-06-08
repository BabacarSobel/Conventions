<?php

/* GenemuFormBundle:Form:stylesheet_layout.html.twig */
class __TwigTemplate_83cd27bd4e79df7c222f42e42e1d40b04b1896eb27b6e61792e4b350554c4246 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_stylesheet' => array($this, 'block_form_stylesheet'),
            'field_stylesheet' => array($this, 'block_field_stylesheet'),
            'button_stylesheet' => array($this, 'block_button_stylesheet'),
            'genemu_jquerycolor_stylesheet' => array($this, 'block_genemu_jquerycolor_stylesheet'),
            'genemu_jquerygeolocation_stylesheet' => array($this, 'block_genemu_jquerygeolocation_stylesheet'),
            'genemu_jqueryimage_stylesheet' => array($this, 'block_genemu_jqueryimage_stylesheet'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a294856c0d1a6bcfb314fe7aec7621279f0b353f9d2a415880236319385c55a = $this->env->getExtension("native_profiler");
        $__internal_5a294856c0d1a6bcfb314fe7aec7621279f0b353f9d2a415880236319385c55a->enter($__internal_5a294856c0d1a6bcfb314fe7aec7621279f0b353f9d2a415880236319385c55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GenemuFormBundle:Form:stylesheet_layout.html.twig"));

        // line 1
        $this->displayBlock('form_stylesheet', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('field_stylesheet', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('button_stylesheet', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('genemu_jquerycolor_stylesheet', $context, $blocks);
        // line 37
        echo "
";
        // line 38
        $this->displayBlock('genemu_jquerygeolocation_stylesheet', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('genemu_jqueryimage_stylesheet', $context, $blocks);
        
        $__internal_5a294856c0d1a6bcfb314fe7aec7621279f0b353f9d2a415880236319385c55a->leave($__internal_5a294856c0d1a6bcfb314fe7aec7621279f0b353f9d2a415880236319385c55a_prof);

    }

    // line 1
    public function block_form_stylesheet($context, array $blocks = array())
    {
        $__internal_ca97925110b457c4ccd62535d557455431e9a6ff118a4a4794867d18a5a9c8f1 = $this->env->getExtension("native_profiler");
        $__internal_ca97925110b457c4ccd62535d557455431e9a6ff118a4a4794867d18a5a9c8f1->enter($__internal_ca97925110b457c4ccd62535d557455431e9a6ff118a4a4794867d18a5a9c8f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_stylesheet"));

        // line 2
        ob_start();
        // line 3
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 4
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'stylesheet');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ca97925110b457c4ccd62535d557455431e9a6ff118a4a4794867d18a5a9c8f1->leave($__internal_ca97925110b457c4ccd62535d557455431e9a6ff118a4a4794867d18a5a9c8f1_prof);

    }

    // line 9
    public function block_field_stylesheet($context, array $blocks = array())
    {
        $__internal_0d318b833cbf1f00ee5f1c9e9ae972c248058ecbcbfa8ee93bdcf682e9d71445 = $this->env->getExtension("native_profiler");
        $__internal_0d318b833cbf1f00ee5f1c9e9ae972c248058ecbcbfa8ee93bdcf682e9d71445->enter($__internal_0d318b833cbf1f00ee5f1c9e9ae972c248058ecbcbfa8ee93bdcf682e9d71445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_stylesheet"));

        echo "";
        
        $__internal_0d318b833cbf1f00ee5f1c9e9ae972c248058ecbcbfa8ee93bdcf682e9d71445->leave($__internal_0d318b833cbf1f00ee5f1c9e9ae972c248058ecbcbfa8ee93bdcf682e9d71445_prof);

    }

    // line 11
    public function block_button_stylesheet($context, array $blocks = array())
    {
        $__internal_b2806becb37a16908489a52eeeeb4b99d9b1f4d1793c86eda04bf707955783f3 = $this->env->getExtension("native_profiler");
        $__internal_b2806becb37a16908489a52eeeeb4b99d9b1f4d1793c86eda04bf707955783f3->enter($__internal_b2806becb37a16908489a52eeeeb4b99d9b1f4d1793c86eda04bf707955783f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_stylesheet"));

        echo "";
        
        $__internal_b2806becb37a16908489a52eeeeb4b99d9b1f4d1793c86eda04bf707955783f3->leave($__internal_b2806becb37a16908489a52eeeeb4b99d9b1f4d1793c86eda04bf707955783f3_prof);

    }

    // line 13
    public function block_genemu_jquerycolor_stylesheet($context, array $blocks = array())
    {
        $__internal_a8a78c09031f91d2762a1881430d4f0f83e165187e83501af9da067933bc9bfc = $this->env->getExtension("native_profiler");
        $__internal_a8a78c09031f91d2762a1881430d4f0f83e165187e83501af9da067933bc9bfc->enter($__internal_a8a78c09031f91d2762a1881430d4f0f83e165187e83501af9da067933bc9bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jquerycolor_stylesheet"));

        // line 14
        ob_start();
        // line 15
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "image")) {
            // line 16
            echo "    <style type=\"text/css\" media=\"screen\">
        #";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "_color {
            background: url(";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/genemuform/images/select.png"), "html", null, true);
            echo ");
            width: 36px;
            height: 36px;
            position: relative;
            overflow: hidden;
        }

        #";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "_color div {
            background: url(";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/genemuform/images/select.png"), "html", null, true);
            echo ") center center;
            position: absolute;
            left: 3px;
            top: 3px;
            width: 30px;
            height: 30px;
        }
    </style>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a8a78c09031f91d2762a1881430d4f0f83e165187e83501af9da067933bc9bfc->leave($__internal_a8a78c09031f91d2762a1881430d4f0f83e165187e83501af9da067933bc9bfc_prof);

    }

    // line 38
    public function block_genemu_jquerygeolocation_stylesheet($context, array $blocks = array())
    {
        $__internal_93a8c530b1bb99c353190f63ae68d352787d8d17e81c66e20a809266bd33e788 = $this->env->getExtension("native_profiler");
        $__internal_93a8c530b1bb99c353190f63ae68d352787d8d17e81c66e20a809266bd33e788->enter($__internal_93a8c530b1bb99c353190f63ae68d352787d8d17e81c66e20a809266bd33e788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jquerygeolocation_stylesheet"));

        // line 39
        ob_start();
        // line 40
        echo "    <style type=\"text/css\" media=\"screen\">
        #";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_map {
            width: 300px;
            height: 300px;
        }
    </style>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_93a8c530b1bb99c353190f63ae68d352787d8d17e81c66e20a809266bd33e788->leave($__internal_93a8c530b1bb99c353190f63ae68d352787d8d17e81c66e20a809266bd33e788_prof);

    }

    // line 49
    public function block_genemu_jqueryimage_stylesheet($context, array $blocks = array())
    {
        $__internal_04deec443bf0a86af33485933324a09ac9c0b0c75c07ae37bf8c60e32af7099f = $this->env->getExtension("native_profiler");
        $__internal_04deec443bf0a86af33485933324a09ac9c0b0c75c07ae37bf8c60e32af7099f->enter($__internal_04deec443bf0a86af33485933324a09ac9c0b0c75c07ae37bf8c60e32af7099f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jqueryimage_stylesheet"));

        // line 50
        ob_start();
        // line 51
        echo "    <style type=\"text/css\" media=\"screen\">
        #";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_container {
            overflow: hidden;
        }

        #";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_preview {
            overflow: hidden;
            position: relative;
        }

        #";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_preview object, #";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_overlay {
            position: absolute;
            top: 0;
            right: 0;
            text-decoration: none;
            display: block;
            z-index: 361;
            width: 19px;
            height: 19px;

            background: url(";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/genemuform/images/edit.gif"), "html", null, true);
        echo ");
        }

        #";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_preview object {
            opacity: 0;
            z-index: 362;
        }

        #";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_container .left {
            float: left;
            position: relative;
        }

        #";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_options {
            padding: 0px;
            margin: 0px;
            list-style-type: none;
            position: absolute;
            bottom: 0;
            left: 0;
            z-index: 361;
        }

        #";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_options li {
            background: transparent url(";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/genemuform/images/icons.png"), "html", null, true);
        echo ");

            display: inline;
            float: left;
            width: 24px;
            height: 24px;
            cursor: pointer;
        }

        #";
        // line 104
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_options .rotate {
            background-position: 0 0;
        }

        #";
        // line 108
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_options .bw {
            background-position: 0 -24px;
        }

        #";
        // line 112
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_options .negative {
            background-position: -24px 0;
        }

        #";
        // line 116
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_options .sepia {
            background-position: -24px -24px;
        }

        #";
        // line 120
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_options .crop {
            background-position: -48px 0;
        }

        #";
        // line 124
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_options .blur {
            background-position: -48px -24px;
        }
        #";
        // line 127
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_options .loading {
            background: #FFF url(";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/genemuform/images/ajax-loader.gif"), "html", null, true);
        echo ") no-repeat;
            padding: 6px 0;
            height: 11px;
        }
    </style>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_04deec443bf0a86af33485933324a09ac9c0b0c75c07ae37bf8c60e32af7099f->leave($__internal_04deec443bf0a86af33485933324a09ac9c0b0c75c07ae37bf8c60e32af7099f_prof);

    }

    public function getTemplateName()
    {
        return "GenemuFormBundle:Form:stylesheet_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  323 => 128,  319 => 127,  313 => 124,  306 => 120,  299 => 116,  292 => 112,  285 => 108,  278 => 104,  266 => 95,  262 => 94,  249 => 84,  241 => 79,  233 => 74,  227 => 71,  212 => 61,  204 => 56,  197 => 52,  194 => 51,  192 => 50,  186 => 49,  172 => 41,  169 => 40,  167 => 39,  161 => 38,  143 => 26,  139 => 25,  129 => 18,  125 => 17,  122 => 16,  120 => 15,  118 => 14,  112 => 13,  100 => 11,  88 => 9,  73 => 4,  68 => 3,  66 => 2,  60 => 1,  53 => 49,  50 => 48,  48 => 38,  45 => 37,  43 => 13,  40 => 12,  38 => 11,  35 => 10,  33 => 9,  30 => 8,  28 => 1,);
    }
}
/* {% block form_stylesheet %}*/
/* {% spaceless %}*/
/*     {% for child in form %}*/
/*         {{ form_stylesheet(child) }}*/
/*     {% endfor %}*/
/* {% endspaceless %}*/
/* {% endblock form_stylesheet %}*/
/* */
/* {% block field_stylesheet "" %}*/
/* */
/* {% block button_stylesheet "" %}*/
/* */
/* {% block genemu_jquerycolor_stylesheet %}*/
/* {% spaceless %}*/
/* {% if widget == "image" %}*/
/*     <style type="text/css" media="screen">*/
/*         #{{ id }}_color {*/
/*             background: url({{ asset('bundles/genemuform/images/select.png') }});*/
/*             width: 36px;*/
/*             height: 36px;*/
/*             position: relative;*/
/*             overflow: hidden;*/
/*         }*/
/* */
/*         #{{ id }}_color div {*/
/*             background: url({{ asset('bundles/genemuform/images/select.png') }}) center center;*/
/*             position: absolute;*/
/*             left: 3px;*/
/*             top: 3px;*/
/*             width: 30px;*/
/*             height: 30px;*/
/*         }*/
/*     </style>*/
/* {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock genemu_jquerycolor_stylesheet %}*/
/* */
/* {% block genemu_jquerygeolocation_stylesheet %}*/
/* {% spaceless %}*/
/*     <style type="text/css" media="screen">*/
/*         #{{ id }}_map {*/
/*             width: 300px;*/
/*             height: 300px;*/
/*         }*/
/*     </style>*/
/* {% endspaceless %}*/
/* {% endblock genemu_jquerygeolocation_stylesheet %}*/
/* */
/* {% block genemu_jqueryimage_stylesheet %}*/
/* {% spaceless %}*/
/*     <style type="text/css" media="screen">*/
/*         #{{ id }}_container {*/
/*             overflow: hidden;*/
/*         }*/
/* */
/*         #{{ id }}_preview {*/
/*             overflow: hidden;*/
/*             position: relative;*/
/*         }*/
/* */
/*         #{{ id }}_preview object, #{{ id }}_overlay {*/
/*             position: absolute;*/
/*             top: 0;*/
/*             right: 0;*/
/*             text-decoration: none;*/
/*             display: block;*/
/*             z-index: 361;*/
/*             width: 19px;*/
/*             height: 19px;*/
/* */
/*             background: url({{ asset('bundles/genemuform/images/edit.gif') }});*/
/*         }*/
/* */
/*         #{{ id }}_preview object {*/
/*             opacity: 0;*/
/*             z-index: 362;*/
/*         }*/
/* */
/*         #{{ id }}_container .left {*/
/*             float: left;*/
/*             position: relative;*/
/*         }*/
/* */
/*         #{{ id }}_options {*/
/*             padding: 0px;*/
/*             margin: 0px;*/
/*             list-style-type: none;*/
/*             position: absolute;*/
/*             bottom: 0;*/
/*             left: 0;*/
/*             z-index: 361;*/
/*         }*/
/* */
/*         #{{ id }}_options li {*/
/*             background: transparent url({{ asset('bundles/genemuform/images/icons.png') }});*/
/* */
/*             display: inline;*/
/*             float: left;*/
/*             width: 24px;*/
/*             height: 24px;*/
/*             cursor: pointer;*/
/*         }*/
/* */
/*         #{{ id }}_options .rotate {*/
/*             background-position: 0 0;*/
/*         }*/
/* */
/*         #{{ id }}_options .bw {*/
/*             background-position: 0 -24px;*/
/*         }*/
/* */
/*         #{{ id }}_options .negative {*/
/*             background-position: -24px 0;*/
/*         }*/
/* */
/*         #{{ id }}_options .sepia {*/
/*             background-position: -24px -24px;*/
/*         }*/
/* */
/*         #{{ id }}_options .crop {*/
/*             background-position: -48px 0;*/
/*         }*/
/* */
/*         #{{ id }}_options .blur {*/
/*             background-position: -48px -24px;*/
/*         }*/
/*         #{{ id }}_options .loading {*/
/*             background: #FFF url({{ asset('bundles/genemuform/images/ajax-loader.gif') }}) no-repeat;*/
/*             padding: 6px 0;*/
/*             height: 11px;*/
/*         }*/
/*     </style>*/
/* {% endspaceless %}*/
/* {% endblock genemu_jqueryimage_stylesheet %}*/
/* */
