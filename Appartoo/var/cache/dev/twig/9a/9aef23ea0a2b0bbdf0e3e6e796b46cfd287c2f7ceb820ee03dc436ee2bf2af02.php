<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_58c4679a7f5365ff9f08ac70de857d66386d26934acb20f6c0eaf5006a7a16c8 extends Twig_Template
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
        $__internal_8c26f39dcc002d09585a7dceb48610acff30c0766afd3430d4d423f79d77bab4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c26f39dcc002d09585a7dceb48610acff30c0766afd3430d4d423f79d77bab4->enter($__internal_8c26f39dcc002d09585a7dceb48610acff30c0766afd3430d4d423f79d77bab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_f4dda32f2714cd06e1703536510fe0d12be7c762585e9e5f96f3aa875bca7004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4dda32f2714cd06e1703536510fe0d12be7c762585e9e5f96f3aa875bca7004->enter($__internal_f4dda32f2714cd06e1703536510fe0d12be7c762585e9e5f96f3aa875bca7004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_8c26f39dcc002d09585a7dceb48610acff30c0766afd3430d4d423f79d77bab4->leave($__internal_8c26f39dcc002d09585a7dceb48610acff30c0766afd3430d4d423f79d77bab4_prof);

        
        $__internal_f4dda32f2714cd06e1703536510fe0d12be7c762585e9e5f96f3aa875bca7004->leave($__internal_f4dda32f2714cd06e1703536510fe0d12be7c762585e9e5f96f3aa875bca7004_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
