<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_239d33d300abc6707f02b89ece7f9e920d827fd87fdba361fa1e2664a8dbcf29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_535db2ad993e6b2bd55365dfb4f78eb54ad558a32dc0cba6a3eed86a8d497977 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_535db2ad993e6b2bd55365dfb4f78eb54ad558a32dc0cba6a3eed86a8d497977->enter($__internal_535db2ad993e6b2bd55365dfb4f78eb54ad558a32dc0cba6a3eed86a8d497977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_3d99b46a54cb748f078864e0e1adf7e832b2845f9d8ee64dc1d32b4fdf6fd4b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d99b46a54cb748f078864e0e1adf7e832b2845f9d8ee64dc1d32b4fdf6fd4b9->enter($__internal_3d99b46a54cb748f078864e0e1adf7e832b2845f9d8ee64dc1d32b4fdf6fd4b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_535db2ad993e6b2bd55365dfb4f78eb54ad558a32dc0cba6a3eed86a8d497977->leave($__internal_535db2ad993e6b2bd55365dfb4f78eb54ad558a32dc0cba6a3eed86a8d497977_prof);

        
        $__internal_3d99b46a54cb748f078864e0e1adf7e832b2845f9d8ee64dc1d32b4fdf6fd4b9->leave($__internal_3d99b46a54cb748f078864e0e1adf7e832b2845f9d8ee64dc1d32b4fdf6fd4b9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_71e5e86a1f3c772999913bc3367459179bc89e224c1441ad99ab0a12f9fbb2d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71e5e86a1f3c772999913bc3367459179bc89e224c1441ad99ab0a12f9fbb2d7->enter($__internal_71e5e86a1f3c772999913bc3367459179bc89e224c1441ad99ab0a12f9fbb2d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3ecd4a41c7104022d8e1a9d40cf7ac99b9c1abc03c1dff8dc5b67d7c68e8705a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ecd4a41c7104022d8e1a9d40cf7ac99b9c1abc03c1dff8dc5b67d7c68e8705a->enter($__internal_3ecd4a41c7104022d8e1a9d40cf7ac99b9c1abc03c1dff8dc5b67d7c68e8705a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_3ecd4a41c7104022d8e1a9d40cf7ac99b9c1abc03c1dff8dc5b67d7c68e8705a->leave($__internal_3ecd4a41c7104022d8e1a9d40cf7ac99b9c1abc03c1dff8dc5b67d7c68e8705a_prof);

        
        $__internal_71e5e86a1f3c772999913bc3367459179bc89e224c1441ad99ab0a12f9fbb2d7->leave($__internal_71e5e86a1f3c772999913bc3367459179bc89e224c1441ad99ab0a12f9fbb2d7_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_9f6b3390041df90da96f7f8e74c1da0537cb1c5de79778866bace6291e9e773e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f6b3390041df90da96f7f8e74c1da0537cb1c5de79778866bace6291e9e773e->enter($__internal_9f6b3390041df90da96f7f8e74c1da0537cb1c5de79778866bace6291e9e773e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4970dfa604615f44c6fa386535f4b2a0ea1b7de75c974970a91b353d5717bd83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4970dfa604615f44c6fa386535f4b2a0ea1b7de75c974970a91b353d5717bd83->enter($__internal_4970dfa604615f44c6fa386535f4b2a0ea1b7de75c974970a91b353d5717bd83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_4970dfa604615f44c6fa386535f4b2a0ea1b7de75c974970a91b353d5717bd83->leave($__internal_4970dfa604615f44c6fa386535f4b2a0ea1b7de75c974970a91b353d5717bd83_prof);

        
        $__internal_9f6b3390041df90da96f7f8e74c1da0537cb1c5de79778866bace6291e9e773e->leave($__internal_9f6b3390041df90da96f7f8e74c1da0537cb1c5de79778866bace6291e9e773e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_d17816461e21b7ac92416f02a57aee1d0d1986c0926cbd25bc3d64cfe248cc73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d17816461e21b7ac92416f02a57aee1d0d1986c0926cbd25bc3d64cfe248cc73->enter($__internal_d17816461e21b7ac92416f02a57aee1d0d1986c0926cbd25bc3d64cfe248cc73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cb0155296f07064030b6acea33899ab9903a878ae41bc3028b249a924de56e1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb0155296f07064030b6acea33899ab9903a878ae41bc3028b249a924de56e1e->enter($__internal_cb0155296f07064030b6acea33899ab9903a878ae41bc3028b249a924de56e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cb0155296f07064030b6acea33899ab9903a878ae41bc3028b249a924de56e1e->leave($__internal_cb0155296f07064030b6acea33899ab9903a878ae41bc3028b249a924de56e1e_prof);

        
        $__internal_d17816461e21b7ac92416f02a57aee1d0d1986c0926cbd25bc3d64cfe248cc73->leave($__internal_d17816461e21b7ac92416f02a57aee1d0d1986c0926cbd25bc3d64cfe248cc73_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
