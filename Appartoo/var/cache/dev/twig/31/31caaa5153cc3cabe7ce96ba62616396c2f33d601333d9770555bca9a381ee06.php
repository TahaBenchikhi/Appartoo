<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_c0d02a7d69967e2e3366a7ebb84ff4c889dd0ded0eaf73db49ab057b1bfa5a22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
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
        $__internal_6d704eadd141f3af2088d3a89cde3dd8146aa22e3ad88e3bc50f724a1106e711 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d704eadd141f3af2088d3a89cde3dd8146aa22e3ad88e3bc50f724a1106e711->enter($__internal_6d704eadd141f3af2088d3a89cde3dd8146aa22e3ad88e3bc50f724a1106e711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_3ecf856fbb2988e3149f25cad1b6b113dd2cdaccc9fe96721c0a42a52bad8277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ecf856fbb2988e3149f25cad1b6b113dd2cdaccc9fe96721c0a42a52bad8277->enter($__internal_3ecf856fbb2988e3149f25cad1b6b113dd2cdaccc9fe96721c0a42a52bad8277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d704eadd141f3af2088d3a89cde3dd8146aa22e3ad88e3bc50f724a1106e711->leave($__internal_6d704eadd141f3af2088d3a89cde3dd8146aa22e3ad88e3bc50f724a1106e711_prof);

        
        $__internal_3ecf856fbb2988e3149f25cad1b6b113dd2cdaccc9fe96721c0a42a52bad8277->leave($__internal_3ecf856fbb2988e3149f25cad1b6b113dd2cdaccc9fe96721c0a42a52bad8277_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_56b50ad510e41d671e1d748caefacbf3d92360fbdebeb4f396e469d7f6ae5a0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56b50ad510e41d671e1d748caefacbf3d92360fbdebeb4f396e469d7f6ae5a0f->enter($__internal_56b50ad510e41d671e1d748caefacbf3d92360fbdebeb4f396e469d7f6ae5a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_98e7609649f51c742d3d3635115850893699ad71bc88e56983352fdf7d95e34c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98e7609649f51c742d3d3635115850893699ad71bc88e56983352fdf7d95e34c->enter($__internal_98e7609649f51c742d3d3635115850893699ad71bc88e56983352fdf7d95e34c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_98e7609649f51c742d3d3635115850893699ad71bc88e56983352fdf7d95e34c->leave($__internal_98e7609649f51c742d3d3635115850893699ad71bc88e56983352fdf7d95e34c_prof);

        
        $__internal_56b50ad510e41d671e1d748caefacbf3d92360fbdebeb4f396e469d7f6ae5a0f->leave($__internal_56b50ad510e41d671e1d748caefacbf3d92360fbdebeb4f396e469d7f6ae5a0f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6fb5a84434425fa3bc0d35fb90bf7b93621781a01a6d16632279a4b28875895b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fb5a84434425fa3bc0d35fb90bf7b93621781a01a6d16632279a4b28875895b->enter($__internal_6fb5a84434425fa3bc0d35fb90bf7b93621781a01a6d16632279a4b28875895b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3465aa9b0a94b02254033e67fe71889bbd688fc9f338a102394fd436942fb7f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3465aa9b0a94b02254033e67fe71889bbd688fc9f338a102394fd436942fb7f5->enter($__internal_3465aa9b0a94b02254033e67fe71889bbd688fc9f338a102394fd436942fb7f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3465aa9b0a94b02254033e67fe71889bbd688fc9f338a102394fd436942fb7f5->leave($__internal_3465aa9b0a94b02254033e67fe71889bbd688fc9f338a102394fd436942fb7f5_prof);

        
        $__internal_6fb5a84434425fa3bc0d35fb90bf7b93621781a01a6d16632279a4b28875895b->leave($__internal_6fb5a84434425fa3bc0d35fb90bf7b93621781a01a6d16632279a4b28875895b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
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
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
