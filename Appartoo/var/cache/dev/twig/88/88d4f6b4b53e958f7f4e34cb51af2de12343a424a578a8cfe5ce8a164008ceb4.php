<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_320956a3c8876e0ae5aea8abca1e6ded0343eb39ff2d5228fae9d739e959eec2 extends Twig_Template
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
        $__internal_fb6e6b2ea939de198570a7a7143b30c71b45e5186ede2cc8cd3d450b30e4c5d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb6e6b2ea939de198570a7a7143b30c71b45e5186ede2cc8cd3d450b30e4c5d1->enter($__internal_fb6e6b2ea939de198570a7a7143b30c71b45e5186ede2cc8cd3d450b30e4c5d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_fa69e7de5a44a49855e5c23f08c4dde8e6bb598983864bdd0248cb8bca8b8244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa69e7de5a44a49855e5c23f08c4dde8e6bb598983864bdd0248cb8bca8b8244->enter($__internal_fa69e7de5a44a49855e5c23f08c4dde8e6bb598983864bdd0248cb8bca8b8244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_fb6e6b2ea939de198570a7a7143b30c71b45e5186ede2cc8cd3d450b30e4c5d1->leave($__internal_fb6e6b2ea939de198570a7a7143b30c71b45e5186ede2cc8cd3d450b30e4c5d1_prof);

        
        $__internal_fa69e7de5a44a49855e5c23f08c4dde8e6bb598983864bdd0248cb8bca8b8244->leave($__internal_fa69e7de5a44a49855e5c23f08c4dde8e6bb598983864bdd0248cb8bca8b8244_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
