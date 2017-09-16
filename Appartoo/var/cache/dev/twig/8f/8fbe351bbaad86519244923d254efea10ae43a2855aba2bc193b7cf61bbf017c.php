<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_c26308d70f3e2fc16626de031067fc9595247e7c42a673b9a37a2016c6468425 extends Twig_Template
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
        $__internal_01b8ecf9a67effa8f6f175c87a081f074e53c25a93c12f80a1c282f39107250b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01b8ecf9a67effa8f6f175c87a081f074e53c25a93c12f80a1c282f39107250b->enter($__internal_01b8ecf9a67effa8f6f175c87a081f074e53c25a93c12f80a1c282f39107250b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_64cb942a2a04cba6208418a60ebd4f3017f30555e9ec4515e45219fb39b54ed0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64cb942a2a04cba6208418a60ebd4f3017f30555e9ec4515e45219fb39b54ed0->enter($__internal_64cb942a2a04cba6208418a60ebd4f3017f30555e9ec4515e45219fb39b54ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_01b8ecf9a67effa8f6f175c87a081f074e53c25a93c12f80a1c282f39107250b->leave($__internal_01b8ecf9a67effa8f6f175c87a081f074e53c25a93c12f80a1c282f39107250b_prof);

        
        $__internal_64cb942a2a04cba6208418a60ebd4f3017f30555e9ec4515e45219fb39b54ed0->leave($__internal_64cb942a2a04cba6208418a60ebd4f3017f30555e9ec4515e45219fb39b54ed0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
