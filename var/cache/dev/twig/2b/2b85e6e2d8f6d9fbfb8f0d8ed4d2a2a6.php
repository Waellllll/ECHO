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

/* materiel/index_front.html.twig */
class __TwigTemplate_42679d03469a43b5246cb604e3c6d65b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materiel/index_front.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materiel/index_front.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "materiel/index_front.html.twig", 1);
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
        <h1 class=\"mb-4\">";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["conseil"]) || array_key_exists("conseil", $context) ? $context["conseil"] : (function () { throw new RuntimeError('Variable "conseil" does not exist.', 5, $this->source); })()), "titre", [], "any", false, false, false, 5), "html", null, true);
        yield "</h1>
        <p>";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["conseil"]) || array_key_exists("conseil", $context) ? $context["conseil"] : (function () { throw new RuntimeError('Variable "conseil" does not exist.', 6, $this->source); })()), "contenu", [], "any", false, false, false, 6), "html", null, true);
        yield "</p>
        <br>
        <div class=\"row mb-4\">
            <div class=\"col-md-6\">
                <input type=\"text\" id=\"advancedSearch\" class=\"form-control\" placeholder=\"Search materials...\">
            </div>
            <div class=\"col-md-4\">
                <select id=\"sortSelect\" class=\"form-control\">
                    <option value=\"default\">Default</option>
                    <option value=\"name_asc\">Name Ascending</option>
                    <option value=\"name_desc\">Name Descending</option>
                    <option value=\"price_asc\">Price Low to High</option>
                    <option value=\"price_desc\">Price High to Low</option>
                </select>
            </div>
            <div class=\"col-md-2\">
                <button id=\"sortButton\" class=\"btn btn-primary\">Sort</button>
            </div>
        </div>
        <br>
        <h1 class=\"mb-4\">Matriels</h1>
        <div id=\"materielContainer\" class=\"row\">
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["materiels"]) || array_key_exists("materiels", $context) ? $context["materiels"] : (function () { throw new RuntimeError('Variable "materiels" does not exist.', 28, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["materiel"]) {
            // line 29
            yield "                <div class=\"col-md-4 materiel-card\" data-name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "nom", [], "any", false, false, false, 29)), "html", null, true);
            yield "\" data-price=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "prix", [], "any", false, false, false, 29), "html", null, true);
            yield "\" data-type=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "type", [], "any", false, false, false, 29), "html", null, true);
            yield "\">
                    <div class=\"card mb-4 shadow-sm\">
                        ";
            // line 31
            if (CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "image", [], "any", false, false, false, 31)) {
                // line 32
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "image", [], "any", false, false, false, 32))), "html", null, true);
                yield "\" class=\"card-img-top\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "nom", [], "any", false, false, false, 32), "html", null, true);
                yield "\">
                        ";
            }
            // line 34
            yield "                        <div class=\"card-body\">
                            <h5 class=\"card-title\">";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "nom", [], "any", false, false, false, 35), "html", null, true);
            yield "</h5>
                            <p class=\"card-text\">
                                <strong>Type:</strong> ";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "type", [], "any", false, false, false, 37), "html", null, true);
            yield "<br>
                                <strong>Marque:</strong> ";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "marque", [], "any", false, false, false, 38), "html", null, true);
            yield "<br>
                                <strong>Prix:</strong> ";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "prix", [], "any", false, false, false, 39), "html", null, true);
            yield "DT<br>
                            </p>
                            <img src=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("uploads/qrcode/materiel_" . CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "id", [], "any", false, false, false, 41)) . ".png")), "html", null, true);
            yield "\" alt=\"QR Code for ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "nom", [], "any", false, false, false, 41), "html", null, true);
            yield "\" class=\"img-fluid\">
                        </div>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        // line 45
        if (!$context['_iterated']) {
            // line 46
            yield "                <p id=\"emptyMessage\">Matriels vide</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['materiel'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        yield "        </div>
    </div>
</main>
<script>
document.addEventListener(\"DOMContentLoaded\", function() {
    const searchInput = document.getElementById('advancedSearch');
    const sortSelect = document.getElementById('sortSelect');
    const sortButton = document.getElementById('sortButton');
    const materielContainer = document.getElementById('materielContainer');
    const cards = Array.from(document.querySelectorAll('.materiel-card'));

    function filterCards() {
        const query = searchInput.value.toLowerCase().trim();
        let visibleCount = 0;
        cards.forEach(card => {
            const name = card.getAttribute('data-name');
            const price = card.getAttribute('data-price');
            const type = card.getAttribute('data-type');
            if ((name && name.indexOf(query) !== -1) ||
                (price && price.indexOf(query) !== -1) ||
                (type && type.indexOf(query) !== -1)) {
                card.style.display = 'block';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });
        const emptyMessage = document.getElementById('emptyMessage');
        if (emptyMessage) {
            emptyMessage.style.display = visibleCount === 0 ? 'block' : 'none';
        }
    }

    searchInput.addEventListener('keyup', filterCards);

    function sortCards() {
        let sortedCards = [...cards];
        const sortBy = sortSelect.value;

        if (sortBy === 'name_asc') {
            sortedCards.sort((a, b) => a.getAttribute('data-name').localeCompare(b.getAttribute('data-name')));
        } else if (sortBy === 'name_desc') {
            sortedCards.sort((a, b) => b.getAttribute('data-name').localeCompare(a.getAttribute('data-name')));
        } else if (sortBy === 'price_asc') {
            sortedCards.sort((a, b) => parseFloat(a.getAttribute('data-price')) - parseFloat(b.getAttribute('data-price')));
        } else if (sortBy === 'price_desc') {
            sortedCards.sort((a, b) => parseFloat(b.getAttribute('data-price')) - parseFloat(a.getAttribute('data-price')));
        } else {
            sortedCards = [...cards];
        }

        materielContainer.innerHTML = '';
        sortedCards.forEach(card => {
            materielContainer.appendChild(card);
        });
    }

    sortButton.addEventListener('click', sortCards);
});
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
        return "materiel/index_front.html.twig";
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
        return array (  175 => 48,  168 => 46,  166 => 45,  155 => 41,  150 => 39,  146 => 38,  142 => 37,  137 => 35,  134 => 34,  126 => 32,  124 => 31,  114 => 29,  109 => 28,  84 => 6,  80 => 5,  76 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
<main class=\"main\">
    <div class=\"container my-5\">
        <h1 class=\"mb-4\">{{ conseil.titre }}</h1>
        <p>{{ conseil.contenu }}</p>
        <br>
        <div class=\"row mb-4\">
            <div class=\"col-md-6\">
                <input type=\"text\" id=\"advancedSearch\" class=\"form-control\" placeholder=\"Search materials...\">
            </div>
            <div class=\"col-md-4\">
                <select id=\"sortSelect\" class=\"form-control\">
                    <option value=\"default\">Default</option>
                    <option value=\"name_asc\">Name Ascending</option>
                    <option value=\"name_desc\">Name Descending</option>
                    <option value=\"price_asc\">Price Low to High</option>
                    <option value=\"price_desc\">Price High to Low</option>
                </select>
            </div>
            <div class=\"col-md-2\">
                <button id=\"sortButton\" class=\"btn btn-primary\">Sort</button>
            </div>
        </div>
        <br>
        <h1 class=\"mb-4\">Matriels</h1>
        <div id=\"materielContainer\" class=\"row\">
            {% for materiel in materiels %}
                <div class=\"col-md-4 materiel-card\" data-name=\"{{ materiel.nom | lower }}\" data-price=\"{{ materiel.prix }}\" data-type=\"{{ materiel.type }}\">
                    <div class=\"card mb-4 shadow-sm\">
                        {% if materiel.image %}
                            <img src=\"{{ asset('uploads/' ~ materiel.image) }}\" class=\"card-img-top\" alt=\"{{ materiel.nom }}\">
                        {% endif %}
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">{{ materiel.nom }}</h5>
                            <p class=\"card-text\">
                                <strong>Type:</strong> {{ materiel.type }}<br>
                                <strong>Marque:</strong> {{ materiel.marque }}<br>
                                <strong>Prix:</strong> {{ materiel.prix }}DT<br>
                            </p>
                            <img src=\"{{ asset('uploads/qrcode/materiel_' ~ materiel.id ~ '.png') }}\" alt=\"QR Code for {{ materiel.nom }}\" class=\"img-fluid\">
                        </div>
                    </div>
                </div>
            {% else %}
                <p id=\"emptyMessage\">Matriels vide</p>
            {% endfor %}
        </div>
    </div>
</main>
<script>
document.addEventListener(\"DOMContentLoaded\", function() {
    const searchInput = document.getElementById('advancedSearch');
    const sortSelect = document.getElementById('sortSelect');
    const sortButton = document.getElementById('sortButton');
    const materielContainer = document.getElementById('materielContainer');
    const cards = Array.from(document.querySelectorAll('.materiel-card'));

    function filterCards() {
        const query = searchInput.value.toLowerCase().trim();
        let visibleCount = 0;
        cards.forEach(card => {
            const name = card.getAttribute('data-name');
            const price = card.getAttribute('data-price');
            const type = card.getAttribute('data-type');
            if ((name && name.indexOf(query) !== -1) ||
                (price && price.indexOf(query) !== -1) ||
                (type && type.indexOf(query) !== -1)) {
                card.style.display = 'block';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });
        const emptyMessage = document.getElementById('emptyMessage');
        if (emptyMessage) {
            emptyMessage.style.display = visibleCount === 0 ? 'block' : 'none';
        }
    }

    searchInput.addEventListener('keyup', filterCards);

    function sortCards() {
        let sortedCards = [...cards];
        const sortBy = sortSelect.value;

        if (sortBy === 'name_asc') {
            sortedCards.sort((a, b) => a.getAttribute('data-name').localeCompare(b.getAttribute('data-name')));
        } else if (sortBy === 'name_desc') {
            sortedCards.sort((a, b) => b.getAttribute('data-name').localeCompare(a.getAttribute('data-name')));
        } else if (sortBy === 'price_asc') {
            sortedCards.sort((a, b) => parseFloat(a.getAttribute('data-price')) - parseFloat(b.getAttribute('data-price')));
        } else if (sortBy === 'price_desc') {
            sortedCards.sort((a, b) => parseFloat(b.getAttribute('data-price')) - parseFloat(a.getAttribute('data-price')));
        } else {
            sortedCards = [...cards];
        }

        materielContainer.innerHTML = '';
        sortedCards.forEach(card => {
            materielContainer.appendChild(card);
        });
    }

    sortButton.addEventListener('click', sortCards);
});
</script>
{% endblock %}
", "materiel/index_front.html.twig", "C:\\xampp1\\htdocs\\integration_workshop_user1\\templates\\materiel\\index_front.html.twig");
    }
}
