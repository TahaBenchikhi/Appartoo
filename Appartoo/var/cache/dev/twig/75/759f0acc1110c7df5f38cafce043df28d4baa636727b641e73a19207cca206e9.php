<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_537dafe19aad3c085ee6e8de3defcf10426c3173281ebdaf33090df7fe45315b extends Twig_Template
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
        $__internal_dd66ecdff2a747566cfc47cbb940f279fd38777d13ba8933c7cd799e2bdb1156 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd66ecdff2a747566cfc47cbb940f279fd38777d13ba8933c7cd799e2bdb1156->enter($__internal_dd66ecdff2a747566cfc47cbb940f279fd38777d13ba8933c7cd799e2bdb1156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_ba059285fbf89016967b0460b60dcc308496e2f57c6ce4fd77b2b2b20b7f6f6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba059285fbf89016967b0460b60dcc308496e2f57c6ce4fd77b2b2b20b7f6f6f->enter($__internal_ba059285fbf89016967b0460b60dcc308496e2f57c6ce4fd77b2b2b20b7f6f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_dd66ecdff2a747566cfc47cbb940f279fd38777d13ba8933c7cd799e2bdb1156->leave($__internal_dd66ecdff2a747566cfc47cbb940f279fd38777d13ba8933c7cd799e2bdb1156_prof);

        
        $__internal_ba059285fbf89016967b0460b60dcc308496e2f57c6ce4fd77b2b2b20b7f6f6f->leave($__internal_ba059285fbf89016967b0460b60dcc308496e2f57c6ce4fd77b2b2b20b7f6f6f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
