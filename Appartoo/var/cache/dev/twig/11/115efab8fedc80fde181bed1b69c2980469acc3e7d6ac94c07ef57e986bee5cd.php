<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_ea7fe2e80101487d35d4dd58eddece6022ccf197f2089711794d5cbdf8b656e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_66eaa45807a19a6bd97c498a4940c9358b15ad96dca79101ed38802e71034a84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66eaa45807a19a6bd97c498a4940c9358b15ad96dca79101ed38802e71034a84->enter($__internal_66eaa45807a19a6bd97c498a4940c9358b15ad96dca79101ed38802e71034a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_3ce5d17488b1c1660434d6040e3de567182162bc6eef762bf8cd99bfc97f6dc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ce5d17488b1c1660434d6040e3de567182162bc6eef762bf8cd99bfc97f6dc3->enter($__internal_3ce5d17488b1c1660434d6040e3de567182162bc6eef762bf8cd99bfc97f6dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66eaa45807a19a6bd97c498a4940c9358b15ad96dca79101ed38802e71034a84->leave($__internal_66eaa45807a19a6bd97c498a4940c9358b15ad96dca79101ed38802e71034a84_prof);

        
        $__internal_3ce5d17488b1c1660434d6040e3de567182162bc6eef762bf8cd99bfc97f6dc3->leave($__internal_3ce5d17488b1c1660434d6040e3de567182162bc6eef762bf8cd99bfc97f6dc3_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b96daf29e1ee031506b7894f2c662f41b26848ab97910bd8e36a093f5b6dbc66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b96daf29e1ee031506b7894f2c662f41b26848ab97910bd8e36a093f5b6dbc66->enter($__internal_b96daf29e1ee031506b7894f2c662f41b26848ab97910bd8e36a093f5b6dbc66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c64cd90e481bcb154c42632f51e98f42f96ce65565151fbb795e319d4358db3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c64cd90e481bcb154c42632f51e98f42f96ce65565151fbb795e319d4358db3f->enter($__internal_c64cd90e481bcb154c42632f51e98f42f96ce65565151fbb795e319d4358db3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_c64cd90e481bcb154c42632f51e98f42f96ce65565151fbb795e319d4358db3f->leave($__internal_c64cd90e481bcb154c42632f51e98f42f96ce65565151fbb795e319d4358db3f_prof);

        
        $__internal_b96daf29e1ee031506b7894f2c662f41b26848ab97910bd8e36a093f5b6dbc66->leave($__internal_b96daf29e1ee031506b7894f2c662f41b26848ab97910bd8e36a093f5b6dbc66_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
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
", "@FOSUser/Registration/confirmed.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\confirmed.html.twig");
    }
}
