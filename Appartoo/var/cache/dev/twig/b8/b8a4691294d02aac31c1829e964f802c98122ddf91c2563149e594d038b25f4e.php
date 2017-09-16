<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_fa6056848138aeead5fff0a5aa5d68e6c2dd84bd00bf4b7f75ffcc782e427fb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e831c63bac48bf0a96130dc23f1f3302abf5abd47404b50448335f97fdab5cf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e831c63bac48bf0a96130dc23f1f3302abf5abd47404b50448335f97fdab5cf1->enter($__internal_e831c63bac48bf0a96130dc23f1f3302abf5abd47404b50448335f97fdab5cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_e0af8fe7abbc4a3761328b76fb94894179c48de1f7fac43f5cd5428b72684617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0af8fe7abbc4a3761328b76fb94894179c48de1f7fac43f5cd5428b72684617->enter($__internal_e0af8fe7abbc4a3761328b76fb94894179c48de1f7fac43f5cd5428b72684617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e831c63bac48bf0a96130dc23f1f3302abf5abd47404b50448335f97fdab5cf1->leave($__internal_e831c63bac48bf0a96130dc23f1f3302abf5abd47404b50448335f97fdab5cf1_prof);

        
        $__internal_e0af8fe7abbc4a3761328b76fb94894179c48de1f7fac43f5cd5428b72684617->leave($__internal_e0af8fe7abbc4a3761328b76fb94894179c48de1f7fac43f5cd5428b72684617_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_cbb38994fe7ce2fe05863d6b75049c008bac201c3da6ec27c92ae70ec56d2d67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbb38994fe7ce2fe05863d6b75049c008bac201c3da6ec27c92ae70ec56d2d67->enter($__internal_cbb38994fe7ce2fe05863d6b75049c008bac201c3da6ec27c92ae70ec56d2d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_216fa47a0cc6b398b21a393a01971cdbf161ce5d0092187fc4ec789a670fb257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_216fa47a0cc6b398b21a393a01971cdbf161ce5d0092187fc4ec789a670fb257->enter($__internal_216fa47a0cc6b398b21a393a01971cdbf161ce5d0092187fc4ec789a670fb257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_216fa47a0cc6b398b21a393a01971cdbf161ce5d0092187fc4ec789a670fb257->leave($__internal_216fa47a0cc6b398b21a393a01971cdbf161ce5d0092187fc4ec789a670fb257_prof);

        
        $__internal_cbb38994fe7ce2fe05863d6b75049c008bac201c3da6ec27c92ae70ec56d2d67->leave($__internal_cbb38994fe7ce2fe05863d6b75049c008bac201c3da6ec27c92ae70ec56d2d67_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_005a7c6b6ae2a4d17fb3db237ae4bf0860462c8b9b65d6ee8853c688f8d1686e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_005a7c6b6ae2a4d17fb3db237ae4bf0860462c8b9b65d6ee8853c688f8d1686e->enter($__internal_005a7c6b6ae2a4d17fb3db237ae4bf0860462c8b9b65d6ee8853c688f8d1686e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_64b6d34d195aaabcca44c9e11299589c98a9ae3a2083386602553545c1fa9212 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64b6d34d195aaabcca44c9e11299589c98a9ae3a2083386602553545c1fa9212->enter($__internal_64b6d34d195aaabcca44c9e11299589c98a9ae3a2083386602553545c1fa9212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_64b6d34d195aaabcca44c9e11299589c98a9ae3a2083386602553545c1fa9212->leave($__internal_64b6d34d195aaabcca44c9e11299589c98a9ae3a2083386602553545c1fa9212_prof);

        
        $__internal_005a7c6b6ae2a4d17fb3db237ae4bf0860462c8b9b65d6ee8853c688f8d1686e->leave($__internal_005a7c6b6ae2a4d17fb3db237ae4bf0860462c8b9b65d6ee8853c688f8d1686e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
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

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
