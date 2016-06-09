<?php

/* PCFicheBundle:Home:home.html.twig */
class __TwigTemplate_6fce96fc9ee33b16620c5eb958f41c36753d382e7415d729897163d303ec6cb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "PCFicheBundle:Home:home.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'body2' => array($this, 'block_body2'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_308f5e2686407e2704b19fa5f8824aac3d85a6d09e30c40dd82df895c335e406 = $this->env->getExtension("native_profiler");
        $__internal_308f5e2686407e2704b19fa5f8824aac3d85a6d09e30c40dd82df895c335e406->enter($__internal_308f5e2686407e2704b19fa5f8824aac3d85a6d09e30c40dd82df895c335e406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFicheBundle:Home:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_308f5e2686407e2704b19fa5f8824aac3d85a6d09e30c40dd82df895c335e406->leave($__internal_308f5e2686407e2704b19fa5f8824aac3d85a6d09e30c40dd82df895c335e406_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b5d1fe827f017dbb4a7fec8d5cbd6feef641f50977f75c4f8e3ed339d007e099 = $this->env->getExtension("native_profiler");
        $__internal_b5d1fe827f017dbb4a7fec8d5cbd6feef641f50977f75c4f8e3ed339d007e099->enter($__internal_b5d1fe827f017dbb4a7fec8d5cbd6feef641f50977f75c4f8e3ed339d007e099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Accueil";
        
        $__internal_b5d1fe827f017dbb4a7fec8d5cbd6feef641f50977f75c4f8e3ed339d007e099->leave($__internal_b5d1fe827f017dbb4a7fec8d5cbd6feef641f50977f75c4f8e3ed339d007e099_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_e12f620c26605247f9c1bd50650e7b22fdf0519cfdd36acef5403f546ef1c085 = $this->env->getExtension("native_profiler");
        $__internal_e12f620c26605247f9c1bd50650e7b22fdf0519cfdd36acef5403f546ef1c085->enter($__internal_e12f620c26605247f9c1bd50650e7b22fdf0519cfdd36acef5403f546ef1c085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h1 class=\"page-header\">Bienvenue !
                    </h1>
                </div>
            </div>          
            <div class=\"row col-lg-8 col-md-8\">
                ";
        // line 15
        if (twig_in_filter("ROLE_ADMIN", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()))) {
            // line 16
            echo "
                <div id='fiches' class=\"col-sm-12 col-md-6 imagecarre\" onmouseover='displayInfo(this)' onmouseout='hideInfo()'>
                    <a href=\"";
            // line 18
            echo $this->env->getExtension('routing')->getPath("fiche");
            echo "\">
                        LES FICHES
                    </a>
                </div>
                ";
        }
        // line 22
        echo "   
                <div id='demandes' class=\"col-sm-12 col-md-6 imagecarre\" onmouseover='displayInfo(this)' onmouseout='hideInfo()' >
                    <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("demande");
        echo "\">
                        LES DEMANDES
                    </a>
                </div>
                ";
        // line 28
        if (twig_in_filter("ROLE_ADMIN", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()))) {
            // line 29
            echo "                <div id='templates' class=\"col-sm-12 col-md-6 imagecarre\" onmouseover='displayInfo(this)' onmouseout='hideInfo()'>
                    <a href=\"";
            // line 30
            echo $this->env->getExtension('routing')->getPath("template");
            echo "\">
                        LES TEMPLATES
                    </a>
                </div>
                <div id='administration' class=\"col-sm-12 col-md-6 imagecarre\" onmouseover='displayInfo(this)' onmouseout='hideInfo()'>
                    <a href=\"./admin\">
                        ADMINISTRATION
                    </a>
                </div>
                ";
        }
        // line 40
        echo "            </div>

            <div class=\"row\">

                <div id='info' class=\"col-md-3  hidden\">
                        <p class='panel-body pc_panel_blue_275' id='info_message'>
                        </p>
                </div>
            </div>
        </div>

        <script>
            .position{

            }

        </script>

        <script type='text/javascript'>
            function displayInfo(id){
                if(id.id == 'fiches'){
                    \$('#info').removeClass('hidden');
                    
                    document.getElementById('info_message').innerHTML  =  \"Contient la liste de toutes les fiches avec toutes les informations. Dans ce repertoire on peut avoir une vue complète sur toutes les fiches.\";
                    \$('#info').show();
                }
                if(id.id == 'demandes'){
                    
                    \$(\"#info\").removeClass('hidden');
                    document.getElementById('info_message').innerHTML = 'Contient la liste de toutes les demandes que vous avez réalisées avec toutes les informations. Dans ce repertoire on peut avoir une vue complète sur toutes les fiches.';
                    \$(\"#info\").show();
                }
                if(id.id == 'templates'){
                    \$(\"#info\").show();
                    \$('#info').removeClass('hidden');
                    document.getElementById('info_message').innerHTML ='Définir les templates de convention pour la génération automatique.';
                    \$(\"#info\").show();

                }
                if(id.id == 'administration'){
                    \$(\"#info\").removeClass('hidden');;
                   document.getElementById('info_message').innerHTML = 'Contient l\\'interface d\\'administration du site.';
                   \$(\"#info\").show();
                }
                
            }

            function hideInfo(id){
                \$('#info').addClass('hidden');
                \$('#info').hide();
            }

        </script>
";
        
        $__internal_e12f620c26605247f9c1bd50650e7b22fdf0519cfdd36acef5403f546ef1c085->leave($__internal_e12f620c26605247f9c1bd50650e7b22fdf0519cfdd36acef5403f546ef1c085_prof);

    }

    // line 96
    public function block_body2($context, array $blocks = array())
    {
        $__internal_01cf4114458f74591fc725ae6477e024c83af6094bef3b8c8178a6d78892c9d8 = $this->env->getExtension("native_profiler");
        $__internal_01cf4114458f74591fc725ae6477e024c83af6094bef3b8c8178a6d78892c9d8->enter($__internal_01cf4114458f74591fc725ae6477e024c83af6094bef3b8c8178a6d78892c9d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body2"));

        // line 97
        echo "        <div class=\"container\">
            <div class=\"jumbotron\">
                <h1 style=\"color: #004874;\">POLYTECH conventions</h1><br>
                <h1><small>Bienvenue !</small></h1><br>
                <div class=\"row col-md-6\">
                    <a class=\"btn pc_skyblue_btn\" href=\"";
        // line 102
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">se connecter</a>
                    <a class=\"btn pc_skyblue_btn\" href=\"";
        // line 103
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">s'inscrire</a>
                </div>
            </div>
        </div>              
";
        
        $__internal_01cf4114458f74591fc725ae6477e024c83af6094bef3b8c8178a6d78892c9d8->leave($__internal_01cf4114458f74591fc725ae6477e024c83af6094bef3b8c8178a6d78892c9d8_prof);

    }

    public function getTemplateName()
    {
        return "PCFicheBundle:Home:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 103,  181 => 102,  174 => 97,  168 => 96,  108 => 40,  95 => 30,  92 => 29,  90 => 28,  83 => 24,  79 => 22,  71 => 18,  67 => 16,  65 => 15,  55 => 7,  49 => 6,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Accueil{% endblock %}*/
/* */
/* {# ce block est utilisé quand l'utilisateur est connecté #}*/
/* {% block body %}*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-12">*/
/*                     <h1 class="page-header">Bienvenue !*/
/*                     </h1>*/
/*                 </div>*/
/*             </div>          */
/*             <div class="row col-lg-8 col-md-8">*/
/*                 {% if 'ROLE_ADMIN' in app.user.roles %}*/
/* */
/*                 <div id='fiches' class="col-sm-12 col-md-6 imagecarre" onmouseover='displayInfo(this)' onmouseout='hideInfo()'>*/
/*                     <a href="{{path("fiche")}}">*/
/*                         LES FICHES*/
/*                     </a>*/
/*                 </div>*/
/*                 {% endif %}   */
/*                 <div id='demandes' class="col-sm-12 col-md-6 imagecarre" onmouseover='displayInfo(this)' onmouseout='hideInfo()' >*/
/*                     <a href="{{path("demande")}}">*/
/*                         LES DEMANDES*/
/*                     </a>*/
/*                 </div>*/
/*                 {% if 'ROLE_ADMIN' in app.user.roles %}*/
/*                 <div id='templates' class="col-sm-12 col-md-6 imagecarre" onmouseover='displayInfo(this)' onmouseout='hideInfo()'>*/
/*                     <a href="{{path("template")}}">*/
/*                         LES TEMPLATES*/
/*                     </a>*/
/*                 </div>*/
/*                 <div id='administration' class="col-sm-12 col-md-6 imagecarre" onmouseover='displayInfo(this)' onmouseout='hideInfo()'>*/
/*                     <a href="./admin">*/
/*                         ADMINISTRATION*/
/*                     </a>*/
/*                 </div>*/
/*                 {% endif %}*/
/*             </div>*/
/* */
/*             <div class="row">*/
/* */
/*                 <div id='info' class="col-md-3  hidden">*/
/*                         <p class='panel-body pc_panel_blue_275' id='info_message'>*/
/*                         </p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <script>*/
/*             .position{*/
/* */
/*             }*/
/* */
/*         </script>*/
/* */
/*         <script type='text/javascript'>*/
/*             function displayInfo(id){*/
/*                 if(id.id == 'fiches'){*/
/*                     $('#info').removeClass('hidden');*/
/*                     */
/*                     document.getElementById('info_message').innerHTML  =  "Contient la liste de toutes les fiches avec toutes les informations. Dans ce repertoire on peut avoir une vue complète sur toutes les fiches.";*/
/*                     $('#info').show();*/
/*                 }*/
/*                 if(id.id == 'demandes'){*/
/*                     */
/*                     $("#info").removeClass('hidden');*/
/*                     document.getElementById('info_message').innerHTML = 'Contient la liste de toutes les demandes que vous avez réalisées avec toutes les informations. Dans ce repertoire on peut avoir une vue complète sur toutes les fiches.';*/
/*                     $("#info").show();*/
/*                 }*/
/*                 if(id.id == 'templates'){*/
/*                     $("#info").show();*/
/*                     $('#info').removeClass('hidden');*/
/*                     document.getElementById('info_message').innerHTML ='Définir les templates de convention pour la génération automatique.';*/
/*                     $("#info").show();*/
/* */
/*                 }*/
/*                 if(id.id == 'administration'){*/
/*                     $("#info").removeClass('hidden');;*/
/*                    document.getElementById('info_message').innerHTML = 'Contient l\'interface d\'administration du site.';*/
/*                    $("#info").show();*/
/*                 }*/
/*                 */
/*             }*/
/* */
/*             function hideInfo(id){*/
/*                 $('#info').addClass('hidden');*/
/*                 $('#info').hide();*/
/*             }*/
/* */
/*         </script>*/
/* {% endblock %}*/
/* */
/* {# ce block est utilisé quand l'utilisateur n'est pas connecté #}*/
/* {% block body2 %}*/
/*         <div class="container">*/
/*             <div class="jumbotron">*/
/*                 <h1 style="color: #004874;">POLYTECH conventions</h1><br>*/
/*                 <h1><small>Bienvenue !</small></h1><br>*/
/*                 <div class="row col-md-6">*/
/*                     <a class="btn pc_skyblue_btn" href="{{path("fos_user_security_login")}}">se connecter</a>*/
/*                     <a class="btn pc_skyblue_btn" href="{{path("fos_user_registration_register")}}">s'inscrire</a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>              */
/* {% endblock %}*/
/* */
/* */
