<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_a5e9a2548982c5219f7a508f6e3634abeb61eaa0b1949553c202d5fb1af35a8f extends Twig_Template
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
        $__internal_5a06835666033f7b4c4a93ecee5680b2d97c3a8f49ec634e6b369ac4a9988ffd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a06835666033f7b4c4a93ecee5680b2d97c3a8f49ec634e6b369ac4a9988ffd->enter($__internal_5a06835666033f7b4c4a93ecee5680b2d97c3a8f49ec634e6b369ac4a9988ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_d6ccd0a791adb7c3777e9e52551c205a878d9d7221ba2bfef42e7b054e83cabc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6ccd0a791adb7c3777e9e52551c205a878d9d7221ba2bfef42e7b054e83cabc->enter($__internal_d6ccd0a791adb7c3777e9e52551c205a878d9d7221ba2bfef42e7b054e83cabc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_5a06835666033f7b4c4a93ecee5680b2d97c3a8f49ec634e6b369ac4a9988ffd->leave($__internal_5a06835666033f7b4c4a93ecee5680b2d97c3a8f49ec634e6b369ac4a9988ffd_prof);

        
        $__internal_d6ccd0a791adb7c3777e9e52551c205a878d9d7221ba2bfef42e7b054e83cabc->leave($__internal_d6ccd0a791adb7c3777e9e52551c205a878d9d7221ba2bfef42e7b054e83cabc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
