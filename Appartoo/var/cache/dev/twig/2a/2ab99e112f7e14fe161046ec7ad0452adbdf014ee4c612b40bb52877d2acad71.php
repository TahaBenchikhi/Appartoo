<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_7687b19c6ca4e5d2b0e34e02748630d815b731ee6278be1c4a28ac25f3ee8f5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_ba0351664530306f8157d9cde0d1b668fb308e22aadf205c86cae42b629b3664 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba0351664530306f8157d9cde0d1b668fb308e22aadf205c86cae42b629b3664->enter($__internal_ba0351664530306f8157d9cde0d1b668fb308e22aadf205c86cae42b629b3664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_b515d647120faefe9b5cc5997c5bb67c2ca31996e4c33099a5049ca69388d7ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b515d647120faefe9b5cc5997c5bb67c2ca31996e4c33099a5049ca69388d7ae->enter($__internal_b515d647120faefe9b5cc5997c5bb67c2ca31996e4c33099a5049ca69388d7ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba0351664530306f8157d9cde0d1b668fb308e22aadf205c86cae42b629b3664->leave($__internal_ba0351664530306f8157d9cde0d1b668fb308e22aadf205c86cae42b629b3664_prof);

        
        $__internal_b515d647120faefe9b5cc5997c5bb67c2ca31996e4c33099a5049ca69388d7ae->leave($__internal_b515d647120faefe9b5cc5997c5bb67c2ca31996e4c33099a5049ca69388d7ae_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_feb0db927a69326951de4c686cbb342c83c7e37392bf5883b8dce53435be3203 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_feb0db927a69326951de4c686cbb342c83c7e37392bf5883b8dce53435be3203->enter($__internal_feb0db927a69326951de4c686cbb342c83c7e37392bf5883b8dce53435be3203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2e2fda256b0c18b1749bc7a309629ad986bc218c4129807b62386f14292de161 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e2fda256b0c18b1749bc7a309629ad986bc218c4129807b62386f14292de161->enter($__internal_2e2fda256b0c18b1749bc7a309629ad986bc218c4129807b62386f14292de161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_2e2fda256b0c18b1749bc7a309629ad986bc218c4129807b62386f14292de161->leave($__internal_2e2fda256b0c18b1749bc7a309629ad986bc218c4129807b62386f14292de161_prof);

        
        $__internal_feb0db927a69326951de4c686cbb342c83c7e37392bf5883b8dce53435be3203->leave($__internal_feb0db927a69326951de4c686cbb342c83c7e37392bf5883b8dce53435be3203_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/edit.html.twig");
    }
}
