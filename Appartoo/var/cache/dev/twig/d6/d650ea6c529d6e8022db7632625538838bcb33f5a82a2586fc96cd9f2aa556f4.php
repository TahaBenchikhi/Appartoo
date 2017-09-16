<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_c32cfcbd6d9e5fb7b55576d6b25cc06f539402c92902d9d35e80c76a25d0b2a4 extends Twig_Template
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
        $__internal_a45c7d1aad1580d545b33b5dd4f56210d5718dabd40ffd2b730d44285bd8d550 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a45c7d1aad1580d545b33b5dd4f56210d5718dabd40ffd2b730d44285bd8d550->enter($__internal_a45c7d1aad1580d545b33b5dd4f56210d5718dabd40ffd2b730d44285bd8d550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_1f8668ed22f8fb29fddcbe8cddaa0590a00d7257fddd536de6080e3518659fae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f8668ed22f8fb29fddcbe8cddaa0590a00d7257fddd536de6080e3518659fae->enter($__internal_1f8668ed22f8fb29fddcbe8cddaa0590a00d7257fddd536de6080e3518659fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_a45c7d1aad1580d545b33b5dd4f56210d5718dabd40ffd2b730d44285bd8d550->leave($__internal_a45c7d1aad1580d545b33b5dd4f56210d5718dabd40ffd2b730d44285bd8d550_prof);

        
        $__internal_1f8668ed22f8fb29fddcbe8cddaa0590a00d7257fddd536de6080e3518659fae->leave($__internal_1f8668ed22f8fb29fddcbe8cddaa0590a00d7257fddd536de6080e3518659fae_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
