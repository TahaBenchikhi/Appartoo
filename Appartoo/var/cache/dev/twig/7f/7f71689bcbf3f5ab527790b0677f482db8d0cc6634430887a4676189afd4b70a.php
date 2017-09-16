<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_f80c51380cc34deb9574d1c29289020d50b23bd4a383f659a63b28b093a58486 extends Twig_Template
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
        $__internal_e2292bb04220b5d6a1c36e0c1d5eeaec6fe70d948018be48355e001f3c543bfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2292bb04220b5d6a1c36e0c1d5eeaec6fe70d948018be48355e001f3c543bfc->enter($__internal_e2292bb04220b5d6a1c36e0c1d5eeaec6fe70d948018be48355e001f3c543bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_b1239694805d399bedafc68e1f7f7910707ca69ff75b860779a957aca368d524 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1239694805d399bedafc68e1f7f7910707ca69ff75b860779a957aca368d524->enter($__internal_b1239694805d399bedafc68e1f7f7910707ca69ff75b860779a957aca368d524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_e2292bb04220b5d6a1c36e0c1d5eeaec6fe70d948018be48355e001f3c543bfc->leave($__internal_e2292bb04220b5d6a1c36e0c1d5eeaec6fe70d948018be48355e001f3c543bfc_prof);

        
        $__internal_b1239694805d399bedafc68e1f7f7910707ca69ff75b860779a957aca368d524->leave($__internal_b1239694805d399bedafc68e1f7f7910707ca69ff75b860779a957aca368d524_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
