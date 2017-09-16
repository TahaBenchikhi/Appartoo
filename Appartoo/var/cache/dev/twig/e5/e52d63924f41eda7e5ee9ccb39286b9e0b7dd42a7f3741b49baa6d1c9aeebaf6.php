<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_a7ca0dc7093b4805cf2a334ee2112fd447b05b8233603438a6f4b338e74f3eb7 extends Twig_Template
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
        $__internal_54d5e71f5966f1b8672a521f4bb9a1c24bfaa9b1ab0b4fe6929aafa8f0947a03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54d5e71f5966f1b8672a521f4bb9a1c24bfaa9b1ab0b4fe6929aafa8f0947a03->enter($__internal_54d5e71f5966f1b8672a521f4bb9a1c24bfaa9b1ab0b4fe6929aafa8f0947a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_ae7743fafe67a46c33d6a7733ae9ef41a33d5b1a5d36d28938564486a7e1cea1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae7743fafe67a46c33d6a7733ae9ef41a33d5b1a5d36d28938564486a7e1cea1->enter($__internal_ae7743fafe67a46c33d6a7733ae9ef41a33d5b1a5d36d28938564486a7e1cea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_54d5e71f5966f1b8672a521f4bb9a1c24bfaa9b1ab0b4fe6929aafa8f0947a03->leave($__internal_54d5e71f5966f1b8672a521f4bb9a1c24bfaa9b1ab0b4fe6929aafa8f0947a03_prof);

        
        $__internal_ae7743fafe67a46c33d6a7733ae9ef41a33d5b1a5d36d28938564486a7e1cea1->leave($__internal_ae7743fafe67a46c33d6a7733ae9ef41a33d5b1a5d36d28938564486a7e1cea1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
