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

/* elearning/index.html.twig */
class __TwigTemplate_9e46fb4cab7ff79c3e74e403786f9b25 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elearning/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elearning/index.html.twig"));

        $this->parent = $this->loadTemplate("baseback.html.twig", "elearning/index.html.twig", 1);
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

        yield "Elearning Index";
        
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
        yield "
    <h1 class=\"mb-4\">Elearning Index</h1>

    <table class=\"table table-bordered table-striped\">
        <thead class=\"thead-dark\">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Categories</th>
                <th>Content Type</th>
                <th>Content URL</th>
                <th>Duration</th>
                <th>Difficulty Level</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>File</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["elearnings"]) || array_key_exists("elearnings", $context) ? $context["elearnings"] : (function () { throw new RuntimeError('Variable "elearnings" does not exist.', 27, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["elearning"]) {
            // line 28
            yield "            <tr>
                <td>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["elearning"], "id", [], "any", false, false, false, 29), "html", null, true);
            yield "</td>
                <td>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["elearning"], "title", [], "any", false, false, false, 30), "html", null, true);
            yield "</td>
                <td>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["elearning"], "description", [], "any", false, false, false, 31), 0, 50) . "..."), "html", null, true);
            yield "</td> ";
            // line 32
            yield "                <td>
                    ";
            // line 33
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["elearning"], "categories", [], "any", false, false, false, 33))) {
                // line 34
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::map($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["elearning"], "categories", [], "any", false, false, false, 34), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new RuntimeError('Variable "c" does not exist.', 34, $this->source); })()), "name", [], "any", false, false, false, 34); }), ", "), "html", null, true);
                yield "
                    ";
            } else {
                // line 36
                yield "                        No Category
                    ";
            }
            // line 38
            yield "                </td>
                <td>";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["elearning"], "contentType", [], "any", false, false, false, 39), "html", null, true);
            yield "</td>
                <td>
                    ";
            // line 41
            if (CoreExtension::getAttribute($this->env, $this->source, $context["elearning"], "contentUrl", [], "any", false, false, false, 41)) {
                // line 42
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["elearning"], "contentUrl", [], "any", false, false, false, 42), "html", null, true);
                yield "\" target=\"_blank\" class=\"btn btn-sm btn-primary\">View</a>
                    ";
            } else {
                // line 44
                yield "                        N/A
                    ";
            }
            // line 46
            yield "                </td>
                <td>";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["elearning"], "duration", [], "any", false, false, false, 47), "html", null, true);
            yield " min</td>
                <td>";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["elearning"], "difficultyLevel", [], "any", false, false, false, 48)), "html", null, true);
            yield "</td>
                <td>";
            // line 49
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["elearning"], "createdAt", [], "any", false, false, false, 49)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["elearning"], "createdAt", [], "any", false, false, false, 49), "Y-m-d H:i:s"), "html", null, true)) : ("N/A"));
            yield "</td>
                <td>";
            // line 50
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["elearning"], "updatedAt", [], "any", false, false, false, 50)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["elearning"], "updatedAt", [], "any", false, false, false, 50), "Y-m-d H:i:s"), "html", null, true)) : ("N/A"));
            yield "</td>
                <td>
                    ";
            // line 52
            if (CoreExtension::getAttribute($this->env, $this->source, $context["elearning"], "filePath", [], "any", false, false, false, 52)) {
                // line 53
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["elearning"], "filePath", [], "any", false, false, false, 53))), "html", null, true);
                yield "\" download class=\"btn btn-sm btn-secondary\">Download</a>
                    ";
            } else {
                // line 55
                yield "                        No file
                    ";
            }
            // line 57
            yield "                </td>
                <td>
                    <a class=\"btn btn-sm btn-info\" href=\"";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_elearning_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["elearning"], "id", [], "any", false, false, false, 59)]), "html", null, true);
            yield "\">Show</a>
                    <a class=\"btn btn-sm btn-warning\" href=\"";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_elearning_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["elearning"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            yield "\">Edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 63
        if (!$context['_iterated']) {
            // line 64
            yield "            <tr>
                <td colspan=\"12\" class=\"text-center\">No records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['elearning'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        yield "        </tbody>
    </table>

    <a class=\"btn btn-success\" href=\"";
        // line 71
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_elearning_new");
        yield "\">Create New</a>

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
        return "elearning/index.html.twig";
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
        return array (  241 => 71,  236 => 68,  227 => 64,  225 => 63,  217 => 60,  213 => 59,  209 => 57,  205 => 55,  199 => 53,  197 => 52,  192 => 50,  188 => 49,  184 => 48,  180 => 47,  177 => 46,  173 => 44,  167 => 42,  165 => 41,  160 => 39,  157 => 38,  153 => 36,  147 => 34,  145 => 33,  142 => 32,  139 => 31,  135 => 30,  131 => 29,  128 => 28,  123 => 27,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseback.html.twig' %}

{% block title %}Elearning Index{% endblock %}

{% block body %}

    <h1 class=\"mb-4\">Elearning Index</h1>

    <table class=\"table table-bordered table-striped\">
        <thead class=\"thead-dark\">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Categories</th>
                <th>Content Type</th>
                <th>Content URL</th>
                <th>Duration</th>
                <th>Difficulty Level</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>File</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for elearning in elearnings %}
            <tr>
                <td>{{ elearning.id }}</td>
                <td>{{ elearning.title }}</td>
                <td>{{ elearning.description|slice(0, 50) ~ '...' }}</td> {# Shorten long descriptions #}
                <td>
                    {% if elearning.categories is not empty %}
                        {{ elearning.categories|map(c => c.name)|join(', ') }}
                    {% else %}
                        No Category
                    {% endif %}
                </td>
                <td>{{ elearning.contentType }}</td>
                <td>
                    {% if elearning.contentUrl %}
                        <a href=\"{{ elearning.contentUrl }}\" target=\"_blank\" class=\"btn btn-sm btn-primary\">View</a>
                    {% else %}
                        N/A
                    {% endif %}
                </td>
                <td>{{ elearning.duration }} min</td>
                <td>{{ elearning.difficultyLevel|capitalize }}</td>
                <td>{{ elearning.createdAt ? elearning.createdAt|date('Y-m-d H:i:s') : 'N/A' }}</td>
                <td>{{ elearning.updatedAt ? elearning.updatedAt|date('Y-m-d H:i:s') : 'N/A' }}</td>
                <td>
                    {% if elearning.filePath %}
                        <a href=\"{{ asset('uploads/' ~ elearning.filePath) }}\" download class=\"btn btn-sm btn-secondary\">Download</a>
                    {% else %}
                        No file
                    {% endif %}
                </td>
                <td>
                    <a class=\"btn btn-sm btn-info\" href=\"{{ path('app_elearning_show', {'id': elearning.id}) }}\">Show</a>
                    <a class=\"btn btn-sm btn-warning\" href=\"{{ path('app_elearning_edit', {'id': elearning.id}) }}\">Edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"12\" class=\"text-center\">No records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a class=\"btn btn-success\" href=\"{{ path('app_elearning_new') }}\">Create New</a>

{% endblock %}
", "elearning/index.html.twig", "C:\\xampp1\\htdocs\\integration_workshop_user1\\templates\\elearning\\index.html.twig");
    }
}
