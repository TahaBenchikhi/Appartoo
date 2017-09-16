<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_788503598b325b0fe2db2d8fd4714b14560fef35ee8d1454c80d66842efb3ce5 extends Twig_Template
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
        $__internal_191c18b11b436123211d07c8e947ac79af5ab909c8655d063bc5410e7f0d9ddd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_191c18b11b436123211d07c8e947ac79af5ab909c8655d063bc5410e7f0d9ddd->enter($__internal_191c18b11b436123211d07c8e947ac79af5ab909c8655d063bc5410e7f0d9ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_c2b5be5ba1e087af3c4ad1ad6001ec52401a16f8cc20b920d4bfbaaa57ab976d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2b5be5ba1e087af3c4ad1ad6001ec52401a16f8cc20b920d4bfbaaa57ab976d->enter($__internal_c2b5be5ba1e087af3c4ad1ad6001ec52401a16f8cc20b920d4bfbaaa57ab976d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_191c18b11b436123211d07c8e947ac79af5ab909c8655d063bc5410e7f0d9ddd->leave($__internal_191c18b11b436123211d07c8e947ac79af5ab909c8655d063bc5410e7f0d9ddd_prof);

        
        $__internal_c2b5be5ba1e087af3c4ad1ad6001ec52401a16f8cc20b920d4bfbaaa57ab976d->leave($__internal_c2b5be5ba1e087af3c4ad1ad6001ec52401a16f8cc20b920d4bfbaaa57ab976d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
