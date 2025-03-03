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

/* front/article/index.html.twig */
class __TwigTemplate_9925fcfd19473b23983912a9392d07af extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/article/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/article/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front/article/index.html.twig", 1);
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

        yield "Article Index";
        
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
    <input type=\"text\" id=\"searchInput\" class=\"form-control\" placeholder=\"Search for your article\" aria-label=\"Search\" aria-describedby=\"searchIcon\">

  
    <div class=\"container mt-3\">
        <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_new");
        yield "\" class=\"btn btn-lg btn-success mb-3\">
            <i class=\"fas fa-plus-circle mr-2\"></i>Create New Article
        </a>
    </div>

    
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 19
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 19, $this->source); })()))) {
            // line 20
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 20, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 21
                yield "                    <div class=\"col-md-6 mb-3\">
                        <div class=\"card\">
                            ";
                // line 23
                if (CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 23)) {
                    // line 24
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/front/" . CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 24))), "html", null, true);
                    yield "\" class=\"card-img-top\" alt=\"Article Image\">
                            ";
                } else {
                    // line 26
                    yield "                                <div class=\"card-img-top\">No image</div>
                            ";
                }
                // line 28
                yield "                            <div class=\"card-body\">
                                <h5 class=\"card-title\">";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "description", [], "any", false, false, false, 29), "html", null, true);
                yield "</h5>
                                
                                <div class=\"btn-group\" role=\"group\">
                                    <a href=\"";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 32)]), "html", null, true);
                yield "\" class=\"btn btn-primary\">
                                        <i class=\"fas fa-edit\"></i> Edit
                                    </a>
                                    <form action=\"";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 35)]), "html", null, true);
                yield "\" method=\"post\" onsubmit=\"return confirm('Are you sure you want to delete this article?');\">
                                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 37))), "html", null, true);
                yield "\">
                                        <button type=\"submit\" class=\"btn btn-danger\"><i class=\"fas fa-trash\"></i> Delete</button>
                                    </form>
                                </div>

                                <!-- Comment ****-->
                                <hr>
                                <h6>Comments</h6>
                                <ul class=\"list-group\">
                                    ";
                // line 46
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["articleComments"]) || array_key_exists("articleComments", $context) ? $context["articleComments"] : (function () { throw new RuntimeError('Variable "articleComments" does not exist.', 46, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 46), [], "array", false, false, false, 46))) {
                    // line 47
                    yield "                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["articleComments"]) || array_key_exists("articleComments", $context) ? $context["articleComments"] : (function () { throw new RuntimeError('Variable "articleComments" does not exist.', 47, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 47), [], "array", false, false, false, 47));
                    foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                        // line 48
                        yield "                                            <li class=\"list-group-item\">
                                                ";
                        // line 49
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "comment", [], "any", false, false, false, 49), "html", null, true);
                        yield "
                                                <div class=\"comment-buttons\">
                                                    <a href=\"";
                        // line 51
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comment_edit", ["commentid" => CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 51)]), "html", null, true);
                        yield "\" class=\"btn btn-primary\"><i class=\"fas fa-edit\"></i></a>
                                                    <form action=\"";
                        // line 52
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comment_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 52)]), "html", null, true);
                        yield "\" method=\"post\" onsubmit=\"return confirm('Are you sure you want to delete this comment?');\">
                                                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"";
                        // line 54
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 54))), "html", null, true);
                        yield "\">
                                                    <button type=\"submit\" class=\"btn btn-danger\"><i class=\"fas fa-trash\"></i></button>
                                                </form>
                                                </div>
                                            </li>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['comment'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 60
                    yield "                                    ";
                } else {
                    // line 61
                    yield "                                        <li class=\"list-group-item\">Be the first to comment!</li>
                                    ";
                }
                // line 63
                yield "                                </ul>

                                <!-- Comment form -->
                                <hr>
                                <form action=\"";
                // line 67
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comment_new");
                yield "\" method=\"post\">
                                    <input type=\"hidden\" name=\"id_article\" value=\"";
                // line 68
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 68), "html", null, true);
                yield "\">
                                    <div class=\"form-group\">
                                        <label for=\"comment\"></label>
                                        <textarea class=\"form-control\" id=\"comment\" name=\"comment\" rows=\"1\" placeholder=\"Share your thoughts\" oninput=\"autoResize(this)\"></textarea>
                                    </div>
                                    <button type=\"submit\" class=\"btn btn-success\">Add your comment</button>
                                </form>
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['article'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            yield "            ";
        } else {
            // line 80
            yield "                <div class=\"col\">
                    <p>No records found</p>
                </div>
            ";
        }
        // line 84
        yield "        </div>
    </div>

    <!-- Footer -->
    <footer class=\"bg-dark text-light py-3 mt-5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col text-center\">
                    <p>&copy; ";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Your Company. All rights reserved.</p>
                    <p><a href=\"#\" class=\"text-light\">Privacy Policy</a> | <a href=\"#\" class=\"text-light\">Terms of Service</a></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Font Awesome stylesheet link -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\">

    ";
        // line 119
        yield "
    <script>
        function autoResize(textarea) {
            textarea.style.height = 'auto';
            textarea.style.height = (textarea.scrollHeight + 2) + 'px';
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
        return "front/article/index.html.twig";
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
        return array (  275 => 119,  262 => 92,  252 => 84,  246 => 80,  243 => 79,  226 => 68,  222 => 67,  216 => 63,  212 => 61,  209 => 60,  197 => 54,  192 => 52,  188 => 51,  183 => 49,  180 => 48,  175 => 47,  173 => 46,  161 => 37,  156 => 35,  150 => 32,  144 => 29,  141 => 28,  137 => 26,  131 => 24,  129 => 23,  125 => 21,  120 => 20,  118 => 19,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Article Index{% endblock %}

{% block body %}
  
    <input type=\"text\" id=\"searchInput\" class=\"form-control\" placeholder=\"Search for your article\" aria-label=\"Search\" aria-describedby=\"searchIcon\">

  
    <div class=\"container mt-3\">
        <a href=\"{{ path('app_article_new') }}\" class=\"btn btn-lg btn-success mb-3\">
            <i class=\"fas fa-plus-circle mr-2\"></i>Create New Article
        </a>
    </div>

    
    <div class=\"container\">
        <div class=\"row\">
            {% if articles is not empty %}
                {% for article in articles %}
                    <div class=\"col-md-6 mb-3\">
                        <div class=\"card\">
                            {% if article.image %}
                                <img src=\"{{ asset('images/front/' ~ article.image) }}\" class=\"card-img-top\" alt=\"Article Image\">
                            {% else %}
                                <div class=\"card-img-top\">No image</div>
                            {% endif %}
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">{{ article.description }}</h5>
                                
                                <div class=\"btn-group\" role=\"group\">
                                    <a href=\"{{ path('app_article_edit', {'id': article.id}) }}\" class=\"btn btn-primary\">
                                        <i class=\"fas fa-edit\"></i> Edit
                                    </a>
                                    <form action=\"{{ path('app_article_delete', {'id': article.id}) }}\" method=\"post\" onsubmit=\"return confirm('Are you sure you want to delete this article?');\">
                                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ article.id) }}\">
                                        <button type=\"submit\" class=\"btn btn-danger\"><i class=\"fas fa-trash\"></i> Delete</button>
                                    </form>
                                </div>

                                <!-- Comment ****-->
                                <hr>
                                <h6>Comments</h6>
                                <ul class=\"list-group\">
                                    {% if articleComments[article.id] is not empty %}
                                        {% for comment in articleComments[article.id] %}
                                            <li class=\"list-group-item\">
                                                {{ comment.comment }}
                                                <div class=\"comment-buttons\">
                                                    <a href=\"{{ path('app_comment_edit', {'commentid': comment.id}) }}\" class=\"btn btn-primary\"><i class=\"fas fa-edit\"></i></a>
                                                    <form action=\"{{ path('app_comment_delete', {'id': comment.id}) }}\" method=\"post\" onsubmit=\"return confirm('Are you sure you want to delete this comment?');\">
                                                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ comment.id) }}\">
                                                    <button type=\"submit\" class=\"btn btn-danger\"><i class=\"fas fa-trash\"></i></button>
                                                </form>
                                                </div>
                                            </li>
                                        {% endfor %}
                                    {% else %}
                                        <li class=\"list-group-item\">Be the first to comment!</li>
                                    {% endif %}
                                </ul>

                                <!-- Comment form -->
                                <hr>
                                <form action=\"{{ path('app_comment_new') }}\" method=\"post\">
                                    <input type=\"hidden\" name=\"id_article\" value=\"{{ article.id }}\">
                                    <div class=\"form-group\">
                                        <label for=\"comment\"></label>
                                        <textarea class=\"form-control\" id=\"comment\" name=\"comment\" rows=\"1\" placeholder=\"Share your thoughts\" oninput=\"autoResize(this)\"></textarea>
                                    </div>
                                    <button type=\"submit\" class=\"btn btn-success\">Add your comment</button>
                                </form>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            {% else %}
                <div class=\"col\">
                    <p>No records found</p>
                </div>
            {% endif %}
        </div>
    </div>

    <!-- Footer -->
    <footer class=\"bg-dark text-light py-3 mt-5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col text-center\">
                    <p>&copy; {{ \"now\"|date(\"Y\") }} Your Company. All rights reserved.</p>
                    <p><a href=\"#\" class=\"text-light\">Privacy Policy</a> | <a href=\"#\" class=\"text-light\">Terms of Service</a></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Font Awesome stylesheet link -->
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\">

    {# <script>
        document.addEventListener('DOMContentLoaded', function () {
            const searchInput = document.getElementById('searchInput');
            const cardTitles = document.querySelectorAll('.card-title');

            searchInput.addEventListener('input', function () {
                const searchText = searchInput.value.trim().toLowerCase();

                cardTitles.forEach(title => {
                    const visible = title.textContent.trim().toLowerCase().includes(searchText);
                    const card = title.closest('.card');

                    card.style.display = visible ? '' : 'none';
                });
            });
        });
    </script> #}

    <script>
        function autoResize(textarea) {
            textarea.style.height = 'auto';
            textarea.style.height = (textarea.scrollHeight + 2) + 'px';
        }
    </script>

{% endblock %}
", "front/article/index.html.twig", "C:\\Users\\OmarA\\OneDrive\\Bureau\\integration_workshop_user1\\templates\\front\\article\\index.html.twig");
    }
}
