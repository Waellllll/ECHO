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

/* elearning/details.html.twig */
class __TwigTemplate_c141b3fc7bb24d2c77f85532dc7a4102 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elearning/details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elearning/details.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "elearning/details.html.twig", 1);
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
        yield "    <div class=\"container mt-4\">
        <h1 class=\"text-center\">Elearning Details</h1>

        <table class=\"table table-bordered\">
            <tbody>
                <tr>
                    <th>Id</th>
                    <td>";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["elearning"]) || array_key_exists("elearning", $context) ? $context["elearning"] : (function () { throw new RuntimeError('Variable "elearning" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Title</th>
                    <td>";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["elearning"]) || array_key_exists("elearning", $context) ? $context["elearning"] : (function () { throw new RuntimeError('Variable "elearning" does not exist.', 17, $this->source); })()), "title", [], "any", false, false, false, 17), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["elearning"]) || array_key_exists("elearning", $context) ? $context["elearning"] : (function () { throw new RuntimeError('Variable "elearning" does not exist.', 21, $this->source); })()), "description", [], "any", false, false, false, 21), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Content Type</th>
                    <td>";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["elearning"]) || array_key_exists("elearning", $context) ? $context["elearning"] : (function () { throw new RuntimeError('Variable "elearning" does not exist.', 25, $this->source); })()), "contentType", [], "any", false, false, false, 25), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Content URL</th>
                    <td>
                        <a href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["elearning"]) || array_key_exists("elearning", $context) ? $context["elearning"] : (function () { throw new RuntimeError('Variable "elearning" does not exist.', 30, $this->source); })()), "contentUrl", [], "any", false, false, false, 30), "html", null, true);
        yield "\" target=\"_blank\" class=\"btn btn-link\">
                            ";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["elearning"]) || array_key_exists("elearning", $context) ? $context["elearning"] : (function () { throw new RuntimeError('Variable "elearning" does not exist.', 31, $this->source); })()), "contentUrl", [], "any", false, false, false, 31), "html", null, true);
        yield "
                        </a>
                    </td>
                </tr>
                <tr>
                    <th>Duration</th>
                    <td>";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["elearning"]) || array_key_exists("elearning", $context) ? $context["elearning"] : (function () { throw new RuntimeError('Variable "elearning" does not exist.', 37, $this->source); })()), "duration", [], "any", false, false, false, 37), "html", null, true);
        yield " minutes</td>
                </tr>
                <tr>
                    <th>Difficulty Level</th>
                    <td>";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["elearning"]) || array_key_exists("elearning", $context) ? $context["elearning"] : (function () { throw new RuntimeError('Variable "elearning" does not exist.', 41, $this->source); })()), "difficultyLevel", [], "any", false, false, false, 41)), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Categories</th>
                <td>
                    ";
        // line 46
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["elearning"]) || array_key_exists("elearning", $context) ? $context["elearning"] : (function () { throw new RuntimeError('Variable "elearning" does not exist.', 46, $this->source); })()), "categories", [], "any", false, false, false, 46))) {
            // line 47
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["elearning"]) || array_key_exists("elearning", $context) ? $context["elearning"] : (function () { throw new RuntimeError('Variable "elearning" does not exist.', 47, $this->source); })()), "categories", [], "any", false, false, false, 47));
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
                // line 48
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 48), "html", null, true);
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 48)) {
                    yield ", ";
                }
                // line 49
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
            // line 50
            yield "                    ";
        } else {
            // line 51
            yield "                        No Category
                    ";
        }
        // line 53
        yield "                </td>
                </tr>
                <tr>
                    <th>Created At</th>
                    <td>";
        // line 57
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["elearning"]) || array_key_exists("elearning", $context) ? $context["elearning"] : (function () { throw new RuntimeError('Variable "elearning" does not exist.', 57, $this->source); })()), "createdAt", [], "any", false, false, false, 57)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["elearning"]) || array_key_exists("elearning", $context) ? $context["elearning"] : (function () { throw new RuntimeError('Variable "elearning" does not exist.', 57, $this->source); })()), "createdAt", [], "any", false, false, false, 57), "Y-m-d H:i:s"), "html", null, true)) : ("N/A"));
        yield "</td>
                </tr>
                <tr>
                    <th>Updated At</th>
                    <td>";
        // line 61
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["elearning"]) || array_key_exists("elearning", $context) ? $context["elearning"] : (function () { throw new RuntimeError('Variable "elearning" does not exist.', 61, $this->source); })()), "updatedAt", [], "any", false, false, false, 61)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["elearning"]) || array_key_exists("elearning", $context) ? $context["elearning"] : (function () { throw new RuntimeError('Variable "elearning" does not exist.', 61, $this->source); })()), "updatedAt", [], "any", false, false, false, 61), "Y-m-d H:i:s"), "html", null, true)) : ("N/A"));
        yield "</td>
                </tr>
                <tr>
                    <th>File</th>
                    <td>
                        ";
        // line 66
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["elearning"]) || array_key_exists("elearning", $context) ? $context["elearning"] : (function () { throw new RuntimeError('Variable "elearning" does not exist.', 66, $this->source); })()), "filePath", [], "any", false, false, false, 66)) {
            // line 67
            yield "                            ";
            $context["fileExt"] = Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["elearning"]) || array_key_exists("elearning", $context) ? $context["elearning"] : (function () { throw new RuntimeError('Variable "elearning" does not exist.', 67, $this->source); })()), "filePath", [], "any", false, false, false, 67), "."));
            // line 68
            yield "                            ";
            if (CoreExtension::inFilter((isset($context["fileExt"]) || array_key_exists("fileExt", $context) ? $context["fileExt"] : (function () { throw new RuntimeError('Variable "fileExt" does not exist.', 68, $this->source); })()), ["png", "jpeg", "jpg"])) {
                // line 69
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["elearning"]) || array_key_exists("elearning", $context) ? $context["elearning"] : (function () { throw new RuntimeError('Variable "elearning" does not exist.', 69, $this->source); })()), "filePath", [], "any", false, false, false, 69))), "html", null, true);
                yield "\" alt=\"File\" class=\"img-fluid rounded\" style=\"max-width: 200px;\">
                            ";
            } elseif ((            // line 70
(isset($context["fileExt"]) || array_key_exists("fileExt", $context) ? $context["fileExt"] : (function () { throw new RuntimeError('Variable "fileExt" does not exist.', 70, $this->source); })()) == "pdf")) {
                // line 71
                yield "                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["elearning"]) || array_key_exists("elearning", $context) ? $context["elearning"] : (function () { throw new RuntimeError('Variable "elearning" does not exist.', 71, $this->source); })()), "filePath", [], "any", false, false, false, 71))), "html", null, true);
                yield "\" target=\"_blank\" class=\"btn btn-danger\">
                                    📄 View PDF
                                </a>
                            ";
            } else {
                // line 75
                yield "                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["elearning"]) || array_key_exists("elearning", $context) ? $context["elearning"] : (function () { throw new RuntimeError('Variable "elearning" does not exist.', 75, $this->source); })()), "filePath", [], "any", false, false, false, 75))), "html", null, true);
                yield "\" download class=\"btn btn-primary\">
                                    📥 Download File
                                </a>
                            ";
            }
            // line 79
            yield "                        ";
        } else {
            // line 80
            yield "                            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-thumbnail.jpg"), "html", null, true);
            yield "\" alt=\"No file\" class=\"img-fluid rounded\" style=\"max-width: 200px;\">
                        ";
        }
        // line 82
        yield "                    </td>
                </tr>
            </tbody>
        </table>

        <div class=\"text-center mt-4\">
            <a href=\"";
        // line 88
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_elearning_front");
        yield "\" class=\"btn btn-secondary\">🔙 Back to list</a>
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
        return "elearning/details.html.twig";
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
        return array (  282 => 88,  274 => 82,  268 => 80,  265 => 79,  257 => 75,  249 => 71,  247 => 70,  242 => 69,  239 => 68,  236 => 67,  234 => 66,  226 => 61,  219 => 57,  213 => 53,  209 => 51,  206 => 50,  192 => 49,  186 => 48,  168 => 47,  166 => 46,  158 => 41,  151 => 37,  142 => 31,  138 => 30,  130 => 25,  123 => 21,  116 => 17,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Elearning Details{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <h1 class=\"text-center\">Elearning Details</h1>

        <table class=\"table table-bordered\">
            <tbody>
                <tr>
                    <th>Id</th>
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
                    <th>Content Type</th>
                    <td>{{ elearning.contentType }}</td>
                </tr>
                <tr>
                    <th>Content URL</th>
                    <td>
                        <a href=\"{{ elearning.contentUrl }}\" target=\"_blank\" class=\"btn btn-link\">
                            {{ elearning.contentUrl }}
                        </a>
                    </td>
                </tr>
                <tr>
                    <th>Duration</th>
                    <td>{{ elearning.duration }} minutes</td>
                </tr>
                <tr>
                    <th>Difficulty Level</th>
                    <td>{{ elearning.difficultyLevel|capitalize }}</td>
                </tr>
                <tr>
                    <th>Categories</th>
                <td>
                    {% if elearning.categories is not empty %}
                        {% for category in elearning.categories %}
                            {{ category.name }}{% if not loop.last %}, {% endif %}
                        {% endfor %}
                    {% else %}
                        No Category
                    {% endif %}
                </td>
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
                                <img src=\"{{ asset('uploads/' ~ elearning.filePath) }}\" alt=\"File\" class=\"img-fluid rounded\" style=\"max-width: 200px;\">
                            {% elseif fileExt == 'pdf' %}
                                <a href=\"{{ asset('uploads/' ~ elearning.filePath) }}\" target=\"_blank\" class=\"btn btn-danger\">
                                    📄 View PDF
                                </a>
                            {% else %}
                                <a href=\"{{ asset('uploads/' ~ elearning.filePath) }}\" download class=\"btn btn-primary\">
                                    📥 Download File
                                </a>
                            {% endif %}
                        {% else %}
                            <img src=\"{{ asset('images/default-thumbnail.jpg') }}\" alt=\"No file\" class=\"img-fluid rounded\" style=\"max-width: 200px;\">
                        {% endif %}
                    </td>
                </tr>
            </tbody>
        </table>

        <div class=\"text-center mt-4\">
            <a href=\"{{ path('app_elearning_front') }}\" class=\"btn btn-secondary\">🔙 Back to list</a>
        </div>
    </div>
{% endblock %}
", "elearning/details.html.twig", "C:\\xampp1\\htdocs\\integration_workshop_user1\\templates\\elearning\\details.html.twig");
    }
}
