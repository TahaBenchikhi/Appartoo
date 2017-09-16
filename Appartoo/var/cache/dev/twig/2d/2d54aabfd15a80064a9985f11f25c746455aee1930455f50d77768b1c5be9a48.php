<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_298099f2a6a23a708603ea8659d2eeab437efdd8c90fd17f899b84254ff8f550 extends Twig_Template
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
        $__internal_6c88d181a8c6e057bdd0f6f497c7fee7b14fb6c70fa7214cd39c75e79636e871 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c88d181a8c6e057bdd0f6f497c7fee7b14fb6c70fa7214cd39c75e79636e871->enter($__internal_6c88d181a8c6e057bdd0f6f497c7fee7b14fb6c70fa7214cd39c75e79636e871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_44783b5b1b1e0342c8f14fe60b78d1472fbf14e2c12b298d93cf6c0b524dca49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44783b5b1b1e0342c8f14fe60b78d1472fbf14e2c12b298d93cf6c0b524dca49->enter($__internal_44783b5b1b1e0342c8f14fe60b78d1472fbf14e2c12b298d93cf6c0b524dca49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_6c88d181a8c6e057bdd0f6f497c7fee7b14fb6c70fa7214cd39c75e79636e871->leave($__internal_6c88d181a8c6e057bdd0f6f497c7fee7b14fb6c70fa7214cd39c75e79636e871_prof);

        
        $__internal_44783b5b1b1e0342c8f14fe60b78d1472fbf14e2c12b298d93cf6c0b524dca49->leave($__internal_44783b5b1b1e0342c8f14fe60b78d1472fbf14e2c12b298d93cf6c0b524dca49_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
