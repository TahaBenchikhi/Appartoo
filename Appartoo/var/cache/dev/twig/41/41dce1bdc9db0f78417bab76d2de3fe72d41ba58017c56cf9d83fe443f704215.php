<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_3ff9034d3b534617cfe7f6dc5afc1ebed1d42e8492434eed31d1ab5dd8bf4dce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6586340997aa85a47f23806d68b699dff3c06145961e225d66f2269c63ac05d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6586340997aa85a47f23806d68b699dff3c06145961e225d66f2269c63ac05d2->enter($__internal_6586340997aa85a47f23806d68b699dff3c06145961e225d66f2269c63ac05d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_eb83b02c283fb9544e35654d90d43f54b5acb59f6cd3d52a5410be77e4be76b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb83b02c283fb9544e35654d90d43f54b5acb59f6cd3d52a5410be77e4be76b9->enter($__internal_eb83b02c283fb9544e35654d90d43f54b5acb59f6cd3d52a5410be77e4be76b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6586340997aa85a47f23806d68b699dff3c06145961e225d66f2269c63ac05d2->leave($__internal_6586340997aa85a47f23806d68b699dff3c06145961e225d66f2269c63ac05d2_prof);

        
        $__internal_eb83b02c283fb9544e35654d90d43f54b5acb59f6cd3d52a5410be77e4be76b9->leave($__internal_eb83b02c283fb9544e35654d90d43f54b5acb59f6cd3d52a5410be77e4be76b9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_43ef78ca76686217dc508f3a3c3a40261ad9f78d9f64a74e64fe275e940e2a25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43ef78ca76686217dc508f3a3c3a40261ad9f78d9f64a74e64fe275e940e2a25->enter($__internal_43ef78ca76686217dc508f3a3c3a40261ad9f78d9f64a74e64fe275e940e2a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_869039fb605d26e71c27f7b94d155737b8fe3e81188100e4b71a451afedc821e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_869039fb605d26e71c27f7b94d155737b8fe3e81188100e4b71a451afedc821e->enter($__internal_869039fb605d26e71c27f7b94d155737b8fe3e81188100e4b71a451afedc821e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_869039fb605d26e71c27f7b94d155737b8fe3e81188100e4b71a451afedc821e->leave($__internal_869039fb605d26e71c27f7b94d155737b8fe3e81188100e4b71a451afedc821e_prof);

        
        $__internal_43ef78ca76686217dc508f3a3c3a40261ad9f78d9f64a74e64fe275e940e2a25->leave($__internal_43ef78ca76686217dc508f3a3c3a40261ad9f78d9f64a74e64fe275e940e2a25_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
