<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_590e0d1656fe47aef845ab4cc569065fffc90539b95839532bd5d7832f02dd2f extends Twig_Template
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
        $__internal_3281d23e032464966d8287cab660a17aeb2ffb78a10c209b7ddd31901c962faf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3281d23e032464966d8287cab660a17aeb2ffb78a10c209b7ddd31901c962faf->enter($__internal_3281d23e032464966d8287cab660a17aeb2ffb78a10c209b7ddd31901c962faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_a1ec3dba482c5064a2a89051c9b7d76edbd18645cffad0e7b2bfa3c7448d0958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1ec3dba482c5064a2a89051c9b7d76edbd18645cffad0e7b2bfa3c7448d0958->enter($__internal_a1ec3dba482c5064a2a89051c9b7d76edbd18645cffad0e7b2bfa3c7448d0958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_3281d23e032464966d8287cab660a17aeb2ffb78a10c209b7ddd31901c962faf->leave($__internal_3281d23e032464966d8287cab660a17aeb2ffb78a10c209b7ddd31901c962faf_prof);

        
        $__internal_a1ec3dba482c5064a2a89051c9b7d76edbd18645cffad0e7b2bfa3c7448d0958->leave($__internal_a1ec3dba482c5064a2a89051c9b7d76edbd18645cffad0e7b2bfa3c7448d0958_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
