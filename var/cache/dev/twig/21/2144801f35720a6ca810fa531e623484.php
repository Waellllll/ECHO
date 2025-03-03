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

/* user/profile.html.twig */
class __TwigTemplate_7dd765330c0dfc8e00c81ccf78b639ef extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/profile.html.twig", 1);
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
        yield "<div class=\"container mt-5\">
    <h1 class=\"text-center mb-4\">Mon Profil</h1>

    <div class=\"row justify-content-center\">
        ";
        // line 8
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8)) {
            // line 9
            yield "        <div class=\"col-lg-6 col-md-8 col-sm-12\">
            <div class=\"card profile-card shadow-lg\">
                <div class=\"card-body\">
                    <h5 class=\"card-title text-center profile-header\">Informations Personnelles</h5>
                    <div class=\"profile-info\">
                        <p><strong>Nom :</strong> ";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "nom", [], "any", false, false, false, 14), "html", null, true);
            yield "</p>
                        <p><strong>Prénom :</strong> ";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15), "prenom", [], "any", false, false, false, 15), "html", null, true);
            yield "</p>
                        <p><strong>Email :</strong> ";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "email", [], "any", false, false, false, 16), "html", null, true);
            yield "</p>
                    </div>

                    <hr class=\"profile-divider\">
                    <h6 class=\"text-center profile-update-header\">Mettre à jour votre profil</h6>

                    <!-- Formulaire pour mettre à jour l'utilisateur -->
                    <form method=\"post\" class=\"profile-form\">
                        <div class=\"form-group\">
                            <label for=\"nom\" class=\"form-label\">Nom:</label>
                         ";
            // line 26
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
            yield "

                            ";
            // line 28
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "nom", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control", "id" => "nom", "placeholder" => "Nom"]]);
            yield "
                            ";
            // line 29
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "nom", [], "any", false, false, false, 29), "vars", [], "any", false, false, false, 29), "errors", [], "any", false, false, false, 29)) > 0)) {
                // line 30
                yield "                                <div class=\"invalid-feedback d-block\">
                                    ";
                // line 31
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "nom", [], "any", false, false, false, 31), 'errors');
                yield "
                                </div>
                            ";
            }
            // line 34
            yield "                        </div>
                          
                        <div class=\"form-group\">
                            <label for=\"prenom\" class=\"form-label\">Prénom:</label>
                            ";
            // line 38
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "prenom", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control", "id" => "prenom", "placeholder" => "Prénom"]]);
            yield "
                            ";
            // line 39
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "prenom", [], "any", false, false, false, 39), "vars", [], "any", false, false, false, 39), "errors", [], "any", false, false, false, 39)) > 0)) {
                // line 40
                yield "                                <div class=\"invalid-feedback d-block\">
                                    ";
                // line 41
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "prenom", [], "any", false, false, false, 41), 'errors');
                yield "
                                </div>
                            ";
            }
            // line 44
            yield "                        </div>

                        <div class=\"form-group\">
                            <label for=\"email\" class=\"form-label\">Email:</label>
                            ";
            // line 48
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "email", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control", "id" => "email", "placeholder" => "Email"]]);
            yield "
                            ";
            // line 49
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "email", [], "any", false, false, false, 49), "vars", [], "any", false, false, false, 49), "errors", [], "any", false, false, false, 49)) > 0)) {
                // line 50
                yield "                                <div class=\"invalid-feedback d-block\">
                                    ";
                // line 51
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "email", [], "any", false, false, false, 51), 'errors');
                yield "
                                </div>
                            ";
            }
            // line 54
            yield "                        </div>

                        <!-- Affichage du champ mot de passe -->
                        <div class=\"form-group\">
                            <label for=\"password\" class=\"form-label\">Mot de passe:</label>
                            ";
            // line 59
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "password", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control", "id" => "password", "placeholder" => "Nouveau mot de passe"]]);
            yield "
                            ";
            // line 60
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "password", [], "any", false, false, false, 60), "vars", [], "any", false, false, false, 60), "errors", [], "any", false, false, false, 60)) > 0)) {
                // line 61
                yield "                                <div class=\"invalid-feedback d-block\">
                                    ";
                // line 62
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "password", [], "any", false, false, false, 62), 'errors');
                yield "
                                </div>
                            ";
            }
            // line 65
            yield "                        </div>

                        <div class=\"text-center mt-4\">
                            <button type=\"submit\" class=\"btn btn-primary profile-submit-btn\">Mettre à jour</button>
                        </div>
                        ";
            // line 70
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), 'form_end');
            yield "
                    </form>

                    <!-- Formulaire pour supprimer le compte -->
                    <div class=\"text-center mt-4\">
                        <hr class=\"profile-divider\">
                        <form method=\"post\" action=\"";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_delete_self", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76), "id", [], "any", false, false, false, 76)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer votre compte ?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete_account"), "html", null, true);
            yield "\">
                            <button type=\"submit\" class=\"btn btn-danger profile-delete-btn\">Supprimer mon compte</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        ";
        } else {
            // line 86
            yield "        <div class=\"text-center\">
            <p>Utilisateur non connecté</p>
            <a href=\"";
            // line 88
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"btn btn-secondary\">Se connecter</a>
        </div>
        ";
        }
        // line 91
        yield "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 95
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 96
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        /* Fond de la carte et ombres */
        .profile-card {
            background: #f9f9f9;
            border-radius: 15px;
            padding: 30px;
        }

        /* Titre principal */
        .profile-header {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }

        /* Section des informations de l'utilisateur */
        .profile-info p {
            font-size: 16px;
            line-height: 1.6;
            color: #555;
        }

        /* Style de séparation entre les sections */
        .profile-divider {
            border: 0;
            border-top: 2px solid #ddd;
            margin: 20px 0;
        }

        /* Titre pour la section de mise à jour */
        .profile-update-header {
            font-size: 20px;
            color: #007bff;
            font-weight: 600;
        }

        /* Champs du formulaire */
        .profile-form .form-group {
            position: relative;
            margin-bottom: 25px;
        }

        .profile-form .form-control {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 25px;
            font-size: 16px;
            padding: 15px 20px;
            transition: all 0.3s ease;
            width: 100%;
        }

        /* Effet de survol et focus sur les champs */
        .profile-form .form-control:focus {
            background-color: #fff;
            border-color: #007bff;
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.25);
        }

        /* Labels flottants (effet animé) */
        .profile-form .form-label {
            position: absolute;
            top: 15px;
            left: 20px;
            font-size: 16px;
            color: #aaa;
            transition: all 0.3s ease;
        }

        /* Effet lorsque l'utilisateur clique dans le champ */
        .profile-form .form-control:focus ~ .form-label,
        .profile-form .form-control:not(:placeholder-shown) ~ .form-label {
            top: -10px;
            left: 20px;
            font-size: 14px;
            color: #007bff;
        }

        /* Boutons personnalisés */
        .profile-submit-btn {
            background-color: #28a745;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 25px;
            transition: background-color 0.3s ease;
        }

        .profile-submit-btn:hover {
            background-color: #218838;
        }

        .profile-delete-btn {
            background-color: #dc3545;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 25px;
            transition: background-color 0.3s ease;
        }

        .profile-delete-btn:hover {
            background-color: #c82333;
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
        return "user/profile.html.twig";
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
        return array (  265 => 96,  252 => 95,  239 => 91,  233 => 88,  229 => 86,  217 => 77,  213 => 76,  204 => 70,  197 => 65,  191 => 62,  188 => 61,  186 => 60,  182 => 59,  175 => 54,  169 => 51,  166 => 50,  164 => 49,  160 => 48,  154 => 44,  148 => 41,  145 => 40,  143 => 39,  139 => 38,  133 => 34,  127 => 31,  124 => 30,  122 => 29,  118 => 28,  113 => 26,  100 => 16,  96 => 15,  92 => 14,  85 => 9,  83 => 8,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container mt-5\">
    <h1 class=\"text-center mb-4\">Mon Profil</h1>

    <div class=\"row justify-content-center\">
        {% if app.user %}
        <div class=\"col-lg-6 col-md-8 col-sm-12\">
            <div class=\"card profile-card shadow-lg\">
                <div class=\"card-body\">
                    <h5 class=\"card-title text-center profile-header\">Informations Personnelles</h5>
                    <div class=\"profile-info\">
                        <p><strong>Nom :</strong> {{ app.user.nom }}</p>
                        <p><strong>Prénom :</strong> {{ app.user.prenom }}</p>
                        <p><strong>Email :</strong> {{ app.user.email }}</p>
                    </div>

                    <hr class=\"profile-divider\">
                    <h6 class=\"text-center profile-update-header\">Mettre à jour votre profil</h6>

                    <!-- Formulaire pour mettre à jour l'utilisateur -->
                    <form method=\"post\" class=\"profile-form\">
                        <div class=\"form-group\">
                            <label for=\"nom\" class=\"form-label\">Nom:</label>
                         {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

                            {{ form_widget(form.nom, {'attr': {'class': 'form-control', 'id': 'nom', 'placeholder': 'Nom'}}) }}
                            {% if form.nom.vars.errors|length > 0 %}
                                <div class=\"invalid-feedback d-block\">
                                    {{ form_errors(form.nom) }}
                                </div>
                            {% endif %}
                        </div>
                          
                        <div class=\"form-group\">
                            <label for=\"prenom\" class=\"form-label\">Prénom:</label>
                            {{ form_widget(form.prenom, {'attr': {'class': 'form-control', 'id': 'prenom', 'placeholder': 'Prénom'}}) }}
                            {% if form.prenom.vars.errors|length > 0 %}
                                <div class=\"invalid-feedback d-block\">
                                    {{ form_errors(form.prenom) }}
                                </div>
                            {% endif %}
                        </div>

                        <div class=\"form-group\">
                            <label for=\"email\" class=\"form-label\">Email:</label>
                            {{ form_widget(form.email, {'attr': {'class': 'form-control', 'id': 'email', 'placeholder': 'Email'}}) }}
                            {% if form.email.vars.errors|length > 0 %}
                                <div class=\"invalid-feedback d-block\">
                                    {{ form_errors(form.email) }}
                                </div>
                            {% endif %}
                        </div>

                        <!-- Affichage du champ mot de passe -->
                        <div class=\"form-group\">
                            <label for=\"password\" class=\"form-label\">Mot de passe:</label>
                            {{ form_widget(form.password, {'attr': {'class': 'form-control', 'id': 'password', 'placeholder': 'Nouveau mot de passe'}}) }}
                            {% if form.password.vars.errors|length > 0 %}
                                <div class=\"invalid-feedback d-block\">
                                    {{ form_errors(form.password) }}
                                </div>
                            {% endif %}
                        </div>

                        <div class=\"text-center mt-4\">
                            <button type=\"submit\" class=\"btn btn-primary profile-submit-btn\">Mettre à jour</button>
                        </div>
                        {{ form_end(form) }}
                    </form>

                    <!-- Formulaire pour supprimer le compte -->
                    <div class=\"text-center mt-4\">
                        <hr class=\"profile-divider\">
                        <form method=\"post\" action=\"{{ path('app_user_delete_self', {'id': app.user.id}) }}\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer votre compte ?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_account') }}\">
                            <button type=\"submit\" class=\"btn btn-danger profile-delete-btn\">Supprimer mon compte</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        {% else %}
        <div class=\"text-center\">
            <p>Utilisateur non connecté</p>
            <a href=\"{{ path('app_login') }}\" class=\"btn btn-secondary\">Se connecter</a>
        </div>
        {% endif %}
    </div>
</div>
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        /* Fond de la carte et ombres */
        .profile-card {
            background: #f9f9f9;
            border-radius: 15px;
            padding: 30px;
        }

        /* Titre principal */
        .profile-header {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }

        /* Section des informations de l'utilisateur */
        .profile-info p {
            font-size: 16px;
            line-height: 1.6;
            color: #555;
        }

        /* Style de séparation entre les sections */
        .profile-divider {
            border: 0;
            border-top: 2px solid #ddd;
            margin: 20px 0;
        }

        /* Titre pour la section de mise à jour */
        .profile-update-header {
            font-size: 20px;
            color: #007bff;
            font-weight: 600;
        }

        /* Champs du formulaire */
        .profile-form .form-group {
            position: relative;
            margin-bottom: 25px;
        }

        .profile-form .form-control {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 25px;
            font-size: 16px;
            padding: 15px 20px;
            transition: all 0.3s ease;
            width: 100%;
        }

        /* Effet de survol et focus sur les champs */
        .profile-form .form-control:focus {
            background-color: #fff;
            border-color: #007bff;
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.25);
        }

        /* Labels flottants (effet animé) */
        .profile-form .form-label {
            position: absolute;
            top: 15px;
            left: 20px;
            font-size: 16px;
            color: #aaa;
            transition: all 0.3s ease;
        }

        /* Effet lorsque l'utilisateur clique dans le champ */
        .profile-form .form-control:focus ~ .form-label,
        .profile-form .form-control:not(:placeholder-shown) ~ .form-label {
            top: -10px;
            left: 20px;
            font-size: 14px;
            color: #007bff;
        }

        /* Boutons personnalisés */
        .profile-submit-btn {
            background-color: #28a745;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 25px;
            transition: background-color 0.3s ease;
        }

        .profile-submit-btn:hover {
            background-color: #218838;
        }

        .profile-delete-btn {
            background-color: #dc3545;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 25px;
            transition: background-color 0.3s ease;
        }

        .profile-delete-btn:hover {
            background-color: #c82333;
        }
    </style>
{% endblock %}
", "user/profile.html.twig", "C:\\xampp1\\htdocs\\integration_workshop_user1\\templates\\user\\profile.html.twig");
    }
}
