<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_52c3d98ab96e4c003c764a9a904b1c7da9269f8c3ceb527bfc1c475398c814ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_d721748edc530920c7e4fd48752c9ee369eb3a7b9d4e47347bcfbb54befd3e06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d721748edc530920c7e4fd48752c9ee369eb3a7b9d4e47347bcfbb54befd3e06->enter($__internal_d721748edc530920c7e4fd48752c9ee369eb3a7b9d4e47347bcfbb54befd3e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_eba752a6d3977b5c05caa201eec7c574308afbad4b169565ecf074ab3a0f7010 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eba752a6d3977b5c05caa201eec7c574308afbad4b169565ecf074ab3a0f7010->enter($__internal_eba752a6d3977b5c05caa201eec7c574308afbad4b169565ecf074ab3a0f7010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d721748edc530920c7e4fd48752c9ee369eb3a7b9d4e47347bcfbb54befd3e06->leave($__internal_d721748edc530920c7e4fd48752c9ee369eb3a7b9d4e47347bcfbb54befd3e06_prof);

        
        $__internal_eba752a6d3977b5c05caa201eec7c574308afbad4b169565ecf074ab3a0f7010->leave($__internal_eba752a6d3977b5c05caa201eec7c574308afbad4b169565ecf074ab3a0f7010_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f8ae6091bfb0df7764f0502d923d182b0ea1c80f8cf0f0fad6374dffd7525233 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8ae6091bfb0df7764f0502d923d182b0ea1c80f8cf0f0fad6374dffd7525233->enter($__internal_f8ae6091bfb0df7764f0502d923d182b0ea1c80f8cf0f0fad6374dffd7525233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1fe67898a85f86504d0132235b89cbf92f3a786f8203df374979cd4b5678df75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fe67898a85f86504d0132235b89cbf92f3a786f8203df374979cd4b5678df75->enter($__internal_1fe67898a85f86504d0132235b89cbf92f3a786f8203df374979cd4b5678df75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_1fe67898a85f86504d0132235b89cbf92f3a786f8203df374979cd4b5678df75->leave($__internal_1fe67898a85f86504d0132235b89cbf92f3a786f8203df374979cd4b5678df75_prof);

        
        $__internal_f8ae6091bfb0df7764f0502d923d182b0ea1c80f8cf0f0fad6374dffd7525233->leave($__internal_f8ae6091bfb0df7764f0502d923d182b0ea1c80f8cf0f0fad6374dffd7525233_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\new.html.twig");
    }
}
