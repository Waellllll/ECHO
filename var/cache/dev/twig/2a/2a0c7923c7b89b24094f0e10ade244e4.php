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

/* elearning/show.html.twig */
class __TwigTemplate_a6ed78b904ff0418e2120798b6fde865 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elearning/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elearning/show.html.twig"));

        $this->parent = $this->loadTemplate("baseback.html.twig", "elearning/show.html.twig", 1);
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

        yield "Elearning Details";
        
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
        yield "    <h1 class=\"mb-4\">Elearning Details</h1>

    <table class=\"table table-bordered\">
        <tbody>
            <tr>
                <th>ID</th>
                <td>";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["elearning"]) || array_key_exists("elearning", $context) ? $context["elearning"] : (function () { throw new RuntimeError('Variable "elearning" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["elearning"]) || array_key_exists("elearning", $context) ? $context["elearning"] : (function () { throw new RuntimeError('Variable "elearning" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["elearning"]) || array_key_exists("elearning", $context) ? $context["elearning"] : (function () { throw new RuntimeError('Variable "elearning" does not exist.', 20, $this->source); })()), "description", [], "any", false, false, false, 20), "html", null, true);
        yield "</td>
            </tr>
            <tr>
            <th>Categories</th>
            <td>
                    ";
        // line 25
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["elearning"]) || array_key_exists("elearning", $context) ? $context["elearning"] : (function () { throw new RuntimeError('Variable "elearning" does not exist.', 25, $this->source); })()), "categories", [], "any", false, false, false, 25))) {
            // line 26
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["elearning"]) || array_key_exists("elearning", $context) ? $context["elearning"] : (function () { throw new RuntimeError('Variable "elearning" does not exist.', 26, $this->source); })()), "categories", [], "any", false, false, false, 26));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 27
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 27), "html", null, true);
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 27)) {
                    yield ", ";
                }
                // line 28
                yield "                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            yield "                    ";
        } else {
            // line 30
            yield "                        No Categories
                    ";
        }
        // line 32
        yield "                </td>
            </tr>
            <tr>
                <th>Content Type</th>
                <td>";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["elearning"]) || array_key_exists("elearning", $context) ? $context["elearning"] : (function () { throw new RuntimeError('Variable "elearning" does not exist.', 36, $this->source); })()), "contentType", [], "any", false, false, false, 36), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Content URL</th>
                <td>
                    ";
        // line 41
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["elearning"]) || array_key_exists("elearning", $context) ? $context["elearning"] : (function () { throw new RuntimeError('Variable "elearning" does not exist.', 41, $this->source); })()), "contentUrl", [], "any", false, false, false, 41)) {
            // line 42
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["elearning"]) || array_key_exists("elearning", $context) ? $context["elearning"] : (function () { throw new RuntimeError('Variable "elearning" does not exist.', 42, $this->source); })()), "contentUrl", [], "any", false, false, false, 42), "html", null, true);
            yield "\" target=\"_blank\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["elearning"]) || array_key_exists("elearning", $context) ? $context["elearning"] : (function () { throw new RuntimeError('Variable "elearning" does not exist.', 42, $this->source); })()), "contentUrl", [], "any", false, false, false, 42), "html", null, true);
            yield "</a>
                    ";
        } else {
            // line 44
            yield "                        N/A
                    ";
        }
        // line 46
        yield "                </td>
            </tr>
            <tr>
                <th>Duration</th>
                <td>";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["elearning"]) || array_key_exists("elearning", $context) ? $context["elearning"] : (function () { throw new RuntimeError('Variable "elearning" does not exist.', 50, $this->source); })()), "duration", [], "any", false, false, false, 50), "html", null, true);
        yield " min</td>
            </tr>
            <tr>
                <th>Difficulty Level</th>
                <td>";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["elearning"]) || array_key_exists("elearning", $context) ? $context["elearning"] : (function () { throw new RuntimeError('Variable "elearning" does not exist.', 54, $this->source); })()), "difficultyLevel", [], "any", false, false, false, 54)), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Created At</th>
                <td>";
        // line 58
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["elearning"]) || array_key_exists("elearning", $context) ? $context["elearning"] : (function () { throw new RuntimeError('Variable "elearning" does not exist.', 58, $this->source); })()), "createdAt", [], "any", false, false, false, 58)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["elearning"]) || array_key_exists("elearning", $context) ? $context["elearning"] : (function () { throw new RuntimeError('Variable "elearning" does not exist.', 58, $this->source); })()), "createdAt", [], "any", false, false, false, 58), "Y-m-d H:i:s"), "html", null, true)) : ("N/A"));
        yield "</td>
            </tr>
            <tr>
                <th>Updated At</th>
                <td>";
        // line 62
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["elearning"]) || array_key_exists("elearning", $context) ? $context["elearning"] : (function () { throw new RuntimeError('Variable "elearning" does not exist.', 62, $this->source); })()), "updatedAt", [], "any", false, false, false, 62)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["elearning"]) || array_key_exists("elearning", $context) ? $context["elearning"] : (function () { throw new RuntimeError('Variable "elearning" does not exist.', 62, $this->source); })()), "updatedAt", [], "any", false, false, false, 62), "Y-m-d H:i:s"), "html", null, true)) : ("N/A"));
        yield "</td>
            </tr>
            <tr>
                <th>File</th>
                <td>
                    ";
        // line 67
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["elearning"]) || array_key_exists("elearning", $context) ? $context["elearning"] : (function () { throw new RuntimeError('Variable "elearning" does not exist.', 67, $this->source); })()), "filePath", [], "any", false, false, false, 67)) {
            // line 68
            yield "                        ";
            $context["fileExt"] = Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["elearning"]) || array_key_exists("elearning", $context) ? $context["elearning"] : (function () { throw new RuntimeError('Variable "elearning" does not exist.', 68, $this->source); })()), "filePath", [], "any", false, false, false, 68), "."));
            // line 69
            yield "                        ";
            if (CoreExtension::inFilter((isset($context["fileExt"]) || array_key_exists("fileExt", $context) ? $context["fileExt"] : (function () { throw new RuntimeError('Variable "fileExt" does not exist.', 69, $this->source); })()), ["png", "jpeg", "jpg"])) {
                // line 70
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["elearning"]) || array_key_exists("elearning", $context) ? $context["elearning"] : (function () { throw new RuntimeError('Variable "elearning" does not exist.', 70, $this->source); })()), "filePath", [], "any", false, false, false, 70))), "html", null, true);
                yield "\" alt=\"File\" style=\"max-width: 200px;\">
                        ";
            } elseif ((            // line 71
(isset($context["fileExt"]) || array_key_exists("fileExt", $context) ? $context["fileExt"] : (function () { throw new RuntimeError('Variable "fileExt" does not exist.', 71, $this->source); })()) == "pdf")) {
                // line 72
                yield "                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["elearning"]) || array_key_exists("elearning", $context) ? $context["elearning"] : (function () { throw new RuntimeError('Variable "elearning" does not exist.', 72, $this->source); })()), "filePath", [], "any", false, false, false, 72))), "html", null, true);
                yield "\" target=\"_blank\">📄 View PDF</a>
                        ";
            } else {
                // line 74
                yield "                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["elearning"]) || array_key_exists("elearning", $context) ? $context["elearning"] : (function () { throw new RuntimeError('Variable "elearning" does not exist.', 74, $this->source); })()), "filePath", [], "any", false, false, false, 74))), "html", null, true);
                yield "\" download>📥 Download File</a>
                        ";
            }
            // line 76
            yield "                    ";
        } else {
            // line 77
            yield "                        No file uploaded.
                    ";
        }
        // line 79
        yield "                </td>
            </tr>
        </tbody>
    </table>

    <div class=\"mt-3\">
        <a class=\"btn btn-primary\" href=\"";
        // line 85
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_elearning_index");
        yield "\">🔙 Back to list</a>
        <a class=\"btn btn-warning\" href=\"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_elearning_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["elearning"]) || array_key_exists("elearning", $context) ? $context["elearning"] : (function () { throw new RuntimeError('Variable "elearning" does not exist.', 86, $this->source); })()), "id", [], "any", false, false, false, 86)]), "html", null, true);
        yield "\">✏️ Edit</a>
    </div>

    <div class=\"mt-3\">
        ";
        // line 90
        yield Twig\Extension\CoreExtension::include($this->env, $context, "elearning/_delete_form.html.twig");
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
        return "elearning/show.html.twig";
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
        return array (  293 => 90,  286 => 86,  282 => 85,  274 => 79,  270 => 77,  267 => 76,  261 => 74,  255 => 72,  253 => 71,  248 => 70,  245 => 69,  242 => 68,  240 => 67,  232 => 62,  225 => 58,  218 => 54,  211 => 50,  205 => 46,  201 => 44,  193 => 42,  191 => 41,  183 => 36,  177 => 32,  173 => 30,  170 => 29,  156 => 28,  150 => 27,  132 => 26,  130 => 25,  122 => 20,  115 => 16,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseback.html.twig' %}

{% block title %}Elearning Details{% endblock %}

{% block body %}
    <h1 class=\"mb-4\">Elearning Details</h1>

    <table class=\"table table-bordered\">
        <tbody>
            <tr>
                <th>ID</th>
                <td>{{ elearning.id }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ elearning.title }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ elearning.description }}</td>
            </tr>
            <tr>
            <th>Categories</th>
            <td>
                    {% if elearning.categories is not empty %}
                        {% for category in elearning.categories %}
                            {{ category.name }}{% if not loop.last %}, {% endif %}
                        {% endfor %}
                    {% else %}
                        No Categories
                    {% endif %}
                </td>
            </tr>
            <tr>
                <th>Content Type</th>
                <td>{{ elearning.contentType }}</td>
            </tr>
            <tr>
                <th>Content URL</th>
                <td>
                    {% if elearning.contentUrl %}
                        <a href=\"{{ elearning.contentUrl }}\" target=\"_blank\">{{ elearning.contentUrl }}</a>
                    {% else %}
                        N/A
                    {% endif %}
                </td>
            </tr>
            <tr>
                <th>Duration</th>
                <td>{{ elearning.duration }} min</td>
            </tr>
            <tr>
                <th>Difficulty Level</th>
                <td>{{ elearning.difficultyLevel|capitalize }}</td>
            </tr>
            <tr>
                <th>Created At</th>
                <td>{{ elearning.createdAt ? elearning.createdAt|date('Y-m-d H:i:s') : 'N/A' }}</td>
            </tr>
            <tr>
                <th>Updated At</th>
                <td>{{ elearning.updatedAt ? elearning.updatedAt|date('Y-m-d H:i:s') : 'N/A' }}</td>
            </tr>
            <tr>
                <th>File</th>
                <td>
                    {% if elearning.filePath %}
                        {% set fileExt = elearning.filePath|split('.')|last %}
                        {% if fileExt in ['png', 'jpeg', 'jpg'] %}
                            <img src=\"{{ asset('uploads/' ~ elearning.filePath) }}\" alt=\"File\" style=\"max-width: 200px;\">
                        {% elseif fileExt == 'pdf' %}
                            <a href=\"{{ asset('uploads/' ~ elearning.filePath) }}\" target=\"_blank\">📄 View PDF</a>
                        {% else %}
                            <a href=\"{{ asset('uploads/' ~ elearning.filePath) }}\" download>📥 Download File</a>
                        {% endif %}
                    {% else %}
                        No file uploaded.
                    {% endif %}
                </td>
            </tr>
        </tbody>
    </table>

    <div class=\"mt-3\">
        <a class=\"btn btn-primary\" href=\"{{ path('app_elearning_index') }}\">🔙 Back to list</a>
        <a class=\"btn btn-warning\" href=\"{{ path('app_elearning_edit', {'id': elearning.id}) }}\">✏️ Edit</a>
    </div>

    <div class=\"mt-3\">
        {{ include('elearning/_delete_form.html.twig') }}
    </div>
{% endblock %}
", "elearning/show.html.twig", "C:\\xampp1\\htdocs\\integration_workshop_user1\\templates\\elearning\\show.html.twig");
    }
}
