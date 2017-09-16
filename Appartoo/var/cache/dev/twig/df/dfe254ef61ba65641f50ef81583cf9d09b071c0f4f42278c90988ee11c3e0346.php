<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_8e0013d2a4051ad83f3d147841a24787daeca6c7fd47c8dc9023eb077fec0bec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3393a78a4ae3fa887bff1103d37650ffe75d894fcd9d26e3a71d1ba10f5424df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3393a78a4ae3fa887bff1103d37650ffe75d894fcd9d26e3a71d1ba10f5424df->enter($__internal_3393a78a4ae3fa887bff1103d37650ffe75d894fcd9d26e3a71d1ba10f5424df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $__internal_b418b4eb0f7f61db23505e61d2e4a28966a52715383d2a6da7830c73f3d99de9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b418b4eb0f7f61db23505e61d2e4a28966a52715383d2a6da7830c73f3d99de9->enter($__internal_b418b4eb0f7f61db23505e61d2e4a28966a52715383d2a6da7830c73f3d99de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3393a78a4ae3fa887bff1103d37650ffe75d894fcd9d26e3a71d1ba10f5424df->leave($__internal_3393a78a4ae3fa887bff1103d37650ffe75d894fcd9d26e3a71d1ba10f5424df_prof);

        
        $__internal_b418b4eb0f7f61db23505e61d2e4a28966a52715383d2a6da7830c73f3d99de9->leave($__internal_b418b4eb0f7f61db23505e61d2e4a28966a52715383d2a6da7830c73f3d99de9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_38daf3ca2d5c6df0aa2e4717d443510917377537e2bc2d4164cf13433dc2304c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38daf3ca2d5c6df0aa2e4717d443510917377537e2bc2d4164cf13433dc2304c->enter($__internal_38daf3ca2d5c6df0aa2e4717d443510917377537e2bc2d4164cf13433dc2304c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f2ebf2da184fe9fb033cea95031777edfc859036a9eeabbb10f3719a76235ac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2ebf2da184fe9fb033cea95031777edfc859036a9eeabbb10f3719a76235ac1->enter($__internal_f2ebf2da184fe9fb033cea95031777edfc859036a9eeabbb10f3719a76235ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        // line 5
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 6
        echo "
";
        
        $__internal_f2ebf2da184fe9fb033cea95031777edfc859036a9eeabbb10f3719a76235ac1->leave($__internal_f2ebf2da184fe9fb033cea95031777edfc859036a9eeabbb10f3719a76235ac1_prof);

        
        $__internal_38daf3ca2d5c6df0aa2e4717d443510917377537e2bc2d4164cf13433dc2304c->leave($__internal_38daf3ca2d5c6df0aa2e4717d443510917377537e2bc2d4164cf13433dc2304c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f5c3141b26e75e7a17a4dff3caeaa6ecff024883b4025e4a834694728117c9a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5c3141b26e75e7a17a4dff3caeaa6ecff024883b4025e4a834694728117c9a1->enter($__internal_f5c3141b26e75e7a17a4dff3caeaa6ecff024883b4025e4a834694728117c9a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d016d6264d76d130b36208e563ce2c5724ef9bed1f84c8e713350ff4e0b22226 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d016d6264d76d130b36208e563ce2c5724ef9bed1f84c8e713350ff4e0b22226->enter($__internal_d016d6264d76d130b36208e563ce2c5724ef9bed1f84c8e713350ff4e0b22226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_d016d6264d76d130b36208e563ce2c5724ef9bed1f84c8e713350ff4e0b22226->leave($__internal_d016d6264d76d130b36208e563ce2c5724ef9bed1f84c8e713350ff4e0b22226_prof);

        
        $__internal_f5c3141b26e75e7a17a4dff3caeaa6ecff024883b4025e4a834694728117c9a1->leave($__internal_f5c3141b26e75e7a17a4dff3caeaa6ecff024883b4025e4a834694728117c9a1_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a7b7d258f7e846ff6b13086ac6e9f6e4e8ba32c8f2849d991ad057ea02553e8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7b7d258f7e846ff6b13086ac6e9f6e4e8ba32c8f2849d991ad057ea02553e8d->enter($__internal_a7b7d258f7e846ff6b13086ac6e9f6e4e8ba32c8f2849d991ad057ea02553e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ea36dab7f39ccc9444ac3549c00699ad645576cded4375c7216bbac8c68c5948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea36dab7f39ccc9444ac3549c00699ad645576cded4375c7216bbac8c68c5948->enter($__internal_ea36dab7f39ccc9444ac3549c00699ad645576cded4375c7216bbac8c68c5948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "    <link href=\"https://fonts.googleapis.com/css?family=Roboto\" rel=\"stylesheet\">


";
        
        $__internal_ea36dab7f39ccc9444ac3549c00699ad645576cded4375c7216bbac8c68c5948->leave($__internal_ea36dab7f39ccc9444ac3549c00699ad645576cded4375c7216bbac8c68c5948_prof);

        
        $__internal_a7b7d258f7e846ff6b13086ac6e9f6e4e8ba32c8f2849d991ad057ea02553e8d->leave($__internal_a7b7d258f7e846ff6b13086ac6e9f6e4e8ba32c8f2849d991ad057ea02553e8d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 9,  84 => 8,  67 => 5,  56 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

{% block fos_user_content %}{% endblock %}

{% endblock %}
{% block stylesheets %}
    <link href=\"https://fonts.googleapis.com/css?family=Roboto\" rel=\"stylesheet\">


{% endblock %}", "FOSUserBundle::layout.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
