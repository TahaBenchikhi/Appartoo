<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_129a8aa62d96595d31436c75bc31817dd3c617f24eecf4c33c65e60e994bf00a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_9fa0d2ee2d9c85d54ecc9f8429b6133848190d689a6bd41ed1df8ca9182c3c45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fa0d2ee2d9c85d54ecc9f8429b6133848190d689a6bd41ed1df8ca9182c3c45->enter($__internal_9fa0d2ee2d9c85d54ecc9f8429b6133848190d689a6bd41ed1df8ca9182c3c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_ce85e1a7c074e7207b9ccd760ea30eff33a974a3f5155290f3aa43cc8b4e71e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce85e1a7c074e7207b9ccd760ea30eff33a974a3f5155290f3aa43cc8b4e71e7->enter($__internal_ce85e1a7c074e7207b9ccd760ea30eff33a974a3f5155290f3aa43cc8b4e71e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fa0d2ee2d9c85d54ecc9f8429b6133848190d689a6bd41ed1df8ca9182c3c45->leave($__internal_9fa0d2ee2d9c85d54ecc9f8429b6133848190d689a6bd41ed1df8ca9182c3c45_prof);

        
        $__internal_ce85e1a7c074e7207b9ccd760ea30eff33a974a3f5155290f3aa43cc8b4e71e7->leave($__internal_ce85e1a7c074e7207b9ccd760ea30eff33a974a3f5155290f3aa43cc8b4e71e7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2d15463e89eb54fadab70717b8d5cc3145534ec7923c897a33c71a1a07d9c817 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d15463e89eb54fadab70717b8d5cc3145534ec7923c897a33c71a1a07d9c817->enter($__internal_2d15463e89eb54fadab70717b8d5cc3145534ec7923c897a33c71a1a07d9c817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a8d72907137161bac7ad49df25e62bab75857414d076892ae88e5d0216311496 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8d72907137161bac7ad49df25e62bab75857414d076892ae88e5d0216311496->enter($__internal_a8d72907137161bac7ad49df25e62bab75857414d076892ae88e5d0216311496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_a8d72907137161bac7ad49df25e62bab75857414d076892ae88e5d0216311496->leave($__internal_a8d72907137161bac7ad49df25e62bab75857414d076892ae88e5d0216311496_prof);

        
        $__internal_2d15463e89eb54fadab70717b8d5cc3145534ec7923c897a33c71a1a07d9c817->leave($__internal_2d15463e89eb54fadab70717b8d5cc3145534ec7923c897a33c71a1a07d9c817_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
