<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_3e3b9301e9a30c77735bc0f003b0ea9a82a60ac734e451534ad461d0d60331d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_b974ae8864af1bb8fc73c83e13f606b18646180b2458b619f351b00f41044199 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b974ae8864af1bb8fc73c83e13f606b18646180b2458b619f351b00f41044199->enter($__internal_b974ae8864af1bb8fc73c83e13f606b18646180b2458b619f351b00f41044199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_a7dab58a92c61d9fd84d9550322830901e6669c799bad840250770a9478ce802 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7dab58a92c61d9fd84d9550322830901e6669c799bad840250770a9478ce802->enter($__internal_a7dab58a92c61d9fd84d9550322830901e6669c799bad840250770a9478ce802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b974ae8864af1bb8fc73c83e13f606b18646180b2458b619f351b00f41044199->leave($__internal_b974ae8864af1bb8fc73c83e13f606b18646180b2458b619f351b00f41044199_prof);

        
        $__internal_a7dab58a92c61d9fd84d9550322830901e6669c799bad840250770a9478ce802->leave($__internal_a7dab58a92c61d9fd84d9550322830901e6669c799bad840250770a9478ce802_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_557c8feb03bfa1e6a5ef18caf0c1a23b1fc632e0fee695a721942b84837daa74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_557c8feb03bfa1e6a5ef18caf0c1a23b1fc632e0fee695a721942b84837daa74->enter($__internal_557c8feb03bfa1e6a5ef18caf0c1a23b1fc632e0fee695a721942b84837daa74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e7204947c4a3f3084131a3aea662d4b70472e441300c72ee5fd601ec0e880d06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7204947c4a3f3084131a3aea662d4b70472e441300c72ee5fd601ec0e880d06->enter($__internal_e7204947c4a3f3084131a3aea662d4b70472e441300c72ee5fd601ec0e880d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_e7204947c4a3f3084131a3aea662d4b70472e441300c72ee5fd601ec0e880d06->leave($__internal_e7204947c4a3f3084131a3aea662d4b70472e441300c72ee5fd601ec0e880d06_prof);

        
        $__internal_557c8feb03bfa1e6a5ef18caf0c1a23b1fc632e0fee695a721942b84837daa74->leave($__internal_557c8feb03bfa1e6a5ef18caf0c1a23b1fc632e0fee695a721942b84837daa74_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
