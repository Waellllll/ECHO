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

/* register/register.html.twig */
class __TwigTemplate_b18f32b0556b218e29ee06356b30d5de extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register/register.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Inscription | GreenBridge</title>
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap\" rel=\"stylesheet\">
    <style>
        /* Réutilisation du style du login */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url('https://source.unsplash.com/1600x900/?nature,agriculture') no-repeat center center/cover;
            position: relative;
            overflow: hidden;
        }

        .glow {
            position: absolute;
            width: 300px;
            height: 300px;
            background: rgba(76, 175, 80, 0.6);
            border-radius: 50%;
            filter: blur(80px);
            animation: moveGlow 6s infinite alternate ease-in-out;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.95);
            padding: 3rem;
            border-radius: 15px;
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.3);
            width: 450px;
            text-align: center;
            animation: fadeIn 1s ease-in-out, scaleUp 1s ease-out;
            backdrop-filter: blur(10px);
            position: relative;
            z-index: 1;
        }

        .form-group {
            margin-bottom: 1.5rem;
            text-align: left;
        }

        .form-control {
            width: 100%;
            padding: 14px;
            font-size: 1rem;
            border: 2px solid #81C784;
            border-radius: 10px;
            background: white;
            color: #333;
        }

        .btn-primary {
            width: 100%;
            background: linear-gradient(135deg, #43A047, #2E7D32);
            border: none;
            padding: 16px;
            border-radius: 10px;
            font-size: 1.2rem;
            font-weight: bold;
            color: white;
            cursor: pointer;
            transition: transform 0.2s ease-in-out, background 0.3s ease-in-out;
            margin-top: 15px;
        }
    </style>
</head>
<body>

<div class=\"glow\"></div>
<div class=\"glow\"></div>

<div class=\"login-container\">
    <h1>Inscription</h1>

    ";
        // line 89
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
    
    <div class=\"form-group\">
        <label for=\"nom\">Nom:</label>
        ";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "nom", [], "any", false, false, false, 93), 'widget', ["attr" => ["class" => "form-control", "id" => "nom", "placeholder" => "Nom"]]);
        yield "
        ";
        // line 94
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "nom", [], "any", false, false, false, 94), "vars", [], "any", false, false, false, 94), "errors", [], "any", false, false, false, 94)) > 0)) {
            // line 95
            yield "            <div class=\"invalid-feedback d-block\">
                ";
            // line 96
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "nom", [], "any", false, false, false, 96), 'errors');
            yield "
            </div>
        ";
        }
        // line 99
        yield "    </div>

    <div class=\"form-group\">
        <label for=\"prenom\">Prénom:</label>
        ";
        // line 103
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "prenom", [], "any", false, false, false, 103), 'widget', ["attr" => ["class" => "form-control", "id" => "prenom", "placeholder" => "Prénom"]]);
        yield "
        ";
        // line 104
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "prenom", [], "any", false, false, false, 104), "vars", [], "any", false, false, false, 104), "errors", [], "any", false, false, false, 104)) > 0)) {
            // line 105
            yield "            <div class=\"invalid-feedback d-block\">
                ";
            // line 106
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "prenom", [], "any", false, false, false, 106), 'errors');
            yield "
            </div>
        ";
        }
        // line 109
        yield "    </div>

    <div class=\"form-group\">
        <label for=\"email\">Email:</label>
        ";
        // line 113
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "email", [], "any", false, false, false, 113), 'widget', ["attr" => ["class" => "form-control", "id" => "email", "placeholder" => "Email"]]);
        yield "
        ";
        // line 114
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "email", [], "any", false, false, false, 114), "vars", [], "any", false, false, false, 114), "errors", [], "any", false, false, false, 114)) > 0)) {
            // line 115
            yield "            <div class=\"invalid-feedback d-block\">
                ";
            // line 116
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "email", [], "any", false, false, false, 116), 'errors');
            yield "
            </div>
        ";
        }
        // line 119
        yield "    </div>

<div class=\"form-group\">
        <label for=\"roles\">Niveau d'agriculteur:</label>
        ";
        // line 123
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "roles", [], "any", false, false, false, 123), 'widget', ["attr" => ["class" => "form-control", "id" => "roles"]]);
        yield "
    </div>

    <div class=\"form-group\">
        <label for=\"password\" class=\"form-label\">Mot de passe :</label>
        ";
        // line 128
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "password", [], "any", false, false, false, 128), 'widget', ["attr" => ["class" => "form-control", "id" => "password", "placeholder" => "Entrez votre mot de passe"]]);
        yield "
        ";
        // line 129
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "password", [], "any", false, false, false, 129), "vars", [], "any", false, false, false, 129), "errors", [], "any", false, false, false, 129)) > 0)) {
            // line 130
            yield "            <div class=\"invalid-feedback d-block\">
                ";
            // line 131
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "password", [], "any", false, false, false, 131), 'errors');
            yield "
            </div>
        ";
        }
        // line 134
        yield "    </div>

    <button type=\"submit\" class=\"btn-primary\">S'inscrire</button>

    ";
        // line 138
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), 'form_end');
        yield "

    <a href=\"";
        // line 140
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"register-link\">Déjà un compte ? Connectez-vous</a>
</div>

</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "register/register.html.twig";
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
        return array (  242 => 140,  237 => 138,  231 => 134,  225 => 131,  222 => 130,  220 => 129,  216 => 128,  208 => 123,  202 => 119,  196 => 116,  193 => 115,  191 => 114,  187 => 113,  181 => 109,  175 => 106,  172 => 105,  170 => 104,  166 => 103,  160 => 99,  154 => 96,  151 => 95,  149 => 94,  145 => 93,  138 => 89,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Inscription | GreenBridge</title>
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap\" rel=\"stylesheet\">
    <style>
        /* Réutilisation du style du login */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url('https://source.unsplash.com/1600x900/?nature,agriculture') no-repeat center center/cover;
            position: relative;
            overflow: hidden;
        }

        .glow {
            position: absolute;
            width: 300px;
            height: 300px;
            background: rgba(76, 175, 80, 0.6);
            border-radius: 50%;
            filter: blur(80px);
            animation: moveGlow 6s infinite alternate ease-in-out;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.95);
            padding: 3rem;
            border-radius: 15px;
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.3);
            width: 450px;
            text-align: center;
            animation: fadeIn 1s ease-in-out, scaleUp 1s ease-out;
            backdrop-filter: blur(10px);
            position: relative;
            z-index: 1;
        }

        .form-group {
            margin-bottom: 1.5rem;
            text-align: left;
        }

        .form-control {
            width: 100%;
            padding: 14px;
            font-size: 1rem;
            border: 2px solid #81C784;
            border-radius: 10px;
            background: white;
            color: #333;
        }

        .btn-primary {
            width: 100%;
            background: linear-gradient(135deg, #43A047, #2E7D32);
            border: none;
            padding: 16px;
            border-radius: 10px;
            font-size: 1.2rem;
            font-weight: bold;
            color: white;
            cursor: pointer;
            transition: transform 0.2s ease-in-out, background 0.3s ease-in-out;
            margin-top: 15px;
        }
    </style>
</head>
<body>

<div class=\"glow\"></div>
<div class=\"glow\"></div>

<div class=\"login-container\">
    <h1>Inscription</h1>

    {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
    
    <div class=\"form-group\">
        <label for=\"nom\">Nom:</label>
        {{ form_widget(form.nom, {'attr': {'class': 'form-control', 'id': 'nom', 'placeholder': 'Nom'}}) }}
        {% if form.nom.vars.errors|length > 0 %}
            <div class=\"invalid-feedback d-block\">
                {{ form_errors(form.nom) }}
            </div>
        {% endif %}
    </div>

    <div class=\"form-group\">
        <label for=\"prenom\">Prénom:</label>
        {{ form_widget(form.prenom, {'attr': {'class': 'form-control', 'id': 'prenom', 'placeholder': 'Prénom'}}) }}
        {% if form.prenom.vars.errors|length > 0 %}
            <div class=\"invalid-feedback d-block\">
                {{ form_errors(form.prenom) }}
            </div>
        {% endif %}
    </div>

    <div class=\"form-group\">
        <label for=\"email\">Email:</label>
        {{ form_widget(form.email, {'attr': {'class': 'form-control', 'id': 'email', 'placeholder': 'Email'}}) }}
        {% if form.email.vars.errors|length > 0 %}
            <div class=\"invalid-feedback d-block\">
                {{ form_errors(form.email) }}
            </div>
        {% endif %}
    </div>

<div class=\"form-group\">
        <label for=\"roles\">Niveau d'agriculteur:</label>
        {{ form_widget(form.roles, {'attr': {'class': 'form-control', 'id': 'roles'}}) }}
    </div>

    <div class=\"form-group\">
        <label for=\"password\" class=\"form-label\">Mot de passe :</label>
        {{ form_widget(form.password, {'attr': {'class': 'form-control', 'id': 'password', 'placeholder': 'Entrez votre mot de passe'}}) }}
        {% if form.password.vars.errors|length > 0 %}
            <div class=\"invalid-feedback d-block\">
                {{ form_errors(form.password) }}
            </div>
        {% endif %}
    </div>

    <button type=\"submit\" class=\"btn-primary\">S'inscrire</button>

    {{ form_end(form) }}

    <a href=\"{{ path('app_login') }}\" class=\"register-link\">Déjà un compte ? Connectez-vous</a>
</div>

</body>
</html>", "register/register.html.twig", "C:\\Users\\OmarA\\OneDrive\\Bureau\\integration_workshop_user1\\templates\\register\\register.html.twig");
    }
}
