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
class __TwigTemplate_b80bed35af5a2ce80f3ad8e33fb04b54 extends Template
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

        <!-- Search and Filter Section -->
        <div class=\"mb-4\">
            <input type=\"text\" id=\"search\" class=\"form-control mb-2\" placeholder=\"Search articles...\">
            <select id=\"category\" class=\"form-control\">
                <option value=\"\">All Categories</option>
                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 15
            yield "                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 15), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 15), "html", null, true);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        yield "            </select>
        </div>

        <div class=\"row\" id=\"elearning-list\">
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["elearnings"]) || array_key_exists("elearnings", $context) ? $context["elearnings"] : (function () { throw new RuntimeError('Variable "elearnings" does not exist.', 21, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["elearning"]) {
            // line 22
            yield "                <div class=\"col-md-4 mb-4 elearning-item\" data-categories=\"";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["elearning"], "categories", [], "any", false, false, false, 22));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 22), "html", null, true);
                yield " ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield "\" data-title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["elearning"], "title", [], "any", false, false, false, 22)), "html", null, true);
            yield "\">
                    <div class=\"card shadow-sm\">
                        ";
            // line 24
            if (CoreExtension::getAttribute($this->env, $this->source, $context["elearning"], "filePath", [], "any", false, false, false, 24)) {
                // line 25
                yield "                            ";
                $context["fileExt"] = Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["elearning"], "filePath", [], "any", false, false, false, 25), "."));
                // line 26
                yield "                            ";
                if (CoreExtension::inFilter((isset($context["fileExt"]) || array_key_exists("fileExt", $context) ? $context["fileExt"] : (function () { throw new RuntimeError('Variable "fileExt" does not exist.', 26, $this->source); })()), ["png", "jpeg", "jpg"])) {
                    // line 27
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["elearning"], "filePath", [], "any", false, false, false, 27))), "html", null, true);
                    yield "\" class=\"card-img-top\" alt=\"E-learning Image\" style=\"max-height: 200px; object-fit: cover;\">
                            ";
                }
                // line 29
                yield "                        ";
            } else {
                // line 30
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-thumbnail.jpg"), "html", null, true);
                yield "\" class=\"card-img-top\" alt=\"Default Image\" style=\"max-height: 200px; object-fit: cover;\">
                        ";
            }
            // line 32
            yield "
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["elearning"], "title", [], "any", false, false, false, 34), "html", null, true);
            yield "</h5>
                            <p class=\"card-text\">";
            // line 35
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["elearning"], "description", [], "any", false, false, false, 35)) > 100)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["elearning"], "description", [], "any", false, false, false, 35), 0, 100)) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["elearning"], "description", [], "any", false, false, false, 35), "html", null, true)));
            yield "</p>
                            <p><strong>Content Type:</strong> ";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["elearning"], "contentType", [], "any", false, false, false, 36), "html", null, true);
            yield "</p>
                            <p><strong>Difficulty:</strong> ";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["elearning"], "difficultyLevel", [], "any", false, false, false, 37)), "html", null, true);
            yield "</p>
                            <p><strong>Category:</strong> 
                                ";
            // line 39
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["elearning"], "categories", [], "any", false, false, false, 39))) {
                // line 40
                yield "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["elearning"], "categories", [], "any", false, false, false, 40));
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
                    // line 41
                    yield "                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 41), "html", null, true);
                    if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 41)) {
                        yield ", ";
                    }
                    // line 42
                    yield "                                    ";
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
                // line 43
                yield "                                ";
            } else {
                // line 44
                yield "                                    No Category
                                ";
            }
            // line 46
            yield "                            </p>
                            <p><strong>Duration:</strong> ";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["elearning"], "duration", [], "any", false, false, false, 47), "html", null, true);
            yield " mins</p>

                            ";
            // line 49
            if (CoreExtension::getAttribute($this->env, $this->source, $context["elearning"], "filePath", [], "any", false, false, false, 49)) {
                // line 50
                yield "                                <p>
                                    ";
                // line 51
                if (((isset($context["fileExt"]) || array_key_exists("fileExt", $context) ? $context["fileExt"] : (function () { throw new RuntimeError('Variable "fileExt" does not exist.', 51, $this->source); })()) == "pdf")) {
                    // line 52
                    yield "                                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["elearning"], "filePath", [], "any", false, false, false, 52))), "html", null, true);
                    yield "\" target=\"_blank\" class=\"btn btn-danger\">📄 View PDF</a>
                                    ";
                } else {
                    // line 54
                    yield "                                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["elearning"], "filePath", [], "any", false, false, false, 54))), "html", null, true);
                    yield "\" download class=\"btn btn-primary\">📥 Download File</a>
                                    ";
                }
                // line 56
                yield "                                </p>
                            ";
            }
            // line 58
            yield "
                            <a href=\"";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_elearning_showfront", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["elearning"], "id", [], "any", false, false, false, 59)]), "html", null, true);
            yield "\" class=\"btn btn-info\">📖 View Details</a>
                        </div>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        // line 63
        if (!$context['_iterated']) {
            // line 64
            yield "                <p class=\"text-center\">No e-learning articles available.</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['elearning'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        yield "        </div>
    </div>

    <script>
        document.getElementById('search').addEventListener('input', filterArticles);
        document.getElementById('category').addEventListener('change', filterArticles);

        function filterArticles() {
            let searchQuery = document.getElementById('search').value.toLowerCase();
            let selectedCategory = document.getElementById('category').value;
            let articles = document.querySelectorAll('.elearning-item');

            articles.forEach(article => {
                let title = article.getAttribute('data-title');
                let categories = article.getAttribute('data-categories').split(' ');
                
                let matchesSearch = title.includes(searchQuery);
                let matchesCategory = selectedCategory === '' || categories.includes(selectedCategory);
                
                if (matchesSearch && matchesCategory) {
                    article.style.display = 'block';
                } else {
                    article.style.display = 'none';
                }
            });
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
        return array (  295 => 66,  288 => 64,  286 => 63,  277 => 59,  274 => 58,  270 => 56,  264 => 54,  258 => 52,  256 => 51,  253 => 50,  251 => 49,  246 => 47,  243 => 46,  239 => 44,  236 => 43,  222 => 42,  216 => 41,  198 => 40,  196 => 39,  191 => 37,  187 => 36,  183 => 35,  179 => 34,  175 => 32,  169 => 30,  166 => 29,  160 => 27,  157 => 26,  154 => 25,  152 => 24,  136 => 22,  131 => 21,  125 => 17,  114 => 15,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}E-learning Articles{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <h1 class=\"text-center\">E-learning Articles</h1>

        <!-- Search and Filter Section -->
        <div class=\"mb-4\">
            <input type=\"text\" id=\"search\" class=\"form-control mb-2\" placeholder=\"Search articles...\">
            <select id=\"category\" class=\"form-control\">
                <option value=\"\">All Categories</option>
                {% for category in categories %}
                    <option value=\"{{ category.id }}\">{{ category.name }}</option>
                {% endfor %}
            </select>
        </div>

        <div class=\"row\" id=\"elearning-list\">
            {% for elearning in elearnings %}
                <div class=\"col-md-4 mb-4 elearning-item\" data-categories=\"{% for category in elearning.categories %}{{ category.id }} {% endfor %}\" data-title=\"{{ elearning.title|lower }}\">
                    <div class=\"card shadow-sm\">
                        {% if elearning.filePath %}
                            {% set fileExt = elearning.filePath|split('.')|last %}
                            {% if fileExt in ['png', 'jpeg', 'jpg'] %}
                                <img src=\"{{ asset('uploads/' ~ elearning.filePath) }}\" class=\"card-img-top\" alt=\"E-learning Image\" style=\"max-height: 200px; object-fit: cover;\">
                            {% endif %}
                        {% else %}
                            <img src=\"{{ asset('images/default-thumbnail.jpg') }}\" class=\"card-img-top\" alt=\"Default Image\" style=\"max-height: 200px; object-fit: cover;\">
                        {% endif %}

                        <div class=\"card-body\">
                            <h5 class=\"card-title\">{{ elearning.title }}</h5>
                            <p class=\"card-text\">{{ elearning.description|length > 100 ? elearning.description|slice(0, 100)|trim ~ '...' : elearning.description }}</p>
                            <p><strong>Content Type:</strong> {{ elearning.contentType }}</p>
                            <p><strong>Difficulty:</strong> {{ elearning.difficultyLevel|capitalize }}</p>
                            <p><strong>Category:</strong> 
                                {% if elearning.categories is not empty %}
                                    {% for category in elearning.categories %}
                                        {{ category.name }}{% if not loop.last %}, {% endif %}
                                    {% endfor %}
                                {% else %}
                                    No Category
                                {% endif %}
                            </p>
                            <p><strong>Duration:</strong> {{ elearning.duration }} mins</p>

                            {% if elearning.filePath %}
                                <p>
                                    {% if fileExt == 'pdf' %}
                                        <a href=\"{{ asset('uploads/' ~ elearning.filePath) }}\" target=\"_blank\" class=\"btn btn-danger\">📄 View PDF</a>
                                    {% else %}
                                        <a href=\"{{ asset('uploads/' ~ elearning.filePath) }}\" download class=\"btn btn-primary\">📥 Download File</a>
                                    {% endif %}
                                </p>
                            {% endif %}

                            <a href=\"{{ path('app_elearning_showfront', {'id': elearning.id}) }}\" class=\"btn btn-info\">📖 View Details</a>
                        </div>
                    </div>
                </div>
            {% else %}
                <p class=\"text-center\">No e-learning articles available.</p>
            {% endfor %}
        </div>
    </div>

    <script>
        document.getElementById('search').addEventListener('input', filterArticles);
        document.getElementById('category').addEventListener('change', filterArticles);

        function filterArticles() {
            let searchQuery = document.getElementById('search').value.toLowerCase();
            let selectedCategory = document.getElementById('category').value;
            let articles = document.querySelectorAll('.elearning-item');

            articles.forEach(article => {
                let title = article.getAttribute('data-title');
                let categories = article.getAttribute('data-categories').split(' ');
                
                let matchesSearch = title.includes(searchQuery);
                let matchesCategory = selectedCategory === '' || categories.includes(selectedCategory);
                
                if (matchesSearch && matchesCategory) {
                    article.style.display = 'block';
                } else {
                    article.style.display = 'none';
                }
            });
        }
    </script>
{% endblock %}
", "elearning/showfront.html.twig", "C:\\xampp1\\htdocs\\integration_workshop_user1\\templates\\elearning\\showfront.html.twig");
    }
}
