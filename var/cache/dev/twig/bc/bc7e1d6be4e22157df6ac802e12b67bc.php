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

/* user/edit.html.twig */
class __TwigTemplate_d6c55a4184ed68b7a3242eb81199964f extends Template
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
        return "baseback.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $this->parent = $this->loadTemplate("baseback.html.twig", "user/edit.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "<div class=\"container-fluid d-flex justify-content-center mt-5\">
    <div class=\"col-xl-9 col-lg-8\">
        <div class=\"card\">
            <div class=\"card-header d-flex justify-content-between\">
                <div class=\"header-title\">
                    <h4 class=\"card-title\">Edit User Information</h4>
                </div>
            </div>
            <div class=\"card-body\">
                <div class=\"new-user-info\">
                    ";
        // line 14
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                    <div class=\"row\">
                          <div class=\"form-group col-md-6\">
                            <label class=\"form-label\" for=\"nom\">Nom:</label>
                            ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "nom", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "form-control", "id" => "nom", "placeholder" => "Nom"]]);
        yield "
                            ";
        // line 19
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "nom", [], "any", false, false, false, 19), "vars", [], "any", false, false, false, 19), "errors", [], "any", false, false, false, 19)) > 0)) {
            // line 20
            yield "                                <div class=\"invalid-feedback d-block\">
                                    ";
            // line 21
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "nom", [], "any", false, false, false, 21), 'errors');
            yield "
                                </div>
                            ";
        }
        // line 24
        yield "                        </div>

                        <div class=\"form-group col-md-6\">
                            <label class=\"form-label\" for=\"prenom\">Prénom:</label>
                            ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "prenom", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control", "id" => "prenom", "placeholder" => "Prénom"]]);
        yield "
                            ";
        // line 29
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "prenom", [], "any", false, false, false, 29), "vars", [], "any", false, false, false, 29), "errors", [], "any", false, false, false, 29)) > 0)) {
            // line 30
            yield "                                <div class=\"invalid-feedback d-block\">
                                    ";
            // line 31
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "prenom", [], "any", false, false, false, 31), 'errors');
            yield "
                                </div>
                            ";
        }
        // line 34
        yield "                        </div>

                        <div class=\"form-group col-md-6\">
                            <label class=\"form-label\" for=\"email\">Email:</label>
                            ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "email", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control", "id" => "email", "placeholder" => "Email"]]);
        yield "
                            ";
        // line 39
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "email", [], "any", false, false, false, 39), "vars", [], "any", false, false, false, 39), "errors", [], "any", false, false, false, 39)) > 0)) {
            // line 40
            yield "                                    <div class=\"invalid-feedback d-block\">
                                        ";
            // line 41
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "email", [], "any", false, false, false, 41), 'errors');
            yield "
                                    </div>
                                ";
        }
        // line 44
        yield "                        </div>
                        <div class=\"form-group col-md-6\">
                            <label class=\"form-label\" for=\"roles\">Roles:</label>
                            ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "roles", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control", "id" => "roles"]]);
        yield "
                        </div>
                        
                        <div class=\"form-group col-md-6\">
                            <label class=\"form-label\" for=\"password\">Password:</label>
                            
                            ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "password", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control", "id" => "password", "placeholder" => "Password"]]);
        yield "
                            ";
        // line 54
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "password", [], "any", false, false, false, 54), "vars", [], "any", false, false, false, 54), "errors", [], "any", false, false, false, 54)) > 0)) {
            // line 55
            yield "                             <div class=\"invalid-feedback d-block\">

                                    ";
            // line 57
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "password", [], "any", false, false, false, 57), 'errors');
            yield "
                            </div>
                            ";
        }
        // line 60
        yield "                        </div>
                    </div>
                    <div class=\"form-group text-center mt-3\">
                        <button type=\"submit\" class=\"btn btn-primary\">Save</button>
                    </div>
                    ";
        // line 65
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"text-center mt-3\">
    <a href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"btn btn-secondary\">Back to list</a>
</div>

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
        return "user/edit.html.twig";
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
        return array (  200 => 73,  189 => 65,  182 => 60,  176 => 57,  172 => 55,  170 => 54,  166 => 53,  157 => 47,  152 => 44,  146 => 41,  143 => 40,  141 => 39,  137 => 38,  131 => 34,  125 => 31,  122 => 30,  120 => 29,  116 => 28,  110 => 24,  104 => 21,  101 => 20,  99 => 19,  95 => 18,  88 => 14,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseback.html.twig' %}

{% block body %}
<div class=\"container-fluid d-flex justify-content-center mt-5\">
    <div class=\"col-xl-9 col-lg-8\">
        <div class=\"card\">
            <div class=\"card-header d-flex justify-content-between\">
                <div class=\"header-title\">
                    <h4 class=\"card-title\">Edit User Information</h4>
                </div>
            </div>
            <div class=\"card-body\">
                <div class=\"new-user-info\">
                    {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
                    <div class=\"row\">
                          <div class=\"form-group col-md-6\">
                            <label class=\"form-label\" for=\"nom\">Nom:</label>
                            {{ form_widget(form.nom, {'attr': {'class': 'form-control', 'id': 'nom', 'placeholder': 'Nom'}}) }}
                            {% if form.nom.vars.errors|length > 0 %}
                                <div class=\"invalid-feedback d-block\">
                                    {{ form_errors(form.nom) }}
                                </div>
                            {% endif %}
                        </div>

                        <div class=\"form-group col-md-6\">
                            <label class=\"form-label\" for=\"prenom\">Prénom:</label>
                            {{ form_widget(form.prenom, {'attr': {'class': 'form-control', 'id': 'prenom', 'placeholder': 'Prénom'}}) }}
                            {% if form.prenom.vars.errors|length > 0 %}
                                <div class=\"invalid-feedback d-block\">
                                    {{ form_errors(form.prenom) }}
                                </div>
                            {% endif %}
                        </div>

                        <div class=\"form-group col-md-6\">
                            <label class=\"form-label\" for=\"email\">Email:</label>
                            {{ form_widget(form.email, {'attr': {'class': 'form-control', 'id': 'email', 'placeholder': 'Email'}}) }}
                            {% if form.email.vars.errors|length > 0 %}
                                    <div class=\"invalid-feedback d-block\">
                                        {{ form_errors(form.email) }}
                                    </div>
                                {% endif %}
                        </div>
                        <div class=\"form-group col-md-6\">
                            <label class=\"form-label\" for=\"roles\">Roles:</label>
                            {{ form_widget(form.roles, {'attr': {'class': 'form-control', 'id': 'roles'}}) }}
                        </div>
                        
                        <div class=\"form-group col-md-6\">
                            <label class=\"form-label\" for=\"password\">Password:</label>
                            
                            {{ form_widget(form.password, {'attr': {'class': 'form-control', 'id': 'password', 'placeholder': 'Password'}}) }}
                            {% if form.password.vars.errors|length > 0 %}
                             <div class=\"invalid-feedback d-block\">

                                    {{ form_errors(form.password) }}
                            </div>
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"form-group text-center mt-3\">
                        <button type=\"submit\" class=\"btn btn-primary\">Save</button>
                    </div>
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"text-center mt-3\">
    <a href=\"{{ path('app_user_index') }}\" class=\"btn btn-secondary\">Back to list</a>
</div>

{% endblock %}
", "user/edit.html.twig", "C:\\Users\\OmarA\\OneDrive\\Bureau\\integration_workshop_user1\\templates\\user\\edit.html.twig");
    }
}
