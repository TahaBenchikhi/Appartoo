<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_cc4566b22a94cdb61bcf886d5a9c1e4a9352ed39bf8fd66e89a9cab28636bc6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c43ab0fff16a1cf9d83584afc7da2fd41839e6a10c790bfec9ba4ac6c78dc101 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c43ab0fff16a1cf9d83584afc7da2fd41839e6a10c790bfec9ba4ac6c78dc101->enter($__internal_c43ab0fff16a1cf9d83584afc7da2fd41839e6a10c790bfec9ba4ac6c78dc101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_ec0990929bf45288c507ec34a09608b3316e53d0ce67a2f4881de0b224985c96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec0990929bf45288c507ec34a09608b3316e53d0ce67a2f4881de0b224985c96->enter($__internal_ec0990929bf45288c507ec34a09608b3316e53d0ce67a2f4881de0b224985c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c43ab0fff16a1cf9d83584afc7da2fd41839e6a10c790bfec9ba4ac6c78dc101->leave($__internal_c43ab0fff16a1cf9d83584afc7da2fd41839e6a10c790bfec9ba4ac6c78dc101_prof);

        
        $__internal_ec0990929bf45288c507ec34a09608b3316e53d0ce67a2f4881de0b224985c96->leave($__internal_ec0990929bf45288c507ec34a09608b3316e53d0ce67a2f4881de0b224985c96_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_dc16694f9513b61668984805b285e652794332bbe23c41b13c5c1dbc6fcb8f63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc16694f9513b61668984805b285e652794332bbe23c41b13c5c1dbc6fcb8f63->enter($__internal_dc16694f9513b61668984805b285e652794332bbe23c41b13c5c1dbc6fcb8f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3a36ff0e44f75dd8ddc2124b6720369ece54e12a0ebe01db780ccff2ecabf4aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a36ff0e44f75dd8ddc2124b6720369ece54e12a0ebe01db780ccff2ecabf4aa->enter($__internal_3a36ff0e44f75dd8ddc2124b6720369ece54e12a0ebe01db780ccff2ecabf4aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3a36ff0e44f75dd8ddc2124b6720369ece54e12a0ebe01db780ccff2ecabf4aa->leave($__internal_3a36ff0e44f75dd8ddc2124b6720369ece54e12a0ebe01db780ccff2ecabf4aa_prof);

        
        $__internal_dc16694f9513b61668984805b285e652794332bbe23c41b13c5c1dbc6fcb8f63->leave($__internal_dc16694f9513b61668984805b285e652794332bbe23c41b13c5c1dbc6fcb8f63_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
