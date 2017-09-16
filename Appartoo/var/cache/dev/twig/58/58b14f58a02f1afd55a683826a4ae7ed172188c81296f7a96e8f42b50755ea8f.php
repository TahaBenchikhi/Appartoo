<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_31bb3f6c7209742d1b47618e3c0404e67b61f08c5fc479b609141940759bd563 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1610e654f851f9090a6e0de35aa766a04802ef8e6ba7a155148cbda48c87eb7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1610e654f851f9090a6e0de35aa766a04802ef8e6ba7a155148cbda48c87eb7a->enter($__internal_1610e654f851f9090a6e0de35aa766a04802ef8e6ba7a155148cbda48c87eb7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_bc02dd2270de2b801125f0d4050d37ead2984f1dd3065496bb4b7c7e38cee25b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc02dd2270de2b801125f0d4050d37ead2984f1dd3065496bb4b7c7e38cee25b->enter($__internal_bc02dd2270de2b801125f0d4050d37ead2984f1dd3065496bb4b7c7e38cee25b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_1610e654f851f9090a6e0de35aa766a04802ef8e6ba7a155148cbda48c87eb7a->leave($__internal_1610e654f851f9090a6e0de35aa766a04802ef8e6ba7a155148cbda48c87eb7a_prof);

        
        $__internal_bc02dd2270de2b801125f0d4050d37ead2984f1dd3065496bb4b7c7e38cee25b->leave($__internal_bc02dd2270de2b801125f0d4050d37ead2984f1dd3065496bb4b7c7e38cee25b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d19c0559e4d945d0e21c671240ddd55acf21e559e994192e4c67aca4b26b8ca0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d19c0559e4d945d0e21c671240ddd55acf21e559e994192e4c67aca4b26b8ca0->enter($__internal_d19c0559e4d945d0e21c671240ddd55acf21e559e994192e4c67aca4b26b8ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_8d9fdc27ee5852720b24eed6e40545637f00ee2e967276912a009afbd3d8d38d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d9fdc27ee5852720b24eed6e40545637f00ee2e967276912a009afbd3d8d38d->enter($__internal_8d9fdc27ee5852720b24eed6e40545637f00ee2e967276912a009afbd3d8d38d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_8d9fdc27ee5852720b24eed6e40545637f00ee2e967276912a009afbd3d8d38d->leave($__internal_8d9fdc27ee5852720b24eed6e40545637f00ee2e967276912a009afbd3d8d38d_prof);

        
        $__internal_d19c0559e4d945d0e21c671240ddd55acf21e559e994192e4c67aca4b26b8ca0->leave($__internal_d19c0559e4d945d0e21c671240ddd55acf21e559e994192e4c67aca4b26b8ca0_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3ed295505e966e1059a67810d1fd11b2fad3777bb7e667083a7fe56820b33531 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ed295505e966e1059a67810d1fd11b2fad3777bb7e667083a7fe56820b33531->enter($__internal_3ed295505e966e1059a67810d1fd11b2fad3777bb7e667083a7fe56820b33531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_0297f9f821b77279b00dba615d8d81e931202b8bd1618729a2fa0be741dcd7cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0297f9f821b77279b00dba615d8d81e931202b8bd1618729a2fa0be741dcd7cb->enter($__internal_0297f9f821b77279b00dba615d8d81e931202b8bd1618729a2fa0be741dcd7cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0297f9f821b77279b00dba615d8d81e931202b8bd1618729a2fa0be741dcd7cb->leave($__internal_0297f9f821b77279b00dba615d8d81e931202b8bd1618729a2fa0be741dcd7cb_prof);

        
        $__internal_3ed295505e966e1059a67810d1fd11b2fad3777bb7e667083a7fe56820b33531->leave($__internal_3ed295505e966e1059a67810d1fd11b2fad3777bb7e667083a7fe56820b33531_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_89f24702b869d97e694f30770fe162c0c70e53057ea5ea59838dc8b7344b7b68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89f24702b869d97e694f30770fe162c0c70e53057ea5ea59838dc8b7344b7b68->enter($__internal_89f24702b869d97e694f30770fe162c0c70e53057ea5ea59838dc8b7344b7b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_46e4d6d2e089e18f1eaaf905ba82cfb79c690eac6b26c7acc0e17831efb715c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46e4d6d2e089e18f1eaaf905ba82cfb79c690eac6b26c7acc0e17831efb715c0->enter($__internal_46e4d6d2e089e18f1eaaf905ba82cfb79c690eac6b26c7acc0e17831efb715c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_46e4d6d2e089e18f1eaaf905ba82cfb79c690eac6b26c7acc0e17831efb715c0->leave($__internal_46e4d6d2e089e18f1eaaf905ba82cfb79c690eac6b26c7acc0e17831efb715c0_prof);

        
        $__internal_89f24702b869d97e694f30770fe162c0c70e53057ea5ea59838dc8b7344b7b68->leave($__internal_89f24702b869d97e694f30770fe162c0c70e53057ea5ea59838dc8b7344b7b68_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
