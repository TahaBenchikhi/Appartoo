<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_2f813d4f91337bd66e0a1bf7ca763b2df6f251dfa0984286786d49e3d6707398 extends Twig_Template
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
        $__internal_a5fb14c6692891ec5a3d6009858823ee4e820cc53f390f9b5f58e4802e8af632 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5fb14c6692891ec5a3d6009858823ee4e820cc53f390f9b5f58e4802e8af632->enter($__internal_a5fb14c6692891ec5a3d6009858823ee4e820cc53f390f9b5f58e4802e8af632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_a43ee96ffc3abd4e7f1a79ce3a9d3ad70b962626f77edfa172e5045ab8f45606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a43ee96ffc3abd4e7f1a79ce3a9d3ad70b962626f77edfa172e5045ab8f45606->enter($__internal_a43ee96ffc3abd4e7f1a79ce3a9d3ad70b962626f77edfa172e5045ab8f45606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a5fb14c6692891ec5a3d6009858823ee4e820cc53f390f9b5f58e4802e8af632->leave($__internal_a5fb14c6692891ec5a3d6009858823ee4e820cc53f390f9b5f58e4802e8af632_prof);

        
        $__internal_a43ee96ffc3abd4e7f1a79ce3a9d3ad70b962626f77edfa172e5045ab8f45606->leave($__internal_a43ee96ffc3abd4e7f1a79ce3a9d3ad70b962626f77edfa172e5045ab8f45606_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_9c5e3ba0e9d4b940f8de0af7b9b717b8a25446fe61a1af2c4017f8ef2dbb9e4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c5e3ba0e9d4b940f8de0af7b9b717b8a25446fe61a1af2c4017f8ef2dbb9e4b->enter($__internal_9c5e3ba0e9d4b940f8de0af7b9b717b8a25446fe61a1af2c4017f8ef2dbb9e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_7987b20b5109242692e97fe96767b21ff7a5e581d37b22ed78617244706c3bc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7987b20b5109242692e97fe96767b21ff7a5e581d37b22ed78617244706c3bc3->enter($__internal_7987b20b5109242692e97fe96767b21ff7a5e581d37b22ed78617244706c3bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_7987b20b5109242692e97fe96767b21ff7a5e581d37b22ed78617244706c3bc3->leave($__internal_7987b20b5109242692e97fe96767b21ff7a5e581d37b22ed78617244706c3bc3_prof);

        
        $__internal_9c5e3ba0e9d4b940f8de0af7b9b717b8a25446fe61a1af2c4017f8ef2dbb9e4b->leave($__internal_9c5e3ba0e9d4b940f8de0af7b9b717b8a25446fe61a1af2c4017f8ef2dbb9e4b_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_acb9f4ef5ac4e41dede6afac6651e455910c5571f7fb413f48725ae82a3ecc9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acb9f4ef5ac4e41dede6afac6651e455910c5571f7fb413f48725ae82a3ecc9f->enter($__internal_acb9f4ef5ac4e41dede6afac6651e455910c5571f7fb413f48725ae82a3ecc9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_ccd307efab5133f21a594d72386529f45ecc85ff770a0d0e06355527af61f9c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccd307efab5133f21a594d72386529f45ecc85ff770a0d0e06355527af61f9c4->enter($__internal_ccd307efab5133f21a594d72386529f45ecc85ff770a0d0e06355527af61f9c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ccd307efab5133f21a594d72386529f45ecc85ff770a0d0e06355527af61f9c4->leave($__internal_ccd307efab5133f21a594d72386529f45ecc85ff770a0d0e06355527af61f9c4_prof);

        
        $__internal_acb9f4ef5ac4e41dede6afac6651e455910c5571f7fb413f48725ae82a3ecc9f->leave($__internal_acb9f4ef5ac4e41dede6afac6651e455910c5571f7fb413f48725ae82a3ecc9f_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ab501b5903c903cc6fe6179c39338bb56242fd713650f69a37ab379828db6f2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab501b5903c903cc6fe6179c39338bb56242fd713650f69a37ab379828db6f2a->enter($__internal_ab501b5903c903cc6fe6179c39338bb56242fd713650f69a37ab379828db6f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_905db3b20d4f8b041878bee486442200e97b67d08dd8e26e9547ced82ae70a9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_905db3b20d4f8b041878bee486442200e97b67d08dd8e26e9547ced82ae70a9f->enter($__internal_905db3b20d4f8b041878bee486442200e97b67d08dd8e26e9547ced82ae70a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_905db3b20d4f8b041878bee486442200e97b67d08dd8e26e9547ced82ae70a9f->leave($__internal_905db3b20d4f8b041878bee486442200e97b67d08dd8e26e9547ced82ae70a9f_prof);

        
        $__internal_ab501b5903c903cc6fe6179c39338bb56242fd713650f69a37ab379828db6f2a->leave($__internal_ab501b5903c903cc6fe6179c39338bb56242fd713650f69a37ab379828db6f2a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Registration/email.txt.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
