<?php

/* ::layout.html.twig */
class __TwigTemplate_371a7c7404f8607469981fa7fae7bec6cbece6d47a1f168258a0a6b02ac74a25 extends Twig_Template
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
        $__internal_0341400989315f5ce99cd8f98dbb37a8d673c448f675e8e951e63a65a156354f = $this->env->getExtension("native_profiler");
        $__internal_0341400989315f5ce99cd8f98dbb37a8d673c448f675e8e951e63a65a156354f->enter($__internal_0341400989315f5ce99cd8f98dbb37a8d673c448f675e8e951e63a65a156354f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        // line 29
        echo "    </head>        
    <body>
        
        <!-- Le logo + le menu-->
        <header  class=\"menu\">
            <div class='row-fluid'>
                <div id='logo' class=\"pull-left\">
                    <a href=\"";
        // line 36
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
        // line 51
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 52
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("pc_home");
            echo "\">Accueil <span class=\"fa fa-home\"></span></a></li>
                            ";
            // line 53
            if ((twig_in_filter("ROLE_ADMIN", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array())) || twig_in_filter("ROLE_DIRECTION", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array())))) {
                // line 54
                echo "                            <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("fiche");
                echo "\"  role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Les fiches <span class=\"fa fa-archive\"></span></a></li>
                            ";
            }
            // line 56
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("demande");
            echo "\"  role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Les demandes <span class=\"fa fa-bars\"></span></a></li>
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Session <span class=\"fa fa-user\"></span></a>
                                <ul class=\"dropdown-menu\" style=\"margin-left: -90%\">
                                    <li><a href=\"";
            // line 60
            echo $this->env->getExtension('routing')->getPath("sonata_user_profile_show");
            echo "\">Profil</a></li>
                                    <li><a href=\"";
            // line 61
            echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
            echo "\">Changer mot de passe</a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li> <a href=\"";
            // line 63
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></li>
                                </ul>
                            </li> 
                                ";
        } else {
            // line 67
            echo "                                    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo " <i class='fa fa-sign-in'></i></a></li>
                                    <li><a href=\"";
            // line 68
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">S'inscrire <i class='fa  fa-check'></i></a></li>
                                ";
        }
        // line 70
        echo "                            </ul> 
                    </div>
                </nav>
            </div>
            <div class=\"row-fluid\">        
                <div class=\"row top_info pull-right\">
                    ";
        // line 76
        $this->displayBlock('menu', $context, $blocks);
        // line 89
        echo "                </div>
            </div>
        </header>
        
        <!-- les messages de notifications-->
        <div id='message' style=\"margin-top:9%;\">
            ";
        // line 95
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "error"), "method")) {
            // line 96
            echo "                <div class=\"alert alert-warning\">
                    ";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 98
                echo "                        ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "                </div>
            ";
        }
        // line 102
        echo "            ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "has", array(0 => "success"), "method")) {
            // line 103
            echo "                <div class=\"alert alert-success\">
                    ";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
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
        echo "        </div>

        <!-- Corps de la page-->
        <div id=\"main\" style=\"overflow:visible;\">
            <div class=\"container container-fluid\">
                ";
        // line 114
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 115
            echo "                    ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "enabled", array()) == true)) {
                echo "                     
                        ";
                // line 116
                $this->displayBlock('body', $context, $blocks);
                // line 119
                echo "                    ";
            } else {
                // line 120
                echo "                        <p>Votre compte n'a pas été validé. Veillez contacter l'adminisatrateur pour la validation de votre compte.</p>
                    ";
            }
            // line 122
            echo "               ";
        } else {
            // line 123
            echo "                    
                    ";
            // line 124
            $this->displayBlock('body2', $context, $blocks);
            // line 126
            echo " 
               ";
        }
        // line 127
        echo " 
           </div>
        </div>
           
        <!--Le pied de page--> 
        <div class='row' style='margin-top: 100px;'>
            <nav class=\"navbar navbar-default footer\">
                <div class=\"container\">
                    <div class=\"pull-left copyright\">
                        <p> Copyright &copy; Polytech Montpellier ";
        // line 136
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
        // line 147
        if (array_key_exists("alertesA", $context)) {
            // line 148
            echo "        <div class=\"modal fade\" style=\"top:25%;outline: none;\" id=\"alertes1\"  role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content pc_modal\">
                    <div class=\"modal-header pc_modal_header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></button>
                        <h4 class=\"modal-title custom_align\" id=\"Heading\">Les alertes</h4>
                    </div>
                    <div class=\"modal-body\">
                        ";
            // line 156
            $this->displayBlock('alertes', $context, $blocks);
            // line 176
            echo "                    </div>
                    <div class=\"modal-footer \">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove\"></span> Fermer</button>
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        // line 183
        echo " 
    
    ";
        // line 185
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
            // line 194
            $this->displayBlock('messages', $context, $blocks);
            // line 214
            echo "                    </div>
                    <div class=\"modal-footer \">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove\"></span> Fermer</button>
                    </div>
                </div>
            </div>
        </div>  
    ";
        }
        // line 221
        echo " 
    
    ";
        // line 223
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
            // line 232
            $this->displayBlock('expirations', $context, $blocks);
            // line 252
            echo "                    </div>
                    <div class=\"modal-footer \">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove\"></span> Fermer</button>
                    </div>
                </div>
            </div>
        </div>  
    ";
        }
        // line 259
        echo "                    
</html>";
        
        $__internal_0341400989315f5ce99cd8f98dbb37a8d673c448f675e8e951e63a65a156354f->leave($__internal_0341400989315f5ce99cd8f98dbb37a8d673c448f675e8e951e63a65a156354f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_85786a476c9ad617d0f645f3a2a099643cb0254868192c94db55e1a5784e817f = $this->env->getExtension("native_profiler");
        $__internal_85786a476c9ad617d0f645f3a2a099643cb0254868192c94db55e1a5784e817f->enter($__internal_85786a476c9ad617d0f645f3a2a099643cb0254868192c94db55e1a5784e817f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PolyConventions";
        
        $__internal_85786a476c9ad617d0f645f3a2a099643cb0254868192c94db55e1a5784e817f->leave($__internal_85786a476c9ad617d0f645f3a2a099643cb0254868192c94db55e1a5784e817f_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6839bf396f9d53b1358255d7d2cfbfcb9cc5181f044ad9954a364963c5928e51 = $this->env->getExtension("native_profiler");
        $__internal_6839bf396f9d53b1358255d7d2cfbfcb9cc5181f044ad9954a364963c5928e51->enter($__internal_6839bf396f9d53b1358255d7d2cfbfcb9cc5181f044ad9954a364963c5928e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_6839bf396f9d53b1358255d7d2cfbfcb9cc5181f044ad9954a364963c5928e51->leave($__internal_6839bf396f9d53b1358255d7d2cfbfcb9cc5181f044ad9954a364963c5928e51_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9863f28fa620620b635a424d977b2b5a1ad36e4d8955ebff610fb61cf60f26c8 = $this->env->getExtension("native_profiler");
        $__internal_9863f28fa620620b635a424d977b2b5a1ad36e4d8955ebff610fb61cf60f26c8->enter($__internal_9863f28fa620620b635a424d977b2b5a1ad36e4d8955ebff610fb61cf60f26c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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

        ";
        
        $__internal_9863f28fa620620b635a424d977b2b5a1ad36e4d8955ebff610fb61cf60f26c8->leave($__internal_9863f28fa620620b635a424d977b2b5a1ad36e4d8955ebff610fb61cf60f26c8_prof);

    }

    // line 76
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7896f21a4bed8f4d0c6edd7f65199085b101cbf17fb4e243a69b4e3230f0e8fc = $this->env->getExtension("native_profiler");
        $__internal_7896f21a4bed8f4d0c6edd7f65199085b101cbf17fb4e243a69b4e3230f0e8fc->enter($__internal_7896f21a4bed8f4d0c6edd7f65199085b101cbf17fb4e243a69b4e3230f0e8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 77
        echo "                        ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 78
            echo "                            <p style='color:#004874; font-size: 15px; margin-top: 5px;'> Bonjour ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
                                ";
            // line 79
            if (twig_in_filter("ROLE_ADMIN", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()))) {
                // line 80
                echo "                                    <a data-toggle='modal' data-target='#alertes1'  class='pull-right notification' data-toggle=\"dropdown\"><span class=\"fa  fa-bell\"></span></a>
                                    <a data-toggle='modal' data-target='#messages' class='pull-right notification'><span class=\"fa fa-envelope\"></span></a>
                                    <a data-toggle='modal' data-target='#expirations' class='pull-right notification'><span class=\"fa  fa-exclamation-triangle\"></span></a>
                                ";
            }
            // line 84
            echo "                            </p>
                        ";
        } else {
            // line 86
            echo "                            <p style='color:#004874; font-size: 12px;'> On préconise l'utilisation de Mozilla Firefox ou Google Chrome pour une expérience utilisateur optimale.</p>
                        ";
        }
        // line 88
        echo "                    ";
        
        $__internal_7896f21a4bed8f4d0c6edd7f65199085b101cbf17fb4e243a69b4e3230f0e8fc->leave($__internal_7896f21a4bed8f4d0c6edd7f65199085b101cbf17fb4e243a69b4e3230f0e8fc_prof);

    }

    // line 116
    public function block_body($context, array $blocks = array())
    {
        $__internal_70c5dd1ad5d10bd442d2c6e4b5674bb76395567b2b9edebfc08e4385ea7469f5 = $this->env->getExtension("native_profiler");
        $__internal_70c5dd1ad5d10bd442d2c6e4b5674bb76395567b2b9edebfc08e4385ea7469f5->enter($__internal_70c5dd1ad5d10bd442d2c6e4b5674bb76395567b2b9edebfc08e4385ea7469f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 117
        echo "                            ";
        // line 118
        echo "                        ";
        
        $__internal_70c5dd1ad5d10bd442d2c6e4b5674bb76395567b2b9edebfc08e4385ea7469f5->leave($__internal_70c5dd1ad5d10bd442d2c6e4b5674bb76395567b2b9edebfc08e4385ea7469f5_prof);

    }

    // line 124
    public function block_body2($context, array $blocks = array())
    {
        $__internal_de867eb2b38a451cb25053be104eb9aa5e001daaeb533e7422b302808167488c = $this->env->getExtension("native_profiler");
        $__internal_de867eb2b38a451cb25053be104eb9aa5e001daaeb533e7422b302808167488c->enter($__internal_de867eb2b38a451cb25053be104eb9aa5e001daaeb533e7422b302808167488c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body2"));

        // line 125
        echo "                        ";
        // line 126
        echo "                    ";
        
        $__internal_de867eb2b38a451cb25053be104eb9aa5e001daaeb533e7422b302808167488c->leave($__internal_de867eb2b38a451cb25053be104eb9aa5e001daaeb533e7422b302808167488c_prof);

    }

    // line 156
    public function block_alertes($context, array $blocks = array())
    {
        $__internal_50c4cc30541776dc175fe94a57b9a56a55f0a768bc46f24ed3eb11c7692211cf = $this->env->getExtension("native_profiler");
        $__internal_50c4cc30541776dc175fe94a57b9a56a55f0a768bc46f24ed3eb11c7692211cf->enter($__internal_50c4cc30541776dc175fe94a57b9a56a55f0a768bc46f24ed3eb11c7692211cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "alertes"));

        // line 157
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
        // line 166
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alertesA"]) ? $context["alertesA"] : $this->getContext($context, "alertesA")));
        foreach ($context['_seq'] as $context["_key"] => $context["alerte"]) {
            // line 167
            echo "                                    <tr>
                                        <td><a href=\"";
            // line 168
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($context["alerte"], "route", array()), array("id" => $this->getAttribute($context["alerte"], "ownerId", array()))), "html", null, true);
            echo "\"><span class=\"label label-warning\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["alerte"], "dateAlerte", array()), "d-m-Y"), "html", null, true);
            echo "</span> </a></td>
                                        <td><a href=\"";
            // line 169
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($context["alerte"], "route", array()), array("id" => $this->getAttribute($context["alerte"], "ownerId", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["alerte"], "intitule", array()), "html", null, true);
            echo "</a></td>
                                        <td><a href=\"";
            // line 170
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
        // line 173
        echo "                                </tbody>
                            </table>
                        ";
        
        $__internal_50c4cc30541776dc175fe94a57b9a56a55f0a768bc46f24ed3eb11c7692211cf->leave($__internal_50c4cc30541776dc175fe94a57b9a56a55f0a768bc46f24ed3eb11c7692211cf_prof);

    }

    // line 194
    public function block_messages($context, array $blocks = array())
    {
        $__internal_b5439ff6ed89e74de72b75f84f8e8bf9d0a049fcf9dfa8208bf307a14cb3920f = $this->env->getExtension("native_profiler");
        $__internal_b5439ff6ed89e74de72b75f84f8e8bf9d0a049fcf9dfa8208bf307a14cb3920f->enter($__internal_b5439ff6ed89e74de72b75f84f8e8bf9d0a049fcf9dfa8208bf307a14cb3920f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        // line 195
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
        // line 204
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messagesA"]) ? $context["messagesA"] : $this->getContext($context, "messagesA")));
        foreach ($context['_seq'] as $context["_key"] => $context["alerte"]) {
            // line 205
            echo "                                    <tr>
                                        <td><a href=\"";
            // line 206
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($context["alerte"], "route", array()), array("id" => $this->getAttribute($context["alerte"], "ownerId", array()))), "html", null, true);
            echo "\"><span class=\"label label-warning\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["alerte"], "dateAlerte", array()), "d-m-Y"), "html", null, true);
            echo "</span> </a></td>
                                        <td><a href=\"";
            // line 207
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($context["alerte"], "route", array()), array("id" => $this->getAttribute($context["alerte"], "ownerId", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["alerte"], "intitule", array()), "html", null, true);
            echo "</a></td>
                                        <td><a href=\"";
            // line 208
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
        // line 211
        echo "                                </tbody>
                            </table>
                        ";
        
        $__internal_b5439ff6ed89e74de72b75f84f8e8bf9d0a049fcf9dfa8208bf307a14cb3920f->leave($__internal_b5439ff6ed89e74de72b75f84f8e8bf9d0a049fcf9dfa8208bf307a14cb3920f_prof);

    }

    // line 232
    public function block_expirations($context, array $blocks = array())
    {
        $__internal_895290bb544588b2546a015f41de9e31e574d8b0c863000a546d6bf8bc132456 = $this->env->getExtension("native_profiler");
        $__internal_895290bb544588b2546a015f41de9e31e574d8b0c863000a546d6bf8bc132456->enter($__internal_895290bb544588b2546a015f41de9e31e574d8b0c863000a546d6bf8bc132456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "expirations"));

        // line 233
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
        // line 242
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alertesExp"]) ? $context["alertesExp"] : $this->getContext($context, "alertesExp")));
        foreach ($context['_seq'] as $context["_key"] => $context["alerte"]) {
            // line 243
            echo "                                    <tr>
                                        <td><a href=\"";
            // line 244
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($context["alerte"], "route", array()), array("id" => $this->getAttribute($context["alerte"], "ownerId", array()))), "html", null, true);
            echo "\"><span class=\"label label-warning\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["alerte"], "dateAlerte", array()), "d-m-Y"), "html", null, true);
            echo "</span> </a></td>
                                        <td><a href=\"";
            // line 245
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($context["alerte"], "route", array()), array("id" => $this->getAttribute($context["alerte"], "ownerId", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["alerte"], "intitule", array()), "html", null, true);
            echo "</a></td>
                                        <td><a href=\"";
            // line 246
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
        // line 249
        echo "                                </tbody>
                            </table>
                        ";
        
        $__internal_895290bb544588b2546a015f41de9e31e574d8b0c863000a546d6bf8bc132456->leave($__internal_895290bb544588b2546a015f41de9e31e574d8b0c863000a546d6bf8bc132456_prof);

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
        return array (  655 => 249,  644 => 246,  638 => 245,  632 => 244,  629 => 243,  625 => 242,  614 => 233,  608 => 232,  599 => 211,  588 => 208,  582 => 207,  576 => 206,  573 => 205,  569 => 204,  558 => 195,  552 => 194,  543 => 173,  532 => 170,  526 => 169,  520 => 168,  517 => 167,  513 => 166,  502 => 157,  496 => 156,  489 => 126,  487 => 125,  481 => 124,  474 => 118,  472 => 117,  466 => 116,  459 => 88,  455 => 86,  451 => 84,  445 => 80,  443 => 79,  438 => 78,  435 => 77,  429 => 76,  419 => 26,  415 => 25,  410 => 23,  406 => 22,  402 => 21,  397 => 20,  391 => 19,  381 => 15,  374 => 11,  370 => 10,  366 => 9,  362 => 8,  354 => 7,  342 => 6,  334 => 259,  324 => 252,  322 => 232,  310 => 223,  306 => 221,  296 => 214,  294 => 194,  282 => 185,  278 => 183,  268 => 176,  266 => 156,  256 => 148,  254 => 147,  240 => 136,  229 => 127,  225 => 126,  223 => 124,  220 => 123,  217 => 122,  213 => 120,  210 => 119,  208 => 116,  203 => 115,  201 => 114,  194 => 109,  190 => 107,  181 => 105,  177 => 104,  174 => 103,  171 => 102,  167 => 100,  158 => 98,  154 => 97,  151 => 96,  149 => 95,  141 => 89,  139 => 76,  131 => 70,  126 => 68,  119 => 67,  110 => 63,  105 => 61,  101 => 60,  93 => 56,  87 => 54,  85 => 53,  80 => 52,  78 => 51,  58 => 36,  49 => 29,  47 => 19,  44 => 18,  42 => 7,  38 => 6,  31 => 1,);
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
