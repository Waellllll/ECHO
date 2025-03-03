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

/* elearning/showfront.html.twig */
class __TwigTemplate_87eec0d0e8c24e02aefb535fbec0ba8c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elearning/showfront.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "elearning/showfront.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "elearning/showfront.html.twig", 1);
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

        yield "E-learning Articles";
        
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
        <h1 class=\"text-center\">E-learning Articles</h1>
        
        <div class=\"row\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["elearnings"]) || array_key_exists("elearnings", $context) ? $context["elearnings"] : (function () { throw new RuntimeError('Variable "elearnings" does not exist.', 10, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["elearning"]) {
            // line 11
            yield "                <div class=\"col-md-4 mb-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"d-flex justify-content-between w-100\">
                                ";
            // line 15
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["elearning"], "getUserE", [], "method", false, false, false, 15) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["elearning"], "getUserE", [], "method", false, false, false, 15), "id", [], "any", false, false, false, 15) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15), "id", [], "any", false, false, false, 15)))) {
                // line 16
                yield "                                    <div>
                                        <a class=\"delete-icon\" href=\"#\" data-url=\"";
                // line 17
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_elearning_deletef", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["elearning"], "id", [], "any", false, false, false, 17)]), "html", null, true);
                yield "\" data-csrf=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["elearning"], "id", [], "any", false, false, false, 17))), "html", null, true);
                yield "\" onclick=\"confirmDelete(this); return false;\" title=\"Delete\">
                                            &times;
                                        </a>
                                    </div>
                                ";
            }
            // line 22
            yield "                            </div>
                            <h5 class=\"card-title\">";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["elearning"], "title", [], "any", false, false, false, 23), "html", null, true);
            yield "</h5>
                            <p class=\"card-text\">";
            // line 24
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["elearning"], "description", [], "any", false, false, false, 24)) > 100)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["elearning"], "description", [], "any", false, false, false, 24), 0, 100) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["elearning"], "description", [], "any", false, false, false, 24), "html", null, true)));
            yield "</p>
                            <p><strong>Content Type:</strong> ";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["elearning"], "contentType", [], "any", false, false, false, 25), "html", null, true);
            yield "</p>
                            <p><strong>Difficulty:</strong> ";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["elearning"], "difficultyLevel", [], "any", false, false, false, 26)), "html", null, true);
            yield "</p>
                            <p><strong>Duration:</strong> ";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["elearning"], "duration", [], "any", false, false, false, 27), "html", null, true);
            yield " mins</p>
                            
                            ";
            // line 29
            if (CoreExtension::getAttribute($this->env, $this->source, $context["elearning"], "filePath", [], "any", false, false, false, 29)) {
                // line 30
                yield "                                <p>
                                    <a href=\"";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["elearning"], "filePath", [], "any", false, false, false, 31))), "html", null, true);
                yield "\" target=\"_blank\" class=\"btn btn-primary\">Download File</a>
                                </p>
                            ";
            }
            // line 34
            yield "
                            <a href=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_elearning_showfront", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["elearning"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            yield "\" class=\"btn btn-info\">View Details</a>
                        </div>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        // line 39
        if (!$context['_iterated']) {
            // line 40
            yield "                <p class=\"text-center\">No e-learning articles available.</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['elearning'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "        </div>
    </div>

    <script>
        function confirmDelete(element) {
            if (confirm('Are you sure you want to delete this e-learning article?')) {
                var url = element.getAttribute('data-url');
                var csrfToken = element.getAttribute('data-csrf');

                var form = document.createElement('form');
                form.method = 'post';
                form.action = url;

                // Add the CSRF token for security
                var csrfInput = document.createElement('input');
                csrfInput.type = 'hidden';
                csrfInput.name = '_token';
                csrfInput.value = csrfToken;
                form.appendChild(csrfInput);

                // Add the method override for DELETE
                var methodInput = document.createElement('input');
                methodInput.type = 'hidden';
                methodInput.name = '_method';
                methodInput.value = 'DELETE';
                form.appendChild(methodInput);

                // Append the form to the body and submit it
                document.body.appendChild(form);
                form.submit();
            }
        }
    </script>
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
        return "elearning/showfront.html.twig";
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
        return array (  188 => 42,  181 => 40,  179 => 39,  170 => 35,  167 => 34,  161 => 31,  158 => 30,  156 => 29,  151 => 27,  147 => 26,  143 => 25,  139 => 24,  135 => 23,  132 => 22,  122 => 17,  119 => 16,  117 => 15,  111 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}E-learning Articles{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <h1 class=\"text-center\">E-learning Articles</h1>
        
        <div class=\"row\">
            {% for elearning in elearnings %}
                <div class=\"col-md-4 mb-4\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"d-flex justify-content-between w-100\">
                                {% if elearning.getUserE() and elearning.getUserE().id == app.user.id %}
                                    <div>
                                        <a class=\"delete-icon\" href=\"#\" data-url=\"{{ path('app_elearning_deletef', {'id': elearning.id}) }}\" data-csrf=\"{{ csrf_token('delete' ~ elearning.id) }}\" onclick=\"confirmDelete(this); return false;\" title=\"Delete\">
                                            &times;
                                        </a>
                                    </div>
                                {% endif %}
                            </div>
                            <h5 class=\"card-title\">{{ elearning.title }}</h5>
                            <p class=\"card-text\">{{ elearning.description|length > 100 ? elearning.description|slice(0, 100) ~ '...' : elearning.description }}</p>
                            <p><strong>Content Type:</strong> {{ elearning.contentType }}</p>
                            <p><strong>Difficulty:</strong> {{ elearning.difficultyLevel|capitalize }}</p>
                            <p><strong>Duration:</strong> {{ elearning.duration }} mins</p>
                            
                            {% if elearning.filePath %}
                                <p>
                                    <a href=\"{{ asset('uploads/' ~ elearning.filePath) }}\" target=\"_blank\" class=\"btn btn-primary\">Download File</a>
                                </p>
                            {% endif %}

                            <a href=\"{{ path('app_elearning_showfront', {'id': elearning.id}) }}\" class=\"btn btn-info\">View Details</a>
                        </div>
                    </div>
                </div>
            {% else %}
                <p class=\"text-center\">No e-learning articles available.</p>
            {% endfor %}
        </div>
    </div>

    <script>
        function confirmDelete(element) {
            if (confirm('Are you sure you want to delete this e-learning article?')) {
                var url = element.getAttribute('data-url');
                var csrfToken = element.getAttribute('data-csrf');

                var form = document.createElement('form');
                form.method = 'post';
                form.action = url;

                // Add the CSRF token for security
                var csrfInput = document.createElement('input');
                csrfInput.type = 'hidden';
                csrfInput.name = '_token';
                csrfInput.value = csrfToken;
                form.appendChild(csrfInput);

                // Add the method override for DELETE
                var methodInput = document.createElement('input');
                methodInput.type = 'hidden';
                methodInput.name = '_method';
                methodInput.value = 'DELETE';
                form.appendChild(methodInput);

                // Append the form to the body and submit it
                document.body.appendChild(form);
                form.submit();
            }
        }
    </script>
{% endblock %}", "elearning/showfront.html.twig", "C:\\xampp1\\htdocs\\integration_workshop_user1\\templates\\elearning\\showfront.html.twig");
    }
}
