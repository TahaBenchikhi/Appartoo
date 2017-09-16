<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_45b33dfe01eb19332e88ed5fbfb3c7741313c13cc35bf6df0c62877e6ed675fc extends Twig_Template
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
        $__internal_f4fca4bbff4e06d3a43943fa454d1d378b82aaae4c2a083f4b76c77994e5fce3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4fca4bbff4e06d3a43943fa454d1d378b82aaae4c2a083f4b76c77994e5fce3->enter($__internal_f4fca4bbff4e06d3a43943fa454d1d378b82aaae4c2a083f4b76c77994e5fce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_e84732cdcf61028050b20007510f40aa471fcf8ec5333581c39823592b2e1f5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e84732cdcf61028050b20007510f40aa471fcf8ec5333581c39823592b2e1f5b->enter($__internal_e84732cdcf61028050b20007510f40aa471fcf8ec5333581c39823592b2e1f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_f4fca4bbff4e06d3a43943fa454d1d378b82aaae4c2a083f4b76c77994e5fce3->leave($__internal_f4fca4bbff4e06d3a43943fa454d1d378b82aaae4c2a083f4b76c77994e5fce3_prof);

        
        $__internal_e84732cdcf61028050b20007510f40aa471fcf8ec5333581c39823592b2e1f5b->leave($__internal_e84732cdcf61028050b20007510f40aa471fcf8ec5333581c39823592b2e1f5b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
