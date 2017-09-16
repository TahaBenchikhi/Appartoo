<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_664849966efce76e33359359bbea47e489a7d1ce0585ae97253c3382fd1db16c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e862127ea272b839ca1e55210e58071aa82666cc89fb42b8b1ba73a627499e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e862127ea272b839ca1e55210e58071aa82666cc89fb42b8b1ba73a627499e1->enter($__internal_2e862127ea272b839ca1e55210e58071aa82666cc89fb42b8b1ba73a627499e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_ba4eaeb1f1f9bc703f8ef48b2044df31632578fec54f095f51e9cbca84469420 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba4eaeb1f1f9bc703f8ef48b2044df31632578fec54f095f51e9cbca84469420->enter($__internal_ba4eaeb1f1f9bc703f8ef48b2044df31632578fec54f095f51e9cbca84469420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e862127ea272b839ca1e55210e58071aa82666cc89fb42b8b1ba73a627499e1->leave($__internal_2e862127ea272b839ca1e55210e58071aa82666cc89fb42b8b1ba73a627499e1_prof);

        
        $__internal_ba4eaeb1f1f9bc703f8ef48b2044df31632578fec54f095f51e9cbca84469420->leave($__internal_ba4eaeb1f1f9bc703f8ef48b2044df31632578fec54f095f51e9cbca84469420_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d4e3bfc2433678839a197563d262238c30735ae5af0044d8e1d27fad38104b19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4e3bfc2433678839a197563d262238c30735ae5af0044d8e1d27fad38104b19->enter($__internal_d4e3bfc2433678839a197563d262238c30735ae5af0044d8e1d27fad38104b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_19ffe83433582a25ea0ac171b0101dab384dc924fb1d5f8ececee6670b8a9b5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19ffe83433582a25ea0ac171b0101dab384dc924fb1d5f8ececee6670b8a9b5a->enter($__internal_19ffe83433582a25ea0ac171b0101dab384dc924fb1d5f8ececee6670b8a9b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_19ffe83433582a25ea0ac171b0101dab384dc924fb1d5f8ececee6670b8a9b5a->leave($__internal_19ffe83433582a25ea0ac171b0101dab384dc924fb1d5f8ececee6670b8a9b5a_prof);

        
        $__internal_d4e3bfc2433678839a197563d262238c30735ae5af0044d8e1d27fad38104b19->leave($__internal_d4e3bfc2433678839a197563d262238c30735ae5af0044d8e1d27fad38104b19_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
