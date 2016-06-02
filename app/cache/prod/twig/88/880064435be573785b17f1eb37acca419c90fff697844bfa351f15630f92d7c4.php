<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_fc483e1ceeccbd9e8c5c264941f880f67959cddb4b3f61f49e57a152b3043a4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'body2' => array($this, 'block_body2'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a50c281e483a2e8094ff768ba145c0f27966e96b4e62d4a28522d0a949c5aee3 = $this->env->getExtension("native_profiler");
        $__internal_a50c281e483a2e8094ff768ba145c0f27966e96b4e62d4a28522d0a949c5aee3->enter($__internal_a50c281e483a2e8094ff768ba145c0f27966e96b4e62d4a28522d0a949c5aee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a50c281e483a2e8094ff768ba145c0f27966e96b4e62d4a28522d0a949c5aee3->leave($__internal_a50c281e483a2e8094ff768ba145c0f27966e96b4e62d4a28522d0a949c5aee3_prof);

    }

    // line 3
    public function block_body2($context, array $blocks = array())
    {
        $__internal_8b1bdb31a25d74ca19b903eec739c3f1c74a4ca29405ab052f923aad46f16cc8 = $this->env->getExtension("native_profiler");
        $__internal_8b1bdb31a25d74ca19b903eec739c3f1c74a4ca29405ab052f923aad46f16cc8->enter($__internal_8b1bdb31a25d74ca19b903eec739c3f1c74a4ca29405ab052f923aad46f16cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body2"));

        // line 4
        echo "    <div style='max-width: 500px; margin: 0 auto;'>
        <div class=\"login\">
            <h1>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_authentication", array(), "SonataUserBundle"), "html", null, true);
        echo "</h1>
            <br>
            ";
        // line 8
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 9
            echo "                <div class=\"alert alert-danger alert-error\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
            ";
        }
        // line 11
        echo "            <form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" role=\"form\" class=\"form-horizontal\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\"/>
                <div class=\"form-group\">
                    <label for=\"username\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\"/>
                </div>
                <div class=\"form-group control-group\">
                    <label for=\"password\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\"/>
                </div>
                <div class=\"form-group\">
                    <div>
                        <div class=\"checkbox control-group\">
                            <label for=\"remember_me\">
                                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                                ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                            </label>
                        </div>
                    </div>
                </div>
                <div class=\"form-group\">
                    <input type=\"submit\" id=\"_submit\" name=\"_submit\" style='width : 50%'class=\"btn pc_skyblue_btn\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
                    <a class=\"btn pc_skyblue_btn pull-right\" style='width : 50%' href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">S'inscrire</a>
                </div>
            </form>
            <a class=\"pull-right\" href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\"> <strong>Mot de passe oublié ?</strong></a>           
        </div>
    </div>
";
        
        $__internal_8b1bdb31a25d74ca19b903eec739c3f1c74a4ca29405ab052f923aad46f16cc8->leave($__internal_8b1bdb31a25d74ca19b903eec739c3f1c74a4ca29405ab052f923aad46f16cc8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 36,  101 => 33,  97 => 32,  88 => 26,  77 => 18,  71 => 15,  67 => 14,  62 => 12,  57 => 11,  51 => 9,  49 => 8,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block body2 %}*/
/*     <div style='max-width: 500px; margin: 0 auto;'>*/
/*         <div class="login">*/
/*             <h1>{{ 'title_user_authentication'|trans({}, 'SonataUserBundle') }}</h1>*/
/*             <br>*/
/*             {% if error %}*/
/*                 <div class="alert alert-danger alert-error">{{ error|trans({}, 'FOSUserBundle') }}</div>*/
/*             {% endif %}*/
/*             <form action="{{ path("fos_user_security_check") }}" method="post" role="form" class="form-horizontal">*/
/*                 <input type="hidden" name="_csrf_token" value="{{ csrf_token }}"/>*/
/*                 <div class="form-group">*/
/*                     <label for="username">{{ 'security.login.username'|trans({}, 'FOSUserBundle') }}</label>*/
/*                     <input type="text" class="form-control" id="username" name="_username" value="{{ last_username }}" required="required"/>*/
/*                 </div>*/
/*                 <div class="form-group control-group">*/
/*                     <label for="password">{{ 'security.login.password'|trans({}, 'FOSUserBundle') }}</label>*/
/*                     <input type="password" class="form-control" id="password" name="_password" required="required"/>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <div>*/
/*                         <div class="checkbox control-group">*/
/*                             <label for="remember_me">*/
/*                                 <input type="checkbox" id="remember_me" name="_remember_me" value="on"/>*/
/*                                 {{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}*/
/*                             </label>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <input type="submit" id="_submit" name="_submit" style='width : 50%'class="btn pc_skyblue_btn" value="{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}"/>*/
/*                     <a class="btn pc_skyblue_btn pull-right" style='width : 50%' href="{{path("fos_user_registration_register")}}">S'inscrire</a>*/
/*                 </div>*/
/*             </form>*/
/*             <a class="pull-right" href="{{ path('fos_user_resetting_request') }}"> <strong>Mot de passe oublié ?</strong></a>           */
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */