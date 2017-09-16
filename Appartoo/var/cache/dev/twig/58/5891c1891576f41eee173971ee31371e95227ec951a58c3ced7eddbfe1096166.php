<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_a43b1e1d79520b2d8dce5ac40d507c5d7c2b0412edb5744936fb2a9a6cd4630c extends Twig_Template
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
        $__internal_5ab2fce8e9cd17d4a04d6303abeb8b79dd8a1bac47cf628ba0784f11ca06d5eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ab2fce8e9cd17d4a04d6303abeb8b79dd8a1bac47cf628ba0784f11ca06d5eb->enter($__internal_5ab2fce8e9cd17d4a04d6303abeb8b79dd8a1bac47cf628ba0784f11ca06d5eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_acfecbc43a8c4a0d23006578cccc81d93eb3168ed3953606f17848db9eefcddb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acfecbc43a8c4a0d23006578cccc81d93eb3168ed3953606f17848db9eefcddb->enter($__internal_acfecbc43a8c4a0d23006578cccc81d93eb3168ed3953606f17848db9eefcddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_5ab2fce8e9cd17d4a04d6303abeb8b79dd8a1bac47cf628ba0784f11ca06d5eb->leave($__internal_5ab2fce8e9cd17d4a04d6303abeb8b79dd8a1bac47cf628ba0784f11ca06d5eb_prof);

        
        $__internal_acfecbc43a8c4a0d23006578cccc81d93eb3168ed3953606f17848db9eefcddb->leave($__internal_acfecbc43a8c4a0d23006578cccc81d93eb3168ed3953606f17848db9eefcddb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
