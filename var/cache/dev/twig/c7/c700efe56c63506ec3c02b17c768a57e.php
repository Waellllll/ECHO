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

/* front/article/new.html.twig */
class __TwigTemplate_1bbbb307e8791d3b8c16a15a5d6221bf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/article/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/article/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front/article/new.html.twig", 1);
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

        yield "New Article";
        
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
        <div class=\"row mt-5\">
            <div class=\"col-md-6 offset-md-3\">
                <h1 class=\"text-center\">What's on Your Mind..?</h1>
                ";
        // line 10
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                <div class=\"form-group\">
                    ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "description", [], "any", false, false, false, 12), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Enter article description"]]);
        yield "
                </div>
                <div class=\"form-group\">
                    ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "imageFile", [], "any", false, false, false, 15), 'row', ["attr" => ["class" => "form-control-file"]]);
        yield "
                </div>
                <button type=\"submit\" class=\"btn btn-primary btn-block\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 17, $this->source); })()), "Create")) : ("Create")), "html", null, true);
        yield "</button>
                ";
        // line 18
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_end');
        yield "
                <div class=\"text-center mt-3\">
                    <a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_index");
        yield "\" class=\"btn btn-secondary\">Back to List</a>
                </div>
            </div>
        </div>
    </div>
     <footer class=\"bg-dark text-light py-3 mt-5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col text-center\">
                    <p class=\"m-0\" style=\"font-family: ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("base_font_family", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["base_font_family"]) || array_key_exists("base_font_family", $context) ? $context["base_font_family"] : (function () { throw new RuntimeError('Variable "base_font_family" does not exist.', 29, $this->source); })()), "Arial, sans-serif")) : ("Arial, sans-serif")), "html", null, true);
        yield "; font-size: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("base_font_size", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["base_font_size"]) || array_key_exists("base_font_size", $context) ? $context["base_font_size"] : (function () { throw new RuntimeError('Variable "base_font_size" does not exist.', 29, $this->source); })()), "14px")) : ("14px")), "html", null, true);
        yield ";\">
                        &copy; ";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Your Company. All rights reserved.
                    </p>
                    <p style=\"font-family: ";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("base_font_family", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["base_font_family"]) || array_key_exists("base_font_family", $context) ? $context["base_font_family"] : (function () { throw new RuntimeError('Variable "base_font_family" does not exist.', 32, $this->source); })()), "Arial, sans-serif")) : ("Arial, sans-serif")), "html", null, true);
        yield "; font-size: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("base_font_size", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["base_font_size"]) || array_key_exists("base_font_size", $context) ? $context["base_font_size"] : (function () { throw new RuntimeError('Variable "base_font_size" does not exist.', 32, $this->source); })()), "14px")) : ("14px")), "html", null, true);
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
        return "front/article/new.html.twig";
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
        return array (  154 => 32,  149 => 30,  143 => 29,  131 => 20,  126 => 18,  122 => 17,  117 => 15,  111 => 12,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}New Article{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row mt-5\">
            <div class=\"col-md-6 offset-md-3\">
                <h1 class=\"text-center\">What's on Your Mind..?</h1>
                {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
                <div class=\"form-group\">
                    {{ form_row(form.description, {'attr': {'class': 'form-control', 'placeholder': 'Enter article description'}}) }}
                </div>
                <div class=\"form-group\">
                    {{ form_row(form.imageFile, {'attr': {'class': 'form-control-file'}}) }}
                </div>
                <button type=\"submit\" class=\"btn btn-primary btn-block\">{{ button_label|default('Create') }}</button>
                {{ form_end(form) }}
                <div class=\"text-center mt-3\">
                    <a href=\"{{ path('app_article_index') }}\" class=\"btn btn-secondary\">Back to List</a>
                </div>
            </div>
        </div>
    </div>
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
{% endblock %}", "front/article/new.html.twig", "C:\\xampp1\\htdocs\\integration_workshop_user1\\templates\\front\\article\\new.html.twig");
    }
}
