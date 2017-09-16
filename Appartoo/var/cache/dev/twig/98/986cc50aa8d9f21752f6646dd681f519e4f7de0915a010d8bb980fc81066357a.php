<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_3d7abfa3213c3ffd0f88726be2576bc8ea425b5c93fbed7fe5b4e15b7d94dbd8 extends Twig_Template
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
        $__internal_de587e9d9a8bd5e19126ae971edf54a553dc9f46951fe2facaee68e3a079b595 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de587e9d9a8bd5e19126ae971edf54a553dc9f46951fe2facaee68e3a079b595->enter($__internal_de587e9d9a8bd5e19126ae971edf54a553dc9f46951fe2facaee68e3a079b595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_970d36a642135bbd3c3ab532a040faf3c4d9590de1953e223e87d07fd07a854a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_970d36a642135bbd3c3ab532a040faf3c4d9590de1953e223e87d07fd07a854a->enter($__internal_970d36a642135bbd3c3ab532a040faf3c4d9590de1953e223e87d07fd07a854a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_de587e9d9a8bd5e19126ae971edf54a553dc9f46951fe2facaee68e3a079b595->leave($__internal_de587e9d9a8bd5e19126ae971edf54a553dc9f46951fe2facaee68e3a079b595_prof);

        
        $__internal_970d36a642135bbd3c3ab532a040faf3c4d9590de1953e223e87d07fd07a854a->leave($__internal_970d36a642135bbd3c3ab532a040faf3c4d9590de1953e223e87d07fd07a854a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
