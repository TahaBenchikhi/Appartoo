<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_6e97e1a1efa5c479872a56c482c9510c381a38039a4fd43a66f27e564807af7a extends Twig_Template
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
        $__internal_1f0bbb56920b4b8cadf540c5bb69c040993ef3b0a225ce97e5987674eb8bc538 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f0bbb56920b4b8cadf540c5bb69c040993ef3b0a225ce97e5987674eb8bc538->enter($__internal_1f0bbb56920b4b8cadf540c5bb69c040993ef3b0a225ce97e5987674eb8bc538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_de564300b28107187b2809f194653ca466b11744ae68ef9d058067456568a6d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de564300b28107187b2809f194653ca466b11744ae68ef9d058067456568a6d3->enter($__internal_de564300b28107187b2809f194653ca466b11744ae68ef9d058067456568a6d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_1f0bbb56920b4b8cadf540c5bb69c040993ef3b0a225ce97e5987674eb8bc538->leave($__internal_1f0bbb56920b4b8cadf540c5bb69c040993ef3b0a225ce97e5987674eb8bc538_prof);

        
        $__internal_de564300b28107187b2809f194653ca466b11744ae68ef9d058067456568a6d3->leave($__internal_de564300b28107187b2809f194653ca466b11744ae68ef9d058067456568a6d3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
