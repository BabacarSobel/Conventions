<?php

/* ::layout.html.twig */
class __TwigTemplate_fffdbf396ce7e43047fb7878bc098fef84d14f90dc47b542af1fbbf9dcb8d452 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'body2' => array($this, 'block_body2'),
            'alertes' => array($this, 'block_alertes'),
            'messages' => array($this, 'block_messages'),
            'expirations' => array($this, 'block_expirations'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cbbf5a17d43891808daacabe5adf134984043246e4fddb4d7ae0f6b69531f7e8 = $this->env->getExtension("native_profiler");
        $__internal_cbbf5a17d43891808daacabe5adf134984043246e4fddb4d7ae0f6b69531f7e8->enter($__internal_cbbf5a17d43891808daacabe5adf134984043246e4fddb4d7ae0f6b69531f7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "
        ";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "    </head>        
    <body>
        
        <!-- Le logo + le menu-->
        <header  class=\"menu\">
            <div class='row-fluid'>
                <div id='logo' class=\"pull-left\">
                    <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("pc_home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/logo/logo.png"), "html", null, true);
        echo "\" alt=\"Site Logo\"></a>
                </div>
            </div>    
            <div class=\"row-fluid\">    
                <nav id=\"header\" class=\"top_menu pull-right\" >
                    <div class=\"navbar-header\">
                        <button id=\"\" type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#collapse\" aria-expanded=\"false\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                    </div>
                    <div class=\"collapse navbar-collapse\" id=\"collapse\">
                        <ul class=\"nav navbar-nav\">
                            ";
        // line 58
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 59
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("pc_home");
            echo "\">Accueil <span class=\"fa fa-home\"></span></a></li>
                            ";
            // line 60
            if ((twig_in_filter("ROLE_ADMIN", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array())) || twig_in_filter("ROLE_DIRECTION", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array())))) {
                // line 61
                echo "                            <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("fiche");
                echo "\"  role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Les fiches <span class=\"fa fa-archive\"></span></a></li>
                            ";
            }
            // line 63
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("demande");
            echo "\"  role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Les demandes <span class=\"fa fa-bars\"></span></a></li>
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Session <span class=\"fa fa-user\"></span></a>
                                <ul class=\"dropdown-menu\" style=\"margin-left: -90%\">
                                    <li><a href=\"";
            // line 67
            echo $this->env->getExtension('routing')->getPath("sonata_user_profile_show");
            echo "\">Profil</a></li>
                                    <li><a href=\"";
            // line 68
            echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
            echo "\">Changer mot de passe</a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li> <a href=\"";
            // line 70
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></li>
                                </ul>
                            </li> 
                                ";
        } else {
            // line 74
            echo "                                    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo " <i class='fa fa-sign-in'></i></a></li>
                                    <li><a href=\"";
            // line 75
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">S'inscrire <i class='fa  fa-check'></i></a></li>
                                ";
        }
        // line 77
        echo "                            </ul> 
                    </div>
                </nav>
            </div>
            <div class=\"row-fluid\">        
                <div class=\"row top_info pull-right\">
                    ";
        // line 83
        $this->displayBlock('menu', $context, $blocks);
        // line 96
        echo "                </div>
            </div>
        </header>
        
        <!-- les messages de notifications-->
        <div id='message' style=\"margin-top:9%;\">
            ";
        // line 102
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "error"), "method")) {
            // line 103
            echo "                <div class=\"alert alert-warning\">
                    ";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 105
                echo "                        ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "                </div>
            ";
        }
        // line 109
        echo "            ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method")) {
            // line 110
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 111
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 112
                echo "                        ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            echo "                </div>
            ";
        }
        // line 116
        echo "        </div>

        <!-- Corps de la page-->
        <div id=\"main\" style=\"overflow:visible;\">
            <div class=\"container container-fluid\">
                ";
        // line 121
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 122
            echo "                    ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "enabled", array()) == true)) {
                echo "                     
                        ";
                // line 123
                $this->displayBlock('body', $context, $blocks);
                // line 126
                echo "                    ";
            } else {
                // line 127
                echo "                        <p>Votre compte n'a pas été validé. Veillez contacter l'adminisatrateur pour la validation de votre compte.</p>
                    ";
            }
            // line 129
            echo "               ";
        } else {
            // line 130
            echo "                    
                    ";
            // line 131
            $this->displayBlock('body2', $context, $blocks);
            // line 133
            echo " 
               ";
        }
        // line 134
        echo " 
           </div>
        </div>
           
        <!--Le pied de page--> 
        <div class='row' style='margin-top: 100px;'>
            <nav class=\"navbar navbar-default footer\">
                <div class=\"container\">
                    <div class=\"pull-left copyright\">
                        <p> Copyright &copy; Polytech Montpellier ";
        // line 143
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ".</p>
                    </div>
                    <div class=\"pull-right\">
                        <a href=\"mailto:relindus@polytech.univ-montp2.fr\" class=\"btn pc_skyblue_btn\">contactez-nous</a>
                    </div>
                </div>
            </nav>
        </div>
    </body>
    
    <!-- les modals pour l'affichage des alertes-->
    ";
        // line 154
        if (array_key_exists("alertesA", $context)) {
            // line 155
            echo "        <div class=\"modal fade\" style=\"top:25%;outline: none;\" id=\"alertes1\"  role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content pc_modal\">
                    <div class=\"modal-header pc_modal_header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></button>
                        <h4 class=\"modal-title custom_align\" id=\"Heading\">Les alertes</h4>
                    </div>
                    <div class=\"modal-body\">
                        ";
            // line 163
            $this->displayBlock('alertes', $context, $blocks);
            // line 183
            echo "                    </div>
                    <div class=\"modal-footer \">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove\"></span> Fermer</button>
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        // line 190
        echo " 
    
    ";
        // line 192
        if (array_key_exists("messagesA", $context)) {
            echo "            
        <div class=\"modal fade\" style=\"top:25%;outline: none;\" id=\"messages\"  role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content pc_modal\">
                    <div class=\"modal-header pc_modal_header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></button>
                        <h4 class=\"modal-title custom_align\" id=\"Heading\">Les messages</h4>
                    </div>
                    <div class=\"modal-body\">
                        ";
            // line 201
            $this->displayBlock('messages', $context, $blocks);
            // line 221
            echo "                    </div>
                    <div class=\"modal-footer \">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove\"></span> Fermer</button>
                    </div>
                </div>
            </div>
        </div>  
    ";
        }
        // line 228
        echo " 
    
    ";
        // line 230
        if (array_key_exists("alertesExp", $context)) {
            echo "            
        <div class=\"modal fade\" style=\"top:25%;outline: none;\" id=\"expirations\"  role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content pc_modal\">
                    <div class=\"modal-header pc_modal_header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></button>
                        <h4 class=\"modal-title custom_align\" id=\"Heading\">Les expirations proches</h4>
                    </div>
                    <div class=\"modal-body\">
                        ";
            // line 239
            $this->displayBlock('expirations', $context, $blocks);
            // line 259
            echo "                    </div>
                    <div class=\"modal-footer \">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove\"></span> Fermer</button>
                    </div>
                </div>
            </div>
        </div>  
    ";
        }
        // line 266
        echo "                    
</html>";
        
        $__internal_cbbf5a17d43891808daacabe5adf134984043246e4fddb4d7ae0f6b69531f7e8->leave($__internal_cbbf5a17d43891808daacabe5adf134984043246e4fddb4d7ae0f6b69531f7e8_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_821a8d22293cda8b0485ebd50314c143bc1fad3e76d6be8e5b7830d6c15d55a3 = $this->env->getExtension("native_profiler");
        $__internal_821a8d22293cda8b0485ebd50314c143bc1fad3e76d6be8e5b7830d6c15d55a3->enter($__internal_821a8d22293cda8b0485ebd50314c143bc1fad3e76d6be8e5b7830d6c15d55a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PolyConventions";
        
        $__internal_821a8d22293cda8b0485ebd50314c143bc1fad3e76d6be8e5b7830d6c15d55a3->leave($__internal_821a8d22293cda8b0485ebd50314c143bc1fad3e76d6be8e5b7830d6c15d55a3_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cfbc0fb6f826ba4bfb7e820c58abbba04b48a560f321d24d4ee4e266751df840 = $this->env->getExtension("native_profiler");
        $__internal_cfbc0fb6f826ba4bfb7e820c58abbba04b48a560f321d24d4ee4e266751df840->enter($__internal_cfbc0fb6f826ba4bfb7e820c58abbba04b48a560f321d24d4ee4e266751df840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "   
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link rel=\"stylesheet\" href=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/themes/ui-lightness/jquery-ui.css\" type=\"text/css\" />\t
            <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.datatables.net/1.10.10/css/jquery.dataTables.css\">
            <!--[if IE]>
                    <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://html5shiv.googlecode.com/svn/trunk/html5.js"), "html", null, true);
        echo "\"></script>
                    <![endif]-->
        ";
        
        $__internal_cfbc0fb6f826ba4bfb7e820c58abbba04b48a560f321d24d4ee4e266751df840->leave($__internal_cfbc0fb6f826ba4bfb7e820c58abbba04b48a560f321d24d4ee4e266751df840_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_03697971cc2b2b5be16e69c256393b1230223e8e6c8416ab6fa9d562885f86c9 = $this->env->getExtension("native_profiler");
        $__internal_03697971cc2b2b5be16e69c256393b1230223e8e6c8416ab6fa9d562885f86c9->enter($__internal_03697971cc2b2b5be16e69c256393b1230223e8e6c8416ab6fa9d562885f86c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 20
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery-2.1.0.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery-ui-1.11.4/jquery-ui.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" charset=\"utf8\" src=\"//cdn.datatables.net/1.10.10/js/jquery.dataTables.js\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/messages_fr.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"//cdn.tinymce.com/4/tinymce.min.js\"></script>
            <script>
                tinymce.init({ 
                    selector:'textarea',
                    min_height :200
                });
            </script>

        ";
        
        $__internal_03697971cc2b2b5be16e69c256393b1230223e8e6c8416ab6fa9d562885f86c9->leave($__internal_03697971cc2b2b5be16e69c256393b1230223e8e6c8416ab6fa9d562885f86c9_prof);

    }

    // line 83
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f8fea66d48b5db25ec71b74e73f412e57f70bfc18b42ebc387a2506c695cb376 = $this->env->getExtension("native_profiler");
        $__internal_f8fea66d48b5db25ec71b74e73f412e57f70bfc18b42ebc387a2506c695cb376->enter($__internal_f8fea66d48b5db25ec71b74e73f412e57f70bfc18b42ebc387a2506c695cb376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 84
        echo "                        ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 85
            echo "                            <p style='color:#004874; font-size: 15px; margin-top: 5px;'> Bonjour ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
                                ";
            // line 86
            if (twig_in_filter("ROLE_ADMIN", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()))) {
                // line 87
                echo "                                    <a data-toggle='modal' data-target='#alertes1'  class='pull-right notification' data-toggle=\"dropdown\"><span class=\"fa  fa-bell\"></span></a>
                                    <a data-toggle='modal' data-target='#messages' class='pull-right notification'><span class=\"fa fa-envelope\"></span></a>
                                    <a data-toggle='modal' data-target='#expirations' class='pull-right notification'><span class=\"fa  fa-exclamation-triangle\"></span></a>
                                ";
            }
            // line 91
            echo "                            </p>
                        ";
        } else {
            // line 93
            echo "                            <p style='color:#004874; font-size: 12px;'> On préconise l'utilisation de Mozilla Firefox ou Google Chrome pour une expérience utilisateur optimale.</p>
                        ";
        }
        // line 95
        echo "                    ";
        
        $__internal_f8fea66d48b5db25ec71b74e73f412e57f70bfc18b42ebc387a2506c695cb376->leave($__internal_f8fea66d48b5db25ec71b74e73f412e57f70bfc18b42ebc387a2506c695cb376_prof);

    }

    // line 123
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3e206f956171ee4cc5d23bd9ce64fb951626aaf7d36efe886bab09d37648bc1 = $this->env->getExtension("native_profiler");
        $__internal_f3e206f956171ee4cc5d23bd9ce64fb951626aaf7d36efe886bab09d37648bc1->enter($__internal_f3e206f956171ee4cc5d23bd9ce64fb951626aaf7d36efe886bab09d37648bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 124
        echo "                            ";
        // line 125
        echo "                        ";
        
        $__internal_f3e206f956171ee4cc5d23bd9ce64fb951626aaf7d36efe886bab09d37648bc1->leave($__internal_f3e206f956171ee4cc5d23bd9ce64fb951626aaf7d36efe886bab09d37648bc1_prof);

    }

    // line 131
    public function block_body2($context, array $blocks = array())
    {
        $__internal_ba87717c27b2f19011b3949d7e8ec019f0079dacf32df6fda11778293ec3a90a = $this->env->getExtension("native_profiler");
        $__internal_ba87717c27b2f19011b3949d7e8ec019f0079dacf32df6fda11778293ec3a90a->enter($__internal_ba87717c27b2f19011b3949d7e8ec019f0079dacf32df6fda11778293ec3a90a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body2"));

        // line 132
        echo "                        ";
        // line 133
        echo "                    ";
        
        $__internal_ba87717c27b2f19011b3949d7e8ec019f0079dacf32df6fda11778293ec3a90a->leave($__internal_ba87717c27b2f19011b3949d7e8ec019f0079dacf32df6fda11778293ec3a90a_prof);

    }

    // line 163
    public function block_alertes($context, array $blocks = array())
    {
        $__internal_16777b30baa036987e9ef80d72d93c15a4fad2bc015ab7a676016326eb44b9b5 = $this->env->getExtension("native_profiler");
        $__internal_16777b30baa036987e9ef80d72d93c15a4fad2bc015ab7a676016326eb44b9b5->enter($__internal_16777b30baa036987e9ef80d72d93c15a4fad2bc015ab7a676016326eb44b9b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "alertes"));

        // line 164
        echo "                            <table id=\"table4\" class='table table-bordered table-condensed'>
                                <thead>
                                    <tr>
                                        <th>Date alerte</th>
                                        <th>nom</th>
                                        <th>message</th>
                                    </tr>
                                </thead>
                                <tbody>
                                ";
        // line 173
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alertesA"]) ? $context["alertesA"] : $this->getContext($context, "alertesA")));
        foreach ($context['_seq'] as $context["_key"] => $context["alerte"]) {
            // line 174
            echo "                                    <tr>
                                        <td><a href=\"";
            // line 175
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($context["alerte"], "route", array()), array("id" => $this->getAttribute($context["alerte"], "ownerId", array()))), "html", null, true);
            echo "\"><span class=\"label label-warning\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["alerte"], "dateAlerte", array()), "d-m-Y"), "html", null, true);
            echo "</span> </a></td>
                                        <td><a href=\"";
            // line 176
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($context["alerte"], "route", array()), array("id" => $this->getAttribute($context["alerte"], "ownerId", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["alerte"], "intitule", array()), "html", null, true);
            echo "</a></td>
                                        <td><a href=\"";
            // line 177
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($context["alerte"], "route", array()), array("id" => $this->getAttribute($context["alerte"], "ownerId", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["alerte"], "objet", array()), "html", null, true);
            echo "</a></td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alerte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        echo "                                </tbody>
                            </table>
                        ";
        
        $__internal_16777b30baa036987e9ef80d72d93c15a4fad2bc015ab7a676016326eb44b9b5->leave($__internal_16777b30baa036987e9ef80d72d93c15a4fad2bc015ab7a676016326eb44b9b5_prof);

    }

    // line 201
    public function block_messages($context, array $blocks = array())
    {
        $__internal_37ba4a9c7adfc1062893bf74a7ad51edabf09dcab2ffea267b40cefb01e80628 = $this->env->getExtension("native_profiler");
        $__internal_37ba4a9c7adfc1062893bf74a7ad51edabf09dcab2ffea267b40cefb01e80628->enter($__internal_37ba4a9c7adfc1062893bf74a7ad51edabf09dcab2ffea267b40cefb01e80628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        // line 202
        echo "                            <table id=\"table4\" class='table table-bordered table-condensed'>
                                <thead>
                                    <tr>
                                        <th>Date alerte</th>
                                        <th>nom</th>
                                        <th>message</th>
                                    </tr>
                                </thead>
                                <tbody>
                                ";
        // line 211
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messagesA"]) ? $context["messagesA"] : $this->getContext($context, "messagesA")));
        foreach ($context['_seq'] as $context["_key"] => $context["alerte"]) {
            // line 212
            echo "                                    <tr>
                                        <td><a href=\"";
            // line 213
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($context["alerte"], "route", array()), array("id" => $this->getAttribute($context["alerte"], "ownerId", array()))), "html", null, true);
            echo "\"><span class=\"label label-warning\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["alerte"], "dateAlerte", array()), "d-m-Y"), "html", null, true);
            echo "</span> </a></td>
                                        <td><a href=\"";
            // line 214
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($context["alerte"], "route", array()), array("id" => $this->getAttribute($context["alerte"], "ownerId", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["alerte"], "intitule", array()), "html", null, true);
            echo "</a></td>
                                        <td><a href=\"";
            // line 215
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($context["alerte"], "route", array()), array("id" => $this->getAttribute($context["alerte"], "ownerId", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["alerte"], "objet", array()), "html", null, true);
            echo "</a></td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alerte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 218
        echo "                                </tbody>
                            </table>
                        ";
        
        $__internal_37ba4a9c7adfc1062893bf74a7ad51edabf09dcab2ffea267b40cefb01e80628->leave($__internal_37ba4a9c7adfc1062893bf74a7ad51edabf09dcab2ffea267b40cefb01e80628_prof);

    }

    // line 239
    public function block_expirations($context, array $blocks = array())
    {
        $__internal_94933432bd17b258cca3cbe693a9605d78bbd4ed4ec0f8769c3205f0956b4a9a = $this->env->getExtension("native_profiler");
        $__internal_94933432bd17b258cca3cbe693a9605d78bbd4ed4ec0f8769c3205f0956b4a9a->enter($__internal_94933432bd17b258cca3cbe693a9605d78bbd4ed4ec0f8769c3205f0956b4a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "expirations"));

        // line 240
        echo "                            <table id=\"table4\" class='table table-bordered table-condensed'>
                                <thead>
                                    <tr>
                                        <th>Date alerte</th>
                                        <th>nom</th>
                                        <th>message</th>
                                    </tr>
                                </thead>
                                <tbody>
                                ";
        // line 249
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alertesExp"]) ? $context["alertesExp"] : $this->getContext($context, "alertesExp")));
        foreach ($context['_seq'] as $context["_key"] => $context["alerte"]) {
            // line 250
            echo "                                    <tr>
                                        <td><a href=\"";
            // line 251
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($context["alerte"], "route", array()), array("id" => $this->getAttribute($context["alerte"], "ownerId", array()))), "html", null, true);
            echo "\"><span class=\"label label-warning\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["alerte"], "dateAlerte", array()), "d-m-Y"), "html", null, true);
            echo "</span> </a></td>
                                        <td><a href=\"";
            // line 252
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($context["alerte"], "route", array()), array("id" => $this->getAttribute($context["alerte"], "ownerId", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["alerte"], "intitule", array()), "html", null, true);
            echo "</a></td>
                                        <td><a href=\"";
            // line 253
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($context["alerte"], "route", array()), array("id" => $this->getAttribute($context["alerte"], "ownerId", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["alerte"], "objet", array()), "html", null, true);
            echo "</a></td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alerte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 256
        echo "                                </tbody>
                            </table>
                        ";
        
        $__internal_94933432bd17b258cca3cbe693a9605d78bbd4ed4ec0f8769c3205f0956b4a9a->leave($__internal_94933432bd17b258cca3cbe693a9605d78bbd4ed4ec0f8769c3205f0956b4a9a_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  662 => 256,  651 => 253,  645 => 252,  639 => 251,  636 => 250,  632 => 249,  621 => 240,  615 => 239,  606 => 218,  595 => 215,  589 => 214,  583 => 213,  580 => 212,  576 => 211,  565 => 202,  559 => 201,  550 => 180,  539 => 177,  533 => 176,  527 => 175,  524 => 174,  520 => 173,  509 => 164,  503 => 163,  496 => 133,  494 => 132,  488 => 131,  481 => 125,  479 => 124,  473 => 123,  466 => 95,  462 => 93,  458 => 91,  452 => 87,  450 => 86,  445 => 85,  442 => 84,  436 => 83,  419 => 26,  415 => 25,  410 => 23,  406 => 22,  402 => 21,  397 => 20,  391 => 19,  381 => 15,  374 => 11,  370 => 10,  366 => 9,  362 => 8,  354 => 7,  342 => 6,  334 => 266,  324 => 259,  322 => 239,  310 => 230,  306 => 228,  296 => 221,  294 => 201,  282 => 192,  278 => 190,  268 => 183,  266 => 163,  256 => 155,  254 => 154,  240 => 143,  229 => 134,  225 => 133,  223 => 131,  220 => 130,  217 => 129,  213 => 127,  210 => 126,  208 => 123,  203 => 122,  201 => 121,  194 => 116,  190 => 114,  181 => 112,  177 => 111,  174 => 110,  171 => 109,  167 => 107,  158 => 105,  154 => 104,  151 => 103,  149 => 102,  141 => 96,  139 => 83,  131 => 77,  126 => 75,  119 => 74,  110 => 70,  105 => 68,  101 => 67,  93 => 63,  87 => 61,  85 => 60,  80 => 59,  78 => 58,  58 => 43,  49 => 36,  47 => 19,  44 => 18,  42 => 7,  38 => 6,  31 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <title>{% block title %}PolyConventions{% endblock %}</title>*/
/*         {% block stylesheets %}   */
/*             <link rel="stylesheet" href="{{asset("assets/css/bootstrap.min.css")}}">*/
/*             <link href="{{asset("assets/css/font-awesome.min.css")}}" rel="stylesheet">*/
/*             <link href="{{asset("assets/css/main.css")}}" rel="stylesheet">*/
/*             <link href="{{asset("assets/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css")}}" rel="stylesheet">*/
/*             <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/themes/ui-lightness/jquery-ui.css" type="text/css" />	*/
/*             <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.css">*/
/*             <!--[if IE]>*/
/*                     <script src="{{asset("http://html5shiv.googlecode.com/svn/trunk/html5.js")}}"></script>*/
/*                     <![endif]-->*/
/*         {% endblock %}*/
/* */
/*         {% block javascripts %}*/
/*             <script src="{{asset("assets/js/jquery-2.1.0.min.js")}}"></script>*/
/*             <script src="{{asset("assets/js/jquery-ui-1.11.4/jquery-ui.js")}}"></script>*/
/*             <script src="{{asset("assets/bootstrap-datepicker/dist/js/bootstrap-datepicker.js")}}"></script>*/
/*             <script src="{{asset("assets/js/bootstrap.min.js")}}"></script>*/
/*             <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.10/js/jquery.dataTables.js"></script>*/
/*             <script type="text/javascript" src="{{asset("assets/js/jquery.validate.min.js")}}"></script>*/
/*             <script type="text/javascript" src="{{asset("assets/js/messages_fr.js")}}"></script>*/
/*             <script type="text/javascript" src="//cdn.tinymce.com/4/tinymce.min.js"></script>*/
/*             <script>*/
/*                 tinymce.init({ */
/*                     selector:'textarea',*/
/*                     min_height :200*/
/*                 });*/
/*             </script>*/
/* */
/*         {% endblock %}*/
/*     </head>        */
/*     <body>*/
/*         */
/*         <!-- Le logo + le menu-->*/
/*         <header  class="menu">*/
/*             <div class='row-fluid'>*/
/*                 <div id='logo' class="pull-left">*/
/*                     <a href="{{path('pc_home')}}"><img src="{{asset("assets/images/logo/logo.png")}}" alt="Site Logo"></a>*/
/*                 </div>*/
/*             </div>    */
/*             <div class="row-fluid">    */
/*                 <nav id="header" class="top_menu pull-right" >*/
/*                     <div class="navbar-header">*/
/*                         <button id="" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">*/
/*                             <span class="sr-only">Toggle navigation</span>*/
/*                             <span class="icon-bar"></span>*/
/*                             <span class="icon-bar"></span>*/
/*                             <span class="icon-bar"></span>*/
/*                         </button>*/
/*                     </div>*/
/*                     <div class="collapse navbar-collapse" id="collapse">*/
/*                         <ul class="nav navbar-nav">*/
/*                             {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                             <li><a href="{{path("pc_home")}}">Accueil <span class="fa fa-home"></span></a></li>*/
/*                             {% if ('ROLE_ADMIN' in app.user.roles or 'ROLE_DIRECTION' in app.user.roles) %}*/
/*                             <li><a href="{{path("fiche")}}"  role="button" aria-haspopup="true" aria-expanded="false">Les fiches <span class="fa fa-archive"></span></a></li>*/
/*                             {% endif %}*/
/*                             <li><a href="{{path("demande")}}"  role="button" aria-haspopup="true" aria-expanded="false">Les demandes <span class="fa fa-bars"></span></a></li>*/
/*                             <li class="dropdown">*/
/*                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Session <span class="fa fa-user"></span></a>*/
/*                                 <ul class="dropdown-menu" style="margin-left: -90%">*/
/*                                     <li><a href="{{ path('sonata_user_profile_show') }}">Profil</a></li>*/
/*                                     <li><a href="{{ path('fos_user_change_password') }}">Changer mot de passe</a></li>*/
/*                                     <li role="separator" class="divider"></li>*/
/*                                     <li> <a href="{{ path('fos_user_security_logout') }}">{{ 'layout.logout'|trans({}, 'FOSUserBundle') }}</a></li>*/
/*                                 </ul>*/
/*                             </li> */
/*                                 {% else %}*/
/*                                     <li><a href="{{path('fos_user_security_login')}}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }} <i class='fa fa-sign-in'></i></a></li>*/
/*                                     <li><a href="{{path('fos_user_registration_register')}}">S'inscrire <i class='fa  fa-check'></i></a></li>*/
/*                                 {% endif %}*/
/*                             </ul> */
/*                     </div>*/
/*                 </nav>*/
/*             </div>*/
/*             <div class="row-fluid">        */
/*                 <div class="row top_info pull-right">*/
/*                     {% block menu %}*/
/*                         {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                             <p style='color:#004874; font-size: 15px; margin-top: 5px;'> Bonjour {{app.user.username}}*/
/*                                 {% if 'ROLE_ADMIN' in app.user.roles %}*/
/*                                     <a data-toggle='modal' data-target='#alertes1'  class='pull-right notification' data-toggle="dropdown"><span class="fa  fa-bell"></span></a>*/
/*                                     <a data-toggle='modal' data-target='#messages' class='pull-right notification'><span class="fa fa-envelope"></span></a>*/
/*                                     <a data-toggle='modal' data-target='#expirations' class='pull-right notification'><span class="fa  fa-exclamation-triangle"></span></a>*/
/*                                 {%endif%}*/
/*                             </p>*/
/*                         {%else%}*/
/*                             <p style='color:#004874; font-size: 12px;'> On préconise l'utilisation de Mozilla Firefox ou Google Chrome pour une expérience utilisateur optimale.</p>*/
/*                         {%endif%}*/
/*                     {% endblock %}*/
/*                 </div>*/
/*             </div>*/
/*         </header>*/
/*         */
/*         <!-- les messages de notifications-->*/
/*         <div id='message' style="margin-top:9%;">*/
/*             {% if app.session.flashBag.has('error') %}*/
/*                 <div class="alert alert-warning">*/
/*                     {% for msg in app.session.flashBag.get('error') %}*/
/*                         {{ msg }}*/
/*                     {% endfor %}*/
/*                 </div>*/
/*             {% endif %}*/
/*             {% if app.session.flashBag.has('success') %}*/
/*                 <div class="alert alert-success">*/
/*                     {% for msg in app.session.flashBag.get('success') %}*/
/*                         {{ msg }}*/
/*                     {% endfor %}*/
/*                 </div>*/
/*             {% endif %}*/
/*         </div>*/
/* */
/*         <!-- Corps de la page-->*/
/*         <div id="main" style="overflow:visible;">*/
/*             <div class="container container-fluid">*/
/*                 {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                     {%if  app.user.enabled == true %}                     */
/*                         {% block body %}*/
/*                             {# ce block est utilisé quand l'utilisateur est connecté #}*/
/*                         {% endblock %}*/
/*                     {%else %}*/
/*                         <p>Votre compte n'a pas été validé. Veillez contacter l'adminisatrateur pour la validation de votre compte.</p>*/
/*                     {% endif %}*/
/*                {% else %}*/
/*                     */
/*                     {% block body2 %}*/
/*                         {# ce block est utilisé quand l'utilisateur n'est pas connecté #}*/
/*                     {% endblock %} */
/*                {% endif %} */
/*            </div>*/
/*         </div>*/
/*            */
/*         <!--Le pied de page--> */
/*         <div class='row' style='margin-top: 100px;'>*/
/*             <nav class="navbar navbar-default footer">*/
/*                 <div class="container">*/
/*                     <div class="pull-left copyright">*/
/*                         <p> Copyright &copy; Polytech Montpellier {{ 'now'|date('Y') }}.</p>*/
/*                     </div>*/
/*                     <div class="pull-right">*/
/*                         <a href="mailto:relindus@polytech.univ-montp2.fr" class="btn pc_skyblue_btn">contactez-nous</a>*/
/*                     </div>*/
/*                 </div>*/
/*             </nav>*/
/*         </div>*/
/*     </body>*/
/*     */
/*     <!-- les modals pour l'affichage des alertes-->*/
/*     {% if alertesA is defined%}*/
/*         <div class="modal fade" style="top:25%;outline: none;" id="alertes1"  role="dialog" aria-hidden="true">*/
/*             <div class="modal-dialog">*/
/*                 <div class="modal-content pc_modal">*/
/*                     <div class="modal-header pc_modal_header">*/
/*                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>*/
/*                         <h4 class="modal-title custom_align" id="Heading">Les alertes</h4>*/
/*                     </div>*/
/*                     <div class="modal-body">*/
/*                         {% block alertes %}*/
/*                             <table id="table4" class='table table-bordered table-condensed'>*/
/*                                 <thead>*/
/*                                     <tr>*/
/*                                         <th>Date alerte</th>*/
/*                                         <th>nom</th>*/
/*                                         <th>message</th>*/
/*                                     </tr>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                                 {% for alerte in alertesA %}*/
/*                                     <tr>*/
/*                                         <td><a href="{{path(alerte.route, { 'id': alerte.ownerId })}}"><span class="label label-warning">{{alerte.dateAlerte|date('d-m-Y')}}</span> </a></td>*/
/*                                         <td><a href="{{path(alerte.route, { 'id': alerte.ownerId })}}">{{alerte.intitule}}</a></td>*/
/*                                         <td><a href="{{path(alerte.route, { 'id': alerte.ownerId })}}">{{alerte.objet}}</a></td>*/
/*                                     </tr>*/
/*                                 {% endfor %}*/
/*                                 </tbody>*/
/*                             </table>*/
/*                         {% endblock alertes %}*/
/*                     </div>*/
/*                     <div class="modal-footer ">*/
/*                         <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Fermer</button>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     {% endif %} */
/*     */
/*     {% if messagesA is defined %}            */
/*         <div class="modal fade" style="top:25%;outline: none;" id="messages"  role="dialog" aria-hidden="true">*/
/*             <div class="modal-dialog">*/
/*                 <div class="modal-content pc_modal">*/
/*                     <div class="modal-header pc_modal_header">*/
/*                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>*/
/*                         <h4 class="modal-title custom_align" id="Heading">Les messages</h4>*/
/*                     </div>*/
/*                     <div class="modal-body">*/
/*                         {% block messages %}*/
/*                             <table id="table4" class='table table-bordered table-condensed'>*/
/*                                 <thead>*/
/*                                     <tr>*/
/*                                         <th>Date alerte</th>*/
/*                                         <th>nom</th>*/
/*                                         <th>message</th>*/
/*                                     </tr>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                                 {% for alerte in messagesA%}*/
/*                                     <tr>*/
/*                                         <td><a href="{{path(alerte.route, { 'id': alerte.ownerId })}}"><span class="label label-warning">{{alerte.dateAlerte|date('d-m-Y')}}</span> </a></td>*/
/*                                         <td><a href="{{path(alerte.route, { 'id': alerte.ownerId })}}">{{alerte.intitule}}</a></td>*/
/*                                         <td><a href="{{path(alerte.route, { 'id': alerte.ownerId })}}">{{alerte.objet}}</a></td>*/
/*                                     </tr>*/
/*                                 {% endfor %}*/
/*                                 </tbody>*/
/*                             </table>*/
/*                         {% endblock messages %}*/
/*                     </div>*/
/*                     <div class="modal-footer ">*/
/*                         <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Fermer</button>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>  */
/*     {% endif %} */
/*     */
/*     {% if alertesExp is defined %}            */
/*         <div class="modal fade" style="top:25%;outline: none;" id="expirations"  role="dialog" aria-hidden="true">*/
/*             <div class="modal-dialog">*/
/*                 <div class="modal-content pc_modal">*/
/*                     <div class="modal-header pc_modal_header">*/
/*                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>*/
/*                         <h4 class="modal-title custom_align" id="Heading">Les expirations proches</h4>*/
/*                     </div>*/
/*                     <div class="modal-body">*/
/*                         {% block expirations %}*/
/*                             <table id="table4" class='table table-bordered table-condensed'>*/
/*                                 <thead>*/
/*                                     <tr>*/
/*                                         <th>Date alerte</th>*/
/*                                         <th>nom</th>*/
/*                                         <th>message</th>*/
/*                                     </tr>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                                 {% for alerte in alertesExp%}*/
/*                                     <tr>*/
/*                                         <td><a href="{{path(alerte.route, { 'id': alerte.ownerId })}}"><span class="label label-warning">{{alerte.dateAlerte|date('d-m-Y')}}</span> </a></td>*/
/*                                         <td><a href="{{path(alerte.route, { 'id': alerte.ownerId })}}">{{alerte.intitule}}</a></td>*/
/*                                         <td><a href="{{path(alerte.route, { 'id': alerte.ownerId })}}">{{alerte.objet}}</a></td>*/
/*                                     </tr>*/
/*                                 {% endfor %}*/
/*                                 </tbody>*/
/*                             </table>*/
/*                         {% endblock expirations %}*/
/*                     </div>*/
/*                     <div class="modal-footer ">*/
/*                         <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Fermer</button>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>  */
/*     {% endif %}                    */
/* </html>*/
