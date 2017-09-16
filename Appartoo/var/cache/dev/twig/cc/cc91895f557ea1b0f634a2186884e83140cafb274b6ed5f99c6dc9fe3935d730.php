<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_2206019f3d419484c4ed7dd45bf8424ea5ae0ee96e6eaaff56a5189293b800b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_93b1ec648f3c47174cc4fd0d29d4a750bd332672dcb9b5175d9b4c2122e20b9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93b1ec648f3c47174cc4fd0d29d4a750bd332672dcb9b5175d9b4c2122e20b9e->enter($__internal_93b1ec648f3c47174cc4fd0d29d4a750bd332672dcb9b5175d9b4c2122e20b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_0696d65f8db364ec5bd6c7946e23c1f3fbc3bfba7900f2a853d2b50b4ad991eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0696d65f8db364ec5bd6c7946e23c1f3fbc3bfba7900f2a853d2b50b4ad991eb->enter($__internal_0696d65f8db364ec5bd6c7946e23c1f3fbc3bfba7900f2a853d2b50b4ad991eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93b1ec648f3c47174cc4fd0d29d4a750bd332672dcb9b5175d9b4c2122e20b9e->leave($__internal_93b1ec648f3c47174cc4fd0d29d4a750bd332672dcb9b5175d9b4c2122e20b9e_prof);

        
        $__internal_0696d65f8db364ec5bd6c7946e23c1f3fbc3bfba7900f2a853d2b50b4ad991eb->leave($__internal_0696d65f8db364ec5bd6c7946e23c1f3fbc3bfba7900f2a853d2b50b4ad991eb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2fbb8fff342ede5439177f647fd09bf5262d12a2be1b43b75c963050d6cc4a7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fbb8fff342ede5439177f647fd09bf5262d12a2be1b43b75c963050d6cc4a7d->enter($__internal_2fbb8fff342ede5439177f647fd09bf5262d12a2be1b43b75c963050d6cc4a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_11e2cfe2593be5723b7c2e74c4fcb8cca8915228fc9739e8ab333d6d02db7e68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11e2cfe2593be5723b7c2e74c4fcb8cca8915228fc9739e8ab333d6d02db7e68->enter($__internal_11e2cfe2593be5723b7c2e74c4fcb8cca8915228fc9739e8ab333d6d02db7e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        // line 5
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_11e2cfe2593be5723b7c2e74c4fcb8cca8915228fc9739e8ab333d6d02db7e68->leave($__internal_11e2cfe2593be5723b7c2e74c4fcb8cca8915228fc9739e8ab333d6d02db7e68_prof);

        
        $__internal_2fbb8fff342ede5439177f647fd09bf5262d12a2be1b43b75c963050d6cc4a7d->leave($__internal_2fbb8fff342ede5439177f647fd09bf5262d12a2be1b43b75c963050d6cc4a7d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\" />
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/register.html.twig");
    }
}
