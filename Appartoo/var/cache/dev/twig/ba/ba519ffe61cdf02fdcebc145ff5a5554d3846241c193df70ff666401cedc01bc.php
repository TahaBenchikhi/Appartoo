<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_20ba3b2b4dd2a1442de899007c26160e2fb3d3593b152bbc9ad5190b91eb0ddb extends Twig_Template
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
        $__internal_2b5cea67d1cf381eed1ef2a63523b39b0a6163a0d7bd7134f8a1d67944d49eef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b5cea67d1cf381eed1ef2a63523b39b0a6163a0d7bd7134f8a1d67944d49eef->enter($__internal_2b5cea67d1cf381eed1ef2a63523b39b0a6163a0d7bd7134f8a1d67944d49eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_5294a340677399a54197cae627c13d33e9824c8faaff96bdee6379ad8230088b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5294a340677399a54197cae627c13d33e9824c8faaff96bdee6379ad8230088b->enter($__internal_5294a340677399a54197cae627c13d33e9824c8faaff96bdee6379ad8230088b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_2b5cea67d1cf381eed1ef2a63523b39b0a6163a0d7bd7134f8a1d67944d49eef->leave($__internal_2b5cea67d1cf381eed1ef2a63523b39b0a6163a0d7bd7134f8a1d67944d49eef_prof);

        
        $__internal_5294a340677399a54197cae627c13d33e9824c8faaff96bdee6379ad8230088b->leave($__internal_5294a340677399a54197cae627c13d33e9824c8faaff96bdee6379ad8230088b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
