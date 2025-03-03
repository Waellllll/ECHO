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

/* conseil/index-front.html.twig */
class __TwigTemplate_bb47f071dbe9bbe816091e98e729e56e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conseil/index-front.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conseil/index-front.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "conseil/index-front.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        // line 3
        yield "<main class=\"main\">
    <div class=\"container my-5\">
        <div class=\"d-flex justify-content-between mb-4\">
            <h1>Conseils</h1>
            <div>
                <button id=\"show-favoris\" class=\"btn btn-danger me-2\">Show Favoris</button>
                <button id=\"show-all\" class=\"btn btn-secondary\">Show All</button>
            </div>
        </div>

        <div class=\"row\" id=\"conseils-container\">
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["conseils"]) || array_key_exists("conseils", $context) ? $context["conseils"] : (function () { throw new RuntimeError('Variable "conseils" does not exist.', 14, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["conseil"]) {
            // line 15
            yield "                <div class=\"col-md-4 conseil-card\" data-conseil-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["conseil"], "id", [], "any", false, false, false, 15), "html", null, true);
            yield "\">
                    <div class=\"card mb-4 shadow-sm position-relative\">
                        <button 
                            class=\"favoris-btn btn position-absolute top-0 end-0 m-2 p-0 border-0 bg-transparent\"
                            data-conseil-id=\"";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["conseil"], "id", [], "any", false, false, false, 19), "html", null, true);
            yield "\">
                            <i class=\"fa fa-heart-o fa-2x\"></i>
                        </button>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["conseil"], "titre", [], "any", false, false, false, 23), "html", null, true);
            yield "</h5>
                            <p class=\"card-text\">";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["conseil"], "contenu", [], "any", false, false, false, 24), "html", null, true);
            yield "</p>
                            <a href=\"";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_front_index", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["conseil"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">
                                Voir Materiels
                            </a>
                        </div>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        // line 31
        if (!$context['_iterated']) {
            // line 32
            yield "                <p>Pas de conseils</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['conseil'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        yield "        </div>
    </div>
</main>

<script>
function getFavoris() {
    const favoris = localStorage.getItem('favoris');
    return favoris ? JSON.parse(favoris) : [];
}

function saveFavoris(favoris) {
    localStorage.setItem('favoris', JSON.stringify(favoris));
}

function toggleFavoris(conseilId, button) {
    let favoris = getFavoris();
    const index = favoris.indexOf(conseilId);

    if (index === -1) {
        favoris.push(conseilId);
        button.innerHTML = '<i class=\"fa fa-heart fa-2x\" style=\"color: red;\"></i>';
    } else {
        favoris.splice(index, 1);
        button.innerHTML = '<i class=\"fa fa-heart-o fa-2x\"></i>';
    }
    saveFavoris(favoris);
}

function updateHeartIcons() {
    const favoris = getFavoris();
    document.querySelectorAll('.favoris-btn').forEach(button => {
        const conseilId = parseInt(button.getAttribute('data-conseil-id'));
        if (favoris.includes(conseilId)) {
            button.innerHTML = '<i class=\"fa fa-heart fa-2x\" style=\"color: red;\"></i>';
        } else {
            button.innerHTML = '<i class=\"fa fa-heart-o fa-2x\"></i>';
        }
    });
}

function filterCards(showOnlyFavoris) {
    const favoris = getFavoris();
    document.querySelectorAll('.conseil-card').forEach(card => {
        const conseilId = parseInt(card.getAttribute('data-conseil-id'));
        card.style.display = showOnlyFavoris ? (favoris.includes(conseilId) ? '' : 'none') : '';
    });
}

document.addEventListener('DOMContentLoaded', function () {
    updateHeartIcons();
    document.querySelectorAll('.favoris-btn').forEach(button => {
        button.addEventListener('click', function (e) {
            e.stopPropagation();
            const conseilId = parseInt(this.getAttribute('data-conseil-id'));
            toggleFavoris(conseilId, this);
        });
    });
    document.getElementById('show-favoris').addEventListener('click', function () {
        filterCards(true);
    });
    document.getElementById('show-all').addEventListener('click', function () {
        filterCards(false);
    });
});
</script>

<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
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
        return "conseil/index-front.html.twig";
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
        return array (  137 => 34,  130 => 32,  128 => 31,  117 => 25,  113 => 24,  109 => 23,  102 => 19,  94 => 15,  89 => 14,  76 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
<main class=\"main\">
    <div class=\"container my-5\">
        <div class=\"d-flex justify-content-between mb-4\">
            <h1>Conseils</h1>
            <div>
                <button id=\"show-favoris\" class=\"btn btn-danger me-2\">Show Favoris</button>
                <button id=\"show-all\" class=\"btn btn-secondary\">Show All</button>
            </div>
        </div>

        <div class=\"row\" id=\"conseils-container\">
            {% for conseil in conseils %}
                <div class=\"col-md-4 conseil-card\" data-conseil-id=\"{{ conseil.id }}\">
                    <div class=\"card mb-4 shadow-sm position-relative\">
                        <button 
                            class=\"favoris-btn btn position-absolute top-0 end-0 m-2 p-0 border-0 bg-transparent\"
                            data-conseil-id=\"{{ conseil.id }}\">
                            <i class=\"fa fa-heart-o fa-2x\"></i>
                        </button>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">{{ conseil.titre }}</h5>
                            <p class=\"card-text\">{{ conseil.contenu }}</p>
                            <a href=\"{{ path('app_materiel_front_index', {'id': conseil.id})}}\" class=\"btn btn-primary\">
                                Voir Materiels
                            </a>
                        </div>
                    </div>
                </div>
            {% else %}
                <p>Pas de conseils</p>
            {% endfor %}
        </div>
    </div>
</main>

<script>
function getFavoris() {
    const favoris = localStorage.getItem('favoris');
    return favoris ? JSON.parse(favoris) : [];
}

function saveFavoris(favoris) {
    localStorage.setItem('favoris', JSON.stringify(favoris));
}

function toggleFavoris(conseilId, button) {
    let favoris = getFavoris();
    const index = favoris.indexOf(conseilId);

    if (index === -1) {
        favoris.push(conseilId);
        button.innerHTML = '<i class=\"fa fa-heart fa-2x\" style=\"color: red;\"></i>';
    } else {
        favoris.splice(index, 1);
        button.innerHTML = '<i class=\"fa fa-heart-o fa-2x\"></i>';
    }
    saveFavoris(favoris);
}

function updateHeartIcons() {
    const favoris = getFavoris();
    document.querySelectorAll('.favoris-btn').forEach(button => {
        const conseilId = parseInt(button.getAttribute('data-conseil-id'));
        if (favoris.includes(conseilId)) {
            button.innerHTML = '<i class=\"fa fa-heart fa-2x\" style=\"color: red;\"></i>';
        } else {
            button.innerHTML = '<i class=\"fa fa-heart-o fa-2x\"></i>';
        }
    });
}

function filterCards(showOnlyFavoris) {
    const favoris = getFavoris();
    document.querySelectorAll('.conseil-card').forEach(card => {
        const conseilId = parseInt(card.getAttribute('data-conseil-id'));
        card.style.display = showOnlyFavoris ? (favoris.includes(conseilId) ? '' : 'none') : '';
    });
}

document.addEventListener('DOMContentLoaded', function () {
    updateHeartIcons();
    document.querySelectorAll('.favoris-btn').forEach(button => {
        button.addEventListener('click', function (e) {
            e.stopPropagation();
            const conseilId = parseInt(this.getAttribute('data-conseil-id'));
            toggleFavoris(conseilId, this);
        });
    });
    document.getElementById('show-favoris').addEventListener('click', function () {
        filterCards(true);
    });
    document.getElementById('show-all').addEventListener('click', function () {
        filterCards(false);
    });
});
</script>

<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
{% endblock %}
", "conseil/index-front.html.twig", "C:\\xampp1\\htdocs\\integration_workshop_user1\\templates\\conseil\\index-front.html.twig");
    }
}
