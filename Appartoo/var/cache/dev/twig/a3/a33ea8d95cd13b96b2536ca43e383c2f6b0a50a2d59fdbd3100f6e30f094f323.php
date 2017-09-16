<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_d203453b5adb32e15cb07be2bd4dfdd5f32595680749d72d52af32f8d7673393 extends Twig_Template
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
        $__internal_68a97e4d4ae89e7bd6bfea9702f6a432fde00911f2e740501b0e73017ead94e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68a97e4d4ae89e7bd6bfea9702f6a432fde00911f2e740501b0e73017ead94e8->enter($__internal_68a97e4d4ae89e7bd6bfea9702f6a432fde00911f2e740501b0e73017ead94e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_ee50f8ce702c13b9bdbc8a56593a58022d1247a5d12f6311541c306eb7bcfb1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee50f8ce702c13b9bdbc8a56593a58022d1247a5d12f6311541c306eb7bcfb1b->enter($__internal_ee50f8ce702c13b9bdbc8a56593a58022d1247a5d12f6311541c306eb7bcfb1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_68a97e4d4ae89e7bd6bfea9702f6a432fde00911f2e740501b0e73017ead94e8->leave($__internal_68a97e4d4ae89e7bd6bfea9702f6a432fde00911f2e740501b0e73017ead94e8_prof);

        
        $__internal_ee50f8ce702c13b9bdbc8a56593a58022d1247a5d12f6311541c306eb7bcfb1b->leave($__internal_ee50f8ce702c13b9bdbc8a56593a58022d1247a5d12f6311541c306eb7bcfb1b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
