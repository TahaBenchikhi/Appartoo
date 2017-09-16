<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_381891c981c9ce4cdeb2e68fb9bbd8652f3dad17e7d594e7f4c812f2aa2ef5c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
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
        $__internal_f03b6011fdafd4dd3bd94f98b4c8b240ebaf9b7da5351cac71c88e30ad5795ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f03b6011fdafd4dd3bd94f98b4c8b240ebaf9b7da5351cac71c88e30ad5795ba->enter($__internal_f03b6011fdafd4dd3bd94f98b4c8b240ebaf9b7da5351cac71c88e30ad5795ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_059be1afec3862387a4ddb319d7a39654f903752fcf35d66f150a90e5346dfcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_059be1afec3862387a4ddb319d7a39654f903752fcf35d66f150a90e5346dfcc->enter($__internal_059be1afec3862387a4ddb319d7a39654f903752fcf35d66f150a90e5346dfcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f03b6011fdafd4dd3bd94f98b4c8b240ebaf9b7da5351cac71c88e30ad5795ba->leave($__internal_f03b6011fdafd4dd3bd94f98b4c8b240ebaf9b7da5351cac71c88e30ad5795ba_prof);

        
        $__internal_059be1afec3862387a4ddb319d7a39654f903752fcf35d66f150a90e5346dfcc->leave($__internal_059be1afec3862387a4ddb319d7a39654f903752fcf35d66f150a90e5346dfcc_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_7e7136f4ab306b717635fcdbaac93855225d5e65386de94dc39b6f1d305cf6d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e7136f4ab306b717635fcdbaac93855225d5e65386de94dc39b6f1d305cf6d8->enter($__internal_7e7136f4ab306b717635fcdbaac93855225d5e65386de94dc39b6f1d305cf6d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_dcc32802736b10e0cb0b505749b378649f10b898598578779f3986b50008aa3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcc32802736b10e0cb0b505749b378649f10b898598578779f3986b50008aa3b->enter($__internal_dcc32802736b10e0cb0b505749b378649f10b898598578779f3986b50008aa3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_dcc32802736b10e0cb0b505749b378649f10b898598578779f3986b50008aa3b->leave($__internal_dcc32802736b10e0cb0b505749b378649f10b898598578779f3986b50008aa3b_prof);

        
        $__internal_7e7136f4ab306b717635fcdbaac93855225d5e65386de94dc39b6f1d305cf6d8->leave($__internal_7e7136f4ab306b717635fcdbaac93855225d5e65386de94dc39b6f1d305cf6d8_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ebe6e1c88b0022fa5b0f4609eecf77821665ba85115067acae4c20056f85ad64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebe6e1c88b0022fa5b0f4609eecf77821665ba85115067acae4c20056f85ad64->enter($__internal_ebe6e1c88b0022fa5b0f4609eecf77821665ba85115067acae4c20056f85ad64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c40c339be4043381b576307906e3e5074a4441b3a19d44153ce496d83d35e8ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c40c339be4043381b576307906e3e5074a4441b3a19d44153ce496d83d35e8ab->enter($__internal_c40c339be4043381b576307906e3e5074a4441b3a19d44153ce496d83d35e8ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_c40c339be4043381b576307906e3e5074a4441b3a19d44153ce496d83d35e8ab->leave($__internal_c40c339be4043381b576307906e3e5074a4441b3a19d44153ce496d83d35e8ab_prof);

        
        $__internal_ebe6e1c88b0022fa5b0f4609eecf77821665ba85115067acae4c20056f85ad64->leave($__internal_ebe6e1c88b0022fa5b0f4609eecf77821665ba85115067acae4c20056f85ad64_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
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
", "@WebProfiler/Profiler/info.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
