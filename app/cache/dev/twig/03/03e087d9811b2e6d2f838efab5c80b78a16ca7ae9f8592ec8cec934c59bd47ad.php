<?php

/* SonataUserBundle:Profile:show.html.twig */
class __TwigTemplate_49b069be8c4e40bee28cb435b82a6f0cbed7bf307ccb8880645b002f235185b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "SonataUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c66d860159de1f374e1e70c7f2c2ed28b997c42f9d30234ac3695e6e09bcee0 = $this->env->getExtension("native_profiler");
        $__internal_7c66d860159de1f374e1e70c7f2c2ed28b997c42f9d30234ac3695e6e09bcee0->enter($__internal_7c66d860159de1f374e1e70c7f2c2ed28b997c42f9d30234ac3695e6e09bcee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c66d860159de1f374e1e70c7f2c2ed28b997c42f9d30234ac3695e6e09bcee0->leave($__internal_7c66d860159de1f374e1e70c7f2c2ed28b997c42f9d30234ac3695e6e09bcee0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d86893549ede0287ded9170d8a115df9c6942e634eb89219b3d0c1bd56564c09 = $this->env->getExtension("native_profiler");
        $__internal_d86893549ede0287ded9170d8a115df9c6942e634eb89219b3d0c1bd56564c09->enter($__internal_d86893549ede0287ded9170d8a115df9c6942e634eb89219b3d0c1bd56564c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "        <div class=\"container container-fluid\">
        <div class=\"row\">
            <div id=\"bouton\" class=\"col-sm-3 col-md-2 sidebar\">
                <ul class=\"nav nav-sidebar\">
                    <li><a class=\"pc_sidebar_element\" href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">Editer</a></li>
                    <li><a id=\"\" name=\"\" class=\"pc_sidebar_element\" href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("pc_home");
        echo "\"> Retour au menu</a></a></li>
                </ul>
            </div>
            <div class=\"col-sm-9  col-md-10  main\">
                <div class =\"pc_info_group form-horizontal\">
                    <div class=\"form-group\">
                        <label class='col-sm-3 pc_label control-label'>Nom d'utilisateur</label>
                        <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "'/></div>
                    </div>
                    <div class=\"form-group\">
                        <label class='col-sm-3 pc_label control-label'>E-mail</label>
                        <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "'/></div>
                    </div>
                    <div class=\"form-group\">
                        <label class='col-sm-3 pc_label control-label'>Nom</label>
                        <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lastName", array()), "html", null, true);
        echo "'/></div>
                    </div>
                    <div class=\"form-group\">
                        <label class='col-sm-3 pc_label control-label'>Prénom</label>
                        <div class='col-sm-4'><input disabled=\"disabled\" class=\"form-control\" value='";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "firstName", array()), "html", null, true);
        echo "'/></div>
                    </div>
                </div>
            </div>
        </div>
        </div>
";
        
        $__internal_d86893549ede0287ded9170d8a115df9c6942e634eb89219b3d0c1bd56564c09->leave($__internal_d86893549ede0287ded9170d8a115df9c6942e634eb89219b3d0c1bd56564c09_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 28,  74 => 24,  67 => 20,  60 => 16,  50 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* */
/* {% block body %}*/
/*         <div class="container container-fluid">*/
/*         <div class="row">*/
/*             <div id="bouton" class="col-sm-3 col-md-2 sidebar">*/
/*                 <ul class="nav nav-sidebar">*/
/*                     <li><a class="pc_sidebar_element" href="{{ path('fos_user_profile_edit') }}">Editer</a></li>*/
/*                     <li><a id="" name="" class="pc_sidebar_element" href="{{ path('pc_home') }}"> Retour au menu</a></a></li>*/
/*                 </ul>*/
/*             </div>*/
/*             <div class="col-sm-9  col-md-10  main">*/
/*                 <div class ="pc_info_group form-horizontal">*/
/*                     <div class="form-group">*/
/*                         <label class='col-sm-3 pc_label control-label'>Nom d'utilisateur</label>*/
/*                         <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ app.user.username }}'/></div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label class='col-sm-3 pc_label control-label'>E-mail</label>*/
/*                         <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ app.user.email  }}'/></div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label class='col-sm-3 pc_label control-label'>Nom</label>*/
/*                         <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ app.user.lastName }}'/></div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label class='col-sm-3 pc_label control-label'>Prénom</label>*/
/*                         <div class='col-sm-4'><input disabled="disabled" class="form-control" value='{{ app.user.firstName }}'/></div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         </div>*/
/* {% endblock %}*/
/* */
