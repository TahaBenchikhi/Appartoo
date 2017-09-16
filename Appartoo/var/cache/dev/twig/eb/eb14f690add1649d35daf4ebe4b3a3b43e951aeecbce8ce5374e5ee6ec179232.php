<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_8abf24a7fd9465cf4596135d5b010e59c3764277ca4bd022e48a982905834aec extends Twig_Template
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
        $__internal_b96f34a0acb71a3e2c08a3ce8154fcfbd78f2e28893c42a41921c94e276c4993 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b96f34a0acb71a3e2c08a3ce8154fcfbd78f2e28893c42a41921c94e276c4993->enter($__internal_b96f34a0acb71a3e2c08a3ce8154fcfbd78f2e28893c42a41921c94e276c4993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_2a5322f790e8a244135498391b756e8c142d1df01f16ac3e45ea0b4a789abbea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a5322f790e8a244135498391b756e8c142d1df01f16ac3e45ea0b4a789abbea->enter($__internal_2a5322f790e8a244135498391b756e8c142d1df01f16ac3e45ea0b4a789abbea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b96f34a0acb71a3e2c08a3ce8154fcfbd78f2e28893c42a41921c94e276c4993->leave($__internal_b96f34a0acb71a3e2c08a3ce8154fcfbd78f2e28893c42a41921c94e276c4993_prof);

        
        $__internal_2a5322f790e8a244135498391b756e8c142d1df01f16ac3e45ea0b4a789abbea->leave($__internal_2a5322f790e8a244135498391b756e8c142d1df01f16ac3e45ea0b4a789abbea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
