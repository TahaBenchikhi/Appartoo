<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_3923a7537312516cb310f1a7d214d44c6014a936891830598ce845e7ef541f58 extends Twig_Template
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
        $__internal_ae0a359e0f194fa82a73f898f9789c5d81a23e4032e3454e75bd3a5d720fe315 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae0a359e0f194fa82a73f898f9789c5d81a23e4032e3454e75bd3a5d720fe315->enter($__internal_ae0a359e0f194fa82a73f898f9789c5d81a23e4032e3454e75bd3a5d720fe315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_19ae9f330022f14a24367c2974f4d4b93683adfc37fc0b51f2a39d9e2f55d6fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19ae9f330022f14a24367c2974f4d4b93683adfc37fc0b51f2a39d9e2f55d6fe->enter($__internal_19ae9f330022f14a24367c2974f4d4b93683adfc37fc0b51f2a39d9e2f55d6fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_ae0a359e0f194fa82a73f898f9789c5d81a23e4032e3454e75bd3a5d720fe315->leave($__internal_ae0a359e0f194fa82a73f898f9789c5d81a23e4032e3454e75bd3a5d720fe315_prof);

        
        $__internal_19ae9f330022f14a24367c2974f4d4b93683adfc37fc0b51f2a39d9e2f55d6fe->leave($__internal_19ae9f330022f14a24367c2974f4d4b93683adfc37fc0b51f2a39d9e2f55d6fe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
