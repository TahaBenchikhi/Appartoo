<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_00f0f74f70f37ffe99edf32da5d30433001f890ec59660b91eb0d1b8a0006943 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_02ca3ac46df2a06b7100696c4882d3a15481877ef4ec1f19425d9d672510688e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02ca3ac46df2a06b7100696c4882d3a15481877ef4ec1f19425d9d672510688e->enter($__internal_02ca3ac46df2a06b7100696c4882d3a15481877ef4ec1f19425d9d672510688e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_a487efaad6b32975262fe077e61ef91b544265544ea1841e317de4f9484e9804 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a487efaad6b32975262fe077e61ef91b544265544ea1841e317de4f9484e9804->enter($__internal_a487efaad6b32975262fe077e61ef91b544265544ea1841e317de4f9484e9804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02ca3ac46df2a06b7100696c4882d3a15481877ef4ec1f19425d9d672510688e->leave($__internal_02ca3ac46df2a06b7100696c4882d3a15481877ef4ec1f19425d9d672510688e_prof);

        
        $__internal_a487efaad6b32975262fe077e61ef91b544265544ea1841e317de4f9484e9804->leave($__internal_a487efaad6b32975262fe077e61ef91b544265544ea1841e317de4f9484e9804_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_986b145b2b815fccfc1c33910c830e5fe9e1a14a8db280e04aad704a19e9daff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_986b145b2b815fccfc1c33910c830e5fe9e1a14a8db280e04aad704a19e9daff->enter($__internal_986b145b2b815fccfc1c33910c830e5fe9e1a14a8db280e04aad704a19e9daff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_45f6dc622f5c3172abd0dc6122dc41fc0615052a00bc11a9cb5f9b705bb2dc61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45f6dc622f5c3172abd0dc6122dc41fc0615052a00bc11a9cb5f9b705bb2dc61->enter($__internal_45f6dc622f5c3172abd0dc6122dc41fc0615052a00bc11a9cb5f9b705bb2dc61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_45f6dc622f5c3172abd0dc6122dc41fc0615052a00bc11a9cb5f9b705bb2dc61->leave($__internal_45f6dc622f5c3172abd0dc6122dc41fc0615052a00bc11a9cb5f9b705bb2dc61_prof);

        
        $__internal_986b145b2b815fccfc1c33910c830e5fe9e1a14a8db280e04aad704a19e9daff->leave($__internal_986b145b2b815fccfc1c33910c830e5fe9e1a14a8db280e04aad704a19e9daff_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_962604ea8958f8fe9534b031edf28cf02d74449e8457f9bf5d0e9b7ca3bd37b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_962604ea8958f8fe9534b031edf28cf02d74449e8457f9bf5d0e9b7ca3bd37b8->enter($__internal_962604ea8958f8fe9534b031edf28cf02d74449e8457f9bf5d0e9b7ca3bd37b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_50151a658d19d915e9d3d4b826a7ddc1a087ec846dba959f62918f3a99272af4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50151a658d19d915e9d3d4b826a7ddc1a087ec846dba959f62918f3a99272af4->enter($__internal_50151a658d19d915e9d3d4b826a7ddc1a087ec846dba959f62918f3a99272af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_50151a658d19d915e9d3d4b826a7ddc1a087ec846dba959f62918f3a99272af4->leave($__internal_50151a658d19d915e9d3d4b826a7ddc1a087ec846dba959f62918f3a99272af4_prof);

        
        $__internal_962604ea8958f8fe9534b031edf28cf02d74449e8457f9bf5d0e9b7ca3bd37b8->leave($__internal_962604ea8958f8fe9534b031edf28cf02d74449e8457f9bf5d0e9b7ca3bd37b8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
