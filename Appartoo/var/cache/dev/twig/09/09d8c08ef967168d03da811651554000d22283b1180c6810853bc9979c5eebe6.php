<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_a9663472a4e58e30f97bdedc6654f730617bb77d07b5215e875473546ba1d175 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_8bab79f1a5e6cfd78e404dca0bdfa7f30ae6e21c8b88f073df2248d4f5d44975 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bab79f1a5e6cfd78e404dca0bdfa7f30ae6e21c8b88f073df2248d4f5d44975->enter($__internal_8bab79f1a5e6cfd78e404dca0bdfa7f30ae6e21c8b88f073df2248d4f5d44975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_22729fb377bdc50e26e7c128d8a946a49f76265434e9aec7161866cf0a245ea6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22729fb377bdc50e26e7c128d8a946a49f76265434e9aec7161866cf0a245ea6->enter($__internal_22729fb377bdc50e26e7c128d8a946a49f76265434e9aec7161866cf0a245ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bab79f1a5e6cfd78e404dca0bdfa7f30ae6e21c8b88f073df2248d4f5d44975->leave($__internal_8bab79f1a5e6cfd78e404dca0bdfa7f30ae6e21c8b88f073df2248d4f5d44975_prof);

        
        $__internal_22729fb377bdc50e26e7c128d8a946a49f76265434e9aec7161866cf0a245ea6->leave($__internal_22729fb377bdc50e26e7c128d8a946a49f76265434e9aec7161866cf0a245ea6_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_811b7b9597940a98810124bcae8f8e1099427641b274c01d15d979d411dcc57d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_811b7b9597940a98810124bcae8f8e1099427641b274c01d15d979d411dcc57d->enter($__internal_811b7b9597940a98810124bcae8f8e1099427641b274c01d15d979d411dcc57d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6f37d502b73cf67211d94487dd43e1ba7e3b1eef5cf5d5027773e318281c1918 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f37d502b73cf67211d94487dd43e1ba7e3b1eef5cf5d5027773e318281c1918->enter($__internal_6f37d502b73cf67211d94487dd43e1ba7e3b1eef5cf5d5027773e318281c1918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_6f37d502b73cf67211d94487dd43e1ba7e3b1eef5cf5d5027773e318281c1918->leave($__internal_6f37d502b73cf67211d94487dd43e1ba7e3b1eef5cf5d5027773e318281c1918_prof);

        
        $__internal_811b7b9597940a98810124bcae8f8e1099427641b274c01d15d979d411dcc57d->leave($__internal_811b7b9597940a98810124bcae8f8e1099427641b274c01d15d979d411dcc57d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "@FOSUser/Resetting/check_email.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\check_email.html.twig");
    }
}
