<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_4bbfcb0672c2d9c51e869e65d511d5bd99dc603b05e9cbbc3e4311d539bf7d53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_5c1a6db35cf0e2dd085c8ad9e2795386f80e77c8f23d30baf681bacbc3e1eaa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c1a6db35cf0e2dd085c8ad9e2795386f80e77c8f23d30baf681bacbc3e1eaa4->enter($__internal_5c1a6db35cf0e2dd085c8ad9e2795386f80e77c8f23d30baf681bacbc3e1eaa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_5c630807361c0e80aa9103434e5703f443efdbdaf401e951241815561aebf4c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c630807361c0e80aa9103434e5703f443efdbdaf401e951241815561aebf4c6->enter($__internal_5c630807361c0e80aa9103434e5703f443efdbdaf401e951241815561aebf4c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c1a6db35cf0e2dd085c8ad9e2795386f80e77c8f23d30baf681bacbc3e1eaa4->leave($__internal_5c1a6db35cf0e2dd085c8ad9e2795386f80e77c8f23d30baf681bacbc3e1eaa4_prof);

        
        $__internal_5c630807361c0e80aa9103434e5703f443efdbdaf401e951241815561aebf4c6->leave($__internal_5c630807361c0e80aa9103434e5703f443efdbdaf401e951241815561aebf4c6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f41d4519ed5875c21090b114d041f84aefbf450273dad52305e8d9a8fd131302 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f41d4519ed5875c21090b114d041f84aefbf450273dad52305e8d9a8fd131302->enter($__internal_f41d4519ed5875c21090b114d041f84aefbf450273dad52305e8d9a8fd131302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0dab0c6377bdf2569e6a38aeb6db2baedc35be57ed0342ec62b7b6876d6678c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dab0c6377bdf2569e6a38aeb6db2baedc35be57ed0342ec62b7b6876d6678c0->enter($__internal_0dab0c6377bdf2569e6a38aeb6db2baedc35be57ed0342ec62b7b6876d6678c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_0dab0c6377bdf2569e6a38aeb6db2baedc35be57ed0342ec62b7b6876d6678c0->leave($__internal_0dab0c6377bdf2569e6a38aeb6db2baedc35be57ed0342ec62b7b6876d6678c0_prof);

        
        $__internal_f41d4519ed5875c21090b114d041f84aefbf450273dad52305e8d9a8fd131302->leave($__internal_f41d4519ed5875c21090b114d041f84aefbf450273dad52305e8d9a8fd131302_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
