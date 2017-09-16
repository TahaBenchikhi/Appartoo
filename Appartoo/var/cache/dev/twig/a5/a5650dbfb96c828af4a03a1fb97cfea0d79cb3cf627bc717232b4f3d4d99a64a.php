<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_897fc8eb8d462231a11d745f3202d223528a5a1adeb98bbd4d4aa2fd174dbec9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_a5a3510064d3fd6be5b30ed27e644118fabc63a64716febfc0fff7c3b539b140 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5a3510064d3fd6be5b30ed27e644118fabc63a64716febfc0fff7c3b539b140->enter($__internal_a5a3510064d3fd6be5b30ed27e644118fabc63a64716febfc0fff7c3b539b140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_0e92edae322be38863df35f626b53dd0c8ac299c0726d362b91935ad41a0d904 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e92edae322be38863df35f626b53dd0c8ac299c0726d362b91935ad41a0d904->enter($__internal_0e92edae322be38863df35f626b53dd0c8ac299c0726d362b91935ad41a0d904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5a3510064d3fd6be5b30ed27e644118fabc63a64716febfc0fff7c3b539b140->leave($__internal_a5a3510064d3fd6be5b30ed27e644118fabc63a64716febfc0fff7c3b539b140_prof);

        
        $__internal_0e92edae322be38863df35f626b53dd0c8ac299c0726d362b91935ad41a0d904->leave($__internal_0e92edae322be38863df35f626b53dd0c8ac299c0726d362b91935ad41a0d904_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_914d7c88134f91ff0a1ab68113b79c200c06e3bf95b0987a0a89e38740a69464 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_914d7c88134f91ff0a1ab68113b79c200c06e3bf95b0987a0a89e38740a69464->enter($__internal_914d7c88134f91ff0a1ab68113b79c200c06e3bf95b0987a0a89e38740a69464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c0a91e07db1c352f37bf040cd2df1a453bae77a1a136d8bb9a20bd6ac6fe762b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0a91e07db1c352f37bf040cd2df1a453bae77a1a136d8bb9a20bd6ac6fe762b->enter($__internal_c0a91e07db1c352f37bf040cd2df1a453bae77a1a136d8bb9a20bd6ac6fe762b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_c0a91e07db1c352f37bf040cd2df1a453bae77a1a136d8bb9a20bd6ac6fe762b->leave($__internal_c0a91e07db1c352f37bf040cd2df1a453bae77a1a136d8bb9a20bd6ac6fe762b_prof);

        
        $__internal_914d7c88134f91ff0a1ab68113b79c200c06e3bf95b0987a0a89e38740a69464->leave($__internal_914d7c88134f91ff0a1ab68113b79c200c06e3bf95b0987a0a89e38740a69464_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
