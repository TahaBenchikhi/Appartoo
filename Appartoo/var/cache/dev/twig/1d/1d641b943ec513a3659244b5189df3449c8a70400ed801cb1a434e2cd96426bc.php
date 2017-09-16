<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_765d92e4f2378ac8f160167b5c9d732c1ca1b0a150c1eee8d34d81d61385fd5c extends Twig_Template
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
        $__internal_6f38468c1b0afea8a4ab64109dca5b78c04f7415bdcdcd33cef9e9cc264ec70b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f38468c1b0afea8a4ab64109dca5b78c04f7415bdcdcd33cef9e9cc264ec70b->enter($__internal_6f38468c1b0afea8a4ab64109dca5b78c04f7415bdcdcd33cef9e9cc264ec70b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_8b53264a4c26e4803f9817ba8fd7bb215bfb2dcae87a63479f975ea9afefc0ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b53264a4c26e4803f9817ba8fd7bb215bfb2dcae87a63479f975ea9afefc0ed->enter($__internal_8b53264a4c26e4803f9817ba8fd7bb215bfb2dcae87a63479f975ea9afefc0ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_6f38468c1b0afea8a4ab64109dca5b78c04f7415bdcdcd33cef9e9cc264ec70b->leave($__internal_6f38468c1b0afea8a4ab64109dca5b78c04f7415bdcdcd33cef9e9cc264ec70b_prof);

        
        $__internal_8b53264a4c26e4803f9817ba8fd7bb215bfb2dcae87a63479f975ea9afefc0ed->leave($__internal_8b53264a4c26e4803f9817ba8fd7bb215bfb2dcae87a63479f975ea9afefc0ed_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
