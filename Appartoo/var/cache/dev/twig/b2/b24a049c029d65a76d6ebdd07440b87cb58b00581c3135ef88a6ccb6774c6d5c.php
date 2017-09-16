<?php

/* AppBundle:Default:index.html.twig */
class __TwigTemplate_96979ffe826d4ae4e087a2b96edc1039567d50b1cb9f255aa5dea9abb8d37dbb extends Twig_Template
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
        $__internal_eed7cc2bdbd9109192b22e5c2c0fb90a597fbef57a955ef7bc9d6bd608f8cb1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eed7cc2bdbd9109192b22e5c2c0fb90a597fbef57a955ef7bc9d6bd608f8cb1a->enter($__internal_eed7cc2bdbd9109192b22e5c2c0fb90a597fbef57a955ef7bc9d6bd608f8cb1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:index.html.twig"));

        $__internal_d315ff545d2bafc414994a98fd63e14ae2f6a070275a31e958bca023bfcab1fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d315ff545d2bafc414994a98fd63e14ae2f6a070275a31e958bca023bfcab1fe->enter($__internal_d315ff545d2bafc414994a98fd63e14ae2f6a070275a31e958bca023bfcab1fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:index.html.twig"));

        // line 1
        echo "
<link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css\">
<link rel=\"stylesheet\" href=\"";
        // line 3
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
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/monkey.png"), "html", null, true);
        echo "\" alt=\"sing\" width=\"40px\" height=\"40px\">
            <a target=\"_blank\" href=\"#\" class=\"navbar-brand\">Bonobook</a>
        </div>
        <div class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"/profile\">Mon Profil</a></li>

            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        <span class=\"glyphicon glyphicon-user\"></span> 
                        <strong>";
        // line 26
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
";
        // line 35
        echo "<div class=\"container container2s\">
    <div class=\"row\">
        <div class=\"\">
            <div class=\"panel panel-success\">
                <div class=\"panel-heading\">
                    <span class=\"glyphicon glyphicon-list\"></span>Friends List

                </div>
                <div class=\"panel-body\">
                    <ul class=\"list-group\">
                        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["myfriends"]) ? $context["myfriends"] : $this->getContext($context, "myfriends")));
        foreach ($context['_seq'] as $context["_key"] => $context["friend"]) {
            // line 46
            echo "                            <li class=\"list-group-item\">
                                <div class=\"checkbox\">

                                    <div >
                                        Prenom : ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "getPrenom", array(), "method"), "html", null, true);
            echo "
                                    </div>
                                    <div >
                                        Nom : ";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "getNom", array(), "method"), "html", null, true);
            echo "
                                    </div>
                                    <div >
                                        Age : ";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "getAge", array(), "method"), "html", null, true);
            echo " ans
                                    </div>
                                    <div >
                                        Race : ";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "getRace", array(), "method"), "html", null, true);
            echo "
                                    </div>
                                    <div >
                                        Famille : ";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "getFamille", array(), "method"), "html", null, true);
            echo "
                                    </div>
                                    <div >
                                        Nourriture : ";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "getNourriture", array(), "method"), "html", null, true);
            echo "
                                    </div>
                                </div>
                                <div class=\"pull-right action-buttons\">
                                    <input type=\"hidden\" class=\"id_element\" value=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "getId", array(), "method"), "html", null, true);
            echo "\">
                                    <a href=\"\" class=\"trash\"><span class=\"glyphicon glyphicon-trash\"></span></a>

                                </div>
                            </li>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friend'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "
                    </ul>
                </div>
                <div class=\"panel-footer\">

                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"container container2s\">
    <div class=\"row\">
        <div class=\"\">
            <div class=\"panel panel-danger\">
                <div class=\"panel-heading\">
                    <span class=\"glyphicon glyphicon-list\"></span>Other Friends

                </div>
                <div class=\"panel-body\">
                    <ul class=\"list-group\">

                        ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notmyfriends"]) ? $context["notmyfriends"] : $this->getContext($context, "notmyfriends")));
        foreach ($context['_seq'] as $context["_key"] => $context["notfriend"]) {
            // line 98
            echo "                            <li class=\"list-group-item\">
                                <div class=\"checkbox\">

                                    <div >
                                        Prenom : ";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["notfriend"], "getPrenom", array(), "method"), "html", null, true);
            echo "
                                    </div>
                                    <div >
                                        Nom : ";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($context["notfriend"], "getNom", array(), "method"), "html", null, true);
            echo "
                                    </div>
                                    <div >
                                        Age : ";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($context["notfriend"], "getAge", array(), "method"), "html", null, true);
            echo " ans
                                    </div>
                                    <div >
                                        Race : ";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($context["notfriend"], "getRace", array(), "method"), "html", null, true);
            echo "
                                    </div>
                                    <div >
                                        Famille : ";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($context["notfriend"], "getFamille", array(), "method"), "html", null, true);
            echo "
                                    </div>
                                    <div >
                                        Nourriture : ";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($context["notfriend"], "getNourriture", array(), "method"), "html", null, true);
            echo "
                                    </div>
                                </div>
                                <div class=\"pull-right action-buttons\">
                                    <input type=\"hidden\" class=\"id_element1\" value=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($context["notfriend"], "getId", array(), "method"), "html", null, true);
            echo "\">
                                    <a href=\"\" class=\"plus\"><span class=\"glyphicon glyphicon-plus\"></span></a>

                                </div>
                            </li>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notfriend'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "

                    </ul>
                </div>
                <div class=\"panel-footer\">

                </div>
            </div>
        </div>
    </div>
</div>

<script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/JQuery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/Script.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_eed7cc2bdbd9109192b22e5c2c0fb90a597fbef57a955ef7bc9d6bd608f8cb1a->leave($__internal_eed7cc2bdbd9109192b22e5c2c0fb90a597fbef57a955ef7bc9d6bd608f8cb1a_prof);

        
        $__internal_d315ff545d2bafc414994a98fd63e14ae2f6a070275a31e958bca023bfcab1fe->leave($__internal_d315ff545d2bafc414994a98fd63e14ae2f6a070275a31e958bca023bfcab1fe_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 141,  240 => 140,  226 => 128,  213 => 121,  206 => 117,  200 => 114,  194 => 111,  188 => 108,  182 => 105,  176 => 102,  170 => 98,  166 => 97,  143 => 76,  130 => 69,  123 => 65,  117 => 62,  111 => 59,  105 => 56,  99 => 53,  93 => 50,  87 => 46,  83 => 45,  71 => 35,  58 => 26,  43 => 14,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css\">
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
                <li><a href=\"/profile\">Mon Profil</a></li>

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
{#+=========================================================#}
<div class=\"container container2s\">
    <div class=\"row\">
        <div class=\"\">
            <div class=\"panel panel-success\">
                <div class=\"panel-heading\">
                    <span class=\"glyphicon glyphicon-list\"></span>Friends List

                </div>
                <div class=\"panel-body\">
                    <ul class=\"list-group\">
                        {% for friend in myfriends %}
                            <li class=\"list-group-item\">
                                <div class=\"checkbox\">

                                    <div >
                                        Prenom : {{ friend.getPrenom() }}
                                    </div>
                                    <div >
                                        Nom : {{ friend.getNom() }}
                                    </div>
                                    <div >
                                        Age : {{ friend.getAge() }} ans
                                    </div>
                                    <div >
                                        Race : {{ friend.getRace() }}
                                    </div>
                                    <div >
                                        Famille : {{ friend.getFamille() }}
                                    </div>
                                    <div >
                                        Nourriture : {{ friend.getNourriture() }}
                                    </div>
                                </div>
                                <div class=\"pull-right action-buttons\">
                                    <input type=\"hidden\" class=\"id_element\" value=\"{{ friend.getId() }}\">
                                    <a href=\"\" class=\"trash\"><span class=\"glyphicon glyphicon-trash\"></span></a>

                                </div>
                            </li>

                        {% endfor %}

                    </ul>
                </div>
                <div class=\"panel-footer\">

                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"container container2s\">
    <div class=\"row\">
        <div class=\"\">
            <div class=\"panel panel-danger\">
                <div class=\"panel-heading\">
                    <span class=\"glyphicon glyphicon-list\"></span>Other Friends

                </div>
                <div class=\"panel-body\">
                    <ul class=\"list-group\">

                        {% for notfriend in notmyfriends %}
                            <li class=\"list-group-item\">
                                <div class=\"checkbox\">

                                    <div >
                                        Prenom : {{ notfriend.getPrenom() }}
                                    </div>
                                    <div >
                                        Nom : {{ notfriend.getNom() }}
                                    </div>
                                    <div >
                                        Age : {{ notfriend.getAge() }} ans
                                    </div>
                                    <div >
                                        Race : {{ notfriend.getRace() }}
                                    </div>
                                    <div >
                                        Famille : {{ notfriend.getFamille() }}
                                    </div>
                                    <div >
                                        Nourriture : {{ notfriend.getNourriture() }}
                                    </div>
                                </div>
                                <div class=\"pull-right action-buttons\">
                                    <input type=\"hidden\" class=\"id_element1\" value=\"{{ notfriend.getId() }}\">
                                    <a href=\"\" class=\"plus\"><span class=\"glyphicon glyphicon-plus\"></span></a>

                                </div>
                            </li>

                        {% endfor %}


                    </ul>
                </div>
                <div class=\"panel-footer\">

                </div>
            </div>
        </div>
    </div>
</div>

<script src=\"{{ asset('js/JQuery.js') }}\"></script>
<script src=\"{{ asset('js/Script.js') }}\"></script>", "AppBundle:Default:index.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\src\\AppBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
