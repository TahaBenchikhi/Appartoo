<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_0bb07ad31854661362a1ae856741bbc7061c2d26b7bdebb7cfee771331f6bdbd extends Twig_Template
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
        $__internal_6534419ffe318df667c6c381efa82396000919f9204de07ee024db23b4a5dc6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6534419ffe318df667c6c381efa82396000919f9204de07ee024db23b4a5dc6b->enter($__internal_6534419ffe318df667c6c381efa82396000919f9204de07ee024db23b4a5dc6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_2f3304635ff2c633032d97ff7f9be606348a027f0b1da1b80a8ef8e53c4b8e50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f3304635ff2c633032d97ff7f9be606348a027f0b1da1b80a8ef8e53c4b8e50->enter($__internal_2f3304635ff2c633032d97ff7f9be606348a027f0b1da1b80a8ef8e53c4b8e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_6534419ffe318df667c6c381efa82396000919f9204de07ee024db23b4a5dc6b->leave($__internal_6534419ffe318df667c6c381efa82396000919f9204de07ee024db23b4a5dc6b_prof);

        
        $__internal_2f3304635ff2c633032d97ff7f9be606348a027f0b1da1b80a8ef8e53c4b8e50->leave($__internal_2f3304635ff2c633032d97ff7f9be606348a027f0b1da1b80a8ef8e53c4b8e50_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
