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

/* security/login.html.twig */
class __TwigTemplate_4e619dd490b84cc258713a3017f46076 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Connexion | GreenBridge</title>
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap\" rel=\"stylesheet\">
    <style>
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
            background: url('https://source.unsplash.com/1600x900/?nature,green') no-repeat center center/cover;
            position: relative;
            overflow: hidden;
        }

        /* Conteneur du formulaire */
        .login-container {
            background: rgba(255, 255, 255, 0.98);
            padding: 2.5rem;
            border-radius: 12px;
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
            animation: fadeIn 1s ease-in-out;
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        /* Animation d'apparition */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .login-container h1 {
            font-size: 2rem;
            color: #2E7D32;
            font-weight: 600;
            margin-bottom: 1.5rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
            text-align: left;
        }

        .form-group label {
            font-weight: 500;
            color: #2E7D32;
            display: block;
            margin-bottom: 8px;
        }

        .form-control {
            width: 100%;
            padding: 12px;
            font-size: 1rem;
            border: 1px solid #ddd;
            border-radius: 8px;
            background: white;
            color: #333;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .form-control:focus {
            border-color: #4CAF50;
            box-shadow: 0 0 8px rgba(76, 175, 80, 0.3);
            outline: none;
        }

        .btn-primary {
            width: 100%;
            background: #4CAF50;
            border: none;
            padding: 14px;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            color: white;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.2s ease;
            margin-top: 15px;
        }

        .btn-primary:hover {
            background: #43A047;
            transform: translateY(-2px);
        }

        .register-link {
            display: block;
            margin-top: 20px;
            color: #4CAF50;
            font-weight: 500;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .register-link:hover {
            color: #2E7D32;
            text-decoration: underline;
        }

        .alert {
            font-size: 0.9rem;
            color: #D32F2F;
            background: #FFEBEE;
            padding: 10px;
            border-radius: 6px;
            margin-bottom: 15px;
            animation: fadeIn 0.5s ease;
        }

        .leaf-icon {
            font-size: 3rem;
            color: #4CAF50;
            margin-bottom: 15px;
            animation: leafFloat 3s infinite ease-in-out;
        }

        @keyframes leafFloat {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
    </style>
</head>
<body>

<div class=\"login-container\">
    <div class=\"leaf-icon\">🌿</div>
    <h1>Bienvenue sur GreenBridge</h1>

    ";
        // line 144
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 144, $this->source); })())) {
            // line 145
            yield "        <div class=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 145, $this->source); })()), "messageKey", [], "any", false, false, false, 145), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 145, $this->source); })()), "messageData", [], "any", false, false, false, 145), "security"), "html", null, true);
            yield "</div>
    ";
        }
        // line 147
        yield "
    ";
        // line 148
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 148, $this->source); })()), "user", [], "any", false, false, false, 148)) {
            // line 149
            yield "        <div class=\"mb-3\">
            Vous êtes connecté en tant que ";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 150, $this->source); })()), "user", [], "any", false, false, false, 150), "userIdentifier", [], "any", false, false, false, 150), "html", null, true);
            yield ",
            <a href=\"";
            // line 151
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"register-link\">Déconnexion</a>
        </div>
    ";
        }
        // line 154
        yield "
<form method=\"post\">
    <div class=\"form-group\">
        <label for=\"inputEmail\">Adresse Email</label>
        <input type=\"email\" name=\"email\" id=\"inputEmail\" class=\"form-control\" required autofocus autocomplete=\"off\" value=\"";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 158, $this->source); })()), "html", null, true);
        yield "\" placeholder=\"Entrez l' adresse email\">
    </div>

    <div class=\"form-group\">
        <label for=\"inputPassword\">Mot de passe</label>
        <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" required autocomplete=\"new-password\" value=\"\" placeholder=\"Entrez le mot de passe \">
    </div>

    <!-- 🔹 Ajout du lien \"Mot de passe oublié ?\" -->
    <div style=\"text-align: right; margin-bottom: 15px;\">
        <a href=\"";
        // line 168
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        yield "\" class=\"register-link\">Mot de passe oublié ?</a>
    </div>

    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

    <div class=\"form-group\">
        <label>
            <input type=\"checkbox\" name=\"_remember_me\"> Se souvenir de moi
        </label>
    </div>

    <button class=\"btn-primary\" type=\"submit\">
        Se connecter
    </button> 
    

     
 
</form>
    

<a href=\"";
        // line 189
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"btn-primary\" style=\"display: block; text-align: center; margin-top: 15px;\">
    S'inscrire
</a>
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
        return "security/login.html.twig";
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
        return array (  265 => 189,  244 => 171,  238 => 168,  225 => 158,  219 => 154,  213 => 151,  209 => 150,  206 => 149,  204 => 148,  201 => 147,  195 => 145,  193 => 144,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Connexion | GreenBridge</title>
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap\" rel=\"stylesheet\">
    <style>
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
            background: url('https://source.unsplash.com/1600x900/?nature,green') no-repeat center center/cover;
            position: relative;
            overflow: hidden;
        }

        /* Conteneur du formulaire */
        .login-container {
            background: rgba(255, 255, 255, 0.98);
            padding: 2.5rem;
            border-radius: 12px;
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
            animation: fadeIn 1s ease-in-out;
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        /* Animation d'apparition */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .login-container h1 {
            font-size: 2rem;
            color: #2E7D32;
            font-weight: 600;
            margin-bottom: 1.5rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
            text-align: left;
        }

        .form-group label {
            font-weight: 500;
            color: #2E7D32;
            display: block;
            margin-bottom: 8px;
        }

        .form-control {
            width: 100%;
            padding: 12px;
            font-size: 1rem;
            border: 1px solid #ddd;
            border-radius: 8px;
            background: white;
            color: #333;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .form-control:focus {
            border-color: #4CAF50;
            box-shadow: 0 0 8px rgba(76, 175, 80, 0.3);
            outline: none;
        }

        .btn-primary {
            width: 100%;
            background: #4CAF50;
            border: none;
            padding: 14px;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            color: white;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.2s ease;
            margin-top: 15px;
        }

        .btn-primary:hover {
            background: #43A047;
            transform: translateY(-2px);
        }

        .register-link {
            display: block;
            margin-top: 20px;
            color: #4CAF50;
            font-weight: 500;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .register-link:hover {
            color: #2E7D32;
            text-decoration: underline;
        }

        .alert {
            font-size: 0.9rem;
            color: #D32F2F;
            background: #FFEBEE;
            padding: 10px;
            border-radius: 6px;
            margin-bottom: 15px;
            animation: fadeIn 0.5s ease;
        }

        .leaf-icon {
            font-size: 3rem;
            color: #4CAF50;
            margin-bottom: 15px;
            animation: leafFloat 3s infinite ease-in-out;
        }

        @keyframes leafFloat {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
    </style>
</head>
<body>

<div class=\"login-container\">
    <div class=\"leaf-icon\">🌿</div>
    <h1>Bienvenue sur GreenBridge</h1>

    {% if error %}
        <div class=\"alert\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    {% if app.user %}
        <div class=\"mb-3\">
            Vous êtes connecté en tant que {{ app.user.userIdentifier }},
            <a href=\"{{ path('app_logout') }}\" class=\"register-link\">Déconnexion</a>
        </div>
    {% endif %}

<form method=\"post\">
    <div class=\"form-group\">
        <label for=\"inputEmail\">Adresse Email</label>
        <input type=\"email\" name=\"email\" id=\"inputEmail\" class=\"form-control\" required autofocus autocomplete=\"off\" value=\"{{ last_username }}\" placeholder=\"Entrez l' adresse email\">
    </div>

    <div class=\"form-group\">
        <label for=\"inputPassword\">Mot de passe</label>
        <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" required autocomplete=\"new-password\" value=\"\" placeholder=\"Entrez le mot de passe \">
    </div>

    <!-- 🔹 Ajout du lien \"Mot de passe oublié ?\" -->
    <div style=\"text-align: right; margin-bottom: 15px;\">
        <a href=\"{{ path('app_forgot_password_request') }}\" class=\"register-link\">Mot de passe oublié ?</a>
    </div>

    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

    <div class=\"form-group\">
        <label>
            <input type=\"checkbox\" name=\"_remember_me\"> Se souvenir de moi
        </label>
    </div>

    <button class=\"btn-primary\" type=\"submit\">
        Se connecter
    </button> 
    

     
 
</form>
    

<a href=\"{{ path('app_register') }}\" class=\"btn-primary\" style=\"display: block; text-align: center; margin-top: 15px;\">
    S'inscrire
</a>
</div>

</body>
</html>", "security/login.html.twig", "C:\\xampp1\\htdocs\\integration_workshop_user1\\templates\\security\\login.html.twig");
    }
}
