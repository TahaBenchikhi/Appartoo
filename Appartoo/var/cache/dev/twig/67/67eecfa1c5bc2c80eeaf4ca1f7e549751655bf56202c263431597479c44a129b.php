<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_a8199e8493584f73a53a10dd7d7d620de0097389f1a7b6c57f546dd0f385ffe0 extends Twig_Template
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
        $__internal_c462ff9a3344e5f0d03e2b30de396af71d915cfb72d7d14cab269e2f7b7ff7b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c462ff9a3344e5f0d03e2b30de396af71d915cfb72d7d14cab269e2f7b7ff7b4->enter($__internal_c462ff9a3344e5f0d03e2b30de396af71d915cfb72d7d14cab269e2f7b7ff7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        $__internal_480216ce381c4b527628e5424a4cc398bc742ad0c2c5e36ea871834c5cdc0476 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_480216ce381c4b527628e5424a4cc398bc742ad0c2c5e36ea871834c5cdc0476->enter($__internal_480216ce381c4b527628e5424a4cc398bc742ad0c2c5e36ea871834c5cdc0476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
<div>
    <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_c462ff9a3344e5f0d03e2b30de396af71d915cfb72d7d14cab269e2f7b7ff7b4->leave($__internal_c462ff9a3344e5f0d03e2b30de396af71d915cfb72d7d14cab269e2f7b7ff7b4_prof);

        
        $__internal_480216ce381c4b527628e5424a4cc398bc742ad0c2c5e36ea871834c5cdc0476->leave($__internal_480216ce381c4b527628e5424a4cc398bc742ad0c2c5e36ea871834c5cdc0476_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
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

{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
    {{ form_widget(form) }}
<div>
    <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
</div>
{{ form_end(form) }}", "FOSUserBundle:Registration:register_content.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
