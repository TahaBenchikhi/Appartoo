<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_9ed47e9122ca43e0b48a170612f7b022aab2ce81a9e7820b48a3f9c9bdbe829f extends Twig_Template
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
        $__internal_45c89c13ad4e4b983907acdfc0fa2dd109a7377eba5af9bc6c596c24688148f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45c89c13ad4e4b983907acdfc0fa2dd109a7377eba5af9bc6c596c24688148f7->enter($__internal_45c89c13ad4e4b983907acdfc0fa2dd109a7377eba5af9bc6c596c24688148f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_ec2be69db0f00cb8a8c7bbf8e70ffad22aefe3befcfcbc11cc7f7e9f2af09b0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec2be69db0f00cb8a8c7bbf8e70ffad22aefe3befcfcbc11cc7f7e9f2af09b0c->enter($__internal_ec2be69db0f00cb8a8c7bbf8e70ffad22aefe3befcfcbc11cc7f7e9f2af09b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_45c89c13ad4e4b983907acdfc0fa2dd109a7377eba5af9bc6c596c24688148f7->leave($__internal_45c89c13ad4e4b983907acdfc0fa2dd109a7377eba5af9bc6c596c24688148f7_prof);

        
        $__internal_ec2be69db0f00cb8a8c7bbf8e70ffad22aefe3befcfcbc11cc7f7e9f2af09b0c->leave($__internal_ec2be69db0f00cb8a8c7bbf8e70ffad22aefe3befcfcbc11cc7f7e9f2af09b0c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
