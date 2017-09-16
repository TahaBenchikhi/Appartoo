<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2cb9bcdb914acea5868a69dd88c5f9ac970b9d4799243e9f9f215391a42881cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_132dc830265ddcf0b93d68027ad6ae6a302da43dd5e151ea84189d1b59688769 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_132dc830265ddcf0b93d68027ad6ae6a302da43dd5e151ea84189d1b59688769->enter($__internal_132dc830265ddcf0b93d68027ad6ae6a302da43dd5e151ea84189d1b59688769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_6a4a581cdd1ac0b9d18c30d6073476ce54ce6e27ff7a6bcf225858e6a64ce71d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a4a581cdd1ac0b9d18c30d6073476ce54ce6e27ff7a6bcf225858e6a64ce71d->enter($__internal_6a4a581cdd1ac0b9d18c30d6073476ce54ce6e27ff7a6bcf225858e6a64ce71d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_132dc830265ddcf0b93d68027ad6ae6a302da43dd5e151ea84189d1b59688769->leave($__internal_132dc830265ddcf0b93d68027ad6ae6a302da43dd5e151ea84189d1b59688769_prof);

        
        $__internal_6a4a581cdd1ac0b9d18c30d6073476ce54ce6e27ff7a6bcf225858e6a64ce71d->leave($__internal_6a4a581cdd1ac0b9d18c30d6073476ce54ce6e27ff7a6bcf225858e6a64ce71d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9a83fa22cd467afa92df458f3a1aafd2719d603d69f7d85c515697499f42f405 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a83fa22cd467afa92df458f3a1aafd2719d603d69f7d85c515697499f42f405->enter($__internal_9a83fa22cd467afa92df458f3a1aafd2719d603d69f7d85c515697499f42f405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_714a8f3accc71af183b89cb851876a8b1bfc90070bf31196a5322a884ab1f7c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_714a8f3accc71af183b89cb851876a8b1bfc90070bf31196a5322a884ab1f7c1->enter($__internal_714a8f3accc71af183b89cb851876a8b1bfc90070bf31196a5322a884ab1f7c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_714a8f3accc71af183b89cb851876a8b1bfc90070bf31196a5322a884ab1f7c1->leave($__internal_714a8f3accc71af183b89cb851876a8b1bfc90070bf31196a5322a884ab1f7c1_prof);

        
        $__internal_9a83fa22cd467afa92df458f3a1aafd2719d603d69f7d85c515697499f42f405->leave($__internal_9a83fa22cd467afa92df458f3a1aafd2719d603d69f7d85c515697499f42f405_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_066cf7a083bd572903ced6bb78d8df67559edc6d5d6020a89ccb9700c9e48139 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_066cf7a083bd572903ced6bb78d8df67559edc6d5d6020a89ccb9700c9e48139->enter($__internal_066cf7a083bd572903ced6bb78d8df67559edc6d5d6020a89ccb9700c9e48139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_414ec377ec404a24bef4e398fe4d1d740cdec8ba8df96ca51e58dd015781937c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_414ec377ec404a24bef4e398fe4d1d740cdec8ba8df96ca51e58dd015781937c->enter($__internal_414ec377ec404a24bef4e398fe4d1d740cdec8ba8df96ca51e58dd015781937c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_414ec377ec404a24bef4e398fe4d1d740cdec8ba8df96ca51e58dd015781937c->leave($__internal_414ec377ec404a24bef4e398fe4d1d740cdec8ba8df96ca51e58dd015781937c_prof);

        
        $__internal_066cf7a083bd572903ced6bb78d8df67559edc6d5d6020a89ccb9700c9e48139->leave($__internal_066cf7a083bd572903ced6bb78d8df67559edc6d5d6020a89ccb9700c9e48139_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_03fb0cb3ce85b34c1824d7926b31978c330978a5a6864645af49b1e4fde54ca6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03fb0cb3ce85b34c1824d7926b31978c330978a5a6864645af49b1e4fde54ca6->enter($__internal_03fb0cb3ce85b34c1824d7926b31978c330978a5a6864645af49b1e4fde54ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_92cf41b8348023d1d3a531804631c1c7e7c03bd94a570030eb8c177345d1cc27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92cf41b8348023d1d3a531804631c1c7e7c03bd94a570030eb8c177345d1cc27->enter($__internal_92cf41b8348023d1d3a531804631c1c7e7c03bd94a570030eb8c177345d1cc27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_92cf41b8348023d1d3a531804631c1c7e7c03bd94a570030eb8c177345d1cc27->leave($__internal_92cf41b8348023d1d3a531804631c1c7e7c03bd94a570030eb8c177345d1cc27_prof);

        
        $__internal_03fb0cb3ce85b34c1824d7926b31978c330978a5a6864645af49b1e4fde54ca6->leave($__internal_03fb0cb3ce85b34c1824d7926b31978c330978a5a6864645af49b1e4fde54ca6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
