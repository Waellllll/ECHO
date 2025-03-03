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

/* front/article/edit.html.twig */
class __TwigTemplate_85dda32cdddcf2c6d25f5e309755d1b7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/article/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/article/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front/article/edit.html.twig", 1);
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

        yield "blog";
        
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
        yield "    <!-- Container for Edit Article -->
    <div class=\"container mt-3\">
        <h1></h1>

        <!-- Include the form for editing the article -->
        <div class=\"card\">
            <div class=\"card-body\">
                ";
        // line 13
        yield Twig\Extension\CoreExtension::include($this->env, $context, "front/article/_form.html.twig", ["button_label" => "Update"]);
        yield "
            </div>
        </div>

        <!-- Back to the article list button -->
        <div class=\"mt-3\">
            <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_index");
        yield "\" class=\"btn btn-secondary\">
                <i class=\"fas fa-arrow-left mr-2\"></i>Back to Article List
            </a>
        </div>

        <!-- Delete Article Form -->
        <div class=\"mt-3\">
            ";
        // line 26
        yield Twig\Extension\CoreExtension::include($this->env, $context, "front/article/_delete_form.html.twig");
        yield "
        </div>
    </div>

    <!-- Footer -->
    <footer class=\"bg-dark text-light py-3 mt-5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col text-center\">
                    <p class=\"m-0\" style=\"font-family: ";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("base_font_family", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["base_font_family"]) || array_key_exists("base_font_family", $context) ? $context["base_font_family"] : (function () { throw new RuntimeError('Variable "base_font_family" does not exist.', 35, $this->source); })()), "Arial, sans-serif")) : ("Arial, sans-serif")), "html", null, true);
        yield "; font-size: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("base_font_size", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["base_font_size"]) || array_key_exists("base_font_size", $context) ? $context["base_font_size"] : (function () { throw new RuntimeError('Variable "base_font_size" does not exist.', 35, $this->source); })()), "14px")) : ("14px")), "html", null, true);
        yield ";\">
                        &copy; ";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Your Company. All rights reserved.
                    </p>
                    <p style=\"font-family: ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("base_font_family", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["base_font_family"]) || array_key_exists("base_font_family", $context) ? $context["base_font_family"] : (function () { throw new RuntimeError('Variable "base_font_family" does not exist.', 38, $this->source); })()), "Arial, sans-serif")) : ("Arial, sans-serif")), "html", null, true);
        yield "; font-size: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("base_font_size", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["base_font_size"]) || array_key_exists("base_font_size", $context) ? $context["base_font_size"] : (function () { throw new RuntimeError('Variable "base_font_size" does not exist.', 38, $this->source); })()), "14px")) : ("14px")), "html", null, true);
        yield ";\">
                        <a href=\"#\" class=\"text-light\">Privacy Policy</a> | <a href=\"#\" class=\"text-light\">Terms of Service</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

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
        return "front/article/edit.html.twig";
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
        return array (  151 => 38,  146 => 36,  140 => 35,  128 => 26,  118 => 19,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}blog{% endblock %}

{% block body %}
    <!-- Container for Edit Article -->
    <div class=\"container mt-3\">
        <h1></h1>

        <!-- Include the form for editing the article -->
        <div class=\"card\">
            <div class=\"card-body\">
                {{ include('front/article/_form.html.twig', {'button_label': 'Update'}) }}
            </div>
        </div>

        <!-- Back to the article list button -->
        <div class=\"mt-3\">
            <a href=\"{{ path('app_article_index') }}\" class=\"btn btn-secondary\">
                <i class=\"fas fa-arrow-left mr-2\"></i>Back to Article List
            </a>
        </div>

        <!-- Delete Article Form -->
        <div class=\"mt-3\">
            {{ include('front/article/_delete_form.html.twig') }}
        </div>
    </div>

    <!-- Footer -->
    <footer class=\"bg-dark text-light py-3 mt-5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col text-center\">
                    <p class=\"m-0\" style=\"font-family: {{ base_font_family|default('Arial, sans-serif') }}; font-size: {{ base_font_size|default('14px') }};\">
                        &copy; {{ \"now\"|date(\"Y\") }} Your Company. All rights reserved.
                    </p>
                    <p style=\"font-family: {{ base_font_family|default('Arial, sans-serif') }}; font-size: {{ base_font_size|default('14px') }};\">
                        <a href=\"#\" class=\"text-light\">Privacy Policy</a> | <a href=\"#\" class=\"text-light\">Terms of Service</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

{% endblock %}
", "front/article/edit.html.twig", "C:\\xampp1\\htdocs\\integration_workshop_user1\\templates\\front\\article\\edit.html.twig");
    }
}
