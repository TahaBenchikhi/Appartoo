<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_d2331b4dfa33c558648c41b523bdd70dd221fb18fa350a8f58f53cd2e9f4ba64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_4c3ca4b4ddede7733db5319d38d889aee78d476e3079866310b6ecfd61d0d74c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c3ca4b4ddede7733db5319d38d889aee78d476e3079866310b6ecfd61d0d74c->enter($__internal_4c3ca4b4ddede7733db5319d38d889aee78d476e3079866310b6ecfd61d0d74c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_0f8bfdf0dd7b9986616ec3ee4f372291d837fe78be49b26ab4b49d0e55bb3f64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f8bfdf0dd7b9986616ec3ee4f372291d837fe78be49b26ab4b49d0e55bb3f64->enter($__internal_0f8bfdf0dd7b9986616ec3ee4f372291d837fe78be49b26ab4b49d0e55bb3f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c3ca4b4ddede7733db5319d38d889aee78d476e3079866310b6ecfd61d0d74c->leave($__internal_4c3ca4b4ddede7733db5319d38d889aee78d476e3079866310b6ecfd61d0d74c_prof);

        
        $__internal_0f8bfdf0dd7b9986616ec3ee4f372291d837fe78be49b26ab4b49d0e55bb3f64->leave($__internal_0f8bfdf0dd7b9986616ec3ee4f372291d837fe78be49b26ab4b49d0e55bb3f64_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d6a233ae3f3e06defe5325fc8623a013494bb00580d6665795561b956de4ba77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6a233ae3f3e06defe5325fc8623a013494bb00580d6665795561b956de4ba77->enter($__internal_d6a233ae3f3e06defe5325fc8623a013494bb00580d6665795561b956de4ba77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b5e731b1307373e4066bb9f34cea667081a8ffc38fa17c4302ff9321eedabf81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5e731b1307373e4066bb9f34cea667081a8ffc38fa17c4302ff9321eedabf81->enter($__internal_b5e731b1307373e4066bb9f34cea667081a8ffc38fa17c4302ff9321eedabf81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/monkey.png"), "html", null, true);
        echo "\">
    ";
        // line 5
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_b5e731b1307373e4066bb9f34cea667081a8ffc38fa17c4302ff9321eedabf81->leave($__internal_b5e731b1307373e4066bb9f34cea667081a8ffc38fa17c4302ff9321eedabf81_prof);

        
        $__internal_d6a233ae3f3e06defe5325fc8623a013494bb00580d6665795561b956de4ba77->leave($__internal_d6a233ae3f3e06defe5325fc8623a013494bb00580d6665795561b956de4ba77_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 6,  54 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    <img src=\"{{ asset('img/monkey.png') }}\">
    {{ include('@FOSUser/Security/login_content.html.twig') }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\" />
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Security/login.html.twig");
    }
}
