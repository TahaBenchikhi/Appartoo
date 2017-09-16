<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_af5a166ce43f5b684dfb25ceb9e782751aa6d6d01ebce69d8c1dac66f1589bc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_6c28f31aa31b30c0458436d8c8cb320d172462714563541143835bdbedc4868f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c28f31aa31b30c0458436d8c8cb320d172462714563541143835bdbedc4868f->enter($__internal_6c28f31aa31b30c0458436d8c8cb320d172462714563541143835bdbedc4868f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_40a9aac6816d35b42644c2a46cea524872ee08e897da8463a5877839f3abd08f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40a9aac6816d35b42644c2a46cea524872ee08e897da8463a5877839f3abd08f->enter($__internal_40a9aac6816d35b42644c2a46cea524872ee08e897da8463a5877839f3abd08f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c28f31aa31b30c0458436d8c8cb320d172462714563541143835bdbedc4868f->leave($__internal_6c28f31aa31b30c0458436d8c8cb320d172462714563541143835bdbedc4868f_prof);

        
        $__internal_40a9aac6816d35b42644c2a46cea524872ee08e897da8463a5877839f3abd08f->leave($__internal_40a9aac6816d35b42644c2a46cea524872ee08e897da8463a5877839f3abd08f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fe5b232dadae1aa874497063180004aaf08e5d544723fce4576fd24642dd569a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe5b232dadae1aa874497063180004aaf08e5d544723fce4576fd24642dd569a->enter($__internal_fe5b232dadae1aa874497063180004aaf08e5d544723fce4576fd24642dd569a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3e48d71478ed57fff61fe7fd37d713ee8d4b4b4e45f9f795e27b90048138c64b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e48d71478ed57fff61fe7fd37d713ee8d4b4b4e45f9f795e27b90048138c64b->enter($__internal_3e48d71478ed57fff61fe7fd37d713ee8d4b4b4e45f9f795e27b90048138c64b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_3e48d71478ed57fff61fe7fd37d713ee8d4b4b4e45f9f795e27b90048138c64b->leave($__internal_3e48d71478ed57fff61fe7fd37d713ee8d4b4b4e45f9f795e27b90048138c64b_prof);

        
        $__internal_fe5b232dadae1aa874497063180004aaf08e5d544723fce4576fd24642dd569a->leave($__internal_fe5b232dadae1aa874497063180004aaf08e5d544723fce4576fd24642dd569a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show.html.twig");
    }
}
