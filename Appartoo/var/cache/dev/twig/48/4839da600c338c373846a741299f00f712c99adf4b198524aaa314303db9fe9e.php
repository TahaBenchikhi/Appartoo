<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_580342ba5d8e36206cfb8dfd9a291e3ec13c68540f404a883ff71e893e36f332 extends Twig_Template
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
        $__internal_f6494c9cfe5022ae17bd76d862bb4cdf7904afd838f830624a1e20dc355bdf66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6494c9cfe5022ae17bd76d862bb4cdf7904afd838f830624a1e20dc355bdf66->enter($__internal_f6494c9cfe5022ae17bd76d862bb4cdf7904afd838f830624a1e20dc355bdf66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_ff184320c3fb2d30c16883f535eda342945c04e2c0bd182f5221b93159a8b2ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff184320c3fb2d30c16883f535eda342945c04e2c0bd182f5221b93159a8b2ad->enter($__internal_ff184320c3fb2d30c16883f535eda342945c04e2c0bd182f5221b93159a8b2ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_f6494c9cfe5022ae17bd76d862bb4cdf7904afd838f830624a1e20dc355bdf66->leave($__internal_f6494c9cfe5022ae17bd76d862bb4cdf7904afd838f830624a1e20dc355bdf66_prof);

        
        $__internal_ff184320c3fb2d30c16883f535eda342945c04e2c0bd182f5221b93159a8b2ad->leave($__internal_ff184320c3fb2d30c16883f535eda342945c04e2c0bd182f5221b93159a8b2ad_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.atom.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
