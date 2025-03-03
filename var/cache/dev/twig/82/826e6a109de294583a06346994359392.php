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

/* back/article/index.html.twig */
class __TwigTemplate_5c9991fdf9bcd01c3bd416301c66f830 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/article/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/article/index.html.twig"));

        $this->parent = $this->loadTemplate("baseback.html.twig", "back/article/index.html.twig", 1);
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

        yield "admin article";
        
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
        yield "    <div class=\"container\">
        <div class=\"row mt-3\">
            <div class=\"col-md-6\">
                <input type=\"text\" id=\"searchInput\" class=\"form-control\" placeholder=\"Search by description\">
            </div>
        </div>
        <div class=\"row mt-3\" id=\"articleContainer\">
            ";
        // line 13
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 13, $this->source); })()))) {
            yield " 
                ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 14, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 15
                yield "                    <div class=\"col-md-4 mb-4\">
                        <div class=\"card\">
                            ";
                // line 17
                if (CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 17)) {
                    // line 18
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/front/" . CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 18))), "html", null, true);
                    yield "\" class=\"card-img-top\" alt=\"Article Image\">
                            ";
                } else {
                    // line 20
                    yield "                                <div class=\"card-img-top\">No image</div>
                            ";
                }
                // line 22
                yield "                            <div class=\"card-body\">
                                <h5 class=\"card-title\">";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "description", [], "any", false, false, false, 23), "html", null, true);
                yield "</h5>
                                <div class=\"card-buttons\">
                                    ";
                // line 26
                yield "                                    <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articleback_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 26)]), "html", null, true);
                yield "\" method=\"post\" onsubmit=\"return confirm('Are you sure you want to delete this article?');\">
                                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 28))), "html", null, true);
                yield "\">
                                        <button type=\"submit\" class=\"btn btn-danger\">Delete Article</button>
                                    </form>
                                </div>
                                <h6 class=\"mt-3\">Comments</h6>
                               <div class=\"card-comments\">
                                    ";
                // line 34
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["articleComments"]) || array_key_exists("articleComments", $context) ? $context["articleComments"] : (function () { throw new RuntimeError('Variable "articleComments" does not exist.', 34, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 34), [], "array", false, false, false, 34));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                    // line 35
                    yield "                                        <div class=\"comment\">
                                            <p>";
                    // line 36
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "comment", [], "any", false, false, false, 36), "html", null, true);
                    yield "</p>
                                            <form action=\"";
                    // line 37
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commentback_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 37)]), "html", null, true);
                    yield "\" method=\"post\" onsubmit=\"return confirm('Are you sure you want to delete this comment?');\">
                                                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                                <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 39
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 39))), "html", null, true);
                    yield "\">
                                                <button type=\"submit\" class=\"btn btn-sm btn-danger\">Delete Comment</button>
                                            </form>
                                        </div>
                                    ";
                    $context['_iterated'] = true;
                }
                // line 43
                if (!$context['_iterated']) {
                    // line 44
                    yield "                                        <p>No comments</p>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['comment'], $context['_parent'], $context['_iterated']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                yield "                                </div>
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['article'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            yield "            ";
        } else {
            // line 52
            yield "                <div class=\"col-md-12\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <p>No records found</p>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 60
        yield "        </div>
        <div class=\"row mt-3\">
            <div class=\"col-md-6\">
                <a href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articleback_new");
        yield "\" class=\"btn btn-primary\">Create New Article</a>
            </div>
            <div class=\"col-md-6 text-right\">
        <a href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_index");
        yield "\" class=\"btn btn-secondary\">View Front Articles</a>
    </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const searchInput = document.getElementById('searchInput');
            const articleCards = document.querySelectorAll('#articleContainer .card');

            searchInput.addEventListener('input', function () {
                const searchText = searchInput.value.trim().toLowerCase();

                articleCards.forEach(card => {
                    const cardTitle = card.querySelector('.card-title');        
                    const cardText = cardTitle ? cardTitle.textContent.trim().toLowerCase() : '';  

                    const visible = cardText.includes(searchText);

                    card.style.display = visible ? '' : 'none';
                });
            });
        });
    </script>

    <style>
        .card-buttons .btn {
            padding: 3px 6px;
            font-size: 12px;
        }

        .card-img-top {
            max-height: 200px;
            object-fit: cover;
        }

        .card-comments {
            margin-top: 10px;
        }

        .comment {
            margin-bottom: 5px;
        }
    </style>
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
        return "back/article/index.html.twig";
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
        return array (  225 => 66,  219 => 63,  214 => 60,  204 => 52,  201 => 51,  191 => 46,  184 => 44,  182 => 43,  173 => 39,  168 => 37,  164 => 36,  161 => 35,  156 => 34,  147 => 28,  141 => 26,  136 => 23,  133 => 22,  129 => 20,  123 => 18,  121 => 17,  117 => 15,  113 => 14,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseback.html.twig' %}

{% block title %}admin article{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row mt-3\">
            <div class=\"col-md-6\">
                <input type=\"text\" id=\"searchInput\" class=\"form-control\" placeholder=\"Search by description\">
            </div>
        </div>
        <div class=\"row mt-3\" id=\"articleContainer\">
            {% if articles is not empty %} 
                {% for article in articles %}
                    <div class=\"col-md-4 mb-4\">
                        <div class=\"card\">
                            {% if article.image %}
                                <img src=\"{{ asset('images/front/' ~ article.image) }}\" class=\"card-img-top\" alt=\"Article Image\">
                            {% else %}
                                <div class=\"card-img-top\">No image</div>
                            {% endif %}
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">{{ article.description }}</h5>
                                <div class=\"card-buttons\">
                                    {# <a href=\"{{ path('app_articleback_edit', {'id': article.id}) }}\" class=\"btn btn-primary\">Edit Article</a> #}
                                    <form action=\"{{ path('app_articleback_delete', {'id': article.id}) }}\" method=\"post\" onsubmit=\"return confirm('Are you sure you want to delete this article?');\">
                                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ article.id) }}\">
                                        <button type=\"submit\" class=\"btn btn-danger\">Delete Article</button>
                                    </form>
                                </div>
                                <h6 class=\"mt-3\">Comments</h6>
                               <div class=\"card-comments\">
                                    {% for comment in articleComments[article.id] %}
                                        <div class=\"comment\">
                                            <p>{{ comment.comment }}</p>
                                            <form action=\"{{ path('app_commentback_delete', {'id': comment.id}) }}\" method=\"post\" onsubmit=\"return confirm('Are you sure you want to delete this comment?');\">
                                                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ comment.id) }}\">
                                                <button type=\"submit\" class=\"btn btn-sm btn-danger\">Delete Comment</button>
                                            </form>
                                        </div>
                                    {% else %}
                                        <p>No comments</p>
                                    {% endfor %}
                                </div>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            {% else %}
                <div class=\"col-md-12\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <p>No records found</p>
                        </div>
                    </div>
                </div>
            {% endif %}
        </div>
        <div class=\"row mt-3\">
            <div class=\"col-md-6\">
                <a href=\"{{ path('app_articleback_new') }}\" class=\"btn btn-primary\">Create New Article</a>
            </div>
            <div class=\"col-md-6 text-right\">
        <a href=\"{{ path('app_article_index') }}\" class=\"btn btn-secondary\">View Front Articles</a>
    </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const searchInput = document.getElementById('searchInput');
            const articleCards = document.querySelectorAll('#articleContainer .card');

            searchInput.addEventListener('input', function () {
                const searchText = searchInput.value.trim().toLowerCase();

                articleCards.forEach(card => {
                    const cardTitle = card.querySelector('.card-title');        
                    const cardText = cardTitle ? cardTitle.textContent.trim().toLowerCase() : '';  

                    const visible = cardText.includes(searchText);

                    card.style.display = visible ? '' : 'none';
                });
            });
        });
    </script>

    <style>
        .card-buttons .btn {
            padding: 3px 6px;
            font-size: 12px;
        }

        .card-img-top {
            max-height: 200px;
            object-fit: cover;
        }

        .card-comments {
            margin-top: 10px;
        }

        .comment {
            margin-bottom: 5px;
        }
    </style>
{% endblock %}
", "back/article/index.html.twig", "C:\\xampp1\\htdocs\\integration_workshop_user1\\templates\\back\\article\\index.html.twig");
    }
}
