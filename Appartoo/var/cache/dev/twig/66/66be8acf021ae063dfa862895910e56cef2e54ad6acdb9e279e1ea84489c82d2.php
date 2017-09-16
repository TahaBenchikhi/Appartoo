<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_3e150be94dc61e5cabdf85d13fb36da7f7c58ef36657ca940d170f8e9a8c324e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_f5f322ab75764fd110d3844b6960863daa64dc1e5dc5f4626bf114dd3d98ac28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5f322ab75764fd110d3844b6960863daa64dc1e5dc5f4626bf114dd3d98ac28->enter($__internal_f5f322ab75764fd110d3844b6960863daa64dc1e5dc5f4626bf114dd3d98ac28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_432815e2ed177c7f99e4697f90d99749c4432fd5129aaffceafd165be0853f51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_432815e2ed177c7f99e4697f90d99749c4432fd5129aaffceafd165be0853f51->enter($__internal_432815e2ed177c7f99e4697f90d99749c4432fd5129aaffceafd165be0853f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5f322ab75764fd110d3844b6960863daa64dc1e5dc5f4626bf114dd3d98ac28->leave($__internal_f5f322ab75764fd110d3844b6960863daa64dc1e5dc5f4626bf114dd3d98ac28_prof);

        
        $__internal_432815e2ed177c7f99e4697f90d99749c4432fd5129aaffceafd165be0853f51->leave($__internal_432815e2ed177c7f99e4697f90d99749c4432fd5129aaffceafd165be0853f51_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4fab46c969c3bf981f7ad874433cc4730dac1371a26692acfd394a193a2c32b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fab46c969c3bf981f7ad874433cc4730dac1371a26692acfd394a193a2c32b5->enter($__internal_4fab46c969c3bf981f7ad874433cc4730dac1371a26692acfd394a193a2c32b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_928001e8f5728bf1342d948b3fe89c5870767c4b2e3f7c5b3a3c869dc637659c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_928001e8f5728bf1342d948b3fe89c5870767c4b2e3f7c5b3a3c869dc637659c->enter($__internal_928001e8f5728bf1342d948b3fe89c5870767c4b2e3f7c5b3a3c869dc637659c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_928001e8f5728bf1342d948b3fe89c5870767c4b2e3f7c5b3a3c869dc637659c->leave($__internal_928001e8f5728bf1342d948b3fe89c5870767c4b2e3f7c5b3a3c869dc637659c_prof);

        
        $__internal_4fab46c969c3bf981f7ad874433cc4730dac1371a26692acfd394a193a2c32b5->leave($__internal_4fab46c969c3bf981f7ad874433cc4730dac1371a26692acfd394a193a2c32b5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
", "@FOSUser/Group/edit.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\edit.html.twig");
    }
}
