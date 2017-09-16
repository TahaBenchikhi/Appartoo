<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_f964b945b6d09c22fbe746603298fc0de3862fcd0b2f60af087301d638557f75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_38185aa9c74c6df7b7cff8af15385e7cc70fcefe794f84e8d68b6baf25483d7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38185aa9c74c6df7b7cff8af15385e7cc70fcefe794f84e8d68b6baf25483d7f->enter($__internal_38185aa9c74c6df7b7cff8af15385e7cc70fcefe794f84e8d68b6baf25483d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_452488df36832ac9a3ceea780f495280ede9151694b261663a50ca28a47eb28d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_452488df36832ac9a3ceea780f495280ede9151694b261663a50ca28a47eb28d->enter($__internal_452488df36832ac9a3ceea780f495280ede9151694b261663a50ca28a47eb28d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38185aa9c74c6df7b7cff8af15385e7cc70fcefe794f84e8d68b6baf25483d7f->leave($__internal_38185aa9c74c6df7b7cff8af15385e7cc70fcefe794f84e8d68b6baf25483d7f_prof);

        
        $__internal_452488df36832ac9a3ceea780f495280ede9151694b261663a50ca28a47eb28d->leave($__internal_452488df36832ac9a3ceea780f495280ede9151694b261663a50ca28a47eb28d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c6d7c58209776fd7d7276e3a681530f922bcf770722bbae3336be07ee691e987 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6d7c58209776fd7d7276e3a681530f922bcf770722bbae3336be07ee691e987->enter($__internal_c6d7c58209776fd7d7276e3a681530f922bcf770722bbae3336be07ee691e987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c11d53e73d6e5b0b2e703ffe0f200efd87cd260987db16d9b4f77acab992bb10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c11d53e73d6e5b0b2e703ffe0f200efd87cd260987db16d9b4f77acab992bb10->enter($__internal_c11d53e73d6e5b0b2e703ffe0f200efd87cd260987db16d9b4f77acab992bb10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_c11d53e73d6e5b0b2e703ffe0f200efd87cd260987db16d9b4f77acab992bb10->leave($__internal_c11d53e73d6e5b0b2e703ffe0f200efd87cd260987db16d9b4f77acab992bb10_prof);

        
        $__internal_c6d7c58209776fd7d7276e3a681530f922bcf770722bbae3336be07ee691e987->leave($__internal_c6d7c58209776fd7d7276e3a681530f922bcf770722bbae3336be07ee691e987_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
", "FOSUserBundle:Group:list.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/list.html.twig");
    }
}
