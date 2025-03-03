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

/* terrain/listTerrain.html.twig */
class __TwigTemplate_1b438b1128ddc9a3687209c44f5e7a8e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "terrain/listTerrain.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "terrain/listTerrain.html.twig"));

        $this->parent = $this->loadTemplate("baseback.html.twig", "terrain/listTerrain.html.twig", 1);
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

        yield "New Workshop";
        
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
/* Global Styles */
body {
    background-color: #f8fdf8;
    font-family: Arial, sans-serif;
    color: #2d6a4f;
}

/* Form Container */
.form-group {
    margin-bottom: 1rem;
}

/* Labels */
.form-label {
    font-weight: bold;
    color: #2d6a4f;
}

/* Textarea and Input Fields */
.form-control,
.form-control-file {
    border: 2px solid #2d6a4f;
    border-radius: 5px;
    padding: 10px;
    background-color: #ffffff;
    transition: border-color 0.3s;
}

.form-control:focus {
    border-color: #1b4332;
    box-shadow: 0 0 5px rgba(43, 111, 75, 0.5);
}

/* Error Messages */
.form-errors {
    color: #d9534f;
    font-size: 0.875rem;
}

/* Small Help Text */
.form-text {
    font-size: 0.875rem;
    color: #1b4332;
}

/* Submit Button */
.btn-info {
    background-color: #2d6a4f;
    border-color: #1b4332;
    font-weight: bold;
    transition: background-color 0.3s, border-color 0.3s;
}

.btn-info:hover {
    background-color: #1b4332;
    border-color: #0f3a25;
}

/* Additional Spacing */
.mt-2 {
    margin-top: 1rem;
}

/* Image Gallery - Facebook Style */
.image-gallery {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 20px;
    margin-top: 20px;
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

.image-item img {
    width: 100%;
    border-radius: 10px;
}

.image-item p {
    font-size: 1rem;
    color: #1b4332;
    margin-top: 10px;
}

/* Delete Icon */
.delete-icon {
    position: absolute;
    top: 10px;
    right: 10px;
    background-color: #d9534f;
    color: white;
    border: none;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    font-size: 16px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background-color 0.3s;
}

.delete-icon:hover {
    background-color: #c9302c;
}

/* Style for the name and surname */
.image-item p.name-surname {
    font-size: 1.2rem;
    font-weight: bold;
    color: #2d6a4f;
    margin-bottom: 10px;
}

/* Edit Icon */
.edit-icon {
    position: absolute;
    top: 10px;
    left: 10px;
    background-color: #5bc0de;
    color: white;
    border: none;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    font-size: 16px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background-color 0.3s;
}

.edit-icon:hover {
    background-color: #31b0d5;
}
/* Intervention Icon */
.intervention-icon {
    position: absolute;
    top: 10px;
    left: 50px; /* Ajustez la position selon vos besoins */
    background-color: #ffc107; /* Couleur jaune */
    color: white;
    border: none;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    font-size: 16px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background-color 0.3s;
}

.intervention-icon:hover {
    background-color: #e0a800; /* Couleur jaune foncé au survol */
}

</style>

<script>
function confirmDelete(element) {
  if (confirm('Êtes-vous sûr de vouloir supprimer cet élément ?')) {
    window.location.href = element.dataset.url; // Redirect if confirmed
  }
}
</script>

<h1>Liste des Terrains</h1>

<div class=\"image-gallery\">
    ";
        // line 190
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 190, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["imageData"]) {
            // line 191
            yield "        <div class=\"image-item\">
               <p class=\"name-surname\">";
            // line 192
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["imageData"], "nom", [], "any", false, false, false, 192), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["imageData"], "prenom", [], "any", false, false, false, 192), "html", null, true);
            yield "</p>
            ";
            // line 193
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["imageData"], "iduser", [], "any", false, false, false, 193) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 193, $this->source); })()), "user", [], "any", false, false, false, 193), "id", [], "any", false, false, false, 193))) {
                // line 194
                yield "                <a class=\"delete-icon\" href=\"#\" data-url=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["imageData"], "id", [], "any", false, false, false, 194)]), "html", null, true);
                yield "\" onclick=\"confirmDelete(this); return false;\">&times;</a>
                <a class=\"edit-icon\" href=\"";
                // line 195
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["imageData"], "id", [], "any", false, false, false, 195)]), "html", null, true);
                yield "\">⚙️</a> 
                 
            ";
            }
            // line 198
            yield "             <a class=\"intervention-icon\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("intervention", ["idT" => CoreExtension::getAttribute($this->env, $this->source, $context["imageData"], "id", [], "any", false, false, false, 198), "userId" => CoreExtension::getAttribute($this->env, $this->source, $context["imageData"], "iduser", [], "any", false, false, false, 198)]), "html", null, true);
            yield "\">👨‍🔧</a>
 
            <img src=\"data:image/jpeg;base64,";
            // line 200
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["imageData"], "img", [], "any", false, false, false, 200), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["imageData"], "descr", [], "any", false, false, false, 200), "html", null, true);
            yield "\" width=\"200\"> 
            <p>";
            // line 201
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["imageData"], "descr", [], "any", false, false, false, 201), "html", null, true);
            yield " </p> 
           
        </div>
    ";
            $context['_iterated'] = true;
        }
        // line 204
        if (!$context['_iterated']) {
            // line 205
            yield "        <p>Aucune image trouvée.</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['imageData'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 207
        yield "</div>

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
        return "terrain/listTerrain.html.twig";
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
        return array (  342 => 207,  335 => 205,  333 => 204,  325 => 201,  319 => 200,  313 => 198,  307 => 195,  302 => 194,  300 => 193,  294 => 192,  291 => 191,  286 => 190,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseback.html.twig' %}

{% block title %}New Workshop{% endblock %}

{% block body %}
<style>
/* Global Styles */
body {
    background-color: #f8fdf8;
    font-family: Arial, sans-serif;
    color: #2d6a4f;
}

/* Form Container */
.form-group {
    margin-bottom: 1rem;
}

/* Labels */
.form-label {
    font-weight: bold;
    color: #2d6a4f;
}

/* Textarea and Input Fields */
.form-control,
.form-control-file {
    border: 2px solid #2d6a4f;
    border-radius: 5px;
    padding: 10px;
    background-color: #ffffff;
    transition: border-color 0.3s;
}

.form-control:focus {
    border-color: #1b4332;
    box-shadow: 0 0 5px rgba(43, 111, 75, 0.5);
}

/* Error Messages */
.form-errors {
    color: #d9534f;
    font-size: 0.875rem;
}

/* Small Help Text */
.form-text {
    font-size: 0.875rem;
    color: #1b4332;
}

/* Submit Button */
.btn-info {
    background-color: #2d6a4f;
    border-color: #1b4332;
    font-weight: bold;
    transition: background-color 0.3s, border-color 0.3s;
}

.btn-info:hover {
    background-color: #1b4332;
    border-color: #0f3a25;
}

/* Additional Spacing */
.mt-2 {
    margin-top: 1rem;
}

/* Image Gallery - Facebook Style */
.image-gallery {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 20px;
    margin-top: 20px;
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

.image-item img {
    width: 100%;
    border-radius: 10px;
}

.image-item p {
    font-size: 1rem;
    color: #1b4332;
    margin-top: 10px;
}

/* Delete Icon */
.delete-icon {
    position: absolute;
    top: 10px;
    right: 10px;
    background-color: #d9534f;
    color: white;
    border: none;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    font-size: 16px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background-color 0.3s;
}

.delete-icon:hover {
    background-color: #c9302c;
}

/* Style for the name and surname */
.image-item p.name-surname {
    font-size: 1.2rem;
    font-weight: bold;
    color: #2d6a4f;
    margin-bottom: 10px;
}

/* Edit Icon */
.edit-icon {
    position: absolute;
    top: 10px;
    left: 10px;
    background-color: #5bc0de;
    color: white;
    border: none;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    font-size: 16px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background-color 0.3s;
}

.edit-icon:hover {
    background-color: #31b0d5;
}
/* Intervention Icon */
.intervention-icon {
    position: absolute;
    top: 10px;
    left: 50px; /* Ajustez la position selon vos besoins */
    background-color: #ffc107; /* Couleur jaune */
    color: white;
    border: none;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    font-size: 16px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background-color 0.3s;
}

.intervention-icon:hover {
    background-color: #e0a800; /* Couleur jaune foncé au survol */
}

</style>

<script>
function confirmDelete(element) {
  if (confirm('Êtes-vous sûr de vouloir supprimer cet élément ?')) {
    window.location.href = element.dataset.url; // Redirect if confirmed
  }
}
</script>

<h1>Liste des Terrains</h1>

<div class=\"image-gallery\">
    {% for imageData in images %}
        <div class=\"image-item\">
               <p class=\"name-surname\">{{ imageData.nom }} {{ imageData.prenom }}</p>
            {% if imageData.iduser == app.user.id %}
                <a class=\"delete-icon\" href=\"#\" data-url=\"{{ path('delete', {'id': imageData.id}) }}\" onclick=\"confirmDelete(this); return false;\">&times;</a>
                <a class=\"edit-icon\" href=\"{{ path('edit', {'id': imageData.id}) }}\">⚙️</a> 
                 
            {% endif %}
             <a class=\"intervention-icon\" href=\"{{ path('intervention', {'idT': imageData.id, 'userId': imageData.iduser}) }}\">👨‍🔧</a>
 
            <img src=\"data:image/jpeg;base64,{{ imageData.img }}\" alt=\"{{ imageData.descr }}\" width=\"200\"> 
            <p>{{ imageData.descr }} </p> 
           
        </div>
    {% else %}
        <p>Aucune image trouvée.</p>
    {% endfor %}
</div>

{% endblock %}
", "terrain/listTerrain.html.twig", "C:\\Users\\OmarA\\OneDrive\\Bureau\\integration_workshop_user1\\templates\\terrain\\listTerrain.html.twig");
    }
}
