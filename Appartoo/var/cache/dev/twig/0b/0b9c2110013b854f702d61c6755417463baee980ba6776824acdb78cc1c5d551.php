<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_6fefffdb28e42e6922724165b67598eec59af00a6ffdd3ad3ee8668f48913909 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_411c6b70b1acda72056bab3402191852957f2c29458bb0d5c435c11350c6cc26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_411c6b70b1acda72056bab3402191852957f2c29458bb0d5c435c11350c6cc26->enter($__internal_411c6b70b1acda72056bab3402191852957f2c29458bb0d5c435c11350c6cc26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_12e0e700a16ef62827ea54b3de7a8f925b74dc24b4803c82401ce63abe5ce2b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12e0e700a16ef62827ea54b3de7a8f925b74dc24b4803c82401ce63abe5ce2b9->enter($__internal_12e0e700a16ef62827ea54b3de7a8f925b74dc24b4803c82401ce63abe5ce2b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_411c6b70b1acda72056bab3402191852957f2c29458bb0d5c435c11350c6cc26->leave($__internal_411c6b70b1acda72056bab3402191852957f2c29458bb0d5c435c11350c6cc26_prof);

        
        $__internal_12e0e700a16ef62827ea54b3de7a8f925b74dc24b4803c82401ce63abe5ce2b9->leave($__internal_12e0e700a16ef62827ea54b3de7a8f925b74dc24b4803c82401ce63abe5ce2b9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
