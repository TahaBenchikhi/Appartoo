<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_a727adb1283372f948a178b5998b1d8fc232f21959d7e93fda04f2843acf6c6f extends Twig_Template
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
        $__internal_2be1facfd61cd0388bff70229af04c8b8aeba7d2cf53ee096830843c2125344f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2be1facfd61cd0388bff70229af04c8b8aeba7d2cf53ee096830843c2125344f->enter($__internal_2be1facfd61cd0388bff70229af04c8b8aeba7d2cf53ee096830843c2125344f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_a52744efec077af3efbad8516680dd39c3dab1631062ca61b8b8bba450ea2a12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a52744efec077af3efbad8516680dd39c3dab1631062ca61b8b8bba450ea2a12->enter($__internal_a52744efec077af3efbad8516680dd39c3dab1631062ca61b8b8bba450ea2a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_2be1facfd61cd0388bff70229af04c8b8aeba7d2cf53ee096830843c2125344f->leave($__internal_2be1facfd61cd0388bff70229af04c8b8aeba7d2cf53ee096830843c2125344f_prof);

        
        $__internal_a52744efec077af3efbad8516680dd39c3dab1631062ca61b8b8bba450ea2a12->leave($__internal_a52744efec077af3efbad8516680dd39c3dab1631062ca61b8b8bba450ea2a12_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
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
", "@Twig/Exception/error.txt.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
