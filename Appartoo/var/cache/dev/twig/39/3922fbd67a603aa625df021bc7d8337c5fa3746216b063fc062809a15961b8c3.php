<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_813d99ef0d6b208d6e353d560da2bfc8f22822f9aecd8e20199f983a94aca8d9 extends Twig_Template
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
        $__internal_472e68ef9466e8ea8528904e4ca7a168e20b7d71a1851b75b5de5bfacf1523fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_472e68ef9466e8ea8528904e4ca7a168e20b7d71a1851b75b5de5bfacf1523fb->enter($__internal_472e68ef9466e8ea8528904e4ca7a168e20b7d71a1851b75b5de5bfacf1523fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_35bd5152492ed12c543c3e6de59d86dbd61286f07ee36a0d497ab533aff0419a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35bd5152492ed12c543c3e6de59d86dbd61286f07ee36a0d497ab533aff0419a->enter($__internal_35bd5152492ed12c543c3e6de59d86dbd61286f07ee36a0d497ab533aff0419a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_472e68ef9466e8ea8528904e4ca7a168e20b7d71a1851b75b5de5bfacf1523fb->leave($__internal_472e68ef9466e8ea8528904e4ca7a168e20b7d71a1851b75b5de5bfacf1523fb_prof);

        
        $__internal_35bd5152492ed12c543c3e6de59d86dbd61286f07ee36a0d497ab533aff0419a->leave($__internal_35bd5152492ed12c543c3e6de59d86dbd61286f07ee36a0d497ab533aff0419a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
