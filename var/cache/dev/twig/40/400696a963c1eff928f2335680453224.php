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
class __TwigTemplate_46b43b502f6067037e41560d7e0882d0 extends Template
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
        yield "    <!-- Search Input and Results Container -->
    <div class=\"container mt-4\">
        <h1 class=\"text-center\">Workshop Articles</h1>

        <!-- Search Form -->
        <div class=\"mb-4\">
            <form action=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_workshop_indexf");
        yield "\" method=\"get\" class=\"form-inline\">
                <div class=\"form-group mx-sm-3 mb-2\">
                    <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Search by title or location\" value=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", [], "any", false, false, false, 14), "query", [], "any", false, false, false, 14), "get", ["search"], "method", false, false, false, 14), "html", null, true);
        yield "\">
                </div>
                <button type=\"submit\" class=\"btn btn-primary mb-2\">Search</button>
            </form>
        </div>

        <!-- Button to Generate PDF -->
        <div class=\"row\">
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["workshopsWithWeather"]) || array_key_exists("workshopsWithWeather", $context) ? $context["workshopsWithWeather"] : (function () { throw new RuntimeError('Variable "workshopsWithWeather" does not exist.', 22, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["workshopData"]) {
            // line 23
            yield "                ";
            $context["workshop"] = CoreExtension::getAttribute($this->env, $this->source, $context["workshopData"], "workshop", [], "any", false, false, false, 23);
            // line 24
            yield "                ";
            $context["weatherForecast"] = CoreExtension::getAttribute($this->env, $this->source, $context["workshopData"], "weatherForecast", [], "any", false, false, false, 24);
            // line 25
            yield "                <div class=\"col-md-4 mb-4\">
                    <div class=\"card workshop-card\">
                        <div class=\"card-body workshop-card-body d-flex flex-column justify-content-center align-items-center\">
                            <div class=\"d-flex justify-content-between w-100\">
                                ";
            // line 29
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 29, $this->source); })()), "creatorName", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29))) {
                // line 30
                yield "                                    <div>
                                        <a class=\"edit-icon\" href=\"";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_workshop_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31)]), "html", null, true);
                yield "\" title=\"Edit\">
                                            ⚙️
                                        </a>
                                        <a class=\"delete-icon\" href=\"#\" data-url=\"";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_workshop_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34)]), "html", null, true);
                yield "\" onclick=\"confirmDelete(this); return false;\" title=\"Delete\">
                                            &times;
                                        </a>
                                    </div>
                                ";
            }
            // line 39
            yield "                            </div>

                            <h5 class=\"card-title text-center\">";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 41, $this->source); })()), "title", [], "any", false, false, false, 41), "html", null, true);
            yield "</h5>
                            <p><strong>Date:</strong> ";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 42, $this->source); })()), "date", [], "any", false, false, false, 42), "Y-m-d"), "html", null, true);
            yield "</p>
                            <p><strong>Location:</strong> ";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 43, $this->source); })()), "location", [], "any", false, false, false, 43), "html", null, true);
            yield "</p>
                            <h2>Weather Forecast</h2>
                            
                            ";
            // line 46
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["weatherForecast"]) || array_key_exists("weatherForecast", $context) ? $context["weatherForecast"] : (function () { throw new RuntimeError('Variable "weatherForecast" does not exist.', 46, $this->source); })()), "location", [], "any", false, false, false, 46) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["weatherForecast"]) || array_key_exists("weatherForecast", $context) ? $context["weatherForecast"] : (function () { throw new RuntimeError('Variable "weatherForecast" does not exist.', 46, $this->source); })()), "current", [], "any", false, false, false, 46))) {
                // line 47
                yield "                                <p><strong>Condition:</strong> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["weatherForecast"]) || array_key_exists("weatherForecast", $context) ? $context["weatherForecast"] : (function () { throw new RuntimeError('Variable "weatherForecast" does not exist.', 47, $this->source); })()), "current", [], "any", false, false, false, 47), "condition", [], "any", false, false, false, 47), "text", [], "any", false, false, false, 47), "html", null, true);
                yield "</p>
                                <p><strong>Temperature:</strong> ";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["weatherForecast"]) || array_key_exists("weatherForecast", $context) ? $context["weatherForecast"] : (function () { throw new RuntimeError('Variable "weatherForecast" does not exist.', 48, $this->source); })()), "current", [], "any", false, false, false, 48), "temp_c", [], "any", false, false, false, 48), "html", null, true);
                yield "°C</p>
                                <p><strong>Humidity:</strong> ";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["weatherForecast"]) || array_key_exists("weatherForecast", $context) ? $context["weatherForecast"] : (function () { throw new RuntimeError('Variable "weatherForecast" does not exist.', 49, $this->source); })()), "current", [], "any", false, false, false, 49), "humidity", [], "any", false, false, false, 49), "html", null, true);
                yield "%</p>
                            ";
            } else {
                // line 51
                yield "                                <p><strong>Error:</strong> Weather data is unavailable.</p>
                            ";
            }
            // line 53
            yield "                            <button class=\"btn btn-green\" data-toggle=\"modal\" data-target=\"#workshopModal\" 
                                data-title=\"";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 54, $this->source); })()), "title", [], "any", false, false, false, 54), "html", null, true);
            yield "\" 
                                data-date=\"";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 55, $this->source); })()), "date", [], "any", false, false, false, 55), "Y-m-d"), "html", null, true);
            yield "\" 
                                data-location=\"";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 56, $this->source); })()), "location", [], "any", false, false, false, 56), "html", null, true);
            yield "\" 
                                data-target-audience=\"";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 57, $this->source); })()), "targetAudience", [], "any", false, false, false, 57), "html", null, true);
            yield "\" 
                                data-topics-covered=\"";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 58, $this->source); })()), "topicsCovered", [], "any", false, false, false, 58), "html", null, true);
            yield "\" 
                                data-materials-provided=\"";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 59, $this->source); })()), "materialsProvided", [], "any", false, false, false, 59), "html", null, true);
            yield "\"
                                data-created-by=\"";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 60, $this->source); })()), "creatorName", [], "any", false, false, false, 60), "nom", [], "any", false, false, false, 60), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 60, $this->source); })()), "creatorName", [], "any", false, false, false, 60), "prenom", [], "any", false, false, false, 60), "html", null, true);
            yield "\"
                                data-reservation-count=\"";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 61, $this->source); })()), "reservations", [], "any", false, false, false, 61)), "html", null, true);
            yield "\"
                                data-reservations=\"";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 62, $this->source); })()), "reservations", [], "any", false, false, false, 62));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "participantName", [], "any", false, false, false, 62), "nom", [], "any", false, false, false, 62), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "participantName", [], "any", false, false, false, 62), "prenom", [], "any", false, false, false, 62), "html", null, true);
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "paymentStatus", [], "any", false, false, false, 62), "html", null, true);
                yield "), ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield "\"
                                data-workshop-id=\"";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 63, $this->source); })()), "id", [], "any", false, false, false, 63), "html", null, true);
            yield "\">
                                View Details
                            </button>
                            <a href=\"";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_workshop_pdf", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["workshop"]) || array_key_exists("workshop", $context) ? $context["workshop"] : (function () { throw new RuntimeError('Variable "workshop" does not exist.', 66, $this->source); })()), "id", [], "any", false, false, false, 66)]), "html", null, true);
            yield "\" class=\"btn-download-pdf\">Download PDF</a>
                        </div>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        // line 70
        if (!$context['_iterated']) {
            // line 71
            yield "                <div class=\"col-12\">
                    <p class=\"text-center\">No workshops found.</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['workshopData'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
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
    </div>

    <!-- Styles -->
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

        .delete-icon {
            color: black;
            text-decoration: none;
            font-size: 1.5rem;
        }

        .delete-icon:hover {
            color: red;
        }

        /* CSS for Download PDF Button */
        .btn-download-pdf {
            background-color: rgb(122, 241, 163);
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
        }

        .btn-download-pdf:hover {
            background-color: rgb(32, 156, 129);
        }
    </style>

    ";
        // line 232
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

        // line 233
        yield "        <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>

        <script>
            // Delete confirmation function
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

            // Workshop modal setup
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
        // line 280
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
        return array (  509 => 280,  460 => 233,  437 => 232,  278 => 75,  269 => 71,  267 => 70,  258 => 66,  252 => 63,  236 => 62,  232 => 61,  226 => 60,  222 => 59,  218 => 58,  214 => 57,  210 => 56,  206 => 55,  202 => 54,  199 => 53,  195 => 51,  190 => 49,  186 => 48,  181 => 47,  179 => 46,  173 => 43,  169 => 42,  165 => 41,  161 => 39,  153 => 34,  147 => 31,  144 => 30,  142 => 29,  136 => 25,  133 => 24,  130 => 23,  125 => 22,  114 => 14,  109 => 12,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Workshops{% endblock %}

{% block body %}
    <!-- Search Input and Results Container -->
    <div class=\"container mt-4\">
        <h1 class=\"text-center\">Workshop Articles</h1>

        <!-- Search Form -->
        <div class=\"mb-4\">
            <form action=\"{{ path('app_workshop_indexf') }}\" method=\"get\" class=\"form-inline\">
                <div class=\"form-group mx-sm-3 mb-2\">
                    <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Search by title or location\" value=\"{{ app.request.query.get('search') }}\">
                </div>
                <button type=\"submit\" class=\"btn btn-primary mb-2\">Search</button>
            </form>
        </div>

        <!-- Button to Generate PDF -->
        <div class=\"row\">
            {% for workshopData in workshopsWithWeather %}
                {% set workshop = workshopData.workshop %}
                {% set weatherForecast = workshopData.weatherForecast %}
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
                            <h2>Weather Forecast</h2>
                            
                            {% if weatherForecast.location and weatherForecast.current %}
                                <p><strong>Condition:</strong> {{ weatherForecast.current.condition.text }}</p>
                                <p><strong>Temperature:</strong> {{ weatherForecast.current.temp_c }}°C</p>
                                <p><strong>Humidity:</strong> {{ weatherForecast.current.humidity }}%</p>
                            {% else %}
                                <p><strong>Error:</strong> Weather data is unavailable.</p>
                            {% endif %}
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
                            <a href=\"{{ path('app_workshop_pdf', { id: workshop.id }) }}\" class=\"btn-download-pdf\">Download PDF</a>
                        </div>
                    </div>
                </div>
            {% else %}
                <div class=\"col-12\">
                    <p class=\"text-center\">No workshops found.</p>
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
    </div>

    <!-- Styles -->
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

        .delete-icon {
            color: black;
            text-decoration: none;
            font-size: 1.5rem;
        }

        .delete-icon:hover {
            color: red;
        }

        /* CSS for Download PDF Button */
        .btn-download-pdf {
            background-color: rgb(122, 241, 163);
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
        }

        .btn-download-pdf:hover {
            background-color: rgb(32, 156, 129);
        }
    </style>

    {% block javascripts %}
        <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>

        <script>
            // Delete confirmation function
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

            // Workshop modal setup
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
{% endblock %}", "workshop/indexf.html.twig", "C:\\xampp1\\htdocs\\integration_workshop_user1\\templates\\workshop\\indexf.html.twig");
    }
}
