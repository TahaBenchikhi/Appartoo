<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_4b463810cf4b16d232ca485b9cd12cc931db52d9d5ad1ba1e244d9d5e012aa74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_5d5eb9ea9aa9f4ab08dbd65393c33722d6bddd9460b92a9177cbcdbeaa0b7578 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d5eb9ea9aa9f4ab08dbd65393c33722d6bddd9460b92a9177cbcdbeaa0b7578->enter($__internal_5d5eb9ea9aa9f4ab08dbd65393c33722d6bddd9460b92a9177cbcdbeaa0b7578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_1a24d1c5bc449a83b0c0ecab69ef2113e8a2d390600e55236fb89f93c8591d6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a24d1c5bc449a83b0c0ecab69ef2113e8a2d390600e55236fb89f93c8591d6d->enter($__internal_1a24d1c5bc449a83b0c0ecab69ef2113e8a2d390600e55236fb89f93c8591d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d5eb9ea9aa9f4ab08dbd65393c33722d6bddd9460b92a9177cbcdbeaa0b7578->leave($__internal_5d5eb9ea9aa9f4ab08dbd65393c33722d6bddd9460b92a9177cbcdbeaa0b7578_prof);

        
        $__internal_1a24d1c5bc449a83b0c0ecab69ef2113e8a2d390600e55236fb89f93c8591d6d->leave($__internal_1a24d1c5bc449a83b0c0ecab69ef2113e8a2d390600e55236fb89f93c8591d6d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8048d67b31b2ccf15adf4fdf299b5adc20c8ac144a857653af1aaa0b94777bb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8048d67b31b2ccf15adf4fdf299b5adc20c8ac144a857653af1aaa0b94777bb6->enter($__internal_8048d67b31b2ccf15adf4fdf299b5adc20c8ac144a857653af1aaa0b94777bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7e5fd00f0fadf2f691a1454239b043f67814a2ae6ddf22af64908a21f704a7e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e5fd00f0fadf2f691a1454239b043f67814a2ae6ddf22af64908a21f704a7e9->enter($__internal_7e5fd00f0fadf2f691a1454239b043f67814a2ae6ddf22af64908a21f704a7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_7e5fd00f0fadf2f691a1454239b043f67814a2ae6ddf22af64908a21f704a7e9->leave($__internal_7e5fd00f0fadf2f691a1454239b043f67814a2ae6ddf22af64908a21f704a7e9_prof);

        
        $__internal_8048d67b31b2ccf15adf4fdf299b5adc20c8ac144a857653af1aaa0b94777bb6->leave($__internal_8048d67b31b2ccf15adf4fdf299b5adc20c8ac144a857653af1aaa0b94777bb6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
", "FOSUserBundle:ChangePassword:change_password.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\friendsofsymfony\\user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
