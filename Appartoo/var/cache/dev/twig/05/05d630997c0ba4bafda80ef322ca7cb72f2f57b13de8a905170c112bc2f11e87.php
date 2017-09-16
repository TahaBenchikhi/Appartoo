<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_ca57e6366926e051b4ceb7738f9793bf6cc69e4e3d9172170e9fd0acf8a7ed05 extends Twig_Template
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
        $__internal_a041333f9747113ddd5439f9b1b373f62d435033e67d3da5275ffe398f9dbbdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a041333f9747113ddd5439f9b1b373f62d435033e67d3da5275ffe398f9dbbdf->enter($__internal_a041333f9747113ddd5439f9b1b373f62d435033e67d3da5275ffe398f9dbbdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_4311a838186d7a289126970ec03cf640f4f10e5d45da5c1ea77bac4b42f6d993 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4311a838186d7a289126970ec03cf640f4f10e5d45da5c1ea77bac4b42f6d993->enter($__internal_4311a838186d7a289126970ec03cf640f4f10e5d45da5c1ea77bac4b42f6d993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_a041333f9747113ddd5439f9b1b373f62d435033e67d3da5275ffe398f9dbbdf->leave($__internal_a041333f9747113ddd5439f9b1b373f62d435033e67d3da5275ffe398f9dbbdf_prof);

        
        $__internal_4311a838186d7a289126970ec03cf640f4f10e5d45da5c1ea77bac4b42f6d993->leave($__internal_4311a838186d7a289126970ec03cf640f4f10e5d45da5c1ea77bac4b42f6d993_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
