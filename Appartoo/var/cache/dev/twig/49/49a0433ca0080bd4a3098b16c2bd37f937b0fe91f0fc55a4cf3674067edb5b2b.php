<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_6f24b409d2a2a6c7bb543488586c56eb9e81738c2f54cfedf9f79eb8c708254b extends Twig_Template
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
        $__internal_3e3a82d47a30b52e70473339ebb8e5ee3a59481d549fe3493279c5e632399f72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e3a82d47a30b52e70473339ebb8e5ee3a59481d549fe3493279c5e632399f72->enter($__internal_3e3a82d47a30b52e70473339ebb8e5ee3a59481d549fe3493279c5e632399f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_db8bcce737f1614ec6ae9b44c08a15052ddcb9c2f4bdf7662d49eddacecd9e6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db8bcce737f1614ec6ae9b44c08a15052ddcb9c2f4bdf7662d49eddacecd9e6c->enter($__internal_db8bcce737f1614ec6ae9b44c08a15052ddcb9c2f4bdf7662d49eddacecd9e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_3e3a82d47a30b52e70473339ebb8e5ee3a59481d549fe3493279c5e632399f72->leave($__internal_3e3a82d47a30b52e70473339ebb8e5ee3a59481d549fe3493279c5e632399f72_prof);

        
        $__internal_db8bcce737f1614ec6ae9b44c08a15052ddcb9c2f4bdf7662d49eddacecd9e6c->leave($__internal_db8bcce737f1614ec6ae9b44c08a15052ddcb9c2f4bdf7662d49eddacecd9e6c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_233cb4298127f580dff3e84ba58b47139ce5c4092c61ad54141f0dba5f5c6263 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_233cb4298127f580dff3e84ba58b47139ce5c4092c61ad54141f0dba5f5c6263->enter($__internal_233cb4298127f580dff3e84ba58b47139ce5c4092c61ad54141f0dba5f5c6263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_eb37902d008a4d7c40ed0231fe686aa9acff4633efea0611e03af9c179363df0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb37902d008a4d7c40ed0231fe686aa9acff4633efea0611e03af9c179363df0->enter($__internal_eb37902d008a4d7c40ed0231fe686aa9acff4633efea0611e03af9c179363df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_eb37902d008a4d7c40ed0231fe686aa9acff4633efea0611e03af9c179363df0->leave($__internal_eb37902d008a4d7c40ed0231fe686aa9acff4633efea0611e03af9c179363df0_prof);

        
        $__internal_233cb4298127f580dff3e84ba58b47139ce5c4092c61ad54141f0dba5f5c6263->leave($__internal_233cb4298127f580dff3e84ba58b47139ce5c4092c61ad54141f0dba5f5c6263_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_1542103dff08fddbb3a87c1ad2f0927f021dfc60835c97be1676093b65a3cc36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1542103dff08fddbb3a87c1ad2f0927f021dfc60835c97be1676093b65a3cc36->enter($__internal_1542103dff08fddbb3a87c1ad2f0927f021dfc60835c97be1676093b65a3cc36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_75aee99a13b06666b3aa86d0676e4663dd35ffca1835018e7317a31b2f41e6db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75aee99a13b06666b3aa86d0676e4663dd35ffca1835018e7317a31b2f41e6db->enter($__internal_75aee99a13b06666b3aa86d0676e4663dd35ffca1835018e7317a31b2f41e6db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_75aee99a13b06666b3aa86d0676e4663dd35ffca1835018e7317a31b2f41e6db->leave($__internal_75aee99a13b06666b3aa86d0676e4663dd35ffca1835018e7317a31b2f41e6db_prof);

        
        $__internal_1542103dff08fddbb3a87c1ad2f0927f021dfc60835c97be1676093b65a3cc36->leave($__internal_1542103dff08fddbb3a87c1ad2f0927f021dfc60835c97be1676093b65a3cc36_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_48debbfec84644b639728e81d26a45a9c59d53b26456eb1a7ec8b1f969569ef8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48debbfec84644b639728e81d26a45a9c59d53b26456eb1a7ec8b1f969569ef8->enter($__internal_48debbfec84644b639728e81d26a45a9c59d53b26456eb1a7ec8b1f969569ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_93b98b8b35c16ddeccffee55eb9db08ce01cf1503e39e460df1e1c05ae1aab37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93b98b8b35c16ddeccffee55eb9db08ce01cf1503e39e460df1e1c05ae1aab37->enter($__internal_93b98b8b35c16ddeccffee55eb9db08ce01cf1503e39e460df1e1c05ae1aab37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_93b98b8b35c16ddeccffee55eb9db08ce01cf1503e39e460df1e1c05ae1aab37->leave($__internal_93b98b8b35c16ddeccffee55eb9db08ce01cf1503e39e460df1e1c05ae1aab37_prof);

        
        $__internal_48debbfec84644b639728e81d26a45a9c59d53b26456eb1a7ec8b1f969569ef8->leave($__internal_48debbfec84644b639728e81d26a45a9c59d53b26456eb1a7ec8b1f969569ef8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
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
", "TwigBundle::layout.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
