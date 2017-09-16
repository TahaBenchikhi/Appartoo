<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_ad6f3426652cdfa287db22cfc686d2152a5793ba1767af8e18ad87acb53881e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_0bf5c5c2e75c18601394b1b9c40457c55f554cda8dcb0271e4dde16cc65b6879 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bf5c5c2e75c18601394b1b9c40457c55f554cda8dcb0271e4dde16cc65b6879->enter($__internal_0bf5c5c2e75c18601394b1b9c40457c55f554cda8dcb0271e4dde16cc65b6879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_b1522cbaa528f31cf11749dd9eae4261f13ec4c9b232bfd829fea6d7d73cb465 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1522cbaa528f31cf11749dd9eae4261f13ec4c9b232bfd829fea6d7d73cb465->enter($__internal_b1522cbaa528f31cf11749dd9eae4261f13ec4c9b232bfd829fea6d7d73cb465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bf5c5c2e75c18601394b1b9c40457c55f554cda8dcb0271e4dde16cc65b6879->leave($__internal_0bf5c5c2e75c18601394b1b9c40457c55f554cda8dcb0271e4dde16cc65b6879_prof);

        
        $__internal_b1522cbaa528f31cf11749dd9eae4261f13ec4c9b232bfd829fea6d7d73cb465->leave($__internal_b1522cbaa528f31cf11749dd9eae4261f13ec4c9b232bfd829fea6d7d73cb465_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9f4f71605b80b4d2ca839d562a14cb30f5dc18131d15d58e3dc46ab423f7c335 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f4f71605b80b4d2ca839d562a14cb30f5dc18131d15d58e3dc46ab423f7c335->enter($__internal_9f4f71605b80b4d2ca839d562a14cb30f5dc18131d15d58e3dc46ab423f7c335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_828186eef2700d14811442da30b995c9a639b457559c7ef7b7fb64a2c641075e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_828186eef2700d14811442da30b995c9a639b457559c7ef7b7fb64a2c641075e->enter($__internal_828186eef2700d14811442da30b995c9a639b457559c7ef7b7fb64a2c641075e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_828186eef2700d14811442da30b995c9a639b457559c7ef7b7fb64a2c641075e->leave($__internal_828186eef2700d14811442da30b995c9a639b457559c7ef7b7fb64a2c641075e_prof);

        
        $__internal_9f4f71605b80b4d2ca839d562a14cb30f5dc18131d15d58e3dc46ab423f7c335->leave($__internal_9f4f71605b80b4d2ca839d562a14cb30f5dc18131d15d58e3dc46ab423f7c335_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
", "FOSUserBundle:Profile:show.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/show.html.twig");
    }
}
