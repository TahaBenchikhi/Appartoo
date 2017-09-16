<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_413750e5031d1795d4006759d99f7e019f3bb2981f322fdd4412e19fe4c266be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0274e05c6e665002507effb377ea6246709aeda07dcb9470f0bd09658d2583bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0274e05c6e665002507effb377ea6246709aeda07dcb9470f0bd09658d2583bc->enter($__internal_0274e05c6e665002507effb377ea6246709aeda07dcb9470f0bd09658d2583bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d5db5d4babef5050a3154d4970cdffbdfffa3ea8f6c5fb096c45df37d107f6a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5db5d4babef5050a3154d4970cdffbdfffa3ea8f6c5fb096c45df37d107f6a1->enter($__internal_d5db5d4babef5050a3154d4970cdffbdfffa3ea8f6c5fb096c45df37d107f6a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0274e05c6e665002507effb377ea6246709aeda07dcb9470f0bd09658d2583bc->leave($__internal_0274e05c6e665002507effb377ea6246709aeda07dcb9470f0bd09658d2583bc_prof);

        
        $__internal_d5db5d4babef5050a3154d4970cdffbdfffa3ea8f6c5fb096c45df37d107f6a1->leave($__internal_d5db5d4babef5050a3154d4970cdffbdfffa3ea8f6c5fb096c45df37d107f6a1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b96271ec858dd58004b19bc5b49c3071b10f84b0304018e77fc75fef21ca7ac5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b96271ec858dd58004b19bc5b49c3071b10f84b0304018e77fc75fef21ca7ac5->enter($__internal_b96271ec858dd58004b19bc5b49c3071b10f84b0304018e77fc75fef21ca7ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c8f109717bf1a2aaafc4a720ef291345bc27f92c98fc03ed24b2f737b1bc2cde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8f109717bf1a2aaafc4a720ef291345bc27f92c98fc03ed24b2f737b1bc2cde->enter($__internal_c8f109717bf1a2aaafc4a720ef291345bc27f92c98fc03ed24b2f737b1bc2cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_c8f109717bf1a2aaafc4a720ef291345bc27f92c98fc03ed24b2f737b1bc2cde->leave($__internal_c8f109717bf1a2aaafc4a720ef291345bc27f92c98fc03ed24b2f737b1bc2cde_prof);

        
        $__internal_b96271ec858dd58004b19bc5b49c3071b10f84b0304018e77fc75fef21ca7ac5->leave($__internal_b96271ec858dd58004b19bc5b49c3071b10f84b0304018e77fc75fef21ca7ac5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4a2272ccb0cea18a5bd9ea15c0319937bbcb224de38f3481db0fe8c40b6535dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a2272ccb0cea18a5bd9ea15c0319937bbcb224de38f3481db0fe8c40b6535dd->enter($__internal_4a2272ccb0cea18a5bd9ea15c0319937bbcb224de38f3481db0fe8c40b6535dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5bfbb0715ab5f130faedf8e2d4eaa836fe8550b70da86c8ba686a0e67f2cf23e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bfbb0715ab5f130faedf8e2d4eaa836fe8550b70da86c8ba686a0e67f2cf23e->enter($__internal_5bfbb0715ab5f130faedf8e2d4eaa836fe8550b70da86c8ba686a0e67f2cf23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_5bfbb0715ab5f130faedf8e2d4eaa836fe8550b70da86c8ba686a0e67f2cf23e->leave($__internal_5bfbb0715ab5f130faedf8e2d4eaa836fe8550b70da86c8ba686a0e67f2cf23e_prof);

        
        $__internal_4a2272ccb0cea18a5bd9ea15c0319937bbcb224de38f3481db0fe8c40b6535dd->leave($__internal_4a2272ccb0cea18a5bd9ea15c0319937bbcb224de38f3481db0fe8c40b6535dd_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a3f04d66f6135075f558676e9dcb92cfc7ae86e93e9d21037448d8c606d51c48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3f04d66f6135075f558676e9dcb92cfc7ae86e93e9d21037448d8c606d51c48->enter($__internal_a3f04d66f6135075f558676e9dcb92cfc7ae86e93e9d21037448d8c606d51c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6ac34b62f400f1c5d6d088c24fe6897abf5763d2d23cadde09f9b2a3bad54016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ac34b62f400f1c5d6d088c24fe6897abf5763d2d23cadde09f9b2a3bad54016->enter($__internal_6ac34b62f400f1c5d6d088c24fe6897abf5763d2d23cadde09f9b2a3bad54016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_6ac34b62f400f1c5d6d088c24fe6897abf5763d2d23cadde09f9b2a3bad54016->leave($__internal_6ac34b62f400f1c5d6d088c24fe6897abf5763d2d23cadde09f9b2a3bad54016_prof);

        
        $__internal_a3f04d66f6135075f558676e9dcb92cfc7ae86e93e9d21037448d8c606d51c48->leave($__internal_a3f04d66f6135075f558676e9dcb92cfc7ae86e93e9d21037448d8c606d51c48_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
