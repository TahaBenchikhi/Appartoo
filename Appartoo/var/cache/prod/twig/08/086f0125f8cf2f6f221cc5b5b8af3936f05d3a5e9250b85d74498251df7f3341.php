<?php

/* @App/Default/profil.html.twig */
class __TwigTemplate_9fdd1c7bfdeba79625a1195eac23f3c1374055307723143d4f48b80bdaba5eb6 extends Twig_Template
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
        // line 1
        echo "<link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css\">
<link rel=\"stylesheet\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/table.css"), "html", null, true);
        echo "\" />
<link href=\"https://fonts.googleapis.com/css?family=Roboto\" rel=\"stylesheet\">

<div class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/monkey.png"), "html", null, true);
        echo "\" alt=\"sing\" width=\"40px\" height=\"40px\">
            <a target=\"_blank\" href=\"#\" class=\"navbar-brand\">Bonobook</a>
        </div>
        <div class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"/bonobo\">Mes amis</a></li>

            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <span class=\"glyphicon glyphicon-user\"></span> 
                        <strong>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getNom", array(), "method"), "html", null, true);
        echo "  |  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getPrenom", array(), "method"), "html", null, true);
        echo "</strong>
                        <a href=\"/logout\" class=\"logout\"> <span class=\"glyphicon glyphicon glyphicon-log-out\"></span></a>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
*<div class=\"container\">

    <hr>
    <div class=\"row\">
        <!-- left column -->
        <div class=\"col-md-3\">

        </div>

        <!-- edit form column -->
        <div class=\"col-md-9 personal-info\">
            <div class=\"alert alert-info alert-dismissable\">

                <i class=\"fa fa-coffee\"></i>
                Veuillez saisir vos nouvelles informations.
            </div>
            <h3>Mes coordonnées</h3>

            <form class=\"form-horizontal\" role=\"form\">
                <div class=\"form-group\">
                    <label class=\"col-lg-3 control-label\">Nom:</label>
                    <div class=\"col-lg-8\">
                        <input class=\"form-control\" id=\"nom\" type=\"text\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getNom", array(), "method"), "html", null, true);
        echo "\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-lg-3 control-label\">Prenom:</label>
                    <div class=\"col-lg-8\">
                        <input class=\"form-control\" id=\"prenom\" type=\"text\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getPrenom", array(), "method"), "html", null, true);
        echo "\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-lg-3 control-label\">Age:</label>
                    <div class=\"col-lg-8\">
                        <input class=\"form-control\" id=\"age\" type=\"number\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getAge", array(), "method"), "html", null, true);
        echo "\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-lg-3 control-label\">Race:</label>
                    <div class=\"col-lg-8\">
                        <input class=\"form-control\" id=\"race\" type=\"text\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getRace", array(), "method"), "html", null, true);
        echo "\">
                    </div>
                </div>

                <div class=\"form-group\">
                    <label class=\"col-md-3 control-label\">Famille:</label>
                    <div class=\"col-md-8\">
                        <input class=\"form-control\" id=\"famille\" type=\"text\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getFamille", array(), "method"), "html", null, true);
        echo "\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-3 control-label\">Nourriture:</label>
                    <div class=\"col-md-8\">
                        <input class=\"form-control \" id=\"nourriture\" type=\"text\" value=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getNourriture", array(), "method"), "html", null, true);
        echo "\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-3 control-label\"></label>
                    <div class=\"col-md-8\">
                        <input type=\"button\" class=\"btn btn-primary changer\" value=\"Changer\">
                        <span></span>
                        <input type=\"reset\" class=\"btn btn-default reset\" value=\"Annuler\">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<hr>
<script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/JQuery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/Profil.js"), "html", null, true);
        echo "\"></script>";
    }

    public function getTemplateName()
    {
        return "@App/Default/profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 103,  151 => 102,  132 => 86,  123 => 80,  113 => 73,  104 => 67,  95 => 61,  86 => 55,  51 => 25,  36 => 13,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/Default/profil.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\src\\AppBundle\\Resources\\views\\Default\\profil.html.twig");
    }
}
