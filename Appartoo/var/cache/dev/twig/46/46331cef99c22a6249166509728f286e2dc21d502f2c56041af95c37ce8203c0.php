<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_d9b96ce23200d12f0042b91405cfdfd46fb6c9050a3a9e9f4fd477334b604b86 extends Twig_Template
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
        $__internal_8f3820dc4c6ac7dcca31de8141ab46d5e858bcd80d12ad09beed1d5179818554 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f3820dc4c6ac7dcca31de8141ab46d5e858bcd80d12ad09beed1d5179818554->enter($__internal_8f3820dc4c6ac7dcca31de8141ab46d5e858bcd80d12ad09beed1d5179818554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_d53ba743539708f032cbdb2ba92de7b86291adf1498adc90676de26ecc55cf46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d53ba743539708f032cbdb2ba92de7b86291adf1498adc90676de26ecc55cf46->enter($__internal_d53ba743539708f032cbdb2ba92de7b86291adf1498adc90676de26ecc55cf46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_8f3820dc4c6ac7dcca31de8141ab46d5e858bcd80d12ad09beed1d5179818554->leave($__internal_8f3820dc4c6ac7dcca31de8141ab46d5e858bcd80d12ad09beed1d5179818554_prof);

        
        $__internal_d53ba743539708f032cbdb2ba92de7b86291adf1498adc90676de26ecc55cf46->leave($__internal_d53ba743539708f032cbdb2ba92de7b86291adf1498adc90676de26ecc55cf46_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
