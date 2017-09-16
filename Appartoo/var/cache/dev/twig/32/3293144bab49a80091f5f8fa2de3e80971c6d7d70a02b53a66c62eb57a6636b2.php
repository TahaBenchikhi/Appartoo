<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_db3e18dc0eab23a86facc6241065d5b06e315453ac9bfd166141071a94449b10 extends Twig_Template
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
        $__internal_be40f03219cde7b423ec239263e0edb9652c580d660f9b3b08b6fdde6c35c481 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be40f03219cde7b423ec239263e0edb9652c580d660f9b3b08b6fdde6c35c481->enter($__internal_be40f03219cde7b423ec239263e0edb9652c580d660f9b3b08b6fdde6c35c481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_6c9c17e53cfc31c86cdf40eb4a0489ab18acec590078eb4041f2f19eb15c202e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c9c17e53cfc31c86cdf40eb4a0489ab18acec590078eb4041f2f19eb15c202e->enter($__internal_6c9c17e53cfc31c86cdf40eb4a0489ab18acec590078eb4041f2f19eb15c202e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_be40f03219cde7b423ec239263e0edb9652c580d660f9b3b08b6fdde6c35c481->leave($__internal_be40f03219cde7b423ec239263e0edb9652c580d660f9b3b08b6fdde6c35c481_prof);

        
        $__internal_6c9c17e53cfc31c86cdf40eb4a0489ab18acec590078eb4041f2f19eb15c202e->leave($__internal_6c9c17e53cfc31c86cdf40eb4a0489ab18acec590078eb4041f2f19eb15c202e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
