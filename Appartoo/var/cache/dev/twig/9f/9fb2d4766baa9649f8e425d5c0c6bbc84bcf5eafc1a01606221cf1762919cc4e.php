<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_5ddba719c9c84dc2f1630e2c3acede31e8f782f793cd37e0132f1ab76dae1f2a extends Twig_Template
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
        $__internal_9cc3e84e7925a7861723ee3edcb229da41422435445eb5d696696766b31287d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cc3e84e7925a7861723ee3edcb229da41422435445eb5d696696766b31287d1->enter($__internal_9cc3e84e7925a7861723ee3edcb229da41422435445eb5d696696766b31287d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_0e9f22b2378c3ef77657c05790fd693674a5184a1e209de18c8fb63b584fa554 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e9f22b2378c3ef77657c05790fd693674a5184a1e209de18c8fb63b584fa554->enter($__internal_0e9f22b2378c3ef77657c05790fd693674a5184a1e209de18c8fb63b584fa554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_9cc3e84e7925a7861723ee3edcb229da41422435445eb5d696696766b31287d1->leave($__internal_9cc3e84e7925a7861723ee3edcb229da41422435445eb5d696696766b31287d1_prof);

        
        $__internal_0e9f22b2378c3ef77657c05790fd693674a5184a1e209de18c8fb63b584fa554->leave($__internal_0e9f22b2378c3ef77657c05790fd693674a5184a1e209de18c8fb63b584fa554_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
