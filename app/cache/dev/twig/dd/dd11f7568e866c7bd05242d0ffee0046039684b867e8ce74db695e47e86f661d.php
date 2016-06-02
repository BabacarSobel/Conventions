<?php

/* GenemuFormBundle:Form:jquery_layout.html.twig */
class __TwigTemplate_49cfc846adb31db46dc217750d923f119d297fab6b49b7b32097fda2d337f7eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_javascript' => array($this, 'block_form_javascript'),
            'field_javascript' => array($this, 'block_field_javascript'),
            'button_javascript' => array($this, 'block_button_javascript'),
            'genemu_captcha_javascript' => array($this, 'block_genemu_captcha_javascript'),
            'genemu_recaptcha_javascript' => array($this, 'block_genemu_recaptcha_javascript'),
            'genemu_tinymce_javascript' => array($this, 'block_genemu_tinymce_javascript'),
            'genemu_jquerydate_javascript' => array($this, 'block_genemu_jquerydate_javascript'),
            'genemu_jquerydate_javascript_prototype' => array($this, 'block_genemu_jquerydate_javascript_prototype'),
            'genemu_jqueryslider_javascript' => array($this, 'block_genemu_jqueryslider_javascript'),
            'genemu_jquerycolor_javascript' => array($this, 'block_genemu_jquerycolor_javascript'),
            'genemu_jqueryrating_javascript' => array($this, 'block_genemu_jqueryrating_javascript'),
            'genemu_jquerytokeninput_javascript' => array($this, 'block_genemu_jquerytokeninput_javascript'),
            'genemu_jqueryautocompleter_javascript' => array($this, 'block_genemu_jqueryautocompleter_javascript'),
            'genemu_jqueryautocomplete_javascript' => array($this, 'block_genemu_jqueryautocomplete_javascript'),
            'genemu_jquerychosen_javascript' => array($this, 'block_genemu_jquerychosen_javascript'),
            'genemu_jquerychosen_javascript_prototype' => array($this, 'block_genemu_jquerychosen_javascript_prototype'),
            'genemu_jquerygeolocation_javascript' => array($this, 'block_genemu_jquerygeolocation_javascript'),
            'genemu_jqueryfile_javascript' => array($this, 'block_genemu_jqueryfile_javascript'),
            'genemu_jqueryfile_javascript_prototype' => array($this, 'block_genemu_jqueryfile_javascript_prototype'),
            'genemu_jqueryimage_javascript' => array($this, 'block_genemu_jqueryimage_javascript'),
            'genemu_jqueryimage_javascript_prototype' => array($this, 'block_genemu_jqueryimage_javascript_prototype'),
            'genemu_jqueryselect2_javascript' => array($this, 'block_genemu_jqueryselect2_javascript'),
            'genemu_jqueryselect2_javascript_prototype' => array($this, 'block_genemu_jqueryselect2_javascript_prototype'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0cb87425fd931ff5a9208c325981ce337b934c3ed65caeecc32e389914092a27 = $this->env->getExtension("native_profiler");
        $__internal_0cb87425fd931ff5a9208c325981ce337b934c3ed65caeecc32e389914092a27->enter($__internal_0cb87425fd931ff5a9208c325981ce337b934c3ed65caeecc32e389914092a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GenemuFormBundle:Form:jquery_layout.html.twig"));

        // line 1
        $this->displayBlock('form_javascript', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('field_javascript', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('button_javascript', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('genemu_captcha_javascript', $context, $blocks);
        // line 32
        echo "
";
        // line 33
        $this->displayBlock('genemu_recaptcha_javascript', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('genemu_tinymce_javascript', $context, $blocks);
        // line 88
        echo "
";
        // line 89
        $this->displayBlock('genemu_jquerydate_javascript', $context, $blocks);
        // line 131
        echo "
";
        // line 132
        $this->displayBlock('genemu_jqueryslider_javascript', $context, $blocks);
        // line 149
        echo "
";
        // line 150
        $this->displayBlock('genemu_jquerycolor_javascript', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('genemu_jqueryrating_javascript', $context, $blocks);
        // line 197
        echo "
";
        // line 198
        $this->displayBlock('genemu_jquerytokeninput_javascript', $context, $blocks);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('genemu_jqueryautocompleter_javascript', $context, $blocks);
        // line 317
        echo "
";
        // line 318
        $this->displayBlock('genemu_jqueryautocomplete_javascript', $context, $blocks);
        // line 346
        echo "
";
        // line 347
        $this->displayBlock('genemu_jquerychosen_javascript', $context, $blocks);
        // line 364
        echo "
";
        // line 365
        $this->displayBlock('genemu_jquerygeolocation_javascript', $context, $blocks);
        // line 409
        echo "
";
        // line 410
        $this->displayBlock('genemu_jqueryfile_javascript', $context, $blocks);
        // line 487
        echo "
";
        // line 488
        $this->displayBlock('genemu_jqueryimage_javascript', $context, $blocks);
        // line 655
        echo "
";
        // line 656
        $this->displayBlock('genemu_jqueryselect2_javascript', $context, $blocks);
        // line 667
        echo "
";
        
        $__internal_0cb87425fd931ff5a9208c325981ce337b934c3ed65caeecc32e389914092a27->leave($__internal_0cb87425fd931ff5a9208c325981ce337b934c3ed65caeecc32e389914092a27_prof);

    }

    // line 1
    public function block_form_javascript($context, array $blocks = array())
    {
        $__internal_4a5c4a8abad1ee9cac8d0836b448f639cb44ac0c6bd8a85718b7fea60e6aa79c = $this->env->getExtension("native_profiler");
        $__internal_4a5c4a8abad1ee9cac8d0836b448f639cb44ac0c6bd8a85718b7fea60e6aa79c->enter($__internal_4a5c4a8abad1ee9cac8d0836b448f639cb44ac0c6bd8a85718b7fea60e6aa79c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_javascript"));

        // line 2
        ob_start();
        // line 3
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 4
            echo "        ";
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript($context["child"]);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4a5c4a8abad1ee9cac8d0836b448f639cb44ac0c6bd8a85718b7fea60e6aa79c->leave($__internal_4a5c4a8abad1ee9cac8d0836b448f639cb44ac0c6bd8a85718b7fea60e6aa79c_prof);

    }

    // line 9
    public function block_field_javascript($context, array $blocks = array())
    {
        $__internal_7f261f5f73c51a68bd8609d999501eee08841458cd932cf8e8d57b53e2972e49 = $this->env->getExtension("native_profiler");
        $__internal_7f261f5f73c51a68bd8609d999501eee08841458cd932cf8e8d57b53e2972e49->enter($__internal_7f261f5f73c51a68bd8609d999501eee08841458cd932cf8e8d57b53e2972e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_javascript"));

        echo "";
        
        $__internal_7f261f5f73c51a68bd8609d999501eee08841458cd932cf8e8d57b53e2972e49->leave($__internal_7f261f5f73c51a68bd8609d999501eee08841458cd932cf8e8d57b53e2972e49_prof);

    }

    // line 11
    public function block_button_javascript($context, array $blocks = array())
    {
        $__internal_d0cb50fe1184099a7b8b666140e73d3586f1712f7a0e306093d95e431cdce0a9 = $this->env->getExtension("native_profiler");
        $__internal_d0cb50fe1184099a7b8b666140e73d3586f1712f7a0e306093d95e431cdce0a9->enter($__internal_d0cb50fe1184099a7b8b666140e73d3586f1712f7a0e306093d95e431cdce0a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_javascript"));

        echo "";
        
        $__internal_d0cb50fe1184099a7b8b666140e73d3586f1712f7a0e306093d95e431cdce0a9->leave($__internal_d0cb50fe1184099a7b8b666140e73d3586f1712f7a0e306093d95e431cdce0a9_prof);

    }

    // line 13
    public function block_genemu_captcha_javascript($context, array $blocks = array())
    {
        $__internal_cbd8356e39251a6240c96077b4ed34f945c134d11f4f9bc1b574bf7ac8ac2fd8 = $this->env->getExtension("native_profiler");
        $__internal_cbd8356e39251a6240c96077b4ed34f945c134d11f4f9bc1b574bf7ac8ac2fd8->enter($__internal_cbd8356e39251a6240c96077b4ed34f945c134d11f4f9bc1b574bf7ac8ac2fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_captcha_javascript"));

        // line 14
        ob_start();
        // line 15
        echo "    <!--[if lte IE 7]>
    <script type=\"text/javascript\">
        \$(function () {
            var pathBase64 = \"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("genemu_base64");
        echo "\";

            \$(document.images).each(function(){
                var src = \$(this).attr(\"src\");
                if (/^data:.*;base64/i.test(src)) {
                    src = src.slice(5);
                    \$(this).attr(\"src\",pathBase64+\"?\"+src);
                }
            });
        });
    </script>
    <![endif]-->
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_cbd8356e39251a6240c96077b4ed34f945c134d11f4f9bc1b574bf7ac8ac2fd8->leave($__internal_cbd8356e39251a6240c96077b4ed34f945c134d11f4f9bc1b574bf7ac8ac2fd8_prof);

    }

    // line 33
    public function block_genemu_recaptcha_javascript($context, array $blocks = array())
    {
        $__internal_6e695b83bc94644182173b7dd9b106bab21b3d9bcb9f37dd158683d6742292be = $this->env->getExtension("native_profiler");
        $__internal_6e695b83bc94644182173b7dd9b106bab21b3d9bcb9f37dd158683d6742292be->enter($__internal_6e695b83bc94644182173b7dd9b106bab21b3d9bcb9f37dd158683d6742292be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_recaptcha_javascript"));

        // line 34
        ob_start();
        // line 35
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://www.google.com/recaptcha/api/js/recaptcha_ajax.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        function genemu_recaptcha_load()
        {
            Recaptcha.create('";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["public_key"]) ? $context["public_key"] : $this->getContext($context, "public_key")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_div', ";
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ");
        }

        if (window.addEventListener) {
            window.addEventListener('load', genemu_recaptcha_load, false);
        } else if (window.attachEvent) {
            window.attachEvent('onload', genemu_recaptcha_load);
        } else {
            window.onload = genemu_recaptcha_load;
        }
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6e695b83bc94644182173b7dd9b106bab21b3d9bcb9f37dd158683d6742292be->leave($__internal_6e695b83bc94644182173b7dd9b106bab21b3d9bcb9f37dd158683d6742292be_prof);

    }

    // line 53
    public function block_genemu_tinymce_javascript($context, array $blocks = array())
    {
        $__internal_ecdb8441420e6d5196f60d628bf9844841c8c27c76b04964f4f656cc993d7a05 = $this->env->getExtension("native_profiler");
        $__internal_ecdb8441420e6d5196f60d628bf9844841c8c27c76b04964f4f656cc993d7a05->enter($__internal_ecdb8441420e6d5196f60d628bf9844841c8c27c76b04964f4f656cc993d7a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_tinymce_javascript"));

        // line 54
        ob_start();
        // line 55
        echo "    ";
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "script_url", array(), "any", true, true)) {
            // line 56
            echo "        ";
            $context["configs"] = twig_array_merge((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), array("script_url" => $this->env->getExtension('asset')->getAssetUrl($this->getAttribute(            // line 57
(isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "script_url", array()))));
            // line 59
            echo "    ";
        } else {
            // line 60
            echo "        ";
            $context["configs"] = twig_array_merge((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), array("mode" => "exact", "elements" =>             // line 62
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            // line 64
            echo "    ";
        }
        // line 65
        echo "
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$configs = ";
        // line 68
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ";";
        // line 70
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "script_url", array(), "any", true, true)) {
            // line 71
            echo "
            var \$textarea = jQuery('#";
            // line 72
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "');
            if(\$textarea.is('[required]')) {
                \$configs.oninit = function(editor) {
                    editor.onChange.add(function(ed, l) { ed.save(); });
                };
            }
            \$textarea.tinymce(\$configs);
        ";
        } else {
            // line 80
            echo "
            tinyMCE.init(\$configs);
        ";
        }
        // line 84
        echo "});
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ecdb8441420e6d5196f60d628bf9844841c8c27c76b04964f4f656cc993d7a05->leave($__internal_ecdb8441420e6d5196f60d628bf9844841c8c27c76b04964f4f656cc993d7a05_prof);

    }

    // line 89
    public function block_genemu_jquerydate_javascript($context, array $blocks = array())
    {
        $__internal_b34b69a0e5583fe98cd2c04cf07a4c5839504b45d1c0fbd697f9992203759ec5 = $this->env->getExtension("native_profiler");
        $__internal_b34b69a0e5583fe98cd2c04cf07a4c5839504b45d1c0fbd697f9992203759ec5->enter($__internal_b34b69a0e5583fe98cd2c04cf07a4c5839504b45d1c0fbd697f9992203759ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jquerydate_javascript"));

        // line 90
        ob_start();
        // line 91
        echo "
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$field = \$('#";
        // line 94
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) != "single_text")) {
            echo "datepicker_";
        }
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');
        
        ";
        // line 96
        $this->displayBlock('genemu_jquerydate_javascript_prototype', $context, $blocks);
        // line 127
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b34b69a0e5583fe98cd2c04cf07a4c5839504b45d1c0fbd697f9992203759ec5->leave($__internal_b34b69a0e5583fe98cd2c04cf07a4c5839504b45d1c0fbd697f9992203759ec5_prof);

    }

    // line 96
    public function block_genemu_jquerydate_javascript_prototype($context, array $blocks = array())
    {
        $__internal_1bf6dffaaa7873defcb8baefef57c04ef5b33a52f07c7a1b68e2228945754b8c = $this->env->getExtension("native_profiler");
        $__internal_1bf6dffaaa7873defcb8baefef57c04ef5b33a52f07c7a1b68e2228945754b8c->enter($__internal_1bf6dffaaa7873defcb8baefef57c04ef5b33a52f07c7a1b68e2228945754b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jquerydate_javascript_prototype"));

        // line 97
        echo "
        ";
        // line 98
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "buttonImage", array(), "any", true, true)) {
            // line 99
            echo "            ";
            $context["configs"] = twig_array_merge((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), array("buttonImage" => $this->env->getExtension('asset')->getAssetUrl($this->getAttribute(            // line 100
(isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "buttonImage", array()))));
            // line 102
            echo "        ";
        }
        // line 103
        echo "
        ";
        // line 104
        if (((isset($context["culture"]) ? $context["culture"] : $this->getContext($context, "culture")) == "en")) {
            // line 105
            echo "            ";
            $context["culture"] = "en-GB";
            // line 106
            echo "        ";
        }
        // line 107
        echo "
            var \$configs = \$.extend({
                minDate: new Date(";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["min_year"]) ? $context["min_year"] : $this->getContext($context, "min_year")), "html", null, true);
        echo ", 0, 1),
                maxDate: new Date(";
        // line 110
        echo twig_escape_filter($this->env, (isset($context["max_year"]) ? $context["max_year"] : $this->getContext($context, "max_year")), "html", null, true);
        echo ", 11, 31)
            }, \$.datepicker.regional['";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["culture"]) ? $context["culture"] : $this->getContext($context, "culture")), "html", null, true);
        echo "'] ,";
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ");

        ";
        // line 113
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) != "single_text")) {
            // line 114
            echo "            var \$year = \$('#";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), "vars", array()), "id", array()), "html", null, true);
            echo "');
            var \$month = \$('#";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), "vars", array()), "id", array()), "html", null, true);
            echo "');
            var \$day = \$('#";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), "vars", array()), "id", array()), "html", null, true);
            echo "');

            \$configs.onSelect = function(date) {
                \$year.val(parseInt(date.substring(0, 4), 10));
                \$month.val(parseInt(date.substring(5, 7), 10));
                \$day.val(parseInt(date.substring(8), 10));
            }
        ";
        }
        // line 124
        echo "
            \$field.datepicker(\$configs);
        ";
        
        $__internal_1bf6dffaaa7873defcb8baefef57c04ef5b33a52f07c7a1b68e2228945754b8c->leave($__internal_1bf6dffaaa7873defcb8baefef57c04ef5b33a52f07c7a1b68e2228945754b8c_prof);

    }

    // line 132
    public function block_genemu_jqueryslider_javascript($context, array $blocks = array())
    {
        $__internal_09359ecc38c96986a942eca64eda415b8a5dcdd494bb7709971366a0f846c442 = $this->env->getExtension("native_profiler");
        $__internal_09359ecc38c96986a942eca64eda415b8a5dcdd494bb7709971366a0f846c442->enter($__internal_09359ecc38c96986a942eca64eda415b8a5dcdd494bb7709971366a0f846c442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jqueryslider_javascript"));

        // line 133
        ob_start();
        // line 134
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$field = \$('#";
        // line 136
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');
            var \$configs = \$.extend(";
        // line 137
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ", {
                value: ";
        // line 138
        echo twig_escape_filter($this->env, (((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) ? ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) : (0)), "html", null, true);
        echo ",
                slide: function(event, ui) {
                    \$field.val(ui.value);
                }
            });

            \$('#";
        // line 144
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_slider').slider(\$configs);
        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_09359ecc38c96986a942eca64eda415b8a5dcdd494bb7709971366a0f846c442->leave($__internal_09359ecc38c96986a942eca64eda415b8a5dcdd494bb7709971366a0f846c442_prof);

    }

    // line 150
    public function block_genemu_jquerycolor_javascript($context, array $blocks = array())
    {
        $__internal_6479590b5170754f3b5adf647efdfc69283b8bc9d33f817c280503903a9d7c2e = $this->env->getExtension("native_profiler");
        $__internal_6479590b5170754f3b5adf647efdfc69283b8bc9d33f817c280503903a9d7c2e->enter($__internal_6479590b5170754f3b5adf647efdfc69283b8bc9d33f817c280503903a9d7c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jquerycolor_javascript"));

        // line 151
        ob_start();
        // line 152
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$field = \$('#";
        // line 154
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');
            var \$configs = \$.extend({
                color: '#' + \$field.val(),
                onBeforeShow: function() {
                    \$(this).ColorPickerSetColor(\$field.val());
                }
            }, ";
        // line 160
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ");

        ";
        // line 162
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "image")) {
            // line 163
            echo "            \$picker = \$('#";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "_color');

            \$picker.ColorPicker(\$.extend({
                onChange: function(hsb, hex, rgb) {
                    \$field.val(hex);

                    \$('div', \$picker).css({
                        backgroundColor: '#' + hex
                    });
                }
            }, \$configs));
        ";
        } else {
            // line 175
            echo "            \$field.ColorPicker(\$.extend({
                onChange: function(hsb, hex, rgb) {
                    \$field.val(hex).css({
                        backgroundColor: '#' + hex
                    });
                }
            }, \$configs));
        ";
        }
        // line 183
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6479590b5170754f3b5adf647efdfc69283b8bc9d33f817c280503903a9d7c2e->leave($__internal_6479590b5170754f3b5adf647efdfc69283b8bc9d33f817c280503903a9d7c2e_prof);

    }

    // line 188
    public function block_genemu_jqueryrating_javascript($context, array $blocks = array())
    {
        $__internal_3d07541a45ac5cda09dd615847d7736fbd6433aa17ea7e337be78cd8f68c9da5 = $this->env->getExtension("native_profiler");
        $__internal_3d07541a45ac5cda09dd615847d7736fbd6433aa17ea7e337be78cd8f68c9da5->enter($__internal_3d07541a45ac5cda09dd615847d7736fbd6433aa17ea7e337be78cd8f68c9da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jqueryrating_javascript"));

        // line 189
        ob_start();
        // line 190
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$('[name=\"";
        // line 192
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"]').rating(";
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ");
        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_3d07541a45ac5cda09dd615847d7736fbd6433aa17ea7e337be78cd8f68c9da5->leave($__internal_3d07541a45ac5cda09dd615847d7736fbd6433aa17ea7e337be78cd8f68c9da5_prof);

    }

    // line 198
    public function block_genemu_jquerytokeninput_javascript($context, array $blocks = array())
    {
        $__internal_b7bb312b76ac0c69e13d4e0ed421e8c7b5926721c0bd0b32fb27795972b5e3e6 = $this->env->getExtension("native_profiler");
        $__internal_b7bb312b76ac0c69e13d4e0ed421e8c7b5926721c0bd0b32fb27795972b5e3e6->enter($__internal_b7bb312b76ac0c69e13d4e0ed421e8c7b5926721c0bd0b32fb27795972b5e3e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jquerytokeninput_javascript"));

        // line 199
        ob_start();
        // line 200
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$field = \$('#";
        // line 202
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');
            var \$tokeninput = \$('#tokeninput_";
        // line 203
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');

            var update_hidden_sourceinput = function(item) {
                var \$val = \$tokeninput.tokenInput('get');
            ";
        // line 207
        if (twig_test_empty((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple")))) {
            // line 208
            echo "                for (first in \$val) break;
                \$val = \$val[first];
            ";
        }
        // line 211
        echo "
                \$field.val(JSON.stringify(\$val));
            };

            ";
        // line 215
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 216
            echo "                ";
            if (twig_test_empty((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple")))) {
                // line 217
                echo "                    ";
                $context["prePopulate"] = (("[" . (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) . "]");
                // line 218
                echo "                ";
            } else {
                // line 219
                echo "                    ";
                $context["prePopulate"] = (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
                // line 220
                echo "                ";
            }
            // line 221
            echo "            ";
        }
        // line 222
        echo "
            var \$configs = \$.extend(";
        // line 223
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ", {
                prePopulate: ";
        // line 224
        echo (isset($context["prePopulate"]) ? $context["prePopulate"] : $this->getContext($context, "prePopulate"));
        echo ",
                onAdd: update_hidden_sourceinput,
                onDelete: update_hidden_sourceinput
            });

            \$tokeninput.tokenInput(
            ";
        // line 230
        if ((isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name"))) {
            // line 231
            echo "                '";
            echo $this->env->getExtension('routing')->getPath((isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")));
            echo "'
            ";
        } else {
            // line 233
            echo "                ";
            $context["sourceChoices"] = array();
            // line 234
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices")));
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 235
                echo "                    ";
                $context["sourceChoices"] = twig_array_merge((isset($context["sourceChoices"]) ? $context["sourceChoices"] : $this->getContext($context, "sourceChoices")), array(0 => array("value" => $this->getAttribute($context["choice"], "value", array()), "label" => $this->getAttribute($context["choice"], "label", array()))));
                // line 236
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 237
            echo "                ";
            echo twig_jsonencode_filter((isset($context["sourceChoices"]) ? $context["sourceChoices"] : $this->getContext($context, "sourceChoices")));
            echo "
            ";
        }
        // line 238
        echo ",
                \$configs
            );
        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b7bb312b76ac0c69e13d4e0ed421e8c7b5926721c0bd0b32fb27795972b5e3e6->leave($__internal_b7bb312b76ac0c69e13d4e0ed421e8c7b5926721c0bd0b32fb27795972b5e3e6_prof);

    }

    // line 246
    public function block_genemu_jqueryautocompleter_javascript($context, array $blocks = array())
    {
        $__internal_cdfdb843852c90c30200415b4e6d40438ead703f7c9f547e1884dc023524e49c = $this->env->getExtension("native_profiler");
        $__internal_cdfdb843852c90c30200415b4e6d40438ead703f7c9f547e1884dc023524e49c->enter($__internal_cdfdb843852c90c30200415b4e6d40438ead703f7c9f547e1884dc023524e49c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jqueryautocompleter_javascript"));

        // line 247
        ob_start();
        // line 248
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$field = \$('#";
        // line 250
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');
            var \$autocompleter = \$('#autocompleter_";
        // line 251
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');
            var \$configs = {
                focus: function(event, ui) {
                    return false;
                },
                select: function(event, ui) {
                ";
        // line 257
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            // line 258
            echo "                    terms = this.value.split(/,\\s*/);
                    terms.pop();
                    terms.push(ui.item.label);
                    terms.push('');
                    this.value = terms.join(', ');

                    terms = \$field.val();
                    terms = !terms?[]:JSON.parse(terms);
                    terms.push(ui.item);
                ";
        } else {
            // line 268
            echo "                    this.value = ui.item.label;
                    terms = ui.item;
                ";
        }
        // line 271
        echo "                    \$field.val(JSON.stringify(terms));

                    return false;
                }
            };

            ";
        // line 277
        if ((isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name"))) {
            // line 278
            echo "                \$configs.source = function(request, response) {
                    \$.getJSON('";
            // line 279
            echo $this->env->getExtension('routing')->getPath((isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")));
            echo "', {
                        term: request.term
                    }, response);
                };
            ";
        } else {
            // line 284
            echo "                ";
            $context["sourceChoices"] = array();
            // line 285
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices")));
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 286
                echo "                    ";
                $context["sourceChoices"] = twig_array_merge((isset($context["sourceChoices"]) ? $context["sourceChoices"] : $this->getContext($context, "sourceChoices")), array(0 => array("value" => $this->getAttribute($context["choice"], "value", array()), "label" => $this->getAttribute($context["choice"], "label", array()))));
                // line 287
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 288
            echo "                \$configs.source = ";
            echo twig_jsonencode_filter((isset($context["sourceChoices"]) ? $context["sourceChoices"] : $this->getContext($context, "sourceChoices")));
            echo ";
            ";
        }
        // line 290
        echo "
                \$autocompleter.autocomplete(\$configs);

            ";
        // line 293
        if ((isset($context["free_values"]) ? $context["free_values"] : $this->getContext($context, "free_values"))) {
            // line 294
            echo "                \$autocompleter.keyup(function(){
                    var val ={}
                    var fieldval = \$(this).val();
                    val['value'] = fieldval;
                    val['label'] = fieldval;

                    \$field.val(JSON.stringify(val));
                });
            ";
        }
        // line 303
        echo "
            ";
        // line 304
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            // line 305
            echo "                var \$source = \$autocompleter.data('autocomplete').source;

                \$autocompleter.autocomplete('option', 'source', function(request, response) {
                    request.term = request.term.split(/,\\s*/).pop();

                    \$source(request, response);
                });
            ";
        }
        // line 313
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_cdfdb843852c90c30200415b4e6d40438ead703f7c9f547e1884dc023524e49c->leave($__internal_cdfdb843852c90c30200415b4e6d40438ead703f7c9f547e1884dc023524e49c_prof);

    }

    // line 318
    public function block_genemu_jqueryautocomplete_javascript($context, array $blocks = array())
    {
        $__internal_a8733c2d7fed4fd073133c03c29e131e5531d84f5e5f58744fad01b958fcfff9 = $this->env->getExtension("native_profiler");
        $__internal_a8733c2d7fed4fd073133c03c29e131e5531d84f5e5f58744fad01b958fcfff9->enter($__internal_a8733c2d7fed4fd073133c03c29e131e5531d84f5e5f58744fad01b958fcfff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jqueryautocomplete_javascript"));

        // line 319
        ob_start();
        // line 320
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$autocompleter = \$('#";
        // line 322
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');
            var \$configs = ";
        // line 323
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ";

            ";
        // line 325
        if ((isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name"))) {
            // line 326
            echo "                \$configs.source = function(request, response) {
                    \$.getJSON('";
            // line 327
            echo $this->env->getExtension('routing')->getPath((isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")));
            echo "', {
                        term: request.term
                    }, response);
                };
            ";
        } else {
            // line 332
            echo "                \$configs.source = ";
            echo twig_jsonencode_filter((isset($context["suggestions"]) ? $context["suggestions"] : $this->getContext($context, "suggestions")));
            echo ";
            ";
        }
        // line 334
        echo "
            \$autocompleter.autocomplete(\$configs);
            
            ";
        // line 337
        if (($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "minLength", array(), "any", true, true) && (0 == $this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "minLength", array())))) {
            // line 338
            echo "                \$autocompleter.focus(function() {
                    \$(this).autocomplete(\"search\", \"\");
                });
            ";
        }
        // line 342
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a8733c2d7fed4fd073133c03c29e131e5531d84f5e5f58744fad01b958fcfff9->leave($__internal_a8733c2d7fed4fd073133c03c29e131e5531d84f5e5f58744fad01b958fcfff9_prof);

    }

    // line 347
    public function block_genemu_jquerychosen_javascript($context, array $blocks = array())
    {
        $__internal_25e4f7a666562f3ecfe0df30c747b264a2248b2d5f7c48f3e00f0ec04deea3a8 = $this->env->getExtension("native_profiler");
        $__internal_25e4f7a666562f3ecfe0df30c747b264a2248b2d5f7c48f3e00f0ec04deea3a8->enter($__internal_25e4f7a666562f3ecfe0df30c747b264a2248b2d5f7c48f3e00f0ec04deea3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jquerychosen_javascript"));

        // line 348
        ob_start();
        // line 349
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$field = \$('#";
        // line 351
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');

            ";
        // line 353
        $this->displayBlock('genemu_jquerychosen_javascript_prototype', $context, $blocks);
        // line 360
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_25e4f7a666562f3ecfe0df30c747b264a2248b2d5f7c48f3e00f0ec04deea3a8->leave($__internal_25e4f7a666562f3ecfe0df30c747b264a2248b2d5f7c48f3e00f0ec04deea3a8_prof);

    }

    // line 353
    public function block_genemu_jquerychosen_javascript_prototype($context, array $blocks = array())
    {
        $__internal_17e671a139beb83da8ed9089db8d4d3c1b64269642d189dbeb7db9e9e8cfae37 = $this->env->getExtension("native_profiler");
        $__internal_17e671a139beb83da8ed9089db8d4d3c1b64269642d189dbeb7db9e9e8cfae37->enter($__internal_17e671a139beb83da8ed9089db8d4d3c1b64269642d189dbeb7db9e9e8cfae37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jquerychosen_javascript_prototype"));

        // line 354
        echo "                \$field.chosen({
                    no_results_text: \"";
        // line 355
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["no_results_text"]) ? $context["no_results_text"] : $this->getContext($context, "no_results_text")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "\",
                    allow_single_deselect: ";
        // line 356
        echo (((isset($context["allow_single_deselect"]) ? $context["allow_single_deselect"] : $this->getContext($context, "allow_single_deselect"))) ? ("true") : ("false"));
        echo ",
                    disable_search_threshold: ";
        // line 357
        echo twig_escape_filter($this->env, (isset($context["disable_search_threshold"]) ? $context["disable_search_threshold"] : $this->getContext($context, "disable_search_threshold")), "html", null, true);
        echo "
                });
            ";
        
        $__internal_17e671a139beb83da8ed9089db8d4d3c1b64269642d189dbeb7db9e9e8cfae37->leave($__internal_17e671a139beb83da8ed9089db8d4d3c1b64269642d189dbeb7db9e9e8cfae37_prof);

    }

    // line 365
    public function block_genemu_jquerygeolocation_javascript($context, array $blocks = array())
    {
        $__internal_87c231bd573d1b261bcd42eab33844000fb814f2905e244baa2bf71cacb1ecb3 = $this->env->getExtension("native_profiler");
        $__internal_87c231bd573d1b261bcd42eab33844000fb814f2905e244baa2bf71cacb1ecb3->enter($__internal_87c231bd573d1b261bcd42eab33844000fb814f2905e244baa2bf71cacb1ecb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jquerygeolocation_javascript"));

        // line 366
        ob_start();
        // line 367
        echo "    ";
        // line 368
        echo "    ";
        if (((isset($context["map"]) ? $context["map"] : $this->getContext($context, "map")) === true)) {
            // line 369
            echo "        ";
            $context["elements"] = twig_array_merge((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), array("map" => (("#" . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))) . "_map")));
            // line 370
            echo "    ";
        }
        // line 371
        echo "
    ";
        // line 372
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "latitude", array(), "any", true, true)) {
            // line 373
            echo "        ";
            $context["elements"] = twig_array_merge((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), array("lat" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "latitude", array()), "vars", array()), "id", array()))));
            // line 374
            echo "    ";
        }
        // line 375
        echo "
    ";
        // line 376
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "longitude", array(), "any", true, true)) {
            // line 377
            echo "        ";
            $context["elements"] = twig_array_merge((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), array("lng" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longitude", array()), "vars", array()), "id", array()))));
            // line 378
            echo "    ";
        }
        // line 379
        echo "
    ";
        // line 380
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "locality", array(), "any", true, true)) {
            // line 381
            echo "        ";
            $context["elements"] = twig_array_merge((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), array("locality" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "locality", array()), "vars", array()), "id", array()))));
            // line 382
            echo "    ";
        }
        // line 383
        echo "
    ";
        // line 384
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "country", array(), "any", true, true)) {
            // line 385
            echo "        ";
            $context["elements"] = twig_array_merge((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), array("country" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country", array()), "vars", array()), "id", array()))));
            // line 386
            echo "    ";
        }
        // line 387
        echo "
    ";
        // line 389
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements"))) > 0)) {
            // line 390
            echo "        ";
            $context["configs"] = twig_array_merge((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), array("elements" => (isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements"))));
            // line 391
            echo "    ";
        }
        // line 392
        echo "
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$field = \$('#";
        // line 395
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), "vars", array()), "id", array()), "html", null, true);
        echo "');

            \$field.addresspicker(";
        // line 397
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ");

            ";
        // line 399
        if (((isset($context["map"]) ? $context["map"] : $this->getContext($context, "map")) === true)) {
            // line 400
            echo "                var gmarker = \$field.addresspicker('marker');
                gmarker.setVisible(true);

                \$field.addresspicker('updatePosition');
            ";
        }
        // line 405
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_87c231bd573d1b261bcd42eab33844000fb814f2905e244baa2bf71cacb1ecb3->leave($__internal_87c231bd573d1b261bcd42eab33844000fb814f2905e244baa2bf71cacb1ecb3_prof);

    }

    // line 410
    public function block_genemu_jqueryfile_javascript($context, array $blocks = array())
    {
        $__internal_fa9217c077d6ca0dcaad7362e91b0966ea182ee72cf1f200876c0c4e68be1a8b = $this->env->getExtension("native_profiler");
        $__internal_fa9217c077d6ca0dcaad7362e91b0966ea182ee72cf1f200876c0c4e68be1a8b->enter($__internal_fa9217c077d6ca0dcaad7362e91b0966ea182ee72cf1f200876c0c4e68be1a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jqueryfile_javascript"));

        // line 411
        ob_start();
        // line 412
        echo "<script type=\"text/javascript\">
    jQuery(document).ready(function(\$) {
        var \$field = \$('#";
        // line 414
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_upload');
        ";
        // line 415
        $this->displayBlock('genemu_jqueryfile_javascript_prototype', $context, $blocks);
        // line 483
        echo "    });
</script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_fa9217c077d6ca0dcaad7362e91b0966ea182ee72cf1f200876c0c4e68be1a8b->leave($__internal_fa9217c077d6ca0dcaad7362e91b0966ea182ee72cf1f200876c0c4e68be1a8b_prof);

    }

    // line 415
    public function block_genemu_jqueryfile_javascript_prototype($context, array $blocks = array())
    {
        $__internal_8f3fe4b4a2239ca3256ae3a857d1b36d19d31ba568ca1b1475f7307615ead6ff = $this->env->getExtension("native_profiler");
        $__internal_8f3fe4b4a2239ca3256ae3a857d1b36d19d31ba568ca1b1475f7307615ead6ff->enter($__internal_8f3fe4b4a2239ca3256ae3a857d1b36d19d31ba568ca1b1475f7307615ead6ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jqueryfile_javascript_prototype"));

        // line 416
        echo "        var \$form = \$field.closest('form');
        var \$queue = \$('#";
        // line 417
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_queue');
        var \$nbQueue = 0;

        var \$configs = \$.extend(";
        // line 420
        echo twig_jsonencode_filter(twig_array_merge((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), array("swf" => $this->env->getExtension('asset')->getAssetUrl($this->getAttribute(        // line 421
(isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "swf", array())), "cancelImg" => $this->env->getExtension('asset')->getAssetUrl($this->getAttribute(        // line 422
(isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "cancelImg", array())), "uploader" => $this->env->getExtension('routing')->getPath($this->getAttribute(        // line 423
(isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "script", array())), "queueID" => (        // line 424
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_queue"))));
        // line 425
        echo ", {
            onUploadSuccess: function(file, data, response) {
                data = jQuery.parseJSON(data);

                if (data.result == '1') {
                    ";
        // line 430
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            // line 431
            echo "                        var value = \$('#";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "').val();
                        if (value != '') {
                            value += \",\";
                        }
                        value += data.file;
                    ";
        } else {
            // line 437
            echo "                        var value = data.file;
                    ";
        }
        // line 439
        echo "
                    \$('#";
        // line 440
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').val(value);
                    \$nbQueue--;
                } else {
                    alert('Error');
                }
            },
            onSelect: function(file) {
                \$nbQueue++;
            },
            onUploadError: function(file, errorCode, errorMsg, errorString) {
                alert('error');
            }
        });

    ";
        // line 454
        if (( !$this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "auto", array(), "any", true, true) || ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "auto", array()) === false))) {
            // line 455
            echo "        \$configs.onAllComplete = function(event, data) {
            \$form.submit();
        };

        \$form.submit(function(event) {
            if (0 === \$nbQueue) {
                return \$joinFiles();
            } else {
                \$field.uploadifyUpload();
                event.preventDefault();
            }
        });
    ";
        } else {
            // line 468
            echo "        \$form.submit(function(event) {
            return \$joinFiles();
        });
    ";
        }
        // line 472
        echo "
        var \$joinFiles = function() {
            if (\$files = \$field.data('files')) {
                \$field.val(\$files.join(','));
            }

            return true;
        }

        \$field.uploadify(\$configs);
        ";
        
        $__internal_8f3fe4b4a2239ca3256ae3a857d1b36d19d31ba568ca1b1475f7307615ead6ff->leave($__internal_8f3fe4b4a2239ca3256ae3a857d1b36d19d31ba568ca1b1475f7307615ead6ff_prof);

    }

    // line 488
    public function block_genemu_jqueryimage_javascript($context, array $blocks = array())
    {
        $__internal_06fada039d42075ef53864667f0a21904a33b6d6b29c279d651c8db754b74e09 = $this->env->getExtension("native_profiler");
        $__internal_06fada039d42075ef53864667f0a21904a33b6d6b29c279d651c8db754b74e09->enter($__internal_06fada039d42075ef53864667f0a21904a33b6d6b29c279d651c8db754b74e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jqueryimage_javascript"));

        // line 489
        ob_start();
        // line 490
        echo "<script type=\"text/javascript\">
    jQuery(document).ready(function(\$) {
        var \$field   = \$('#";
        // line 492
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_upload');
        ";
        // line 493
        $this->displayBlock('genemu_jqueryimage_javascript_prototype', $context, $blocks);
        // line 651
        echo "    });
</script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_06fada039d42075ef53864667f0a21904a33b6d6b29c279d651c8db754b74e09->leave($__internal_06fada039d42075ef53864667f0a21904a33b6d6b29c279d651c8db754b74e09_prof);

    }

    // line 493
    public function block_genemu_jqueryimage_javascript_prototype($context, array $blocks = array())
    {
        $__internal_5fbf46d667cd75e33f5a69da01a26cd792627167fc14cb4ea2a6ff8ec6c61ed5 = $this->env->getExtension("native_profiler");
        $__internal_5fbf46d667cd75e33f5a69da01a26cd792627167fc14cb4ea2a6ff8ec6c61ed5->enter($__internal_5fbf46d667cd75e33f5a69da01a26cd792627167fc14cb4ea2a6ff8ec6c61ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jqueryimage_javascript_prototype"));

        // line 494
        echo "        var \$form    = \$field.closest('form');
        var \$preview = \$('#";
        // line 495
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_img_preview');
        var \$options = \$('#";
        // line 496
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_options');
        // Base path for apps not on DocumentRoot
        var \$basePath = '";
        // line 498
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "folder", array())), "html", null, true);
        echo "';
        \$basePath = \$basePath.substr(0, \$basePath.length - '";
        // line 499
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "folder", array()), "html", null, true);
        echo "'.length);

        var \$coords = {};
        var \$crop = null;
        var \$ratio = 1;

        var \$configs = \$.extend(";
        // line 505
        echo twig_jsonencode_filter(twig_array_merge((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), array("swf" => $this->env->getExtension('asset')->getAssetUrl($this->getAttribute(        // line 506
(isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "swf", array())), "cancelImg" => $this->env->getExtension('asset')->getAssetUrl($this->getAttribute(        // line 507
(isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "cancelImg", array())), "uploader" => $this->env->getExtension('routing')->getPath($this->getAttribute(        // line 508
(isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "script", array())), "queueID" => (        // line 509
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_queue"))));
        // line 510
        echo ", {
            onUploadSuccess: function(file, data, response) {
                data = jQuery.parseJSON(data);

                if (data.result == '1') {
                    \$('#";
        // line 515
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').val(data.file);

                    // add if and only if path is relative
                    if (data.thumbnail.file.search(/^[/\\\\]/) < 0) {
                        data.thumbnail.file = \$basePath + data.thumbnail.file;
                    }

                    createCrop({
                        image:      data.image,
                        thumbnail:  data.thumbnail
                    });
                } else {
                    alert('Error');
                }
            },
            onUploadError: function(file, errorCode, errorMsg, errorString) {
                alert('error');
            }
        });

        var createCrop = function (data) {
            if (\$crop) {
                \$crop.destroy();
            }

            // add if and only if path is relative
            if (data.thumbnail.file.search(/^[/\\\\]/) < 0) {
                data.thumbnail.file = \$basePath + data.thumbnail.file;
            }
            var \$img = new Image();

            console.log(data);
            \$(\$img).load(function() {
                ";
        // line 548
        $context["widthMax"] = (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "thumbnail", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "thumbnail", array()), "width", array())) : (500));
        // line 549
        echo "
                \$ratio = data.image.width > ";
        // line 550
        echo twig_escape_filter($this->env, (isset($context["widthMax"]) ? $context["widthMax"] : $this->getContext($context, "widthMax")), "html", null, true);
        echo " ? data.image.width / ";
        echo twig_escape_filter($this->env, (isset($context["widthMax"]) ? $context["widthMax"] : $this->getContext($context, "widthMax")), "html", null, true);
        echo " : 1;
                \$('.crop', \$options).hide();

                \$preview
                    .width(Math.round(data.image.width / \$ratio))
                    .height(Math.round(data.image.height / \$ratio))
                    .attr('src', this.src);

                if (!\$crop) {
                    \$options.fadeIn();
                }

                \$preview.Jcrop({
                    onSelect: checkCoords,
                    onChange: checkCoords
                }, function() {
                    \$crop = this;
                });
            }).attr('src', data.thumbnail.file);
        }

        var checkCoords = function(coords) {

            if (coords.w > 0 && coords.h > 0) {
                \$('.crop', \$options).fadeIn();

                \$coords = {
                    x: coords.x * \$ratio,
                    y: coords.y * \$ratio,
                    w: coords.w * \$ratio,
                    h: coords.h * \$ratio
                };
            } else {
                \$('.crop', \$options).fadeOut();
            }
        }

        \$('.change', \$options).click(function() {
            var \$this = \$(this);
            var \$regex = new RegExp('^\\\\b(.*?) (.*)\\\\b', 'g');
            var \$filter = \$this.attr('class').replace(\$regex, '\$1');

            var \$data = {
                filter: \$filter,
                image: \$('#";
        // line 594
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').val(),
                opacity: 0.5
            };

            if ('crop' === \$filter && !\$.isEmptyObject(\$coords)) {
                \$data = \$.extend(\$data, \$coords);
            }

            if (
                \$.inArray(\$filter, ";
        // line 603
        echo twig_jsonencode_filter((isset($context["filters"]) ? $context["filters"] : $this->getContext($context, "filters")));
        echo ") !== -1 ||
                ( 'crop' === \$filter && !\$.isEmptyObject(\$coords) )
            ) {
                \$this.addClass('loading');

                \$.ajax({
                    type: 'POST',
                    url: '";
        // line 610
        echo $this->env->getExtension('routing')->getPath("genemu_form_image");
        echo "',
                    data: \$data,
                    dataType: 'json',
                    success: function(data) {
                        if (data.result == '1') {
                            \$('#";
        // line 615
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').val(data.file);

                            createCrop({
                                image: data.image,
                                thumbnail: \$.isEmptyObject(data.thumbnail) ? \$.extend(data.image, {
                                    file: data.file
                                }) : data.thumbnail
                            });
                        } else {
                            alert('Error');
                        }

                        \$this.removeClass('loading');
                    }
                });
            }
        });

    ";
        // line 633
        if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
            // line 634
            echo "        createCrop({
            thumbnail: {
                file: '";
            // line 636
            echo twig_escape_filter($this->env, ((array_key_exists("thumbnail", $context)) ? ($this->getAttribute((isset($context["thumbnail"]) ? $context["thumbnail"] : $this->getContext($context, "thumbnail")), "file", array())) : ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))), "html", null, true);
            echo "',
                width: ";
            // line 637
            echo twig_escape_filter($this->env, ((array_key_exists("thumbnail", $context)) ? ($this->getAttribute((isset($context["thumbnail"]) ? $context["thumbnail"] : $this->getContext($context, "thumbnail")), "width", array())) : ((isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")))), "html", null, true);
            echo ",
                height: ";
            // line 638
            echo twig_escape_filter($this->env, ((array_key_exists("thumbnail", $context)) ? ($this->getAttribute((isset($context["thumbnail"]) ? $context["thumbnail"] : $this->getContext($context, "thumbnail")), "height", array())) : ((isset($context["height"]) ? $context["height"] : $this->getContext($context, "height")))), "html", null, true);
            echo ",
            },
            image: {
                width: ";
            // line 641
            echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")), "html", null, true);
            echo ",
                height: ";
            // line 642
            echo twig_escape_filter($this->env, (isset($context["height"]) ? $context["height"] : $this->getContext($context, "height")), "html", null, true);
            echo "
            }
        });
    ";
        } else {
            // line 646
            echo "        \$options.hide();
    ";
        }
        // line 648
        echo "
        \$field.uploadify(\$configs);
        ";
        
        $__internal_5fbf46d667cd75e33f5a69da01a26cd792627167fc14cb4ea2a6ff8ec6c61ed5->leave($__internal_5fbf46d667cd75e33f5a69da01a26cd792627167fc14cb4ea2a6ff8ec6c61ed5_prof);

    }

    // line 656
    public function block_genemu_jqueryselect2_javascript($context, array $blocks = array())
    {
        $__internal_6e9be7aec3ba7949116d29ede343bc422c40648b5f47a0344c65b74cad987771 = $this->env->getExtension("native_profiler");
        $__internal_6e9be7aec3ba7949116d29ede343bc422c40648b5f47a0344c65b74cad987771->enter($__internal_6e9be7aec3ba7949116d29ede343bc422c40648b5f47a0344c65b74cad987771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jqueryselect2_javascript"));

        // line 657
        echo "    <script type=\"text/javascript\">
    jQuery(document).ready(function(\$) {
        \$field = \$('#";
        // line 659
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');

        ";
        // line 661
        $this->displayBlock('genemu_jqueryselect2_javascript_prototype', $context, $blocks);
        // line 664
        echo "    });
    </script>
";
        
        $__internal_6e9be7aec3ba7949116d29ede343bc422c40648b5f47a0344c65b74cad987771->leave($__internal_6e9be7aec3ba7949116d29ede343bc422c40648b5f47a0344c65b74cad987771_prof);

    }

    // line 661
    public function block_genemu_jqueryselect2_javascript_prototype($context, array $blocks = array())
    {
        $__internal_920cba8f77cc27e82abffd5b1a865adfc2a88873d3d2114ab4fe76b7eb828264 = $this->env->getExtension("native_profiler");
        $__internal_920cba8f77cc27e82abffd5b1a865adfc2a88873d3d2114ab4fe76b7eb828264->enter($__internal_920cba8f77cc27e82abffd5b1a865adfc2a88873d3d2114ab4fe76b7eb828264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jqueryselect2_javascript_prototype"));

        // line 662
        echo "            \$field.select2(";
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ");
        ";
        
        $__internal_920cba8f77cc27e82abffd5b1a865adfc2a88873d3d2114ab4fe76b7eb828264->leave($__internal_920cba8f77cc27e82abffd5b1a865adfc2a88873d3d2114ab4fe76b7eb828264_prof);

    }

    public function getTemplateName()
    {
        return "GenemuFormBundle:Form:jquery_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1469 => 662,  1463 => 661,  1454 => 664,  1452 => 661,  1447 => 659,  1443 => 657,  1437 => 656,  1428 => 648,  1424 => 646,  1417 => 642,  1413 => 641,  1407 => 638,  1403 => 637,  1399 => 636,  1395 => 634,  1393 => 633,  1372 => 615,  1364 => 610,  1354 => 603,  1342 => 594,  1293 => 550,  1290 => 549,  1288 => 548,  1252 => 515,  1245 => 510,  1243 => 509,  1242 => 508,  1241 => 507,  1240 => 506,  1239 => 505,  1230 => 499,  1226 => 498,  1221 => 496,  1217 => 495,  1214 => 494,  1208 => 493,  1198 => 651,  1196 => 493,  1192 => 492,  1188 => 490,  1186 => 489,  1180 => 488,  1163 => 472,  1157 => 468,  1142 => 455,  1140 => 454,  1123 => 440,  1120 => 439,  1116 => 437,  1106 => 431,  1104 => 430,  1097 => 425,  1095 => 424,  1094 => 423,  1093 => 422,  1092 => 421,  1091 => 420,  1085 => 417,  1082 => 416,  1076 => 415,  1066 => 483,  1064 => 415,  1060 => 414,  1056 => 412,  1054 => 411,  1048 => 410,  1038 => 405,  1031 => 400,  1029 => 399,  1024 => 397,  1019 => 395,  1014 => 392,  1011 => 391,  1008 => 390,  1005 => 389,  1002 => 387,  999 => 386,  996 => 385,  994 => 384,  991 => 383,  988 => 382,  985 => 381,  983 => 380,  980 => 379,  977 => 378,  974 => 377,  972 => 376,  969 => 375,  966 => 374,  963 => 373,  961 => 372,  958 => 371,  955 => 370,  952 => 369,  949 => 368,  947 => 367,  945 => 366,  939 => 365,  929 => 357,  925 => 356,  921 => 355,  918 => 354,  912 => 353,  902 => 360,  900 => 353,  895 => 351,  891 => 349,  889 => 348,  883 => 347,  873 => 342,  867 => 338,  865 => 337,  860 => 334,  854 => 332,  846 => 327,  843 => 326,  841 => 325,  836 => 323,  832 => 322,  828 => 320,  826 => 319,  820 => 318,  810 => 313,  800 => 305,  798 => 304,  795 => 303,  784 => 294,  782 => 293,  777 => 290,  771 => 288,  765 => 287,  762 => 286,  757 => 285,  754 => 284,  746 => 279,  743 => 278,  741 => 277,  733 => 271,  728 => 268,  716 => 258,  714 => 257,  705 => 251,  701 => 250,  697 => 248,  695 => 247,  689 => 246,  676 => 238,  670 => 237,  664 => 236,  661 => 235,  656 => 234,  653 => 233,  647 => 231,  645 => 230,  636 => 224,  632 => 223,  629 => 222,  626 => 221,  623 => 220,  620 => 219,  617 => 218,  614 => 217,  611 => 216,  609 => 215,  603 => 211,  598 => 208,  596 => 207,  589 => 203,  585 => 202,  581 => 200,  579 => 199,  573 => 198,  559 => 192,  555 => 190,  553 => 189,  547 => 188,  537 => 183,  527 => 175,  511 => 163,  509 => 162,  504 => 160,  495 => 154,  491 => 152,  489 => 151,  483 => 150,  471 => 144,  462 => 138,  458 => 137,  454 => 136,  450 => 134,  448 => 133,  442 => 132,  433 => 124,  422 => 116,  418 => 115,  413 => 114,  411 => 113,  404 => 111,  400 => 110,  396 => 109,  392 => 107,  389 => 106,  386 => 105,  384 => 104,  381 => 103,  378 => 102,  376 => 100,  374 => 99,  372 => 98,  369 => 97,  363 => 96,  353 => 127,  351 => 96,  343 => 94,  338 => 91,  336 => 90,  330 => 89,  320 => 84,  315 => 80,  304 => 72,  301 => 71,  299 => 70,  296 => 68,  291 => 65,  288 => 64,  286 => 62,  284 => 60,  281 => 59,  279 => 57,  277 => 56,  274 => 55,  272 => 54,  266 => 53,  242 => 39,  234 => 35,  232 => 34,  226 => 33,  205 => 18,  200 => 15,  198 => 14,  192 => 13,  180 => 11,  168 => 9,  153 => 4,  148 => 3,  146 => 2,  140 => 1,  132 => 667,  130 => 656,  127 => 655,  125 => 488,  122 => 487,  120 => 410,  117 => 409,  115 => 365,  112 => 364,  110 => 347,  107 => 346,  105 => 318,  102 => 317,  100 => 246,  97 => 245,  95 => 198,  92 => 197,  90 => 188,  87 => 187,  85 => 150,  82 => 149,  80 => 132,  77 => 131,  75 => 89,  72 => 88,  70 => 53,  67 => 52,  65 => 33,  62 => 32,  60 => 13,  57 => 12,  55 => 11,  52 => 10,  50 => 9,  47 => 8,  45 => 1,);
    }
}
/* {% block form_javascript %}*/
/* {% spaceless %}*/
/*     {% for child in form %}*/
/*         {{ form_javascript(child) }}*/
/*     {% endfor %}*/
/* {% endspaceless %}*/
/* {% endblock form_javascript %}*/
/* */
/* {% block field_javascript "" %}*/
/* */
/* {% block button_javascript "" %}*/
/* */
/* {% block genemu_captcha_javascript %}*/
/* {% spaceless %}*/
/*     <!--[if lte IE 7]>*/
/*     <script type="text/javascript">*/
/*         $(function () {*/
/*             var pathBase64 = "{{ path('genemu_base64')}}";*/
/* */
/*             $(document.images).each(function(){*/
/*                 var src = $(this).attr("src");*/
/*                 if (/^data:.*;base64/i.test(src)) {*/
/*                     src = src.slice(5);*/
/*                     $(this).attr("src",pathBase64+"?"+src);*/
/*                 }*/
/*             });*/
/*         });*/
/*     </script>*/
/*     <![endif]-->*/
/* {% endspaceless %}*/
/* {% endblock genemu_captcha_javascript %}*/
/* */
/* {% block genemu_recaptcha_javascript %}*/
/* {% spaceless %}*/
/*     <script type="text/javascript" src="{{ asset("https://www.google.com/recaptcha/api/js/recaptcha_ajax.js") }}"></script>*/
/*     <script type="text/javascript">*/
/*         function genemu_recaptcha_load()*/
/*         {*/
/*             Recaptcha.create('{{ public_key }}', '{{ id }}_div', {{ configs|json_encode|raw }});*/
/*         }*/
/* */
/*         if (window.addEventListener) {*/
/*             window.addEventListener('load', genemu_recaptcha_load, false);*/
/*         } else if (window.attachEvent) {*/
/*             window.attachEvent('onload', genemu_recaptcha_load);*/
/*         } else {*/
/*             window.onload = genemu_recaptcha_load;*/
/*         }*/
/*     </script>*/
/* {% endspaceless %}*/
/* {% endblock genemu_recaptcha_javascript %}*/
/* */
/* {% block genemu_tinymce_javascript %}*/
/* {% spaceless %}*/
/*     {% if configs.script_url is defined %}*/
/*         {% set configs = configs|merge({*/
/*             "script_url": asset(configs.script_url)*/
/*         }) %}*/
/*     {% else %}*/
/*         {% set configs = configs|merge({*/
/*             "mode": "exact",*/
/*             "elements": id*/
/*         }) %}*/
/*     {% endif %}*/
/* */
/*     <script type="text/javascript">*/
/*         jQuery(document).ready(function($) {*/
/*             var $configs = {{ configs|json_encode|raw }};*/
/* */
/*         {%- if configs.script_url is defined %}*/
/* */
/*             var $textarea = jQuery('#{{ id }}');*/
/*             if($textarea.is('[required]')) {*/
/*                 $configs.oninit = function(editor) {*/
/*                     editor.onChange.add(function(ed, l) { ed.save(); });*/
/*                 };*/
/*             }*/
/*             $textarea.tinymce($configs);*/
/*         {% else %}*/
/* */
/*             tinyMCE.init($configs);*/
/*         {% endif -%}*/
/* */
/*         });*/
/*     </script>*/
/* {% endspaceless %}*/
/* {% endblock genemu_tinymce_javascript %}*/
/* */
/* {% block genemu_jquerydate_javascript %}*/
/* {% spaceless %}*/
/* */
/*     <script type="text/javascript">*/
/*         jQuery(document).ready(function($) {*/
/*             $field = $('#{% if widget != "single_text" %}datepicker_{% endif %}{{ id }}');*/
/*         */
/*         {% block genemu_jquerydate_javascript_prototype %}*/
/* */
/*         {% if configs.buttonImage is defined %}*/
/*             {% set configs = configs|merge({*/
/*                 "buttonImage": asset(configs.buttonImage)*/
/*             }) %}*/
/*         {% endif %}*/
/* */
/*         {% if culture == "en" %}*/
/*             {% set culture = "en-GB" %}*/
/*         {% endif %}*/
/* */
/*             var $configs = $.extend({*/
/*                 minDate: new Date({{ min_year }}, 0, 1),*/
/*                 maxDate: new Date({{ max_year }}, 11, 31)*/
/*             }, $.datepicker.regional['{{ culture }}'] ,{{ configs|json_encode|raw }});*/
/* */
/*         {% if widget != "single_text" %}*/
/*             var $year = $('#{{ form.year.vars.id }}');*/
/*             var $month = $('#{{ form.month.vars.id }}');*/
/*             var $day = $('#{{ form.day.vars.id }}');*/
/* */
/*             $configs.onSelect = function(date) {*/
/*                 $year.val(parseInt(date.substring(0, 4), 10));*/
/*                 $month.val(parseInt(date.substring(5, 7), 10));*/
/*                 $day.val(parseInt(date.substring(8), 10));*/
/*             }*/
/*         {% endif %}*/
/* */
/*             $field.datepicker($configs);*/
/*         {% endblock %}*/
/*         });*/
/*     </script>*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block genemu_jqueryslider_javascript %}*/
/* {% spaceless %}*/
/*     <script type="text/javascript">*/
/*         jQuery(document).ready(function($) {*/
/*             var $field = $('#{{ id }}');*/
/*             var $configs = $.extend({{ configs|json_encode|raw }}, {*/
/*                 value: {{ value ? value : 0 }},*/
/*                 slide: function(event, ui) {*/
/*                     $field.val(ui.value);*/
/*                 }*/
/*             });*/
/* */
/*             $('#{{ id }}_slider').slider($configs);*/
/*         });*/
/*     </script>*/
/* {% endspaceless %}*/
/* {% endblock genemu_jqueryslider_javascript %}*/
/* */
/* {% block genemu_jquerycolor_javascript %}*/
/* {% spaceless %}*/
/*     <script type="text/javascript">*/
/*         jQuery(document).ready(function($) {*/
/*             var $field = $('#{{ id }}');*/
/*             var $configs = $.extend({*/
/*                 color: '#' + $field.val(),*/
/*                 onBeforeShow: function() {*/
/*                     $(this).ColorPickerSetColor($field.val());*/
/*                 }*/
/*             }, {{ configs|json_encode|raw }});*/
/* */
/*         {% if widget == "image" %}*/
/*             $picker = $('#{{ id }}_color');*/
/* */
/*             $picker.ColorPicker($.extend({*/
/*                 onChange: function(hsb, hex, rgb) {*/
/*                     $field.val(hex);*/
/* */
/*                     $('div', $picker).css({*/
/*                         backgroundColor: '#' + hex*/
/*                     });*/
/*                 }*/
/*             }, $configs));*/
/*         {% else %}*/
/*             $field.ColorPicker($.extend({*/
/*                 onChange: function(hsb, hex, rgb) {*/
/*                     $field.val(hex).css({*/
/*                         backgroundColor: '#' + hex*/
/*                     });*/
/*                 }*/
/*             }, $configs));*/
/*         {% endif %}*/
/*         });*/
/*     </script>*/
/* {% endspaceless %}*/
/* {% endblock genemu_jquerycolor_javascript %}*/
/* */
/* {% block genemu_jqueryrating_javascript %}*/
/* {% spaceless %}*/
/*     <script type="text/javascript">*/
/*         jQuery(document).ready(function($) {*/
/*             $('[name="{{ full_name }}"]').rating({{ configs|json_encode|raw }});*/
/*         });*/
/*     </script>*/
/* {% endspaceless %}*/
/* {% endblock genemu_jqueryrating_javascript %}*/
/* */
/* {% block genemu_jquerytokeninput_javascript %}*/
/* {% spaceless %}*/
/*     <script type="text/javascript">*/
/*         jQuery(document).ready(function($) {*/
/*             var $field = $('#{{ id }}');*/
/*             var $tokeninput = $('#tokeninput_{{ id }}');*/
/* */
/*             var update_hidden_sourceinput = function(item) {*/
/*                 var $val = $tokeninput.tokenInput('get');*/
/*             {% if multiple is empty %}*/
/*                 for (first in $val) break;*/
/*                 $val = $val[first];*/
/*             {% endif %}*/
/* */
/*                 $field.val(JSON.stringify($val));*/
/*             };*/
/* */
/*             {% if value is not empty %}*/
/*                 {% if multiple is empty %}*/
/*                     {% set prePopulate = '[' ~ value ~ ']' %}*/
/*                 {% else %}*/
/*                     {% set prePopulate = value %}*/
/*                 {% endif %}*/
/*             {% endif %}*/
/* */
/*             var $configs = $.extend({{ configs|json_encode|raw }}, {*/
/*                 prePopulate: {{ prePopulate|raw }},*/
/*                 onAdd: update_hidden_sourceinput,*/
/*                 onDelete: update_hidden_sourceinput*/
/*             });*/
/* */
/*             $tokeninput.tokenInput(*/
/*             {% if route_name %}*/
/*                 '{{ path(route_name) }}'*/
/*             {% else %}*/
/*                 {% set sourceChoices = [] %}*/
/*                 {% for choice in choices %}*/
/*                     {% set sourceChoices = sourceChoices|merge([{'value': choice.value, 'label': choice.label}]) %}*/
/*                 {% endfor %}*/
/*                 {{ sourceChoices|json_encode|raw }}*/
/*             {% endif %},*/
/*                 $configs*/
/*             );*/
/*         });*/
/*     </script>*/
/* {% endspaceless %}*/
/* {% endblock genemu_jquerytokeninput_javascript %}*/
/* */
/* {% block genemu_jqueryautocompleter_javascript %}*/
/* {% spaceless %}*/
/*     <script type="text/javascript">*/
/*         jQuery(document).ready(function($) {*/
/*             var $field = $('#{{ id }}');*/
/*             var $autocompleter = $('#autocompleter_{{ id }}');*/
/*             var $configs = {*/
/*                 focus: function(event, ui) {*/
/*                     return false;*/
/*                 },*/
/*                 select: function(event, ui) {*/
/*                 {% if multiple %}*/
/*                     terms = this.value.split(/,\s*//* );*/
/*                     terms.pop();*/
/*                     terms.push(ui.item.label);*/
/*                     terms.push('');*/
/*                     this.value = terms.join(', ');*/
/* */
/*                     terms = $field.val();*/
/*                     terms = !terms?[]:JSON.parse(terms);*/
/*                     terms.push(ui.item);*/
/*                 {% else %}*/
/*                     this.value = ui.item.label;*/
/*                     terms = ui.item;*/
/*                 {% endif %}*/
/*                     $field.val(JSON.stringify(terms));*/
/* */
/*                     return false;*/
/*                 }*/
/*             };*/
/* */
/*             {% if route_name %}*/
/*                 $configs.source = function(request, response) {*/
/*                     $.getJSON('{{ path(route_name) }}', {*/
/*                         term: request.term*/
/*                     }, response);*/
/*                 };*/
/*             {% else %}*/
/*                 {% set sourceChoices = [] %}*/
/*                 {% for choice in choices %}*/
/*                     {% set sourceChoices = sourceChoices|merge([{'value': choice.value, 'label': choice.label}]) %}*/
/*                 {% endfor %}*/
/*                 $configs.source = {{ sourceChoices|json_encode|raw }};*/
/*             {% endif %}*/
/* */
/*                 $autocompleter.autocomplete($configs);*/
/* */
/*             {% if free_values %}*/
/*                 $autocompleter.keyup(function(){*/
/*                     var val ={}*/
/*                     var fieldval = $(this).val();*/
/*                     val['value'] = fieldval;*/
/*                     val['label'] = fieldval;*/
/* */
/*                     $field.val(JSON.stringify(val));*/
/*                 });*/
/*             {% endif %}*/
/* */
/*             {% if multiple %}*/
/*                 var $source = $autocompleter.data('autocomplete').source;*/
/* */
/*                 $autocompleter.autocomplete('option', 'source', function(request, response) {*/
/*                     request.term = request.term.split(/,\s*//* ).pop();*/
/* */
/*                     $source(request, response);*/
/*                 });*/
/*             {% endif %}*/
/*         });*/
/*     </script>*/
/* {% endspaceless %}*/
/* {% endblock genemu_jqueryautocompleter_javascript %}*/
/* */
/* {% block genemu_jqueryautocomplete_javascript %}*/
/* {% spaceless %}*/
/*     <script type="text/javascript">*/
/*         jQuery(document).ready(function($) {*/
/*             var $autocompleter = $('#{{ id }}');*/
/*             var $configs = {{ configs|json_encode|raw }};*/
/* */
/*             {% if route_name %}*/
/*                 $configs.source = function(request, response) {*/
/*                     $.getJSON('{{ path(route_name) }}', {*/
/*                         term: request.term*/
/*                     }, response);*/
/*                 };*/
/*             {% else %}*/
/*                 $configs.source = {{ suggestions|json_encode|raw }};*/
/*             {% endif %}*/
/* */
/*             $autocompleter.autocomplete($configs);*/
/*             */
/*             {% if configs.minLength is defined and 0 == configs.minLength %}*/
/*                 $autocompleter.focus(function() {*/
/*                     $(this).autocomplete("search", "");*/
/*                 });*/
/*             {% endif %}*/
/*         });*/
/*     </script>*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block genemu_jquerychosen_javascript %}*/
/* {% spaceless %}*/
/*     <script type="text/javascript">*/
/*         jQuery(document).ready(function($) {*/
/*             $field = $('#{{ id }}');*/
/* */
/*             {% block genemu_jquerychosen_javascript_prototype %}*/
/*                 $field.chosen({*/
/*                     no_results_text: "{{ no_results_text|trans({}, translation_domain) }}",*/
/*                     allow_single_deselect: {{ allow_single_deselect ? 'true' : 'false' }},*/
/*                     disable_search_threshold: {{ disable_search_threshold }}*/
/*                 });*/
/*             {% endblock %}*/
/*         });*/
/*     </script>*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block genemu_jquerygeolocation_javascript %}*/
/* {% spaceless %}*/
/*     {# Elements generation #}*/
/*     {% if map is sameas(true) %}*/
/*         {% set elements = elements|merge({"map": "#" ~ id ~ "_map"}) %}*/
/*     {% endif %}*/
/* */
/*     {% if form.latitude is defined %}*/
/*         {% set elements = elements|merge({"lat": "#" ~ form.latitude.vars.id}) %}*/
/*     {% endif %}*/
/* */
/*     {% if form.longitude is defined %}*/
/*         {% set elements = elements|merge({"lng": "#" ~ form.longitude.vars.id}) %}*/
/*     {% endif %}*/
/* */
/*     {% if form.locality is defined %}*/
/*         {% set elements = elements|merge({"locality": "#" ~ form.locality.vars.id}) %}*/
/*     {% endif %}*/
/* */
/*     {% if form.country is defined %}*/
/*         {% set elements = elements|merge({"country": "#" ~ form.country.vars.id}) %}*/
/*     {% endif %}*/
/* */
/*     {# Configs generation #}*/
/*     {% if elements | length > 0 %}*/
/*         {% set configs = configs|merge({"elements": elements}) %}*/
/*     {% endif %}*/
/* */
/*     <script type="text/javascript">*/
/*         jQuery(document).ready(function($) {*/
/*             $field = $('#{{ form.address.vars.id }}');*/
/* */
/*             $field.addresspicker({{ configs|json_encode|raw }});*/
/* */
/*             {% if map is sameas(true) %}*/
/*                 var gmarker = $field.addresspicker('marker');*/
/*                 gmarker.setVisible(true);*/
/* */
/*                 $field.addresspicker('updatePosition');*/
/*             {% endif %}*/
/*         });*/
/*     </script>*/
/* {% endspaceless %}*/
/* {% endblock genemu_jquerygeolocation_javascript %}*/
/* */
/* {% block genemu_jqueryfile_javascript %}*/
/* {% spaceless %}*/
/* <script type="text/javascript">*/
/*     jQuery(document).ready(function($) {*/
/*         var $field = $('#{{ id }}_upload');*/
/*         {% block genemu_jqueryfile_javascript_prototype %}*/
/*         var $form = $field.closest('form');*/
/*         var $queue = $('#{{ id }}_queue');*/
/*         var $nbQueue = 0;*/
/* */
/*         var $configs = $.extend({{ configs|merge({*/
/*             'swf':       asset(configs.swf),*/
/*             'cancelImg': asset(configs.cancelImg),*/
/*             'uploader':  path(configs.script),*/
/*             'queueID':   id ~ '_queue'*/
/*         })|json_encode|raw }}, {*/
/*             onUploadSuccess: function(file, data, response) {*/
/*                 data = jQuery.parseJSON(data);*/
/* */
/*                 if (data.result == '1') {*/
/*                     {% if multiple %}*/
/*                         var value = $('#{{ id }}').val();*/
/*                         if (value != '') {*/
/*                             value += ",";*/
/*                         }*/
/*                         value += data.file;*/
/*                     {% else %}*/
/*                         var value = data.file;*/
/*                     {% endif %}*/
/* */
/*                     $('#{{ id }}').val(value);*/
/*                     $nbQueue--;*/
/*                 } else {*/
/*                     alert('Error');*/
/*                 }*/
/*             },*/
/*             onSelect: function(file) {*/
/*                 $nbQueue++;*/
/*             },*/
/*             onUploadError: function(file, errorCode, errorMsg, errorString) {*/
/*                 alert('error');*/
/*             }*/
/*         });*/
/* */
/*     {% if configs.auto is not defined or configs.auto is sameas(false) %}*/
/*         $configs.onAllComplete = function(event, data) {*/
/*             $form.submit();*/
/*         };*/
/* */
/*         $form.submit(function(event) {*/
/*             if (0 === $nbQueue) {*/
/*                 return $joinFiles();*/
/*             } else {*/
/*                 $field.uploadifyUpload();*/
/*                 event.preventDefault();*/
/*             }*/
/*         });*/
/*     {% else %}*/
/*         $form.submit(function(event) {*/
/*             return $joinFiles();*/
/*         });*/
/*     {% endif %}*/
/* */
/*         var $joinFiles = function() {*/
/*             if ($files = $field.data('files')) {*/
/*                 $field.val($files.join(','));*/
/*             }*/
/* */
/*             return true;*/
/*         }*/
/* */
/*         $field.uploadify($configs);*/
/*         {% endblock %}*/
/*     });*/
/* </script>*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block genemu_jqueryimage_javascript %}*/
/* {% spaceless %}*/
/* <script type="text/javascript">*/
/*     jQuery(document).ready(function($) {*/
/*         var $field   = $('#{{ id }}_upload');*/
/*         {% block genemu_jqueryimage_javascript_prototype %}*/
/*         var $form    = $field.closest('form');*/
/*         var $preview = $('#{{ id }}_img_preview');*/
/*         var $options = $('#{{ id }}_options');*/
/*         // Base path for apps not on DocumentRoot*/
/*         var $basePath = '{{ asset(configs.folder) }}';*/
/*         $basePath = $basePath.substr(0, $basePath.length - '{{ configs.folder }}'.length);*/
/* */
/*         var $coords = {};*/
/*         var $crop = null;*/
/*         var $ratio = 1;*/
/* */
/*         var $configs = $.extend({{ configs|merge({*/
/*             'swf':       asset(configs.swf),*/
/*             'cancelImg': asset(configs.cancelImg),*/
/*             'uploader':  path(configs.script),*/
/*             'queueID':   id ~ '_queue'*/
/*         })|json_encode|raw }}, {*/
/*             onUploadSuccess: function(file, data, response) {*/
/*                 data = jQuery.parseJSON(data);*/
/* */
/*                 if (data.result == '1') {*/
/*                     $('#{{ id }}').val(data.file);*/
/* */
/*                     // add if and only if path is relative*/
/*                     if (data.thumbnail.file.search(/^[/\\]/) < 0) {*/
/*                         data.thumbnail.file = $basePath + data.thumbnail.file;*/
/*                     }*/
/* */
/*                     createCrop({*/
/*                         image:      data.image,*/
/*                         thumbnail:  data.thumbnail*/
/*                     });*/
/*                 } else {*/
/*                     alert('Error');*/
/*                 }*/
/*             },*/
/*             onUploadError: function(file, errorCode, errorMsg, errorString) {*/
/*                 alert('error');*/
/*             }*/
/*         });*/
/* */
/*         var createCrop = function (data) {*/
/*             if ($crop) {*/
/*                 $crop.destroy();*/
/*             }*/
/* */
/*             // add if and only if path is relative*/
/*             if (data.thumbnail.file.search(/^[/\\]/) < 0) {*/
/*                 data.thumbnail.file = $basePath + data.thumbnail.file;*/
/*             }*/
/*             var $img = new Image();*/
/* */
/*             console.log(data);*/
/*             $($img).load(function() {*/
/*                 {% set widthMax = data.thumbnail is defined ? data.thumbnail.width : 500 %}*/
/* */
/*                 $ratio = data.image.width > {{ widthMax }} ? data.image.width / {{ widthMax }} : 1;*/
/*                 $('.crop', $options).hide();*/
/* */
/*                 $preview*/
/*                     .width(Math.round(data.image.width / $ratio))*/
/*                     .height(Math.round(data.image.height / $ratio))*/
/*                     .attr('src', this.src);*/
/* */
/*                 if (!$crop) {*/
/*                     $options.fadeIn();*/
/*                 }*/
/* */
/*                 $preview.Jcrop({*/
/*                     onSelect: checkCoords,*/
/*                     onChange: checkCoords*/
/*                 }, function() {*/
/*                     $crop = this;*/
/*                 });*/
/*             }).attr('src', data.thumbnail.file);*/
/*         }*/
/* */
/*         var checkCoords = function(coords) {*/
/* */
/*             if (coords.w > 0 && coords.h > 0) {*/
/*                 $('.crop', $options).fadeIn();*/
/* */
/*                 $coords = {*/
/*                     x: coords.x * $ratio,*/
/*                     y: coords.y * $ratio,*/
/*                     w: coords.w * $ratio,*/
/*                     h: coords.h * $ratio*/
/*                 };*/
/*             } else {*/
/*                 $('.crop', $options).fadeOut();*/
/*             }*/
/*         }*/
/* */
/*         $('.change', $options).click(function() {*/
/*             var $this = $(this);*/
/*             var $regex = new RegExp('^\\b(.*?) (.*)\\b', 'g');*/
/*             var $filter = $this.attr('class').replace($regex, '$1');*/
/* */
/*             var $data = {*/
/*                 filter: $filter,*/
/*                 image: $('#{{ id }}').val(),*/
/*                 opacity: 0.5*/
/*             };*/
/* */
/*             if ('crop' === $filter && !$.isEmptyObject($coords)) {*/
/*                 $data = $.extend($data, $coords);*/
/*             }*/
/* */
/*             if (*/
/*                 $.inArray($filter, {{ filters|json_encode|raw }}) !== -1 ||*/
/*                 ( 'crop' === $filter && !$.isEmptyObject($coords) )*/
/*             ) {*/
/*                 $this.addClass('loading');*/
/* */
/*                 $.ajax({*/
/*                     type: 'POST',*/
/*                     url: '{{ path('genemu_form_image') }}',*/
/*                     data: $data,*/
/*                     dataType: 'json',*/
/*                     success: function(data) {*/
/*                         if (data.result == '1') {*/
/*                             $('#{{ id }}').val(data.file);*/
/* */
/*                             createCrop({*/
/*                                 image: data.image,*/
/*                                 thumbnail: $.isEmptyObject(data.thumbnail) ? $.extend(data.image, {*/
/*                                     file: data.file*/
/*                                 }) : data.thumbnail*/
/*                             });*/
/*                         } else {*/
/*                             alert('Error');*/
/*                         }*/
/* */
/*                         $this.removeClass('loading');*/
/*                     }*/
/*                 });*/
/*             }*/
/*         });*/
/* */
/*     {% if value %}*/
/*         createCrop({*/
/*             thumbnail: {*/
/*                 file: '{{ thumbnail is defined ? thumbnail.file : value }}',*/
/*                 width: {{ thumbnail is defined ? thumbnail.width : width }},*/
/*                 height: {{ thumbnail is defined ? thumbnail.height : height }},*/
/*             },*/
/*             image: {*/
/*                 width: {{ width }},*/
/*                 height: {{ height }}*/
/*             }*/
/*         });*/
/*     {% else %}*/
/*         $options.hide();*/
/*     {% endif %}*/
/* */
/*         $field.uploadify($configs);*/
/*         {% endblock %}*/
/*     });*/
/* </script>*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block genemu_jqueryselect2_javascript %}*/
/*     <script type="text/javascript">*/
/*     jQuery(document).ready(function($) {*/
/*         $field = $('#{{ id }}');*/
/* */
/*         {% block genemu_jqueryselect2_javascript_prototype %}*/
/*             $field.select2({{ configs|json_encode|raw }});*/
/*         {% endblock %}*/
/*     });*/
/*     </script>*/
/* {% endblock %}*/
/* */
/* */
