<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_035d5de76bad5154611344b9ac0306e9d8411a66319f11808d0e93e055efb968 extends Twig_Template
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
        $__internal_0c8a2bc8edc4e34e5e0887785821f68473d49913e8b778ae9e41cda7711ebfff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c8a2bc8edc4e34e5e0887785821f68473d49913e8b778ae9e41cda7711ebfff->enter($__internal_0c8a2bc8edc4e34e5e0887785821f68473d49913e8b778ae9e41cda7711ebfff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_155903f0c71fa0e00a4e52a75ff92f9e8e05400243dff88973e3801228e846c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_155903f0c71fa0e00a4e52a75ff92f9e8e05400243dff88973e3801228e846c3->enter($__internal_155903f0c71fa0e00a4e52a75ff92f9e8e05400243dff88973e3801228e846c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_0c8a2bc8edc4e34e5e0887785821f68473d49913e8b778ae9e41cda7711ebfff->leave($__internal_0c8a2bc8edc4e34e5e0887785821f68473d49913e8b778ae9e41cda7711ebfff_prof);

        
        $__internal_155903f0c71fa0e00a4e52a75ff92f9e8e05400243dff88973e3801228e846c3->leave($__internal_155903f0c71fa0e00a4e52a75ff92f9e8e05400243dff88973e3801228e846c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
