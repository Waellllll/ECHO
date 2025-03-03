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

/* reset_password/request.html.twig */
class __TwigTemplate_a69487c510a6dcd5b1b8952a0357ac1f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/request.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/request.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Réinitialiser votre mot de passe | GreenBridge</title>
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

        .alert {
            font-size: 0.9rem;
            color: #D32F2F;
            background: #FFEBEE;
            padding: 10px;
            border-radius: 6px;
            margin-bottom: 15px;
            animation: fadeIn 0.5s ease;
        }

        small {
            display: block;
            margin-top: 10px;
            font-size: 0.9rem;
            color: #666;
        }
    </style>
</head>
<body>

<div class=\"login-container\">
    <h1>Réinitialiser votre mot de passe</h1>

    ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 124, $this->source); })()), "flashes", ["reset_password_error"], "method", false, false, false, 124));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 125
            yield "        <div class=\"alert alert-danger\" role=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash_error"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flash_error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        yield "
    ";
        // line 128
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 128, $this->source); })()), 'form_start');
        yield "
        <div class=\"form-group\">
            <label for=\"inputEmail\">Adresse Email</label>
            ";
        // line 131
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 131, $this->source); })()), "email", [], "any", false, false, false, 131), 'row', ["attr" => ["class" => "form-control", "id" => "inputEmail"]]);
        yield "
        </div>

        <div>
            <small>
                Entrez votre adresse email, et nous vous enverrons un lien pour réinitialiser votre mot de passe.
            </small>
        </div>

        <button class=\"btn-primary\" type=\"submit\">Envoyer l'email de réinitialisation</button>
    ";
        // line 141
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 141, $this->source); })()), 'form_end');
        yield "
</div>

</body>
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
        return "reset_password/request.html.twig";
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
        return array (  208 => 141,  195 => 131,  189 => 128,  186 => 127,  177 => 125,  173 => 124,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Réinitialiser votre mot de passe | GreenBridge</title>
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

        .alert {
            font-size: 0.9rem;
            color: #D32F2F;
            background: #FFEBEE;
            padding: 10px;
            border-radius: 6px;
            margin-bottom: 15px;
            animation: fadeIn 0.5s ease;
        }

        small {
            display: block;
            margin-top: 10px;
            font-size: 0.9rem;
            color: #666;
        }
    </style>
</head>
<body>

<div class=\"login-container\">
    <h1>Réinitialiser votre mot de passe</h1>

    {% for flash_error in app.flashes('reset_password_error') %}
        <div class=\"alert alert-danger\" role=\"alert\">{{ flash_error }}</div>
    {% endfor %}

    {{ form_start(requestForm) }}
        <div class=\"form-group\">
            <label for=\"inputEmail\">Adresse Email</label>
            {{ form_row(requestForm.email, { 'attr': { 'class': 'form-control', 'id': 'inputEmail' } }) }}
        </div>

        <div>
            <small>
                Entrez votre adresse email, et nous vous enverrons un lien pour réinitialiser votre mot de passe.
            </small>
        </div>

        <button class=\"btn-primary\" type=\"submit\">Envoyer l'email de réinitialisation</button>
    {{ form_end(requestForm) }}
</div>

</body>
</html>
", "reset_password/request.html.twig", "C:\\xampp1\\htdocs\\integration_workshop_user1\\templates\\reset_password\\request.html.twig");
    }
}
