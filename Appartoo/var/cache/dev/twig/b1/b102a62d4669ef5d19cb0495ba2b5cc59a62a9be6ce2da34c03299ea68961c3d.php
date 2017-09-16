<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_b82aa768de84305cb7274cf1f69915416a3b1c3b4a8e8f55a4256285c8e2ac5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_d285a2029c61560093831f8434be64db6cb634f032a2eeba02e0fe4c21b0c52e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d285a2029c61560093831f8434be64db6cb634f032a2eeba02e0fe4c21b0c52e->enter($__internal_d285a2029c61560093831f8434be64db6cb634f032a2eeba02e0fe4c21b0c52e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_cee6ac7dcdc5c15975f62e994c7a9dd22c33a283e28ba97b26fded0078c6d592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cee6ac7dcdc5c15975f62e994c7a9dd22c33a283e28ba97b26fded0078c6d592->enter($__internal_cee6ac7dcdc5c15975f62e994c7a9dd22c33a283e28ba97b26fded0078c6d592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d285a2029c61560093831f8434be64db6cb634f032a2eeba02e0fe4c21b0c52e->leave($__internal_d285a2029c61560093831f8434be64db6cb634f032a2eeba02e0fe4c21b0c52e_prof);

        
        $__internal_cee6ac7dcdc5c15975f62e994c7a9dd22c33a283e28ba97b26fded0078c6d592->leave($__internal_cee6ac7dcdc5c15975f62e994c7a9dd22c33a283e28ba97b26fded0078c6d592_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2845dc8400403aaaf109849b6987244803b3bae2d77c3ac58257c7a2a54e1f6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2845dc8400403aaaf109849b6987244803b3bae2d77c3ac58257c7a2a54e1f6c->enter($__internal_2845dc8400403aaaf109849b6987244803b3bae2d77c3ac58257c7a2a54e1f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9a4b67eadb3c2b7cf947fa41990d0deb9c1c109fa013b81e54e0ff18669feaa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a4b67eadb3c2b7cf947fa41990d0deb9c1c109fa013b81e54e0ff18669feaa0->enter($__internal_9a4b67eadb3c2b7cf947fa41990d0deb9c1c109fa013b81e54e0ff18669feaa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_9a4b67eadb3c2b7cf947fa41990d0deb9c1c109fa013b81e54e0ff18669feaa0->leave($__internal_9a4b67eadb3c2b7cf947fa41990d0deb9c1c109fa013b81e54e0ff18669feaa0_prof);

        
        $__internal_2845dc8400403aaaf109849b6987244803b3bae2d77c3ac58257c7a2a54e1f6c->leave($__internal_2845dc8400403aaaf109849b6987244803b3bae2d77c3ac58257c7a2a54e1f6c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/new.html.twig");
    }
}
