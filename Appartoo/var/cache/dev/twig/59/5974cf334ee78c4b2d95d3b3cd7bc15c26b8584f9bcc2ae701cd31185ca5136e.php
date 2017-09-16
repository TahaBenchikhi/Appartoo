<?php

/* ::base.html.twig */
class __TwigTemplate_19a6c2d8e9e40a9f9bffc2acae057fa40c6067b4ef68dbe4f7de40837e37f601 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c8f588d438269f7abfe0b907d07794329b7183ab5d28a6375c492f836fbb567b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8f588d438269f7abfe0b907d07794329b7183ab5d28a6375c492f836fbb567b->enter($__internal_c8f588d438269f7abfe0b907d07794329b7183ab5d28a6375c492f836fbb567b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_8c97fdb5fea7177a528f587cf3139fa1a440a089e75ea298004b196b3698fc83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c97fdb5fea7177a528f587cf3139fa1a440a089e75ea298004b196b3698fc83->enter($__internal_8c97fdb5fea7177a528f587cf3139fa1a440a089e75ea298004b196b3698fc83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "    <!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "    </body>
</html>
";
        
        $__internal_c8f588d438269f7abfe0b907d07794329b7183ab5d28a6375c492f836fbb567b->leave($__internal_c8f588d438269f7abfe0b907d07794329b7183ab5d28a6375c492f836fbb567b_prof);

        
        $__internal_8c97fdb5fea7177a528f587cf3139fa1a440a089e75ea298004b196b3698fc83->leave($__internal_8c97fdb5fea7177a528f587cf3139fa1a440a089e75ea298004b196b3698fc83_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_622a1537ffe87fa634af5c3cc2aad007bb447735b4885b9967a16ef2aa46ac86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_622a1537ffe87fa634af5c3cc2aad007bb447735b4885b9967a16ef2aa46ac86->enter($__internal_622a1537ffe87fa634af5c3cc2aad007bb447735b4885b9967a16ef2aa46ac86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7c4cf5574d4b79e8bf05a21c9368aee98aff13055d5b7756d7da599fc48cb3d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c4cf5574d4b79e8bf05a21c9368aee98aff13055d5b7756d7da599fc48cb3d0->enter($__internal_7c4cf5574d4b79e8bf05a21c9368aee98aff13055d5b7756d7da599fc48cb3d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7c4cf5574d4b79e8bf05a21c9368aee98aff13055d5b7756d7da599fc48cb3d0->leave($__internal_7c4cf5574d4b79e8bf05a21c9368aee98aff13055d5b7756d7da599fc48cb3d0_prof);

        
        $__internal_622a1537ffe87fa634af5c3cc2aad007bb447735b4885b9967a16ef2aa46ac86->leave($__internal_622a1537ffe87fa634af5c3cc2aad007bb447735b4885b9967a16ef2aa46ac86_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_186150d5c0507cd02298109aba1ac3d8c9dfa77803ec8caad80088258cf57644 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_186150d5c0507cd02298109aba1ac3d8c9dfa77803ec8caad80088258cf57644->enter($__internal_186150d5c0507cd02298109aba1ac3d8c9dfa77803ec8caad80088258cf57644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_07b3c9eb752913582e578835fc805b90f7a6e0ae2717eb549d83cbbc39c591bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07b3c9eb752913582e578835fc805b90f7a6e0ae2717eb549d83cbbc39c591bc->enter($__internal_07b3c9eb752913582e578835fc805b90f7a6e0ae2717eb549d83cbbc39c591bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_07b3c9eb752913582e578835fc805b90f7a6e0ae2717eb549d83cbbc39c591bc->leave($__internal_07b3c9eb752913582e578835fc805b90f7a6e0ae2717eb549d83cbbc39c591bc_prof);

        
        $__internal_186150d5c0507cd02298109aba1ac3d8c9dfa77803ec8caad80088258cf57644->leave($__internal_186150d5c0507cd02298109aba1ac3d8c9dfa77803ec8caad80088258cf57644_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3eb455c95bae743902e84170e660bef383758e7f2ee603e98690a26f9ee7f88f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eb455c95bae743902e84170e660bef383758e7f2ee603e98690a26f9ee7f88f->enter($__internal_3eb455c95bae743902e84170e660bef383758e7f2ee603e98690a26f9ee7f88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f18152f31850c02fbd9b5478fd89a2be523632ab43c8afc1796633ec73288e89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f18152f31850c02fbd9b5478fd89a2be523632ab43c8afc1796633ec73288e89->enter($__internal_f18152f31850c02fbd9b5478fd89a2be523632ab43c8afc1796633ec73288e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
        ";
        
        $__internal_f18152f31850c02fbd9b5478fd89a2be523632ab43c8afc1796633ec73288e89->leave($__internal_f18152f31850c02fbd9b5478fd89a2be523632ab43c8afc1796633ec73288e89_prof);

        
        $__internal_3eb455c95bae743902e84170e660bef383758e7f2ee603e98690a26f9ee7f88f->leave($__internal_3eb455c95bae743902e84170e660bef383758e7f2ee603e98690a26f9ee7f88f_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_736a0eb2ebaa74f195b64a59eb506ff2c7c4dee6a6996c53dfe9100b2249d77e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_736a0eb2ebaa74f195b64a59eb506ff2c7c4dee6a6996c53dfe9100b2249d77e->enter($__internal_736a0eb2ebaa74f195b64a59eb506ff2c7c4dee6a6996c53dfe9100b2249d77e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5113345eb1f803316da2208113d4231c7a9726026867c06e2df2322cd520139a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5113345eb1f803316da2208113d4231c7a9726026867c06e2df2322cd520139a->enter($__internal_5113345eb1f803316da2208113d4231c7a9726026867c06e2df2322cd520139a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5113345eb1f803316da2208113d4231c7a9726026867c06e2df2322cd520139a->leave($__internal_5113345eb1f803316da2208113d4231c7a9726026867c06e2df2322cd520139a_prof);

        
        $__internal_736a0eb2ebaa74f195b64a59eb506ff2c7c4dee6a6996c53dfe9100b2249d77e->leave($__internal_736a0eb2ebaa74f195b64a59eb506ff2c7c4dee6a6996c53dfe9100b2249d77e_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 13,  109 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 14,  50 => 13,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("    <!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}

        {% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\app/Resources\\views/base.html.twig");
    }
}
