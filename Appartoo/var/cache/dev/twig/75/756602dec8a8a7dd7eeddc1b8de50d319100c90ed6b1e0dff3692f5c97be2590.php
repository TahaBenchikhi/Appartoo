<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_39fd64b77a20582ceb43ddb85a8a4b5edce979b354dcfab69ebb7cc4ae260f20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_95bfd71a651e7ead32794082c18bec57b9bbfd7c9dd5d3b33445202b8485238d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95bfd71a651e7ead32794082c18bec57b9bbfd7c9dd5d3b33445202b8485238d->enter($__internal_95bfd71a651e7ead32794082c18bec57b9bbfd7c9dd5d3b33445202b8485238d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_e8f7476cd02a128eb6d656756916be35497ea346b66cf809c4ecd115a1688b51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8f7476cd02a128eb6d656756916be35497ea346b66cf809c4ecd115a1688b51->enter($__internal_e8f7476cd02a128eb6d656756916be35497ea346b66cf809c4ecd115a1688b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95bfd71a651e7ead32794082c18bec57b9bbfd7c9dd5d3b33445202b8485238d->leave($__internal_95bfd71a651e7ead32794082c18bec57b9bbfd7c9dd5d3b33445202b8485238d_prof);

        
        $__internal_e8f7476cd02a128eb6d656756916be35497ea346b66cf809c4ecd115a1688b51->leave($__internal_e8f7476cd02a128eb6d656756916be35497ea346b66cf809c4ecd115a1688b51_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cbe1946d24bc99d3c7e8976335d493d252e63427afaf4ddb455413506a6b6724 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbe1946d24bc99d3c7e8976335d493d252e63427afaf4ddb455413506a6b6724->enter($__internal_cbe1946d24bc99d3c7e8976335d493d252e63427afaf4ddb455413506a6b6724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_41a80cb685704948d73356862108b6292e27a13a7a07a621882dcdb4480aef10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41a80cb685704948d73356862108b6292e27a13a7a07a621882dcdb4480aef10->enter($__internal_41a80cb685704948d73356862108b6292e27a13a7a07a621882dcdb4480aef10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_41a80cb685704948d73356862108b6292e27a13a7a07a621882dcdb4480aef10->leave($__internal_41a80cb685704948d73356862108b6292e27a13a7a07a621882dcdb4480aef10_prof);

        
        $__internal_cbe1946d24bc99d3c7e8976335d493d252e63427afaf4ddb455413506a6b6724->leave($__internal_cbe1946d24bc99d3c7e8976335d493d252e63427afaf4ddb455413506a6b6724_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_42e6c882860ced873516e0c9960bfa7a73fd05810d33edd787f13deb988daac7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42e6c882860ced873516e0c9960bfa7a73fd05810d33edd787f13deb988daac7->enter($__internal_42e6c882860ced873516e0c9960bfa7a73fd05810d33edd787f13deb988daac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d755a14081b8240e7c4f988d21a9d5261b94b8180a156c04a5d173d446042005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d755a14081b8240e7c4f988d21a9d5261b94b8180a156c04a5d173d446042005->enter($__internal_d755a14081b8240e7c4f988d21a9d5261b94b8180a156c04a5d173d446042005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d755a14081b8240e7c4f988d21a9d5261b94b8180a156c04a5d173d446042005->leave($__internal_d755a14081b8240e7c4f988d21a9d5261b94b8180a156c04a5d173d446042005_prof);

        
        $__internal_42e6c882860ced873516e0c9960bfa7a73fd05810d33edd787f13deb988daac7->leave($__internal_42e6c882860ced873516e0c9960bfa7a73fd05810d33edd787f13deb988daac7_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c276ecee5cf0dd342739a8c5eeef757af9b181391cba9e709a3c0be97e9ea30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c276ecee5cf0dd342739a8c5eeef757af9b181391cba9e709a3c0be97e9ea30->enter($__internal_6c276ecee5cf0dd342739a8c5eeef757af9b181391cba9e709a3c0be97e9ea30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_56318477fa7a239c776f2341783f5b4444d65f4a7ebb90437112e77b22275a86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56318477fa7a239c776f2341783f5b4444d65f4a7ebb90437112e77b22275a86->enter($__internal_56318477fa7a239c776f2341783f5b4444d65f4a7ebb90437112e77b22275a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_56318477fa7a239c776f2341783f5b4444d65f4a7ebb90437112e77b22275a86->leave($__internal_56318477fa7a239c776f2341783f5b4444d65f4a7ebb90437112e77b22275a86_prof);

        
        $__internal_6c276ecee5cf0dd342739a8c5eeef757af9b181391cba9e709a3c0be97e9ea30->leave($__internal_6c276ecee5cf0dd342739a8c5eeef757af9b181391cba9e709a3c0be97e9ea30_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
