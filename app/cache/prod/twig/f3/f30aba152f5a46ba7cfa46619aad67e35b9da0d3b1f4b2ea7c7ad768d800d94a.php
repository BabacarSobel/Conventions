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
        $__internal_a6ac43c7c61eb4a974cce722cdaaceabfebcd193b79a59b21ec2e8a56988df79 = $this->env->getExtension("native_profiler");
        $__internal_a6ac43c7c61eb4a974cce722cdaaceabfebcd193b79a59b21ec2e8a56988df79->enter($__internal_a6ac43c7c61eb4a974cce722cdaaceabfebcd193b79a59b21ec2e8a56988df79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        <link rel=\"icon\"  href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/favicon.ico"), "html", null, true);
        echo "\">
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "
        ";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 37
        echo "    </head>        
    <body>
        
        <!-- Le logo + le menu-->
        <header  class=\"menu\">
            <div class='row-fluid'>
                <div id='logo' class=\"pull-left\">
                    <a href=\"";
        // line 44
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
        // line 59
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 60
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("pc_home");
            echo "\">Accueil <span class=\"fa fa-home\"></span></a></li>
                            ";
            // line 61
            if ((twig_in_filter("ROLE_ADMIN", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array())) || twig_in_filter("ROLE_DIRECTION", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array())))) {
                // line 62
                echo "                            <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("fiche");
                echo "\"  role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Les fiches <span class=\"fa fa-archive\"></span></a></li>
                            ";
            }
            // line 64
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("demande");
            echo "\"  role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Les demandes <span class=\"fa fa-bars\"></span></a></li>
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Session <span class=\"fa fa-user\"></span></a>
                                <ul class=\"dropdown-menu\" style=\"margin-left: -90%\">
                                    <li><a href=\"";
            // line 68
            echo $this->env->getExtension('routing')->getPath("sonata_user_profile_show");
            echo "\">Profil</a></li>
                                    <li><a href=\"";
            // line 69
            echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
            echo "\">Changer mot de passe</a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li> <a href=\"";
            // line 71
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></li>
                                </ul>
                            </li> 
                                ";
        } else {
            // line 75
            echo "                                    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo " <i class='fa fa-sign-in'></i></a></li>
                                    <li><a href=\"";
            // line 76
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">S'inscrire <i class='fa  fa-check'></i></a></li>
                                ";
        }
        // line 78
        echo "                            </ul> 
                    </div>
                </nav>
            </div>
            <div class=\"row-fluid\">        
                <div class=\"row top_info pull-right\">
                    ";
        // line 84
        $this->displayBlock('menu', $context, $blocks);
        // line 97
        echo "                </div>
            </div>
        </header>
        
        <!-- les messages de notifications-->
        <div id='message' style=\"margin-top:9%;\">
            ";
        // line 103
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "error"), "method")) {
            // line 104
            echo "                <div class=\"alert alert-warning\">
                    ";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 106
                echo "                        ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "                </div>
            ";
        }
        // line 110
        echo "            ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method")) {
            // line 111
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 112
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 113
                echo "                        ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "                </div>
            ";
        }
        // line 117
        echo "        </div>

        <!-- Corps de la page-->
        <div id=\"main\" style=\"overflow:visible;\">
            <div class=\"container container-fluid\">
                ";
        // line 122
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 123
            echo "                    ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "enabled", array()) == true)) {
                echo "                     
                        ";
                // line 124
                $this->displayBlock('body', $context, $blocks);
                // line 127
                echo "                    ";
            } else {
                // line 128
                echo "                        <p>Votre compte n'a pas été validé. Veillez contacter l'adminisatrateur pour la validation de votre compte.</p>
                    ";
            }
            // line 130
            echo "               ";
        } else {
            // line 131
            echo "                    
                    ";
            // line 132
            $this->displayBlock('body2', $context, $blocks);
            // line 134
            echo " 
               ";
        }
        // line 135
        echo " 
           </div>
        </div>
           
        <!--Le pied de page--> 
        <div class='row' style='margin-top: 100px;'>
            <nav class=\"navbar navbar-default footer\">
                <div class=\"container\">
                    <div class=\"pull-left copyright\">
                        <p> Copyright &copy; Polytech Montpellier ";
        // line 144
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
        // line 155
        if (array_key_exists("alertesA", $context)) {
            // line 156
            echo "        <div class=\"modal fade\" style=\"top:25%;outline: none;\" id=\"alertes1\"  role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content pc_modal\">
                    <div class=\"modal-header pc_modal_header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></button>
                        <h4 class=\"modal-title custom_align\" id=\"Heading\">Les alertes</h4>
                    </div>
                    <div class=\"modal-body\">
                        ";
            // line 164
            $this->displayBlock('alertes', $context, $blocks);
            // line 184
            echo "                    </div>
                    <div class=\"modal-footer \">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove\"></span> Fermer</button>
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        // line 191
        echo " 
    
    ";
        // line 193
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
            // line 202
            $this->displayBlock('messages', $context, $blocks);
            // line 222
            echo "                    </div>
                    <div class=\"modal-footer \">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove\"></span> Fermer</button>
                    </div>
                </div>
            </div>
        </div>  
    ";
        }
        // line 229
        echo " 
    
    ";
        // line 231
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
            // line 240
            $this->displayBlock('expirations', $context, $blocks);
            // line 260
            echo "                    </div>
                    <div class=\"modal-footer \">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove\"></span> Fermer</button>
                    </div>
                </div>
            </div>
        </div>  
    ";
        }
        // line 267
        echo "                    
</html>";
        
        $__internal_a6ac43c7c61eb4a974cce722cdaaceabfebcd193b79a59b21ec2e8a56988df79->leave($__internal_a6ac43c7c61eb4a974cce722cdaaceabfebcd193b79a59b21ec2e8a56988df79_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_47af49bb88d3268a4b395a9b8c7b4c1308a683bd6a5e31ae019db6da1229d6ab = $this->env->getExtension("native_profiler");
        $__internal_47af49bb88d3268a4b395a9b8c7b4c1308a683bd6a5e31ae019db6da1229d6ab->enter($__internal_47af49bb88d3268a4b395a9b8c7b4c1308a683bd6a5e31ae019db6da1229d6ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Conventions";
        
        $__internal_47af49bb88d3268a4b395a9b8c7b4c1308a683bd6a5e31ae019db6da1229d6ab->leave($__internal_47af49bb88d3268a4b395a9b8c7b4c1308a683bd6a5e31ae019db6da1229d6ab_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8d3ab7e3a604c240c3a06b4f42d230e4dd8bdad845e4c6b59447a58627098d17 = $this->env->getExtension("native_profiler");
        $__internal_8d3ab7e3a604c240c3a06b4f42d230e4dd8bdad845e4c6b59447a58627098d17->enter($__internal_8d3ab7e3a604c240c3a06b4f42d230e4dd8bdad845e4c6b59447a58627098d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "   
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link rel=\"stylesheet\" href=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/themes/ui-lightness/jquery-ui.css\" type=\"text/css\" />\t
            <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.datatables.net/1.10.10/css/jquery.dataTables.css\">
            <!--[if IE]>
                    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://html5shiv.googlecode.com/svn/trunk/html5.js"), "html", null, true);
        echo "\"></script>
                    <![endif]-->
        ";
        
        $__internal_8d3ab7e3a604c240c3a06b4f42d230e4dd8bdad845e4c6b59447a58627098d17->leave($__internal_8d3ab7e3a604c240c3a06b4f42d230e4dd8bdad845e4c6b59447a58627098d17_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_46e06fe325f82eba9e2631bcf35b763bd9dc2b5c4a356a396132783d89b6b9f3 = $this->env->getExtension("native_profiler");
        $__internal_46e06fe325f82eba9e2631bcf35b763bd9dc2b5c4a356a396132783d89b6b9f3->enter($__internal_46e06fe325f82eba9e2631bcf35b763bd9dc2b5c4a356a396132783d89b6b9f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery-2.1.0.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery-ui-1.11.4/jquery-ui.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" charset=\"utf8\" src=\"//cdn.datatables.net/1.10.10/js/jquery.dataTables.js\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/messages_fr.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"//cdn.tinymce.com/4/tinymce.min.js\"></script>
            <script>
                tinymce.init({ 
                    selector:'textarea.tini',
                    min_height :200,
                });
            </script>

        ";
        
        $__internal_46e06fe325f82eba9e2631bcf35b763bd9dc2b5c4a356a396132783d89b6b9f3->leave($__internal_46e06fe325f82eba9e2631bcf35b763bd9dc2b5c4a356a396132783d89b6b9f3_prof);

    }

    // line 84
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d9097e75151927e00ab454d2f9937fbc157ad78729d36dee8c64cceaf8c55bd5 = $this->env->getExtension("native_profiler");
        $__internal_d9097e75151927e00ab454d2f9937fbc157ad78729d36dee8c64cceaf8c55bd5->enter($__internal_d9097e75151927e00ab454d2f9937fbc157ad78729d36dee8c64cceaf8c55bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 85
        echo "                        ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 86
            echo "                            <p style='color:#004874; font-size: 15px; margin-top: 5px;'> Bonjour ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
                                ";
            // line 87
            if (twig_in_filter("ROLE_ADMIN", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()))) {
                // line 88
                echo "                                    <a data-toggle='modal' data-target='#alertes1'  class='pull-right notification' data-toggle=\"dropdown\"><span class=\"fa  fa-bell\"></span></a>
                                    <a data-toggle='modal' data-target='#messages' class='pull-right notification'><span class=\"fa fa-envelope\"></span></a>
                                    <a data-toggle='modal' data-target='#expirations' class='pull-right notification'><span class=\"fa  fa-exclamation-triangle\"></span></a>
                                ";
            }
            // line 92
            echo "                            </p>
                        ";
        } else {
            // line 94
            echo "                            <p style='color:#004874; font-size: 12px;'> On préconise l'utilisation de Mozilla Firefox ou Google Chrome pour une expérience utilisateur optimale.</p>
                        ";
        }
        // line 96
        echo "                    ";
        
        $__internal_d9097e75151927e00ab454d2f9937fbc157ad78729d36dee8c64cceaf8c55bd5->leave($__internal_d9097e75151927e00ab454d2f9937fbc157ad78729d36dee8c64cceaf8c55bd5_prof);

    }

    // line 124
    public function block_body($context, array $blocks = array())
    {
        $__internal_d043ffc592cc846a9b8c9f3556765772a2ec42612c11b53d0d8b70ea9abc7a8a = $this->env->getExtension("native_profiler");
        $__internal_d043ffc592cc846a9b8c9f3556765772a2ec42612c11b53d0d8b70ea9abc7a8a->enter($__internal_d043ffc592cc846a9b8c9f3556765772a2ec42612c11b53d0d8b70ea9abc7a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 125
        echo "                            ";
        // line 126
        echo "                        ";
        
        $__internal_d043ffc592cc846a9b8c9f3556765772a2ec42612c11b53d0d8b70ea9abc7a8a->leave($__internal_d043ffc592cc846a9b8c9f3556765772a2ec42612c11b53d0d8b70ea9abc7a8a_prof);

    }

    // line 132
    public function block_body2($context, array $blocks = array())
    {
        $__internal_0314ceb8f1511181455da2d898c9e608e556ba1e7a3f825f3251d71123466152 = $this->env->getExtension("native_profiler");
        $__internal_0314ceb8f1511181455da2d898c9e608e556ba1e7a3f825f3251d71123466152->enter($__internal_0314ceb8f1511181455da2d898c9e608e556ba1e7a3f825f3251d71123466152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body2"));

        // line 133
        echo "                        ";
        // line 134
        echo "                    ";
        
        $__internal_0314ceb8f1511181455da2d898c9e608e556ba1e7a3f825f3251d71123466152->leave($__internal_0314ceb8f1511181455da2d898c9e608e556ba1e7a3f825f3251d71123466152_prof);

    }

    // line 164
    public function block_alertes($context, array $blocks = array())
    {
        $__internal_b8d39d694011eba96fb1bdae1b6788f875a8e2655e7fcd77889549f0b0bb5f07 = $this->env->getExtension("native_profiler");
        $__internal_b8d39d694011eba96fb1bdae1b6788f875a8e2655e7fcd77889549f0b0bb5f07->enter($__internal_b8d39d694011eba96fb1bdae1b6788f875a8e2655e7fcd77889549f0b0bb5f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "alertes"));

        // line 165
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
        // line 174
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alertesA"]) ? $context["alertesA"] : $this->getContext($context, "alertesA")));
        foreach ($context['_seq'] as $context["_key"] => $context["alerte"]) {
            // line 175
            echo "                                    <tr>
                                        <td><a href=\"";
            // line 176
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($context["alerte"], "route", array()), array("id" => $this->getAttribute($context["alerte"], "ownerId", array()))), "html", null, true);
            echo "\"><span class=\"label label-warning\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["alerte"], "dateAlerte", array()), "d-m-Y"), "html", null, true);
            echo "</span> </a></td>
                                        <td><a href=\"";
            // line 177
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($context["alerte"], "route", array()), array("id" => $this->getAttribute($context["alerte"], "ownerId", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["alerte"], "intitule", array()), "html", null, true);
            echo "</a></td>
                                        <td><a href=\"";
            // line 178
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
        // line 181
        echo "                                </tbody>
                            </table>
                        ";
        
        $__internal_b8d39d694011eba96fb1bdae1b6788f875a8e2655e7fcd77889549f0b0bb5f07->leave($__internal_b8d39d694011eba96fb1bdae1b6788f875a8e2655e7fcd77889549f0b0bb5f07_prof);

    }

    // line 202
    public function block_messages($context, array $blocks = array())
    {
        $__internal_13f5ba94a91fccb2e57068dec132a9a26e4a961e00a54672e3d1e7bbfa04b137 = $this->env->getExtension("native_profiler");
        $__internal_13f5ba94a91fccb2e57068dec132a9a26e4a961e00a54672e3d1e7bbfa04b137->enter($__internal_13f5ba94a91fccb2e57068dec132a9a26e4a961e00a54672e3d1e7bbfa04b137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        // line 203
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
        // line 212
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messagesA"]) ? $context["messagesA"] : $this->getContext($context, "messagesA")));
        foreach ($context['_seq'] as $context["_key"] => $context["alerte"]) {
            // line 213
            echo "                                    <tr>
                                        <td><a href=\"";
            // line 214
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($context["alerte"], "route", array()), array("id" => $this->getAttribute($context["alerte"], "ownerId", array()))), "html", null, true);
            echo "\"><span class=\"label label-warning\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["alerte"], "dateAlerte", array()), "d-m-Y"), "html", null, true);
            echo "</span> </a></td>
                                        <td><a href=\"";
            // line 215
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($context["alerte"], "route", array()), array("id" => $this->getAttribute($context["alerte"], "ownerId", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["alerte"], "intitule", array()), "html", null, true);
            echo "</a></td>
                                        <td><a href=\"";
            // line 216
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
        // line 219
        echo "                                </tbody>
                            </table>
                        ";
        
        $__internal_13f5ba94a91fccb2e57068dec132a9a26e4a961e00a54672e3d1e7bbfa04b137->leave($__internal_13f5ba94a91fccb2e57068dec132a9a26e4a961e00a54672e3d1e7bbfa04b137_prof);

    }

    // line 240
    public function block_expirations($context, array $blocks = array())
    {
        $__internal_486e17ed15ebcb433e91c341ad2b895c2c42783c460bbb6bd772b41d2ea05675 = $this->env->getExtension("native_profiler");
        $__internal_486e17ed15ebcb433e91c341ad2b895c2c42783c460bbb6bd772b41d2ea05675->enter($__internal_486e17ed15ebcb433e91c341ad2b895c2c42783c460bbb6bd772b41d2ea05675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "expirations"));

        // line 241
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
        // line 250
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alertesExp"]) ? $context["alertesExp"] : $this->getContext($context, "alertesExp")));
        foreach ($context['_seq'] as $context["_key"] => $context["alerte"]) {
            // line 251
            echo "                                    <tr>
                                        <td><a href=\"";
            // line 252
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($context["alerte"], "route", array()), array("id" => $this->getAttribute($context["alerte"], "ownerId", array()))), "html", null, true);
            echo "\"><span class=\"label label-warning\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["alerte"], "dateAlerte", array()), "d-m-Y"), "html", null, true);
            echo "</span> </a></td>
                                        <td><a href=\"";
            // line 253
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($context["alerte"], "route", array()), array("id" => $this->getAttribute($context["alerte"], "ownerId", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["alerte"], "intitule", array()), "html", null, true);
            echo "</a></td>
                                        <td><a href=\"";
            // line 254
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
        // line 257
        echo "                                </tbody>
                            </table>
                        ";
        
        $__internal_486e17ed15ebcb433e91c341ad2b895c2c42783c460bbb6bd772b41d2ea05675->leave($__internal_486e17ed15ebcb433e91c341ad2b895c2c42783c460bbb6bd772b41d2ea05675_prof);

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
        return array (  666 => 257,  655 => 254,  649 => 253,  643 => 252,  640 => 251,  636 => 250,  625 => 241,  619 => 240,  610 => 219,  599 => 216,  593 => 215,  587 => 214,  584 => 213,  580 => 212,  569 => 203,  563 => 202,  554 => 181,  543 => 178,  537 => 177,  531 => 176,  528 => 175,  524 => 174,  513 => 165,  507 => 164,  500 => 134,  498 => 133,  492 => 132,  485 => 126,  483 => 125,  477 => 124,  470 => 96,  466 => 94,  462 => 92,  456 => 88,  454 => 87,  449 => 86,  446 => 85,  440 => 84,  423 => 27,  419 => 26,  414 => 24,  410 => 23,  406 => 22,  401 => 21,  395 => 20,  385 => 16,  378 => 12,  374 => 11,  370 => 10,  366 => 9,  358 => 8,  346 => 6,  338 => 267,  328 => 260,  326 => 240,  314 => 231,  310 => 229,  300 => 222,  298 => 202,  286 => 193,  282 => 191,  272 => 184,  270 => 164,  260 => 156,  258 => 155,  244 => 144,  233 => 135,  229 => 134,  227 => 132,  224 => 131,  221 => 130,  217 => 128,  214 => 127,  212 => 124,  207 => 123,  205 => 122,  198 => 117,  194 => 115,  185 => 113,  181 => 112,  178 => 111,  175 => 110,  171 => 108,  162 => 106,  158 => 105,  155 => 104,  153 => 103,  145 => 97,  143 => 84,  135 => 78,  130 => 76,  123 => 75,  114 => 71,  109 => 69,  105 => 68,  97 => 64,  91 => 62,  89 => 61,  84 => 60,  82 => 59,  62 => 44,  53 => 37,  51 => 20,  48 => 19,  46 => 8,  42 => 7,  38 => 6,  31 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <title>{% block title %}Conventions{% endblock %}</title>*/
/*         <link rel="icon"  href="{{asset("assets/images/favicon.ico")}}">*/
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
/*                     selector:'textarea.tini',*/
/*                     min_height :200,*/
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
