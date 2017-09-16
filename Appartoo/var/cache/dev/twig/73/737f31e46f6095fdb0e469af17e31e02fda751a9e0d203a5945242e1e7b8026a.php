<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_e5e38ec35b76df02348b06d22a0c2ee497e56fd24a22fec6ff327e44736b144c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_a288a96d9f7ce80f436b67e66ed66cabc8fa43be95453aa199e4d2a1754f96ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a288a96d9f7ce80f436b67e66ed66cabc8fa43be95453aa199e4d2a1754f96ea->enter($__internal_a288a96d9f7ce80f436b67e66ed66cabc8fa43be95453aa199e4d2a1754f96ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_cc7f0d69c4b488170003d36dc0a7bd2ef18f952d278c31750308657467d10e4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc7f0d69c4b488170003d36dc0a7bd2ef18f952d278c31750308657467d10e4f->enter($__internal_cc7f0d69c4b488170003d36dc0a7bd2ef18f952d278c31750308657467d10e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a288a96d9f7ce80f436b67e66ed66cabc8fa43be95453aa199e4d2a1754f96ea->leave($__internal_a288a96d9f7ce80f436b67e66ed66cabc8fa43be95453aa199e4d2a1754f96ea_prof);

        
        $__internal_cc7f0d69c4b488170003d36dc0a7bd2ef18f952d278c31750308657467d10e4f->leave($__internal_cc7f0d69c4b488170003d36dc0a7bd2ef18f952d278c31750308657467d10e4f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6f2c73cbc97cd0db588a836c220dddec0f424fdaf04ba15bf1166b6889114312 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f2c73cbc97cd0db588a836c220dddec0f424fdaf04ba15bf1166b6889114312->enter($__internal_6f2c73cbc97cd0db588a836c220dddec0f424fdaf04ba15bf1166b6889114312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ea486e698a23fc20932453a713a1ae34779ef694d2c6faa1f5efbed564a2b8e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea486e698a23fc20932453a713a1ae34779ef694d2c6faa1f5efbed564a2b8e5->enter($__internal_ea486e698a23fc20932453a713a1ae34779ef694d2c6faa1f5efbed564a2b8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        // line 5
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_ea486e698a23fc20932453a713a1ae34779ef694d2c6faa1f5efbed564a2b8e5->leave($__internal_ea486e698a23fc20932453a713a1ae34779ef694d2c6faa1f5efbed564a2b8e5_prof);

        
        $__internal_6f2c73cbc97cd0db588a836c220dddec0f424fdaf04ba15bf1166b6889114312->leave($__internal_6f2c73cbc97cd0db588a836c220dddec0f424fdaf04ba15bf1166b6889114312_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\" />
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
