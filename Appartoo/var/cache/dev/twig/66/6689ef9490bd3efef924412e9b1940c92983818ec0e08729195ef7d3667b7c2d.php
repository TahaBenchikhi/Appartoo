<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_ea22cd743f984ca53bbb68e13198edd876d3613cca2cc65026fc3fe5962446e5 extends Twig_Template
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
        $__internal_181be303e97205e2b7728ad394e597930e414bca66bb215da889a890b10de55b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_181be303e97205e2b7728ad394e597930e414bca66bb215da889a890b10de55b->enter($__internal_181be303e97205e2b7728ad394e597930e414bca66bb215da889a890b10de55b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        $__internal_666ddecfc1c559244923ed0799bd6604ca049f8e657b4ce61bfbde05fa1fa265 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_666ddecfc1c559244923ed0799bd6604ca049f8e657b4ce61bfbde05fa1fa265->enter($__internal_666ddecfc1c559244923ed0799bd6604ca049f8e657b4ce61bfbde05fa1fa265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_181be303e97205e2b7728ad394e597930e414bca66bb215da889a890b10de55b->leave($__internal_181be303e97205e2b7728ad394e597930e414bca66bb215da889a890b10de55b_prof);

        
        $__internal_666ddecfc1c559244923ed0799bd6604ca049f8e657b4ce61bfbde05fa1fa265->leave($__internal_666ddecfc1c559244923ed0799bd6604ca049f8e657b4ce61bfbde05fa1fa265_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
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
", "@FOSUser/Group/show_content.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show_content.html.twig");
    }
}
