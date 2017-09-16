<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_f42cf7b9155ccdb717fa27b41492c764fd40582c8244ab2e480d73845dac9d04 extends Twig_Template
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
        $__internal_4c881b87b23d6c4af7b24e9f1aa8c38717aaa233bac646b3df8d7b546f70f209 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c881b87b23d6c4af7b24e9f1aa8c38717aaa233bac646b3df8d7b546f70f209->enter($__internal_4c881b87b23d6c4af7b24e9f1aa8c38717aaa233bac646b3df8d7b546f70f209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_5dbc2cc3af47a678896d422cfb6438ec5606784fe513aef0ee7b53060c20c946 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dbc2cc3af47a678896d422cfb6438ec5606784fe513aef0ee7b53060c20c946->enter($__internal_5dbc2cc3af47a678896d422cfb6438ec5606784fe513aef0ee7b53060c20c946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4c881b87b23d6c4af7b24e9f1aa8c38717aaa233bac646b3df8d7b546f70f209->leave($__internal_4c881b87b23d6c4af7b24e9f1aa8c38717aaa233bac646b3df8d7b546f70f209_prof);

        
        $__internal_5dbc2cc3af47a678896d422cfb6438ec5606784fe513aef0ee7b53060c20c946->leave($__internal_5dbc2cc3af47a678896d422cfb6438ec5606784fe513aef0ee7b53060c20c946_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
