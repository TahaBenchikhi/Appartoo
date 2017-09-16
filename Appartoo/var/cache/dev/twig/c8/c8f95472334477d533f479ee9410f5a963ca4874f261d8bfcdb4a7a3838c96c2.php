<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_ef1eab20373bc4335e8e7e0d725fb63206f6cf7b351e7b56416436a02b151b56 extends Twig_Template
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
        $__internal_e355d3f888cf1becbf7e2ec0417a806b05c6d669286a9386d3018543215be131 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e355d3f888cf1becbf7e2ec0417a806b05c6d669286a9386d3018543215be131->enter($__internal_e355d3f888cf1becbf7e2ec0417a806b05c6d669286a9386d3018543215be131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_3feafb0a6c1b5c0c192c14e8081789c6fc1fba24932823b2fedd14f2d6d212c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3feafb0a6c1b5c0c192c14e8081789c6fc1fba24932823b2fedd14f2d6d212c2->enter($__internal_3feafb0a6c1b5c0c192c14e8081789c6fc1fba24932823b2fedd14f2d6d212c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_e355d3f888cf1becbf7e2ec0417a806b05c6d669286a9386d3018543215be131->leave($__internal_e355d3f888cf1becbf7e2ec0417a806b05c6d669286a9386d3018543215be131_prof);

        
        $__internal_3feafb0a6c1b5c0c192c14e8081789c6fc1fba24932823b2fedd14f2d6d212c2->leave($__internal_3feafb0a6c1b5c0c192c14e8081789c6fc1fba24932823b2fedd14f2d6d212c2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
