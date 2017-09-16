<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_544eceb123f90ab3edc622926914de35dee6fef7a019f24b2b99c393bf87f121 extends Twig_Template
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
        $__internal_16f7afa2f23074645d9f83a2961b6176525b0244c8f6a6270ea007a460b40628 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16f7afa2f23074645d9f83a2961b6176525b0244c8f6a6270ea007a460b40628->enter($__internal_16f7afa2f23074645d9f83a2961b6176525b0244c8f6a6270ea007a460b40628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_7fc94f18c48b5b00cff0a7c81df42b8dd1822d29071d740e257f720fd6065edb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fc94f18c48b5b00cff0a7c81df42b8dd1822d29071d740e257f720fd6065edb->enter($__internal_7fc94f18c48b5b00cff0a7c81df42b8dd1822d29071d740e257f720fd6065edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_16f7afa2f23074645d9f83a2961b6176525b0244c8f6a6270ea007a460b40628->leave($__internal_16f7afa2f23074645d9f83a2961b6176525b0244c8f6a6270ea007a460b40628_prof);

        
        $__internal_7fc94f18c48b5b00cff0a7c81df42b8dd1822d29071d740e257f720fd6065edb->leave($__internal_7fc94f18c48b5b00cff0a7c81df42b8dd1822d29071d740e257f720fd6065edb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
