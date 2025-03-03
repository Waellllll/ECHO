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

/* workshop/pdf.html.twig */
class __TwigTemplate_a2268e21631f843b0babb59af5755ea9 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "workshop/pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "workshop/pdf.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Workshops PDF</title>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header img {
            max-width: 150px; /* Adjust the size of your logo */
            height: auto;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .workshop-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 15px;
            background-color: #f9f9f9;
        }
        .workshop-card h2 {
            margin: 0 0 10px;
            font-size: 20px;
            color: #333;
        }
        .workshop-card p {
            margin: 5px 0;
            font-size: 14px;
            color: #555;
        }
        .workshop-card p strong {
            color: #000;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <img src=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        yield "\" alt=\"GreenBridge Logo\">
    </div>

    ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["workshops"]) || array_key_exists("workshops", $context) ? $context["workshops"] : (function () { throw new RuntimeError('Variable "workshops" does not exist.', 53, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["workshop"]) {
            // line 54
            yield "        <div class=\"workshop-card\">
            <h2>Workshop: ";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["workshop"], "title", [], "any", false, false, false, 55), "html", null, true);
            yield "</h2>
            <p><strong><i class=\"fas fa-user\"></i> Created By:</strong> ";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["workshop"], "creatorName", [], "any", false, false, false, 56), "nom", [], "any", false, false, false, 56), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["workshop"], "creatorName", [], "any", false, false, false, 56), "prenom", [], "any", false, false, false, 56), "html", null, true);
            yield "</p>
            <p><strong><i class=\"fas fa-calendar-alt\"></i> Date:</strong> ";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["workshop"], "date", [], "any", false, false, false, 57), "Y-m-d"), "html", null, true);
            yield "</p>
            <p><strong><i class=\"fas fa-map-marker-alt\"></i> Location:</strong> ";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["workshop"], "location", [], "any", false, false, false, 58), "html", null, true);
            yield "</p>
            <p><strong><i class=\"fas fa-users\"></i> Target Audience:</strong> ";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["workshop"], "targetAudience", [], "any", false, false, false, 59), "html", null, true);
            yield "</p>
            <p><strong><i class=\"fas fa-book\"></i> Topics Covered:</strong> ";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["workshop"], "topicsCovered", [], "any", false, false, false, 60), "html", null, true);
            yield "</p>
            <p><strong><i class=\"fas fa-clipboard-list\"></i> Materials Provided:</strong> ";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["workshop"], "materialsProvided", [], "any", false, false, false, 61), "html", null, true);
            yield "</p>
            <p><strong><i class=\"fas fa-user-check\"></i> Reservations:</strong> ";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["workshop"], "reservations", [], "any", false, false, false, 62)), "html", null, true);
            yield "</p>
            ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["workshop"], "reservations", [], "any", false, false, false, 63));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 64
                yield "                <p><strong><i class=\"fas fa-id-badge\"></i> Participant Names:</strong> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "participantName", [], "any", false, false, false, 64), "nom", [], "any", false, false, false, 64), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "participantName", [], "any", false, false, false, 64), "prenom", [], "any", false, false, false, 64), "html", null, true);
                yield "</p>
                <p><strong><i class=\"fas fa-money-check-alt\"></i> Participant Payment Status:</strong> ";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "paymentStatus", [], "any", false, false, false, 65), "html", null, true);
                yield "</p>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            yield "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['workshop'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        yield "</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "workshop/pdf.html.twig";
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
        return array (  172 => 69,  165 => 67,  157 => 65,  150 => 64,  146 => 63,  142 => 62,  138 => 61,  134 => 60,  130 => 59,  126 => 58,  122 => 57,  116 => 56,  112 => 55,  109 => 54,  105 => 53,  99 => 50,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Workshops PDF</title>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header img {
            max-width: 150px; /* Adjust the size of your logo */
            height: auto;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .workshop-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 15px;
            background-color: #f9f9f9;
        }
        .workshop-card h2 {
            margin: 0 0 10px;
            font-size: 20px;
            color: #333;
        }
        .workshop-card p {
            margin: 5px 0;
            font-size: 14px;
            color: #555;
        }
        .workshop-card p strong {
            color: #000;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <img src=\"{{asset('assets/img/logo.png') }}\" alt=\"GreenBridge Logo\">
    </div>

    {% for workshop in workshops %}
        <div class=\"workshop-card\">
            <h2>Workshop: {{ workshop.title }}</h2>
            <p><strong><i class=\"fas fa-user\"></i> Created By:</strong> {{ workshop.creatorName.nom }} {{ workshop.creatorName.prenom }}</p>
            <p><strong><i class=\"fas fa-calendar-alt\"></i> Date:</strong> {{ workshop.date|date('Y-m-d') }}</p>
            <p><strong><i class=\"fas fa-map-marker-alt\"></i> Location:</strong> {{ workshop.location }}</p>
            <p><strong><i class=\"fas fa-users\"></i> Target Audience:</strong> {{ workshop.targetAudience }}</p>
            <p><strong><i class=\"fas fa-book\"></i> Topics Covered:</strong> {{ workshop.topicsCovered }}</p>
            <p><strong><i class=\"fas fa-clipboard-list\"></i> Materials Provided:</strong> {{ workshop.materialsProvided }}</p>
            <p><strong><i class=\"fas fa-user-check\"></i> Reservations:</strong> {{ workshop.reservations|length }}</p>
            {% for reservation in workshop.reservations %}
                <p><strong><i class=\"fas fa-id-badge\"></i> Participant Names:</strong> {{ reservation.participantName.nom }} {{ reservation.participantName.prenom }}</p>
                <p><strong><i class=\"fas fa-money-check-alt\"></i> Participant Payment Status:</strong> {{ reservation.paymentStatus }}</p>
            {% endfor %}
        </div>
    {% endfor %}
</body>
</html>
", "workshop/pdf.html.twig", "C:\\xampp1\\htdocs\\integration_workshop_user1\\templates\\workshop\\pdf.html.twig");
    }
}
