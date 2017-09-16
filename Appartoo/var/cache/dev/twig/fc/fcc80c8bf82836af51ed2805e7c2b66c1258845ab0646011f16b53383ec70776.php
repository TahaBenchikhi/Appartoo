<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_c98bc832248eb6c8ecb676e94a3db74ec36fa53c057d60d64caa31d713d8e7b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c7e00f837bcad0aeb5928e149dec1e02952bc9b1bb0e5a78ca1590db4eb1075 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c7e00f837bcad0aeb5928e149dec1e02952bc9b1bb0e5a78ca1590db4eb1075->enter($__internal_1c7e00f837bcad0aeb5928e149dec1e02952bc9b1bb0e5a78ca1590db4eb1075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_d21ba03f5861c1205ac75f56ecfad6f04f51e03e2e5c5ca4a8f05838805f4fd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d21ba03f5861c1205ac75f56ecfad6f04f51e03e2e5c5ca4a8f05838805f4fd3->enter($__internal_d21ba03f5861c1205ac75f56ecfad6f04f51e03e2e5c5ca4a8f05838805f4fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c7e00f837bcad0aeb5928e149dec1e02952bc9b1bb0e5a78ca1590db4eb1075->leave($__internal_1c7e00f837bcad0aeb5928e149dec1e02952bc9b1bb0e5a78ca1590db4eb1075_prof);

        
        $__internal_d21ba03f5861c1205ac75f56ecfad6f04f51e03e2e5c5ca4a8f05838805f4fd3->leave($__internal_d21ba03f5861c1205ac75f56ecfad6f04f51e03e2e5c5ca4a8f05838805f4fd3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6526a366a9cc40314f5a51c1be7dba57a6d79801515827313b63be052a10c156 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6526a366a9cc40314f5a51c1be7dba57a6d79801515827313b63be052a10c156->enter($__internal_6526a366a9cc40314f5a51c1be7dba57a6d79801515827313b63be052a10c156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8a7fe11cadec20b7e8a4f8d45a0ebca14b0e7ef2b98503f650acac61a5dac201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a7fe11cadec20b7e8a4f8d45a0ebca14b0e7ef2b98503f650acac61a5dac201->enter($__internal_8a7fe11cadec20b7e8a4f8d45a0ebca14b0e7ef2b98503f650acac61a5dac201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        // line 5
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 6
        echo "
";
        
        $__internal_8a7fe11cadec20b7e8a4f8d45a0ebca14b0e7ef2b98503f650acac61a5dac201->leave($__internal_8a7fe11cadec20b7e8a4f8d45a0ebca14b0e7ef2b98503f650acac61a5dac201_prof);

        
        $__internal_6526a366a9cc40314f5a51c1be7dba57a6d79801515827313b63be052a10c156->leave($__internal_6526a366a9cc40314f5a51c1be7dba57a6d79801515827313b63be052a10c156_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_63478cb556f6e02308c07cda23d76eee9ccd191a00c820c2786b5d6a409033ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63478cb556f6e02308c07cda23d76eee9ccd191a00c820c2786b5d6a409033ef->enter($__internal_63478cb556f6e02308c07cda23d76eee9ccd191a00c820c2786b5d6a409033ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f4c92de8da35a1ae09554bd1a0a15271355d6f584932424343ea75d22e9c7d6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4c92de8da35a1ae09554bd1a0a15271355d6f584932424343ea75d22e9c7d6c->enter($__internal_f4c92de8da35a1ae09554bd1a0a15271355d6f584932424343ea75d22e9c7d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_f4c92de8da35a1ae09554bd1a0a15271355d6f584932424343ea75d22e9c7d6c->leave($__internal_f4c92de8da35a1ae09554bd1a0a15271355d6f584932424343ea75d22e9c7d6c_prof);

        
        $__internal_63478cb556f6e02308c07cda23d76eee9ccd191a00c820c2786b5d6a409033ef->leave($__internal_63478cb556f6e02308c07cda23d76eee9ccd191a00c820c2786b5d6a409033ef_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_acee88fc0eaa65b9e7c989bce806fe32d836bbf865dab451c885105280b65905 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acee88fc0eaa65b9e7c989bce806fe32d836bbf865dab451c885105280b65905->enter($__internal_acee88fc0eaa65b9e7c989bce806fe32d836bbf865dab451c885105280b65905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_98e4fefd0b7cad802b5b24129f64b8d484516421023de26daa091cbbe9310f0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98e4fefd0b7cad802b5b24129f64b8d484516421023de26daa091cbbe9310f0a->enter($__internal_98e4fefd0b7cad802b5b24129f64b8d484516421023de26daa091cbbe9310f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "    <link href=\"https://fonts.googleapis.com/css?family=Roboto\" rel=\"stylesheet\">


";
        
        $__internal_98e4fefd0b7cad802b5b24129f64b8d484516421023de26daa091cbbe9310f0a->leave($__internal_98e4fefd0b7cad802b5b24129f64b8d484516421023de26daa091cbbe9310f0a_prof);

        
        $__internal_acee88fc0eaa65b9e7c989bce806fe32d836bbf865dab451c885105280b65905->leave($__internal_acee88fc0eaa65b9e7c989bce806fe32d836bbf865dab451c885105280b65905_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 9,  84 => 8,  67 => 5,  56 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

{% block fos_user_content %}{% endblock %}

{% endblock %}
{% block stylesheets %}
    <link href=\"https://fonts.googleapis.com/css?family=Roboto\" rel=\"stylesheet\">


{% endblock %}", "@FOSUser/layout.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\app\\Resources\\FOSUserBundle\\views\\layout.html.twig");
    }
}
