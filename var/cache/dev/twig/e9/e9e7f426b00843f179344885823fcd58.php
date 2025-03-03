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

/* workshop/indexf.html.twig */
class __TwigTemplate_93bb7845987f366ffbfe7e27147b3830 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "workshop/indexf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "workshop/indexf.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "workshop/indexf.html.twig", 1);
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

        yield "Workshops";
        
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
        <h1 class=\"text-center\">Workshop Articles</h1>

        <!-- Button to Generate PDF -->
        

        <div class=\"row\">
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["workshops"]) || array_key_exists("workshops", $context) ? $context["workshops"] : (function () { throw new RuntimeError('Variable "workshops" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["workshop"]) {
            // line 14
            yield "                <div class=\"col-md-4 mb-4\">
                    <div class=\"card workshop-card\">
                        <div class=\"card-body workshop-card-body d-flex flex-column justify-content-center align-items-center\">
                            <div class=\"d-flex justify-content-between w-100\">
                                ";
            // line 18
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["workshop"], "creatorName", [], "any", false, false, false, 18), "id", [], "any", false, false, false, 18) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "id", [], "any", false, false, false, 18))) {
                // line 19
                yield "                                    <div>
                                        <a class=\"edit-icon\" href=\"";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_workshop_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["workshop"], "id", [], "any", false, false, false, 20)]), "html", null, true);
                yield "\" title=\"Edit\">
                                            ⚙️
                                        </a>
                                        <a class=\"delete-icon\" href=\"#\" data-url=\"";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_workshop_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["workshop"], "id", [], "any", false, false, false, 23)]), "html", null, true);
                yield "\" onclick=\"confirmDelete(this); return false;\" title=\"Delete\">
                                            &times;
                                        </a>
                                    </div>
                                ";
            }
            // line 28
            yield "                            </div>

                            <h5 class=\"card-title text-center\">";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["workshop"], "title", [], "any", false, false, false, 30), "html", null, true);
            yield "</h5>
                            <p><strong>Date:</strong> ";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["workshop"], "date", [], "any", false, false, false, 31), "Y-m-d"), "html", null, true);
            yield "</p>
                            <p><strong>Location:</strong> ";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["workshop"], "location", [], "any", false, false, false, 32), "html", null, true);
            yield "</p>
                            <button class=\"btn btn-green\" data-toggle=\"modal\" data-target=\"#workshopModal\" 
                                data-title=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["workshop"], "title", [], "any", false, false, false, 34), "html", null, true);
            yield "\" 
                                data-date=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["workshop"], "date", [], "any", false, false, false, 35), "Y-m-d"), "html", null, true);
            yield "\" 
                                data-location=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["workshop"], "location", [], "any", false, false, false, 36), "html", null, true);
            yield "\" 
                                data-target-audience=\"";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["workshop"], "targetAudience", [], "any", false, false, false, 37), "html", null, true);
            yield "\" 
                                data-topics-covered=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["workshop"], "topicsCovered", [], "any", false, false, false, 38), "html", null, true);
            yield "\" 
                                data-materials-provided=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["workshop"], "materialsProvided", [], "any", false, false, false, 39), "html", null, true);
            yield "\"
                                data-created-by=\"";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["workshop"], "creatorName", [], "any", false, false, false, 40), "nom", [], "any", false, false, false, 40), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["workshop"], "creatorName", [], "any", false, false, false, 40), "prenom", [], "any", false, false, false, 40), "html", null, true);
            yield "\"
                                data-reservation-count=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["workshop"], "reservations", [], "any", false, false, false, 41)), "html", null, true);
            yield "\"
                                data-reservations=\"";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["workshop"], "reservations", [], "any", false, false, false, 42));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "participantName", [], "any", false, false, false, 42), "nom", [], "any", false, false, false, 42), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "participantName", [], "any", false, false, false, 42), "prenom", [], "any", false, false, false, 42), "html", null, true);
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "paymentStatus", [], "any", false, false, false, 42), "html", null, true);
                yield "), ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield "\"
                                data-workshop-id=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["workshop"], "id", [], "any", false, false, false, 43), "html", null, true);
            yield "\">
                                View Details
                            </button>
                            <a href=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_workshop_pdf", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["workshop"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            yield "\">Download PDF</a>
                        </div>
                        
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['workshop'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "        </div>

        <!-- Modal -->
        <div class=\"modal fade\" id=\"workshopModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"workshopModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content workshop-details-modal\">
                    <div class=\"modal-header d-flex align-items-center\">
                        <h5 class=\"modal-title\" id=\"workshopModalLabel\">Workshop Details</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>

                    <div class=\"modal-body\">
                        <h5 id=\"modal-workshop-title\"></h5>
                        <p><strong>Date:</strong> <span id=\"modal-workshop-date\"></span></p>
                        <p><strong>Location:</strong> <span id=\"modal-workshop-location\"></span></p>
                        <p><strong>Target Audience:</strong> <span id=\"modal-workshop-target-audience\"></span></p>
                        <p><strong>Topics Covered:</strong> <span id=\"modal-workshop-topics-covered\"></span></p>
                        <p><strong>Materials Provided:</strong> <span id=\"modal-workshop-materials-provided\"></span></p>
                        <p><strong>Created By:</strong> <span id=\"modal-created-by\"></span></p>
                        <p><strong>Reservations:</strong> <span id=\"modal-reservation-count\"></span></p>
                        <p><strong>Participant Names & Payment Status:</strong> <span id=\"modal-participant-names-status\"></span></p>

                        <!-- Reservation Button -->
                        <a href=\"#\" id=\"modal-reservation-link\" class=\"btn btn-primary mt-4\">Make a Reservation</a>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .btn-green {
                background-color: green;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                text-decoration: none;
                display: inline-block;
            }

            .btn-green:hover {
                background-color: darkgreen;
            }

            .workshop-details-modal {
                background-image: url('https://images.unsplash.com/photo-1530836369250-ef72a3f5cda8?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
                background-size: cover;
                background-position: center;
                color: green;
                border-radius: 10px;
                overflow: hidden;
            }

            .workshop-details-modal .modal-body {
                background: rgba(177, 255, 173, 0.8);
                color: black;
                border-radius: 0 0 10px 10px;
                padding: 20px;
            }

            .workshop-details-modal .modal-title {
                font-size: 1.5rem;
                font-weight: bold;
                color: white;
                margin-left: 10px;
            }

            #modal-workshop-title {
                text-align: center;
                font-size: 1.75rem;
                font-weight: bold;
                margin-top: 0;
                margin-bottom: 20px;
            }

            .workshop-details-modal p {
                margin-bottom: 10px;
            }

            .workshop-details-modal .close {
                position: absolute;
                right: 10px;
                color: white;
                font-size: 1.5rem;
                text-shadow: none;
                opacity: 1;
                outline: none;
                border: none;
                background: none;
            }

            .workshop-details-modal .close:hover {
                color: red;
            }

            .workshop-card {
                background-image: url('https://www.agrimaroc.ma/wp-content/uploads/agriculteur2-660x330.png');
                background-size: cover;
                background-position: center;
                border-radius: 10px;
                overflow: hidden;
            }

            .workshop-card-body .card-title {
                font-size: 1.25rem;
                font-weight: bold;
                color: black;
                text-align: center;
            }

            .workshop-card-body p {
                color: black;
                margin-bottom: 10px;
            }

            .modal-header {
                display: flex;
                justify-content: center;
                align-items: center;
                position: relative;
            }

            .modal-header .close {
                position: absolute;
                right: 10px;
            }

            /* New CSS for hover effect on delete icon */
            .delete-icon {
                color: black; /* Default color */
                text-decoration: none; /* Remove underline */
                font-size: 1.5rem; /* Adjust size as needed */
            }

            .delete-icon:hover {
                color: red; /* Change color on hover */
            }
        </style>
    </div>

    ";
        // line 194
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 195
        yield "        <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
        <script>
            function confirmDelete(element) {
                if (confirm('Are you sure you want to delete this workshop?')) {
                    var url = element.getAttribute('data-url');
                    var form = document.createElement('form');
                    form.method = 'post';
                    form.action = url;

                    var hiddenField = document.createElement('input');
                    hiddenField.type = 'hidden';
                    hiddenField.name = '_method';
                    hiddenField.value = 'DELETE';
                    form.appendChild(hiddenField);

                    document.body.appendChild(form);
                    form.submit();
                }
            }

            \$('#workshopModal').on('show.bs.modal', function (event) {
                var button = \$(event.relatedTarget);
                var title = button.data('title');
                var date = button.data('date');
                var location = button.data('location');
                var targetAudience = button.data('target-audience');
                var topicsCovered = button.data('topics-covered');
                var materialsProvided = button.data('materials-provided');
                var createdBy = button.data('created-by');
                var reservationCount = button.data('reservation-count');
                var reservations = button.data('reservations');
                var workshopId = button.data('workshop-id');

                var modal = \$(this);
                modal.find('#modal-workshop-title').text(title);
                modal.find('#modal-workshop-date').text(date);
                modal.find('#modal-workshop-location').text(location);
                modal.find('#modal-workshop-target-audience').text(targetAudience);
                modal.find('#modal-workshop-topics-covered').text(topicsCovered);
                modal.find('#modal-workshop-materials-provided').text(materialsProvided);
                modal.find('#modal-created-by').text(createdBy);
                modal.find('#modal-reservation-count').text(reservationCount);
                modal.find('#modal-participant-names-status').html(reservations.replace(/, \$/, '').split(', ').join('<br>'));
                modal.find('#modal-reservation-link').attr('href', '";
        // line 239
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_new", ["workshop" => "workshopId"]);
        yield "'.replace('workshopId', workshopId));
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
        return "workshop/indexf.html.twig";
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
        return array (  437 => 239,  391 => 195,  368 => 194,  224 => 52,  212 => 46,  206 => 43,  190 => 42,  186 => 41,  180 => 40,  176 => 39,  172 => 38,  168 => 37,  164 => 36,  160 => 35,  156 => 34,  151 => 32,  147 => 31,  143 => 30,  139 => 28,  131 => 23,  125 => 20,  122 => 19,  120 => 18,  114 => 14,  110 => 13,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Workshops{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <h1 class=\"text-center\">Workshop Articles</h1>

        <!-- Button to Generate PDF -->
        

        <div class=\"row\">
            {% for workshop in workshops %}
                <div class=\"col-md-4 mb-4\">
                    <div class=\"card workshop-card\">
                        <div class=\"card-body workshop-card-body d-flex flex-column justify-content-center align-items-center\">
                            <div class=\"d-flex justify-content-between w-100\">
                                {% if workshop.creatorName.id == app.user.id %}
                                    <div>
                                        <a class=\"edit-icon\" href=\"{{ path('app_workshop_edit', {'id': workshop.id}) }}\" title=\"Edit\">
                                            ⚙️
                                        </a>
                                        <a class=\"delete-icon\" href=\"#\" data-url=\"{{ path('app_workshop_delete', {'id': workshop.id}) }}\" onclick=\"confirmDelete(this); return false;\" title=\"Delete\">
                                            &times;
                                        </a>
                                    </div>
                                {% endif %}
                            </div>

                            <h5 class=\"card-title text-center\">{{ workshop.title }}</h5>
                            <p><strong>Date:</strong> {{ workshop.date|date('Y-m-d') }}</p>
                            <p><strong>Location:</strong> {{ workshop.location }}</p>
                            <button class=\"btn btn-green\" data-toggle=\"modal\" data-target=\"#workshopModal\" 
                                data-title=\"{{ workshop.title }}\" 
                                data-date=\"{{ workshop.date|date('Y-m-d') }}\" 
                                data-location=\"{{ workshop.location }}\" 
                                data-target-audience=\"{{ workshop.targetAudience }}\" 
                                data-topics-covered=\"{{ workshop.topicsCovered }}\" 
                                data-materials-provided=\"{{ workshop.materialsProvided }}\"
                                data-created-by=\"{{ workshop.creatorName.nom }} {{ workshop.creatorName.prenom }}\"
                                data-reservation-count=\"{{ workshop.reservations|length }}\"
                                data-reservations=\"{% for reservation in workshop.reservations %}{{ reservation.participantName.nom }} {{ reservation.participantName.prenom }} ({{ reservation.paymentStatus }}), {% endfor %}\"
                                data-workshop-id=\"{{ workshop.id }}\">
                                View Details
                            </button>
                            <a href=\"{{ path('app_workshop_pdf', { id: workshop.id }) }}\">Download PDF</a>
                        </div>
                        
                    </div>
                </div>
            {% endfor %}
        </div>

        <!-- Modal -->
        <div class=\"modal fade\" id=\"workshopModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"workshopModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content workshop-details-modal\">
                    <div class=\"modal-header d-flex align-items-center\">
                        <h5 class=\"modal-title\" id=\"workshopModalLabel\">Workshop Details</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>

                    <div class=\"modal-body\">
                        <h5 id=\"modal-workshop-title\"></h5>
                        <p><strong>Date:</strong> <span id=\"modal-workshop-date\"></span></p>
                        <p><strong>Location:</strong> <span id=\"modal-workshop-location\"></span></p>
                        <p><strong>Target Audience:</strong> <span id=\"modal-workshop-target-audience\"></span></p>
                        <p><strong>Topics Covered:</strong> <span id=\"modal-workshop-topics-covered\"></span></p>
                        <p><strong>Materials Provided:</strong> <span id=\"modal-workshop-materials-provided\"></span></p>
                        <p><strong>Created By:</strong> <span id=\"modal-created-by\"></span></p>
                        <p><strong>Reservations:</strong> <span id=\"modal-reservation-count\"></span></p>
                        <p><strong>Participant Names & Payment Status:</strong> <span id=\"modal-participant-names-status\"></span></p>

                        <!-- Reservation Button -->
                        <a href=\"#\" id=\"modal-reservation-link\" class=\"btn btn-primary mt-4\">Make a Reservation</a>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .btn-green {
                background-color: green;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                text-decoration: none;
                display: inline-block;
            }

            .btn-green:hover {
                background-color: darkgreen;
            }

            .workshop-details-modal {
                background-image: url('https://images.unsplash.com/photo-1530836369250-ef72a3f5cda8?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
                background-size: cover;
                background-position: center;
                color: green;
                border-radius: 10px;
                overflow: hidden;
            }

            .workshop-details-modal .modal-body {
                background: rgba(177, 255, 173, 0.8);
                color: black;
                border-radius: 0 0 10px 10px;
                padding: 20px;
            }

            .workshop-details-modal .modal-title {
                font-size: 1.5rem;
                font-weight: bold;
                color: white;
                margin-left: 10px;
            }

            #modal-workshop-title {
                text-align: center;
                font-size: 1.75rem;
                font-weight: bold;
                margin-top: 0;
                margin-bottom: 20px;
            }

            .workshop-details-modal p {
                margin-bottom: 10px;
            }

            .workshop-details-modal .close {
                position: absolute;
                right: 10px;
                color: white;
                font-size: 1.5rem;
                text-shadow: none;
                opacity: 1;
                outline: none;
                border: none;
                background: none;
            }

            .workshop-details-modal .close:hover {
                color: red;
            }

            .workshop-card {
                background-image: url('https://www.agrimaroc.ma/wp-content/uploads/agriculteur2-660x330.png');
                background-size: cover;
                background-position: center;
                border-radius: 10px;
                overflow: hidden;
            }

            .workshop-card-body .card-title {
                font-size: 1.25rem;
                font-weight: bold;
                color: black;
                text-align: center;
            }

            .workshop-card-body p {
                color: black;
                margin-bottom: 10px;
            }

            .modal-header {
                display: flex;
                justify-content: center;
                align-items: center;
                position: relative;
            }

            .modal-header .close {
                position: absolute;
                right: 10px;
            }

            /* New CSS for hover effect on delete icon */
            .delete-icon {
                color: black; /* Default color */
                text-decoration: none; /* Remove underline */
                font-size: 1.5rem; /* Adjust size as needed */
            }

            .delete-icon:hover {
                color: red; /* Change color on hover */
            }
        </style>
    </div>

    {% block javascripts %}
        <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
        <script>
            function confirmDelete(element) {
                if (confirm('Are you sure you want to delete this workshop?')) {
                    var url = element.getAttribute('data-url');
                    var form = document.createElement('form');
                    form.method = 'post';
                    form.action = url;

                    var hiddenField = document.createElement('input');
                    hiddenField.type = 'hidden';
                    hiddenField.name = '_method';
                    hiddenField.value = 'DELETE';
                    form.appendChild(hiddenField);

                    document.body.appendChild(form);
                    form.submit();
                }
            }

            \$('#workshopModal').on('show.bs.modal', function (event) {
                var button = \$(event.relatedTarget);
                var title = button.data('title');
                var date = button.data('date');
                var location = button.data('location');
                var targetAudience = button.data('target-audience');
                var topicsCovered = button.data('topics-covered');
                var materialsProvided = button.data('materials-provided');
                var createdBy = button.data('created-by');
                var reservationCount = button.data('reservation-count');
                var reservations = button.data('reservations');
                var workshopId = button.data('workshop-id');

                var modal = \$(this);
                modal.find('#modal-workshop-title').text(title);
                modal.find('#modal-workshop-date').text(date);
                modal.find('#modal-workshop-location').text(location);
                modal.find('#modal-workshop-target-audience').text(targetAudience);
                modal.find('#modal-workshop-topics-covered').text(topicsCovered);
                modal.find('#modal-workshop-materials-provided').text(materialsProvided);
                modal.find('#modal-created-by').text(createdBy);
                modal.find('#modal-reservation-count').text(reservationCount);
                modal.find('#modal-participant-names-status').html(reservations.replace(/, \$/, '').split(', ').join('<br>'));
                modal.find('#modal-reservation-link').attr('href', '{{ path('app_reservation_new', {'workshop': 'workshopId'}) }}'.replace('workshopId', workshopId));
            });
        </script>
    {% endblock %}
{% endblock %}", "workshop/indexf.html.twig", "C:\\Users\\OmarA\\OneDrive\\Bureau\\integration_workshop_user1\\templates\\workshop\\indexf.html.twig");
    }
}
