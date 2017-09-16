<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_2e7c5516c9361ab4acdbd18312b6b3f64f8c4cf9bf7b5b13fa29020bb338db52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b4a3629e10e3e536b31ab2ff905fb80a9235d97b2df64dac021baa5e85e01360 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4a3629e10e3e536b31ab2ff905fb80a9235d97b2df64dac021baa5e85e01360->enter($__internal_b4a3629e10e3e536b31ab2ff905fb80a9235d97b2df64dac021baa5e85e01360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_f82434de7508daae6edddc1e6fae1a92439bce746708bfd45891adfe979ff361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f82434de7508daae6edddc1e6fae1a92439bce746708bfd45891adfe979ff361->enter($__internal_f82434de7508daae6edddc1e6fae1a92439bce746708bfd45891adfe979ff361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4a3629e10e3e536b31ab2ff905fb80a9235d97b2df64dac021baa5e85e01360->leave($__internal_b4a3629e10e3e536b31ab2ff905fb80a9235d97b2df64dac021baa5e85e01360_prof);

        
        $__internal_f82434de7508daae6edddc1e6fae1a92439bce746708bfd45891adfe979ff361->leave($__internal_f82434de7508daae6edddc1e6fae1a92439bce746708bfd45891adfe979ff361_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8e27f8ff6a8879c4c56fb753a280d5b7279aee1e57366b683d1d7550d25dbbda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e27f8ff6a8879c4c56fb753a280d5b7279aee1e57366b683d1d7550d25dbbda->enter($__internal_8e27f8ff6a8879c4c56fb753a280d5b7279aee1e57366b683d1d7550d25dbbda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6e9edaff371f93d6786ac6f5bf3d32ef5be56e7c547c8f77b28c028040e3736f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e9edaff371f93d6786ac6f5bf3d32ef5be56e7c547c8f77b28c028040e3736f->enter($__internal_6e9edaff371f93d6786ac6f5bf3d32ef5be56e7c547c8f77b28c028040e3736f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_6e9edaff371f93d6786ac6f5bf3d32ef5be56e7c547c8f77b28c028040e3736f->leave($__internal_6e9edaff371f93d6786ac6f5bf3d32ef5be56e7c547c8f77b28c028040e3736f_prof);

        
        $__internal_8e27f8ff6a8879c4c56fb753a280d5b7279aee1e57366b683d1d7550d25dbbda->leave($__internal_8e27f8ff6a8879c4c56fb753a280d5b7279aee1e57366b683d1d7550d25dbbda_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\change_password.html.twig");
    }
}
