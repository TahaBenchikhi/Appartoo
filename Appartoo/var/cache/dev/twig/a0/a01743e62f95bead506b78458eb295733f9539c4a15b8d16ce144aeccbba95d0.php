<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_d71835415ce597d312d6f6ddba2b5bfd71c0672dc36e3b2c75ae3d2b91f5ea2b extends Twig_Template
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
        $__internal_9ea13f074b1741ed6e51a5e78fe5925890ebc4fc60e433cc83cdc516cfae6429 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ea13f074b1741ed6e51a5e78fe5925890ebc4fc60e433cc83cdc516cfae6429->enter($__internal_9ea13f074b1741ed6e51a5e78fe5925890ebc4fc60e433cc83cdc516cfae6429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_06b2ac795befb150b03a50a4c4b369fe1be9bc9f8c5c200b4737747e018553f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06b2ac795befb150b03a50a4c4b369fe1be9bc9f8c5c200b4737747e018553f8->enter($__internal_06b2ac795befb150b03a50a4c4b369fe1be9bc9f8c5c200b4737747e018553f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_9ea13f074b1741ed6e51a5e78fe5925890ebc4fc60e433cc83cdc516cfae6429->leave($__internal_9ea13f074b1741ed6e51a5e78fe5925890ebc4fc60e433cc83cdc516cfae6429_prof);

        
        $__internal_06b2ac795befb150b03a50a4c4b369fe1be9bc9f8c5c200b4737747e018553f8->leave($__internal_06b2ac795befb150b03a50a4c4b369fe1be9bc9f8c5c200b4737747e018553f8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
