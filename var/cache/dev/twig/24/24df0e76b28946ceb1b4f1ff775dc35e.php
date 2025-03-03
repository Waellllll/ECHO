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

/* materiel/index.html.twig */
class __TwigTemplate_19db2ac0a43a658c86bdae9cedb57eab extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materiel/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materiel/index.html.twig"));

        $this->parent = $this->loadTemplate("baseback.html.twig", "materiel/index.html.twig", 1);
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

        yield "Liste de Materiels";
        
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
  <h1 class=\"mb-4\">Liste de Materiels</h1>
  <div class=\"mt-3\">
    <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_new");
        yield "\" class=\"btn btn-success\">Create new</a>
  </div>
  <div class=\"table-responsive\">
    <table class=\"table table-striped table-hover\">
      <thead class=\"thead-dark\">
        <tr>
          <th scope=\"col\">Id</th>
          <th scope=\"col\">Nom</th>
          <th scope=\"col\">Type</th>
          <th scope=\"col\">Description</th>
          <th scope=\"col\">Image</th>
          <th scope=\"col\">Marque</th>
          <th scope=\"col\">Prix</th>
          <th scope=\"col\">Categorie</th>
          <th scope=\"col\">Actions</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["materiels"]) || array_key_exists("materiels", $context) ? $context["materiels"] : (function () { throw new RuntimeError('Variable "materiels" does not exist.', 27, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["materiel"]) {
            // line 28
            yield "          <tr>
            <td>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "id", [], "any", false, false, false, 29), "html", null, true);
            yield "</td>
            <td>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "nom", [], "any", false, false, false, 30), "html", null, true);
            yield "</td>
            <td>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "type", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
            <td>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "description", [], "any", false, false, false, 32), "html", null, true);
            yield "</td>
            <td>
              ";
            // line 34
            if (CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "image", [], "any", false, false, false, 34)) {
                // line 35
                yield "                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "image", [], "any", false, false, false, 35))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "nom", [], "any", false, false, false, 35), "html", null, true);
                yield "\" style=\"max-width: 100px; max-height: 100px;\">
              ";
            } else {
                // line 37
                yield "                N/A
              ";
            }
            // line 39
            yield "            </td>
            <td>";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "marque", [], "any", false, false, false, 40), "html", null, true);
            yield "</td>
            <td>";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "prix", [], "any", false, false, false, 41), "html", null, true);
            yield "</td>
            <td>";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "categorie", [], "any", false, false, false, 42), "html", null, true);
            yield "</td>
            <td>
              <a href=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-primary mb-1\">Show</a>
              <a href=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-secondary mb-1\">Edit</a>
              <form method=\"post\" action=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                  <input type=\"hidden\" name=\"_token\" value=\"";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "id", [], "any", false, false, false, 47))), "html", null, true);
            yield "\">
                  <button class=\"btn btn-sm btn-danger mb-1\">Delete</button>
              </form>

            </td>
          </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 53
        if (!$context['_iterated']) {
            // line 54
            yield "          <tr>
            <td colspan=\"9\" class=\"text-center\">No records found</td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['materiel'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        yield "      </tbody>
    </table>
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
        return "materiel/index.html.twig";
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
        return array (  215 => 58,  206 => 54,  204 => 53,  193 => 47,  189 => 46,  185 => 45,  181 => 44,  176 => 42,  172 => 41,  168 => 40,  165 => 39,  161 => 37,  153 => 35,  151 => 34,  146 => 32,  142 => 31,  138 => 30,  134 => 29,  131 => 28,  126 => 27,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseback.html.twig' %}

{% block title %}Liste de Materiels{% endblock %}

{% block body %}
<div class=\"container mt-5\">
  <h1 class=\"mb-4\">Liste de Materiels</h1>
  <div class=\"mt-3\">
    <a href=\"{{ path('app_materiel_new') }}\" class=\"btn btn-success\">Create new</a>
  </div>
  <div class=\"table-responsive\">
    <table class=\"table table-striped table-hover\">
      <thead class=\"thead-dark\">
        <tr>
          <th scope=\"col\">Id</th>
          <th scope=\"col\">Nom</th>
          <th scope=\"col\">Type</th>
          <th scope=\"col\">Description</th>
          <th scope=\"col\">Image</th>
          <th scope=\"col\">Marque</th>
          <th scope=\"col\">Prix</th>
          <th scope=\"col\">Categorie</th>
          <th scope=\"col\">Actions</th>
        </tr>
      </thead>
      <tbody>
        {% for materiel in materiels %}
          <tr>
            <td>{{ materiel.id }}</td>
            <td>{{ materiel.nom }}</td>
            <td>{{ materiel.type }}</td>
            <td>{{ materiel.description }}</td>
            <td>
              {% if materiel.image %}
                <img src=\"{{ asset('uploads/' ~ materiel.image) }}\" alt=\"{{ materiel.nom }}\" style=\"max-width: 100px; max-height: 100px;\">
              {% else %}
                N/A
              {% endif %}
            </td>
            <td>{{ materiel.marque }}</td>
            <td>{{ materiel.prix }}</td>
            <td>{{ materiel.categorie }}</td>
            <td>
              <a href=\"{{ path('app_materiel_show', {'id': materiel.id}) }}\" class=\"btn btn-sm btn-primary mb-1\">Show</a>
              <a href=\"{{ path('app_materiel_edit', {'id': materiel.id}) }}\" class=\"btn btn-sm btn-secondary mb-1\">Edit</a>
              <form method=\"post\" action=\"{{ path('app_materiel_delete', {'id': materiel.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                  <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ materiel.id) }}\">
                  <button class=\"btn btn-sm btn-danger mb-1\">Delete</button>
              </form>

            </td>
          </tr>
        {% else %}
          <tr>
            <td colspan=\"9\" class=\"text-center\">No records found</td>
          </tr>
        {% endfor %}
      </tbody>
    </table>
  </div>
  
  
</div>
{% endblock %}
", "materiel/index.html.twig", "C:\\xampp1\\htdocs\\integration_workshop_user1\\templates\\materiel\\index.html.twig");
    }
}
