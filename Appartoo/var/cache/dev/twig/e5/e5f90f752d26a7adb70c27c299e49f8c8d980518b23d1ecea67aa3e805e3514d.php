<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_41528b0a910c67afbc829d8c99cafeedc5539d49b4d56fa069c84ab9f6226e9b extends Twig_Template
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
        $__internal_cb35743439c0351e7db1c855fdec8c7e059360baf9607303308af4db984776a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb35743439c0351e7db1c855fdec8c7e059360baf9607303308af4db984776a0->enter($__internal_cb35743439c0351e7db1c855fdec8c7e059360baf9607303308af4db984776a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_2c0fca0343e14826e4b71dd876cec6a3a53c7863425e2c2b7185a559ffd1e10a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c0fca0343e14826e4b71dd876cec6a3a53c7863425e2c2b7185a559ffd1e10a->enter($__internal_2c0fca0343e14826e4b71dd876cec6a3a53c7863425e2c2b7185a559ffd1e10a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_cb35743439c0351e7db1c855fdec8c7e059360baf9607303308af4db984776a0->leave($__internal_cb35743439c0351e7db1c855fdec8c7e059360baf9607303308af4db984776a0_prof);

        
        $__internal_2c0fca0343e14826e4b71dd876cec6a3a53c7863425e2c2b7185a559ffd1e10a->leave($__internal_2c0fca0343e14826e4b71dd876cec6a3a53c7863425e2c2b7185a559ffd1e10a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
