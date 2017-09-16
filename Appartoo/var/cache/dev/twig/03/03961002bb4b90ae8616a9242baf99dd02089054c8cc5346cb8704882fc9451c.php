<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_1761c6332f72f565103e18d5c150091532ed6585b7e1f579c0af27fdb290b664 extends Twig_Template
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
        $__internal_ef821657adcc2196638e1a54bdf1c0d06d24ced6d909bd8d7633659f669c70b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef821657adcc2196638e1a54bdf1c0d06d24ced6d909bd8d7633659f669c70b4->enter($__internal_ef821657adcc2196638e1a54bdf1c0d06d24ced6d909bd8d7633659f669c70b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_d35ade421db77e98e871bffadfb7353c6059e2c369538b8dcca0c50f148811ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d35ade421db77e98e871bffadfb7353c6059e2c369538b8dcca0c50f148811ed->enter($__internal_d35ade421db77e98e871bffadfb7353c6059e2c369538b8dcca0c50f148811ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_ef821657adcc2196638e1a54bdf1c0d06d24ced6d909bd8d7633659f669c70b4->leave($__internal_ef821657adcc2196638e1a54bdf1c0d06d24ced6d909bd8d7633659f669c70b4_prof);

        
        $__internal_d35ade421db77e98e871bffadfb7353c6059e2c369538b8dcca0c50f148811ed->leave($__internal_d35ade421db77e98e871bffadfb7353c6059e2c369538b8dcca0c50f148811ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
