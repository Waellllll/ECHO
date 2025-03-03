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

/* user/index.html.twig */
class __TwigTemplate_84921886c248077a93bb1fac2371c963 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("baseback.html.twig", "user/index.html.twig", 1);
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
        yield "<div class=\"container-fluid content-inner mt-n5 py-0\">
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"card\" style=\"font-size: 0.875rem; padding: 1rem;\">
                <div class=\"card-header d-flex justify-content-between flex-wrap\" style=\"padding: 0.75rem 1rem;\">
                    <div class=\"header-title\">
                        <h4 class=\"card-title mb-0\" style=\"font-size: 1rem;\">User Index</h4>
                    </div>
                    <div class=\"\">
                        <!-- Ajout de margin-top pour faire baisser le bouton -->
                        <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        yield "\" class=\"text-center btn btn-primary btn-icon mt-4\" style=\"font-size: 0.875rem;\">
                            <i class=\"btn-inner\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 6v6m0 0v6m0-6h6m-6 0H6\" />
                                </svg>
                            </i>
                            <span>New User</span>
                        </a>
                    </div>
                </div>
                <div class=\"card-body\" style=\"padding: 1rem;\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered\" style=\"font-size: 0.875rem;\">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nom et Prenom</th>
                                    <th>Email</th>
                                    <th>Roles</th>
                                    <th>Password</th>
                                    <th class=\"text-center\">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 38, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 39
            yield "                                    <tr>
                                        <td>";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 40), "html", null, true);
            yield "</td>
                                        <td>";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 41), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 41), "html", null, true);
            yield "</td>

                                        <td>";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 43), "html", null, true);
            yield "</td>
                                        <td>";
            // line 44
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 44)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 44)), "html", null, true)) : (""));
            yield "</td>
                                        <td>";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "password", [], "any", false, false, false, 45), "html", null, true);
            yield "</td>
                                        <td class=\"text-center\">
                                            <!-- View User Icon -->
                                            <a href=\"";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-icon text-primary\" data-bs-toggle=\"tooltip\" title=\"View User\" style=\"font-size: 0.75rem;\">
                                                <span class=\"btn-inner\">
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-20\" width=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\">
                                                        <path d=\"M12 10.5C13.3807 10.5 14.5 9.38071 14.5 8C14.5 6.61929 13.3807 5.5 12 5.5C10.6193 5.5 9.5 6.61929 9.5 8C9.5 9.38071 10.6193 10.5 12 10.5Z\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"></path>
                                                        <path d=\"M12 14C8.13401 14 4.5 15.5 4.5 18C4.5 19.5 8.13401 21 12 21C15.866 21 19.5 19.5 19.5 18C19.5 15.5 15.866 14 12 14Z\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"></path>
                                                    </svg>
                                                </span>
                                            </a>
                                            <!-- Edit User Icon (avec un crayon dans un carré) -->
                                            <a href=\"";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 57)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-icon text-primary\" data-bs-toggle=\"tooltip\" title=\"Edit User\" style=\"font-size: 0.75rem;\">
                                                <span class=\"btn-inner\">
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-20\" width=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\">
                                                        <path d=\"M19.25 4.75L9.25 14.75\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"></path>
                                                        <path d=\"M14.75 9.25L19.25 4.75\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"></path>
                                                        <path d=\"M4.75 19.25V4.75\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"></path>
                                                    </svg>
                                                </span>
                                            </a>
                                            <a href=\"";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 66)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-icon text-danger\" data-bs-toggle=\"tooltip\" title=\"Delete User\" style=\"font-size: 0.75rem;\">
                                                <span class=\"btn-inner\">
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-20\" width=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\">
                                                        <path d=\"M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"></path>
                                                        <path d=\"M20.708 6.23975H3.75\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"></path>
                                                        <path d=\"M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"></path>
                                                    </svg>
                                                </span>
                                            </a>
                                        </td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        // line 77
        if (!$context['_iterated']) {
            // line 78
            yield "                                    <tr>
                                        <td colspan=\"6\" class=\"text-center\">No records found</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        yield "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
        return "user/index.html.twig";
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
        return array (  199 => 82,  190 => 78,  188 => 77,  172 => 66,  160 => 57,  148 => 48,  142 => 45,  138 => 44,  134 => 43,  127 => 41,  123 => 40,  120 => 39,  115 => 38,  88 => 14,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseback.html.twig' %}

{% block body %}
<div class=\"container-fluid content-inner mt-n5 py-0\">
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"card\" style=\"font-size: 0.875rem; padding: 1rem;\">
                <div class=\"card-header d-flex justify-content-between flex-wrap\" style=\"padding: 0.75rem 1rem;\">
                    <div class=\"header-title\">
                        <h4 class=\"card-title mb-0\" style=\"font-size: 1rem;\">User Index</h4>
                    </div>
                    <div class=\"\">
                        <!-- Ajout de margin-top pour faire baisser le bouton -->
                        <a href=\"{{ path('app_user_new') }}\" class=\"text-center btn btn-primary btn-icon mt-4\" style=\"font-size: 0.875rem;\">
                            <i class=\"btn-inner\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 6v6m0 0v6m0-6h6m-6 0H6\" />
                                </svg>
                            </i>
                            <span>New User</span>
                        </a>
                    </div>
                </div>
                <div class=\"card-body\" style=\"padding: 1rem;\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered\" style=\"font-size: 0.875rem;\">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nom et Prenom</th>
                                    <th>Email</th>
                                    <th>Roles</th>
                                    <th>Password</th>
                                    <th class=\"text-center\">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for user in users %}
                                    <tr>
                                        <td>{{ user.id }}</td>
                                        <td>{{ user.nom }} {{ user.prenom }}</td>

                                        <td>{{ user.email }}</td>
                                        <td>{{ user.roles ? user.roles|json_encode : '' }}</td>
                                        <td>{{ user.password }}</td>
                                        <td class=\"text-center\">
                                            <!-- View User Icon -->
                                            <a href=\"{{ path('app_user_show', {'id': user.id}) }}\" class=\"btn btn-sm btn-icon text-primary\" data-bs-toggle=\"tooltip\" title=\"View User\" style=\"font-size: 0.75rem;\">
                                                <span class=\"btn-inner\">
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-20\" width=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\">
                                                        <path d=\"M12 10.5C13.3807 10.5 14.5 9.38071 14.5 8C14.5 6.61929 13.3807 5.5 12 5.5C10.6193 5.5 9.5 6.61929 9.5 8C9.5 9.38071 10.6193 10.5 12 10.5Z\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"></path>
                                                        <path d=\"M12 14C8.13401 14 4.5 15.5 4.5 18C4.5 19.5 8.13401 21 12 21C15.866 21 19.5 19.5 19.5 18C19.5 15.5 15.866 14 12 14Z\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"></path>
                                                    </svg>
                                                </span>
                                            </a>
                                            <!-- Edit User Icon (avec un crayon dans un carré) -->
                                            <a href=\"{{ path('app_user_edit', {'id': user.id}) }}\" class=\"btn btn-sm btn-icon text-primary\" data-bs-toggle=\"tooltip\" title=\"Edit User\" style=\"font-size: 0.75rem;\">
                                                <span class=\"btn-inner\">
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-20\" width=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\">
                                                        <path d=\"M19.25 4.75L9.25 14.75\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"></path>
                                                        <path d=\"M14.75 9.25L19.25 4.75\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"></path>
                                                        <path d=\"M4.75 19.25V4.75\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"></path>
                                                    </svg>
                                                </span>
                                            </a>
                                            <a href=\"{{ path('app_user_delete', {'id': user.id}) }}\" class=\"btn btn-sm btn-icon text-danger\" data-bs-toggle=\"tooltip\" title=\"Delete User\" style=\"font-size: 0.75rem;\">
                                                <span class=\"btn-inner\">
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-20\" width=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\">
                                                        <path d=\"M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"></path>
                                                        <path d=\"M20.708 6.23975H3.75\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"></path>
                                                        <path d=\"M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"></path>
                                                    </svg>
                                                </span>
                                            </a>
                                        </td>
                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"6\" class=\"text-center\">No records found</td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{% endblock %}
", "user/index.html.twig", "C:\\Users\\OmarA\\OneDrive\\Bureau\\integration_workshop_user1\\templates\\user\\index.html.twig");
    }
}
