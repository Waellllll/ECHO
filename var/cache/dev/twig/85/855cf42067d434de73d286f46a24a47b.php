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

/* materiel/show.html.twig */
class __TwigTemplate_5c461bb5759ec2943df2ecd4ea5bba75 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materiel/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materiel/show.html.twig"));

        $this->parent = $this->loadTemplate("baseback.html.twig", "materiel/show.html.twig", 1);
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

        yield "Materiel Details";
        
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
        yield "<div class=\"container mt-5\">
  <div class=\"card shadow\">
    <div class=\"card-header bg-primary text-white\">
      <h3 class=\"mb-0\">Materiel Details</h3>
    </div>
    <div class=\"card-body\">
      <div class=\"row\">
        ";
        // line 14
        yield "        <div class=\"col-md-4 text-center\">
          ";
        // line 15
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 15, $this->source); })()), "image", [], "any", false, false, false, 15)) {
            // line 16
            yield "            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 16, $this->source); })()), "image", [], "any", false, false, false, 16))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 16, $this->source); })()), "nom", [], "any", false, false, false, 16), "html", null, true);
            yield "\" class=\"img-fluid rounded mb-3\">
          ";
        } else {
            // line 18
            yield "            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("placeholder.png"), "html", null, true);
            yield "\" alt=\"No image available\" class=\"img-fluid rounded mb-3\">
          ";
        }
        // line 20
        yield "        </div>
        ";
        // line 22
        yield "        <div class=\"col-md-8\">
          <table class=\"table table-borderless\">
            <tbody>
              <tr>
                <th scope=\"row\">Id:</th>
                <td>";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27), "html", null, true);
        yield "</td>
              </tr>
              <tr>
                <th scope=\"row\">Nom:</th>
                <td>";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 31, $this->source); })()), "nom", [], "any", false, false, false, 31), "html", null, true);
        yield "</td>
              </tr>
              <tr>
                <th scope=\"row\">Type:</th>
                <td>";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 35, $this->source); })()), "type", [], "any", false, false, false, 35), "html", null, true);
        yield "</td>
              </tr>
              <tr>
                <th scope=\"row\">Description:</th>
                <td>";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 39, $this->source); })()), "description", [], "any", false, false, false, 39), "html", null, true);
        yield "</td>
              </tr>
              <tr>
                <th scope=\"row\">Marque:</th>
                <td>";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 43, $this->source); })()), "marque", [], "any", false, false, false, 43), "html", null, true);
        yield "</td>
              </tr>
              <tr>
                <th scope=\"row\">Prix:</th>
                <td>";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 47, $this->source); })()), "prix", [], "any", false, false, false, 47), "html", null, true);
        yield "</td>
              </tr>
              <tr>
                <th scope=\"row\">Categorie:</th>
                <td>";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 51, $this->source); })()), "categorie", [], "any", false, false, false, 51), "html", null, true);
        yield "</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class=\"card-footer text-right\">
        <a href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_index");
        yield "\" class=\"btn btn-outline-secondary\">Back to list</a>
        <a href=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 60, $this->source); })()), "id", [], "any", false, false, false, 60)]), "html", null, true);
        yield "\" class=\"btn btn-outline-primary\">Edit</a>
        <form method=\"post\" action=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 61, $this->source); })()), "id", [], "any", false, false, false, 61)]), "html", null, true);
        yield "\" style=\"display:inline-block;\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 62, $this->source); })()), "id", [], "any", false, false, false, 62))), "html", null, true);
        yield "\">
            <button class=\"btn btn-outline-danger\">Delete</button>
        </form>
        </div>

  </div>
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
        return "materiel/show.html.twig";
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
        return array (  203 => 62,  199 => 61,  195 => 60,  191 => 59,  180 => 51,  173 => 47,  166 => 43,  159 => 39,  152 => 35,  145 => 31,  138 => 27,  131 => 22,  128 => 20,  122 => 18,  114 => 16,  112 => 15,  109 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseback.html.twig' %}

{% block title %}Materiel Details{% endblock %}

{% block body %}
<div class=\"container mt-5\">
  <div class=\"card shadow\">
    <div class=\"card-header bg-primary text-white\">
      <h3 class=\"mb-0\">Materiel Details</h3>
    </div>
    <div class=\"card-body\">
      <div class=\"row\">
        {# Left column: Image preview #}
        <div class=\"col-md-4 text-center\">
          {% if materiel.image %}
            <img src=\"{{ asset('uploads/' ~ materiel.image) }}\" alt=\"{{ materiel.nom }}\" class=\"img-fluid rounded mb-3\">
          {% else %}
            <img src=\"{{ asset('placeholder.png') }}\" alt=\"No image available\" class=\"img-fluid rounded mb-3\">
          {% endif %}
        </div>
        {# Right column: Details table #}
        <div class=\"col-md-8\">
          <table class=\"table table-borderless\">
            <tbody>
              <tr>
                <th scope=\"row\">Id:</th>
                <td>{{ materiel.id }}</td>
              </tr>
              <tr>
                <th scope=\"row\">Nom:</th>
                <td>{{ materiel.nom }}</td>
              </tr>
              <tr>
                <th scope=\"row\">Type:</th>
                <td>{{ materiel.type }}</td>
              </tr>
              <tr>
                <th scope=\"row\">Description:</th>
                <td>{{ materiel.description }}</td>
              </tr>
              <tr>
                <th scope=\"row\">Marque:</th>
                <td>{{ materiel.marque }}</td>
              </tr>
              <tr>
                <th scope=\"row\">Prix:</th>
                <td>{{ materiel.prix }}</td>
              </tr>
              <tr>
                <th scope=\"row\">Categorie:</th>
                <td>{{ materiel.categorie }}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class=\"card-footer text-right\">
        <a href=\"{{ path('app_materiel_index') }}\" class=\"btn btn-outline-secondary\">Back to list</a>
        <a href=\"{{ path('app_materiel_edit', {'id': materiel.id}) }}\" class=\"btn btn-outline-primary\">Edit</a>
        <form method=\"post\" action=\"{{ path('app_materiel_delete', {'id': materiel.id}) }}\" style=\"display:inline-block;\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ materiel.id) }}\">
            <button class=\"btn btn-outline-danger\">Delete</button>
        </form>
        </div>

  </div>
</div>
{% endblock %}
", "materiel/show.html.twig", "C:\\xampp1\\htdocs\\integration_workshop_user1\\templates\\materiel\\show.html.twig");
    }
}
