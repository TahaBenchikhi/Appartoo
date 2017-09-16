<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_faaa3555ecaf67f6dd1294fc0d8a1e433c6bbed3e258bbb9cb32923a44c170c9 extends Twig_Template
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
        $__internal_3a9110d25ce551db2216b80b219477a96557e48ad972f0126e8b01d3c14b20f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a9110d25ce551db2216b80b219477a96557e48ad972f0126e8b01d3c14b20f4->enter($__internal_3a9110d25ce551db2216b80b219477a96557e48ad972f0126e8b01d3c14b20f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_75c2c6464070bfdf3621bd6a8579fdeddc94a7eee27ba448242bb91ec147d18f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75c2c6464070bfdf3621bd6a8579fdeddc94a7eee27ba448242bb91ec147d18f->enter($__internal_75c2c6464070bfdf3621bd6a8579fdeddc94a7eee27ba448242bb91ec147d18f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3a9110d25ce551db2216b80b219477a96557e48ad972f0126e8b01d3c14b20f4->leave($__internal_3a9110d25ce551db2216b80b219477a96557e48ad972f0126e8b01d3c14b20f4_prof);

        
        $__internal_75c2c6464070bfdf3621bd6a8579fdeddc94a7eee27ba448242bb91ec147d18f->leave($__internal_75c2c6464070bfdf3621bd6a8579fdeddc94a7eee27ba448242bb91ec147d18f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
