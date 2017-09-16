<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_c40cb850e1811fb98b63a9e026bb8ec5a90b602f4fc546078ce102df67166b46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_643cead5117fea8aed6681f6bd1e0c77faf6845f40c01330c00ef1d73b2d6913 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_643cead5117fea8aed6681f6bd1e0c77faf6845f40c01330c00ef1d73b2d6913->enter($__internal_643cead5117fea8aed6681f6bd1e0c77faf6845f40c01330c00ef1d73b2d6913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_280dbfc32932dc4b9ee217a07dce867354839130146425a05f16ca6903251cf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_280dbfc32932dc4b9ee217a07dce867354839130146425a05f16ca6903251cf4->enter($__internal_280dbfc32932dc4b9ee217a07dce867354839130146425a05f16ca6903251cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_643cead5117fea8aed6681f6bd1e0c77faf6845f40c01330c00ef1d73b2d6913->leave($__internal_643cead5117fea8aed6681f6bd1e0c77faf6845f40c01330c00ef1d73b2d6913_prof);

        
        $__internal_280dbfc32932dc4b9ee217a07dce867354839130146425a05f16ca6903251cf4->leave($__internal_280dbfc32932dc4b9ee217a07dce867354839130146425a05f16ca6903251cf4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0ed7eaf2867abd02e67ddff40b43721021cb376deaf2b45ee0e9d0cbde09d668 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ed7eaf2867abd02e67ddff40b43721021cb376deaf2b45ee0e9d0cbde09d668->enter($__internal_0ed7eaf2867abd02e67ddff40b43721021cb376deaf2b45ee0e9d0cbde09d668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_42c70e920e5655b54fd562fe680c5ffe504e98c1d16344094c13ee7e5d04ae8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42c70e920e5655b54fd562fe680c5ffe504e98c1d16344094c13ee7e5d04ae8b->enter($__internal_42c70e920e5655b54fd562fe680c5ffe504e98c1d16344094c13ee7e5d04ae8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_42c70e920e5655b54fd562fe680c5ffe504e98c1d16344094c13ee7e5d04ae8b->leave($__internal_42c70e920e5655b54fd562fe680c5ffe504e98c1d16344094c13ee7e5d04ae8b_prof);

        
        $__internal_0ed7eaf2867abd02e67ddff40b43721021cb376deaf2b45ee0e9d0cbde09d668->leave($__internal_0ed7eaf2867abd02e67ddff40b43721021cb376deaf2b45ee0e9d0cbde09d668_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
