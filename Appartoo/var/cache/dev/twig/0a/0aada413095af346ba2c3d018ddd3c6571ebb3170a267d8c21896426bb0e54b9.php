<?php

/* AppBundle:Default:profil.html.twig */
class __TwigTemplate_765f9a4b5e1290245e2299d845273358a53d73b7f68a1a64121ddbdab4236130 extends Twig_Template
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
        $__internal_b963ed786a7acc920f12cd74df21996940ef2c5b318bda54f2aa84eb917784a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b963ed786a7acc920f12cd74df21996940ef2c5b318bda54f2aa84eb917784a4->enter($__internal_b963ed786a7acc920f12cd74df21996940ef2c5b318bda54f2aa84eb917784a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:profil.html.twig"));

        $__internal_d48fbc3237c1425170b69e6f123a3fab7b8b0f34c7eabb25d401e04f0b75d7db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d48fbc3237c1425170b69e6f123a3fab7b8b0f34c7eabb25d401e04f0b75d7db->enter($__internal_d48fbc3237c1425170b69e6f123a3fab7b8b0f34c7eabb25d401e04f0b75d7db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:profil.html.twig"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getNom", array(), "method"), "html", null, true);
        echo "  |  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getPrenom", array(), "method"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getNom", array(), "method"), "html", null, true);
        echo "\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-lg-3 control-label\">Prenom:</label>
                    <div class=\"col-lg-8\">
                        <input class=\"form-control\" id=\"prenom\" type=\"text\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getPrenom", array(), "method"), "html", null, true);
        echo "\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-lg-3 control-label\">Age:</label>
                    <div class=\"col-lg-8\">
                        <input class=\"form-control\" id=\"age\" type=\"number\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getAge", array(), "method"), "html", null, true);
        echo "\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-lg-3 control-label\">Race:</label>
                    <div class=\"col-lg-8\">
                        <input class=\"form-control\" id=\"race\" type=\"text\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getRace", array(), "method"), "html", null, true);
        echo "\">
                    </div>
                </div>

                <div class=\"form-group\">
                    <label class=\"col-md-3 control-label\">Famille:</label>
                    <div class=\"col-md-8\">
                        <input class=\"form-control\" id=\"famille\" type=\"text\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getFamille", array(), "method"), "html", null, true);
        echo "\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-3 control-label\">Nourriture:</label>
                    <div class=\"col-md-8\">
                        <input class=\"form-control \" id=\"nourriture\" type=\"text\" value=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getNourriture", array(), "method"), "html", null, true);
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
        
        $__internal_b963ed786a7acc920f12cd74df21996940ef2c5b318bda54f2aa84eb917784a4->leave($__internal_b963ed786a7acc920f12cd74df21996940ef2c5b318bda54f2aa84eb917784a4_prof);

        
        $__internal_d48fbc3237c1425170b69e6f123a3fab7b8b0f34c7eabb25d401e04f0b75d7db->leave($__internal_d48fbc3237c1425170b69e6f123a3fab7b8b0f34c7eabb25d401e04f0b75d7db_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 103,  157 => 102,  138 => 86,  129 => 80,  119 => 73,  110 => 67,  101 => 61,  92 => 55,  57 => 25,  42 => 13,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css\">
<link rel=\"stylesheet\" href=\"{{ asset('css/table.css') }}\" />
<link href=\"https://fonts.googleapis.com/css?family=Roboto\" rel=\"stylesheet\">

<div class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <img src=\"{{ asset('img/monkey.png') }}\" alt=\"sing\" width=\"40px\" height=\"40px\">
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
                        <strong>{{ user.getNom() }}  |  {{ user.getPrenom() }}</strong>
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
                        <input class=\"form-control\" id=\"nom\" type=\"text\" value=\"{{ user.getNom() }}\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-lg-3 control-label\">Prenom:</label>
                    <div class=\"col-lg-8\">
                        <input class=\"form-control\" id=\"prenom\" type=\"text\" value=\"{{ user.getPrenom() }}\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-lg-3 control-label\">Age:</label>
                    <div class=\"col-lg-8\">
                        <input class=\"form-control\" id=\"age\" type=\"number\" value=\"{{ user.getAge() }}\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-lg-3 control-label\">Race:</label>
                    <div class=\"col-lg-8\">
                        <input class=\"form-control\" id=\"race\" type=\"text\" value=\"{{ user.getRace() }}\">
                    </div>
                </div>

                <div class=\"form-group\">
                    <label class=\"col-md-3 control-label\">Famille:</label>
                    <div class=\"col-md-8\">
                        <input class=\"form-control\" id=\"famille\" type=\"text\" value=\"{{ user.getFamille() }}\">
                    </div>
                </div>
                <div class=\"form-group\">
                    <label class=\"col-md-3 control-label\">Nourriture:</label>
                    <div class=\"col-md-8\">
                        <input class=\"form-control \" id=\"nourriture\" type=\"text\" value=\"{{ user.getNourriture() }}\">
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
<script src=\"{{ asset('js/JQuery.js') }}\"></script>
<script src=\"{{ asset('js/Profil.js') }}\"></script>", "AppBundle:Default:profil.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\src\\AppBundle\\Resources\\views\\Default\\profil.html.twig");
    }
}
