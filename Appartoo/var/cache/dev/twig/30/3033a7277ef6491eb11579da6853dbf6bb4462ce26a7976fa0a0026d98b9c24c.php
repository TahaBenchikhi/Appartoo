<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_09f66bc8c257df05b28b019110722ba1ae4f2ea88a4583245711d52719488c38 extends Twig_Template
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
        $__internal_e4e6751730a38ed89f7d32dde9638ce9aa7405f722bc8228f55d5a22f56d877e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4e6751730a38ed89f7d32dde9638ce9aa7405f722bc8228f55d5a22f56d877e->enter($__internal_e4e6751730a38ed89f7d32dde9638ce9aa7405f722bc8228f55d5a22f56d877e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_03e41ff39a31b296f73c7c2832e0e83b8aa375850d8c133d002e9cf5c5c6a9bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03e41ff39a31b296f73c7c2832e0e83b8aa375850d8c133d002e9cf5c5c6a9bb->enter($__internal_03e41ff39a31b296f73c7c2832e0e83b8aa375850d8c133d002e9cf5c5c6a9bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e4e6751730a38ed89f7d32dde9638ce9aa7405f722bc8228f55d5a22f56d877e->leave($__internal_e4e6751730a38ed89f7d32dde9638ce9aa7405f722bc8228f55d5a22f56d877e_prof);

        
        $__internal_03e41ff39a31b296f73c7c2832e0e83b8aa375850d8c133d002e9cf5c5c6a9bb->leave($__internal_03e41ff39a31b296f73c7c2832e0e83b8aa375850d8c133d002e9cf5c5c6a9bb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
