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

/* montage/link_espece.html.twig */
class __TwigTemplate_7250afa420329bd4e70362022e6766e9026b5f2806605938adf14be658b4fa41 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "montage/link_espece.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "montage/link_espece.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "montage/link_espece.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <h4>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["montage"]) || array_key_exists("montage", $context) ? $context["montage"] : (function () { throw new RuntimeError('Variable "montage" does not exist.', 4, $this->source); })()), "nom", [], "any", false, false, false, 4), "html", null, true);
        echo "</h4>
  <p>Associer une espèce</p>

  <table class=\"table\">
    <tr>
      <th>Nom de l'espèce</th>
      <th>Action</th>
    </tr>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["link_especes"]) || array_key_exists("link_especes", $context) ? $context["link_especes"] : (function () { throw new RuntimeError('Variable "link_especes" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["espece"]) {
            // line 13
            echo "      <tr>
        <td>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["espece"], "nom", [], "any", false, false, false, 14), "html", null, true);
            echo "</td>
        <td> <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("unlink_espece", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["montage"]) || array_key_exists("montage", $context) ? $context["montage"] : (function () { throw new RuntimeError('Variable "montage" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15), "espece_id" => twig_get_attribute($this->env, $this->source, $context["espece"], "id", [], "any", false, false, false, 15)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Dissocier</a> </td>
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['espece'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "  </table>

  <table class=\"table\">
    <tr>
      <th>Nom de l'espèce</th>
      <th>Action</th>
    </tr>
    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["unlink_especes"]) || array_key_exists("unlink_especes", $context) ? $context["unlink_especes"] : (function () { throw new RuntimeError('Variable "unlink_especes" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["espece"]) {
            // line 26
            echo "      <tr>
        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["espece"], "nom", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
        <td> <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("link_espece", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["montage"]) || array_key_exists("montage", $context) ? $context["montage"] : (function () { throw new RuntimeError('Variable "montage" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28), "espece_id" => twig_get_attribute($this->env, $this->source, $context["espece"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\" class=\"btn btn-warning\">Associer</a> </td>
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['espece'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "  </table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "montage/link_espece.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 31,  120 => 28,  116 => 27,  113 => 26,  109 => 25,  100 => 18,  91 => 15,  87 => 14,  84 => 13,  80 => 12,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
  <h4>{{ montage.nom }}</h4>
  <p>Associer une espèce</p>

  <table class=\"table\">
    <tr>
      <th>Nom de l'espèce</th>
      <th>Action</th>
    </tr>
    {% for espece in link_especes %}
      <tr>
        <td>{{ espece.nom }}</td>
        <td> <a href=\"{{ path('unlink_espece', {'id' : montage.id, 'espece_id' : espece.id  }) }}\" class=\"btn btn-primary\">Dissocier</a> </td>
      </tr>
    {% endfor %}
  </table>

  <table class=\"table\">
    <tr>
      <th>Nom de l'espèce</th>
      <th>Action</th>
    </tr>
    {% for espece in unlink_especes %}
      <tr>
        <td>{{ espece.nom }}</td>
        <td> <a href=\"{{ path('link_espece', {'id' : montage.id, 'espece_id' : espece.id }) }}\" class=\"btn btn-warning\">Associer</a> </td>
      </tr>
    {% endfor %}
  </table>

{% endblock %}
", "montage/link_espece.html.twig", "/home/christophe/Projects/Symfony/Peche/templates/montage/link_espece.html.twig");
    }
}
