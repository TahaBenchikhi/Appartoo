<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_10f95c5595e64c6f16abaaac935c74871ea06c6c60ecf1a66552b1a2ad059887 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_007392095718ccad48db162e2f4df9d0eef91182d7baef5dae534c7b124382d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_007392095718ccad48db162e2f4df9d0eef91182d7baef5dae534c7b124382d8->enter($__internal_007392095718ccad48db162e2f4df9d0eef91182d7baef5dae534c7b124382d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_179fa84686207818c96095d7dada3ddf2b1ebbfe83c241782d19bf7513295281 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_179fa84686207818c96095d7dada3ddf2b1ebbfe83c241782d19bf7513295281->enter($__internal_179fa84686207818c96095d7dada3ddf2b1ebbfe83c241782d19bf7513295281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_007392095718ccad48db162e2f4df9d0eef91182d7baef5dae534c7b124382d8->leave($__internal_007392095718ccad48db162e2f4df9d0eef91182d7baef5dae534c7b124382d8_prof);

        
        $__internal_179fa84686207818c96095d7dada3ddf2b1ebbfe83c241782d19bf7513295281->leave($__internal_179fa84686207818c96095d7dada3ddf2b1ebbfe83c241782d19bf7513295281_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_989b233a1b6de5c084465c1d9afd529b0fecae37bca6d2ff6384580b9add02cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_989b233a1b6de5c084465c1d9afd529b0fecae37bca6d2ff6384580b9add02cd->enter($__internal_989b233a1b6de5c084465c1d9afd529b0fecae37bca6d2ff6384580b9add02cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6c3f197a800e31cc5dc5b07d13d9a72fa5e34d5d353deef2605d00e93fe4230e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c3f197a800e31cc5dc5b07d13d9a72fa5e34d5d353deef2605d00e93fe4230e->enter($__internal_6c3f197a800e31cc5dc5b07d13d9a72fa5e34d5d353deef2605d00e93fe4230e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_6c3f197a800e31cc5dc5b07d13d9a72fa5e34d5d353deef2605d00e93fe4230e->leave($__internal_6c3f197a800e31cc5dc5b07d13d9a72fa5e34d5d353deef2605d00e93fe4230e_prof);

        
        $__internal_989b233a1b6de5c084465c1d9afd529b0fecae37bca6d2ff6384580b9add02cd->leave($__internal_989b233a1b6de5c084465c1d9afd529b0fecae37bca6d2ff6384580b9add02cd_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c4de345acd5205f5f76a66a9a6962520ec2050f57910da19cbcfeaa3022ce5d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4de345acd5205f5f76a66a9a6962520ec2050f57910da19cbcfeaa3022ce5d3->enter($__internal_c4de345acd5205f5f76a66a9a6962520ec2050f57910da19cbcfeaa3022ce5d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_869b79e0989ab9fbaea88208f2f996ff2742f17009e3ded02f54c5a3a839a51d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_869b79e0989ab9fbaea88208f2f996ff2742f17009e3ded02f54c5a3a839a51d->enter($__internal_869b79e0989ab9fbaea88208f2f996ff2742f17009e3ded02f54c5a3a839a51d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_869b79e0989ab9fbaea88208f2f996ff2742f17009e3ded02f54c5a3a839a51d->leave($__internal_869b79e0989ab9fbaea88208f2f996ff2742f17009e3ded02f54c5a3a839a51d_prof);

        
        $__internal_c4de345acd5205f5f76a66a9a6962520ec2050f57910da19cbcfeaa3022ce5d3->leave($__internal_c4de345acd5205f5f76a66a9a6962520ec2050f57910da19cbcfeaa3022ce5d3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a202acbe56429b44a239173e0914f13863828046f051bff9bae79f9cc5cd936d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a202acbe56429b44a239173e0914f13863828046f051bff9bae79f9cc5cd936d->enter($__internal_a202acbe56429b44a239173e0914f13863828046f051bff9bae79f9cc5cd936d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6786c4f622d01e0a21c7f61d175fc2cc5e9c892464a85b8608365490432cc479 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6786c4f622d01e0a21c7f61d175fc2cc5e9c892464a85b8608365490432cc479->enter($__internal_6786c4f622d01e0a21c7f61d175fc2cc5e9c892464a85b8608365490432cc479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_6786c4f622d01e0a21c7f61d175fc2cc5e9c892464a85b8608365490432cc479->leave($__internal_6786c4f622d01e0a21c7f61d175fc2cc5e9c892464a85b8608365490432cc479_prof);

        
        $__internal_a202acbe56429b44a239173e0914f13863828046f051bff9bae79f9cc5cd936d->leave($__internal_a202acbe56429b44a239173e0914f13863828046f051bff9bae79f9cc5cd936d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
