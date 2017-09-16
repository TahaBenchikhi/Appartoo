<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_31f2b7cbe70cd0edf6717fccfea2e0bbdb5ba045b3c23dac3b07dc6b3b0302c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_0a1e158617cf77ddee6561f4d545df19c3b3187162cd0349bfb625f44b2b1f9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a1e158617cf77ddee6561f4d545df19c3b3187162cd0349bfb625f44b2b1f9e->enter($__internal_0a1e158617cf77ddee6561f4d545df19c3b3187162cd0349bfb625f44b2b1f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_f4cc66533bc6980cbd33cacfdb2849e3be108a91e42838ac361ef4265e6c83cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4cc66533bc6980cbd33cacfdb2849e3be108a91e42838ac361ef4265e6c83cd->enter($__internal_f4cc66533bc6980cbd33cacfdb2849e3be108a91e42838ac361ef4265e6c83cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a1e158617cf77ddee6561f4d545df19c3b3187162cd0349bfb625f44b2b1f9e->leave($__internal_0a1e158617cf77ddee6561f4d545df19c3b3187162cd0349bfb625f44b2b1f9e_prof);

        
        $__internal_f4cc66533bc6980cbd33cacfdb2849e3be108a91e42838ac361ef4265e6c83cd->leave($__internal_f4cc66533bc6980cbd33cacfdb2849e3be108a91e42838ac361ef4265e6c83cd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c71873b9b81fa31b03c8486235ae7d0dffee12f3f08387efa5929d1679498537 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c71873b9b81fa31b03c8486235ae7d0dffee12f3f08387efa5929d1679498537->enter($__internal_c71873b9b81fa31b03c8486235ae7d0dffee12f3f08387efa5929d1679498537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_523238bd1064a07385fd034371e0cd47423fd5cb55ca054030eaf5bae7f9dbc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_523238bd1064a07385fd034371e0cd47423fd5cb55ca054030eaf5bae7f9dbc8->enter($__internal_523238bd1064a07385fd034371e0cd47423fd5cb55ca054030eaf5bae7f9dbc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_523238bd1064a07385fd034371e0cd47423fd5cb55ca054030eaf5bae7f9dbc8->leave($__internal_523238bd1064a07385fd034371e0cd47423fd5cb55ca054030eaf5bae7f9dbc8_prof);

        
        $__internal_c71873b9b81fa31b03c8486235ae7d0dffee12f3f08387efa5929d1679498537->leave($__internal_c71873b9b81fa31b03c8486235ae7d0dffee12f3f08387efa5929d1679498537_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
", "FOSUserBundle:Group:show.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/show.html.twig");
    }
}
