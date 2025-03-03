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
class __TwigTemplate_7d6b689954c6637aa2f85d90787178cc extends Template
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

        yield "Elearning";
        
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
        yield "    <h1>Elearning</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
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
                <th>Content Type</th>
                <td>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["elearning"]) || array_key_exists("elearning", $context) ? $context["elearning"] : (function () { throw new RuntimeError('Variable "elearning" does not exist.', 24, $this->source); })()), "contentType", [], "any", false, false, false, 24), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Content URL</th>
                <td><a href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["elearning"]) || array_key_exists("elearning", $context) ? $context["elearning"] : (function () { throw new RuntimeError('Variable "elearning" does not exist.', 28, $this->source); })()), "contentUrl", [], "any", false, false, false, 28), "html", null, true);
        yield "\" target=\"_blank\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["elearning"]) || array_key_exists("elearning", $context) ? $context["elearning"] : (function () { throw new RuntimeError('Variable "elearning" does not exist.', 28, $this->source); })()), "contentUrl", [], "any", false, false, false, 28), "html", null, true);
        yield "</a></td>
            </tr>
            <tr>
                <th>Duration</th>
                <td>";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["elearning"]) || array_key_exists("elearning", $context) ? $context["elearning"] : (function () { throw new RuntimeError('Variable "elearning" does not exist.', 32, $this->source); })()), "duration", [], "any", false, false, false, 32), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Difficulty Level</th>
                <td>";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["elearning"]) || array_key_exists("elearning", $context) ? $context["elearning"] : (function () { throw new RuntimeError('Variable "elearning" does not exist.', 36, $this->source); })()), "difficultyLevel", [], "any", false, false, false, 36), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Created At</th>
                <td>";
        // line 40
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["elearning"]) || array_key_exists("elearning", $context) ? $context["elearning"] : (function () { throw new RuntimeError('Variable "elearning" does not exist.', 40, $this->source); })()), "createdAt", [], "any", false, false, false, 40)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["elearning"]) || array_key_exists("elearning", $context) ? $context["elearning"] : (function () { throw new RuntimeError('Variable "elearning" does not exist.', 40, $this->source); })()), "createdAt", [], "any", false, false, false, 40), "Y-m-d H:i:s"), "html", null, true)) : (""));
        yield "</td>
            </tr>
            <tr>
                <th>Updated At</th>
                <td>";
        // line 44
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["elearning"]) || array_key_exists("elearning", $context) ? $context["elearning"] : (function () { throw new RuntimeError('Variable "elearning" does not exist.', 44, $this->source); })()), "updatedAt", [], "any", false, false, false, 44)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["elearning"]) || array_key_exists("elearning", $context) ? $context["elearning"] : (function () { throw new RuntimeError('Variable "elearning" does not exist.', 44, $this->source); })()), "updatedAt", [], "any", false, false, false, 44), "Y-m-d H:i:s"), "html", null, true)) : (""));
        yield "</td>
            </tr>
            <tr>
                <th>File</th>
                <td>s
                    ";
        // line 49
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["elearning"]) || array_key_exists("elearning", $context) ? $context["elearning"] : (function () { throw new RuntimeError('Variable "elearning" does not exist.', 49, $this->source); })()), "filePath", [], "any", false, false, false, 49)) {
            // line 50
            yield "                        ";
            $context["fileExt"] = Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["elearning"]) || array_key_exists("elearning", $context) ? $context["elearning"] : (function () { throw new RuntimeError('Variable "elearning" does not exist.', 50, $this->source); })()), "filePath", [], "any", false, false, false, 50), "."));
            // line 51
            yield "                        ";
            if (CoreExtension::inFilter((isset($context["fileExt"]) || array_key_exists("fileExt", $context) ? $context["fileExt"] : (function () { throw new RuntimeError('Variable "fileExt" does not exist.', 51, $this->source); })()), ["png", "jpeg", "jpg"])) {
                // line 52
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["elearning"]) || array_key_exists("elearning", $context) ? $context["elearning"] : (function () { throw new RuntimeError('Variable "elearning" does not exist.', 52, $this->source); })()), "filePath", [], "any", false, false, false, 52))), "html", null, true);
                yield "\" alt=\"File\" style=\"max-width: 200px;\">
                        ";
            } elseif ((            // line 53
(isset($context["fileExt"]) || array_key_exists("fileExt", $context) ? $context["fileExt"] : (function () { throw new RuntimeError('Variable "fileExt" does not exist.', 53, $this->source); })()) == "pdf")) {
                // line 54
                yield "                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["elearning"]) || array_key_exists("elearning", $context) ? $context["elearning"] : (function () { throw new RuntimeError('Variable "elearning" does not exist.', 54, $this->source); })()), "filePath", [], "any", false, false, false, 54))), "html", null, true);
                yield "\" target=\"_blank\">Download PDF</a>
                        ";
            } else {
                // line 56
                yield "                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["elearning"]) || array_key_exists("elearning", $context) ? $context["elearning"] : (function () { throw new RuntimeError('Variable "elearning" does not exist.', 56, $this->source); })()), "filePath", [], "any", false, false, false, 56))), "html", null, true);
                yield "\" target=\"_blank\">Download File</a>
                        ";
            }
            // line 58
            yield "                    ";
        } else {
            // line 59
            yield "                        No file uploaded.
                    ";
        }
        // line 61
        yield "                </td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_elearning_front");
        yield "\">Back to list</a>

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
        return array (  215 => 66,  208 => 61,  204 => 59,  201 => 58,  195 => 56,  189 => 54,  187 => 53,  182 => 52,  179 => 51,  176 => 50,  174 => 49,  166 => 44,  159 => 40,  152 => 36,  145 => 32,  136 => 28,  129 => 24,  122 => 20,  115 => 16,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Elearning{% endblock %}

{% block body %}
    <h1>Elearning</h1>

    <table class=\"table\">
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
                <td><a href=\"{{ elearning.contentUrl }}\" target=\"_blank\">{{ elearning.contentUrl }}</a></td>
            </tr>
            <tr>
                <th>Duration</th>
                <td>{{ elearning.duration }}</td>
            </tr>
            <tr>
                <th>Difficulty Level</th>
                <td>{{ elearning.difficultyLevel }}</td>
            </tr>
            <tr>
                <th>Created At</th>
                <td>{{ elearning.createdAt ? elearning.createdAt|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Updated At</th>
                <td>{{ elearning.updatedAt ? elearning.updatedAt|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>File</th>
                <td>s
                    {% if elearning.filePath %}
                        {% set fileExt = elearning.filePath|split('.')|last %}
                        {% if fileExt in ['png', 'jpeg', 'jpg'] %}
                            <img src=\"{{ asset('uploads/' ~ elearning.filePath) }}\" alt=\"File\" style=\"max-width: 200px;\">
                        {% elseif fileExt == 'pdf' %}
                            <a href=\"{{ asset('uploads/' ~ elearning.filePath) }}\" target=\"_blank\">Download PDF</a>
                        {% else %}
                            <a href=\"{{ asset('uploads/' ~ elearning.filePath) }}\" target=\"_blank\">Download File</a>
                        {% endif %}
                    {% else %}
                        No file uploaded.
                    {% endif %}
                </td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_elearning_front') }}\">Back to list</a>

{% endblock %}
", "elearning/details.html.twig", "C:\\xampp1\\htdocs\\integration_workshop_user1\\templates\\elearning\\details.html.twig");
    }
}
