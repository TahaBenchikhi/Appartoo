<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_42b242e64ca85e830393a8cb59b29dc060699f5b68fa1e61b95ce086abc6c4ab extends Twig_Template
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
        $__internal_da6a7bf2cf271e12aeae526be922dc5ca6d6d4ef3b4bf6109ba30566804f1a74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da6a7bf2cf271e12aeae526be922dc5ca6d6d4ef3b4bf6109ba30566804f1a74->enter($__internal_da6a7bf2cf271e12aeae526be922dc5ca6d6d4ef3b4bf6109ba30566804f1a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_5053273024032bee7a58bb3273c8762b77334f00ea16a06ec1ece40188faa6cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5053273024032bee7a58bb3273c8762b77334f00ea16a06ec1ece40188faa6cd->enter($__internal_5053273024032bee7a58bb3273c8762b77334f00ea16a06ec1ece40188faa6cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_da6a7bf2cf271e12aeae526be922dc5ca6d6d4ef3b4bf6109ba30566804f1a74->leave($__internal_da6a7bf2cf271e12aeae526be922dc5ca6d6d4ef3b4bf6109ba30566804f1a74_prof);

        
        $__internal_5053273024032bee7a58bb3273c8762b77334f00ea16a06ec1ece40188faa6cd->leave($__internal_5053273024032bee7a58bb3273c8762b77334f00ea16a06ec1ece40188faa6cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
