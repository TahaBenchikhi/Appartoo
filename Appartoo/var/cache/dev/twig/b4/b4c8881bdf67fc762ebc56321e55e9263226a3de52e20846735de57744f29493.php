<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_45491dec442d3cd38ca54e618116e4503bda3b7204917248377e2fbfc0a7dea8 extends Twig_Template
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
        $__internal_b2164e925c3bf16331410e55dc3211cdf30d14a0279b594fbf57d9d0b2c1cba2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2164e925c3bf16331410e55dc3211cdf30d14a0279b594fbf57d9d0b2c1cba2->enter($__internal_b2164e925c3bf16331410e55dc3211cdf30d14a0279b594fbf57d9d0b2c1cba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_99fed9392ed172e400a8c4b1061c7795866aa61efbe5f7b8b9752155c34b6498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99fed9392ed172e400a8c4b1061c7795866aa61efbe5f7b8b9752155c34b6498->enter($__internal_99fed9392ed172e400a8c4b1061c7795866aa61efbe5f7b8b9752155c34b6498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_b2164e925c3bf16331410e55dc3211cdf30d14a0279b594fbf57d9d0b2c1cba2->leave($__internal_b2164e925c3bf16331410e55dc3211cdf30d14a0279b594fbf57d9d0b2c1cba2_prof);

        
        $__internal_99fed9392ed172e400a8c4b1061c7795866aa61efbe5f7b8b9752155c34b6498->leave($__internal_99fed9392ed172e400a8c4b1061c7795866aa61efbe5f7b8b9752155c34b6498_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
