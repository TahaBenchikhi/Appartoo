<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_c3881a6fa7557b791aa1babc7bc910e31dfc70ab8e11957f533b906e774406c4 extends Twig_Template
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
        $__internal_3de0e9a44da97420c1853f314f4d4dd262c1cc2980493c4ea072abf4a12bd01f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3de0e9a44da97420c1853f314f4d4dd262c1cc2980493c4ea072abf4a12bd01f->enter($__internal_3de0e9a44da97420c1853f314f4d4dd262c1cc2980493c4ea072abf4a12bd01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_7de22f972eab17b9093c57f772508d7686343b1626c47488e453e236e456b3ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7de22f972eab17b9093c57f772508d7686343b1626c47488e453e236e456b3ad->enter($__internal_7de22f972eab17b9093c57f772508d7686343b1626c47488e453e236e456b3ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_3de0e9a44da97420c1853f314f4d4dd262c1cc2980493c4ea072abf4a12bd01f->leave($__internal_3de0e9a44da97420c1853f314f4d4dd262c1cc2980493c4ea072abf4a12bd01f_prof);

        
        $__internal_7de22f972eab17b9093c57f772508d7686343b1626c47488e453e236e456b3ad->leave($__internal_7de22f972eab17b9093c57f772508d7686343b1626c47488e453e236e456b3ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
