<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_4c6bcb25bc64029199b697338b5611ac0863b002411388b69b61549bc56dcd9c extends Twig_Template
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
        $__internal_d8593e5d575d9c0a0bf8f4b33c994c27cb44a21b2c5f4b0d637ad9deed69f0b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8593e5d575d9c0a0bf8f4b33c994c27cb44a21b2c5f4b0d637ad9deed69f0b0->enter($__internal_d8593e5d575d9c0a0bf8f4b33c994c27cb44a21b2c5f4b0d637ad9deed69f0b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_5b00ca7b433157ac17b55f7167a0327916e33eee83f10e815c91b222f95eb7d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b00ca7b433157ac17b55f7167a0327916e33eee83f10e815c91b222f95eb7d2->enter($__internal_5b00ca7b433157ac17b55f7167a0327916e33eee83f10e815c91b222f95eb7d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d8593e5d575d9c0a0bf8f4b33c994c27cb44a21b2c5f4b0d637ad9deed69f0b0->leave($__internal_d8593e5d575d9c0a0bf8f4b33c994c27cb44a21b2c5f4b0d637ad9deed69f0b0_prof);

        
        $__internal_5b00ca7b433157ac17b55f7167a0327916e33eee83f10e815c91b222f95eb7d2->leave($__internal_5b00ca7b433157ac17b55f7167a0327916e33eee83f10e815c91b222f95eb7d2_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c33f6bb70d5dd58ad609bcc43194a4f5335ac728fb6725005b11d36e8fd8488f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c33f6bb70d5dd58ad609bcc43194a4f5335ac728fb6725005b11d36e8fd8488f->enter($__internal_c33f6bb70d5dd58ad609bcc43194a4f5335ac728fb6725005b11d36e8fd8488f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3042cd3a124369d501fcd374eb8c5caeab1e543f97ad300ac19200c321cf84b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3042cd3a124369d501fcd374eb8c5caeab1e543f97ad300ac19200c321cf84b8->enter($__internal_3042cd3a124369d501fcd374eb8c5caeab1e543f97ad300ac19200c321cf84b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3042cd3a124369d501fcd374eb8c5caeab1e543f97ad300ac19200c321cf84b8->leave($__internal_3042cd3a124369d501fcd374eb8c5caeab1e543f97ad300ac19200c321cf84b8_prof);

        
        $__internal_c33f6bb70d5dd58ad609bcc43194a4f5335ac728fb6725005b11d36e8fd8488f->leave($__internal_c33f6bb70d5dd58ad609bcc43194a4f5335ac728fb6725005b11d36e8fd8488f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
