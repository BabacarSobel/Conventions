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
        $__internal_16813954635b38830d6acdff7a483bb0938cc8efab5bc6aa11f89272969dfc11 = $this->env->getExtension("native_profiler");
        $__internal_16813954635b38830d6acdff7a483bb0938cc8efab5bc6aa11f89272969dfc11->enter($__internal_16813954635b38830d6acdff7a483bb0938cc8efab5bc6aa11f89272969dfc11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        // line 31
        echo "    </head>        
    <body>
        
        <!-- Le logo + le menu-->
        <header  class=\"menu\">
            <div class='row-fluid'>
                <div id='logo' class=\"pull-left\">
                    <a href=\"";
        // line 38
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
        // line 53
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 54
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("pc_home");
            echo "\">Accueil <span class=\"fa fa-home\"></span></a></li>
                            ";
            // line 55
            if ((twig_in_filter("ROLE_ADMIN", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array())) || twig_in_filter("ROLE_DIRECTION", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array())))) {
                // line 56
                echo "                            <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("fiche");
                echo "\"  role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Les fiches <span class=\"fa fa-archive\"></span></a></li>
                            ";
            }
            // line 58
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("demande");
            echo "\"  role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Les demandes <span class=\"fa fa-bars\"></span></a></li>
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Session <span class=\"fa fa-user\"></span></a>
                                <ul class=\"dropdown-menu\" style=\"margin-left: -90%\">
                                    <li><a href=\"";
            // line 62
            echo $this->env->getExtension('routing')->getPath("sonata_user_profile_show");
            echo "\">Profil</a></li>
                                    <li><a href=\"";
            // line 63
            echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
            echo "\">Changer mot de passe</a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li> <a href=\"";
            // line 65
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></li>
                                </ul>
                            </li> 
                                ";
        } else {
            // line 69
            echo "                                    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo " <i class='fa fa-sign-in'></i></a></li>
                                    <li><a href=\"";
            // line 70
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">S'inscrire <i class='fa  fa-check'></i></a></li>
                                ";
        }
        // line 72
        echo "                            </ul> 
                    </div>
                </nav>
            </div>
            <div class=\"row-fluid\">        
                <div class=\"row top_info pull-right\">
                    ";
        // line 78
        $this->displayBlock('menu', $context, $blocks);
        // line 91
        echo "                </div>
            </div>
        </header>
        
        <!-- les messages de notifications-->
        <div id='message' style=\"margin-top:9%;\">
            ";
        // line 97
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "error"), "method")) {
            // line 98
            echo "                <div class=\"alert alert-warning\">
                    ";
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 100
                echo "                        ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "                </div>
            ";
        }
        // line 104
        echo "            ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method")) {
            // line 105
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 107
                echo "                        ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "                </div>
            ";
        }
        // line 111
        echo "        </div>

        <!-- Corps de la page-->
        <div id=\"main\" style=\"overflow:visible;\">
            <div class=\"container container-fluid\">
                ";
        // line 116
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 117
            echo "                    ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "enabled", array()) == true)) {
                echo "                     
                        ";
                // line 118
                $this->displayBlock('body', $context, $blocks);
                // line 121
                echo "                    ";
            } else {
                // line 122
                echo "                        <p>Votre compte n'a pas été validé. Veillez contacter l'adminisatrateur pour la validation de votre compte.</p>
                    ";
            }
            // line 124
            echo "               ";
        } else {
            // line 125
            echo "                    
                    ";
            // line 126
            $this->displayBlock('body2', $context, $blocks);
            // line 128
            echo " 
               ";
        }
        // line 129
        echo " 
           </div>
        </div>
           
        <!--Le pied de page--> 
        <div class='row' style='margin-top: 100px;'>
            <nav class=\"navbar navbar-default footer\">
                <div class=\"container\">
                    <div class=\"pull-left copyright\">
                        <p> Copyright &copy; Polytech Montpellier ";
        // line 138
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
        // line 149
        if (array_key_exists("alertesA", $context)) {
            // line 150
            echo "        <div class=\"modal fade\" style=\"top:25%;outline: none;\" id=\"alertes1\"  role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content pc_modal\">
                    <div class=\"modal-header pc_modal_header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></button>
                        <h4 class=\"modal-title custom_align\" id=\"Heading\">Les alertes</h4>
                    </div>
                    <div class=\"modal-body\">
                        ";
            // line 158
            $this->displayBlock('alertes', $context, $blocks);
            // line 178
            echo "                    </div>
                    <div class=\"modal-footer \">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove\"></span> Fermer</button>
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        // line 185
        echo " 
    
    ";
        // line 187
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
            // line 196
            $this->displayBlock('messages', $context, $blocks);
            // line 216
            echo "                    </div>
                    <div class=\"modal-footer \">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove\"></span> Fermer</button>
                    </div>
                </div>
            </div>
        </div>  
    ";
        }
        // line 223
        echo " 
    
    ";
        // line 225
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
            // line 234
            $this->displayBlock('expirations', $context, $blocks);
            // line 254
            echo "                    </div>
                    <div class=\"modal-footer \">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove\"></span> Fermer</button>
                    </div>
                </div>
            </div>
        </div>  
    ";
        }
        // line 261
        echo "                    
</html>";
        
        $__internal_16813954635b38830d6acdff7a483bb0938cc8efab5bc6aa11f89272969dfc11->leave($__internal_16813954635b38830d6acdff7a483bb0938cc8efab5bc6aa11f89272969dfc11_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_d030ee473848020a309bf5e01343d75385ee22c9ab021f5e74aa9c16df020994 = $this->env->getExtension("native_profiler");
        $__internal_d030ee473848020a309bf5e01343d75385ee22c9ab021f5e74aa9c16df020994->enter($__internal_d030ee473848020a309bf5e01343d75385ee22c9ab021f5e74aa9c16df020994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PolyConventions";
        
        $__internal_d030ee473848020a309bf5e01343d75385ee22c9ab021f5e74aa9c16df020994->leave($__internal_d030ee473848020a309bf5e01343d75385ee22c9ab021f5e74aa9c16df020994_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_be0530143d69494f0822a88fdb17db9854e23392a56361de97a86ca3a76c6594 = $this->env->getExtension("native_profiler");
        $__internal_be0530143d69494f0822a88fdb17db9854e23392a56361de97a86ca3a76c6594->enter($__internal_be0530143d69494f0822a88fdb17db9854e23392a56361de97a86ca3a76c6594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_be0530143d69494f0822a88fdb17db9854e23392a56361de97a86ca3a76c6594->leave($__internal_be0530143d69494f0822a88fdb17db9854e23392a56361de97a86ca3a76c6594_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d5c5223204286f28bace4dd16c4107e61df10c3234cb044d672e4c138f4ca496 = $this->env->getExtension("native_profiler");
        $__internal_d5c5223204286f28bace4dd16c4107e61df10c3234cb044d672e4c138f4ca496->enter($__internal_d5c5223204286f28bace4dd16c4107e61df10c3234cb044d672e4c138f4ca496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
            <script>tinymce.init({ selector:'textarea' });</script>

        ";
        
        $__internal_d5c5223204286f28bace4dd16c4107e61df10c3234cb044d672e4c138f4ca496->leave($__internal_d5c5223204286f28bace4dd16c4107e61df10c3234cb044d672e4c138f4ca496_prof);

    }

    // line 78
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a77f9c7817c12b1a19fef07849517c35648d6511856fad71689144071b749f3c = $this->env->getExtension("native_profiler");
        $__internal_a77f9c7817c12b1a19fef07849517c35648d6511856fad71689144071b749f3c->enter($__internal_a77f9c7817c12b1a19fef07849517c35648d6511856fad71689144071b749f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 79
        echo "                        ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 80
            echo "                            <p style='color:#004874; font-size: 15px; margin-top: 5px;'> Bonjour ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
                                ";
            // line 81
            if (twig_in_filter("ROLE_ADMIN", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()))) {
                // line 82
                echo "                                    <a data-toggle='modal' data-target='#alertes1'  class='pull-right notification' data-toggle=\"dropdown\"><span class=\"fa  fa-bell\"></span></a>
                                    <a data-toggle='modal' data-target='#messages' class='pull-right notification'><span class=\"fa fa-envelope\"></span></a>
                                    <a data-toggle='modal' data-target='#expirations' class='pull-right notification'><span class=\"fa  fa-exclamation-triangle\"></span></a>
                                ";
            }
            // line 86
            echo "                            </p>
                        ";
        } else {
            // line 88
            echo "                            <p style='color:#004874; font-size: 12px;'> On préconise l'utilisation de Mozilla Firefox ou Google Chrome pour une expérience utilisateur optimale.</p>
                        ";
        }
        // line 90
        echo "                    ";
        
        $__internal_a77f9c7817c12b1a19fef07849517c35648d6511856fad71689144071b749f3c->leave($__internal_a77f9c7817c12b1a19fef07849517c35648d6511856fad71689144071b749f3c_prof);

    }

    // line 118
    public function block_body($context, array $blocks = array())
    {
        $__internal_51e4cb939ecf8a162447157d0caa0385c79774d3c8a7981157626546109a4177 = $this->env->getExtension("native_profiler");
        $__internal_51e4cb939ecf8a162447157d0caa0385c79774d3c8a7981157626546109a4177->enter($__internal_51e4cb939ecf8a162447157d0caa0385c79774d3c8a7981157626546109a4177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 119
        echo "                            ";
        // line 120
        echo "                        ";
        
        $__internal_51e4cb939ecf8a162447157d0caa0385c79774d3c8a7981157626546109a4177->leave($__internal_51e4cb939ecf8a162447157d0caa0385c79774d3c8a7981157626546109a4177_prof);

    }

    // line 126
    public function block_body2($context, array $blocks = array())
    {
        $__internal_5909dfcf8679d37241f85492d264e8d70fc709edcea1e07c18520edf101b5bae = $this->env->getExtension("native_profiler");
        $__internal_5909dfcf8679d37241f85492d264e8d70fc709edcea1e07c18520edf101b5bae->enter($__internal_5909dfcf8679d37241f85492d264e8d70fc709edcea1e07c18520edf101b5bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body2"));

        // line 127
        echo "                        ";
        // line 128
        echo "                    ";
        
        $__internal_5909dfcf8679d37241f85492d264e8d70fc709edcea1e07c18520edf101b5bae->leave($__internal_5909dfcf8679d37241f85492d264e8d70fc709edcea1e07c18520edf101b5bae_prof);

    }

    // line 158
    public function block_alertes($context, array $blocks = array())
    {
        $__internal_23c912592125b7582f82045f3a2cd76aee142d1d3d481dcde48f4f363919d58c = $this->env->getExtension("native_profiler");
        $__internal_23c912592125b7582f82045f3a2cd76aee142d1d3d481dcde48f4f363919d58c->enter($__internal_23c912592125b7582f82045f3a2cd76aee142d1d3d481dcde48f4f363919d58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "alertes"));

        // line 159
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
        // line 168
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alertesA"]) ? $context["alertesA"] : $this->getContext($context, "alertesA")));
        foreach ($context['_seq'] as $context["_key"] => $context["alerte"]) {
            // line 169
            echo "                                    <tr>
                                        <td><a href=\"";
            // line 170
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($context["alerte"], "route", array()), array("id" => $this->getAttribute($context["alerte"], "ownerId", array()))), "html", null, true);
            echo "\"><span class=\"label label-warning\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["alerte"], "dateAlerte", array()), "d-m-Y"), "html", null, true);
            echo "</span> </a></td>
                                        <td><a href=\"";
            // line 171
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($context["alerte"], "route", array()), array("id" => $this->getAttribute($context["alerte"], "ownerId", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["alerte"], "intitule", array()), "html", null, true);
            echo "</a></td>
                                        <td><a href=\"";
            // line 172
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
        // line 175
        echo "                                </tbody>
                            </table>
                        ";
        
        $__internal_23c912592125b7582f82045f3a2cd76aee142d1d3d481dcde48f4f363919d58c->leave($__internal_23c912592125b7582f82045f3a2cd76aee142d1d3d481dcde48f4f363919d58c_prof);

    }

    // line 196
    public function block_messages($context, array $blocks = array())
    {
        $__internal_7c72577736c21554cc9c6d078859f94975fc9f671033a8a88a588a8d6a8b17d4 = $this->env->getExtension("native_profiler");
        $__internal_7c72577736c21554cc9c6d078859f94975fc9f671033a8a88a588a8d6a8b17d4->enter($__internal_7c72577736c21554cc9c6d078859f94975fc9f671033a8a88a588a8d6a8b17d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        // line 197
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
        // line 206
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messagesA"]) ? $context["messagesA"] : $this->getContext($context, "messagesA")));
        foreach ($context['_seq'] as $context["_key"] => $context["alerte"]) {
            // line 207
            echo "                                    <tr>
                                        <td><a href=\"";
            // line 208
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($context["alerte"], "route", array()), array("id" => $this->getAttribute($context["alerte"], "ownerId", array()))), "html", null, true);
            echo "\"><span class=\"label label-warning\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["alerte"], "dateAlerte", array()), "d-m-Y"), "html", null, true);
            echo "</span> </a></td>
                                        <td><a href=\"";
            // line 209
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($context["alerte"], "route", array()), array("id" => $this->getAttribute($context["alerte"], "ownerId", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["alerte"], "intitule", array()), "html", null, true);
            echo "</a></td>
                                        <td><a href=\"";
            // line 210
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
        // line 213
        echo "                                </tbody>
                            </table>
                        ";
        
        $__internal_7c72577736c21554cc9c6d078859f94975fc9f671033a8a88a588a8d6a8b17d4->leave($__internal_7c72577736c21554cc9c6d078859f94975fc9f671033a8a88a588a8d6a8b17d4_prof);

    }

    // line 234
    public function block_expirations($context, array $blocks = array())
    {
        $__internal_e701f4843b511fa1f27313d480fa0209bc626329c894e2fd883326543d38585b = $this->env->getExtension("native_profiler");
        $__internal_e701f4843b511fa1f27313d480fa0209bc626329c894e2fd883326543d38585b->enter($__internal_e701f4843b511fa1f27313d480fa0209bc626329c894e2fd883326543d38585b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "expirations"));

        // line 235
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
        // line 244
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alertesExp"]) ? $context["alertesExp"] : $this->getContext($context, "alertesExp")));
        foreach ($context['_seq'] as $context["_key"] => $context["alerte"]) {
            // line 245
            echo "                                    <tr>
                                        <td><a href=\"";
            // line 246
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($context["alerte"], "route", array()), array("id" => $this->getAttribute($context["alerte"], "ownerId", array()))), "html", null, true);
            echo "\"><span class=\"label label-warning\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["alerte"], "dateAlerte", array()), "d-m-Y"), "html", null, true);
            echo "</span> </a></td>
                                        <td><a href=\"";
            // line 247
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($context["alerte"], "route", array()), array("id" => $this->getAttribute($context["alerte"], "ownerId", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["alerte"], "intitule", array()), "html", null, true);
            echo "</a></td>
                                        <td><a href=\"";
            // line 248
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
        // line 251
        echo "                                </tbody>
                            </table>
                        ";
        
        $__internal_e701f4843b511fa1f27313d480fa0209bc626329c894e2fd883326543d38585b->leave($__internal_e701f4843b511fa1f27313d480fa0209bc626329c894e2fd883326543d38585b_prof);

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
        return array (  657 => 251,  646 => 248,  640 => 247,  634 => 246,  631 => 245,  627 => 244,  616 => 235,  610 => 234,  601 => 213,  590 => 210,  584 => 209,  578 => 208,  575 => 207,  571 => 206,  560 => 197,  554 => 196,  545 => 175,  534 => 172,  528 => 171,  522 => 170,  519 => 169,  515 => 168,  504 => 159,  498 => 158,  491 => 128,  489 => 127,  483 => 126,  476 => 120,  474 => 119,  468 => 118,  461 => 90,  457 => 88,  453 => 86,  447 => 82,  445 => 81,  440 => 80,  437 => 79,  431 => 78,  419 => 26,  415 => 25,  410 => 23,  406 => 22,  402 => 21,  397 => 20,  391 => 19,  381 => 15,  374 => 11,  370 => 10,  366 => 9,  362 => 8,  354 => 7,  342 => 6,  334 => 261,  324 => 254,  322 => 234,  310 => 225,  306 => 223,  296 => 216,  294 => 196,  282 => 187,  278 => 185,  268 => 178,  266 => 158,  256 => 150,  254 => 149,  240 => 138,  229 => 129,  225 => 128,  223 => 126,  220 => 125,  217 => 124,  213 => 122,  210 => 121,  208 => 118,  203 => 117,  201 => 116,  194 => 111,  190 => 109,  181 => 107,  177 => 106,  174 => 105,  171 => 104,  167 => 102,  158 => 100,  154 => 99,  151 => 98,  149 => 97,  141 => 91,  139 => 78,  131 => 72,  126 => 70,  119 => 69,  110 => 65,  105 => 63,  101 => 62,  93 => 58,  87 => 56,  85 => 55,  80 => 54,  78 => 53,  58 => 38,  49 => 31,  47 => 19,  44 => 18,  42 => 7,  38 => 6,  31 => 1,);
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
/*             <script>tinymce.init({ selector:'textarea' });</script>*/
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
