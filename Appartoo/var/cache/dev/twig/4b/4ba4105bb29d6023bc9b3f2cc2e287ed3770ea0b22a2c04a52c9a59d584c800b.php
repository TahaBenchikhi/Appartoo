<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_0cfa98972b8d7a715fbc4bf274eeeb182a2b3b48e09817ff4b1cfa5daca1b6e0 extends Twig_Template
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
        $__internal_044d751de50119b9f2c7d5c0dfb87e29248241324af85520834cb067f1672a9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_044d751de50119b9f2c7d5c0dfb87e29248241324af85520834cb067f1672a9f->enter($__internal_044d751de50119b9f2c7d5c0dfb87e29248241324af85520834cb067f1672a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_6eaaa83252d05c3ef4a7a276b93b1c33059bcbd09b23f7b5109f722a0e6c1911 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eaaa83252d05c3ef4a7a276b93b1c33059bcbd09b23f7b5109f722a0e6c1911->enter($__internal_6eaaa83252d05c3ef4a7a276b93b1c33059bcbd09b23f7b5109f722a0e6c1911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_044d751de50119b9f2c7d5c0dfb87e29248241324af85520834cb067f1672a9f->leave($__internal_044d751de50119b9f2c7d5c0dfb87e29248241324af85520834cb067f1672a9f_prof);

        
        $__internal_6eaaa83252d05c3ef4a7a276b93b1c33059bcbd09b23f7b5109f722a0e6c1911->leave($__internal_6eaaa83252d05c3ef4a7a276b93b1c33059bcbd09b23f7b5109f722a0e6c1911_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
