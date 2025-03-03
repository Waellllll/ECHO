<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* terrain/updateI.html.twig */
class __TwigTemplate_9126beaaaec24b3bf2b84292fdd0dee5 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "baseback.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "terrain/updateI.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "terrain/updateI.html.twig"));

        $this->parent = $this->loadTemplate("baseback.html.twig", "terrain/updateI.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Terrain et Interventions";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<style>
body {
    background-color: #f8fdf8;
    font-family: Arial, sans-serif;
    color: #2d6a4f;
}



/* Formulaire d'ajout d'intervention */
.add-intervention-form {
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    margin-top: 20px;
    width: 100%;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}
.image-item p.name-surname {
    font-size: 1.2rem;
    font-weight: bold;
    color: #2d6a4f;
    margin-bottom: 10px;
}

.image-item {
    width: 500px;
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    padding: 15px;
    text-align: center;
    border: 2px solid #2d6a4f;
    position: relative;
}

/* Titre du formulaire */
.add-intervention-form h4 {
    font-size: 1.5rem;
    font-weight: bold;
    color: #2d6a4f;
    margin-bottom: 15px;
    text-align: center;
}
.image-item img {
    width: 100%;
    border-radius: 10px;
}

.image-item p {
    font-size: 1rem;
    color: #1b4332;
    margin-top: 10px;
}
/* Style des champs du formulaire */
.add-intervention-form .form-control {
    border: 2px solid #2d6a4f;
    border-radius: 5px;
    padding: 10px;
    margin-bottom: 15px;
    font-size: 1rem;
    transition: border-color 0.3s ease;
}

.add-intervention-form .form-control:focus {
    border-color: #1b4332;
    box-shadow: 0 0 5px rgba(43, 111, 75, 0.5);
}

/* Style du bouton de soumission */
.add-intervention-form .btn-info {
    background-color: #2d6a4f;
    border-color: #1b4332;
    color: white;
    font-weight: bold;
    padding: 10px 20px;
    border-radius: 5px;
    font-size: 1rem;
    transition: background-color 0.3s ease, border-color 0.3s ease;
    width: 100%;
}

.add-intervention-form .btn-info:hover {
    background-color: #1b4332;
    border-color: #0f3a25;
}

/* Espace supplémentaire entre les champs et le bouton */
.add-intervention-form .form-group {
    margin-bottom: 15px;
}

/* Affichage de la validation ou des erreurs */
.add-intervention-form .form-errors {
    color: #d9534f;
    font-size: 0.875rem;
}

/* Post Image */
.post-image img {
    width: 100%;
    border-radius: 10px;
}

/* Post Header */
.post-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.post-header p {
    font-size: 1.2rem;
    font-weight: bold;
    color: #2d6a4f;
}

/* Interventions Container */
.interventions-container {
    margin-top: 20px;
    padding-top: 10px;
    border-top: 2px solid #d9d9d9;
}

.intervention {
    background-color: #f1f1f1;
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 10px;
}

.post-container {
    position: relative; /* Ajoutez ceci */
    background-color: #ffffff;
    border: 2px solid #2d6a4f;
    border-radius: 10px;
    padding: 20px;
    margin-bottom: 30px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}
    

.intervention p {
    color: #1b4332;
}

/* Action Buttons */
.action-buttons {
    display: flex;
    gap: 10px;
}

/* Button Styles */
.delete-icon, .edit-icon, .intervention-icon {
    background-color: #5bc0de;
    color: white;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    font-size: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
}

.delete-icon:hover, .edit-icon:hover, .intervention-icon:hover {
    background-color: #31b0d5;
}

/* Additional Styling */
.mt-2 { margin-top: 1rem; }
</style>



                 <div class=\"add-intervention-form\">
                    <h4>Modifier intervention</h4>
                    ";
        // line 187
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 187, $this->source); })()), 'form_start');
        yield "
                        ";
        // line 188
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 188, $this->source); })()), "decr", [], "any", false, false, false, 188), 'row');
        yield "
                        <button type=\"submit\" class=\"btn btn-info mt-2 text-white\">Submit</button>
                    ";
        // line 190
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 190, $this->source); })()), 'form_end');
        yield "
                </div>
            
             
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "terrain/updateI.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  292 => 190,  287 => 188,  283 => 187,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseback.html.twig' %}

{% block title %}Terrain et Interventions{% endblock %}

{% block body %}
<style>
body {
    background-color: #f8fdf8;
    font-family: Arial, sans-serif;
    color: #2d6a4f;
}



/* Formulaire d'ajout d'intervention */
.add-intervention-form {
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    margin-top: 20px;
    width: 100%;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}
.image-item p.name-surname {
    font-size: 1.2rem;
    font-weight: bold;
    color: #2d6a4f;
    margin-bottom: 10px;
}

.image-item {
    width: 500px;
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    padding: 15px;
    text-align: center;
    border: 2px solid #2d6a4f;
    position: relative;
}

/* Titre du formulaire */
.add-intervention-form h4 {
    font-size: 1.5rem;
    font-weight: bold;
    color: #2d6a4f;
    margin-bottom: 15px;
    text-align: center;
}
.image-item img {
    width: 100%;
    border-radius: 10px;
}

.image-item p {
    font-size: 1rem;
    color: #1b4332;
    margin-top: 10px;
}
/* Style des champs du formulaire */
.add-intervention-form .form-control {
    border: 2px solid #2d6a4f;
    border-radius: 5px;
    padding: 10px;
    margin-bottom: 15px;
    font-size: 1rem;
    transition: border-color 0.3s ease;
}

.add-intervention-form .form-control:focus {
    border-color: #1b4332;
    box-shadow: 0 0 5px rgba(43, 111, 75, 0.5);
}

/* Style du bouton de soumission */
.add-intervention-form .btn-info {
    background-color: #2d6a4f;
    border-color: #1b4332;
    color: white;
    font-weight: bold;
    padding: 10px 20px;
    border-radius: 5px;
    font-size: 1rem;
    transition: background-color 0.3s ease, border-color 0.3s ease;
    width: 100%;
}

.add-intervention-form .btn-info:hover {
    background-color: #1b4332;
    border-color: #0f3a25;
}

/* Espace supplémentaire entre les champs et le bouton */
.add-intervention-form .form-group {
    margin-bottom: 15px;
}

/* Affichage de la validation ou des erreurs */
.add-intervention-form .form-errors {
    color: #d9534f;
    font-size: 0.875rem;
}

/* Post Image */
.post-image img {
    width: 100%;
    border-radius: 10px;
}

/* Post Header */
.post-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.post-header p {
    font-size: 1.2rem;
    font-weight: bold;
    color: #2d6a4f;
}

/* Interventions Container */
.interventions-container {
    margin-top: 20px;
    padding-top: 10px;
    border-top: 2px solid #d9d9d9;
}

.intervention {
    background-color: #f1f1f1;
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 10px;
}

.post-container {
    position: relative; /* Ajoutez ceci */
    background-color: #ffffff;
    border: 2px solid #2d6a4f;
    border-radius: 10px;
    padding: 20px;
    margin-bottom: 30px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}
    

.intervention p {
    color: #1b4332;
}

/* Action Buttons */
.action-buttons {
    display: flex;
    gap: 10px;
}

/* Button Styles */
.delete-icon, .edit-icon, .intervention-icon {
    background-color: #5bc0de;
    color: white;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    font-size: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
}

.delete-icon:hover, .edit-icon:hover, .intervention-icon:hover {
    background-color: #31b0d5;
}

/* Additional Styling */
.mt-2 { margin-top: 1rem; }
</style>



                 <div class=\"add-intervention-form\">
                    <h4>Modifier intervention</h4>
                    {{ form_start(form) }}
                        {{ form_row(form.decr) }}
                        <button type=\"submit\" class=\"btn btn-info mt-2 text-white\">Submit</button>
                    {{ form_end(form) }}
                </div>
            
             
{% endblock %}
", "terrain/updateI.html.twig", "C:\\Users\\OmarA\\OneDrive\\Bureau\\integration_workshop_user1\\templates\\terrain\\updateI.html.twig");
    }
}
