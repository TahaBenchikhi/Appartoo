<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_cdd8d6628fd3c932f591aa61667c34e34d97e003e7d7fdc46a92c9ce96cc274a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ff57875f06f55b7beb5920c198d6b0de1ad2f725eff3ff204a67a6d97985387 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ff57875f06f55b7beb5920c198d6b0de1ad2f725eff3ff204a67a6d97985387->enter($__internal_8ff57875f06f55b7beb5920c198d6b0de1ad2f725eff3ff204a67a6d97985387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_e32065c13af80d4317911d25c65ea8e2ab5573bf5b4daa6cd8091313173951f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e32065c13af80d4317911d25c65ea8e2ab5573bf5b4daa6cd8091313173951f3->enter($__internal_e32065c13af80d4317911d25c65ea8e2ab5573bf5b4daa6cd8091313173951f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_8ff57875f06f55b7beb5920c198d6b0de1ad2f725eff3ff204a67a6d97985387->leave($__internal_8ff57875f06f55b7beb5920c198d6b0de1ad2f725eff3ff204a67a6d97985387_prof);

        
        $__internal_e32065c13af80d4317911d25c65ea8e2ab5573bf5b4daa6cd8091313173951f3->leave($__internal_e32065c13af80d4317911d25c65ea8e2ab5573bf5b4daa6cd8091313173951f3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
