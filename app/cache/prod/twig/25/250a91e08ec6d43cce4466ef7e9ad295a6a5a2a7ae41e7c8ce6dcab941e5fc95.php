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
        $__internal_f2852725a9072bd418761aa16fdc7ccb41e6a4c7b156a77ac5a72c4de5d368f5 = $this->env->getExtension("native_profiler");
        $__internal_f2852725a9072bd418761aa16fdc7ccb41e6a4c7b156a77ac5a72c4de5d368f5->enter($__internal_f2852725a9072bd418761aa16fdc7ccb41e6a4c7b156a77ac5a72c4de5d368f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PCFicheBundle::showLayout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2852725a9072bd418761aa16fdc7ccb41e6a4c7b156a77ac5a72c4de5d368f5->leave($__internal_f2852725a9072bd418761aa16fdc7ccb41e6a4c7b156a77ac5a72c4de5d368f5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dbac33db74e355c273fdfeffbe536f813f8b7e5bb3eedd6e404cf52bc32b1f43 = $this->env->getExtension("native_profiler");
        $__internal_dbac33db74e355c273fdfeffbe536f813f8b7e5bb3eedd6e404cf52bc32b1f43->enter($__internal_dbac33db74e355c273fdfeffbe536f813f8b7e5bb3eedd6e404cf52bc32b1f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                                            <td><a href=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("alerte_show", array("id" => $this->getAttribute($context["alerte"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["alerte"], "id", array()), "html", null, true);
            echo "</a></td>
                                            <td><a href=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("alerte_show", array("id" => $this->getAttribute($context["alerte"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["alerte"], "intitule", array()), "html", null, true);
            echo "</a></td>
                                            <td>";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["alerte"], "objet", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 104
            if ($this->getAttribute($context["alerte"], "dateAlerte", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["alerte"], "dateAlerte", array()), "d-m-Y H:i"), "html", null, true);
            }
            echo "</td>
                                            <td>
                                                <a  data-placement=\"top\" data-toggle=\"tooltip\" title=\"Voir fiche\" class=\"btn btn-primary btn-xs\" href=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("alerte_show", array("id" => $this->getAttribute($context["alerte"], "id", array()))), "html", null, true);
            echo "\" ><span class=\"glyphicon glyphicon-eye-open\"></span></a>
                                            </td>    
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alerte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
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
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fichiers"]) ? $context["fichiers"] : $this->getContext($context, "fichiers")));
        foreach ($context['_seq'] as $context["_key"] => $context["fichier"]) {
            // line 127
            echo "                                        <tr>
                                            <td><input type=\"checkbox\" class=\"checkthis\" /></td>
                                            <td><a href=\"";
            // line 129
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fichier_show", array("id" => $this->getAttribute($context["fichier"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "id", array()), "html", null, true);
            echo "</a></td>
                                            <td><a href=\"";
            // line 130
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fichier_show", array("id" => $this->getAttribute($context["fichier"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["fichier"], "nom", array()), "html", null, true);
            echo "</a></td>
                                            <td>";
            // line 131
            if ($this->getAttribute($context["fichier"], "dateDeCreation", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["fichier"], "dateDeCreation", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                                            <td>
                                                <a  data-placement=\"top\" data-toggle=\"tooltip\" title=\"Télécharger fichier\" class=\"btn btn-primary btn-xs\" href=\"";
            // line 133
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fiche_download", array("filename" => $this->getAttribute($context["fichier"], "nom", array()))), "html", null, true);
            echo "\" ><span class=\"glyphicon glyphicon-download\"></span></a>
                                                <a data-placement=\"top\" data-toggle=\"tooltip\" title=\"voir fichier\" class=\"btn btn-primary btn-xs\" href=\"";
            // line 134
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fichier_show", array("id" => $this->getAttribute($context["fichier"], "id", array()))), "html", null, true);
            echo "\" ><span class=\"glyphicon glyphicon-eye-open\"></span></a>
                                            </td>    
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fichier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "                                    </tbody>
                                </table>
                            </div>
                            ";
        // line 141
        $this->displayBlock('more_content', $context, $blocks);
        // line 142
        echo "        
                        </div>
                    </div>
                </div>
            </div>
\t</div>
    </div>
    
    ";
        // line 150
        $this->displayBlock('modals', $context, $blocks);
        // line 328
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
        
        $__internal_dbac33db74e355c273fdfeffbe536f813f8b7e5bb3eedd6e404cf52bc32b1f43->leave($__internal_dbac33db74e355c273fdfeffbe536f813f8b7e5bb3eedd6e404cf52bc32b1f43_prof);

    }

    // line 8
    public function block_barre($context, array $blocks = array())
    {
        $__internal_903c646af9a51ea10da25fbb3c7502567c5bcd4be9fff3076b267991916acdd8 = $this->env->getExtension("native_profiler");
        $__internal_903c646af9a51ea10da25fbb3c7502567c5bcd4be9fff3076b267991916acdd8->enter($__internal_903c646af9a51ea10da25fbb3c7502567c5bcd4be9fff3076b267991916acdd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "barre"));

        // line 9
        echo "                    ";
        
        $__internal_903c646af9a51ea10da25fbb3c7502567c5bcd4be9fff3076b267991916acdd8->leave($__internal_903c646af9a51ea10da25fbb3c7502567c5bcd4be9fff3076b267991916acdd8_prof);

    }

    // line 17
    public function block_tabs($context, array $blocks = array())
    {
        $__internal_d75f18b36e75149abfea49ac8c1cec68fb58542260ad31faf6297dea24875eb8 = $this->env->getExtension("native_profiler");
        $__internal_d75f18b36e75149abfea49ac8c1cec68fb58542260ad31faf6297dea24875eb8->enter($__internal_d75f18b36e75149abfea49ac8c1cec68fb58542260ad31faf6297dea24875eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tabs"));

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
        
        $__internal_d75f18b36e75149abfea49ac8c1cec68fb58542260ad31faf6297dea24875eb8->leave($__internal_d75f18b36e75149abfea49ac8c1cec68fb58542260ad31faf6297dea24875eb8_prof);

    }

    // line 36
    public function block_content($context, array $blocks = array())
    {
        $__internal_f3e190f7be155815639f41987f03419ac0d26ed671dfe44905a497a62ca8e384 = $this->env->getExtension("native_profiler");
        $__internal_f3e190f7be155815639f41987f03419ac0d26ed671dfe44905a497a62ca8e384->enter($__internal_f3e190f7be155815639f41987f03419ac0d26ed671dfe44905a497a62ca8e384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 37
        echo "                                ";
        
        $__internal_f3e190f7be155815639f41987f03419ac0d26ed671dfe44905a497a62ca8e384->leave($__internal_f3e190f7be155815639f41987f03419ac0d26ed671dfe44905a497a62ca8e384_prof);

    }

    // line 141
    public function block_more_content($context, array $blocks = array())
    {
        $__internal_d5e95ebd4f185e0fdd99b137cb55a35463dcf6e589f84d04ee9ed08c7db83493 = $this->env->getExtension("native_profiler");
        $__internal_d5e95ebd4f185e0fdd99b137cb55a35463dcf6e589f84d04ee9ed08c7db83493->enter($__internal_d5e95ebd4f185e0fdd99b137cb55a35463dcf6e589f84d04ee9ed08c7db83493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "more_content"));

        // line 142
        echo "                            ";
        
        $__internal_d5e95ebd4f185e0fdd99b137cb55a35463dcf6e589f84d04ee9ed08c7db83493->leave($__internal_d5e95ebd4f185e0fdd99b137cb55a35463dcf6e589f84d04ee9ed08c7db83493_prof);

    }

    // line 150
    public function block_modals($context, array $blocks = array())
    {
        $__internal_c3ce29351616df194275c4678983b7f93ab42fbab99c0325755179af8ee488c8 = $this->env->getExtension("native_profiler");
        $__internal_c3ce29351616df194275c4678983b7f93ab42fbab99c0325755179af8ee488c8->enter($__internal_c3ce29351616df194275c4678983b7f93ab42fbab99c0325755179af8ee488c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modals"));

        // line 151
        echo "        <div class=\"modal fade\" style=\"top:25%;outline: none;\" id=\"delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"delete\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" style=\"width:50%;\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></button>
                    <h4 class=\"modal-title custom_align\" id=\"Heading\">Suppression fiche</h4>
                </div>
                <div class=\"modal-body\">
                       ";
        // line 159
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
        // line 172
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
                    ";
        // line 173
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), 'errors');
        echo "
                    <div class=\"form-group\">
                        ";
        // line 175
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "typePartenaire", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Type de partenaire"));
        echo "
                        ";
        // line 176
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "typePartenaire", array()), 'errors');
        echo "
                        <div class=\"col-sm-4\">
                            ";
        // line 178
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "typePartenaire", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        </div>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 183
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "motif", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Motif de l'avenant"));
        echo "
                        ";
        // line 184
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "motif", array()), 'errors');
        echo "
                        <div class=\"col-sm-4\">
                            ";
        // line 186
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "motif", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        </div>
                    </div>
                        
                    <div class=\"form-group\">
                        ";
        // line 191
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "objet", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Objet de l'avenant"));
        echo "
                        ";
        // line 192
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "objet", array()), 'errors');
        echo "
                        <div class=\"col-sm-4\">
                            ";
        // line 194
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "objet", array()), 'widget', array("attr" => array("class" => "determinant")));
        echo "
                            <button type=\"button\" class=\"btn pc_btn\" onclick=\"determiner()\">Confirmer objet</button>
                        </div>
                    </div>
                    
                    <div id=\"modifier\" class=\"hidden\">
                    <div class=\"form-group\">
                        ";
        // line 201
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "numeroParagrapheModifie", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Numéro du paragraphe modifié"));
        echo "
                        ";
        // line 202
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "numeroParagrapheModifie", array()), 'errors');
        echo "
                        <div class=\"col-sm-4\">
                            ";
        // line 204
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "numeroParagrapheModifie", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 208
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "numeroArticleModifie", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Numéro de l'article modifié"));
        echo "
                        ";
        // line 209
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "numeroArticleModifie", array()), 'errors');
        echo "
                        <div class=\"col-sm-4\">
                            ";
        // line 211
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "numeroArticleModifie", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 215
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "intituleArticleModifie", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Intitulé de l'article modifié"));
        echo "
                        ";
        // line 216
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "intituleArticleModifie", array()), 'errors');
        echo "
                        <div class=\"col-sm-4\">
                            ";
        // line 218
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "intituleArticleModifie", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 222
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "nouveauTexte", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Nouveau texte"));
        echo "
                        ";
        // line 223
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "nouveauTexte", array()), 'errors');
        echo "
                        <div class=\"col-sm-4\">
                            ";
        // line 225
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "nouveauTexte", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        </div>
                    </div>
                    </div>
                    <div id=\"proroger\" class=\"hidden\">
                    <div class=\"form-group\">
                        ";
        // line 231
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "numeroArticleDuree", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Numéro de l'article Durée"));
        echo "
                        ";
        // line 232
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "numeroArticleDuree", array()), 'errors');
        echo "
                        <div class=\"col-sm-4\">
                            ";
        // line 234
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "numeroArticleDuree", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 238
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "intituleArticleDuree", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Intitulé de l'article Durée"));
        echo "
                        ";
        // line 239
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "intituleArticleDuree", array()), 'errors');
        echo "
                        <div class=\"col-sm-4\">
                            ";
        // line 241
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "intituleArticleDuree", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 245
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "nbMoisProrogation", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Nombre de mois de prorogation"));
        echo "
                        ";
        // line 246
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "nbMoisProrogation", array()), 'errors');
        echo "
                        <div class=\"col-sm-4\">
                            ";
        // line 248
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), "nbMoisProrogation", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        </div>
                    </div>
                    </div>
                    ";
        // line 252
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["avenant_form"]) ? $context["avenant_form"] : $this->getContext($context, "avenant_form")), 'rest');
        echo "
                    ";
        // line 253
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
        // line 267
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["alert_form"]) ? $context["alert_form"] : $this->getContext($context, "alert_form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
                    ";
        // line 268
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["alert_form"]) ? $context["alert_form"] : $this->getContext($context, "alert_form")), 'errors');
        echo "
                   <div class=\"form-group\">
                        ";
        // line 270
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["alert_form"]) ? $context["alert_form"] : $this->getContext($context, "alert_form")), "intitule", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Intitulé"));
        echo "
                        ";
        // line 271
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["alert_form"]) ? $context["alert_form"] : $this->getContext($context, "alert_form")), "intitule", array()), 'errors');
        echo "
                        <div class=\"col-sm-4\">
                            ";
        // line 273
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["alert_form"]) ? $context["alert_form"] : $this->getContext($context, "alert_form")), "intitule", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 277
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["alert_form"]) ? $context["alert_form"] : $this->getContext($context, "alert_form")), "objet", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Objet de l'alerte"));
        echo "
                        ";
        // line 278
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["alert_form"]) ? $context["alert_form"] : $this->getContext($context, "alert_form")), "objet", array()), 'errors');
        echo "
                        <div class=\"col-sm-4\">
                            ";
        // line 280
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["alert_form"]) ? $context["alert_form"] : $this->getContext($context, "alert_form")), "objet", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 284
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["alert_form"]) ? $context["alert_form"] : $this->getContext($context, "alert_form")), "dateAlerte", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Date d'écheance"));
        echo "
                        ";
        // line 285
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["alert_form"]) ? $context["alert_form"] : $this->getContext($context, "alert_form")), "dateAlerte", array()), 'errors');
        echo "
                        <div class=\"col-sm-4\">
                            ";
        // line 287
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["alert_form"]) ? $context["alert_form"] : $this->getContext($context, "alert_form")), "dateAlerte", array()), 'widget', array("attr" => array("class" => "")));
        echo "
                        </div>
                    </div>
                    ";
        // line 290
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["alert_form"]) ? $context["alert_form"] : $this->getContext($context, "alert_form")), 'rest');
        echo "
                    ";
        // line 291
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
        // line 305
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["fichier_form"]) ? $context["fichier_form"] : $this->getContext($context, "fichier_form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
                    ";
        // line 306
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["fichier_form"]) ? $context["fichier_form"] : $this->getContext($context, "fichier_form")), 'errors');
        echo "
                    ";
        // line 307
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["fichier_form"]) ? $context["fichier_form"] : $this->getContext($context, "fichier_form")), 'rest');
        echo "
                    ";
        // line 308
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
        // line 322
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
                </div>
            </div>
        </div>
    </div> 
    ";
        
        $__internal_c3ce29351616df194275c4678983b7f93ab42fbab99c0325755179af8ee488c8->leave($__internal_c3ce29351616df194275c4678983b7f93ab42fbab99c0325755179af8ee488c8_prof);

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
        return array (  767 => 322,  750 => 308,  746 => 307,  742 => 306,  738 => 305,  721 => 291,  717 => 290,  711 => 287,  706 => 285,  702 => 284,  695 => 280,  690 => 278,  686 => 277,  679 => 273,  674 => 271,  670 => 270,  665 => 268,  661 => 267,  644 => 253,  640 => 252,  633 => 248,  628 => 246,  624 => 245,  617 => 241,  612 => 239,  608 => 238,  601 => 234,  596 => 232,  592 => 231,  583 => 225,  578 => 223,  574 => 222,  567 => 218,  562 => 216,  558 => 215,  551 => 211,  546 => 209,  542 => 208,  535 => 204,  530 => 202,  526 => 201,  516 => 194,  511 => 192,  507 => 191,  499 => 186,  494 => 184,  490 => 183,  482 => 178,  477 => 176,  473 => 175,  468 => 173,  464 => 172,  448 => 159,  438 => 151,  432 => 150,  425 => 142,  419 => 141,  412 => 37,  406 => 36,  390 => 24,  382 => 18,  376 => 17,  369 => 9,  363 => 8,  328 => 328,  326 => 150,  316 => 142,  314 => 141,  309 => 138,  299 => 134,  295 => 133,  288 => 131,  282 => 130,  276 => 129,  272 => 127,  268 => 126,  250 => 110,  240 => 106,  233 => 104,  229 => 103,  223 => 102,  217 => 101,  214 => 100,  210 => 99,  191 => 82,  181 => 78,  177 => 77,  172 => 75,  166 => 74,  160 => 73,  156 => 71,  152 => 70,  133 => 55,  122 => 52,  118 => 51,  115 => 50,  111 => 49,  104 => 46,  93 => 43,  89 => 42,  86 => 41,  82 => 40,  78 => 38,  76 => 36,  71 => 33,  69 => 17,  58 => 13,  53 => 10,  51 => 8,  45 => 4,  39 => 3,  11 => 1,);
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
/*                                             <td><a href="{{ path('alerte_show', { 'id': alerte.id }) }}">{{ alerte.id }}</a></td>*/
/*                                             <td><a href="{{ path('alerte_show', { 'id': alerte.id }) }}">{{ alerte.intitule }}</a></td>*/
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
