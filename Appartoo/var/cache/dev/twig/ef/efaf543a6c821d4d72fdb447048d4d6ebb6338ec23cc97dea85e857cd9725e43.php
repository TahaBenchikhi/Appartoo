<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_35c315a7fe70822b9ac9fc30197f5dadd28a745917234858869690570edb585c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_8d0b48ec8ceb0e8cb412dbf6b5e74c986cb37928ddc473329d59f4503c24e016 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d0b48ec8ceb0e8cb412dbf6b5e74c986cb37928ddc473329d59f4503c24e016->enter($__internal_8d0b48ec8ceb0e8cb412dbf6b5e74c986cb37928ddc473329d59f4503c24e016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_0760ebc75a59a85e9f3c120d4978a69f2671c03925265ff9594432f03142ca18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0760ebc75a59a85e9f3c120d4978a69f2671c03925265ff9594432f03142ca18->enter($__internal_0760ebc75a59a85e9f3c120d4978a69f2671c03925265ff9594432f03142ca18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d0b48ec8ceb0e8cb412dbf6b5e74c986cb37928ddc473329d59f4503c24e016->leave($__internal_8d0b48ec8ceb0e8cb412dbf6b5e74c986cb37928ddc473329d59f4503c24e016_prof);

        
        $__internal_0760ebc75a59a85e9f3c120d4978a69f2671c03925265ff9594432f03142ca18->leave($__internal_0760ebc75a59a85e9f3c120d4978a69f2671c03925265ff9594432f03142ca18_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_85af85c28982851c0eccfc51a502a33e25709c093307afd3e13ce8225e59f393 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85af85c28982851c0eccfc51a502a33e25709c093307afd3e13ce8225e59f393->enter($__internal_85af85c28982851c0eccfc51a502a33e25709c093307afd3e13ce8225e59f393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c312f3d65352878c1bbcdcfd1995a36c8c756ff76e1e8b6bb4ae5b6c15fa8167 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c312f3d65352878c1bbcdcfd1995a36c8c756ff76e1e8b6bb4ae5b6c15fa8167->enter($__internal_c312f3d65352878c1bbcdcfd1995a36c8c756ff76e1e8b6bb4ae5b6c15fa8167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c312f3d65352878c1bbcdcfd1995a36c8c756ff76e1e8b6bb4ae5b6c15fa8167->leave($__internal_c312f3d65352878c1bbcdcfd1995a36c8c756ff76e1e8b6bb4ae5b6c15fa8167_prof);

        
        $__internal_85af85c28982851c0eccfc51a502a33e25709c093307afd3e13ce8225e59f393->leave($__internal_85af85c28982851c0eccfc51a502a33e25709c093307afd3e13ce8225e59f393_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2b3ced5c6ca63340bd4dced2a8e7f0376d0cbb348db2c3d72857a8f185e75ef1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b3ced5c6ca63340bd4dced2a8e7f0376d0cbb348db2c3d72857a8f185e75ef1->enter($__internal_2b3ced5c6ca63340bd4dced2a8e7f0376d0cbb348db2c3d72857a8f185e75ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_22c323c7e7c9d03c3df5952fee4d95a3be88e41afcda3d03aeac9c40069d08f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22c323c7e7c9d03c3df5952fee4d95a3be88e41afcda3d03aeac9c40069d08f2->enter($__internal_22c323c7e7c9d03c3df5952fee4d95a3be88e41afcda3d03aeac9c40069d08f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_22c323c7e7c9d03c3df5952fee4d95a3be88e41afcda3d03aeac9c40069d08f2->leave($__internal_22c323c7e7c9d03c3df5952fee4d95a3be88e41afcda3d03aeac9c40069d08f2_prof);

        
        $__internal_2b3ced5c6ca63340bd4dced2a8e7f0376d0cbb348db2c3d72857a8f185e75ef1->leave($__internal_2b3ced5c6ca63340bd4dced2a8e7f0376d0cbb348db2c3d72857a8f185e75ef1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f4a928692dd38e6afed271590d9fd805b71f107bef44206f07c80ba907c876bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4a928692dd38e6afed271590d9fd805b71f107bef44206f07c80ba907c876bd->enter($__internal_f4a928692dd38e6afed271590d9fd805b71f107bef44206f07c80ba907c876bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_593a2bf3514ab13c658a9af1d8f5bdc993a0c1dd91cf73225e57631a9b010313 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_593a2bf3514ab13c658a9af1d8f5bdc993a0c1dd91cf73225e57631a9b010313->enter($__internal_593a2bf3514ab13c658a9af1d8f5bdc993a0c1dd91cf73225e57631a9b010313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_593a2bf3514ab13c658a9af1d8f5bdc993a0c1dd91cf73225e57631a9b010313->leave($__internal_593a2bf3514ab13c658a9af1d8f5bdc993a0c1dd91cf73225e57631a9b010313_prof);

        
        $__internal_f4a928692dd38e6afed271590d9fd805b71f107bef44206f07c80ba907c876bd->leave($__internal_f4a928692dd38e6afed271590d9fd805b71f107bef44206f07c80ba907c876bd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
