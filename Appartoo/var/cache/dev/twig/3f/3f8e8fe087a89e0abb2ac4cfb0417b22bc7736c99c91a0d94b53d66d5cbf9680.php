<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_8c37657f0cb6e9e86578da9b539773576896016ed545a57263743211646ea8f8 extends Twig_Template
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
        $__internal_88b4b1a2c7104a80905de4f37b94f979c7a0ad9e3c7622a13db58175f9a0840e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88b4b1a2c7104a80905de4f37b94f979c7a0ad9e3c7622a13db58175f9a0840e->enter($__internal_88b4b1a2c7104a80905de4f37b94f979c7a0ad9e3c7622a13db58175f9a0840e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_cfd4a2c87bac973820642e38f7ded7c3aa129f420304361603283fe9b10a3c8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfd4a2c87bac973820642e38f7ded7c3aa129f420304361603283fe9b10a3c8e->enter($__internal_cfd4a2c87bac973820642e38f7ded7c3aa129f420304361603283fe9b10a3c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_88b4b1a2c7104a80905de4f37b94f979c7a0ad9e3c7622a13db58175f9a0840e->leave($__internal_88b4b1a2c7104a80905de4f37b94f979c7a0ad9e3c7622a13db58175f9a0840e_prof);

        
        $__internal_cfd4a2c87bac973820642e38f7ded7c3aa129f420304361603283fe9b10a3c8e->leave($__internal_cfd4a2c87bac973820642e38f7ded7c3aa129f420304361603283fe9b10a3c8e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
