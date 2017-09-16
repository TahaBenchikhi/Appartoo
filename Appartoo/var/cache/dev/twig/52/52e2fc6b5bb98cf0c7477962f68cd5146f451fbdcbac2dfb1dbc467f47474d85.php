<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_b2081f1dcfb47a75acbeabdfdeb3649e0b6efe7ef80e45172f0ce81abe3222bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_8eb4a85f4690b92b8697268a5d48dd52e798bd946df3b7590ddd2fc5706a13a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8eb4a85f4690b92b8697268a5d48dd52e798bd946df3b7590ddd2fc5706a13a4->enter($__internal_8eb4a85f4690b92b8697268a5d48dd52e798bd946df3b7590ddd2fc5706a13a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_deadac331a82c9ec39176a6f8c69cb8e72c2d8e86be2dac22b39574fa4ca0d09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deadac331a82c9ec39176a6f8c69cb8e72c2d8e86be2dac22b39574fa4ca0d09->enter($__internal_deadac331a82c9ec39176a6f8c69cb8e72c2d8e86be2dac22b39574fa4ca0d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8eb4a85f4690b92b8697268a5d48dd52e798bd946df3b7590ddd2fc5706a13a4->leave($__internal_8eb4a85f4690b92b8697268a5d48dd52e798bd946df3b7590ddd2fc5706a13a4_prof);

        
        $__internal_deadac331a82c9ec39176a6f8c69cb8e72c2d8e86be2dac22b39574fa4ca0d09->leave($__internal_deadac331a82c9ec39176a6f8c69cb8e72c2d8e86be2dac22b39574fa4ca0d09_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9a024293a22e8a46446cb4d0eaecf330a3233497a25a07a2ffb83402564af730 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a024293a22e8a46446cb4d0eaecf330a3233497a25a07a2ffb83402564af730->enter($__internal_9a024293a22e8a46446cb4d0eaecf330a3233497a25a07a2ffb83402564af730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5b198507e98c7f13701fc7bc98be4c97b0b71b2ab3609ba0079febe2e8642bae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b198507e98c7f13701fc7bc98be4c97b0b71b2ab3609ba0079febe2e8642bae->enter($__internal_5b198507e98c7f13701fc7bc98be4c97b0b71b2ab3609ba0079febe2e8642bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_5b198507e98c7f13701fc7bc98be4c97b0b71b2ab3609ba0079febe2e8642bae->leave($__internal_5b198507e98c7f13701fc7bc98be4c97b0b71b2ab3609ba0079febe2e8642bae_prof);

        
        $__internal_9a024293a22e8a46446cb4d0eaecf330a3233497a25a07a2ffb83402564af730->leave($__internal_9a024293a22e8a46446cb4d0eaecf330a3233497a25a07a2ffb83402564af730_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
", "@FOSUser/Resetting/reset.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
