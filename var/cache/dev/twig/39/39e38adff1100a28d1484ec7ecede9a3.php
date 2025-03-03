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

/* conseil/show.html.twig */
class __TwigTemplate_bd6890c1f788344680ea06a971e069cc extends Template
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
        // line 3
        return "baseback.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conseil/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conseil/show.html.twig"));

        $this->parent = $this->loadTemplate("baseback.html.twig", "conseil/show.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
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

        yield "Conseil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "    <h1>Conseil</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["conseil"]) || array_key_exists("conseil", $context) ? $context["conseil"] : (function () { throw new RuntimeError('Variable "conseil" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["conseil"]) || array_key_exists("conseil", $context) ? $context["conseil"] : (function () { throw new RuntimeError('Variable "conseil" does not exist.', 18, $this->source); })()), "titre", [], "any", false, false, false, 18), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Contenu</th>
                <td>";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["conseil"]) || array_key_exists("conseil", $context) ? $context["conseil"] : (function () { throw new RuntimeError('Variable "conseil" does not exist.', 22, $this->source); })()), "contenu", [], "any", false, false, false, 22), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>DatePublication</th>
                <td>";
        // line 26
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["conseil"]) || array_key_exists("conseil", $context) ? $context["conseil"] : (function () { throw new RuntimeError('Variable "conseil" does not exist.', 26, $this->source); })()), "datePublication", [], "any", false, false, false, 26)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["conseil"]) || array_key_exists("conseil", $context) ? $context["conseil"] : (function () { throw new RuntimeError('Variable "conseil" does not exist.', 26, $this->source); })()), "datePublication", [], "any", false, false, false, 26), "Y-m-d H:i:s"), "html", null, true)) : (""));
        yield "</td>
            </tr>
            <tr>
                <th>Note</th>
                <td>";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["conseil"]) || array_key_exists("conseil", $context) ? $context["conseil"] : (function () { throw new RuntimeError('Variable "conseil" does not exist.', 30, $this->source); })()), "note", [], "any", false, false, false, 30), "html", null, true);
        yield "</td>
            </tr>
        </tbody>
    </table>

   <a href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conseil_index");
        yield "\" class=\"btn btn-outline-secondary\">Back to list</a>
        <a href=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conseil_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["conseil"]) || array_key_exists("conseil", $context) ? $context["conseil"] : (function () { throw new RuntimeError('Variable "conseil" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36)]), "html", null, true);
        yield "\" class=\"btn btn-outline-primary\">Edit</a>
        <form method=\"post\" action=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conseil_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["conseil"]) || array_key_exists("conseil", $context) ? $context["conseil"] : (function () { throw new RuntimeError('Variable "conseil" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37)]), "html", null, true);
        yield "\" style=\"display:inline-block;\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["conseil"]) || array_key_exists("conseil", $context) ? $context["conseil"] : (function () { throw new RuntimeError('Variable "conseil" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38))), "html", null, true);
        yield "\">
            <button class=\"btn btn-outline-danger\">Delete</button>
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
        return "conseil/show.html.twig";
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
        return array (  156 => 38,  152 => 37,  148 => 36,  144 => 35,  136 => 30,  129 => 26,  122 => 22,  115 => 18,  108 => 14,  100 => 8,  87 => 7,  64 => 5,  41 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("

{% extends 'baseback.html.twig' %}

{% block title %}Conseil{% endblock %}

{% block body %}
    <h1>Conseil</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ conseil.id }}</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>{{ conseil.titre }}</td>
            </tr>
            <tr>
                <th>Contenu</th>
                <td>{{ conseil.contenu }}</td>
            </tr>
            <tr>
                <th>DatePublication</th>
                <td>{{ conseil.datePublication ? conseil.datePublication|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Note</th>
                <td>{{ conseil.note }}</td>
            </tr>
        </tbody>
    </table>

   <a href=\"{{ path('app_conseil_index') }}\" class=\"btn btn-outline-secondary\">Back to list</a>
        <a href=\"{{ path('app_conseil_edit', {'id': conseil.id}) }}\" class=\"btn btn-outline-primary\">Edit</a>
        <form method=\"post\" action=\"{{ path('app_conseil_delete', {'id': conseil.id}) }}\" style=\"display:inline-block;\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ conseil.id) }}\">
            <button class=\"btn btn-outline-danger\">Delete</button>
{% endblock %}
", "conseil/show.html.twig", "C:\\xampp1\\htdocs\\integration_workshop_user1\\templates\\conseil\\show.html.twig");
    }
}
