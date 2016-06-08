<?php

/* PCFicheBundle::showLayout.html.twig */
class __TwigTemplate_d1b5d01903b8bec42de25542874d45390141836624e80bd591e53614008b7257 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "PCFicheBundle::showLayout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'barre' => array($this, 'block_barre'),
            'tabs' => array($this, 'block_tabs'),
            'content' => array($this, 'block_content'),
            'more_content' => array($this, 'block_more_content'),
            'modals' => array($this, 'block_modals'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39bce2e1959219e848f7861598ec4ddb1f62d5026e6b581f1f9b774678f032aa = $this->env->getExtension("native_profiler");
        $__internal_39bce2e1959219e848f7861598ec4ddb1f62d5026e6b581f1f9b774678f032aa->enter($__internal_39bce2e1959219e848f7861598ec4ddb1f62d5026e6b581f1f9b774678f032aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFicheBundle::showLayout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39bce2e1959219e848f7861598ec4ddb1f62d5026e6b581f1f9b774678f032aa->leave($__internal_39bce2e1959219e848f7861598ec4ddb1f62d5026e6b581f1f9b774678f032aa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_27b9fb73ea0ee9f03b9049a1629a72db8918bf097809d4722932be3f7550e5a4 = $this->env->getExtension("native_profiler");
        $__internal_27b9fb73ea0ee9f03b9049a1629a72db8918bf097809d4722932be3f7550e5a4->enter($__internal_27b9fb73ea0ee9f03b9049a1629a72db8918bf097809d4722932be3f7550e5a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div id=\"menu\" class=\"col-sm-3 col-md-2 sidebar\">
                <ul class=\"nav nav-sidebar\">
                    ";
        // line 8
        $this->displayBlock('barre', $context, $blocks);
        // line 10
        echo "                </ul>
            </div>
            <div class=\"col-sm-9  col-md-10  main\">
                <h3>Fiche ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type", array()), "nom", array()), "html", null, true);
        echo "- ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sousType", array()), "nom", array()), "html", null, true);
        echo "- ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</h3>
                <div class=\"tabbable-panel\">
                    <div class=\"tabbable-line\">
                         <ul class=\"nav nav-tabs \">
                            ";
        // line 17
        $this->displayBlock('tabs', $context, $blocks);
        // line 33
        echo "                        </ul>
                        <div class=\"tab-content\">
                            <div class=\"tab-pane active\" id=\"tab_default_1\">
                                ";
        // line 36
        $this->displayBlock('content', $context, $blocks);
        // line 38
        echo "                            </div>
                            <div class=\"tab-pane\" id=\"tab_default_2\">
                                ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 41
            echo "                                    <div class =\"panel panel-default messagebox\">
                                        <div class=\"panel-body messagebox-body\">";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "message", array()), "html", null, true);
            echo "</div>
                                        <div class=\"panel-heading messagebox-info\">par ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "auteur", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["message"], "date", array()), "d-m-Y"), "html", null, true);
            echo "</div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                                ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["messageForm"]) ? $context["messageForm"] : $this->getContext($context, "messageForm")), 'form');
        echo "
                            </div>
                            <div class=\"tab-pane\" id=\"actions\">
                                ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actions"]) ? $context["actions"] : $this->getContext($context, "actions")));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 50
            echo "                                    <div class =\"panel panel-default messagebox\">
                                        <div class=\"panel-body messagebox-body\">";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "contenu", array()), "html", null, true);
            echo "</div>
                                        <div class=\"panel-heading messagebox-info\">par ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "auteur", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["action"], "dateDeCreation", array()), "d-m-Y"), "html", null, true);
            echo "</div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                                ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["actionForm"]) ? $context["actionForm"] : $this->getContext($context, "actionForm")), 'form');
        echo "
                            </div>
                            <div class=\"tab-pane\" id=\"tab_default_3\">
                                <a data-placement=\"top\" data-toggle=\"modal\" data-target=\"#new_avenant\" class=\"btn pc_btn\">ajouter un avenant</a>
                                <table class=\"records_list table table-bordred table-striped\">
                                    <thead>
                                        <tr>
                                             <th><input type=\"checkbox\" id=\"checkall\" /></th>
                                            <th>Id</th>
                                            <th>Objet</th>
                                            <th>Motif</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["avenants"]) ? $context["avenants"] : $this->getContext($context, "avenants")));
        foreach ($context['_seq'] as $context["_key"] => $context["avenant"]) {
            // line 71
            echo "                                        <tr>
                                            <td><input type=\"checkbox\" class=\"checkthis\" /></td>
                                            <td><a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("avenant_show", array("id" => $this->getAttribute($context["avenant"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["avenant"], "id", array()), "html", null, true);
            echo "</a></td>
                                            <td><a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("avenant_show", array("id" => $this->getAttribute($context["avenant"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["avenant"], "objet", array()), "html", null, true);
            echo "</a></td>
                                            <td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["avenant"], "motif", array()), "html", null, true);
            echo "</td>
                                            <td>
                                                <a  data-placement=\"top\" data-toggle=\"tooltip\" title=\"Voir avenant\" class=\"btn pc_skyblue_btn btn-xs\" href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("avenant_show", array("id" => $this->getAttribute($context["avenant"], "id", array()))), "html", null, true);
            echo "\" ><span class=\"glyphicon glyphicon-eye-open\"></span></a>
                                                <a data-placement=\"top\" data-toggle=\"tooltip\" title=\"Télécharger avenant\" class=\"btn pc_skyblue_btn btn-xs\" href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("avenant_pdf", array("id" => $this->getAttribute($context["avenant"], "id", array()), "ownerId" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\" ><span class=\"fa  fa-download\"></span></a>
                                            </td>    
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avenant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                                    </tbody>
                                </table>
                            </div>
                            <div class=\"tab-pane\" id=\"tab_default_4\">
                                <a data-placement=\"top\" data-toggle=\"modal\" data-target=\"#new_alerte\" class=\"btn pc_btn\">ajouter une alerte</a>
                                <table class=\"records_list table table-bordred table-striped\">
                                    <thead>
                                        <tr>
                                             <th><input type=\"checkbox\" id=\"checkall\" /></th>
                                            <th>Id</th>
                                            <th>Intitule</th>
                                            <th>Contenu</th>
                                            <th>Date d'effet</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alertes"]) ? $context["alertes"] : $this->getContext($context, "alertes")));
        foreach ($context['_seq'] as $context["_key"] => $context["alerte"]) {
            // line 100
            echo "                                        <tr>
                                            <td><input type=\"checkbox\" class=\"checkthis\" /></td>
                                            <td><a href=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fiche_show", array("id" => $this->getAttribute($context["alerte"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["alerte"], "id", array()), "html", null, true);
            echo "</a></td>
                                            <td><a href=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fiche_show", array("id" => $this->getAttribute($context["alerte"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["alerte"], "intitule", array()), "html", null, true);
            echo "</a></td>
                                            <td>";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["alerte"], "objet", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 105
            if ($this->getAttribute($context["alerte"], "dateAlerte", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["alerte"], "dateAlerte", array()), "d-m-Y H:i"), "html", null, true);
            }
            echo "</td>
                                            <td>
                                                <a  data-placement=\"top\" data-toggle=\"tooltip\" title=\"Voir fiche\" class=\"btn btn-primary btn-xs\" href=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("alerte_show", array("id" => $this->getAttribute($context["alerte"], "id", array()))), "html", null, true);
            echo "\" ><span class=\"glyphicon glyphicon-eye-open\"></span></a>
                                            </td>    
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alerte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "                                    </tbody>
                                </table>
                            </div>
                            <div class=\"tab-pane\" id=\"tab_default_5\">
                                <a data-placement=\"top\" data-toggle=\"modal\" data-target=\"#new_fichier\" class=\"btn pc_btn\">ajouter un document</a>
                                <table class=\"records_list table table-bordred table-striped\">
                                    <thead>
                                        <tr>
                                             <th><input type=\"checkbox\" id=\"checkall\" /></th>
                                            <th>Id</th>
                                            <th>Intitule</th>
                                            <th>Date d'ajout</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fichiers"]) ? $context["fichiers"] : $this->getContext($context, "fichiers")));
        foreach ($context['_seq'] as $context["_key"] => $context["fichier"]) {
            // line 128
            echo "                                        <tr>
                                            <td><input type=\"checkbox\" class=\"checkthis\" /></td>
                                            <td><a href=\"";
            // line 130
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fichier_show", array("id" => $this->getAttribute($context["fichier"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "id", array()), "html", null, true);
            echo "</a></td>
                                            <td><a href=\"";
            // line 131
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fichier_show", array("id" => $this->getAttribute($context["fichier"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "nom", array()), "html", null, true);
            echo "</a></td>
                                            <td>";
            // line 132
            if ($this->getAttribute($context["fichier"], "dateDeCreation", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["fichier"], "dateDeCreation", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                                            <td>
                                                <a  data-placement=\"top\" data-toggle=\"tooltip\" title=\"Télécharger fichier\" class=\"btn btn-primary btn-xs\" href=\"";
            // line 134
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fiche_download", array("filename" => $this->getAttribute($context["fichier"], "nom", array()))), "html", null, true);
            echo "\" ><span class=\"glyphicon glyphicon-download\"></span></a>
                                                <a data-placement=\"top\" data-toggle=\"tooltip\" title=\"voir fichier\" class=\"btn btn-primary btn-xs\" href=\"";
            // line 135
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fichier_show", array("id" => $this->getAttribute($context["fichier"], "id", array()))), "html", null, true);
            echo "\" ><span class=\"glyphicon glyphicon-eye-open\"></span></a>
                                            </td>    
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fichier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "                                    </tbody>
                                </table>
                            </div>
                            ";
        // line 142
        $this->displayBlock('more_content', $context, $blocks);
        // line 143
        echo "        
                        </div>
                    </div>
                </div>
            </div>
\t</div>
    </div>
    
    ";
        // line 151
        $this->displayBlock('modals', $context, $blocks);
        // line 329
        echo "    
    
    <script  type=\"text/javascript\">
    function determiner(){
        var x = document.getElementById(\"pc_fichebundle_avenant_objet\").selectedIndex;
        var y = document.getElementById(\"pc_fichebundle_avenant_objet\").options;
        var choix = y[x].value;
        alert(y[x].value);
        if (choix === 'modifier'){
            \$('#modifier').removeClass('hidden');
            \$('#modifier').show();
            \$('#proroger').hide();
            \$('#proroger').addClass('hidden');
        }
        if (choix === 'proroger'){
            \$('#proroger').removeClass('hidden');
            \$('#proroger').show();
            \$('#modifier').hide();
            \$('#modifier').addClass('hidden');
        }
        if (choix === 'proroger et modifier'){
            \$('#modifier').removeClass('hidden');
            \$('#modifier').show();
            \$('#proroger').removeClass('hidden');
            \$('#proroger').show();
        }
    }
</script>
";
        
        $__internal_27b9fb73ea0ee9f03b9049a1629a72db8918bf097809d4722932be3f7550e5a4->leave($__internal_27b9fb73ea0ee9f03b9049a1629a72db8918bf097809d4722932be3f7550e5a4_prof);

    }

    // line 8
    public function block_barre($context, array $blocks = array())
    {
        $__internal_d27e4dc15ab1d515827459305a837aa6d0e0897da52829ded6c18705b55e4253 = $this->env->getExtension("native_profiler");
        $__internal_d27e4dc15ab1d515827459305a837aa6d0e0897da52829ded6c18705b55e4253->enter($__internal_d27e4dc15ab1d515827459305a837aa6d0e0897da52829ded6c18705b55e4253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barre"));

        // line 9
        echo "                    ";
        
        $__internal_d27e4dc15ab1d515827459305a837aa6d0e0897da52829ded6c18705b55e4253->leave($__internal_d27e4dc15ab1d515827459305a837aa6d0e0897da52829ded6c18705b55e4253_prof);

    }

    // line 17
    public function block_tabs($context, array $blocks = array())
    {
        $__internal_50a1c324a6d8c9ded9e355639a7e65006c5f00d49239155e1a432e82430b7e7f = $this->env->getExtension("native_profiler");
        $__internal_50a1c324a6d8c9ded9e355639a7e65006c5f00d49239155e1a432e82430b7e7f->enter($__internal_50a1c324a6d8c9ded9e355639a7e65006c5f00d49239155e1a432e82430b7e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabs"));

        // line 18
        echo "                            <li class=\"active\"><a href=\"#tab_default_1\" data-toggle=\"tab\">Informations </a>
                            </li>
                            <li><a href=\"#tab_default_2\" data-toggle=\"tab\">Commentaires </a>
                            </li>
                            <li><a href=\"#actions\" data-toggle=\"tab\">Suivi d'actions </a>
                            </li>
                            <li><a href=\"#tab_default_3\" data-toggle=\"tab\">Avenants<span class=\"label label-primary\">";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["avenantsCount"]) ? $context["avenantsCount"] : $this->getContext($context, "avenantsCount")), "html", null, true);
        echo "</span> </a>
                            </li>
                            <li>
                            <a href=\"#tab_default_4\" data-toggle=\"tab\">Alertes </a>
                            </li>
                            <li>
                            <a href=\"#tab_default_5\" data-toggle=\"tab\">Documents </a>
                            </li>
                            ";
        
        $__internal_50a1c324a6d8c9ded9e355639a7e65006c5f00d49239155e1a432e82430b7e7f->leave($__internal_50a1c324a6d8c9ded9e355639a7e65006c5f00d49239155e1a432e82430b7e7f_prof);

    }

    // line 36
    public function block_content($context, array $blocks = array())
    {
        $__internal_8bfaa7afe18873d160750dcc05aace56788899a12a216fc131506a74fd1133d3 = $this->env->getExtension("native_profiler");
        $__internal_8bfaa7afe18873d160750dcc05aace56788899a12a216fc131506a74fd1133d3->enter($__internal_8bfaa7afe18873d160750dcc05aace56788899a12a216fc131506a74fd1133d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 37
        echo "                                ";
        
        $__internal_8bfaa7afe18873d160750dcc05aace56788899a12a216fc131506a74fd1133d3->leave($__internal_8bfaa7afe18873d160750dcc05aace56788899a12a216fc131506a74fd1133d3_prof);

    }

    // line 142
    public function block_more_content($context, array $blocks = array())
    {
        $__internal_c849a9982aad734db7a81587c85ce91d1038367fd1526ba772658d332f785a1d = $this->env->getExtension("native_profiler");
        $__internal_c849a9982aad734db7a81587c85ce91d1038367fd1526ba772658d332f785a1d->enter($__internal_c849a9982aad734db7a81587c85ce91d1038367fd1526ba772658d332f785a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "more_content"));

        // line 143
        echo "                            ";
        
        $__internal_c849a9982aad734db7a81587c85ce91d1038367fd1526ba772658d332f785a1d->leave($__internal_c849a9982aad734db7a81587c85ce91d1038367fd1526ba772658d332f785a1d_prof);

    }

    // line 151
    public function block_modals($context, array $blocks = array())
    {
        $__internal_295d966e02e4b19fdfc5525807be624690f6aa591229cbbe2d172fe147e679d2 = $this->env->getExtension("native_profiler");
        $__internal_295d966e02e4b19fdfc5525807be624690f6aa591229cbbe2d172fe147e679d2->enter($__internal_295d966e02e4b19fdfc5525807be624690f6aa591229cbbe2d172fe147e679d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modals"));

        // line 152
        echo "        <div class=\"modal fade\" style=\"top:25%;outline: none;\" id=\"delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"delete\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" style=\"width:50%;\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></button>
                    <h4 class=\"modal-title custom_align\" id=\"Heading\">Suppression fiche</h4>
                </div>
                <div class=\"modal-body\">
                       ";
        // line 160
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" style=\"top:25%;outline: none;\" id=\"new_avenant\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"edit\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" style=\"width:50%;\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></button>
                    <h4 class=\"modal-title custom_align\" id=\"Heading\">Création avenant</h4>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 173
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
                    ";
        // line 174
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), 'errors');
        echo "
                    <div class=\"form-group\">
                        ";
        // line 176
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "typePartenaire", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Type de partenaire"));
        echo "
                        ";
        // line 177
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "typePartenaire", array()), 'errors');
        echo "
                        <div class=\"col-sm-4\">
                            ";
        // line 179
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "typePartenaire", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        </div>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 184
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "motif", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Motif de l'avenant"));
        echo "
                        ";
        // line 185
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "motif", array()), 'errors');
        echo "
                        <div class=\"col-sm-4\">
                            ";
        // line 187
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "motif", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        </div>
                    </div>
                        
                    <div class=\"form-group\">
                        ";
        // line 192
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "objet", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Objet de l'avenant"));
        echo "
                        ";
        // line 193
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "objet", array()), 'errors');
        echo "
                        <div class=\"col-sm-4\">
                            ";
        // line 195
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "objet", array()), 'widget', array("attr" => array("class" => "determinant")));
        echo "
                            <button type=\"button\" class=\"btn pc_btn\" onclick=\"determiner()\">Confirmer objet</button>
                        </div>
                    </div>
                    
                    <div id=\"modifier\" class=\"hidden\">
                    <div class=\"form-group\">
                        ";
        // line 202
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "numeroParagrapheModifie", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Numéro du paragraphe modifié"));
        echo "
                        ";
        // line 203
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "numeroParagrapheModifie", array()), 'errors');
        echo "
                        <div class=\"col-sm-4\">
                            ";
        // line 205
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "numeroParagrapheModifie", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 209
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "numeroArticleModifie", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Numéro de l'article modifié"));
        echo "
                        ";
        // line 210
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "numeroArticleModifie", array()), 'errors');
        echo "
                        <div class=\"col-sm-4\">
                            ";
        // line 212
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "numeroArticleModifie", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 216
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "intituleArticleModifie", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Intitulé de l'article modifié"));
        echo "
                        ";
        // line 217
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "intituleArticleModifie", array()), 'errors');
        echo "
                        <div class=\"col-sm-4\">
                            ";
        // line 219
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "intituleArticleModifie", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 223
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "nouveauTexte", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Nouveau texte"));
        echo "
                        ";
        // line 224
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "nouveauTexte", array()), 'errors');
        echo "
                        <div class=\"col-sm-4\">
                            ";
        // line 226
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "nouveauTexte", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        </div>
                    </div>
                    </div>
                    <div id=\"proroger\" class=\"hidden\">
                    <div class=\"form-group\">
                        ";
        // line 232
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "numeroArticleDuree", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Numéro de l'article Durée"));
        echo "
                        ";
        // line 233
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "numeroArticleDuree", array()), 'errors');
        echo "
                        <div class=\"col-sm-4\">
                            ";
        // line 235
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "numeroArticleDuree", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 239
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "intituleArticleDuree", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Intitulé de l'article Durée"));
        echo "
                        ";
        // line 240
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "intituleArticleDuree", array()), 'errors');
        echo "
                        <div class=\"col-sm-4\">
                            ";
        // line 242
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "intituleArticleDuree", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 246
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "nbMoisProrogation", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Nombre de mois de prorogation"));
        echo "
                        ";
        // line 247
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "nbMoisProrogation", array()), 'errors');
        echo "
                        <div class=\"col-sm-4\">
                            ";
        // line 249
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "nbMoisProrogation", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        </div>
                    </div>
                    </div>
                    ";
        // line 253
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), 'rest');
        echo "
                    ";
        // line 254
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
                
    <div class=\"modal fade\" style=\"top:25%;outline: none;  \" id=\"new_alerte\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"edit\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" style=\"width:50%;\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></button>
                    <h4 class=\"modal-title custom_align\" id=\"Heading\">Création alerte</h4>
                </div>
                <div class=\"modal-body\"> 
                    ";
        // line 268
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["alert_form"]) ? $context["alert_form"] : $this->getContext($context, "alert_form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
                    ";
        // line 269
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["alert_form"]) ? $context["alert_form"] : $this->getContext($context, "alert_form")), 'errors');
        echo "
                   <div class=\"form-group\">
                        ";
        // line 271
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["alert_form"]) ? $context["alert_form"] : $this->getContext($context, "alert_form")), "intitule", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Intitulé"));
        echo "
                        ";
        // line 272
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["alert_form"]) ? $context["alert_form"] : $this->getContext($context, "alert_form")), "intitule", array()), 'errors');
        echo "
                        <div class=\"col-sm-4\">
                            ";
        // line 274
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["alert_form"]) ? $context["alert_form"] : $this->getContext($context, "alert_form")), "intitule", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 278
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["alert_form"]) ? $context["alert_form"] : $this->getContext($context, "alert_form")), "objet", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Objet de l'alerte"));
        echo "
                        ";
        // line 279
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["alert_form"]) ? $context["alert_form"] : $this->getContext($context, "alert_form")), "objet", array()), 'errors');
        echo "
                        <div class=\"col-sm-4\">
                            ";
        // line 281
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["alert_form"]) ? $context["alert_form"] : $this->getContext($context, "alert_form")), "objet", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 285
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["alert_form"]) ? $context["alert_form"] : $this->getContext($context, "alert_form")), "dateAlerte", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Date d'écheance"));
        echo "
                        ";
        // line 286
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["alert_form"]) ? $context["alert_form"] : $this->getContext($context, "alert_form")), "dateAlerte", array()), 'errors');
        echo "
                        <div class=\"col-sm-4\">
                            ";
        // line 288
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["alert_form"]) ? $context["alert_form"] : $this->getContext($context, "alert_form")), "dateAlerte", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        </div>
                    </div>
                    ";
        // line 291
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["alert_form"]) ? $context["alert_form"] : $this->getContext($context, "alert_form")), 'rest');
        echo "
                    ";
        // line 292
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["alert_form"]) ? $context["alert_form"] : $this->getContext($context, "alert_form")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
                
    <div class=\"modal fade\" style=\"top:25%;outline: none;\" id=\"new_fichier\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"edit\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></button>
                    <h4 class=\"modal-title custom_align\" id=\"Heading\">Ajout fichier</h4>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 306
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["fichier_form"]) ? $context["fichier_form"] : $this->getContext($context, "fichier_form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
                    ";
        // line 307
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["fichier_form"]) ? $context["fichier_form"] : $this->getContext($context, "fichier_form")), 'errors');
        echo "
                    ";
        // line 308
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["fichier_form"]) ? $context["fichier_form"] : $this->getContext($context, "fichier_form")), 'rest');
        echo "
                    ";
        // line 309
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["fichier_form"]) ? $context["fichier_form"] : $this->getContext($context, "fichier_form")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div> 

    <div class=\"modal fade\" style=\"top:25%;outline: none;\" id=\"delete\" aria-labelledby=\"delete\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></button>
                    <h4 class=\"modal-title custom_align\" id=\"Heading\">Suppression</h4>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 323
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
                </div>
            </div>
        </div>
    </div> 
    ";
        
        $__internal_295d966e02e4b19fdfc5525807be624690f6aa591229cbbe2d172fe147e679d2->leave($__internal_295d966e02e4b19fdfc5525807be624690f6aa591229cbbe2d172fe147e679d2_prof);

    }

    public function getTemplateName()
    {
        return "PCFicheBundle::showLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  768 => 323,  751 => 309,  747 => 308,  743 => 307,  739 => 306,  722 => 292,  718 => 291,  712 => 288,  707 => 286,  703 => 285,  696 => 281,  691 => 279,  687 => 278,  680 => 274,  675 => 272,  671 => 271,  666 => 269,  662 => 268,  645 => 254,  641 => 253,  634 => 249,  629 => 247,  625 => 246,  618 => 242,  613 => 240,  609 => 239,  602 => 235,  597 => 233,  593 => 232,  584 => 226,  579 => 224,  575 => 223,  568 => 219,  563 => 217,  559 => 216,  552 => 212,  547 => 210,  543 => 209,  536 => 205,  531 => 203,  527 => 202,  517 => 195,  512 => 193,  508 => 192,  500 => 187,  495 => 185,  491 => 184,  483 => 179,  478 => 177,  474 => 176,  469 => 174,  465 => 173,  449 => 160,  439 => 152,  433 => 151,  426 => 143,  420 => 142,  413 => 37,  407 => 36,  391 => 24,  383 => 18,  377 => 17,  370 => 9,  364 => 8,  329 => 329,  327 => 151,  317 => 143,  315 => 142,  310 => 139,  300 => 135,  296 => 134,  289 => 132,  283 => 131,  277 => 130,  273 => 128,  269 => 127,  251 => 111,  241 => 107,  234 => 105,  230 => 104,  224 => 103,  218 => 102,  214 => 100,  210 => 99,  191 => 82,  181 => 78,  177 => 77,  172 => 75,  166 => 74,  160 => 73,  156 => 71,  152 => 70,  133 => 55,  122 => 52,  118 => 51,  115 => 50,  111 => 49,  104 => 46,  93 => 43,  89 => 42,  86 => 41,  82 => 40,  78 => 38,  76 => 36,  71 => 33,  69 => 17,  58 => 13,  53 => 10,  51 => 8,  45 => 4,  39 => 3,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="container-fluid">*/
/*         <div class="row">*/
/*             <div id="menu" class="col-sm-3 col-md-2 sidebar">*/
/*                 <ul class="nav nav-sidebar">*/
/*                     {% block barre %}*/
/*                     {% endblock %}*/
/*                 </ul>*/
/*             </div>*/
/*             <div class="col-sm-9  col-md-10  main">*/
/*                 <h3>Fiche {{ entity.type.nom }}- {{ entity.sousType.nom }}- {{ entity.id }}</h3>*/
/*                 <div class="tabbable-panel">*/
/*                     <div class="tabbable-line">*/
/*                          <ul class="nav nav-tabs ">*/
/*                             {% block tabs %}*/
/*                             <li class="active"><a href="#tab_default_1" data-toggle="tab">Informations </a>*/
/*                             </li>*/
/*                             <li><a href="#tab_default_2" data-toggle="tab">Commentaires </a>*/
/*                             </li>*/
/*                             <li><a href="#actions" data-toggle="tab">Suivi d'actions </a>*/
/*                             </li>*/
/*                             <li><a href="#tab_default_3" data-toggle="tab">Avenants<span class="label label-primary">{{ avenantsCount }}</span> </a>*/
/*                             </li>*/
/*                             <li>*/
/*                             <a href="#tab_default_4" data-toggle="tab">Alertes </a>*/
/*                             </li>*/
/*                             <li>*/
/*                             <a href="#tab_default_5" data-toggle="tab">Documents </a>*/
/*                             </li>*/
/*                             {% endblock %}*/
/*                         </ul>*/
/*                         <div class="tab-content">*/
/*                             <div class="tab-pane active" id="tab_default_1">*/
/*                                 {% block content %}*/
/*                                 {% endblock %}*/
/*                             </div>*/
/*                             <div class="tab-pane" id="tab_default_2">*/
/*                                 {% for message in messages%}*/
/*                                     <div class ="panel panel-default messagebox">*/
/*                                         <div class="panel-body messagebox-body">{{message.message}}</div>*/
/*                                         <div class="panel-heading messagebox-info">par {{ message.auteur}}, {{message.date |date('d-m-Y')}}</div>*/
/*                                     </div>*/
/*                                 {%endfor%}*/
/*                                 {{form(messageForm)}}*/
/*                             </div>*/
/*                             <div class="tab-pane" id="actions">*/
/*                                 {% for action in actions%}*/
/*                                     <div class ="panel panel-default messagebox">*/
/*                                         <div class="panel-body messagebox-body">{{action.contenu}}</div>*/
/*                                         <div class="panel-heading messagebox-info">par {{ action.auteur}}, {{action.dateDeCreation |date('d-m-Y')}}</div>*/
/*                                     </div>*/
/*                                 {%endfor%}*/
/*                                 {{form(actionForm)}}*/
/*                             </div>*/
/*                             <div class="tab-pane" id="tab_default_3">*/
/*                                 <a data-placement="top" data-toggle="modal" data-target="#new_avenant" class="btn pc_btn">ajouter un avenant</a>*/
/*                                 <table class="records_list table table-bordred table-striped">*/
/*                                     <thead>*/
/*                                         <tr>*/
/*                                              <th><input type="checkbox" id="checkall" /></th>*/
/*                                             <th>Id</th>*/
/*                                             <th>Objet</th>*/
/*                                             <th>Motif</th>*/
/*                                             <th>Actions</th>*/
/*                                         </tr>*/
/*                                     </thead>*/
/*                                     <tbody>*/
/*                                     {% for avenant in avenants %}*/
/*                                         <tr>*/
/*                                             <td><input type="checkbox" class="checkthis" /></td>*/
/*                                             <td><a href="{{ path('avenant_show', { 'id': avenant.id }) }}">{{ avenant.id }}</a></td>*/
/*                                             <td><a href="{{ path('avenant_show', { 'id': avenant.id }) }}">{{ avenant.objet }}</a></td>*/
/*                                             <td>{{ avenant.motif }}</td>*/
/*                                             <td>*/
/*                                                 <a  data-placement="top" data-toggle="tooltip" title="Voir avenant" class="btn pc_skyblue_btn btn-xs" href="{{ path('avenant_show', { 'id': avenant.id }) }}" ><span class="glyphicon glyphicon-eye-open"></span></a>*/
/*                                                 <a data-placement="top" data-toggle="tooltip" title="Télécharger avenant" class="btn pc_skyblue_btn btn-xs" href="{{ path('avenant_pdf', { 'id': avenant.id ,'ownerId' :entity.id }) }}" ><span class="fa  fa-download"></span></a>*/
/*                                             </td>    */
/*                                         </tr>*/
/*                                     {% endfor %}*/
/*                                     </tbody>*/
/*                                 </table>*/
/*                             </div>*/
/*                             <div class="tab-pane" id="tab_default_4">*/
/*                                 <a data-placement="top" data-toggle="modal" data-target="#new_alerte" class="btn pc_btn">ajouter une alerte</a>*/
/*                                 <table class="records_list table table-bordred table-striped">*/
/*                                     <thead>*/
/*                                         <tr>*/
/*                                              <th><input type="checkbox" id="checkall" /></th>*/
/*                                             <th>Id</th>*/
/*                                             <th>Intitule</th>*/
/*                                             <th>Contenu</th>*/
/*                                             <th>Date d'effet</th>*/
/*                                             <th>Actions</th>*/
/*                                         </tr>*/
/*                                     </thead>*/
/*                                     <tbody>*/
/*                                     {% for alerte in alertes %}*/
/*                                         <tr>*/
/*                                             <td><input type="checkbox" class="checkthis" /></td>*/
/*                                             <td><a href="{{ path('fiche_show', { 'id': alerte.id }) }}">{{ alerte.id }}</a></td>*/
/*                                             <td><a href="{{ path('fiche_show', { 'id': alerte.id }) }}">{{ alerte.intitule }}</a></td>*/
/*                                             <td>{{ alerte.objet }}</td>*/
/*                                             <td>{% if alerte.dateAlerte %}{{ alerte.dateAlerte|date('d-m-Y H:i') }}{% endif %}</td>*/
/*                                             <td>*/
/*                                                 <a  data-placement="top" data-toggle="tooltip" title="Voir fiche" class="btn btn-primary btn-xs" href="{{ path('alerte_show', { 'id': alerte.id }) }}" ><span class="glyphicon glyphicon-eye-open"></span></a>*/
/*                                             </td>    */
/*                                         </tr>*/
/*                                     {% endfor %}*/
/*                                     </tbody>*/
/*                                 </table>*/
/*                             </div>*/
/*                             <div class="tab-pane" id="tab_default_5">*/
/*                                 <a data-placement="top" data-toggle="modal" data-target="#new_fichier" class="btn pc_btn">ajouter un document</a>*/
/*                                 <table class="records_list table table-bordred table-striped">*/
/*                                     <thead>*/
/*                                         <tr>*/
/*                                              <th><input type="checkbox" id="checkall" /></th>*/
/*                                             <th>Id</th>*/
/*                                             <th>Intitule</th>*/
/*                                             <th>Date d'ajout</th>*/
/*                                             <th>Actions</th>*/
/*                                         </tr>*/
/*                                     </thead>*/
/*                                     <tbody>*/
/*                                     {% for fichier in fichiers %}*/
/*                                         <tr>*/
/*                                             <td><input type="checkbox" class="checkthis" /></td>*/
/*                                             <td><a href="{{ path('fichier_show', { 'id': fichier.id }) }}">{{ fichier.id }}</a></td>*/
/*                                             <td><a href="{{ path('fichier_show', { 'id': fichier.id }) }}">{{ fichier.nom }}</a></td>*/
/*                                             <td>{% if fichier.dateDeCreation %}{{ fichier.dateDeCreation|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                                             <td>*/
/*                                                 <a  data-placement="top" data-toggle="tooltip" title="Télécharger fichier" class="btn btn-primary btn-xs" href="{{ path('fiche_download', { 'filename': fichier.nom }) }}" ><span class="glyphicon glyphicon-download"></span></a>*/
/*                                                 <a data-placement="top" data-toggle="tooltip" title="voir fichier" class="btn btn-primary btn-xs" href="{{ path('fichier_show', { 'id': fichier.id }) }}" ><span class="glyphicon glyphicon-eye-open"></span></a>*/
/*                                             </td>    */
/*                                         </tr>*/
/*                                     {% endfor %}*/
/*                                     </tbody>*/
/*                                 </table>*/
/*                             </div>*/
/*                             {% block more_content %}*/
/*                             {% endblock %}        */
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* 	</div>*/
/*     </div>*/
/*     */
/*     {% block modals %}*/
/*         <div class="modal fade" style="top:25%;outline: none;" id="delete" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">*/
/*         <div class="modal-dialog" style="width:50%;">*/
/*             <div class="modal-content">*/
/*                 <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>*/
/*                     <h4 class="modal-title custom_align" id="Heading">Suppression fiche</h4>*/
/*                 </div>*/
/*                 <div class="modal-body">*/
/*                        {{form(delete_form)}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="modal fade" style="top:25%;outline: none;" id="new_avenant" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">*/
/*         <div class="modal-dialog" style="width:50%;">*/
/*             <div class="modal-content">*/
/*                 <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>*/
/*                     <h4 class="modal-title custom_align" id="Heading">Création avenant</h4>*/
/*                 </div>*/
/*                 <div class="modal-body">*/
/*                     {{ form_start(avenant_form, {'attr': {'class': 'form-horizontal'}}) }}*/
/*                     {{ form_errors(avenant_form) }}*/
/*                     <div class="form-group">*/
/*                         {{ form_label(avenant_form.typePartenaire, "Type de partenaire", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*                         {{ form_errors(avenant_form.typePartenaire) }}*/
/*                         <div class="col-sm-4">*/
/*                             {{ form_widget(avenant_form.typePartenaire, {'attr': {'class': ''}})}}*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         {{ form_label(avenant_form.motif, "Motif de l'avenant", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*                         {{ form_errors(avenant_form.motif) }}*/
/*                         <div class="col-sm-4">*/
/*                             {{ form_widget(avenant_form.motif, {'attr': {'class': ''}})}}*/
/*                         </div>*/
/*                     </div>*/
/*                         */
/*                     <div class="form-group">*/
/*                         {{ form_label(avenant_form.objet, "Objet de l'avenant", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*                         {{ form_errors(avenant_form.objet) }}*/
/*                         <div class="col-sm-4">*/
/*                             {{ form_widget(avenant_form.objet, {'attr': {'class': 'determinant'}})}}*/
/*                             <button type="button" class="btn pc_btn" onclick="determiner()">Confirmer objet</button>*/
/*                         </div>*/
/*                     </div>*/
/*                     */
/*                     <div id="modifier" class="hidden">*/
/*                     <div class="form-group">*/
/*                         {{ form_label(avenant_form.numeroParagrapheModifie, "Numéro du paragraphe modifié", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*                         {{ form_errors(avenant_form.numeroParagrapheModifie) }}*/
/*                         <div class="col-sm-4">*/
/*                             {{ form_widget(avenant_form.numeroParagrapheModifie, {'attr': {'class': ''}})}}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         {{ form_label(avenant_form.numeroArticleModifie, "Numéro de l'article modifié", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*                         {{ form_errors(avenant_form.numeroArticleModifie) }}*/
/*                         <div class="col-sm-4">*/
/*                             {{ form_widget(avenant_form.numeroArticleModifie, {'attr': {'class': ''}})}}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         {{ form_label(avenant_form.intituleArticleModifie, "Intitulé de l'article modifié", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*                         {{ form_errors(avenant_form.intituleArticleModifie) }}*/
/*                         <div class="col-sm-4">*/
/*                             {{ form_widget(avenant_form.intituleArticleModifie, {'attr': {'class': ''}})}}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         {{ form_label(avenant_form.nouveauTexte, "Nouveau texte", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*                         {{ form_errors(avenant_form.nouveauTexte) }}*/
/*                         <div class="col-sm-4">*/
/*                             {{ form_widget(avenant_form.nouveauTexte, {'attr': {'class': ''}})}}*/
/*                         </div>*/
/*                     </div>*/
/*                     </div>*/
/*                     <div id="proroger" class="hidden">*/
/*                     <div class="form-group">*/
/*                         {{ form_label(avenant_form.numeroArticleDuree, "Numéro de l'article Durée", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*                         {{ form_errors(avenant_form.numeroArticleDuree) }}*/
/*                         <div class="col-sm-4">*/
/*                             {{ form_widget(avenant_form.numeroArticleDuree, {'attr': {'class': ''}})}}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         {{ form_label(avenant_form.intituleArticleDuree, "Intitulé de l'article Durée", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*                         {{ form_errors(avenant_form.intituleArticleDuree) }}*/
/*                         <div class="col-sm-4">*/
/*                             {{ form_widget(avenant_form.intituleArticleDuree, {'attr': {'class': ''}})}}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         {{ form_label(avenant_form.nbMoisProrogation, "Nombre de mois de prorogation", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*                         {{ form_errors(avenant_form.nbMoisProrogation) }}*/
/*                         <div class="col-sm-4">*/
/*                             {{ form_widget(avenant_form.nbMoisProrogation, {'attr': {'class': ''}})}}*/
/*                         </div>*/
/*                     </div>*/
/*                     </div>*/
/*                     {{ form_rest(avenant_form) }}*/
/*                     {{ form_end(avenant_form) }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*                 */
/*     <div class="modal fade" style="top:25%;outline: none;  " id="new_alerte" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">*/
/*         <div class="modal-dialog" style="width:50%;">*/
/*             <div class="modal-content">*/
/*                 <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>*/
/*                     <h4 class="modal-title custom_align" id="Heading">Création alerte</h4>*/
/*                 </div>*/
/*                 <div class="modal-body"> */
/*                     {{ form_start(alert_form, {'attr': {'class': 'form-horizontal'}}) }}*/
/*                     {{ form_errors(alert_form) }}*/
/*                    <div class="form-group">*/
/*                         {{ form_label(alert_form.intitule, "Intitulé", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*                         {{ form_errors(alert_form.intitule) }}*/
/*                         <div class="col-sm-4">*/
/*                             {{ form_widget(alert_form.intitule, {'attr': {'class': ''}})}}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         {{ form_label(alert_form.objet, "Objet de l'alerte", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*                         {{ form_errors(alert_form.objet) }}*/
/*                         <div class="col-sm-4">*/
/*                             {{ form_widget(alert_form.objet, {'attr': {'class': ''}})}}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         {{ form_label(alert_form.dateAlerte, "Date d'écheance", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*                         {{ form_errors(alert_form.dateAlerte) }}*/
/*                         <div class="col-sm-4">*/
/*                             {{ form_widget(alert_form.dateAlerte, {'attr': {'class': ''}})}}*/
/*                         </div>*/
/*                     </div>*/
/*                     {{ form_rest(alert_form) }}*/
/*                     {{ form_end(alert_form) }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*                 */
/*     <div class="modal fade" style="top:25%;outline: none;" id="new_fichier" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">*/
/*         <div class="modal-dialog">*/
/*             <div class="modal-content">*/
/*                 <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>*/
/*                     <h4 class="modal-title custom_align" id="Heading">Ajout fichier</h4>*/
/*                 </div>*/
/*                 <div class="modal-body">*/
/*                     {{ form_start(fichier_form, {'attr': {'class': 'form-horizontal'}}) }}*/
/*                     {{ form_errors(fichier_form) }}*/
/*                     {{ form_rest(fichier_form) }}*/
/*                     {{ form_end(fichier_form) }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div> */
/* */
/*     <div class="modal fade" style="top:25%;outline: none;" id="delete" aria-labelledby="delete" aria-hidden="true">*/
/*         <div class="modal-dialog">*/
/*             <div class="modal-content">*/
/*                 <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>*/
/*                     <h4 class="modal-title custom_align" id="Heading">Suppression</h4>*/
/*                 </div>*/
/*                 <div class="modal-body">*/
/*                     {{form(delete_form)}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div> */
/*     {% endblock %}*/
/*     */
/*     */
/*     <script  type="text/javascript">*/
/*     function determiner(){*/
/*         var x = document.getElementById("pc_fichebundle_avenant_objet").selectedIndex;*/
/*         var y = document.getElementById("pc_fichebundle_avenant_objet").options;*/
/*         var choix = y[x].value;*/
/*         alert(y[x].value);*/
/*         if (choix === 'modifier'){*/
/*             $('#modifier').removeClass('hidden');*/
/*             $('#modifier').show();*/
/*             $('#proroger').hide();*/
/*             $('#proroger').addClass('hidden');*/
/*         }*/
/*         if (choix === 'proroger'){*/
/*             $('#proroger').removeClass('hidden');*/
/*             $('#proroger').show();*/
/*             $('#modifier').hide();*/
/*             $('#modifier').addClass('hidden');*/
/*         }*/
/*         if (choix === 'proroger et modifier'){*/
/*             $('#modifier').removeClass('hidden');*/
/*             $('#modifier').show();*/
/*             $('#proroger').removeClass('hidden');*/
/*             $('#proroger').show();*/
/*         }*/
/*     }*/
/* </script>*/
/* {% endblock %}*/
/* */
