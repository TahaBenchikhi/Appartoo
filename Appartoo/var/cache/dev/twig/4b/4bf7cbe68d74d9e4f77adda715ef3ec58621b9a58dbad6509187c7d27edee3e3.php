<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_85b555113ae4d252c00beaeaed9569c3879ec276ab2350707bfdd6f5a301d468 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec58841ea16c9094af3126ac5b00c520fe2825a354b69acf10f45bc6df6e3ee0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec58841ea16c9094af3126ac5b00c520fe2825a354b69acf10f45bc6df6e3ee0->enter($__internal_ec58841ea16c9094af3126ac5b00c520fe2825a354b69acf10f45bc6df6e3ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_42a5748d46e76d4e9d933a8189ad51d7888f58975b70043bbdb0d178c937dc11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42a5748d46e76d4e9d933a8189ad51d7888f58975b70043bbdb0d178c937dc11->enter($__internal_42a5748d46e76d4e9d933a8189ad51d7888f58975b70043bbdb0d178c937dc11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec58841ea16c9094af3126ac5b00c520fe2825a354b69acf10f45bc6df6e3ee0->leave($__internal_ec58841ea16c9094af3126ac5b00c520fe2825a354b69acf10f45bc6df6e3ee0_prof);

        
        $__internal_42a5748d46e76d4e9d933a8189ad51d7888f58975b70043bbdb0d178c937dc11->leave($__internal_42a5748d46e76d4e9d933a8189ad51d7888f58975b70043bbdb0d178c937dc11_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3755a6c3def202b2e5334d58cafc2370ddab4a9fc0fdf9bcabc5dce1493213eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3755a6c3def202b2e5334d58cafc2370ddab4a9fc0fdf9bcabc5dce1493213eb->enter($__internal_3755a6c3def202b2e5334d58cafc2370ddab4a9fc0fdf9bcabc5dce1493213eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_540e0ef25af75001b384dd70b2b85f8d87fe7bc7b483fb530f5315bf9276d491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_540e0ef25af75001b384dd70b2b85f8d87fe7bc7b483fb530f5315bf9276d491->enter($__internal_540e0ef25af75001b384dd70b2b85f8d87fe7bc7b483fb530f5315bf9276d491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_540e0ef25af75001b384dd70b2b85f8d87fe7bc7b483fb530f5315bf9276d491->leave($__internal_540e0ef25af75001b384dd70b2b85f8d87fe7bc7b483fb530f5315bf9276d491_prof);

        
        $__internal_3755a6c3def202b2e5334d58cafc2370ddab4a9fc0fdf9bcabc5dce1493213eb->leave($__internal_3755a6c3def202b2e5334d58cafc2370ddab4a9fc0fdf9bcabc5dce1493213eb_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf04c07a89be63fb15319061fbed53f78f3cbb3ae76e36891b2e24d44b4463d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf04c07a89be63fb15319061fbed53f78f3cbb3ae76e36891b2e24d44b4463d3->enter($__internal_bf04c07a89be63fb15319061fbed53f78f3cbb3ae76e36891b2e24d44b4463d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b94231df02854a195c51f69fa4c8fdfb58e53a55bbe6bbae1708a51386e60df7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b94231df02854a195c51f69fa4c8fdfb58e53a55bbe6bbae1708a51386e60df7->enter($__internal_b94231df02854a195c51f69fa4c8fdfb58e53a55bbe6bbae1708a51386e60df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_b94231df02854a195c51f69fa4c8fdfb58e53a55bbe6bbae1708a51386e60df7->leave($__internal_b94231df02854a195c51f69fa4c8fdfb58e53a55bbe6bbae1708a51386e60df7_prof);

        
        $__internal_bf04c07a89be63fb15319061fbed53f78f3cbb3ae76e36891b2e24d44b4463d3->leave($__internal_bf04c07a89be63fb15319061fbed53f78f3cbb3ae76e36891b2e24d44b4463d3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
