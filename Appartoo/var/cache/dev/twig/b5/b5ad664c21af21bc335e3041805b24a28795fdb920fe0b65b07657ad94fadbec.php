<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_20ec72c20e22018c92b4e6421bfb94ba17b75681a627b008b254483f5d18155d extends Twig_Template
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
        $__internal_8521dcc00e440300ca590c3d38929dff3e3dbdceb91c5c0c880204b4b1fa07b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8521dcc00e440300ca590c3d38929dff3e3dbdceb91c5c0c880204b4b1fa07b1->enter($__internal_8521dcc00e440300ca590c3d38929dff3e3dbdceb91c5c0c880204b4b1fa07b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_c5c7e819551b92afe8d8bb7a30927796938e78f53e76852aaab36c3da7b8b181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5c7e819551b92afe8d8bb7a30927796938e78f53e76852aaab36c3da7b8b181->enter($__internal_c5c7e819551b92afe8d8bb7a30927796938e78f53e76852aaab36c3da7b8b181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_8521dcc00e440300ca590c3d38929dff3e3dbdceb91c5c0c880204b4b1fa07b1->leave($__internal_8521dcc00e440300ca590c3d38929dff3e3dbdceb91c5c0c880204b4b1fa07b1_prof);

        
        $__internal_c5c7e819551b92afe8d8bb7a30927796938e78f53e76852aaab36c3da7b8b181->leave($__internal_c5c7e819551b92afe8d8bb7a30927796938e78f53e76852aaab36c3da7b8b181_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
