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

/* materiel/new.html.twig */
class __TwigTemplate_c62092ba01698b6137e13402292d2407 extends Template
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
        return "baseback.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materiel/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materiel/new.html.twig"));

        $this->parent = $this->loadTemplate("baseback.html.twig", "materiel/new.html.twig", 1);
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

        yield "New Materiel";
        
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
        yield "    <div class=\"container my-4\">
        <h1>Ajouter un nouveau matériel</h1>

        ";
        // line 11
        yield "        ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["class" => "row g-3 needs-validation", "novalidate" => "novalidate"]]);
        // line 16
        yield "

        ";
        // line 19
        yield "        <div class=\"col-md-4\">
            ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "nom", [], "any", false, false, false, 20), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nom"]);
        yield "
            ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "nom", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 23
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "nom", [], "any", false, false, false, 23), "vars", [], "any", false, false, false, 23), "errors", [], "any", false, false, false, 23)) > 0)) ? (" is-invalid") : ("")))]]);
        // line 25
        yield "
            ";
        // line 26
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "nom", [], "any", false, false, false, 26), "vars", [], "any", false, false, false, 26), "errors", [], "any", false, false, false, 26)) > 0)) {
            // line 27
            yield "                <div class=\"invalid-feedback d-block\">
                    ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "nom", [], "any", false, false, false, 28), "vars", [], "any", false, false, false, 28), "errors", [], "any", false, false, false, 28));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 29
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 29), "html", null, true);
                yield "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            yield "                </div>
            ";
        }
        // line 33
        yield "        </div>

        ";
        // line 36
        yield "        <div class=\"col-md-6\">
            ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "type", [], "any", false, false, false, 37), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Type"]);
        yield "
            ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "type", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 40
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "type", [], "any", false, false, false, 40), "vars", [], "any", false, false, false, 40), "errors", [], "any", false, false, false, 40)) > 0)) ? (" is-invalid") : ("")))]]);
        // line 42
        yield "
            ";
        // line 43
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "type", [], "any", false, false, false, 43), "vars", [], "any", false, false, false, 43), "errors", [], "any", false, false, false, 43)) > 0)) {
            // line 44
            yield "                <div class=\"invalid-feedback d-block\">
                    ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "type", [], "any", false, false, false, 45), "vars", [], "any", false, false, false, 45), "errors", [], "any", false, false, false, 45));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 46
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 46), "html", null, true);
                yield "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            yield "                </div>
            ";
        }
        // line 50
        yield "        </div>

        ";
        // line 53
        yield "        <div class=\"col-12\">
            ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "description", [], "any", false, false, false, 54), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Description"]);
        yield "
            ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "description", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 57
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "description", [], "any", false, false, false, 57), "vars", [], "any", false, false, false, 57), "errors", [], "any", false, false, false, 57)) > 0)) ? (" is-invalid") : ("")))]]);
        // line 59
        yield "
            ";
        // line 60
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "description", [], "any", false, false, false, 60), "vars", [], "any", false, false, false, 60), "errors", [], "any", false, false, false, 60)) > 0)) {
            // line 61
            yield "                <div class=\"invalid-feedback d-block\">
                    ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "description", [], "any", false, false, false, 62), "vars", [], "any", false, false, false, 62), "errors", [], "any", false, false, false, 62));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 63
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 63), "html", null, true);
                yield "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            yield "                </div>
            ";
        }
        // line 67
        yield "        </div>

        ";
        // line 70
        yield "        <div class=\"col-md-6\">
            ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "image", [], "any", false, false, false, 71), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Image (URL)"]);
        yield "
            ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "image", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 74
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "image", [], "any", false, false, false, 74), "vars", [], "any", false, false, false, 74), "errors", [], "any", false, false, false, 74)) > 0)) ? (" is-invalid") : ("")))]]);
        // line 76
        yield "
            ";
        // line 77
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "image", [], "any", false, false, false, 77), "vars", [], "any", false, false, false, 77), "errors", [], "any", false, false, false, 77)) > 0)) {
            // line 78
            yield "                <div class=\"invalid-feedback d-block\">
                    ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "image", [], "any", false, false, false, 79), "vars", [], "any", false, false, false, 79), "errors", [], "any", false, false, false, 79));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 80
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 80), "html", null, true);
                yield "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            yield "                </div>
            ";
        }
        // line 84
        yield "        </div>

        ";
        // line 87
        yield "        <div class=\"col-md-6\">
            ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "marque", [], "any", false, false, false, 88), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Marque"]);
        yield "
            ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "marque", [], "any", false, false, false, 89), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 91
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "marque", [], "any", false, false, false, 91), "vars", [], "any", false, false, false, 91), "errors", [], "any", false, false, false, 91)) > 0)) ? (" is-invalid") : ("")))]]);
        // line 93
        yield "
            ";
        // line 94
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "marque", [], "any", false, false, false, 94), "vars", [], "any", false, false, false, 94), "errors", [], "any", false, false, false, 94)) > 0)) {
            // line 95
            yield "                <div class=\"invalid-feedback d-block\">
                    ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "marque", [], "any", false, false, false, 96), "vars", [], "any", false, false, false, 96), "errors", [], "any", false, false, false, 96));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 97
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 97), "html", null, true);
                yield "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            yield "                </div>
            ";
        }
        // line 101
        yield "        </div>

        ";
        // line 104
        yield "        <div class=\"col-md-4\">
            ";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "prix", [], "any", false, false, false, 105), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Prix"]);
        yield "
            ";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "prix", [], "any", false, false, false, 106), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 108
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "prix", [], "any", false, false, false, 108), "vars", [], "any", false, false, false, 108), "errors", [], "any", false, false, false, 108)) > 0)) ? (" is-invalid") : ("")))]]);
        // line 110
        yield "
            ";
        // line 111
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "prix", [], "any", false, false, false, 111), "vars", [], "any", false, false, false, 111), "errors", [], "any", false, false, false, 111)) > 0)) {
            // line 112
            yield "                <div class=\"invalid-feedback d-block\">
                    ";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "prix", [], "any", false, false, false, 113), "vars", [], "any", false, false, false, 113), "errors", [], "any", false, false, false, 113));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 114
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 114), "html", null, true);
                yield "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            yield "                </div>
            ";
        }
        // line 118
        yield "        </div>

        ";
        // line 121
        yield "        <div class=\"col-md-4\">
            ";
        // line 122
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "categorie", [], "any", false, false, false, 122), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Catégorie"]);
        yield "
            ";
        // line 123
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "categorie", [], "any", false, false, false, 123), 'widget', ["attr" => ["class" => ("form-control" . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 125
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "categorie", [], "any", false, false, false, 125), "vars", [], "any", false, false, false, 125), "errors", [], "any", false, false, false, 125)) > 0)) ? (" is-invalid") : ("")))]]);
        // line 127
        yield "
            ";
        // line 128
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "categorie", [], "any", false, false, false, 128), "vars", [], "any", false, false, false, 128), "errors", [], "any", false, false, false, 128)) > 0)) {
            // line 129
            yield "                <div class=\"invalid-feedback d-block\">
                    ";
            // line 130
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "categorie", [], "any", false, false, false, 130), "vars", [], "any", false, false, false, 130), "errors", [], "any", false, false, false, 130));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 131
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 131), "html", null, true);
                yield "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 133
            yield "                </div>
            ";
        }
        // line 135
        yield "        </div>

        ";
        // line 138
        yield "        <div class=\"col-12\">
            <button class=\"btn btn-primary\" type=\"submit\">Enregistrer</button>
        </div>

        ";
        // line 142
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), 'form_end');
        yield "
    </div>

    <a href=\"";
        // line 145
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_index");
        yield "\">back to list</a>

    ";
        // line 149
        yield "    <script>
    document.addEventListener(\"DOMContentLoaded\", function () {
        const formElement = document.querySelector(\"form.needs-validation\");
        formElement.addEventListener(\"submit\", function () {
            formElement.classList.add(\"was-validated\");
        });
    });
    </script>
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
        return "materiel/new.html.twig";
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
        return array (  402 => 149,  397 => 145,  391 => 142,  385 => 138,  381 => 135,  377 => 133,  368 => 131,  364 => 130,  361 => 129,  359 => 128,  356 => 127,  354 => 125,  353 => 123,  349 => 122,  346 => 121,  342 => 118,  338 => 116,  329 => 114,  325 => 113,  322 => 112,  320 => 111,  317 => 110,  315 => 108,  314 => 106,  310 => 105,  307 => 104,  303 => 101,  299 => 99,  290 => 97,  286 => 96,  283 => 95,  281 => 94,  278 => 93,  276 => 91,  275 => 89,  271 => 88,  268 => 87,  264 => 84,  260 => 82,  251 => 80,  247 => 79,  244 => 78,  242 => 77,  239 => 76,  237 => 74,  236 => 72,  232 => 71,  229 => 70,  225 => 67,  221 => 65,  212 => 63,  208 => 62,  205 => 61,  203 => 60,  200 => 59,  198 => 57,  197 => 55,  193 => 54,  190 => 53,  186 => 50,  182 => 48,  173 => 46,  169 => 45,  166 => 44,  164 => 43,  161 => 42,  159 => 40,  158 => 38,  154 => 37,  151 => 36,  147 => 33,  143 => 31,  134 => 29,  130 => 28,  127 => 27,  125 => 26,  122 => 25,  120 => 23,  119 => 21,  115 => 20,  112 => 19,  108 => 16,  105 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseback.html.twig' %}

{% block title %}New Materiel{% endblock %}

{% block body %}
    <div class=\"container my-4\">
        <h1>Ajouter un nouveau matériel</h1>

        {# We include the \"novalidate\" attribute to disable browser default messages, 
           but we do not prevent submission so that Symfony validation runs. #}
        {{ form_start(form, {
            'attr': {
                'class': 'row g-3 needs-validation',
                'novalidate': 'novalidate'
            }
        }) }}

        {# Nom Field #}
        <div class=\"col-md-4\">
            {{ form_label(form.nom, 'Nom', { 'label_attr': { 'class': 'form-label' } }) }}
            {{ form_widget(form.nom, {
                'attr': {
                    'class': 'form-control' ~ (form.nom.vars.errors|length > 0 ? ' is-invalid' : '')
                }
            }) }}
            {% if form.nom.vars.errors|length > 0 %}
                <div class=\"invalid-feedback d-block\">
                    {% for error in form.nom.vars.errors %}
                        {{ error.message }}
                    {% endfor %}
                </div>
            {% endif %}
        </div>

        {# Type Field #}
        <div class=\"col-md-6\">
            {{ form_label(form.type, 'Type', { 'label_attr': { 'class': 'form-label' } }) }}
            {{ form_widget(form.type, {
                'attr': {
                    'class': 'form-control' ~ (form.type.vars.errors|length > 0 ? ' is-invalid' : '')
                }
            }) }}
            {% if form.type.vars.errors|length > 0 %}
                <div class=\"invalid-feedback d-block\">
                    {% for error in form.type.vars.errors %}
                        {{ error.message }}
                    {% endfor %}
                </div>
            {% endif %}
        </div>

        {# Description Field #}
        <div class=\"col-12\">
            {{ form_label(form.description, 'Description', { 'label_attr': { 'class': 'form-label' } }) }}
            {{ form_widget(form.description, {
                'attr': {
                    'class': 'form-control' ~ (form.description.vars.errors|length > 0 ? ' is-invalid' : '')
                }
            }) }}
            {% if form.description.vars.errors|length > 0 %}
                <div class=\"invalid-feedback d-block\">
                    {% for error in form.description.vars.errors %}
                        {{ error.message }}
                    {% endfor %}
                </div>
            {% endif %}
        </div>

        {# Image Field #}
        <div class=\"col-md-6\">
            {{ form_label(form.image, 'Image (URL)', { 'label_attr': { 'class': 'form-label' } }) }}
            {{ form_widget(form.image, {
                'attr': {
                    'class': 'form-control' ~ (form.image.vars.errors|length > 0 ? ' is-invalid' : '')
                }
            }) }}
            {% if form.image.vars.errors|length > 0 %}
                <div class=\"invalid-feedback d-block\">
                    {% for error in form.image.vars.errors %}
                        {{ error.message }}
                    {% endfor %}
                </div>
            {% endif %}
        </div>

        {# Marque Field #}
        <div class=\"col-md-6\">
            {{ form_label(form.marque, 'Marque', { 'label_attr': { 'class': 'form-label' } }) }}
            {{ form_widget(form.marque, {
                'attr': {
                    'class': 'form-control' ~ (form.marque.vars.errors|length > 0 ? ' is-invalid' : '')
                }
            }) }}
            {% if form.marque.vars.errors|length > 0 %}
                <div class=\"invalid-feedback d-block\">
                    {% for error in form.marque.vars.errors %}
                        {{ error.message }}
                    {% endfor %}
                </div>
            {% endif %}
        </div>

        {# Prix Field #}
        <div class=\"col-md-4\">
            {{ form_label(form.prix, 'Prix', { 'label_attr': { 'class': 'form-label' } }) }}
            {{ form_widget(form.prix, {
                'attr': {
                    'class': 'form-control' ~ (form.prix.vars.errors|length > 0 ? ' is-invalid' : '')
                }
            }) }}
            {% if form.prix.vars.errors|length > 0 %}
                <div class=\"invalid-feedback d-block\">
                    {% for error in form.prix.vars.errors %}
                        {{ error.message }}
                    {% endfor %}
                </div>
            {% endif %}
        </div>

        {# Catégorie Field #}
        <div class=\"col-md-4\">
            {{ form_label(form.categorie, 'Catégorie', { 'label_attr': { 'class': 'form-label' } }) }}
            {{ form_widget(form.categorie, {
                'attr': {
                    'class': 'form-control' ~ (form.categorie.vars.errors|length > 0 ? ' is-invalid' : '')
                }
            }) }}
            {% if form.categorie.vars.errors|length > 0 %}
                <div class=\"invalid-feedback d-block\">
                    {% for error in form.categorie.vars.errors %}
                        {{ error.message }}
                    {% endfor %}
                </div>
            {% endif %}
        </div>

        {# Submit Button #}
        <div class=\"col-12\">
            <button class=\"btn btn-primary\" type=\"submit\">Enregistrer</button>
        </div>

        {{ form_end(form) }}
    </div>

    <a href=\"{{ path('app_materiel_index') }}\">back to list</a>

    {# A minimal script that adds the Bootstrap \"was-validated\" class on submit;
       note that we do not prevent the submission so that the form reaches the server. #}
    <script>
    document.addEventListener(\"DOMContentLoaded\", function () {
        const formElement = document.querySelector(\"form.needs-validation\");
        formElement.addEventListener(\"submit\", function () {
            formElement.classList.add(\"was-validated\");
        });
    });
    </script>
{% endblock %}
", "materiel/new.html.twig", "C:\\xampp1\\htdocs\\integration_workshop_user1\\templates\\materiel\\new.html.twig");
    }
}
