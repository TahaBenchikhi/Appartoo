<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_97fdafa8b2e3dbf1843506c5ecd23dea4eb154ade845807b1e414714535e8999 extends Twig_Template
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
        $__internal_78ef524e5f55d88be9e1243dcdcec0d39fce6de8ddddd31fad6f47d99426cdff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78ef524e5f55d88be9e1243dcdcec0d39fce6de8ddddd31fad6f47d99426cdff->enter($__internal_78ef524e5f55d88be9e1243dcdcec0d39fce6de8ddddd31fad6f47d99426cdff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_3b9558de1246e374428f461e9a7ad31d9d9f5cf112040a46f1c52961fa0fcfcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b9558de1246e374428f461e9a7ad31d9d9f5cf112040a46f1c52961fa0fcfcd->enter($__internal_3b9558de1246e374428f461e9a7ad31d9d9f5cf112040a46f1c52961fa0fcfcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_78ef524e5f55d88be9e1243dcdcec0d39fce6de8ddddd31fad6f47d99426cdff->leave($__internal_78ef524e5f55d88be9e1243dcdcec0d39fce6de8ddddd31fad6f47d99426cdff_prof);

        
        $__internal_3b9558de1246e374428f461e9a7ad31d9d9f5cf112040a46f1c52961fa0fcfcd->leave($__internal_3b9558de1246e374428f461e9a7ad31d9d9f5cf112040a46f1c52961fa0fcfcd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
