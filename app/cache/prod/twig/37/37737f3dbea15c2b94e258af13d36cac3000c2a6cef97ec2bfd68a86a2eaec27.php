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
        $__internal_88c51626b953cf2d10f86009a55b54f43102986f387d8d89da573e580b289e11 = $this->env->getExtension("native_profiler");
        $__internal_88c51626b953cf2d10f86009a55b54f43102986f387d8d89da573e580b289e11->enter($__internal_88c51626b953cf2d10f86009a55b54f43102986f387d8d89da573e580b289e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFicheBundle:Home:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88c51626b953cf2d10f86009a55b54f43102986f387d8d89da573e580b289e11->leave($__internal_88c51626b953cf2d10f86009a55b54f43102986f387d8d89da573e580b289e11_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e8a69943a093b5e84f52dd9d10851d21f03739ac4d646681e74d8602bd42c500 = $this->env->getExtension("native_profiler");
        $__internal_e8a69943a093b5e84f52dd9d10851d21f03739ac4d646681e74d8602bd42c500->enter($__internal_e8a69943a093b5e84f52dd9d10851d21f03739ac4d646681e74d8602bd42c500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Accueil";
        
        $__internal_e8a69943a093b5e84f52dd9d10851d21f03739ac4d646681e74d8602bd42c500->leave($__internal_e8a69943a093b5e84f52dd9d10851d21f03739ac4d646681e74d8602bd42c500_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ac374704786316db33597a59fa5e5f46a8f2a6a4e774c470b4c7184f9c68696 = $this->env->getExtension("native_profiler");
        $__internal_7ac374704786316db33597a59fa5e5f46a8f2a6a4e774c470b4c7184f9c68696->enter($__internal_7ac374704786316db33597a59fa5e5f46a8f2a6a4e774c470b4c7184f9c68696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <a href=\"#\">
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
                    document.getElementById('info_message').innerHTML ='En cours de réalisation.';
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
        
        $__internal_7ac374704786316db33597a59fa5e5f46a8f2a6a4e774c470b4c7184f9c68696->leave($__internal_7ac374704786316db33597a59fa5e5f46a8f2a6a4e774c470b4c7184f9c68696_prof);

    }

    // line 96
    public function block_body2($context, array $blocks = array())
    {
        $__internal_bcbf6bd1bc8ba2cc93e127bc51f4128d572f1e67b5f09e02b8803eaff1f886b3 = $this->env->getExtension("native_profiler");
        $__internal_bcbf6bd1bc8ba2cc93e127bc51f4128d572f1e67b5f09e02b8803eaff1f886b3->enter($__internal_bcbf6bd1bc8ba2cc93e127bc51f4128d572f1e67b5f09e02b8803eaff1f886b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body2"));

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
        
        $__internal_bcbf6bd1bc8ba2cc93e127bc51f4128d572f1e67b5f09e02b8803eaff1f886b3->leave($__internal_bcbf6bd1bc8ba2cc93e127bc51f4128d572f1e67b5f09e02b8803eaff1f886b3_prof);

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
        return array (  182 => 103,  178 => 102,  171 => 97,  165 => 96,  105 => 40,  92 => 29,  90 => 28,  83 => 24,  79 => 22,  71 => 18,  67 => 16,  65 => 15,  55 => 7,  49 => 6,  36 => 3,  11 => 1,);
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
/*                     <a href="#">*/
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
/*                     document.getElementById('info_message').innerHTML ='En cours de réalisation.';*/
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
