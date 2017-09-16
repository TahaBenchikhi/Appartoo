<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_70b1e2a7bde8dd80773bb175d771ca222c4fe9bccd1d1596af18e633d5f7a3f2 extends Twig_Template
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
        $__internal_d8aefc0e7a993454bf46964089ef26db3318b8db99c13497e21839ecffcf6543 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8aefc0e7a993454bf46964089ef26db3318b8db99c13497e21839ecffcf6543->enter($__internal_d8aefc0e7a993454bf46964089ef26db3318b8db99c13497e21839ecffcf6543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_50d47d197eeaa395b92f217163d66fedaa27f0dadbebbce263b18c1594b16c05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50d47d197eeaa395b92f217163d66fedaa27f0dadbebbce263b18c1594b16c05->enter($__internal_50d47d197eeaa395b92f217163d66fedaa27f0dadbebbce263b18c1594b16c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_d8aefc0e7a993454bf46964089ef26db3318b8db99c13497e21839ecffcf6543->leave($__internal_d8aefc0e7a993454bf46964089ef26db3318b8db99c13497e21839ecffcf6543_prof);

        
        $__internal_50d47d197eeaa395b92f217163d66fedaa27f0dadbebbce263b18c1594b16c05->leave($__internal_50d47d197eeaa395b92f217163d66fedaa27f0dadbebbce263b18c1594b16c05_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
