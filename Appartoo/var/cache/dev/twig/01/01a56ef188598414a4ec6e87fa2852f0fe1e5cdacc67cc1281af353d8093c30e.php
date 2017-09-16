<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_d6707984fba4bdb0dc7ac9e18ba00dd18515cd615aadbb162aece90a001ea8ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_82fbb8df3767fedd74f6bdae7173475ee24ea88c84d16f31bf0bf89fc1411fb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82fbb8df3767fedd74f6bdae7173475ee24ea88c84d16f31bf0bf89fc1411fb0->enter($__internal_82fbb8df3767fedd74f6bdae7173475ee24ea88c84d16f31bf0bf89fc1411fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_5b6ca73d5f4ff3e46505d673deb3f1629a99a7d4d55f44799ccd02e0d25ac3d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b6ca73d5f4ff3e46505d673deb3f1629a99a7d4d55f44799ccd02e0d25ac3d9->enter($__internal_5b6ca73d5f4ff3e46505d673deb3f1629a99a7d4d55f44799ccd02e0d25ac3d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82fbb8df3767fedd74f6bdae7173475ee24ea88c84d16f31bf0bf89fc1411fb0->leave($__internal_82fbb8df3767fedd74f6bdae7173475ee24ea88c84d16f31bf0bf89fc1411fb0_prof);

        
        $__internal_5b6ca73d5f4ff3e46505d673deb3f1629a99a7d4d55f44799ccd02e0d25ac3d9->leave($__internal_5b6ca73d5f4ff3e46505d673deb3f1629a99a7d4d55f44799ccd02e0d25ac3d9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_96656924fae2cf8182af381748a5651c18027de79af422c0439b3ae2f1c9f446 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96656924fae2cf8182af381748a5651c18027de79af422c0439b3ae2f1c9f446->enter($__internal_96656924fae2cf8182af381748a5651c18027de79af422c0439b3ae2f1c9f446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4ad8873ac36e8f0121ab1eb0c8a83eb4038b5e24f5c0d9bc5695740b0d698396 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ad8873ac36e8f0121ab1eb0c8a83eb4038b5e24f5c0d9bc5695740b0d698396->enter($__internal_4ad8873ac36e8f0121ab1eb0c8a83eb4038b5e24f5c0d9bc5695740b0d698396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_4ad8873ac36e8f0121ab1eb0c8a83eb4038b5e24f5c0d9bc5695740b0d698396->leave($__internal_4ad8873ac36e8f0121ab1eb0c8a83eb4038b5e24f5c0d9bc5695740b0d698396_prof);

        
        $__internal_96656924fae2cf8182af381748a5651c18027de79af422c0439b3ae2f1c9f446->leave($__internal_96656924fae2cf8182af381748a5651c18027de79af422c0439b3ae2f1c9f446_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
