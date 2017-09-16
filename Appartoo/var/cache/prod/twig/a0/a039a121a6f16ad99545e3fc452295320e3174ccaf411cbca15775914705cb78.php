<?php

/* AppBundle:Default:index.html.twig */
class __TwigTemplate_a90cf532bfcd68ee2f075f6706c980b1c11a92f745cc412c2cd11e32a34c0398 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable((isset($context["myfriends"]) ? $context["myfriends"] : null));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["notmyfriends"]) ? $context["notmyfriends"] : null));
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
        return array (  238 => 141,  234 => 140,  220 => 128,  207 => 121,  200 => 117,  194 => 114,  188 => 111,  182 => 108,  176 => 105,  170 => 102,  164 => 98,  160 => 97,  137 => 76,  124 => 69,  117 => 65,  111 => 62,  105 => 59,  99 => 56,  93 => 53,  87 => 50,  81 => 46,  77 => 45,  65 => 35,  52 => 26,  37 => 14,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Default:index.html.twig", "C:\\Users\\bench\\Desktop\\Appartoo\\src\\AppBundle/Resources/views/Default/index.html.twig");
    }
}
