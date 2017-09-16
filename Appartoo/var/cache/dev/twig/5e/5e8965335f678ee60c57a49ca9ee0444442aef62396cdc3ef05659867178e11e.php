<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_8e056758bbf498e36dc394e54ea3c1c9621998f54a210fc676ea4fce2635ce03 extends Twig_Template
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
        $__internal_a091ad1ca8cd6ce5c80a52fd7104409b7d5d8196ba84366c58b8b570d27f5082 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a091ad1ca8cd6ce5c80a52fd7104409b7d5d8196ba84366c58b8b570d27f5082->enter($__internal_a091ad1ca8cd6ce5c80a52fd7104409b7d5d8196ba84366c58b8b570d27f5082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_78b1500262f785f6a8724c064d7c08207a07633ffd8d3faced357b6a1784125c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78b1500262f785f6a8724c064d7c08207a07633ffd8d3faced357b6a1784125c->enter($__internal_78b1500262f785f6a8724c064d7c08207a07633ffd8d3faced357b6a1784125c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_a091ad1ca8cd6ce5c80a52fd7104409b7d5d8196ba84366c58b8b570d27f5082->leave($__internal_a091ad1ca8cd6ce5c80a52fd7104409b7d5d8196ba84366c58b8b570d27f5082_prof);

        
        $__internal_78b1500262f785f6a8724c064d7c08207a07633ffd8d3faced357b6a1784125c->leave($__internal_78b1500262f785f6a8724c064d7c08207a07633ffd8d3faced357b6a1784125c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
