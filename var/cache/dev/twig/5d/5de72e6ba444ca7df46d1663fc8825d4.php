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

/* user/new.html.twig */
class __TwigTemplate_02fa46320aa25b14932e02105b329e98 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $this->parent = $this->loadTemplate("baseback.html.twig", "user/new.html.twig", 1);
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
                    <h4 class=\"card-title\">New User Information</h4>
                </div>
            </div>
            <div class=\"card-body\">
                <div class=\"new-user-info\">
                    ";
        // line 14
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                    <div class=\"row\">
                         <div class=\"row\">
                    <div class=\"form-group col-md-6\">
                            <label class=\"form-label\" for=\"nom\">Nom:</label>
                            ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "nom", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control", "id" => "nom", "placeholder" => "Nom"]]);
        yield "
                            ";
        // line 20
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "nom", [], "any", false, false, false, 20), "vars", [], "any", false, false, false, 20), "errors", [], "any", false, false, false, 20)) > 0)) {
            // line 21
            yield "                                <div class=\"invalid-feedback d-block\">
                                    ";
            // line 22
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "nom", [], "any", false, false, false, 22), 'errors');
            yield "
                                </div>
                            ";
        }
        // line 25
        yield "                        </div>

                        <div class=\"form-group col-md-6\">
                            <label class=\"form-label\" for=\"prenom\">Prénom:</label>
                            ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "prenom", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control", "id" => "prenom", "placeholder" => "Prénom"]]);
        yield "
                            ";
        // line 30
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "prenom", [], "any", false, false, false, 30), "vars", [], "any", false, false, false, 30), "errors", [], "any", false, false, false, 30)) > 0)) {
            // line 31
            yield "                                <div class=\"invalid-feedback d-block\">
                                    ";
            // line 32
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "prenom", [], "any", false, false, false, 32), 'errors');
            yield "
                                </div>
                            ";
        }
        // line 35
        yield "                        </div>

                        <div class=\"form-group col-md-6\">
                            <label class=\"form-label\" for=\"email\">Email:</label>
                            ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "email", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control", "id" => "email", "placeholder" => "Email"]]);
        yield "
                            ";
        // line 40
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "email", [], "any", false, false, false, 40), "vars", [], "any", false, false, false, 40), "errors", [], "any", false, false, false, 40)) > 0)) {
            // line 41
            yield "                                    <div class=\"invalid-feedback d-block\">
                                        ";
            // line 42
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "email", [], "any", false, false, false, 42), 'errors');
            yield "
                                    </div>
                                ";
        }
        // line 45
        yield "                        </div>
                        
                        <div class=\"form-group col-md-6\">
                            <label class=\"form-label\" for=\"roles\">role :</label>
                            ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "roles", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control", "id" => "roles"]]);
        yield "
                        </div>
                        
                        <div class=\"form-group col-md-6\">
                            <label class=\"form-label\" for=\"password\">Password:</label>
                            
                            ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "password", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control", "id" => "password", "placeholder" => "Password"]]);
        yield "
                            ";
        // line 56
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "password", [], "any", false, false, false, 56), "vars", [], "any", false, false, false, 56), "errors", [], "any", false, false, false, 56)) > 0)) {
            // line 57
            yield "                             <div class=\"invalid-feedback d-block\">

                                    ";
            // line 59
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "password", [], "any", false, false, false, 59), 'errors');
            yield "
                            </div>
                            ";
        }
        // line 62
        yield "                        </div>
                    </div>
                    <div class=\"form-group text-center mt-3\">
                        <button type=\"submit\" class=\"btn btn-primary\">Save</button>
                    </div>
                    ";
        // line 67
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"text-center mt-3\">
    <a href=\"";
        // line 75
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
        return "user/new.html.twig";
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
        return array (  202 => 75,  191 => 67,  184 => 62,  178 => 59,  174 => 57,  172 => 56,  168 => 55,  159 => 49,  153 => 45,  147 => 42,  144 => 41,  142 => 40,  138 => 39,  132 => 35,  126 => 32,  123 => 31,  121 => 30,  117 => 29,  111 => 25,  105 => 22,  102 => 21,  100 => 20,  96 => 19,  88 => 14,  76 => 4,  63 => 3,  40 => 1,);
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
                    <h4 class=\"card-title\">New User Information</h4>
                </div>
            </div>
            <div class=\"card-body\">
                <div class=\"new-user-info\">
                    {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
                    <div class=\"row\">
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
                            <label class=\"form-label\" for=\"roles\">role :</label>
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
", "user/new.html.twig", "C:\\xampp1\\htdocs\\integration_workshop_user1\\templates\\user\\new.html.twig");
    }
}
