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

/* montage/montage_edit.html.twig */
class __TwigTemplate_9d7220fe4c14443dd34628b409fe7d9057abde3ad1e4db6f2154d1b77d2d3d86 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "montage/montage_edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "montage/montage_edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "montage/montage_edit.html.twig", 1);
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
        echo "  <h3>Page d'édition de montage</h3>
  ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formMontage"]) || array_key_exists("formMontage", $context) ? $context["formMontage"] : (function () { throw new RuntimeError('Variable "formMontage" does not exist.', 5, $this->source); })()), 'form_start');
        echo "

    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMontage"]) || array_key_exists("formMontage", $context) ? $context["formMontage"] : (function () { throw new RuntimeError('Variable "formMontage" does not exist.', 7, $this->source); })()), "nom", [], "any", false, false, false, 7), 'row', ["label" => "Nom du montage", "attr" => ["placeholder" => "Nom ...", "class" => "form-control"]]);
        echo "
    <br>
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMontage"]) || array_key_exists("formMontage", $context) ? $context["formMontage"] : (function () { throw new RuntimeError('Variable "formMontage" does not exist.', 9, $this->source); })()), "contenu", [], "any", false, false, false, 9), 'row', ["label" => "Description", "attr" => ["class" => "form-control"]]);
        echo "
    <br>
    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMontage"]) || array_key_exists("formMontage", $context) ? $context["formMontage"] : (function () { throw new RuntimeError('Variable "formMontage" does not exist.', 11, $this->source); })()), "imageFile", [], "any", false, false, false, 11), 'row', ["label" => "Image", "attr" => ["class" => "form-control"]]);
        echo "
    <br>
    <button type=\"submit\" class=\"btn btn-success\">
      ";
        // line 14
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 14, $this->source); })())) {
            // line 15
            echo "        Enregistrer les modifications
      ";
        } else {
            // line 17
            echo "        Ajouter le montage
      ";
        }
        // line 19
        echo "    </button>

  ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formMontage"]) || array_key_exists("formMontage", $context) ? $context["formMontage"] : (function () { throw new RuntimeError('Variable "formMontage" does not exist.', 21, $this->source); })()), 'form_end');
        echo "


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "montage/montage_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 21,  102 => 19,  98 => 17,  94 => 15,  92 => 14,  86 => 11,  81 => 9,  76 => 7,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
  <h3>Page d'édition de montage</h3>
  {{ form_start(formMontage) }}

    {{ form_row(formMontage.nom, {'label' : 'Nom du montage', 'attr' : { 'placeholder' : 'Nom ...', 'class' : 'form-control'}} )}}
    <br>
    {{ form_row(formMontage.contenu, {'label' : 'Description', 'attr' : {'class' : 'form-control'}} )}}
    <br>
    {{ form_row(formMontage.imageFile, { 'label' :\"Image\", 'attr' : {'class':'form-control'}}) }}
    <br>
    <button type=\"submit\" class=\"btn btn-success\">
      {% if editMode %}
        Enregistrer les modifications
      {% else %}
        Ajouter le montage
      {% endif %}
    </button>

  {{ form_end(formMontage) }}


{% endblock %}
", "montage/montage_edit.html.twig", "/home/christophe/Projects/Symfony/Peche/templates/montage/montage_edit.html.twig");
    }
}
