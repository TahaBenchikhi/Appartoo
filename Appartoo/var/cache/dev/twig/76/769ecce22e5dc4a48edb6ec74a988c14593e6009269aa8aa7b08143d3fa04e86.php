<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_c67818556a4512d0dccbd4d42c7ab7bb34200511f30ca0e3741d125103a79061 extends Twig_Template
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
        $__internal_b0da21d793084c4035a71630a68049672be79b19e206a02e220780847e7ef2f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0da21d793084c4035a71630a68049672be79b19e206a02e220780847e7ef2f4->enter($__internal_b0da21d793084c4035a71630a68049672be79b19e206a02e220780847e7ef2f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_62f52e739b510dcb5735b9827314929f3df25681af0e77eaea640bdde1f426d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62f52e739b510dcb5735b9827314929f3df25681af0e77eaea640bdde1f426d3->enter($__internal_62f52e739b510dcb5735b9827314929f3df25681af0e77eaea640bdde1f426d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_b0da21d793084c4035a71630a68049672be79b19e206a02e220780847e7ef2f4->leave($__internal_b0da21d793084c4035a71630a68049672be79b19e206a02e220780847e7ef2f4_prof);

        
        $__internal_62f52e739b510dcb5735b9827314929f3df25681af0e77eaea640bdde1f426d3->leave($__internal_62f52e739b510dcb5735b9827314929f3df25681af0e77eaea640bdde1f426d3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
