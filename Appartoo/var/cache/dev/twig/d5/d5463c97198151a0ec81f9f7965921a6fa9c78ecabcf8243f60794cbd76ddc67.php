<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_8644e2f549eae7e375598c539ec5950370bda255b027e8f1ab599e34bae2724f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_666e91b17edff9390b31c345188cefea737e1d85821c101e6b4553dfed4c12e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_666e91b17edff9390b31c345188cefea737e1d85821c101e6b4553dfed4c12e6->enter($__internal_666e91b17edff9390b31c345188cefea737e1d85821c101e6b4553dfed4c12e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_dbb5c77f59c419d8b0cdcdd4c112a931db43f291583014ce629919621b775520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbb5c77f59c419d8b0cdcdd4c112a931db43f291583014ce629919621b775520->enter($__internal_dbb5c77f59c419d8b0cdcdd4c112a931db43f291583014ce629919621b775520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_666e91b17edff9390b31c345188cefea737e1d85821c101e6b4553dfed4c12e6->leave($__internal_666e91b17edff9390b31c345188cefea737e1d85821c101e6b4553dfed4c12e6_prof);

        
        $__internal_dbb5c77f59c419d8b0cdcdd4c112a931db43f291583014ce629919621b775520->leave($__internal_dbb5c77f59c419d8b0cdcdd4c112a931db43f291583014ce629919621b775520_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_76587a1344dbcf55f78bd2e2a244e5ca91ccf42d7855e05238af899996d2399c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76587a1344dbcf55f78bd2e2a244e5ca91ccf42d7855e05238af899996d2399c->enter($__internal_76587a1344dbcf55f78bd2e2a244e5ca91ccf42d7855e05238af899996d2399c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_a8860e0f14e1396978bbdf89af2c21b607944a93250e6a54fb8105d53a3a2cad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8860e0f14e1396978bbdf89af2c21b607944a93250e6a54fb8105d53a3a2cad->enter($__internal_a8860e0f14e1396978bbdf89af2c21b607944a93250e6a54fb8105d53a3a2cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_a8860e0f14e1396978bbdf89af2c21b607944a93250e6a54fb8105d53a3a2cad->leave($__internal_a8860e0f14e1396978bbdf89af2c21b607944a93250e6a54fb8105d53a3a2cad_prof);

        
        $__internal_76587a1344dbcf55f78bd2e2a244e5ca91ccf42d7855e05238af899996d2399c->leave($__internal_76587a1344dbcf55f78bd2e2a244e5ca91ccf42d7855e05238af899996d2399c_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_fd3ac9091bc97cd64c21a97bdcbac1eaa3cdcf1e773f9ae53e41e0847a2918a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd3ac9091bc97cd64c21a97bdcbac1eaa3cdcf1e773f9ae53e41e0847a2918a7->enter($__internal_fd3ac9091bc97cd64c21a97bdcbac1eaa3cdcf1e773f9ae53e41e0847a2918a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_890392c49ae6a2dccacabdbc8c485c5e473ccb280d3122386a85a931e6a27f28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_890392c49ae6a2dccacabdbc8c485c5e473ccb280d3122386a85a931e6a27f28->enter($__internal_890392c49ae6a2dccacabdbc8c485c5e473ccb280d3122386a85a931e6a27f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_890392c49ae6a2dccacabdbc8c485c5e473ccb280d3122386a85a931e6a27f28->leave($__internal_890392c49ae6a2dccacabdbc8c485c5e473ccb280d3122386a85a931e6a27f28_prof);

        
        $__internal_fd3ac9091bc97cd64c21a97bdcbac1eaa3cdcf1e773f9ae53e41e0847a2918a7->leave($__internal_fd3ac9091bc97cd64c21a97bdcbac1eaa3cdcf1e773f9ae53e41e0847a2918a7_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_73e03cc3cfa5f7484f81f5edf6bf32ecf1715d7732497a47abfa48ed3f964b24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73e03cc3cfa5f7484f81f5edf6bf32ecf1715d7732497a47abfa48ed3f964b24->enter($__internal_73e03cc3cfa5f7484f81f5edf6bf32ecf1715d7732497a47abfa48ed3f964b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_f2f69257ec432c3d7822371a9a11ee899c15f51704c79e8e8bfffd58ae5de98d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2f69257ec432c3d7822371a9a11ee899c15f51704c79e8e8bfffd58ae5de98d->enter($__internal_f2f69257ec432c3d7822371a9a11ee899c15f51704c79e8e8bfffd58ae5de98d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f2f69257ec432c3d7822371a9a11ee899c15f51704c79e8e8bfffd58ae5de98d->leave($__internal_f2f69257ec432c3d7822371a9a11ee899c15f51704c79e8e8bfffd58ae5de98d_prof);

        
        $__internal_73e03cc3cfa5f7484f81f5edf6bf32ecf1715d7732497a47abfa48ed3f964b24->leave($__internal_73e03cc3cfa5f7484f81f5edf6bf32ecf1715d7732497a47abfa48ed3f964b24_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Resetting/email.txt.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}
