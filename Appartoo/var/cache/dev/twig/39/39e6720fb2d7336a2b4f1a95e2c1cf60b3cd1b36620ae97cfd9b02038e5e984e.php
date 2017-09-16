<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_5dc4fa9c0d9f981e7d355d75f82d9a8258f8735362b4f39c0cf722608947d32d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_439eb06f2287d8e496cab246538dffa0bd326c39581bd82068386e199c2eb6ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_439eb06f2287d8e496cab246538dffa0bd326c39581bd82068386e199c2eb6ca->enter($__internal_439eb06f2287d8e496cab246538dffa0bd326c39581bd82068386e199c2eb6ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_e4f769689d255d36bd8720c4fb3bd49682c4994710c938cd7046f901070cf135 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4f769689d255d36bd8720c4fb3bd49682c4994710c938cd7046f901070cf135->enter($__internal_e4f769689d255d36bd8720c4fb3bd49682c4994710c938cd7046f901070cf135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_439eb06f2287d8e496cab246538dffa0bd326c39581bd82068386e199c2eb6ca->leave($__internal_439eb06f2287d8e496cab246538dffa0bd326c39581bd82068386e199c2eb6ca_prof);

        
        $__internal_e4f769689d255d36bd8720c4fb3bd49682c4994710c938cd7046f901070cf135->leave($__internal_e4f769689d255d36bd8720c4fb3bd49682c4994710c938cd7046f901070cf135_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5043defc47cdd7cf8e57abfe60015d4800f791dc461d83896eb5113ed21e0f35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5043defc47cdd7cf8e57abfe60015d4800f791dc461d83896eb5113ed21e0f35->enter($__internal_5043defc47cdd7cf8e57abfe60015d4800f791dc461d83896eb5113ed21e0f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0b75876352b46f112fbbeb1b7018168f739181fff2156bee56ee23226ef39792 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b75876352b46f112fbbeb1b7018168f739181fff2156bee56ee23226ef39792->enter($__internal_0b75876352b46f112fbbeb1b7018168f739181fff2156bee56ee23226ef39792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0b75876352b46f112fbbeb1b7018168f739181fff2156bee56ee23226ef39792->leave($__internal_0b75876352b46f112fbbeb1b7018168f739181fff2156bee56ee23226ef39792_prof);

        
        $__internal_5043defc47cdd7cf8e57abfe60015d4800f791dc461d83896eb5113ed21e0f35->leave($__internal_5043defc47cdd7cf8e57abfe60015d4800f791dc461d83896eb5113ed21e0f35_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_abbb79ba79425d8c7e10ea520d429274e141be64bf416ad6960a0e22a77ecaab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abbb79ba79425d8c7e10ea520d429274e141be64bf416ad6960a0e22a77ecaab->enter($__internal_abbb79ba79425d8c7e10ea520d429274e141be64bf416ad6960a0e22a77ecaab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b28fc46000551c11b058b68de16241b7fcd563140a82fb89d4c073505189c356 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b28fc46000551c11b058b68de16241b7fcd563140a82fb89d4c073505189c356->enter($__internal_b28fc46000551c11b058b68de16241b7fcd563140a82fb89d4c073505189c356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_b28fc46000551c11b058b68de16241b7fcd563140a82fb89d4c073505189c356->leave($__internal_b28fc46000551c11b058b68de16241b7fcd563140a82fb89d4c073505189c356_prof);

        
        $__internal_abbb79ba79425d8c7e10ea520d429274e141be64bf416ad6960a0e22a77ecaab->leave($__internal_abbb79ba79425d8c7e10ea520d429274e141be64bf416ad6960a0e22a77ecaab_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
