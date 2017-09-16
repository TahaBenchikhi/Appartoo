<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_18cb62751a647ab21cf36348c09ff029a1cce9ef2c8cb082dc2cf1827cd8bd6f extends Twig_Template
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
        $__internal_e6434dccd0a46c8b31f012d25056fc47314efbd408b748e9a25c35989bfbe1b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6434dccd0a46c8b31f012d25056fc47314efbd408b748e9a25c35989bfbe1b6->enter($__internal_e6434dccd0a46c8b31f012d25056fc47314efbd408b748e9a25c35989bfbe1b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_e60d924b4c022760d42d8d5e289a6a1aadf10fa25c5467b3ab658383eb5d4cef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e60d924b4c022760d42d8d5e289a6a1aadf10fa25c5467b3ab658383eb5d4cef->enter($__internal_e60d924b4c022760d42d8d5e289a6a1aadf10fa25c5467b3ab658383eb5d4cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_e6434dccd0a46c8b31f012d25056fc47314efbd408b748e9a25c35989bfbe1b6->leave($__internal_e6434dccd0a46c8b31f012d25056fc47314efbd408b748e9a25c35989bfbe1b6_prof);

        
        $__internal_e60d924b4c022760d42d8d5e289a6a1aadf10fa25c5467b3ab658383eb5d4cef->leave($__internal_e60d924b4c022760d42d8d5e289a6a1aadf10fa25c5467b3ab658383eb5d4cef_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
