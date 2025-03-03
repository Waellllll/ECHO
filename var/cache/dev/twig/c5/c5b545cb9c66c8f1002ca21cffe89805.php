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

/* user/dashboard.html.twig */
class __TwigTemplate_4cba508f9e94f0f225b2e717249a52e9 extends Template
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
        // line 2
        return "baseback.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("baseback.html.twig", "user/dashboard.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        // line 5
        yield "    <h1 class=\"page-title\">Dashboard</h1>

    <div class=\"chart-container\">
        <!-- Chart 1: User Distribution -->
        <div class=\"chart-card\">
            <h3 class=\"chart-title\">Répartition des Utilisateurs</h3>
            <div id=\"userDistributionChart\" class=\"chart\" style=\"width: 100%; height: 400px;\"></div>
        </div>

        <!-- Chart 2: Reservations per Workshop -->
        <div class=\"chart-card\">
            <h3 class=\"chart-title\">Reservations per Workshop</h3>
            <div id=\"workshopChart\" class=\"chart\" style=\"width: 100%; height: 400px;\"></div>
        </div>

        <!-- Chart 3: Reservations by Payment Status -->
        <div class=\"chart-card\">
            <h3 class=\"chart-title\">Reservations by Payment Status</h3>
            <div id=\"paymentChart\" class=\"chart\" style=\"width: 100%; height: 400px;\"></div>
        </div>
    </div>

    <!-- Load Google Charts -->
    <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
    <script type=\"text/javascript\">
        // Load Google Charts
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawCharts);

        function drawCharts() {
            // Chart 1: User Distribution
            var userData = google.visualization.arrayToDataTable(";
        // line 36
        yield json_encode((isset($context["chartData"]) || array_key_exists("chartData", $context) ? $context["chartData"] : (function () { throw new RuntimeError('Variable "chartData" does not exist.', 36, $this->source); })()));
        yield ");
            var userOptions = {
                title: 'Répartition des Utilisateurs',
                width: '100%',
                height: 400,
                legend: { position: 'bottom', textStyle: { color: '#333', fontSize: 14 } },
                slices: {
                    0: { offset: 0.1, textStyle: { fontSize: 16, color: '#fff' }},
                    1: { offset: 0.1, textStyle: { fontSize: 16, color: '#fff' }},
                },
                animation: {
                    startup: true,
                    duration: 1200,
                    easing: 'out'
                },
                pieSliceText: 'percentage',
                pieSliceTextStyle: { color: '#fff', fontSize: 16 },
            };
            var userChart = new google.visualization.PieChart(document.getElementById('userDistributionChart'));
            userChart.draw(userData, userOptions);

            // Chart 2: Reservations per Workshop
            var workshopData = google.visualization.arrayToDataTable([
                ['Workshop', 'Reservations'],
                ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservationsPerWorkshop"]) || array_key_exists("reservationsPerWorkshop", $context) ? $context["reservationsPerWorkshop"] : (function () { throw new RuntimeError('Variable "reservationsPerWorkshop" does not exist.', 60, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 61
            yield "                    ['";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "workshopTitle", [], "any", false, false, false, 61), "html", null, true);
            yield "', ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "reservationCount", [], "any", false, false, false, 61), "html", null, true);
            yield "],
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "            ]);
            var workshopOptions = {
                title: 'Reservations per Workshop',
                pieHole: 0.4,
                animation: { duration: 1000, easing: 'out' },
                pieSliceText: 'value',
                legend: { position: 'labeled', textStyle: { color: '#333', fontSize: 14 } },
                chartArea: { width: '90%', height: '80%' },
            };
            var workshopChart = new google.visualization.PieChart(document.getElementById('workshopChart'));
            workshopChart.draw(workshopData, workshopOptions);

            // Chart 3: Reservations by Payment Status
            var paymentData = google.visualization.arrayToDataTable([
                ['Status', 'Count'],
                ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservationsByPaymentStatus"]) || array_key_exists("reservationsByPaymentStatus", $context) ? $context["reservationsByPaymentStatus"] : (function () { throw new RuntimeError('Variable "reservationsByPaymentStatus" does not exist.', 78, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 79
            yield "                    ['";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "status", [], "any", false, false, false, 79), "html", null, true);
            yield "', ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "count", [], "any", false, false, false, 79), "html", null, true);
            yield "],
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        yield "            ]);
            var paymentOptions = {
                title: 'Reservations by Payment Status',
                is3D: true,
                animation: { duration: 1000, easing: 'out' },
                pieSliceText: 'value',
                legend: { position: 'labeled', textStyle: { color: '#333', fontSize: 14 } },
                chartArea: { width: '90%', height: '80%' },
            };
            var paymentChart = new google.visualization.PieChart(document.getElementById('paymentChart'));
            paymentChart.draw(paymentData, paymentOptions);

            // Resize charts on window resize
            window.addEventListener('resize', function() {
                userChart.draw(userData, userOptions);
                workshopChart.draw(workshopData, workshopOptions);
                paymentChart.draw(paymentData, paymentOptions);
            });
        }
    </script>

    <style>
        /* General Page Styles */
        .page-title {
            text-align: center;
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 20px;
            font-weight: 700;
        }

        /* Chart Container */
        .chart-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            padding: 20px;
        }

        /* Chart Card */
        .chart-card {
            width: 45%;
            min-width: 300px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
            transition: transform 0.3s ease-in-out;
        }

        .chart-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        /* Chart Title */
        .chart-title {
            font-size: 1.5rem;
            color: #444;
            margin-bottom: 20px;
            font-weight: 600;
            text-align: center;
        }

        /* Chart Styling */
        .chart {
            border-radius: 8px;
            overflow: hidden;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .chart-card {
                width: 100%;
            }
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
        return "user/dashboard.html.twig";
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
        return array (  183 => 81,  172 => 79,  168 => 78,  151 => 63,  140 => 61,  136 => 60,  109 => 36,  76 => 5,  63 => 4,  40 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/reservation/stats.html.twig #}
{% extends 'baseback.html.twig' %}

{% block body %}
    <h1 class=\"page-title\">Dashboard</h1>

    <div class=\"chart-container\">
        <!-- Chart 1: User Distribution -->
        <div class=\"chart-card\">
            <h3 class=\"chart-title\">Répartition des Utilisateurs</h3>
            <div id=\"userDistributionChart\" class=\"chart\" style=\"width: 100%; height: 400px;\"></div>
        </div>

        <!-- Chart 2: Reservations per Workshop -->
        <div class=\"chart-card\">
            <h3 class=\"chart-title\">Reservations per Workshop</h3>
            <div id=\"workshopChart\" class=\"chart\" style=\"width: 100%; height: 400px;\"></div>
        </div>

        <!-- Chart 3: Reservations by Payment Status -->
        <div class=\"chart-card\">
            <h3 class=\"chart-title\">Reservations by Payment Status</h3>
            <div id=\"paymentChart\" class=\"chart\" style=\"width: 100%; height: 400px;\"></div>
        </div>
    </div>

    <!-- Load Google Charts -->
    <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
    <script type=\"text/javascript\">
        // Load Google Charts
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawCharts);

        function drawCharts() {
            // Chart 1: User Distribution
            var userData = google.visualization.arrayToDataTable({{ chartData|json_encode|raw }});
            var userOptions = {
                title: 'Répartition des Utilisateurs',
                width: '100%',
                height: 400,
                legend: { position: 'bottom', textStyle: { color: '#333', fontSize: 14 } },
                slices: {
                    0: { offset: 0.1, textStyle: { fontSize: 16, color: '#fff' }},
                    1: { offset: 0.1, textStyle: { fontSize: 16, color: '#fff' }},
                },
                animation: {
                    startup: true,
                    duration: 1200,
                    easing: 'out'
                },
                pieSliceText: 'percentage',
                pieSliceTextStyle: { color: '#fff', fontSize: 16 },
            };
            var userChart = new google.visualization.PieChart(document.getElementById('userDistributionChart'));
            userChart.draw(userData, userOptions);

            // Chart 2: Reservations per Workshop
            var workshopData = google.visualization.arrayToDataTable([
                ['Workshop', 'Reservations'],
                {% for item in reservationsPerWorkshop %}
                    ['{{ item.workshopTitle }}', {{ item.reservationCount }}],
                {% endfor %}
            ]);
            var workshopOptions = {
                title: 'Reservations per Workshop',
                pieHole: 0.4,
                animation: { duration: 1000, easing: 'out' },
                pieSliceText: 'value',
                legend: { position: 'labeled', textStyle: { color: '#333', fontSize: 14 } },
                chartArea: { width: '90%', height: '80%' },
            };
            var workshopChart = new google.visualization.PieChart(document.getElementById('workshopChart'));
            workshopChart.draw(workshopData, workshopOptions);

            // Chart 3: Reservations by Payment Status
            var paymentData = google.visualization.arrayToDataTable([
                ['Status', 'Count'],
                {% for item in reservationsByPaymentStatus %}
                    ['{{ item.status }}', {{ item.count }}],
                {% endfor %}
            ]);
            var paymentOptions = {
                title: 'Reservations by Payment Status',
                is3D: true,
                animation: { duration: 1000, easing: 'out' },
                pieSliceText: 'value',
                legend: { position: 'labeled', textStyle: { color: '#333', fontSize: 14 } },
                chartArea: { width: '90%', height: '80%' },
            };
            var paymentChart = new google.visualization.PieChart(document.getElementById('paymentChart'));
            paymentChart.draw(paymentData, paymentOptions);

            // Resize charts on window resize
            window.addEventListener('resize', function() {
                userChart.draw(userData, userOptions);
                workshopChart.draw(workshopData, workshopOptions);
                paymentChart.draw(paymentData, paymentOptions);
            });
        }
    </script>

    <style>
        /* General Page Styles */
        .page-title {
            text-align: center;
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 20px;
            font-weight: 700;
        }

        /* Chart Container */
        .chart-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            padding: 20px;
        }

        /* Chart Card */
        .chart-card {
            width: 45%;
            min-width: 300px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
            transition: transform 0.3s ease-in-out;
        }

        .chart-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        /* Chart Title */
        .chart-title {
            font-size: 1.5rem;
            color: #444;
            margin-bottom: 20px;
            font-weight: 600;
            text-align: center;
        }

        /* Chart Styling */
        .chart {
            border-radius: 8px;
            overflow: hidden;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .chart-card {
                width: 100%;
            }
        }
    </style>
{% endblock %}", "user/dashboard.html.twig", "C:\\xampp1\\htdocs\\integration_workshop_user1\\templates\\user\\dashboard.html.twig");
    }
}
