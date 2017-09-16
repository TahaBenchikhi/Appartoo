<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_e13f7e75547201ce280643217dddf2c8cf66524db21408efbd16903af047a863 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_262937a5d562c8232acd2d42822ebfc9bb50111dafe5778fdfa7116d812411d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_262937a5d562c8232acd2d42822ebfc9bb50111dafe5778fdfa7116d812411d8->enter($__internal_262937a5d562c8232acd2d42822ebfc9bb50111dafe5778fdfa7116d812411d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_b35cafcd1e8f0f2977d136c3e59308b7535c9fc4db23c3663df61bdba96e9893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b35cafcd1e8f0f2977d136c3e59308b7535c9fc4db23c3663df61bdba96e9893->enter($__internal_b35cafcd1e8f0f2977d136c3e59308b7535c9fc4db23c3663df61bdba96e9893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_262937a5d562c8232acd2d42822ebfc9bb50111dafe5778fdfa7116d812411d8->leave($__internal_262937a5d562c8232acd2d42822ebfc9bb50111dafe5778fdfa7116d812411d8_prof);

        
        $__internal_b35cafcd1e8f0f2977d136c3e59308b7535c9fc4db23c3663df61bdba96e9893->leave($__internal_b35cafcd1e8f0f2977d136c3e59308b7535c9fc4db23c3663df61bdba96e9893_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a39a0fc3310422b7df5ddcb9c56970e26b4806e540ac3a16d327175978e99081 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a39a0fc3310422b7df5ddcb9c56970e26b4806e540ac3a16d327175978e99081->enter($__internal_a39a0fc3310422b7df5ddcb9c56970e26b4806e540ac3a16d327175978e99081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c904bc608395c53ccd77d9eaf65669d5d6e3e2f204e05a79f2c277353956408e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c904bc608395c53ccd77d9eaf65669d5d6e3e2f204e05a79f2c277353956408e->enter($__internal_c904bc608395c53ccd77d9eaf65669d5d6e3e2f204e05a79f2c277353956408e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_c904bc608395c53ccd77d9eaf65669d5d6e3e2f204e05a79f2c277353956408e->leave($__internal_c904bc608395c53ccd77d9eaf65669d5d6e3e2f204e05a79f2c277353956408e_prof);

        
        $__internal_a39a0fc3310422b7df5ddcb9c56970e26b4806e540ac3a16d327175978e99081->leave($__internal_a39a0fc3310422b7df5ddcb9c56970e26b4806e540ac3a16d327175978e99081_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/check_email.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\check_email.html.twig");
    }
}
