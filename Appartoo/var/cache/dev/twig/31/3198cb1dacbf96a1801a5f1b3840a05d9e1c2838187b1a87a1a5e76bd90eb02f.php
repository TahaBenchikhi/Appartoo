<?php

/* base.html.twig */
class __TwigTemplate_79edc3f4c1d0bf2b285c68f8d99e793c8175003b3194091f5cbe331b26eb8c38 extends Twig_Template
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
        $__internal_75ad7f3660cec23405b07d1fbb7a2996813c126d0565871ad6e4774a994f7102 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75ad7f3660cec23405b07d1fbb7a2996813c126d0565871ad6e4774a994f7102->enter($__internal_75ad7f3660cec23405b07d1fbb7a2996813c126d0565871ad6e4774a994f7102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_5feede821cada5dfc59ad48d7ad6357d28d8a8288be2d156f1f997e7fd3d1233 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5feede821cada5dfc59ad48d7ad6357d28d8a8288be2d156f1f997e7fd3d1233->enter($__internal_5feede821cada5dfc59ad48d7ad6357d28d8a8288be2d156f1f997e7fd3d1233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_75ad7f3660cec23405b07d1fbb7a2996813c126d0565871ad6e4774a994f7102->leave($__internal_75ad7f3660cec23405b07d1fbb7a2996813c126d0565871ad6e4774a994f7102_prof);

        
        $__internal_5feede821cada5dfc59ad48d7ad6357d28d8a8288be2d156f1f997e7fd3d1233->leave($__internal_5feede821cada5dfc59ad48d7ad6357d28d8a8288be2d156f1f997e7fd3d1233_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_df35d0b775e4927dad540efea1ccd581e05e51e00be66b4b58eba8177d024086 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df35d0b775e4927dad540efea1ccd581e05e51e00be66b4b58eba8177d024086->enter($__internal_df35d0b775e4927dad540efea1ccd581e05e51e00be66b4b58eba8177d024086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_831ac80d9c6dad12a37cf26bddce097a8f492625dc7403b7e4663ad00f0a6b98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_831ac80d9c6dad12a37cf26bddce097a8f492625dc7403b7e4663ad00f0a6b98->enter($__internal_831ac80d9c6dad12a37cf26bddce097a8f492625dc7403b7e4663ad00f0a6b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_831ac80d9c6dad12a37cf26bddce097a8f492625dc7403b7e4663ad00f0a6b98->leave($__internal_831ac80d9c6dad12a37cf26bddce097a8f492625dc7403b7e4663ad00f0a6b98_prof);

        
        $__internal_df35d0b775e4927dad540efea1ccd581e05e51e00be66b4b58eba8177d024086->leave($__internal_df35d0b775e4927dad540efea1ccd581e05e51e00be66b4b58eba8177d024086_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_864b34026b04607fdcafae20372dea19dcfbd4c9423510c6555fb9ae1f16b2fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_864b34026b04607fdcafae20372dea19dcfbd4c9423510c6555fb9ae1f16b2fd->enter($__internal_864b34026b04607fdcafae20372dea19dcfbd4c9423510c6555fb9ae1f16b2fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7424ed1538d00faf1dc7d65aed9f3a91c41134babf0fa6f39c48a5926caa4631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7424ed1538d00faf1dc7d65aed9f3a91c41134babf0fa6f39c48a5926caa4631->enter($__internal_7424ed1538d00faf1dc7d65aed9f3a91c41134babf0fa6f39c48a5926caa4631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7424ed1538d00faf1dc7d65aed9f3a91c41134babf0fa6f39c48a5926caa4631->leave($__internal_7424ed1538d00faf1dc7d65aed9f3a91c41134babf0fa6f39c48a5926caa4631_prof);

        
        $__internal_864b34026b04607fdcafae20372dea19dcfbd4c9423510c6555fb9ae1f16b2fd->leave($__internal_864b34026b04607fdcafae20372dea19dcfbd4c9423510c6555fb9ae1f16b2fd_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2aa584a101089dc70fea26e3a5c8de24e6e1f08d1418baaafbd5575836da629 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2aa584a101089dc70fea26e3a5c8de24e6e1f08d1418baaafbd5575836da629->enter($__internal_d2aa584a101089dc70fea26e3a5c8de24e6e1f08d1418baaafbd5575836da629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ad0d07307866bd8c3661e9a2f3bfe11e9c8425bc5d23ff335042498ebf970051 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad0d07307866bd8c3661e9a2f3bfe11e9c8425bc5d23ff335042498ebf970051->enter($__internal_ad0d07307866bd8c3661e9a2f3bfe11e9c8425bc5d23ff335042498ebf970051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
        ";
        
        $__internal_ad0d07307866bd8c3661e9a2f3bfe11e9c8425bc5d23ff335042498ebf970051->leave($__internal_ad0d07307866bd8c3661e9a2f3bfe11e9c8425bc5d23ff335042498ebf970051_prof);

        
        $__internal_d2aa584a101089dc70fea26e3a5c8de24e6e1f08d1418baaafbd5575836da629->leave($__internal_d2aa584a101089dc70fea26e3a5c8de24e6e1f08d1418baaafbd5575836da629_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bdf57a0dd28f909b9e85895550224324526690fd6aececec6927bafef90dc5f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdf57a0dd28f909b9e85895550224324526690fd6aececec6927bafef90dc5f1->enter($__internal_bdf57a0dd28f909b9e85895550224324526690fd6aececec6927bafef90dc5f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_276359ec9b7f0219c66bc624443ddafe27f57890dfde1f22427c9b5d783480d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_276359ec9b7f0219c66bc624443ddafe27f57890dfde1f22427c9b5d783480d2->enter($__internal_276359ec9b7f0219c66bc624443ddafe27f57890dfde1f22427c9b5d783480d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_276359ec9b7f0219c66bc624443ddafe27f57890dfde1f22427c9b5d783480d2->leave($__internal_276359ec9b7f0219c66bc624443ddafe27f57890dfde1f22427c9b5d783480d2_prof);

        
        $__internal_bdf57a0dd28f909b9e85895550224324526690fd6aececec6927bafef90dc5f1->leave($__internal_bdf57a0dd28f909b9e85895550224324526690fd6aececec6927bafef90dc5f1_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\app\\Resources\\views\\base.html.twig");
    }
}
