<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_c1bb13abe6f590a619e4fc33cde89c0c9f141f5f6d149046d048fdb470c4a47b extends Twig_Template
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
        $__internal_ae2e76844a206aa64fe38cee6b57166f09dbaadaeb98b5d6a36e041239bb4476 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae2e76844a206aa64fe38cee6b57166f09dbaadaeb98b5d6a36e041239bb4476->enter($__internal_ae2e76844a206aa64fe38cee6b57166f09dbaadaeb98b5d6a36e041239bb4476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_c5438fd63f6f6dec22d010c40511123481d1619448a579ba3221e971d38716cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5438fd63f6f6dec22d010c40511123481d1619448a579ba3221e971d38716cb->enter($__internal_c5438fd63f6f6dec22d010c40511123481d1619448a579ba3221e971d38716cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_ae2e76844a206aa64fe38cee6b57166f09dbaadaeb98b5d6a36e041239bb4476->leave($__internal_ae2e76844a206aa64fe38cee6b57166f09dbaadaeb98b5d6a36e041239bb4476_prof);

        
        $__internal_c5438fd63f6f6dec22d010c40511123481d1619448a579ba3221e971d38716cb->leave($__internal_c5438fd63f6f6dec22d010c40511123481d1619448a579ba3221e971d38716cb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
