<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_90784263706ccb0d5e5d97ab31ddaa0342fa64a83aa6f3878240b141aadd7566 extends Twig_Template
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
        $__internal_a6c5fd6ce50747654bfa68e4bfca5b6888f128dc80be4c33f0ad9f1e8ac610ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6c5fd6ce50747654bfa68e4bfca5b6888f128dc80be4c33f0ad9f1e8ac610ef->enter($__internal_a6c5fd6ce50747654bfa68e4bfca5b6888f128dc80be4c33f0ad9f1e8ac610ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_dd5252c654a772b570120073466617dd88fef8478da5f39527e7a97227d09421 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd5252c654a772b570120073466617dd88fef8478da5f39527e7a97227d09421->enter($__internal_dd5252c654a772b570120073466617dd88fef8478da5f39527e7a97227d09421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_a6c5fd6ce50747654bfa68e4bfca5b6888f128dc80be4c33f0ad9f1e8ac610ef->leave($__internal_a6c5fd6ce50747654bfa68e4bfca5b6888f128dc80be4c33f0ad9f1e8ac610ef_prof);

        
        $__internal_dd5252c654a772b570120073466617dd88fef8478da5f39527e7a97227d09421->leave($__internal_dd5252c654a772b570120073466617dd88fef8478da5f39527e7a97227d09421_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
