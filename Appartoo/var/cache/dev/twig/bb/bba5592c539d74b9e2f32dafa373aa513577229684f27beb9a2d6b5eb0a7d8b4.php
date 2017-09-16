<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_472b00460ec97d26e855e0f559bbd8c03f97d0288ba99d9dea8817ea652bcb2a extends Twig_Template
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
        $__internal_7b001a20d4a0395e1d74138ee23f68b4caa5262792d16ece361c43337cfdb028 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b001a20d4a0395e1d74138ee23f68b4caa5262792d16ece361c43337cfdb028->enter($__internal_7b001a20d4a0395e1d74138ee23f68b4caa5262792d16ece361c43337cfdb028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_13d5347d84b91f2f53482266c32b7757c4fb823f62cd58820a3dedaa56026cf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13d5347d84b91f2f53482266c32b7757c4fb823f62cd58820a3dedaa56026cf8->enter($__internal_13d5347d84b91f2f53482266c32b7757c4fb823f62cd58820a3dedaa56026cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_7b001a20d4a0395e1d74138ee23f68b4caa5262792d16ece361c43337cfdb028->leave($__internal_7b001a20d4a0395e1d74138ee23f68b4caa5262792d16ece361c43337cfdb028_prof);

        
        $__internal_13d5347d84b91f2f53482266c32b7757c4fb823f62cd58820a3dedaa56026cf8->leave($__internal_13d5347d84b91f2f53482266c32b7757c4fb823f62cd58820a3dedaa56026cf8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
