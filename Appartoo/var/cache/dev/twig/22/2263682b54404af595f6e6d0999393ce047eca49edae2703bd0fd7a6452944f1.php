<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_28b68d99d7b21fa81c8dfffcc170db1832250f1fe75792b54c460e3e8840b646 extends Twig_Template
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
        $__internal_eee726824c7a783194cfc4d532ce3c8eeee43a548852ca85820a26aba281090f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eee726824c7a783194cfc4d532ce3c8eeee43a548852ca85820a26aba281090f->enter($__internal_eee726824c7a783194cfc4d532ce3c8eeee43a548852ca85820a26aba281090f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_6c2982f942ba21c42ce0e25c464ee9bbfe419fd9ac7e4042675d66e31146fd55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c2982f942ba21c42ce0e25c464ee9bbfe419fd9ac7e4042675d66e31146fd55->enter($__internal_6c2982f942ba21c42ce0e25c464ee9bbfe419fd9ac7e4042675d66e31146fd55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_eee726824c7a783194cfc4d532ce3c8eeee43a548852ca85820a26aba281090f->leave($__internal_eee726824c7a783194cfc4d532ce3c8eeee43a548852ca85820a26aba281090f_prof);

        
        $__internal_6c2982f942ba21c42ce0e25c464ee9bbfe419fd9ac7e4042675d66e31146fd55->leave($__internal_6c2982f942ba21c42ce0e25c464ee9bbfe419fd9ac7e4042675d66e31146fd55_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
