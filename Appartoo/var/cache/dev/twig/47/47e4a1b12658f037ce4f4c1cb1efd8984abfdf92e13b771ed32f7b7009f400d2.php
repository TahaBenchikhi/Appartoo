<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_99bce2bfd007c613e083694b9ccfe0285a4efc2dece9d917b7fd0b2ab2e372fa extends Twig_Template
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
        $__internal_55e2f8ea326659660c22cb05da2282148df0eb66f8c0965485bb5251bee9fa75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55e2f8ea326659660c22cb05da2282148df0eb66f8c0965485bb5251bee9fa75->enter($__internal_55e2f8ea326659660c22cb05da2282148df0eb66f8c0965485bb5251bee9fa75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_ae78708f862073aafe81fefe4e544b8a2c42bbf0236d064f26fd81023c3e4f24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae78708f862073aafe81fefe4e544b8a2c42bbf0236d064f26fd81023c3e4f24->enter($__internal_ae78708f862073aafe81fefe4e544b8a2c42bbf0236d064f26fd81023c3e4f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_55e2f8ea326659660c22cb05da2282148df0eb66f8c0965485bb5251bee9fa75->leave($__internal_55e2f8ea326659660c22cb05da2282148df0eb66f8c0965485bb5251bee9fa75_prof);

        
        $__internal_ae78708f862073aafe81fefe4e544b8a2c42bbf0236d064f26fd81023c3e4f24->leave($__internal_ae78708f862073aafe81fefe4e544b8a2c42bbf0236d064f26fd81023c3e4f24_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
