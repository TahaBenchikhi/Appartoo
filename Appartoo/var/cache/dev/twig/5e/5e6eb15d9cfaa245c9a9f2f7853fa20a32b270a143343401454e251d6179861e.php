<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_ea905bb5e7b292c50a8f2d8d31da699ef5fcf1be19c2acbcad7b9e47c38aeb93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_78db791440363f82ca55e117d331e0089bd03f7fcf303e4611c598990afa3605 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78db791440363f82ca55e117d331e0089bd03f7fcf303e4611c598990afa3605->enter($__internal_78db791440363f82ca55e117d331e0089bd03f7fcf303e4611c598990afa3605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_7ca8d6824a9d3031db9912e49ca485aeecefc8f887b0b5b86b77397ba9c72b3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ca8d6824a9d3031db9912e49ca485aeecefc8f887b0b5b86b77397ba9c72b3a->enter($__internal_7ca8d6824a9d3031db9912e49ca485aeecefc8f887b0b5b86b77397ba9c72b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78db791440363f82ca55e117d331e0089bd03f7fcf303e4611c598990afa3605->leave($__internal_78db791440363f82ca55e117d331e0089bd03f7fcf303e4611c598990afa3605_prof);

        
        $__internal_7ca8d6824a9d3031db9912e49ca485aeecefc8f887b0b5b86b77397ba9c72b3a->leave($__internal_7ca8d6824a9d3031db9912e49ca485aeecefc8f887b0b5b86b77397ba9c72b3a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a9790666d84b49b55b676dc0d0139884384cc2d9e232332b211e350d8ec8e92f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9790666d84b49b55b676dc0d0139884384cc2d9e232332b211e350d8ec8e92f->enter($__internal_a9790666d84b49b55b676dc0d0139884384cc2d9e232332b211e350d8ec8e92f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e81197e5e683801a3511ab7af8b4f773297edca37e5fc08b26c8990dadef5738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e81197e5e683801a3511ab7af8b4f773297edca37e5fc08b26c8990dadef5738->enter($__internal_e81197e5e683801a3511ab7af8b4f773297edca37e5fc08b26c8990dadef5738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_e81197e5e683801a3511ab7af8b4f773297edca37e5fc08b26c8990dadef5738->leave($__internal_e81197e5e683801a3511ab7af8b4f773297edca37e5fc08b26c8990dadef5738_prof);

        
        $__internal_a9790666d84b49b55b676dc0d0139884384cc2d9e232332b211e350d8ec8e92f->leave($__internal_a9790666d84b49b55b676dc0d0139884384cc2d9e232332b211e350d8ec8e92f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
