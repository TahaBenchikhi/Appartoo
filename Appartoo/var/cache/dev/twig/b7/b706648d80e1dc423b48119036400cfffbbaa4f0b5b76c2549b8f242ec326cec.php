<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_67f1a80dcd22a9c5a3b1e727e18659ceb16ff2d03f369079be7ad57887e7b122 extends Twig_Template
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
        $__internal_d330821b1907e45d9b55546a7792b9ff826496423a32c83ef72ed02200a35d95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d330821b1907e45d9b55546a7792b9ff826496423a32c83ef72ed02200a35d95->enter($__internal_d330821b1907e45d9b55546a7792b9ff826496423a32c83ef72ed02200a35d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_a8521ba877ecd3e2970c95f1f972d8ad9a051e0dd26e28f5f613a2f05d98ab3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8521ba877ecd3e2970c95f1f972d8ad9a051e0dd26e28f5f613a2f05d98ab3b->enter($__internal_a8521ba877ecd3e2970c95f1f972d8ad9a051e0dd26e28f5f613a2f05d98ab3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_d330821b1907e45d9b55546a7792b9ff826496423a32c83ef72ed02200a35d95->leave($__internal_d330821b1907e45d9b55546a7792b9ff826496423a32c83ef72ed02200a35d95_prof);

        
        $__internal_a8521ba877ecd3e2970c95f1f972d8ad9a051e0dd26e28f5f613a2f05d98ab3b->leave($__internal_a8521ba877ecd3e2970c95f1f972d8ad9a051e0dd26e28f5f613a2f05d98ab3b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
