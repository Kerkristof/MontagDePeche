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

/* message/message_edit.html.twig */
class __TwigTemplate_38d6f4510b0ba3f0d63745e72abd07b975a4de807b9879e20b283019d8dd43cc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "message/message_edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "message/message_edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "message/message_edit.html.twig", 1);
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
        echo "
";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formMessage"]) || array_key_exists("formMessage", $context) ? $context["formMessage"] : (function () { throw new RuntimeError('Variable "formMessage" does not exist.', 5, $this->source); })()), 'form_start');
        echo "
  ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMessage"]) || array_key_exists("formMessage", $context) ? $context["formMessage"] : (function () { throw new RuntimeError('Variable "formMessage" does not exist.', 6, $this->source); })()), "titre", [], "any", false, false, false, 6), 'row', ["label" => "Titre du message", "attr" => ["placeholder" => "Titre ...", "class" => "form-control"]]);
        echo "
  <br>
  ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMessage"]) || array_key_exists("formMessage", $context) ? $context["formMessage"] : (function () { throw new RuntimeError('Variable "formMessage" does not exist.', 8, $this->source); })()), "contenu", [], "any", false, false, false, 8), 'row', ["label" => "Description", "attr" => ["class" => "form-control"]]);
        echo "
  <br>
  ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMessage"]) || array_key_exists("formMessage", $context) ? $context["formMessage"] : (function () { throw new RuntimeError('Variable "formMessage" does not exist.', 10, $this->source); })()), "statut", [], "any", false, false, false, 10), 'row', ["label" => "Statut actif"]);
        echo "
  <button type=\"submit\" class=\"btn btn-success\">
    ";
        // line 12
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 12, $this->source); })())) {
            // line 13
            echo "      Enregistrer les modifications
    ";
        } else {
            // line 15
            echo "      Ajouter le message
    ";
        }
        // line 17
        echo "  </button>
";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formMessage"]) || array_key_exists("formMessage", $context) ? $context["formMessage"] : (function () { throw new RuntimeError('Variable "formMessage" does not exist.', 18, $this->source); })()), 'form_end');
        echo "





";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "message/message_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 18,  100 => 17,  96 => 15,  92 => 13,  90 => 12,  85 => 10,  80 => 8,  75 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

{{ form_start(formMessage) }}
  {{ form_row(formMessage.titre, {'label' : 'Titre du message', 'attr' : { 'placeholder' : 'Titre ...', 'class' : 'form-control'}} )}}
  <br>
  {{ form_row(formMessage.contenu, {'label' : 'Description', 'attr' : {'class' : 'form-control'}} )}}
  <br>
  {{ form_row(formMessage.statut, {'label' : 'Statut actif'} )}}
  <button type=\"submit\" class=\"btn btn-success\">
    {% if editMode %}
      Enregistrer les modifications
    {% else %}
      Ajouter le message
    {% endif %}
  </button>
{{ form_end(formMessage) }}





{% endblock %}
", "message/message_edit.html.twig", "/home/christophe/Projects/Symfony/Peche/templates/message/message_edit.html.twig");
    }
}
