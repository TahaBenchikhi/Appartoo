<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_40c48c5a891f321e743f4dd700dd842b509b19c4b7ea1e76a4fdacf5169ebfc4 extends Twig_Template
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
        $__internal_ddbfce1c594a556e299539694d7a70fd10e1d01bd24706aaa33958977d528441 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddbfce1c594a556e299539694d7a70fd10e1d01bd24706aaa33958977d528441->enter($__internal_ddbfce1c594a556e299539694d7a70fd10e1d01bd24706aaa33958977d528441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_2471f8bec9f974f8c319c5d3725b503377787317ce526b3d105793957ee63497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2471f8bec9f974f8c319c5d3725b503377787317ce526b3d105793957ee63497->enter($__internal_2471f8bec9f974f8c319c5d3725b503377787317ce526b3d105793957ee63497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ddbfce1c594a556e299539694d7a70fd10e1d01bd24706aaa33958977d528441->leave($__internal_ddbfce1c594a556e299539694d7a70fd10e1d01bd24706aaa33958977d528441_prof);

        
        $__internal_2471f8bec9f974f8c319c5d3725b503377787317ce526b3d105793957ee63497->leave($__internal_2471f8bec9f974f8c319c5d3725b503377787317ce526b3d105793957ee63497_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f1c59b1165e8f512ba393a813f8c07e690b8b56d2742ba5e4a59d1b1492c6fef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1c59b1165e8f512ba393a813f8c07e690b8b56d2742ba5e4a59d1b1492c6fef->enter($__internal_f1c59b1165e8f512ba393a813f8c07e690b8b56d2742ba5e4a59d1b1492c6fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_14a4d1637c308a1af8ce96d02a57fa332fefa5cced850170ffc710d2946b2f27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14a4d1637c308a1af8ce96d02a57fa332fefa5cced850170ffc710d2946b2f27->enter($__internal_14a4d1637c308a1af8ce96d02a57fa332fefa5cced850170ffc710d2946b2f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_14a4d1637c308a1af8ce96d02a57fa332fefa5cced850170ffc710d2946b2f27->leave($__internal_14a4d1637c308a1af8ce96d02a57fa332fefa5cced850170ffc710d2946b2f27_prof);

        
        $__internal_f1c59b1165e8f512ba393a813f8c07e690b8b56d2742ba5e4a59d1b1492c6fef->leave($__internal_f1c59b1165e8f512ba393a813f8c07e690b8b56d2742ba5e4a59d1b1492c6fef_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_4af6f9d9f27b3de99be389164c84dc61bfedfa3f8bbcadf1e57f95cf28d80457 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4af6f9d9f27b3de99be389164c84dc61bfedfa3f8bbcadf1e57f95cf28d80457->enter($__internal_4af6f9d9f27b3de99be389164c84dc61bfedfa3f8bbcadf1e57f95cf28d80457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_a0977c1c00c9773f108e2c83903aec613df11877b32d5fbd803dd36b657620df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0977c1c00c9773f108e2c83903aec613df11877b32d5fbd803dd36b657620df->enter($__internal_a0977c1c00c9773f108e2c83903aec613df11877b32d5fbd803dd36b657620df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a0977c1c00c9773f108e2c83903aec613df11877b32d5fbd803dd36b657620df->leave($__internal_a0977c1c00c9773f108e2c83903aec613df11877b32d5fbd803dd36b657620df_prof);

        
        $__internal_4af6f9d9f27b3de99be389164c84dc61bfedfa3f8bbcadf1e57f95cf28d80457->leave($__internal_4af6f9d9f27b3de99be389164c84dc61bfedfa3f8bbcadf1e57f95cf28d80457_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f290df1a9826c27c8eb807a0facb109e537371b828b89c3f8cc3dcba99b8798a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f290df1a9826c27c8eb807a0facb109e537371b828b89c3f8cc3dcba99b8798a->enter($__internal_f290df1a9826c27c8eb807a0facb109e537371b828b89c3f8cc3dcba99b8798a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_6d890cee6e3640ce2ed130c17087795c1bdfded68038684f2d0b1fa324ebba0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d890cee6e3640ce2ed130c17087795c1bdfded68038684f2d0b1fa324ebba0a->enter($__internal_6d890cee6e3640ce2ed130c17087795c1bdfded68038684f2d0b1fa324ebba0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_6d890cee6e3640ce2ed130c17087795c1bdfded68038684f2d0b1fa324ebba0a->leave($__internal_6d890cee6e3640ce2ed130c17087795c1bdfded68038684f2d0b1fa324ebba0a_prof);

        
        $__internal_f290df1a9826c27c8eb807a0facb109e537371b828b89c3f8cc3dcba99b8798a->leave($__internal_f290df1a9826c27c8eb807a0facb109e537371b828b89c3f8cc3dcba99b8798a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
