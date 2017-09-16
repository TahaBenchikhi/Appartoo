<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_a8d20ff19d651f515601f92a71eb6dd7ea3f6981e1b4179ec713d635083c1403 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_bb8be9fe74ff798fc8a0d63854c8f23b92963162c5c1668cac85f10073901951 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb8be9fe74ff798fc8a0d63854c8f23b92963162c5c1668cac85f10073901951->enter($__internal_bb8be9fe74ff798fc8a0d63854c8f23b92963162c5c1668cac85f10073901951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_6447c73084c2e35d36c6f4ef174b4b4071404e4dbf06e98e03f285319d13fa32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6447c73084c2e35d36c6f4ef174b4b4071404e4dbf06e98e03f285319d13fa32->enter($__internal_6447c73084c2e35d36c6f4ef174b4b4071404e4dbf06e98e03f285319d13fa32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb8be9fe74ff798fc8a0d63854c8f23b92963162c5c1668cac85f10073901951->leave($__internal_bb8be9fe74ff798fc8a0d63854c8f23b92963162c5c1668cac85f10073901951_prof);

        
        $__internal_6447c73084c2e35d36c6f4ef174b4b4071404e4dbf06e98e03f285319d13fa32->leave($__internal_6447c73084c2e35d36c6f4ef174b4b4071404e4dbf06e98e03f285319d13fa32_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0c50b13d7815bdd244d83807e0b6dd5c140c915c150a69a8f69754d2e36370ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c50b13d7815bdd244d83807e0b6dd5c140c915c150a69a8f69754d2e36370ec->enter($__internal_0c50b13d7815bdd244d83807e0b6dd5c140c915c150a69a8f69754d2e36370ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ca2dc0abb14b06ff9cce8128f36e57c0729cc52ffd446ad4b7d2d0beb71736fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca2dc0abb14b06ff9cce8128f36e57c0729cc52ffd446ad4b7d2d0beb71736fd->enter($__internal_ca2dc0abb14b06ff9cce8128f36e57c0729cc52ffd446ad4b7d2d0beb71736fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_ca2dc0abb14b06ff9cce8128f36e57c0729cc52ffd446ad4b7d2d0beb71736fd->leave($__internal_ca2dc0abb14b06ff9cce8128f36e57c0729cc52ffd446ad4b7d2d0beb71736fd_prof);

        
        $__internal_0c50b13d7815bdd244d83807e0b6dd5c140c915c150a69a8f69754d2e36370ec->leave($__internal_0c50b13d7815bdd244d83807e0b6dd5c140c915c150a69a8f69754d2e36370ec_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
", "@FOSUser/Security/login.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
