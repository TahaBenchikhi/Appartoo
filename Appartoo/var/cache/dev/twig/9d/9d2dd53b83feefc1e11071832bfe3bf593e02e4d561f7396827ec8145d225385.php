<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_91ba4367db97a9062ac2235d37f4b2112e054b7a2f476d97e2d8ed9e066686a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_1eb76677f617ae92bc06a3f89c32035b133f65de244112bea37f0252c0c24020 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1eb76677f617ae92bc06a3f89c32035b133f65de244112bea37f0252c0c24020->enter($__internal_1eb76677f617ae92bc06a3f89c32035b133f65de244112bea37f0252c0c24020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_3d5ab6e4f4f9d4bbdd9178fa0393ab6ba8afc53966a8688d47e88a7b89f577b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d5ab6e4f4f9d4bbdd9178fa0393ab6ba8afc53966a8688d47e88a7b89f577b1->enter($__internal_3d5ab6e4f4f9d4bbdd9178fa0393ab6ba8afc53966a8688d47e88a7b89f577b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1eb76677f617ae92bc06a3f89c32035b133f65de244112bea37f0252c0c24020->leave($__internal_1eb76677f617ae92bc06a3f89c32035b133f65de244112bea37f0252c0c24020_prof);

        
        $__internal_3d5ab6e4f4f9d4bbdd9178fa0393ab6ba8afc53966a8688d47e88a7b89f577b1->leave($__internal_3d5ab6e4f4f9d4bbdd9178fa0393ab6ba8afc53966a8688d47e88a7b89f577b1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_80d2b8776c7151fba4b1f5bb142290111d48ba10c33018597e43a70a77b7f4d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80d2b8776c7151fba4b1f5bb142290111d48ba10c33018597e43a70a77b7f4d8->enter($__internal_80d2b8776c7151fba4b1f5bb142290111d48ba10c33018597e43a70a77b7f4d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_81d12469294f3fa6c941bc5461b3168388fb78e00610dd73d74c78b16c57efff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81d12469294f3fa6c941bc5461b3168388fb78e00610dd73d74c78b16c57efff->enter($__internal_81d12469294f3fa6c941bc5461b3168388fb78e00610dd73d74c78b16c57efff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_81d12469294f3fa6c941bc5461b3168388fb78e00610dd73d74c78b16c57efff->leave($__internal_81d12469294f3fa6c941bc5461b3168388fb78e00610dd73d74c78b16c57efff_prof);

        
        $__internal_80d2b8776c7151fba4b1f5bb142290111d48ba10c33018597e43a70a77b7f4d8->leave($__internal_80d2b8776c7151fba4b1f5bb142290111d48ba10c33018597e43a70a77b7f4d8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\list.html.twig");
    }
}
