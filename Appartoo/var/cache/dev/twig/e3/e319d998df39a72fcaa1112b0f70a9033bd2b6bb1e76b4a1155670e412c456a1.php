<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_654892c36d44fb0b0f53afc7f2616157508e5e2bff2318124865b6ecedde41af extends Twig_Template
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
        $__internal_361511bba8a76a22c8eca2bdef401c444b780163c4ceb8ef74dd51a5c7efda84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_361511bba8a76a22c8eca2bdef401c444b780163c4ceb8ef74dd51a5c7efda84->enter($__internal_361511bba8a76a22c8eca2bdef401c444b780163c4ceb8ef74dd51a5c7efda84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_1aa6001696376af6e87ae87a4388a4fca50a6ade4f2e752b5cef90f1dcd79569 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aa6001696376af6e87ae87a4388a4fca50a6ade4f2e752b5cef90f1dcd79569->enter($__internal_1aa6001696376af6e87ae87a4388a4fca50a6ade4f2e752b5cef90f1dcd79569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_361511bba8a76a22c8eca2bdef401c444b780163c4ceb8ef74dd51a5c7efda84->leave($__internal_361511bba8a76a22c8eca2bdef401c444b780163c4ceb8ef74dd51a5c7efda84_prof);

        
        $__internal_1aa6001696376af6e87ae87a4388a4fca50a6ade4f2e752b5cef90f1dcd79569->leave($__internal_1aa6001696376af6e87ae87a4388a4fca50a6ade4f2e752b5cef90f1dcd79569_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
