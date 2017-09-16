<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_075006aaf9dda8fd2445934fa8842a044322d7e8a6f33a42b39d3f9ff3d1a60f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_3ec08d520ca080df2a2f308fdafa5a568fa63819a46f1120cae27fac89278f6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ec08d520ca080df2a2f308fdafa5a568fa63819a46f1120cae27fac89278f6c->enter($__internal_3ec08d520ca080df2a2f308fdafa5a568fa63819a46f1120cae27fac89278f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_f3677964f39fae8f56e725562c25e5ee0af33c8c274be89ccb1a928356724d88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3677964f39fae8f56e725562c25e5ee0af33c8c274be89ccb1a928356724d88->enter($__internal_f3677964f39fae8f56e725562c25e5ee0af33c8c274be89ccb1a928356724d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ec08d520ca080df2a2f308fdafa5a568fa63819a46f1120cae27fac89278f6c->leave($__internal_3ec08d520ca080df2a2f308fdafa5a568fa63819a46f1120cae27fac89278f6c_prof);

        
        $__internal_f3677964f39fae8f56e725562c25e5ee0af33c8c274be89ccb1a928356724d88->leave($__internal_f3677964f39fae8f56e725562c25e5ee0af33c8c274be89ccb1a928356724d88_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5456e7c3cb777f56d18be09394b703c08f43d4ea1123c1712f246a741f6233b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5456e7c3cb777f56d18be09394b703c08f43d4ea1123c1712f246a741f6233b3->enter($__internal_5456e7c3cb777f56d18be09394b703c08f43d4ea1123c1712f246a741f6233b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a85f0077d4ca0c8abdcd0aaad72981fcdc22eaf85b2cfba6b06bd525f425cb0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a85f0077d4ca0c8abdcd0aaad72981fcdc22eaf85b2cfba6b06bd525f425cb0a->enter($__internal_a85f0077d4ca0c8abdcd0aaad72981fcdc22eaf85b2cfba6b06bd525f425cb0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_a85f0077d4ca0c8abdcd0aaad72981fcdc22eaf85b2cfba6b06bd525f425cb0a->leave($__internal_a85f0077d4ca0c8abdcd0aaad72981fcdc22eaf85b2cfba6b06bd525f425cb0a_prof);

        
        $__internal_5456e7c3cb777f56d18be09394b703c08f43d4ea1123c1712f246a741f6233b3->leave($__internal_5456e7c3cb777f56d18be09394b703c08f43d4ea1123c1712f246a741f6233b3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
