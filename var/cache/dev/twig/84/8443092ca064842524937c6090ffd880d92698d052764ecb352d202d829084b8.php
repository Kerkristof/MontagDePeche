<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* espece/index.html.twig */
class __TwigTemplate_d6da9fa3c8cbc68a4d19af152ac3267c2f77b7c9399095227143c6e67542312a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espece/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espece/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "espece/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
  <div class=\"row\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["especes"]) || array_key_exists("especes", $context) ? $context["especes"] : (function () { throw new RuntimeError('Variable "especes" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["espece"]) {
            // line 8
            echo "      <div class=\"col-3\">
        <div class=\"card\">
          <img src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/images/especes/" . twig_get_attribute($this->env, $this->source, $context["espece"], "imageName", [], "any", false, false, false, 10))), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"...\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["espece"], "nom", [], "any", false, false, false, 12), "html", null, true);
            echo "</h5>
            <small><i>La maille est de ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["espece"], "maille", [], "any", false, false, false, 13), "html", null, true);
            echo " cm</i></small>
            <p class=\"card-text\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["espece"], "contenu", [], "any", false, false, false, 14), "html", null, true);
            echo "</p>
            <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("montage_index", ["espece_id" => twig_get_attribute($this->env, $this->source, $context["espece"], "id", [], "any", false, false, false, 15)]), "html", null, true);
            echo "\">Voir les montages</a>
            <div class=\"row\">
              <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("espece_update", ["id" => twig_get_attribute($this->env, $this->source, $context["espece"], "id", [], "any", false, false, false, 17)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Modifier</a>
              <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("espece_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["espece"], "id", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\" class=\"btn btn-danger\">Supprimer</a>
            </div>
          </div>
        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['espece'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "  </div>
  <hr>
  <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("espece_create");
        echo "\" class=\"btn btn-success\">Ajouter une nouvelle espèce</a>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "espece/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 26,  118 => 24,  106 => 18,  102 => 17,  97 => 15,  93 => 14,  89 => 13,  85 => 12,  80 => 10,  76 => 8,  72 => 7,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}

  <div class=\"row\">
    {% for espece in especes %}
      <div class=\"col-3\">
        <div class=\"card\">
          <img src=\"{{ asset('assets/images/especes/' ~ espece.imageName) }}\" class=\"card-img-top\" alt=\"...\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">{{ espece.nom }}</h5>
            <small><i>La maille est de {{espece.maille}} cm</i></small>
            <p class=\"card-text\">{{ espece.contenu }}</p>
            <a href=\"{{ path('montage_index', {'espece_id' : espece.id })}}\">Voir les montages</a>
            <div class=\"row\">
              <a href=\"{{ path('espece_update', {'id' : espece.id})}}\" class=\"btn btn-primary\">Modifier</a>
              <a href=\"{{ path('espece_delete', {'id' : espece.id})}}\" class=\"btn btn-danger\">Supprimer</a>
            </div>
          </div>
        </div>
      </div>
    {% endfor %}
  </div>
  <hr>
  <a href=\"{{ path('espece_create') }}\" class=\"btn btn-success\">Ajouter une nouvelle espèce</a>

{% endblock %}
", "espece/index.html.twig", "/home/christophe/Projects/Symfony/Peche/templates/espece/index.html.twig");
    }
}
