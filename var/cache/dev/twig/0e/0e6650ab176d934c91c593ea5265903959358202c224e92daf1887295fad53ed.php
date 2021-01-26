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

/* espece/espece_edit.html.twig */
class __TwigTemplate_197a8f485b9ce14bb47cd440f163857a1f7579c8aebcc438832d40b4ba6c6624 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espece/espece_edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espece/espece_edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "espece/espece_edit.html.twig", 1);
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
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formEspece"]) || array_key_exists("formEspece", $context) ? $context["formEspece"] : (function () { throw new RuntimeError('Variable "formEspece" does not exist.', 4, $this->source); })()), 'form_start');
        echo "

    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEspece"]) || array_key_exists("formEspece", $context) ? $context["formEspece"] : (function () { throw new RuntimeError('Variable "formEspece" does not exist.', 6, $this->source); })()), "nom", [], "any", false, false, false, 6), 'row', ["label" => "Nom de l'espèce", "attr" => ["placeholder" => "Nom ...", "class" => "form-control"]]);
        echo "
    <br>
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEspece"]) || array_key_exists("formEspece", $context) ? $context["formEspece"] : (function () { throw new RuntimeError('Variable "formEspece" does not exist.', 8, $this->source); })()), "maille", [], "any", false, false, false, 8), 'row', ["label" => "Taille minimale de prélèvement en cm", "attr" => ["class" => "form-control"]]);
        echo "
    <br>
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEspece"]) || array_key_exists("formEspece", $context) ? $context["formEspece"] : (function () { throw new RuntimeError('Variable "formEspece" does not exist.', 10, $this->source); })()), "contenu", [], "any", false, false, false, 10), 'row', ["label" => "Description", "attr" => ["class" => "form-control"]]);
        echo "
    <br>
    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formEspece"]) || array_key_exists("formEspece", $context) ? $context["formEspece"] : (function () { throw new RuntimeError('Variable "formEspece" does not exist.', 12, $this->source); })()), "imageFile", [], "any", false, false, false, 12), 'row', ["label" => "Image", "attr" => ["class" => "form-control"]]);
        echo "
    <br>
    <button type=\"submit\" class=\"btn btn-success\">
      ";
        // line 15
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 15, $this->source); })())) {
            // line 16
            echo "        Enregistrer les modifications
      ";
        } else {
            // line 18
            echo "        Ajouter le montage
      ";
        }
        // line 20
        echo "    </button>

  ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formEspece"]) || array_key_exists("formEspece", $context) ? $context["formEspece"] : (function () { throw new RuntimeError('Variable "formEspece" does not exist.', 22, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "espece/espece_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 22,  105 => 20,  101 => 18,  97 => 16,  95 => 15,  89 => 12,  84 => 10,  79 => 8,  74 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
  {{ form_start(formEspece) }}

    {{ form_row(formEspece.nom, {'label' : 'Nom de l\\'espèce', 'attr' : { 'placeholder' : 'Nom ...', 'class' : 'form-control'}} )}}
    <br>
    {{ form_row(formEspece.maille, {'label' : 'Taille minimale de prélèvement en cm', 'attr' : { 'class' : 'form-control' }} )}}
    <br>
    {{ form_row(formEspece.contenu, {'label' : 'Description', 'attr' : {'class' : 'form-control'}} )}}
    <br>
    {{ form_row(formEspece.imageFile, { 'label' :'Image', 'attr' : { 'class':'form-control'}}) }}
    <br>
    <button type=\"submit\" class=\"btn btn-success\">
      {% if editMode %}
        Enregistrer les modifications
      {% else %}
        Ajouter le montage
      {% endif %}
    </button>

  {{ form_end(formEspece) }}
{% endblock %}
", "espece/espece_edit.html.twig", "/home/christophe/Projects/Symfony/Peche/templates/espece/espece_edit.html.twig");
    }
}
