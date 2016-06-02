<?php

/* SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_08761bb94e0f231266a3966317faa11ad16c38ea5fb690d00b5ba567da7ac405 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Form:form_admin_fields.html.twig", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig", 12);
        $this->blocks = array(
            'sonata_admin_orm_one_to_one_widget' => array($this, 'block_sonata_admin_orm_one_to_one_widget'),
            'sonata_admin_orm_many_to_many_widget' => array($this, 'block_sonata_admin_orm_many_to_many_widget'),
            'sonata_admin_orm_many_to_one_widget' => array($this, 'block_sonata_admin_orm_many_to_one_widget'),
            'sonata_admin_orm_one_to_many_widget' => array($this, 'block_sonata_admin_orm_one_to_many_widget'),
            'sonata_type_model_widget' => array($this, 'block_sonata_type_model_widget'),
            'sonata_type_model_list_widget' => array($this, 'block_sonata_type_model_list_widget'),
            'sonata_type_admin_widget' => array($this, 'block_sonata_type_admin_widget'),
            'sonata_type_collection_widget' => array($this, 'block_sonata_type_collection_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Form:form_admin_fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bcf601b777eee5907a4a292a11eeb54821c40fdf37c9fc2756a0c1ffdd2537fd = $this->env->getExtension("native_profiler");
        $__internal_bcf601b777eee5907a4a292a11eeb54821c40fdf37c9fc2756a0c1ffdd2537fd->enter($__internal_bcf601b777eee5907a4a292a11eeb54821c40fdf37c9fc2756a0c1ffdd2537fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcf601b777eee5907a4a292a11eeb54821c40fdf37c9fc2756a0c1ffdd2537fd->leave($__internal_bcf601b777eee5907a4a292a11eeb54821c40fdf37c9fc2756a0c1ffdd2537fd_prof);

    }

    // line 16
    public function block_sonata_admin_orm_one_to_one_widget($context, array $blocks = array())
    {
        $__internal_d4e379033647498ec8b73a16e74ccc9f2c6dbfc473c0293f8d6de208a7cf1b5e = $this->env->getExtension("native_profiler");
        $__internal_d4e379033647498ec8b73a16e74ccc9f2c6dbfc473c0293f8d6de208a7cf1b5e->enter($__internal_d4e379033647498ec8b73a16e74ccc9f2c6dbfc473c0293f8d6de208a7cf1b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_orm_one_to_one_widget"));

        // line 17
        echo "    ";
        $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_one.html.twig", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig", 17)->display($context);
        
        $__internal_d4e379033647498ec8b73a16e74ccc9f2c6dbfc473c0293f8d6de208a7cf1b5e->leave($__internal_d4e379033647498ec8b73a16e74ccc9f2c6dbfc473c0293f8d6de208a7cf1b5e_prof);

    }

    // line 20
    public function block_sonata_admin_orm_many_to_many_widget($context, array $blocks = array())
    {
        $__internal_f1a4216e38a454bb9ce35a48344f547e8328d79149071ae5db52b49ea0eb04fc = $this->env->getExtension("native_profiler");
        $__internal_f1a4216e38a454bb9ce35a48344f547e8328d79149071ae5db52b49ea0eb04fc->enter($__internal_f1a4216e38a454bb9ce35a48344f547e8328d79149071ae5db52b49ea0eb04fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_orm_many_to_many_widget"));

        // line 21
        echo "    ";
        $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_many.html.twig", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig", 21)->display($context);
        
        $__internal_f1a4216e38a454bb9ce35a48344f547e8328d79149071ae5db52b49ea0eb04fc->leave($__internal_f1a4216e38a454bb9ce35a48344f547e8328d79149071ae5db52b49ea0eb04fc_prof);

    }

    // line 24
    public function block_sonata_admin_orm_many_to_one_widget($context, array $blocks = array())
    {
        $__internal_d59e3d3548d5401213bf124595393e9f81cf29a22a95ed74124a54ccacf386f7 = $this->env->getExtension("native_profiler");
        $__internal_d59e3d3548d5401213bf124595393e9f81cf29a22a95ed74124a54ccacf386f7->enter($__internal_d59e3d3548d5401213bf124595393e9f81cf29a22a95ed74124a54ccacf386f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_orm_many_to_one_widget"));

        // line 25
        echo "    ";
        $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_one.html.twig", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig", 25)->display($context);
        
        $__internal_d59e3d3548d5401213bf124595393e9f81cf29a22a95ed74124a54ccacf386f7->leave($__internal_d59e3d3548d5401213bf124595393e9f81cf29a22a95ed74124a54ccacf386f7_prof);

    }

    // line 28
    public function block_sonata_admin_orm_one_to_many_widget($context, array $blocks = array())
    {
        $__internal_9c7a47aaf81a5c272a79da72c7fbe7c2b7b4008c468c574d8ba987609b1c53dc = $this->env->getExtension("native_profiler");
        $__internal_9c7a47aaf81a5c272a79da72c7fbe7c2b7b4008c468c574d8ba987609b1c53dc->enter($__internal_9c7a47aaf81a5c272a79da72c7fbe7c2b7b4008c468c574d8ba987609b1c53dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_orm_one_to_many_widget"));

        // line 29
        echo "    ";
        $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig", 29)->display($context);
        
        $__internal_9c7a47aaf81a5c272a79da72c7fbe7c2b7b4008c468c574d8ba987609b1c53dc->leave($__internal_9c7a47aaf81a5c272a79da72c7fbe7c2b7b4008c468c574d8ba987609b1c53dc_prof);

    }

    // line 32
    public function block_sonata_type_model_widget($context, array $blocks = array())
    {
        $__internal_0deefc824f96495abd107f081a57702e5185861d84b4e373fae7ddf0efb73fc7 = $this->env->getExtension("native_profiler");
        $__internal_0deefc824f96495abd107f081a57702e5185861d84b4e373fae7ddf0efb73fc7->enter($__internal_0deefc824f96495abd107f081a57702e5185861d84b4e373fae7ddf0efb73fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_widget"));

        // line 33
        echo "    ";
        // line 37
        echo "
    ";
        // line 39
        echo "
    ";
        // line 40
        if (twig_test_empty($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()))) {
            // line 41
            echo "        ";
            $this->displayBlock("choice_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 42
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_ONE"))) {
            // line 43
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 44
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_ONE"))) {
            // line 45
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 46
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_MANY"))) {
            // line 47
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_many_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 48
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_MANY"))) {
            // line 49
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 51
            echo "        ";
            // line 52
            echo "        ";
            $this->displayBlock("choice_widget", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_0deefc824f96495abd107f081a57702e5185861d84b4e373fae7ddf0efb73fc7->leave($__internal_0deefc824f96495abd107f081a57702e5185861d84b4e373fae7ddf0efb73fc7_prof);

    }

    // line 56
    public function block_sonata_type_model_list_widget($context, array $blocks = array())
    {
        $__internal_6b04a8af0cfeaf936a1dc4ce92161f9e0c8e06fd1c2652240e0e4a17aee9784c = $this->env->getExtension("native_profiler");
        $__internal_6b04a8af0cfeaf936a1dc4ce92161f9e0c8e06fd1c2652240e0e4a17aee9784c->enter($__internal_6b04a8af0cfeaf936a1dc4ce92161f9e0c8e06fd1c2652240e0e4a17aee9784c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_list_widget"));

        // line 57
        echo "    <div id=\"field_container_";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"field-container\">
        <span id=\"field_actions_";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"field-actions\">
            <span id=\"field_widget_";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"field-short-description\">
                ";
        // line 60
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "id", array(0 => $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "value", array())), "method")) {
            // line 61
            echo "                    ";
            echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("sonata_admin_short_object_information", array("code" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 62
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "code", array()), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 63
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "id", array(0 => $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "value", array())), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 64
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "uniqid", array()), "linkParameters" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 65
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "options", array()), "link_parameters", array()))), array());
            // line 67
            echo "                ";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "placeholder", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "options", array()), "placeholder", array()))) {
            // line 68
            echo "                    <span class=\"inner-field-short-description\">
                        ";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "options", array()), "placeholder", array()), array(), "SonataAdminBundle"), "html", null, true);
            echo "
                    </span>
                ";
        }
        // line 72
        echo "            </span>

            <span class=\"btn-group\">
                ";
        // line 75
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "isGranted", array(0 => "LIST"), "method")) && (isset($context["btn_list"]) ? $context["btn_list"] : $this->getContext($context, "btn_list")))) {
            // line 76
            echo "                    <a  href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\"
                        onclick=\"return start_field_dialog_form_list_";
            // line 77
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "(this);\"
                        class=\"btn btn-info btn-sm btn-outline sonata-ba-action\"
                        title=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_list"]) ? $context["btn_list"] : $this->getContext($context, "btn_list")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "\"
                            >
                        <i class=\"fa fa-list\"></i>
                        ";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_list"]) ? $context["btn_list"] : $this->getContext($context, "btn_list")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 85
        echo "
                ";
        // line 86
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "isGranted", array(0 => "CREATE"), "method")) && (isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")))) {
            // line 87
            echo "                    <a  href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "generateUrl", array(0 => "create"), "method"), "html", null, true);
            echo "\"
                        onclick=\"return start_field_dialog_form_add_";
            // line 88
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "(this);\"
                        class=\"btn btn-success btn-sm btn-outline sonata-ba-action\"
                        title=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "\"
                            >
                        <i class=\"fa fa-plus-circle\"></i>
                        ";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 96
        echo "            </span>

            <span class=\"btn-group\">
                ";
        // line 99
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "hasRoute", array(0 => "delete"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "isGranted", array(0 => "DELETE"), "method")) && (isset($context["btn_delete"]) ? $context["btn_delete"] : $this->getContext($context, "btn_delete")))) {
            // line 100
            echo "                    <a  href=\"\"
                        onclick=\"return remove_selected_element_";
            // line 101
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "(this);\"
                        class=\"btn btn-danger btn-sm btn-outline sonata-ba-action\"
                        title=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_delete"]) ? $context["btn_delete"] : $this->getContext($context, "btn_delete")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "\"
                            >
                        <i class=\"fa fa-minus-circle\"></i>
                        ";
            // line 106
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_delete"]) ? $context["btn_delete"] : $this->getContext($context, "btn_delete")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 109
        echo "            </span>
        </span>

        <span style=\"display: none\" >
            ";
        // line 114
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', array("required" => false));
        echo "
        </span>

        <div class=\"modal fade\" id=\"field_dialog_";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-lg\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\"></h4>
                    </div>
                    <div class=\"modal-body\">
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 131
        $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig", 131)->display($context);
        
        $__internal_6b04a8af0cfeaf936a1dc4ce92161f9e0c8e06fd1c2652240e0e4a17aee9784c->leave($__internal_6b04a8af0cfeaf936a1dc4ce92161f9e0c8e06fd1c2652240e0e4a17aee9784c_prof);

    }

    // line 134
    public function block_sonata_type_admin_widget($context, array $blocks = array())
    {
        $__internal_a825086b79dab63385648cc7a37a3301ef87ec5eef32a5aee8e81ae22ed06004 = $this->env->getExtension("native_profiler");
        $__internal_a825086b79dab63385648cc7a37a3301ef87ec5eef32a5aee8e81ae22ed06004->enter($__internal_a825086b79dab63385648cc7a37a3301ef87ec5eef32a5aee8e81ae22ed06004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_admin_widget"));

        // line 135
        echo "    ";
        // line 136
        echo "    ";
        if (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_ONE"))) {
            // line 137
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 138
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_ONE"))) {
            // line 139
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 140
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_MANY"))) {
            // line 141
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_many_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 142
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_MANY"))) {
            // line 143
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 145
            echo "        INVALID MODE : ";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_a825086b79dab63385648cc7a37a3301ef87ec5eef32a5aee8e81ae22ed06004->leave($__internal_a825086b79dab63385648cc7a37a3301ef87ec5eef32a5aee8e81ae22ed06004_prof);

    }

    // line 149
    public function block_sonata_type_collection_widget($context, array $blocks = array())
    {
        $__internal_81ca63d043d54f1f287bc70c5f00ccdd6cb08c846df917c045aec81b3094cbea = $this->env->getExtension("native_profiler");
        $__internal_81ca63d043d54f1f287bc70c5f00ccdd6cb08c846df917c045aec81b3094cbea->enter($__internal_81ca63d043d54f1f287bc70c5f00ccdd6cb08c846df917c045aec81b3094cbea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_collection_widget"));

        // line 150
        echo "    ";
        if (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_MANY"))) {
            // line 151
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_many_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 152
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_MANY"))) {
            // line 153
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 155
            echo "        INVALID MODE : ";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo " - type : sonata_type_collection - mapping : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()), "html", null, true);
            echo "
    ";
        }
        
        $__internal_81ca63d043d54f1f287bc70c5f00ccdd6cb08c846df917c045aec81b3094cbea->leave($__internal_81ca63d043d54f1f287bc70c5f00ccdd6cb08c846df917c045aec81b3094cbea_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  391 => 155,  385 => 153,  383 => 152,  378 => 151,  375 => 150,  369 => 149,  358 => 145,  352 => 143,  350 => 142,  345 => 141,  343 => 140,  338 => 139,  336 => 138,  331 => 137,  328 => 136,  326 => 135,  320 => 134,  313 => 131,  296 => 117,  289 => 114,  283 => 109,  277 => 106,  271 => 103,  266 => 101,  263 => 100,  261 => 99,  256 => 96,  250 => 93,  244 => 90,  239 => 88,  234 => 87,  232 => 86,  229 => 85,  223 => 82,  217 => 79,  212 => 77,  207 => 76,  205 => 75,  200 => 72,  194 => 69,  191 => 68,  188 => 67,  186 => 65,  185 => 64,  184 => 63,  183 => 62,  181 => 61,  179 => 60,  175 => 59,  171 => 58,  166 => 57,  160 => 56,  149 => 52,  147 => 51,  141 => 49,  139 => 48,  134 => 47,  132 => 46,  127 => 45,  125 => 44,  120 => 43,  118 => 42,  113 => 41,  111 => 40,  108 => 39,  105 => 37,  103 => 33,  97 => 32,  89 => 29,  83 => 28,  75 => 25,  69 => 24,  61 => 21,  55 => 20,  47 => 17,  41 => 16,  11 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends 'SonataAdminBundle:Form:form_admin_fields.html.twig' %}*/
/* */
/* */
/* {# Custom Sonata Admin Extension #}*/
/* {% block sonata_admin_orm_one_to_one_widget %}*/
/*     {% include 'SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_one.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% block sonata_admin_orm_many_to_many_widget %}*/
/*     {% include 'SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_many.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% block sonata_admin_orm_many_to_one_widget %}*/
/*     {% include 'SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_one.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% block sonata_admin_orm_one_to_many_widget %}*/
/*     {% include 'SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% block sonata_type_model_widget %}*/
/*     {#*/
/*         This is not the best way to do if*/
/*         TODO : improve this part*/
/*     #}*/
/* */
/*     {#model {{ sonata_admin.field_description.mappingtype }}#}*/
/* */
/*     {% if sonata_admin.field_description is empty %}*/
/*         {{ block('choice_widget') }}*/
/*     {% elseif sonata_admin.field_description.mappingtype == constant('Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_ONE') %}*/
/*         {{ block('sonata_admin_orm_one_to_one_widget') }}*/
/*     {% elseif sonata_admin.field_description.mappingtype == constant('Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_ONE') %}*/
/*         {{ block('sonata_admin_orm_many_to_one_widget') }}*/
/*     {% elseif sonata_admin.field_description.mappingtype == constant('Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_MANY') %}*/
/*         {{ block('sonata_admin_orm_many_to_many_widget') }}*/
/*     {% elseif sonata_admin.field_description.mappingtype == constant('Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_MANY') %}*/
/*         {{ block('sonata_admin_orm_one_to_many_widget') }}*/
/*     {% else %}*/
/*         {#INVALID MODE : {{ id }}#}*/
/*         {{ block('choice_widget') }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block sonata_type_model_list_widget %}*/
/*     <div id="field_container_{{ id }}" class="field-container">*/
/*         <span id="field_actions_{{ id }}" class="field-actions">*/
/*             <span id="field_widget_{{ id }}" class="field-short-description">*/
/*                 {% if sonata_admin.field_description.associationadmin.id(sonata_admin.value) %}*/
/*                     {% render url('sonata_admin_short_object_information', {*/
/*                         'code':     sonata_admin.field_description.associationadmin.code,*/
/*                         'objectId': sonata_admin.field_description.associationadmin.id(sonata_admin.value),*/
/*                         'uniqid':   sonata_admin.field_description.associationadmin.uniqid,*/
/*                         'linkParameters': sonata_admin.field_description.options.link_parameters*/
/*                     }) %}*/
/*                 {% elseif sonata_admin.field_description.options.placeholder is defined and sonata_admin.field_description.options.placeholder %}*/
/*                     <span class="inner-field-short-description">*/
/*                         {{ sonata_admin.field_description.options.placeholder|trans({}, 'SonataAdminBundle') }}*/
/*                     </span>*/
/*                 {% endif %}*/
/*             </span>*/
/* */
/*             <span class="btn-group">*/
/*                 {% if sonata_admin.field_description.associationadmin.hasroute('list') and sonata_admin.field_description.associationadmin.isGranted('LIST') and btn_list %}*/
/*                     <a  href="{{ sonata_admin.field_description.associationadmin.generateUrl('list') }}"*/
/*                         onclick="return start_field_dialog_form_list_{{ id }}(this);"*/
/*                         class="btn btn-info btn-sm btn-outline sonata-ba-action"*/
/*                         title="{{ btn_list|trans({}, btn_catalogue) }}"*/
/*                             >*/
/*                         <i class="fa fa-list"></i>*/
/*                         {{ btn_list|trans({}, btn_catalogue) }}*/
/*                     </a>*/
/*                 {% endif %}*/
/* */
/*                 {% if sonata_admin.field_description.associationadmin.hasroute('create') and sonata_admin.field_description.associationadmin.isGranted('CREATE') and btn_add %}*/
/*                     <a  href="{{ sonata_admin.field_description.associationadmin.generateUrl('create') }}"*/
/*                         onclick="return start_field_dialog_form_add_{{ id }}(this);"*/
/*                         class="btn btn-success btn-sm btn-outline sonata-ba-action"*/
/*                         title="{{ btn_add|trans({}, btn_catalogue) }}"*/
/*                             >*/
/*                         <i class="fa fa-plus-circle"></i>*/
/*                         {{ btn_add|trans({}, btn_catalogue) }}*/
/*                     </a>*/
/*                 {% endif %}*/
/*             </span>*/
/* */
/*             <span class="btn-group">*/
/*                 {% if sonata_admin.field_description.associationadmin.hasRoute('delete') and sonata_admin.field_description.associationadmin.isGranted('DELETE') and btn_delete %}*/
/*                     <a  href=""*/
/*                         onclick="return remove_selected_element_{{ id }}(this);"*/
/*                         class="btn btn-danger btn-sm btn-outline sonata-ba-action"*/
/*                         title="{{ btn_delete|trans({}, btn_catalogue) }}"*/
/*                             >*/
/*                         <i class="fa fa-minus-circle"></i>*/
/*                         {{ btn_delete|trans({}, btn_catalogue) }}*/
/*                     </a>*/
/*                 {% endif %}*/
/*             </span>*/
/*         </span>*/
/* */
/*         <span style="display: none" >*/
/*             {# Hidden text input cannot be required, because browser will throw error "An invalid form control with name='' is not focusable"  #}*/
/*             {{ form_widget(form, {'required':false}) }}*/
/*         </span>*/
/* */
/*         <div class="modal fade" id="field_dialog_{{ id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*             <div class="modal-dialog modal-lg">*/
/*                 <div class="modal-content">*/
/*                     <div class="modal-header">*/
/*                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*                         <h4 class="modal-title"></h4>*/
/*                     </div>*/
/*                     <div class="modal-body">*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     {% include 'SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% block sonata_type_admin_widget %}*/
/*     {#admin {{ sonata_admin.field_description.mappingtype }}#}*/
/*     {% if sonata_admin.field_description.mappingtype == constant('Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_ONE') %}*/
/*         {{ block('sonata_admin_orm_one_to_one_widget') }}*/
/*     {% elseif sonata_admin.field_description.mappingtype == constant('Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_ONE') %}*/
/*         {{ block('sonata_admin_orm_many_to_one_widget') }}*/
/*     {% elseif sonata_admin.field_description.mappingtype == constant('Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_MANY') %}*/
/*         {{ block('sonata_admin_orm_many_to_many_widget') }}*/
/*     {% elseif sonata_admin.field_description.mappingtype == constant('Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_MANY') %}*/
/*         {{ block('sonata_admin_orm_one_to_many_widget') }}*/
/*     {% else %}*/
/*         INVALID MODE : {{ id }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block sonata_type_collection_widget %}*/
/*     {% if sonata_admin.field_description.mappingtype == constant('Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_MANY') %}*/
/*         {{ block('sonata_admin_orm_one_to_many_widget') }}*/
/*     {% elseif sonata_admin.field_description.mappingtype == constant('Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_MANY') %}*/
/*         {{ block('sonata_admin_orm_many_to_many_widget') }}*/
/*     {% else %}*/
/*         INVALID MODE : {{ id }} - type : sonata_type_collection - mapping : {{ sonata_admin.field_description.mappingtype }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
