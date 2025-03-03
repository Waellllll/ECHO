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

/* base.html.twig */
class __TwigTemplate_0ca56b4b4079967e45295927ce1f40ff extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheet' => [$this, 'block_stylesheet'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 7
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>

    <!-- Favicon -->
 <link rel=\"shortcut icon\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/images/greenbridge.png.png"), "html", null, true);
        yield "\">
    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com\" rel=\"preconnect\">
    <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;700&display=swap\" rel=\"stylesheet\">

    <!-- Vendor CSS Files -->
    ";
        // line 17
        yield from $this->unwrap()->yieldBlock('stylesheet', $context, $blocks);
        // line 26
        yield "
</head>

<body class=\"index-page\">

  <header id=\"header\" class=\"header d-flex align-items-center position-relative\">
    <div class=\"container-fluid container-xl position-relative d-flex align-items-center justify-content-between\">

      <a href=\"index.html\" class=\"logo d-flex align-items-center\">
        <img src=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        yield "\" alt=\"GreenBridge\">
      </a>

      <nav id=\"navmenu\" class=\"navmenu\">
        <ul>
          <li><a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\" class=\"active\">Home</a></li>
           <li><a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("terrain_list");
        yield "\">Terrains</a></li>
          <li><a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_workshop_indexf");
        yield "\">Workshop</a></li>
          <li><a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_elearning_front");
        yield "\">E-Learning</a></li>
          <li><a href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_new");
        yield "\">Reclamation</a></li>
          <li><a href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_index");
        yield "\">Blog</a></li>
          <li class=\"dropdown\">
            <a href=\"#\"><span> Login </span> <i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
            <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"navbarDropdown\">
                    ";
        // line 49
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49)) {
            // line 50
            yield "                <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profile", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51)]), "html", null, true);
            yield "\">
                        Profil
                        </a>
                    </li>
                ";
        }
        // line 56
        yield "                    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 57
            yield "                        <li><a class=\"dropdown-item\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homeback");
            yield "\">Aller au back-Office</a></li>
                    ";
        }
        // line 59
        yield "                    <li><hr class=\"dropdown-divider\"></li>
                    <li><a class=\"dropdown-item\" href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">Logout</a></li>
                  </ul>
          </li>
        </ul>
        <i class=\"mobile-nav-toggle d-xl-none bi bi-list\"></i>
      </nav>

    </div>
  </header>
   
    
  <main class=\"main\">
     ";
        // line 72
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 837
        yield "
     ";
        // line 838
        yield from $this->unwrap()->yieldBlock('js', $context, $blocks);
        // line 853
        yield "

</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
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

        yield "Accueil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheet(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 18
        yield "    <link href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
  <link href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
  <link href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.css\" rel=\"stylesheet"), "html", null, true);
        yield "\">
  <link href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
  <link href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/main.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 72
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

        // line 73
        yield "

    <!-- Hero Section -->
    <section id=\"hero\" class=\"hero section dark-background\">
      <div id=\"hero-carousel\" class=\"carousel slide carousel-fade\" data-bs-ride=\"carousel\" data-bs-interval=\"5000\">

        <div class=\"carousel-item active\">
          <img src=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/hero_1.jpg"), "html", null, true);
        yield "\" alt=\"\">
          <div class=\"carousel-container\">
            <h2>Farming is the best solution to world starvation</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>

        <div class=\"carousel-item\">
          <img src=\"";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/hero_2.jpg"), "html", null, true);
        yield "\" alt=\"\">+
          <div class=\"carousel-container\">
            <h2>Organic vegetables are good for health</h2>
            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.</p>
          </div>
        </div>

        <div class=\"carousel-item\">
          <img src=\"";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/hero_3.jpg"), "html", null, true);
        yield "\" alt=\"\">
          <div class=\"carousel-container\">
            <h2>Providing Fresh Produce Every Single Day</h2>
            <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
          </div>
        </div>

        <div class=\"carousel-item\">
          <img src=\"";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/hero_4.jpg"), "html", null, true);
        yield "\" alt=\"\">
          <div class=\"carousel-container\">
            <h2>Farming as a Passion</h2>
            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius.</p>
          </div>
        </div> End Carousel Item -->

        <div class=\"carousel-item\">
          <img src=\"asset";
        // line 112
        yield "assets/img/hero_5.jpg";
        yield "\" alt=\"\">
          <div class=\"carousel-container\">
            <h2>Good Food For All</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div><!-- End Carousel Item -->

        <a class=\"carousel-control-prev\" href=\"#hero-carousel\" role=\"button\" data-bs-slide=\"prev\">
          <span class=\"carousel-control-prev-icon bi bi-chevron-left\" aria-hidden=\"true\"></span>
        </a>

        <a class=\"carousel-control-next\" href=\"#hero-carousel\" role=\"button\" data-bs-slide=\"next\">
          <span class=\"carousel-control-next-icon bi bi-chevron-right\" aria-hidden=\"true\"></span>
        </a>

        <ol class=\"carousel-indicators\"></ol>

      </div>

    </section><!-- /Hero Section -->

    <!-- Services Section -->
    <section id=\"services\" class=\"services section\">

      <!-- Section Title -->
      <div class=\"container section-title\" data-aos=\"fade-up\">
        <h2>SERVICES</h2>
        <p>Providing Fresh Produce Every Single Day</p>
      </div><!-- End Section Title -->
      <div class=\"content\">
        <div class=\"container\">
          <div class=\"row g-0\">
            <div class=\"col-lg-3 col-md-6\">
              <div class=\"service-item\">
                <span class=\"number\">01</span>
                <div class=\"service-item-icon\">
                  <svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"80\" height=\"80\" x=\"0\" y=\"0\" viewBox=\"0 0 509.435 509.435\" style=\"enable-background: new 0 0 512 512\" xml:space=\"preserve\" class=\"\">
                    <g>
                      <path d=\"M7.506 347.639c.994 0 2.005-.199 2.976-.619l62.037-26.857a7.5 7.5 0 0 0 3.903-9.862 7.5 7.5 0 0 0-9.862-3.903L4.523 333.255a7.501 7.501 0 0 0 2.983 14.384zM500.883 283.197c-10.953-10.952-28.175-11.423-39.689-1.267l-10.034-13.307c-19.783-26.239-46.1-46.623-76.103-58.948a7.5 7.5 0 0 0-5.699 13.875c11.136 4.575 21.708 10.382 31.567 17.249h-22.621c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h41.188a169.382 169.382 0 0 1 19.691 21.855l11.048 14.652-71.171 67.597h-19.48a35.772 35.772 0 0 0 6.775-20.976c0-19.837-16.139-35.975-35.976-35.975h-75.023l-48.33-15.005a160.871 160.871 0 0 0-37.992-6.934l2.533-3.359a169.852 169.852 0 0 1 19.67-21.855h27.398c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-8.848a165.125 165.125 0 0 1 38.01-19.73c28.992-10.532 60.376-12.89 90.754-6.821a7.498 7.498 0 0 0 8.824-5.885 7.5 7.5 0 0 0-5.885-8.824 184.517 184.517 0 0 0-28.616-3.4v-83.727h64.189c43.49 0 78.872-35.382 78.872-78.872V22.488c0-8.712-7.088-15.801-15.801-15.801h-51.729c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h51.729c.441 0 .801.359.801.801v11.051c0 35.219-28.653 63.872-63.872 63.872h-64.189V85.559c0-28.082 18.793-53.262 45.701-61.234a7.5 7.5 0 1 0-4.261-14.382c-15.972 4.732-30.338 14.681-40.451 28.015-10.46 13.79-15.988 30.25-15.988 47.601v16.416c-9.59-9.839-22.97-15.965-37.762-15.965h-43.432c-6.193 0-11.232 5.039-11.232 11.232v23.629c0 29.093 23.669 52.762 52.763 52.762h39.663v22.475a183.375 183.375 0 0 0-55.199 10.86c-32.974 11.978-61.705 33.297-83.085 61.653l-9.313 12.351a161.07 161.07 0 0 0-54.289 12.692 7.5 7.5 0 0 0-3.949 9.844 7.498 7.498 0 0 0 9.844 3.949c31.858-13.616 67.62-15.458 100.696-5.188l49.416 15.343c.72.224 1.47.337 2.224.337h76.161c11.566 0 20.976 9.409 20.976 20.975s-9.409 20.976-20.976 20.976h-71.803c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h123.477a7.5 7.5 0 0 0 5.165-2.062l83.48-79.289c5.56-5.279 14.158-5.167 19.577.252a13.957 13.957 0 0 1 .853 18.9l-80.942 97.046a37.161 37.161 0 0 1-21.112 12.581L259.57 448.474c-20.377 4.113-41.89 1.365-60.575-7.739l-53.332-25.982a7.507 7.507 0 0 0-6.884.162L3.903 488.665a7.5 7.5 0 0 0 7.197 13.161l131.475-71.888 49.849 24.285c21.631 10.538 46.53 13.72 70.114 8.957l129.506-26.146a52.209 52.209 0 0 0 29.663-17.677l80.942-97.046c9.682-11.61 8.923-28.426-1.766-39.114zM258.212 158.634c-20.822 0-37.763-16.94-37.763-37.762V101.01h39.664c20.822 0 37.762 16.94 37.762 37.762v19.861h-39.663z\" fill=\"currentColor\" opacity=\"1\" data-original=\"currentColor\"></path>
                      <path d=\"M319.171 240.778a7.5 7.5 0 0 0-7.5-7.5h-9.43c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h9.43a7.5 7.5 0 0 0 7.5-7.5zM272.068 264.08c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h34.888c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5zM400.305 307.996c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-8.172c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5z\" fill=\"currentColor\" opacity=\"1\" data-original=\"currentColor\"></path>
                    </g>
                  </svg>
                </div>
                <div class=\"service-item-content\">
                  <h3 class=\"service-heading\">Planting</h3>
                  <p>
                    Gravida sodales condimentum pellen tesq accumsan orci quam
                    sagittis sapie
                  </p>
                </div>
              </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
              <div class=\"service-item\">
                <span class=\"number\">02</span>
                <div class=\"service-item-icon\">
                  <svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"80\" height=\"80\" x=\"0\" y=\"0\" viewBox=\"0 0 514.314 514.314\" style=\"enable-background: new 0 0 512 512\" xml:space=\"preserve\" class=\"\">
                    <g>
                      <path d=\"M434.176 51.297h72.639c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-72.639c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5zM117.994 54.791h30.852c5.47 6.605 13.729 10.82 22.955 10.82h42.865l35.886 35.886c8.246 8.246 19.209 12.787 30.869 12.787h8.32c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-8.32c-7.654 0-14.85-2.981-20.262-8.393l-38.083-38.083a7.5 7.5 0 0 0-5.304-2.197H171.8c-8.159 0-14.797-6.638-14.797-14.797s6.638-14.797 14.797-14.797h123.757a66.756 66.756 0 0 1 35.416 10.157l30.374 18.983a7.497 7.497 0 0 0 3.975 1.14h36.891c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-34.739l-28.551-17.843a81.742 81.742 0 0 0-43.365-12.437H171.801c-16.43 0-29.797 13.367-29.797 29.798 0 1.349.099 2.675.273 3.977h-24.283a7.5 7.5 0 1 0 0 14.999zM30.38 144.476h20.344a29.724 29.724 0 0 0-4.003 14.921c0 14.399 10.225 26.453 23.795 29.288a29.746 29.746 0 0 0-4.371 15.555c0 16.499 13.423 29.921 29.921 29.921h131.637a7.5 7.5 0 0 0 7.498-7.688 7.5 7.5 0 0 0-8.307-7.311H96.065c-8.228 0-14.921-6.694-14.921-14.921s6.693-14.921 14.921-14.921H163.9c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5H76.643c-8.228 0-14.922-6.694-14.922-14.921s6.694-14.921 14.922-14.921H163.9c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5H30.38c-8.228 0-14.921-6.694-14.921-14.921s6.693-14.921 14.921-14.921H163.9c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5H62.547c-8.228 0-14.921-6.694-14.921-14.921s6.693-14.921 14.921-14.921h23.485c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5H62.547c-16.498 0-29.921 13.423-29.921 29.921a29.719 29.719 0 0 0 4.003 14.921H30.38C13.882 84.636.459 98.059.459 114.557s13.423 29.919 29.921 29.919zM506.814 196.74H389.248a7.497 7.497 0 0 0-4.629 1.599l-5.613 4.403c-13.495 10.588-30.375 16.42-47.529 16.42h-12.272a7.5 7.5 0 0 0-8.309 7.5 7.5 7.5 0 0 0 7.5 7.5h13.081c20.496 0 40.664-6.967 56.788-19.618l3.574-2.804h114.976a7.5 7.5 0 1 0-.001-15z\" fill=\"currentColor\" opacity=\"1\" data-original=\"currentColor\" class=\"\"></path>
                      <path d=\"M192.215 150.164c0 15.372 12.506 27.878 27.878 27.878s27.879-12.506 27.879-27.878-12.507-27.878-27.879-27.878-27.878 12.506-27.878 27.878zm40.757 0c0 7.101-5.777 12.878-12.879 12.878-7.101 0-12.878-5.777-12.878-12.878s5.777-12.878 12.878-12.878c7.101-.001 12.879 5.777 12.879 12.878zM273.049 203.771c-12.599 0-22.848 10.25-22.848 22.848s10.249 22.847 22.848 22.847 22.848-10.249 22.848-22.847-10.25-22.848-22.848-22.848zm0 30.695c-4.327 0-7.848-3.52-7.848-7.847s3.521-7.848 7.848-7.848 7.848 3.521 7.848 7.848-3.521 7.847-7.848 7.847zM474.178 493.298h-9.202l-73.199-62.323c-3.155-2.686-7.888-2.305-10.573.849s-2.305 7.887.849 10.572l59.785 50.902H43.105l108.164-92.092a77.855 77.855 0 0 1 50.423-18.558h81.558a77.851 77.851 0 0 1 50.423 18.558l24.029 20.458a7.498 7.498 0 0 0 10.573-.849 7.5 7.5 0 0 0-.849-10.572l-24.029-20.458a92.867 92.867 0 0 0-60.147-22.137h-51.158v-26.806h15.44c24.205 0 43.896-19.692 43.896-43.897v-8.808c0-6.785-5.52-12.305-12.305-12.305h-18.135c-19.99 0-36.891 13.437-42.174 31.749-5.716-4.945-13.156-7.947-21.29-7.947h-15.061c-6.942 0-12.591 5.648-12.591 12.592v7.399c0 17.97 14.619 32.589 32.589 32.589h14.629v15.433h-15.399a92.867 92.867 0 0 0-60.147 22.137L19.967 493.298H7.5c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h466.678a7.5 7.5 0 0 0 0-15zM232.092 319.73c0-15.934 12.963-28.897 28.897-28.897h15.439v6.112c0 15.934-12.963 28.897-28.896 28.897h-15.44zm-16.978 17.485h-12.651c-9.698 0-17.589-7.89-17.589-17.589v-4.991h12.651c9.698 0 17.589 7.89 17.589 17.589z\" fill=\"currentColor\" opacity=\"1\" data-original=\"currentColor\" class=\"\"></path>
                      <path d=\"M178.358 429.065c0 13.218 10.754 23.972 23.972 23.972s23.972-10.753 23.972-23.972-10.754-23.972-23.972-23.972-23.972 10.753-23.972 23.972zm32.944 0c0 4.947-4.024 8.972-8.972 8.972s-8.972-4.025-8.972-8.972 4.024-8.972 8.972-8.972 8.972 4.024 8.972 8.972zM252.23 445.536c0 15.706 12.777 28.484 28.483 28.484s28.484-12.778 28.484-28.484-12.778-28.484-28.484-28.484-28.483 12.778-28.483 28.484zm41.968 0c0 7.435-6.049 13.484-13.484 13.484s-13.483-6.049-13.483-13.484 6.049-13.484 13.483-13.484c7.435 0 13.484 6.049 13.484 13.484z\" fill=\"currentColor\" opacity=\"1\" data-original=\"currentColor\" class=\"\"></path>
                    </g>
                  </svg>
                </div>
                <div class=\"service-item-content\">
                  <h3 class=\"service-heading\">Mulching</h3>
                  <p>
                    Gravida sodales condimentum pellen tesq accumsan orci quam
                    sagittis sapie
                  </p>
                </div>
              </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
              <div class=\"service-item\">
                <span class=\"number\">03</span>
                <div class=\"service-item-icon\">
                  <svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"80\" height=\"80\" x=\"0\" y=\"0\" viewBox=\"0 0 516.53 516.53\" style=\"enable-background: new 0 0 512 512\" xml:space=\"preserve\" class=\"\">
                    <g>
                      <path d=\"M504.085 341.447a113.617 113.617 0 0 0-11.524-27.805c3.866-6.212 3.104-14.506-2.288-19.897l-5.804-5.804v-67.388c0-10.907-8.398-19.878-19.066-20.817V73.099h4.012c8.301 0 15.054-6.753 15.054-15.054V37.599c0-8.301-6.753-15.054-15.054-15.054h-23.242a7.5 7.5 0 0 0 0 15l23.296.054-.054 20.5-241.554-.054.054-20.5H414.21a7.5 7.5 0 0 0 0-15H227.916c-8.301 0-15.054 6.753-15.054 15.054v20.446c0 8.301 6.753 15.054 15.054 15.054h14.719L231.27 201.13c-5.215 2.077-9.463 6.215-11.642 11.675l-14.014 35.128h-27.323l-24.417-28.857a16.73 16.73 0 0 0-12.795-5.936H99.071c-9.242 0-16.761 7.519-16.761 16.761v18.66a44.759 44.759 0 0 0-35.97 33.278L24.937 367.09C9.676 380.359 0 399.894 0 421.658c0 39.881 32.446 72.327 72.328 72.327 37.349 0 68.174-28.457 71.938-64.827h25.905v12.546c0 8.282 6.738 15.02 15.02 15.02h64.364c8.282 0 15.02-6.738 15.02-15.02v-12.546h29.374c-3.278 6.098-2.356 13.875 2.785 19.016l19.555 19.554a16 16 0 0 0 11.388 4.718c3.045 0 5.961-.839 8.506-2.431a113.556 113.556 0 0 0 27.808 11.525c1.662 7.123 8.064 12.445 15.686 12.445h27.655c7.602 0 13.99-5.293 15.672-12.441a113.582 113.582 0 0 0 27.814-11.525 15.986 15.986 0 0 0 8.514 2.427c4.302 0 8.346-1.675 11.388-4.717l19.555-19.555c5.396-5.396 6.156-13.7 2.29-19.901a113.607 113.607 0 0 0 11.522-27.801c7.123-1.662 12.445-8.064 12.445-15.686v-27.655c-.002-7.621-5.324-14.023-12.447-15.684zm-53.681-141.805h-15.681V73.099h15.681zM419.723 73.099v126.543h-142.46l11.233-126.543zm-146.286 0-11.233 126.543h-15.743l11.234-126.543zM99.071 228.14h42.008c.519 0 1.008.227 1.344.624l16.219 19.169H97.311v-18.032c0-.971.79-1.761 1.76-1.761zm-51.11 108.845h167.157c12.315 0 22.334-10.019 22.334-22.334v-16.152c0-12.315-10.019-22.334-22.334-22.334h-77.364a7.5 7.5 0 0 0 0 15h77.364c4.044 0 7.334 3.29 7.334 7.334v16.152c0 4.044-3.29 7.334-7.334 7.334H51.727l7.738-30.821h46.327a7.5 7.5 0 0 0 0-15h-40.76a29.774 29.774 0 0 1 24.779-13.231h120.886a7.5 7.5 0 0 0 6.966-4.721l15.897-39.849a5.883 5.883 0 0 1 5.49-3.721h224.51a5.916 5.916 0 0 1 5.91 5.91v52.522c-5.348-4.343-12.853-4.747-18.636-1.165a113.598 113.598 0 0 0-27.818-11.532c-1.662-7.123-8.063-12.445-15.685-12.445h-27.655c-7.602 0-13.99 5.294-15.672 12.441a113.583 113.583 0 0 0-27.818 11.527c-6.213-3.868-14.506-3.104-19.897 2.288l-19.555 19.555c-5.375 5.375-6.149 13.637-2.28 19.884a113.572 113.572 0 0 0-11.531 27.818c-7.123 1.662-12.445 8.063-12.445 15.685v27.655c0 7.602 5.293 13.99 12.441 15.672 1.242 4.67 2.784 9.24 4.603 13.699h-24.12c-2.277-5.402-7.626-9.204-13.847-9.204h-64.364c-6.221 0-11.569 3.802-13.847 9.204h-27.078c-3.764-36.371-34.589-64.828-71.938-64.828a71.896 71.896 0 0 0-28.994 6.086zm24.367 142c-31.61 0-57.328-25.717-57.328-57.327s25.717-57.328 57.328-57.328 57.327 25.717 57.327 57.328-25.717 57.327-57.327 57.327zm177.24-37.262h-.013l-64.384-.02.02-21.75 64.384.02zm251.962-56.937c0 .609-.496 1.105-1.189 1.105-4.816 0-8.956 3.287-10.065 7.992a98.695 98.695 0 0 1-12.139 29.288c-2.543 4.113-1.939 9.365 1.447 12.75l.084.084a1.105 1.105 0 0 1 0 1.562l-19.555 19.555a1.085 1.085 0 0 1-.781.323c-.208 0-.514-.056-.761-.303a3.326 3.326 0 0 0-.084-.084c-3.406-3.407-8.658-4.01-12.77-1.467a98.657 98.657 0 0 1-29.288 12.138c-4.706 1.11-7.992 5.25-7.992 10.15 0 .609-.496 1.105-1.104 1.105h-27.655c-.609 0-1.105-.496-1.105-1.189 0-4.816-3.287-8.956-7.992-10.066a98.69 98.69 0 0 1-29.287-12.137 10.35 10.35 0 0 0-5.455-1.561c-2.68 0-5.338 1.049-7.38 3.091a1.085 1.085 0 0 1-.781.323c-.208 0-.513-.056-.781-.324l-19.555-19.555c-.431-.431-.431-1.132.064-1.627 3.406-3.406 4.009-8.657 1.466-12.77a98.66 98.66 0 0 1-12.138-29.287c-1.11-4.706-5.25-7.992-10.15-7.992a1.107 1.107 0 0 1-1.105-1.105V357.13c0-.609.496-1.104 1.189-1.104 4.816 0 8.956-3.287 10.066-7.992a98.661 98.661 0 0 1 12.138-29.288c2.542-4.112 1.939-9.364-1.531-12.833a1.106 1.106 0 0 1 0-1.563l19.555-19.555c.431-.431 1.132-.431 1.626.064 3.407 3.408 8.658 4.011 12.77 1.467a98.666 98.666 0 0 1 29.288-12.138c4.706-1.11 7.992-5.25 7.992-10.15 0-.609.496-1.105 1.105-1.105h27.655c.609 0 1.104.496 1.104 1.189 0 4.816 3.287 8.956 7.992 10.066a98.664 98.664 0 0 1 29.288 12.139c4.113 2.543 9.365 1.939 12.833-1.531a1.107 1.107 0 0 1 1.563 0l19.555 19.555c.431.431.431 1.132-.062 1.625-3.408 3.406-4.012 8.658-1.468 12.771a98.666 98.666 0 0 1 12.138 29.288c1.11 4.706 5.25 7.992 10.066 7.992h.084c.609 0 1.105.496 1.105 1.104z\" fill=\"currentColor\" opacity=\"1\" data-original=\"currentColor\" class=\"\"></path>
                      <path d=\"M454.895 335.721a7.5 7.5 0 0 0-3.834 9.889 62.412 62.412 0 0 1 5.335 25.349c0 34.678-28.213 62.891-62.891 62.891s-62.891-28.213-62.891-62.891c0-34.679 28.213-62.892 62.891-62.892a62.934 62.934 0 0 1 40.397 14.703 7.5 7.5 0 0 0 10.566-.923 7.5 7.5 0 0 0-.923-10.566 77.96 77.96 0 0 0-50.041-18.213c-42.949 0-77.891 34.942-77.891 77.892 0 42.949 34.942 77.891 77.891 77.891s77.891-34.942 77.891-77.891c0-10.895-2.224-21.46-6.611-31.403a7.5 7.5 0 0 0-9.889-3.836zM72.328 381.807c-21.974 0-39.851 17.877-39.851 39.851s17.877 39.851 39.851 39.851 39.851-17.877 39.851-39.851-17.878-39.851-39.851-39.851zm0 64.702c-13.703 0-24.851-11.148-24.851-24.851s11.148-24.851 24.851-24.851 24.851 11.148 24.851 24.851-11.149 24.851-24.851 24.851z\" fill=\"currentColor\" opacity=\"1\" data-original=\"currentColor\" class=\"\"></path>
                      <path d=\"M393.504 328.829c-23.23 0-42.13 18.899-42.13 42.13 0 23.23 18.899 42.129 42.13 42.129s42.13-18.899 42.13-42.129-18.9-42.13-42.13-42.13zm0 69.26c-14.959 0-27.13-12.17-27.13-27.129s12.17-27.13 27.13-27.13 27.13 12.17 27.13 27.13c0 14.958-12.171 27.129-27.13 27.129zM249.861 265.585a7.487 7.487 0 0 0 2.663.491 7.503 7.503 0 0 0 7.013-4.838l9.438-24.841a7.5 7.5 0 0 0-14.022-5.328l-9.438 24.841a7.499 7.499 0 0 0 4.346 9.675zM285.384 265.585a7.487 7.487 0 0 0 2.663.491 7.502 7.502 0 0 0 7.012-4.838l9.439-24.841a7.5 7.5 0 0 0-4.347-9.675 7.5 7.5 0 0 0-9.675 4.347l-9.439 24.841a7.5 7.5 0 0 0 4.347 9.675z\" fill=\"currentColor\" opacity=\"1\" data-original=\"currentColor\" class=\"\"></path>
                    </g>
                  </svg>
                </div>
                <div class=\"service-item-content\">
                  <h3 class=\"service-heading\">Plowing</h3>
                  <p>
                    Gravida sodales condimentum pellen tesq accumsan orci quam
                    sagittis sapie
                  </p>
                </div>
              </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
              <div class=\"service-item\">
                <span class=\"number\">04</span>
                <div class=\"service-item-icon\">
                  <svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"80\" height=\"80\" x=\"0\" y=\"0\" viewBox=\"0 0 509.389 509.389\" style=\"enable-background: new 0 0 512 512\" xml:space=\"preserve\" class=\"\">
                    <g>
                      <path d=\"M495.69 14.267A46.636 46.636 0 0 0 458.364.766a46.637 46.637 0 0 0-34.257 20.05l-24.614 35.749a309.594 309.594 0 0 1-37.289 44.521 7.5 7.5 0 0 0 10.544 10.668 324.596 324.596 0 0 0 39.1-46.684l24.614-35.749a31.674 31.674 0 0 1 23.268-13.618 31.66 31.66 0 0 1 25.354 9.17 31.681 31.681 0 0 1 9.171 25.355 31.679 31.679 0 0 1-13.618 23.267l-35.75 24.615a324.066 324.066 0 0 0-59.859 53.246l-22.502 25.667a5.412 5.412 0 0 1-3.933 1.86c-1.518.071-2.966-.518-4.047-1.599l-21.873-21.872c-1.081-1.082-1.649-2.52-1.599-4.048s.711-2.925 1.86-3.933l15.802-13.854a7.5 7.5 0 0 0-9.889-11.279l-15.802 13.854a20.546 20.546 0 0 0-6.964 14.719 20.37 20.37 0 0 0 .64 5.69l-35.241 35.241c-7.726-5.323-17.119-7.656-26.65-6.449-8.734 1.104-16.614 5.058-22.612 11.157l-37.903-37.903a28.552 28.552 0 0 0-22.3-8.292 28.547 28.547 0 0 0-20.847 11.457c-23.749 31.972-43.447 60.009-60.222 85.713a7.5 7.5 0 0 0 6.275 11.6 7.495 7.495 0 0 0 6.288-3.402c16.606-25.447 36.135-53.239 59.7-84.966a13.562 13.562 0 0 1 9.903-5.441 13.585 13.585 0 0 1 10.595 3.939l39.789 39.789-63.489 107.398c-5.606 9.484-4.179 21.121 3.554 28.957 4.724 4.785 10.89 7.271 17.211 7.271 4.233-.001 8.536-1.115 12.519-3.399l40.792-24.114a7.499 7.499 0 1 0-7.632-12.912l-40.706 24.064c-4.745 2.723-9.055 1.038-11.506-1.446-1.129-1.144-4.561-5.302-1.318-10.787L239.37 211.63c3.736-6.32 10.058-10.474 17.342-11.395 7.292-.918 14.44 1.529 19.633 6.722l25.938 25.938c5.187 5.186 7.654 12.36 6.771 19.686-.878 7.28-4.911 13.598-10.99 17.288l-44.019 26.021a7.5 7.5 0 0 0 7.632 12.912l38.725-22.893 40.397 40.396a13.558 13.558 0 0 1 3.938 10.564 13.606 13.606 0 0 1-5.428 9.926c-54.818 40.993-97.27 69.301-137.646 91.785-50.099 27.898-95.647 45.713-139.25 54.462-13.202 2.648-26.235-1.337-35.759-10.935a40.033 40.033 0 0 1-10.799-36.472c10.129-48.517 33.232-101.845 70.63-163.033a7.501 7.501 0 0 0-12.799-7.823c-38.309 62.679-62.028 117.563-72.515 167.79-3.796 18.186 1.75 36.916 14.835 50.103 10.368 10.45 24.27 16.146 38.625 16.145 3.564 0 7.159-.352 10.732-1.068 45.149-9.06 92.12-27.398 143.597-56.063 40.984-22.823 83.956-51.469 139.331-92.878a28.597 28.597 0 0 0 11.407-20.864 28.554 28.554 0 0 0-8.292-22.245l-38.525-38.525c6.079-6.031 10.002-13.987 11.063-22.799 1.106-9.18-1.037-18.215-5.937-25.753l35.39-35.39a20.4 20.4 0 0 0 5.022.654 20.546 20.546 0 0 0 15.384-6.975l22.502-25.667a309.032 309.032 0 0 1 57.086-50.779l35.749-24.614a46.635 46.635 0 0 0 20.05-34.256 46.63 46.63 0 0 0-13.5-37.328zM340.732 184.685l-32.723 32.723-15.459-15.459 32.723-32.723z\" fill=\"currentColor\" opacity=\"1\" data-original=\"currentColor\"></path>
                    </g>
                  </svg>
                </div>
                <div class=\"service-item-content\">
                  <h3 class=\"service-heading\">Mowing</h3>
                  <p>
                    Gravida sodales condimentum pellen tesq accumsan orci quam
                    sagittis sapie
                  </p>
                </div>
              </div>
            </div>

            <div class=\"col-lg-3 col-md-6\">
              <div class=\"service-item\">
                <span class=\"number\">05</span>
                <div class=\"service-item-icon\">
                  <svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"80\" height=\"80\" x=\"0\" y=\"0\" viewBox=\"0 0 513.089 513.089\" style=\"enable-background: new 0 0 512 512\" xml:space=\"preserve\" class=\"\">
                    <g>
                      <path d=\"M194.209 386.877a7.497 7.497 0 0 0-9.15 5.363 75.07 75.07 0 0 0-2.428 18.947c0 13.789 3.615 27 10.454 38.204a7.494 7.494 0 0 0 10.308 2.495 7.5 7.5 0 0 0 2.494-10.309c-5.401-8.851-8.257-19.359-8.257-30.39a60.09 60.09 0 0 1 1.941-15.16 7.497 7.497 0 0 0-5.362-9.15z\" fill=\"currentColor\" opacity=\"1\" data-original=\"currentColor\"></path>
                      <path d=\"M382.56 0h-27.319c-12.654 0-25.236 3.119-36.386 9.021a7.5 7.5 0 0 0 7.018 13.258c9.124-4.83 19.005-7.278 29.368-7.278h27.222v12.022c0 34.679-28.213 62.892-62.892 62.892h-27.222V77.893c0-13.309 4.12-26.038 11.914-36.811a7.5 7.5 0 0 0-12.153-8.793c-9.657 13.347-14.762 29.117-14.762 45.604V119.154a88.294 88.294 0 0 1-14.296 48.23l-20.501 31.543a46.65 46.65 0 0 0-9.615-13.916l-1.273-1.273v-14.053c0-21.604-9.58-41.872-26.284-55.608a7.5 7.5 0 0 0-9.528 11.586c13.226 10.876 20.812 26.922 20.812 44.022v9.66h-29.069c-31.412 0-56.968-25.556-56.968-56.968v-9.66h29.069c3.454 0 6.976.329 10.467.977a7.5 7.5 0 0 0 2.738-14.748 72.57 72.57 0 0 0-13.205-1.229h-31.883c-6.72 0-12.187 5.467-12.187 12.186v12.474c0 39.684 32.284 71.968 71.968 71.968h33.463l1.273 1.273c5.979 5.979 9.271 13.927 9.271 22.381v98.306a79.003 79.003 0 0 0-21.446 5.114c-4.152-2.798-9.597-3.045-13.983-.509-30.558 17.671-49.541 52.263-49.541 90.277 0 56.188 41.481 101.901 92.47 101.901s92.47-45.713 92.47-101.901c0-.237-.004-.473-.009-.709l-.005-.334a7.5 7.5 0 0 0-7.499-7.433h-.068a7.5 7.5 0 0 0-7.433 7.567l.014.909c0 47.917-34.753 86.901-77.47 86.901s-77.47-38.984-77.47-86.901c0-32.212 15.656-61.449 40.948-76.643l40.182 34.094c5.225 4.433 13.1 4.099 17.929-.761l25.512-25.668c11.649 10.022 20.473 23.408 25.562 38.809a7.496 7.496 0 0 0 9.475 4.768 7.5 7.5 0 0 0 4.768-9.474c-6.15-18.613-17.027-34.756-31.454-46.681-4.011-3.317-9.358-3.923-13.824-1.93-10.53-6.377-22.136-10.243-34.128-11.384v-29.695h18.365c25.013 0 45.362-20.35 45.362-45.362v-7.928c0-6.115-4.975-11.089-11.089-11.089h-22.276c-11.667 0-22.318 4.429-30.362 11.693v-13.713l29.028-44.665a103.263 103.263 0 0 0 16.72-56.404v-14.239h27.222c42.949 0 77.892-34.942 77.892-77.892v-12.12C397.462 6.685 390.777 0 382.56 0zM251.211 356.136l-27.468-23.306a63.694 63.694 0 0 1 15.358-1.884c10.366 0 20.534 2.525 29.851 7.34zm25.752-118.894h18.365v4.017c0 16.742-13.62 30.362-30.362 30.362h-18.365v-4.017c0-16.741 13.62-30.362 30.362-30.362z\" fill=\"currentColor\" opacity=\"1\" data-original=\"currentColor\"></path>
                    </g>
                  </svg>
                </div>
                <div class=\"service-item-content\">
                  <h3 class=\"service-heading\">Seeding</h3>
                  <p>
                    Gravida sodales condimentum pellen tesq accumsan orci quam
                    sagittis sapie
                  </p>
                </div>
              </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
              <div class=\"service-item\">
                <span class=\"number\">06</span>
                <div class=\"service-item-icon\">
                  <svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"80\" height=\"80\" x=\"0\" y=\"0\" viewBox=\"0 0 511.67 511.67\" style=\"enable-background: new 0 0 512 512\" xml:space=\"preserve\" class=\"\">
                    <g>
                      <path d=\"M492.96 296.401v-59.276c0-63.338-24.665-122.886-69.452-167.673C378.721 24.666 319.174 0 255.835 0c-54.517 0-107.757 18.967-149.914 53.407a7.5 7.5 0 1 0 9.491 11.616C154.896 32.765 204.767 15 255.835 15c59.332 0 115.112 23.105 157.066 65.059 41.953 41.954 65.059 97.734 65.059 157.066v58.7h-15v-58.7C462.96 122.916 370.044 30 255.835 30S48.71 122.916 48.71 237.125v58.7h-15v-58.7c0-56.142 21.01-109.737 59.158-150.913a7.502 7.502 0 0 0-11.004-10.195C41.139 119.975 18.71 177.19 18.71 237.125v59.276c-10.029 2.3-17.535 11.291-17.535 22.008v5.81c0 10.194 6.791 18.828 16.085 21.627l16.782 99.17c6.535 38.622 39.71 66.654 78.882 66.654h285.822c39.172 0 72.347-28.032 78.882-66.654l16.782-99.17c9.294-2.798 16.085-11.432 16.085-21.627v-5.81c0-10.717-7.506-19.708-17.535-22.008zM63.71 237.125C63.71 131.187 149.896 45 255.835 45S447.96 131.187 447.96 237.125v58.7h-27.888a64.77 64.77 0 0 0 7.259-29.747c0-9.561-2.046-18.787-6.081-27.423a7.5 7.5 0 0 0-13.59 6.35c3.1 6.633 4.671 13.723 4.671 21.073a49.851 49.851 0 0 1-9.875 29.747h-82.073a68.421 68.421 0 0 0 3.912-22.766l-.003-.369a10.737 10.737 0 0 0 2.441-7.707l-.074-.952a81.022 81.022 0 0 0-6.053-25.058c9.161-14.126 24.883-22.763 41.856-22.763a49.676 49.676 0 0 1 26.83 7.844 7.5 7.5 0 0 0 8.086-12.634 64.65 64.65 0 0 0-34.916-10.21c-19.407 0-37.547 8.686-49.744 23.261a81.08 81.08 0 0 0-25.89-24.171l-7.325-4.298v-19.86c0-6.111-4.972-11.083-11.083-11.083h-24.17c-6.111 0-11.083 4.972-11.083 11.083v19.86l-7.325 4.298a81.067 81.067 0 0 0-24.083 21.633l-21.606-40.574a68.923 68.923 0 0 0-37.588-32.526 39.21 39.21 0 0 0-31.641 2.285 39.215 39.215 0 0 0-19.556 24.977 68.922 68.922 0 0 0 6.006 49.343l37.481 70.388H63.71zm88.14 58.7-41.235-77.438a53.95 53.95 0 0 1-4.701-38.625c1.687-6.691 5.971-12.162 12.061-15.405 6.091-3.244 13.022-3.745 19.516-1.409a53.936 53.936 0 0 1 28.384 23.614L146.29 196.99a7.5 7.5 0 0 0 7.051 13.241l19.627-10.451 13.619 25.575-19.627 10.451a7.5 7.5 0 0 0 7.051 13.241l17.809-9.483a81.015 81.015 0 0 0-5.807 24.466l-.074.961a10.774 10.774 0 0 0 1.468 6.319c-.018.6-.03 1.185-.03 1.752a68.427 68.427 0 0 0 3.914 22.766H151.85zm116.357-89.059 11.029 6.472a66.163 66.163 0 0 1 31.323 43.794l-23.74-16.479a13.027 13.027 0 0 0-17.511 2.36l-12.974 15.524-12.974-15.525c-2.59-3.099-6.283-4.719-10.029-4.719-2.584 0-5.193.771-7.481 2.359l-23.74 16.478a66.163 66.163 0 0 1 31.323-43.794l11.029-6.472a7.5 7.5 0 0 0 3.704-6.469v-20.238h16.336v20.238a7.504 7.504 0 0 0 3.705 6.471zm-60.729 89.059a53.472 53.472 0 0 1-5.062-20.774c.171-.105.342-.21.509-.326l30.046-20.854 15.047 18.007c2.065 2.471 5.097 3.888 8.317 3.888s6.252-1.417 8.317-3.888v-.001l15.047-18.006 29.574 20.527a53.458 53.458 0 0 1-5.081 21.428h-96.714zm288.017 28.394c0 4.182-3.402 7.584-7.584 7.584H101.084c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h377.952l-5.751 33.987h-14.299c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h11.76l-7.907 46.723a64.83 64.83 0 0 1-64.093 54.157H112.924a64.83 64.83 0 0 1-64.093-54.157l-7.907-46.723h11.76c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5H38.386l-5.751-33.987h36.487c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5H23.759c-4.182 0-7.584-3.402-7.584-7.584v-5.81c0-4.182 3.402-7.584 7.584-7.584h464.152c4.182 0 7.584 3.402 7.584 7.584z\" fill=\"currentColor\" opacity=\"1\" data-original=\"currentColor\"></path>
                      <path d=\"M246.338 395.79h21.993c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-21.993c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5zM174.455 395.79h21.994c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-21.994c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5zM102.573 395.79h21.994c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-21.994a7.5 7.5 0 0 0 0 15zM315.221 395.79h21.994c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-21.994c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5zM387.103 395.79h21.994c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-21.994c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5zM246.338 474.186h21.993c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-21.993c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5zM174.455 474.186h21.994c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-21.994c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5zM102.573 474.186h21.994c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-21.994a7.5 7.5 0 0 0 0 15zM337.215 459.186h-21.994c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h21.994a7.5 7.5 0 0 0 0-15zM387.103 474.186h21.994c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-21.994c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5zM273.606 430.229a7.5 7.5 0 0 0 7.5 7.5H303.1c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-21.994a7.5 7.5 0 0 0-7.5 7.5zM201.725 430.229a7.5 7.5 0 0 0 7.5 7.5h21.994c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-21.994a7.5 7.5 0 0 0-7.5 7.5zM129.843 430.229a7.5 7.5 0 0 0 7.5 7.5h21.993c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-21.993a7.5 7.5 0 0 0-7.5 7.5zM87.454 422.729H67.46c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h19.994c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5zM342.49 430.229a7.5 7.5 0 0 0 7.5 7.5h21.993c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5H349.99a7.5 7.5 0 0 0-7.5 7.5zM414.372 430.229a7.5 7.5 0 0 0 7.5 7.5h21.994c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-21.994a7.5 7.5 0 0 0-7.5 7.5z\" fill=\"currentColor\" opacity=\"1\" data-original=\"currentColor\"></path>
                    </g>
                  </svg>
                </div>
                <div class=\"service-item-content\">
                  <h3 class=\"service-heading\">Fresh Vegetables</h3>
                  <p>
                    Gravida sodales condimentum pellen tesq accumsan orci quam
                    sagittis sapie
                  </p>
                </div>
              </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
              <div class=\"service-item\">
                <span class=\"number\">07</span>
                <div class=\"service-item-icon\">
                  <svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"80\" height=\"80\" x=\"0\" y=\"0\" viewBox=\"0 0 512.805 512.805\" style=\"enable-background: new 0 0 512 512\" xml:space=\"preserve\" class=\"\">
                    <g>
                      <path d=\"M505.305 50.503h-50.094v-7.141c0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v7.141h-50.094c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5h50.094v29.428h-15.309c-7.223 0-13.385 4.557-15.809 10.939h-33.847l-16.98-9.451a7.5 7.5 0 0 0-7.295 13.107l18.682 10.397a7.507 7.507 0 0 0 3.647.946h34.681v15.505h-32.393a7.495 7.495 0 0 0-5.565 2.473l-47.127 52.176a49.438 49.438 0 0 1-36.627 16.273h-60.732a49.442 49.442 0 0 1-36.627-16.273l-47.127-52.176a7.5 7.5 0 0 0-5.565-2.473h-31.393V120.87h33.681a7.507 7.507 0 0 0 3.647-.946l64.468-35.883a64.829 64.829 0 0 1 31.454-8.163h35.656a64.819 64.819 0 0 1 31.454 8.164l17.778 9.896a7.5 7.5 0 0 0 7.295-13.107l-17.778-9.895a79.844 79.844 0 0 0-38.749-10.058h-35.656a79.854 79.854 0 0 0-38.749 10.057l-62.767 34.936h-32.847c-2.424-6.383-8.587-10.939-15.809-10.939H72.594V65.503h50.094c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5H72.594v-7.141c0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v7.141H7.5c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5h50.094v29.428H42.285c-9.331 0-16.922 7.591-16.922 16.922v37.917c0 20.438 16.628 37.066 37.066 37.066h5.329c19.899 0 36.18-15.765 37.025-35.461h28.101l31.968 35.393-22.399 27.123a21.63 21.63 0 0 0-4.939 13.742v47.817c0 12.898 10.494 23.393 23.394 23.393 12.898 0 23.393-10.494 23.393-23.393v-32.069l38.482-21.157c.917.04 1.834.073 2.755.073h7.432v13.542l-8.567 8.567a13.242 13.242 0 0 0-3.903 9.424v12.244c0 7.191 5.729 13.055 12.86 13.304v31.344c-4.637 2.472-7.804 7.354-7.804 12.965v21.867c0 8.097 6.588 14.685 14.686 14.685h31.326c8.098 0 14.686-6.588 14.686-14.685v-21.867c0-5.611-3.167-10.493-7.804-12.965v-31.32h1.533c7.349 0 13.327-5.979 13.327-13.327V253.83c0-3.56-1.387-6.906-3.903-9.423l-8.567-8.568v-13.542h5.432c.921 0 1.838-.034 2.755-.073l38.482 21.157v32.069c0 12.898 10.494 23.393 23.394 23.393 12.898 0 23.393-10.494 23.393-23.393v-6.886c0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v6.886c0 4.628-3.765 8.393-8.393 8.393s-8.394-3.765-8.394-8.393v-36.505a7.5 7.5 0 0 0-3.887-6.572l-27.481-15.109c8.638-3.622 16.49-9.101 22.889-16.186l2.763-3.06 20.994 25.422a6.596 6.596 0 0 1 1.507 4.191v8.97c0 4.143 3.357 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-8.97c0-5.004-1.755-9.885-4.94-13.742l-22.398-27.122 31.968-35.393h29.101c.844 19.696 17.125 35.461 37.025 35.461h5.329c20.438 0 37.066-16.628 37.066-37.066v-37.917c0-9.331-7.591-16.922-16.922-16.922h-15.309V65.503h50.094c4.143 0 7.5-3.357 7.5-7.5s-3.361-7.5-7.503-7.5zm-463.02 59.428h45.617c1.06 0 1.922.862 1.922 1.922v10.341H40.363v-10.341c0-1.06.863-1.922 1.922-1.922zm25.474 61.905H62.43c-12.167 0-22.066-9.899-22.066-22.066v-12.576h49.461v12.576c-.001 12.167-9.899 22.066-22.066 22.066zm105.428 60.537a7.501 7.501 0 0 0-3.887 6.572v36.505c0 4.628-3.766 8.393-8.394 8.393s-8.393-3.765-8.393-8.393v-47.817c0-1.526.535-3.016 1.507-4.192l20.994-25.422 2.763 3.06c6.4 7.085 14.251 12.563 22.889 16.186zm98.064 112.865h-30.697v-21.237h30.697zm-7.804-36.237h-15.09v-29.6h15.09zm4.586-64.753 10.274 10.275v9.878h-42.811v-9.878l10.274-10.275a7.498 7.498 0 0 0 2.196-5.303v-16.648h17.869v16.648a7.509 7.509 0 0 0 2.198 5.303zm182.342-72.412h-5.329c-12.167 0-22.065-9.899-22.065-22.066v-12.576h49.461v12.576c-.001 12.167-9.9 22.066-22.067 22.066zm22.066-59.983v10.341H422.98v-10.341c0-1.06.862-1.922 1.922-1.922h45.617c1.06 0 1.922.862 1.922 1.922zM362.367 383.195c6.981-.812 13.229-4.296 17.591-9.808s6.317-12.393 5.504-19.374c-.812-6.982-4.296-13.229-9.808-17.592-2.043-1.617-8.26-6.537-34.74-7.778a13.377 13.377 0 0 0-11.103 5.056 13.396 13.396 0 0 0-2.37 11.969c7.289 25.484 13.507 30.406 15.551 32.023 4.694 3.716 10.382 5.685 16.279 5.685 1.027 0 2.061-.06 3.096-.181zm-19.86-39.447c15.467.902 22.253 3.181 23.839 4.436a11.245 11.245 0 0 1 4.218 7.564c.349 3.002-.491 5.961-2.367 8.331s-4.562 3.868-7.564 4.218c-3 .352-5.961-.491-8.331-2.367-1.587-1.256-5.364-7.336-9.795-22.182zM397.513 429.988c-2.044-1.617-8.263-6.54-34.74-7.778a13.416 13.416 0 0 0-11.103 5.057 13.392 13.392 0 0 0-2.37 11.967c7.289 25.486 13.507 30.407 15.551 32.024 4.695 3.716 10.382 5.685 16.279 5.685 1.026 0 2.06-.061 3.095-.181 6.982-.812 13.23-4.296 17.592-9.808s6.317-12.393 5.504-19.375c-.813-6.981-4.297-13.229-9.808-17.591zm-7.458 27.658a11.243 11.243 0 0 1-7.564 4.217 11.251 11.251 0 0 1-8.331-2.366c-1.586-1.256-5.363-7.337-9.793-22.182 15.464.9 22.251 3.18 23.838 4.436a11.245 11.245 0 0 1 4.218 7.564 11.25 11.25 0 0 1-2.368 8.331zM477.456 361.45c-2.044-1.617-8.263-6.54-34.74-7.778a13.403 13.403 0 0 0-11.103 5.057 13.392 13.392 0 0 0-2.37 11.967c7.289 25.486 13.507 30.407 15.551 32.024 4.695 3.716 10.382 5.685 16.279 5.685 1.026 0 2.06-.061 3.095-.181 6.982-.812 13.23-4.296 17.592-9.808s6.317-12.393 5.504-19.375c-.813-6.981-4.296-13.229-9.808-17.591zm-7.458 27.657c-1.876 2.37-4.562 3.867-7.564 4.217s-5.961-.492-8.331-2.366c-1.586-1.256-5.363-7.337-9.793-22.182 15.464.9 22.251 3.18 23.838 4.436a11.245 11.245 0 0 1 4.218 7.564 11.248 11.248 0 0 1-2.368 8.331zM171.891 328.644c-26.48 1.241-32.697 6.161-34.74 7.778-5.512 4.362-8.995 10.609-9.808 17.592-.813 6.981 1.142 13.862 5.504 19.374 4.361 5.512 10.609 8.995 17.591 9.808 1.036.121 2.068.181 3.096.181 5.897 0 11.585-1.969 16.279-5.685 2.044-1.617 8.262-6.539 15.551-32.023a13.396 13.396 0 0 0-2.37-11.969 13.39 13.39 0 0 0-11.103-5.056zm-11.387 37.286a11.231 11.231 0 0 1-8.331 2.367c-3.002-.35-5.688-1.848-7.564-4.218s-2.716-5.329-2.367-8.331a11.245 11.245 0 0 1 4.218-7.564c1.586-1.255 8.372-3.533 23.839-4.436-4.432 14.846-8.209 20.926-9.795 22.182zM150.032 422.21c-26.478 1.238-32.696 6.161-34.74 7.778-5.512 4.361-8.995 10.609-9.808 17.591s1.142 13.863 5.504 19.375c4.361 5.512 10.609 8.995 17.592 9.808 1.035.121 2.067.181 3.095.181 5.896-.001 11.585-1.97 16.279-5.685 2.044-1.617 8.262-6.538 15.551-32.024a13.392 13.392 0 0 0-2.37-11.967 13.385 13.385 0 0 0-11.103-5.057zm-11.386 37.286a11.253 11.253 0 0 1-8.331 2.366c-3.003-.35-5.688-1.847-7.564-4.217s-2.716-5.329-2.367-8.331a11.245 11.245 0 0 1 4.218-7.564c1.587-1.256 8.374-3.535 23.838-4.436-4.431 14.845-8.209 20.926-9.794 22.182zM70.089 353.672c-26.478 1.238-32.696 6.161-34.74 7.778-5.512 4.361-8.995 10.609-9.808 17.591s1.142 13.863 5.504 19.375c4.361 5.512 10.609 8.995 17.592 9.808 1.035.121 2.067.181 3.095.181 5.896-.001 11.585-1.97 16.279-5.685 2.044-1.617 8.262-6.538 15.551-32.024a13.392 13.392 0 0 0-2.37-11.967 13.374 13.374 0 0 0-11.103-5.057zm-11.387 37.286a11.243 11.243 0 0 1-8.331 2.366c-3.003-.35-5.688-1.847-7.564-4.217s-2.716-5.329-2.367-8.331a11.245 11.245 0 0 1 4.218-7.564c1.587-1.256 8.374-3.535 23.838-4.436-4.431 14.845-8.208 20.926-9.794 22.182z\" fill=\"currentColor\" opacity=\"1\" data-original=\"currentColor\"></path>
                      <path d=\"M213.116 133.756h14.881c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5h-14.881c-12.212 0-22.147 9.936-22.147 22.147v13.102c0 12.212 9.936 22.146 22.147 22.146h85.572c12.212 0 22.147-9.935 22.147-22.146v-13.102c0-12.212-9.936-22.147-22.147-22.147h-38.729c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5h38.729a7.155 7.155 0 0 1 7.147 7.147v13.102c0 3.94-3.206 7.146-7.147 7.146h-85.572c-3.941 0-7.147-3.206-7.147-7.146v-13.102a7.155 7.155 0 0 1 7.147-7.147z\" fill=\"currentColor\" opacity=\"1\" data-original=\"currentColor\"></path>
                    </g>
                  </svg>
                </div>
                <div class=\"service-item-content\">
                  <h3 class=\"service-heading\">Watering</h3>
                  <p>
                    Gravida sodales condimentum pellen tesq accumsan orci quam
                    sagittis sapie
                  </p>
                </div>
              </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
              <div class=\"service-item\">
                <span class=\"number\">08</span>
                <div class=\"service-item-icon\">
                  <svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"80\" height=\"80\" x=\"0\" y=\"0\" viewBox=\"0 0 511.67 511.67\" style=\"enable-background: new 0 0 512 512\" xml:space=\"preserve\" class=\"\">
                    <g>
                      <path d=\"M492.96 296.401v-59.276c0-63.338-24.665-122.886-69.452-167.673C378.721 24.666 319.174 0 255.835 0c-54.517 0-107.757 18.967-149.914 53.407a7.5 7.5 0 1 0 9.491 11.616C154.896 32.765 204.767 15 255.835 15c59.332 0 115.112 23.105 157.066 65.059 41.953 41.954 65.059 97.734 65.059 157.066v58.7h-15v-58.7C462.96 122.916 370.044 30 255.835 30S48.71 122.916 48.71 237.125v58.7h-15v-58.7c0-56.142 21.01-109.737 59.158-150.913a7.502 7.502 0 0 0-11.004-10.195C41.139 119.975 18.71 177.19 18.71 237.125v59.276c-10.029 2.3-17.535 11.291-17.535 22.008v5.81c0 10.194 6.791 18.828 16.085 21.627l16.782 99.17c6.535 38.622 39.71 66.654 78.882 66.654h285.822c39.172 0 72.347-28.032 78.882-66.654l16.782-99.17c9.294-2.798 16.085-11.432 16.085-21.627v-5.81c0-10.717-7.506-19.708-17.535-22.008zM63.71 237.125C63.71 131.187 149.896 45 255.835 45S447.96 131.187 447.96 237.125v58.7h-27.888a64.77 64.77 0 0 0 7.259-29.747c0-9.561-2.046-18.787-6.081-27.423a7.5 7.5 0 0 0-13.59 6.35c3.1 6.633 4.671 13.723 4.671 21.073a49.851 49.851 0 0 1-9.875 29.747h-82.073a68.421 68.421 0 0 0 3.912-22.766l-.003-.369a10.737 10.737 0 0 0 2.441-7.707l-.074-.952a81.022 81.022 0 0 0-6.053-25.058c9.161-14.126 24.883-22.763 41.856-22.763a49.676 49.676 0 0 1 26.83 7.844 7.5 7.5 0 0 0 8.086-12.634 64.65 64.65 0 0 0-34.916-10.21c-19.407 0-37.547 8.686-49.744 23.261a81.08 81.08 0 0 0-25.89-24.171l-7.325-4.298v-19.86c0-6.111-4.972-11.083-11.083-11.083h-24.17c-6.111 0-11.083 4.972-11.083 11.083v19.86l-7.325 4.298a81.067 81.067 0 0 0-24.083 21.633l-21.606-40.574a68.923 68.923 0 0 0-37.588-32.526 39.21 39.21 0 0 0-31.641 2.285 39.215 39.215 0 0 0-19.556 24.977 68.922 68.922 0 0 0 6.006 49.343l37.481 70.388H63.71zm88.14 58.7-41.235-77.438a53.95 53.95 0 0 1-4.701-38.625c1.687-6.691 5.971-12.162 12.061-15.405 6.091-3.244 13.022-3.745 19.516-1.409a53.936 53.936 0 0 1 28.384 23.614L146.29 196.99a7.5 7.5 0 0 0 7.051 13.241l19.627-10.451 13.619 25.575-19.627 10.451a7.5 7.5 0 0 0 7.051 13.241l17.809-9.483a81.015 81.015 0 0 0-5.807 24.466l-.074.961a10.774 10.774 0 0 0 1.468 6.319c-.018.6-.03 1.185-.03 1.752a68.427 68.427 0 0 0 3.914 22.766H151.85zm116.357-89.059 11.029 6.472a66.163 66.163 0 0 1 31.323 43.794l-23.74-16.479a13.027 13.027 0 0 0-17.511 2.36l-12.974 15.524-12.974-15.525c-2.59-3.099-6.283-4.719-10.029-4.719-2.584 0-5.193.771-7.481 2.359l-23.74 16.478a66.163 66.163 0 0 1 31.323-43.794l11.029-6.472a7.5 7.5 0 0 0 3.704-6.469v-20.238h16.336v20.238a7.504 7.504 0 0 0 3.705 6.471zm-60.729 89.059a53.472 53.472 0 0 1-5.062-20.774c.171-.105.342-.21.509-.326l30.046-20.854 15.047 18.007c2.065 2.471 5.097 3.888 8.317 3.888s6.252-1.417 8.317-3.888v-.001l15.047-18.006 29.574 20.527a53.458 53.458 0 0 1-5.081 21.428h-96.714zm288.017 28.394c0 4.182-3.402 7.584-7.584 7.584H101.084c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h377.952l-5.751 33.987h-14.299c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h11.76l-7.907 46.723a64.83 64.83 0 0 1-64.093 54.157H112.924a64.83 64.83 0 0 1-64.093-54.157l-7.907-46.723h11.76c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5H38.386l-5.751-33.987h36.487c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5H23.759c-4.182 0-7.584-3.402-7.584-7.584v-5.81c0-4.182 3.402-7.584 7.584-7.584h464.152c4.182 0 7.584 3.402 7.584 7.584z\" fill=\"currentColor\" opacity=\"1\" data-original=\"currentColor\"></path>
                      <path d=\"M246.338 395.79h21.993c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-21.993c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5zM174.455 395.79h21.994c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-21.994c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5zM102.573 395.79h21.994c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-21.994a7.5 7.5 0 0 0 0 15zM315.221 395.79h21.994c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-21.994c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5zM387.103 395.79h21.994c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-21.994c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5zM246.338 474.186h21.993c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-21.993c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5zM174.455 474.186h21.994c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-21.994c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5zM102.573 474.186h21.994c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-21.994a7.5 7.5 0 0 0 0 15zM337.215 459.186h-21.994c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h21.994a7.5 7.5 0 0 0 0-15zM387.103 474.186h21.994c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-21.994c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5zM273.606 430.229a7.5 7.5 0 0 0 7.5 7.5H303.1c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-21.994a7.5 7.5 0 0 0-7.5 7.5zM201.725 430.229a7.5 7.5 0 0 0 7.5 7.5h21.994c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-21.994a7.5 7.5 0 0 0-7.5 7.5zM129.843 430.229a7.5 7.5 0 0 0 7.5 7.5h21.993c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-21.993a7.5 7.5 0 0 0-7.5 7.5zM87.454 422.729H67.46c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h19.994c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5zM342.49 430.229a7.5 7.5 0 0 0 7.5 7.5h21.993c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5H349.99a7.5 7.5 0 0 0-7.5 7.5zM414.372 430.229a7.5 7.5 0 0 0 7.5 7.5h21.994c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-21.994a7.5 7.5 0 0 0-7.5 7.5z\" fill=\"currentColor\" opacity=\"1\" data-original=\"currentColor\"></path>
                    </g>
                  </svg>
                </div>
                <div class=\"service-item-content\">
                  <h3 class=\"service-heading\">Vegetable selling</h3>
                  <p>
                    Gravida sodales condimentum pellen tesq accumsan orci quam
                    sagittis sapie
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Services Section -->

    <!-- About Section -->
    <section id=\"about\" class=\"about section\">

      <div class=\"content\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-lg-6 mb-4 mb-lg-0\">
              <img src=\"assets/img/img_long_5.jpg\" alt=\"Image \" class=\"img-fluid img-overlap\" data-aos=\"zoom-out\">
            </div>
            <div class=\"col-lg-5 ml-auto\" data-aos=\"fade-up\" data-aos-delay=\"100\">
              <h3 class=\"content-subtitle text-white opacity-50\">Why Choose Us</h3>
              <h2 class=\"content-title mb-4\">
                More than <strong>50 year experience</strong> in agriculture
                industry
              </h2>
              <p class=\"opacity-50\">
                Reprehenderit, odio laboriosam? Blanditiis quae ullam quasi illum
                minima nostrum perspiciatis error consequatur sit nulla.
              </p>

              <div class=\"row my-5\">
                <div class=\"col-lg-12 d-flex align-items-start mb-4\">
                  <i class=\"bi bi-cloud-rain me-4 display-6\"></i>
                  <div>
                    <h4 class=\"m-0 h5 text-white\">Plants needs rain</h4>
                    <p class=\"text-white opacity-50\">Lorem ipsum dolor sit amet.</p>
                  </div>
                </div>
                <div class=\"col-lg-12 d-flex align-items-start mb-4\">
                  <i class=\"bi bi-heart me-4 display-6\"></i>
                  <div>
                    <h4 class=\"m-0 h5 text-white\">Love organic foods</h4>
                    <p class=\"text-white opacity-50\">Lorem ipsum dolor sit amet.</p>
                  </div>
                </div>
                <div class=\"col-lg-12 d-flex align-items-start\">
                  <i class=\"bi bi-shop me-4 display-6\"></i>
                  <div>
                    <h4 class=\"m-0 h5 text-white\">Sell vegies</h4>
                    <p class=\"text-white opacity-50\">Lorem ipsum dolor sit amet.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /About Section -->

    <!-- About 3 Section -->
    <section id=\"about-3\" class=\"about-3 section\">

      <div class=\"container\">
        <div class=\"row gy-4 justify-content-between align-items-center\">
          <div class=\"col-lg-6 order-lg-2 position-relative\" data-aos=\"zoom-out\">
            <img src=\"asset";
        // line 366
        yield "assets/img/img_sq_1.jpg";
        yield "\" alt=\"Image\" class=\"img-fluid\">
            <a href=\"https://www.youtube.com/watch?v=Y7f98aduVJ8\" class=\"glightbox pulsating-play-btn\">
              <span class=\"play\"><i class=\"bi bi-play-fill\"></i></span>
            </a>
          </div>
          <div class=\"col-lg-5 order-lg-1\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <h2 class=\"content-title mb-4\">Plants Make Life Better</h2>
            <p class=\"mb-4\">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim
              necessitatibus placeat, atque qui voluptatem velit explicabo vitae
              repellendus architecto provident nisi ullam minus asperiores commodi!
              Tenetur, repellat aliquam nihil illo.
            </p>
            <ul class=\"list-unstyled list-check\">
              <li>Lorem ipsum dolor sit amet</li>
              <li>Velit explicabo vitae repellendu</li>
              <li>Repellat aliquam nihil illo</li>
            </ul>

            <p><a href=\"#\" class=\"btn-cta\">Get in touch</a></p>
          </div>
        </div>
      </div>
    </section><!-- /About 3 Section -->

    <!-- Services 2 Section -->
    <section id=\"services-2\" class=\"services-2 section dark-background\">
      <!-- Section Title -->
      <div class=\"container section-title\" data-aos=\"fade-up\">
        <h2>Services</h2>
        <p>Necessitatibus eius consequatur</p>
      </div><!-- End Section Title -->

      <div class=\"services-carousel-wrap\">
        <div class=\"container\">
          <div class=\"swiper init-swiper\">
            <script type=\"application/json\" class=\"swiper-config\">
              {
                \"loop\": true,
                \"speed\": 600,
                \"autoplay\": {
                  \"delay\": 5000
                },
                \"slidesPerView\": \"auto\",
                \"pagination\": {
                  \"el\": \".swiper-pagination\",
                  \"type\": \"bullets\",
                  \"clickable\": true
                },
                \"navigation\": {
                  \"nextEl\": \".js-custom-next\",
                  \"prevEl\": \".js-custom-prev\"
                },
                \"breakpoints\": {
                  \"320\": {
                    \"slidesPerView\": 1,
                    \"spaceBetween\": 40
                  },
                  \"1200\": {
                    \"slidesPerView\": 3,
                    \"spaceBetween\": 40
                  }
                }
              }
            </script>
            <button class=\"navigation-prev js-custom-prev\">
              <i class=\"bi bi-arrow-left-short\"></i>
            </button>
            <button class=\"navigation-next js-custom-next\">
              <i class=\"bi bi-arrow-right-short\"></i>
            </button>
            <div class=\"swiper-wrapper\">
              <div class=\"swiper-slide\">
                <div class=\"service-item\">
                  <div class=\"service-item-contents\">
                    <a href=\"#\">
                      <span class=\"service-item-category\">We do</span>
                      <h2 class=\"service-item-title\">Planting</h2>
                    </a>
                  </div>
                  <img src=\" asset";
        // line 446
        yield "assets/img/img_sq_1.jpg";
        yield "\" alt=\"Image\" class=\"img-fluid\">
                </div>
              </div>
              <div class=\"swiper-slide\">
                <div class=\"service-item\">
                  <div class=\"service-item-contents\">
                    <a href=\"#\">
                      <span class=\"service-item-category\">We do</span>
                      <h2 class=\"service-item-title\">Mulching</h2>
                    </a>
                  </div>
                  <img src=\"asset";
        // line 457
        yield "assets/img/img_sq_3.jpg";
        yield "\" alt=\"Image\" class=\"img-fluid\">
                </div>
              </div>
              <div class=\"swiper-slide\">
                <div class=\"service-item\">
                  <div class=\"service-item-contents\">
                    <a href=\"#\">
                      <span class=\"service-item-category\">We do</span>
                      <h2 class=\"service-item-title\">Watering</h2>
                    </a>
                  </div>
                  <img src=\"asset";
        // line 468
        yield "assets/img/img_sq_8.jpg";
        yield "\" alt=\"Image\" class=\"img-fluid\">
                </div>
              </div>

              <div class=\"swiper-slide\">
                <div class=\"service-item\">
                  <div class=\"service-item-contents\">
                    <a href=\"#\">
                      <span class=\"service-item-category\">We do</span>
                      <h2 class=\"service-item-title\">Fertilizing</h2>
                    </a>
                  </div>
                  <img src=\"asset";
        // line 480
        yield "assets/img/img_sq_4.jpg";
        yield "\" alt=\"Image\" class=\"img-fluid\">
                </div>
              </div>
              <div class=\"swiper-slide\">
                <div class=\"service-item\">
                  <div class=\"service-item-contents\">
                    <a href=\"#\">
                      <span class=\"service-item-category\">We do</span>
                      <h2 class=\"service-item-title\">Harvesting</h2>
                    </a>
                  </div>
                  <img src=\"asset";
        // line 491
        yield "assets/img/img_sq_5.jpg";
        yield "\" alt=\"Image\" class=\"img-fluid\">
                </div>
              </div>
              <div class=\"swiper-slide\">
                <div class=\"service-item\">
                  <div class=\"service-item-contents\">
                    <a href=\"#\">
                      <span class=\"service-item-category\">We do</span>
                      <h2 class=\"service-item-title\">Mowing</h2>
                    </a>
                  </div>
                  <img src=\"asset";
        // line 502
        yield "assets/img/img_sq_6.jpg";
        yield "\" alt=\"Image\" class=\"img-fluid\">
                  
                </div>
              </div>
              <div class=\"swiper-slide\">
                <div class=\"service-item\">
                  <div class=\"service-item-contents\">
                    <a href=\"#\">
                      <span class=\"service-item-category\">We do</span>
                      <h2 class=\"service-item-title\">Seeding Plants</h2>
                    </a>
                  </div>
                  <img src=\"";
        // line 514
        yield "assets/img/img_sq_8.jpg";
        yield "\" alt=\"Image\" class=\"img-fluid\">
                </div>
              </div>
            </div>
            <div class=\"swiper-pagination\"></div>
          </div>
        </div>
      </div>
    </section><!-- /Services 2 Section -->

    <!-- Testimonials Section -->
    <section class=\"testimonials-12 testimonials section\" id=\"testimonials\">
      <!-- Section Title -->
      <div class=\"container section-title\" data-aos=\"fade-up\">
        <h2>TESTIMONIALS</h2>
        <p>Necessitatibus eius consequatur</p>
      </div><!-- End Section Title -->

      <div class=\"testimonial-wrap\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-6 mb-4 mb-md-4\">
              <div class=\"testimonial\">
                <img src=\"asset";
        // line 537
        yield "assets/img/testimonials/testimonials-1.jpg";
        yield "\" alt=\"Testimonial author\">
                <blockquote>
                  <p>
                    “Lorem ipsum dolor sit, amet consectetur adipisicing
                    elit. Provident deleniti iusto molestias, dolore vel fugiat
                    ab placeat ea?”
                  </p>
                </blockquote>
                <p class=\"client-name\">James Smith</p>
              </div>
            </div>
            <div class=\"col-md-6 mb-4 mb-md-4\">
              <div class=\"testimonial\">
                <img src=\"asset";
        // line 550
        yield "assets/img/testimonials/testimonials-2.jpg";
        yield "\" alt=\"Testimonial author\">
                <blockquote>
                  <p>
                    “Lorem ipsum dolor sit, amet consectetur adipisicing
                    elit. Provident deleniti iusto molestias, dolore vel fugiat
                    ab placeat ea?”
                  </p>
                </blockquote>
                <p class=\"client-name\">Kate Smith</p>
              </div>
            </div>
            <div class=\"col-md-6 mb-4 mb-md-4\">
              <div class=\"testimonial\">
                <img src=\"assets/img/testimonials/testimonials-3.jpg\" alt=\"Testimonial author\">
                <blockquote>
                  <p>
                    “Lorem ipsum dolor sit, amet consectetur adipisicing
                    elit. Provident deleniti iusto molestias, dolore vel fugiat
                    ab placeat ea?”
                  </p>
                </blockquote>
                <p class=\"client-name\">Claire Anderson</p>
              </div>
            </div>
            <div class=\"col-md-6 mb-4 mb-md-4\">
              <div class=\"testimonial\">
                <img src=\"assets/img/testimonials/testimonials-4.jpg\" alt=\"Testimonial author\">
                <blockquote>
                  <p>
                    “Lorem ipsum dolor sit, amet consectetur adipisicing
                    elit. Provident deleniti iusto molestias, dolore vel fugiat
                    ab placeat ea?”
                  </p>
                </blockquote>
                <p class=\"client-name\">Dan Smith</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Testimonials Section -->

    <!-- Recent Posts Section -->
    <section id=\"recent-posts\" class=\"recent-posts section\">

      <!-- Section Title -->
      <div class=\"container section-title\" data-aos=\"fade-up\">
        <h2>Recent Posts</h2>
        <p>Necessitatibus eius consequatur</p>
      </div><!-- End Section Title -->

      <div class=\"container\">

        <div class=\"row gy-5\">

          <div class=\"col-xl-4 col-md-6\">
            <div class=\"post-item position-relative h-100\" data-aos=\"fade-up\" data-aos-delay=\"100\">

              <div class=\"post-img position-relative overflow-hidden\">
                <img src=\"assets/img/blog/blog-1.jpg\" class=\"img-fluid\" alt=\"\">
                <span class=\"post-date\">December 12</span>
              </div>

              <div class=\"post-content d-flex flex-column\">

                <h3 class=\"post-title\">Eum ad dolor et. Autem aut fugiat debitis</h3>

                <div class=\"meta d-flex align-items-center\">
                  <div class=\"d-flex align-items-center\">
                    <i class=\"bi bi-person\"></i> <span class=\"ps-2\">Julia Parker</span>
                  </div>
                  <span class=\"px-3 text-black-50\">/</span>
                  <div class=\"d-flex align-items-center\">
                    <i class=\"bi bi-folder2\"></i> <span class=\"ps-2\">Politics</span>
                  </div>
                </div>

                <hr>

                <a href=\"blog-details.html\" class=\"readmore stretched-link\"><span>Read More</span><i class=\"bi bi-arrow-right\"></i></a>

              </div>

            </div>
          </div><!-- End post item -->

          <div class=\"col-xl-4 col-md-6\">
            <div class=\"post-item position-relative h-100\" data-aos=\"fade-up\" data-aos-delay=\"200\">

              <div class=\"post-img position-relative overflow-hidden\">
                <img src=\"assets/img/blog/blog-2.jpg\" class=\"img-fluid\" alt=\"\">
                <span class=\"post-date\">July 17</span>
              </div>

              <div class=\"post-content d-flex flex-column\">

                <h3 class=\"post-title\">Et repellendus molestiae qui est sed omnis</h3>

                <div class=\"meta d-flex align-items-center\">
                  <div class=\"d-flex align-items-center\">
                    <i class=\"bi bi-person\"></i> <span class=\"ps-2\">Mario Douglas</span>
                  </div>
                  <span class=\"px-3 text-black-50\">/</span>
                  <div class=\"d-flex align-items-center\">
                    <i class=\"bi bi-folder2\"></i> <span class=\"ps-2\">Sports</span>
                  </div>
                </div>

                <hr>

                <a href=\"blog-details.html\" class=\"readmore stretched-link\"><span>Read More</span><i class=\"bi bi-arrow-right\"></i></a>

              </div>

            </div>
          </div><!-- End post item -->

          <div class=\"col-xl-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"300\">
            <div class=\"post-item position-relative h-100\">

              <div class=\"post-img position-relative overflow-hidden\">
                <img src=\"assets/img/blog/blog-3.jpg\" class=\"img-fluid\" alt=\"\">
                <span class=\"post-date\">September 05</span>
              </div>

              <div class=\"post-content d-flex flex-column\">

                <h3 class=\"post-title\">Quia assumenda est et veritati tirana ploder</h3>

                <div class=\"meta d-flex align-items-center\">
                  <div class=\"d-flex align-items-center\">
                    <i class=\"bi bi-person\"></i> <span class=\"ps-2\">Lisa Hunter</span>
                  </div>
                  <span class=\"px-3 text-black-50\">/</span>
                  <div class=\"d-flex align-items-center\">
                    <i class=\"bi bi-folder2\"></i> <span class=\"ps-2\">Economics</span>
                  </div>
                </div>

                <hr>

                <a href=\"blog-details.html\" class=\"readmore stretched-link\"><span>Read More</span><i class=\"bi bi-arrow-right\"></i></a>

              </div>

            </div>
          </div><!-- End post item -->

        </div>

      </div>

    </section><!-- /Recent Posts Section -->

    <!-- Call To Action Section -->
    <section id=\"call-to-action\" class=\"call-to-action section light-background\">

      <div class=\"content\">
        <div class=\"container\">
          <div class=\"row align-items-center\">
            <div class=\"col-lg-6\">
              <h3>Subscribe To Our Newsletter</h3>
              <p class=\"opacity-50\">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Nesciunt, reprehenderit!
              </p>
            </div>
            <div class=\"col-lg-6\">
              <form action=\"forms/newsletter.php\" class=\"form-subscribe php-email-form\">
                <div class=\"form-group d-flex align-items-stretch\">
                  <input type=\"email\" name=\"email\" class=\"form-control h-100\" placeholder=\"Enter your e-mail\">
                  <input type=\"submit\" class=\"btn btn-secondary px-4\" value=\"Subcribe\">
                </div>
                <div class=\"loading\">Loading</div>
                <div class=\"error-message\"></div>
                <div class=\"sent-message\">
                  Your subscription request has been sent. Thank you!
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Call To Action Section -->

  </main>

  <footer id=\"footer\" class=\"footer dark-background\">

    <div class=\"footer-top\">
      <div class=\"container\">
        <div class=\"row gy-4\">
          <div class=\"col-lg-4 col-md-6 footer-about\">
            <a href=\"index.html\" class=\"logo d-flex align-items-center\">
              <span class=\"sitename\">AgriCulture</span>
            </a>
            <div class=\"footer-contact pt-3\">
              <p>A108 Adam Street</p>
              <p>New York, NY 535022</p>
              <p class=\"mt-3\"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
              <p><strong>Email:</strong> <span>info@example.com</span></p>
            </div>
          </div>

          <div class=\"col-lg-2 col-md-3 footer-links\">
            <h4>Useful Links</h4>
            <ul>
              <li><a href=\"#\">Home</a></li>
              <li><a href=\"#\">About us</a></li>
              <li><a href=\"#\">Services</a></li>
              <li><a href=\"#\">Terms of service</a></li>
              <li><a href=\"#\">Privacy policy</a></li>
            </ul>
          </div>

          <div class=\"col-lg-2 col-md-3 footer-links\">
            <h4>Our Services</h4>
            <ul>
              <li><a href=\"#\">Web Design</a></li>
              <li><a href=\"#\">Web Development</a></li>
              <li><a href=\"#\">Product Management</a></li>
              <li><a href=\"#\">Marketing</a></li>
              <li><a href=\"#\">Graphic Design</a></li>
            </ul>
          </div>

          <div class=\"col-lg-2 col-md-3 footer-links\">
            <h4>Hic solutasetp</h4>
            <ul>
              <li><a href=\"#\">Molestiae accusamus iure</a></li>
              <li><a href=\"#\">Excepturi dignissimos</a></li>
              <li><a href=\"#\">Suscipit distinctio</a></li>
              <li><a href=\"#\">Dilecta</a></li>
              <li><a href=\"#\">Sit quas consectetur</a></li>
            </ul>
          </div>

          <div class=\"col-lg-2 col-md-3 footer-links\">
            <h4>Nobis illum</h4>
            <ul>
              <li><a href=\"#\">Ipsam</a></li>
              <li><a href=\"#\">Laudantium dolorum</a></li>
              <li><a href=\"#\">Dinera</a></li>
              <li><a href=\"#\">Trodelas</a></li>
              <li><a href=\"#\">Flexo</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class=\"copyright text-center\">
      <div class=\"container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center\">

        <div class=\"d-flex flex-column align-items-center align-items-lg-start\">
          <div>
            © Copyright <strong><span>MyWebsite</span></strong>. All Rights Reserved
          </div>
          <div class=\"credits\">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
            Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a> Distributed by <a href=\"https://themewagon.com\">ThemeWagon</a>
          </div>
        </div>

        <div class=\"social-links order-first order-lg-last mb-3 mb-lg-0\">
          <a href=\"\"><i class=\"bi bi-twitter-x\"></i></a>
          <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
          <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
          <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
        </div>

      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href=\"#\" id=\"scroll-top\" class=\"scroll-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

  <!-- Preloader -->
  <div id=\"preloader\"></div>
  
     ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 838
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_js(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 839
        yield "

   
  <script src=\"";
        // line 842
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 843
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/php-email-form/validate.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 844
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 845
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 846
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        yield "\"></script>

<!-- Main JS File -->
<script src=\"";
        // line 849
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        yield "\"></script>
     
     
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
        return "base.html.twig";
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
        return array (  1129 => 849,  1123 => 846,  1119 => 845,  1115 => 844,  1111 => 843,  1107 => 842,  1102 => 839,  1089 => 838,  791 => 550,  775 => 537,  749 => 514,  734 => 502,  720 => 491,  706 => 480,  691 => 468,  677 => 457,  663 => 446,  580 => 366,  323 => 112,  312 => 104,  301 => 96,  290 => 88,  279 => 80,  270 => 73,  257 => 72,  243 => 23,  239 => 22,  235 => 21,  231 => 20,  227 => 19,  222 => 18,  209 => 17,  186 => 7,  171 => 853,  169 => 838,  166 => 837,  164 => 72,  149 => 60,  146 => 59,  140 => 57,  137 => 56,  129 => 51,  126 => 50,  124 => 49,  117 => 45,  113 => 44,  109 => 43,  105 => 42,  101 => 41,  97 => 40,  89 => 35,  78 => 26,  76 => 17,  66 => 10,  60 => 7,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}Accueil{% endblock %}</title>

    <!-- Favicon -->
 <link rel=\"shortcut icon\" href=\"{{asset('assetsback/images/greenbridge.png.png')}}\">
    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com\" rel=\"preconnect\">
    <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;700&display=swap\" rel=\"stylesheet\">

    <!-- Vendor CSS Files -->
    {% block stylesheet  %}
    <link href=\"{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('assets/vendor/aos/aos.css\" rel=\"stylesheet')}}\">
  <link href=\"{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/css/main.css') }}\" rel=\"stylesheet\">

    {% endblock %}

</head>

<body class=\"index-page\">

  <header id=\"header\" class=\"header d-flex align-items-center position-relative\">
    <div class=\"container-fluid container-xl position-relative d-flex align-items-center justify-content-between\">

      <a href=\"index.html\" class=\"logo d-flex align-items-center\">
        <img src=\"{{ asset('assets/img/logo.png') }}\" alt=\"GreenBridge\">
      </a>

      <nav id=\"navmenu\" class=\"navmenu\">
        <ul>
          <li><a href=\"{{ path('home') }}\" class=\"active\">Home</a></li>
           <li><a href=\"{{ path('terrain_list') }}\">Terrains</a></li>
          <li><a href=\"{{ path('app_workshop_indexf') }}\">Workshop</a></li>
          <li><a href=\"{{ path('app_elearning_front') }}\">E-Learning</a></li>
          <li><a href=\"{{ path('app_reclamation_new') }}\">Reclamation</a></li>
          <li><a href=\"{{ path('app_article_index') }}\">Blog</a></li>
          <li class=\"dropdown\">
            <a href=\"#\"><span> Login </span> <i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
            <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"navbarDropdown\">
                    {% if app.user %}
                <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('app_user_profile', {'id': app.user.id}) }}\">
                        Profil
                        </a>
                    </li>
                {% endif %}
                    {% if is_granted('ROLE_ADMIN') %}
                        <li><a class=\"dropdown-item\" href=\"{{ path('homeback') }}\">Aller au back-Office</a></li>
                    {% endif %}
                    <li><hr class=\"dropdown-divider\"></li>
                    <li><a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">Logout</a></li>
                  </ul>
          </li>
        </ul>
        <i class=\"mobile-nav-toggle d-xl-none bi bi-list\"></i>
      </nav>

    </div>
  </header>
   
    
  <main class=\"main\">
     {% block body %}


    <!-- Hero Section -->
    <section id=\"hero\" class=\"hero section dark-background\">
      <div id=\"hero-carousel\" class=\"carousel slide carousel-fade\" data-bs-ride=\"carousel\" data-bs-interval=\"5000\">

        <div class=\"carousel-item active\">
          <img src=\"{{ asset('assets/img/hero_1.jpg') }}\" alt=\"\">
          <div class=\"carousel-container\">
            <h2>Farming is the best solution to world starvation</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>

        <div class=\"carousel-item\">
          <img src=\"{{ asset('assets/img/hero_2.jpg') }}\" alt=\"\">+
          <div class=\"carousel-container\">
            <h2>Organic vegetables are good for health</h2>
            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.</p>
          </div>
        </div>

        <div class=\"carousel-item\">
          <img src=\"{{ asset('assets/img/hero_3.jpg') }}\" alt=\"\">
          <div class=\"carousel-container\">
            <h2>Providing Fresh Produce Every Single Day</h2>
            <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
          </div>
        </div>

        <div class=\"carousel-item\">
          <img src=\"{{ asset('assets/img/hero_4.jpg') }}\" alt=\"\">
          <div class=\"carousel-container\">
            <h2>Farming as a Passion</h2>
            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius.</p>
          </div>
        </div> End Carousel Item -->

        <div class=\"carousel-item\">
          <img src=\"asset{{('assets/img/hero_5.jpg')}}\" alt=\"\">
          <div class=\"carousel-container\">
            <h2>Good Food For All</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div><!-- End Carousel Item -->

        <a class=\"carousel-control-prev\" href=\"#hero-carousel\" role=\"button\" data-bs-slide=\"prev\">
          <span class=\"carousel-control-prev-icon bi bi-chevron-left\" aria-hidden=\"true\"></span>
        </a>

        <a class=\"carousel-control-next\" href=\"#hero-carousel\" role=\"button\" data-bs-slide=\"next\">
          <span class=\"carousel-control-next-icon bi bi-chevron-right\" aria-hidden=\"true\"></span>
        </a>

        <ol class=\"carousel-indicators\"></ol>

      </div>

    </section><!-- /Hero Section -->

    <!-- Services Section -->
    <section id=\"services\" class=\"services section\">

      <!-- Section Title -->
      <div class=\"container section-title\" data-aos=\"fade-up\">
        <h2>SERVICES</h2>
        <p>Providing Fresh Produce Every Single Day</p>
      </div><!-- End Section Title -->
      <div class=\"content\">
        <div class=\"container\">
          <div class=\"row g-0\">
            <div class=\"col-lg-3 col-md-6\">
              <div class=\"service-item\">
                <span class=\"number\">01</span>
                <div class=\"service-item-icon\">
                  <svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"80\" height=\"80\" x=\"0\" y=\"0\" viewBox=\"0 0 509.435 509.435\" style=\"enable-background: new 0 0 512 512\" xml:space=\"preserve\" class=\"\">
                    <g>
                      <path d=\"M7.506 347.639c.994 0 2.005-.199 2.976-.619l62.037-26.857a7.5 7.5 0 0 0 3.903-9.862 7.5 7.5 0 0 0-9.862-3.903L4.523 333.255a7.501 7.501 0 0 0 2.983 14.384zM500.883 283.197c-10.953-10.952-28.175-11.423-39.689-1.267l-10.034-13.307c-19.783-26.239-46.1-46.623-76.103-58.948a7.5 7.5 0 0 0-5.699 13.875c11.136 4.575 21.708 10.382 31.567 17.249h-22.621c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h41.188a169.382 169.382 0 0 1 19.691 21.855l11.048 14.652-71.171 67.597h-19.48a35.772 35.772 0 0 0 6.775-20.976c0-19.837-16.139-35.975-35.976-35.975h-75.023l-48.33-15.005a160.871 160.871 0 0 0-37.992-6.934l2.533-3.359a169.852 169.852 0 0 1 19.67-21.855h27.398c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-8.848a165.125 165.125 0 0 1 38.01-19.73c28.992-10.532 60.376-12.89 90.754-6.821a7.498 7.498 0 0 0 8.824-5.885 7.5 7.5 0 0 0-5.885-8.824 184.517 184.517 0 0 0-28.616-3.4v-83.727h64.189c43.49 0 78.872-35.382 78.872-78.872V22.488c0-8.712-7.088-15.801-15.801-15.801h-51.729c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h51.729c.441 0 .801.359.801.801v11.051c0 35.219-28.653 63.872-63.872 63.872h-64.189V85.559c0-28.082 18.793-53.262 45.701-61.234a7.5 7.5 0 1 0-4.261-14.382c-15.972 4.732-30.338 14.681-40.451 28.015-10.46 13.79-15.988 30.25-15.988 47.601v16.416c-9.59-9.839-22.97-15.965-37.762-15.965h-43.432c-6.193 0-11.232 5.039-11.232 11.232v23.629c0 29.093 23.669 52.762 52.763 52.762h39.663v22.475a183.375 183.375 0 0 0-55.199 10.86c-32.974 11.978-61.705 33.297-83.085 61.653l-9.313 12.351a161.07 161.07 0 0 0-54.289 12.692 7.5 7.5 0 0 0-3.949 9.844 7.498 7.498 0 0 0 9.844 3.949c31.858-13.616 67.62-15.458 100.696-5.188l49.416 15.343c.72.224 1.47.337 2.224.337h76.161c11.566 0 20.976 9.409 20.976 20.975s-9.409 20.976-20.976 20.976h-71.803c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h123.477a7.5 7.5 0 0 0 5.165-2.062l83.48-79.289c5.56-5.279 14.158-5.167 19.577.252a13.957 13.957 0 0 1 .853 18.9l-80.942 97.046a37.161 37.161 0 0 1-21.112 12.581L259.57 448.474c-20.377 4.113-41.89 1.365-60.575-7.739l-53.332-25.982a7.507 7.507 0 0 0-6.884.162L3.903 488.665a7.5 7.5 0 0 0 7.197 13.161l131.475-71.888 49.849 24.285c21.631 10.538 46.53 13.72 70.114 8.957l129.506-26.146a52.209 52.209 0 0 0 29.663-17.677l80.942-97.046c9.682-11.61 8.923-28.426-1.766-39.114zM258.212 158.634c-20.822 0-37.763-16.94-37.763-37.762V101.01h39.664c20.822 0 37.762 16.94 37.762 37.762v19.861h-39.663z\" fill=\"currentColor\" opacity=\"1\" data-original=\"currentColor\"></path>
                      <path d=\"M319.171 240.778a7.5 7.5 0 0 0-7.5-7.5h-9.43c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h9.43a7.5 7.5 0 0 0 7.5-7.5zM272.068 264.08c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h34.888c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5zM400.305 307.996c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-8.172c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5z\" fill=\"currentColor\" opacity=\"1\" data-original=\"currentColor\"></path>
                    </g>
                  </svg>
                </div>
                <div class=\"service-item-content\">
                  <h3 class=\"service-heading\">Planting</h3>
                  <p>
                    Gravida sodales condimentum pellen tesq accumsan orci quam
                    sagittis sapie
                  </p>
                </div>
              </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
              <div class=\"service-item\">
                <span class=\"number\">02</span>
                <div class=\"service-item-icon\">
                  <svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"80\" height=\"80\" x=\"0\" y=\"0\" viewBox=\"0 0 514.314 514.314\" style=\"enable-background: new 0 0 512 512\" xml:space=\"preserve\" class=\"\">
                    <g>
                      <path d=\"M434.176 51.297h72.639c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-72.639c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5zM117.994 54.791h30.852c5.47 6.605 13.729 10.82 22.955 10.82h42.865l35.886 35.886c8.246 8.246 19.209 12.787 30.869 12.787h8.32c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-8.32c-7.654 0-14.85-2.981-20.262-8.393l-38.083-38.083a7.5 7.5 0 0 0-5.304-2.197H171.8c-8.159 0-14.797-6.638-14.797-14.797s6.638-14.797 14.797-14.797h123.757a66.756 66.756 0 0 1 35.416 10.157l30.374 18.983a7.497 7.497 0 0 0 3.975 1.14h36.891c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-34.739l-28.551-17.843a81.742 81.742 0 0 0-43.365-12.437H171.801c-16.43 0-29.797 13.367-29.797 29.798 0 1.349.099 2.675.273 3.977h-24.283a7.5 7.5 0 1 0 0 14.999zM30.38 144.476h20.344a29.724 29.724 0 0 0-4.003 14.921c0 14.399 10.225 26.453 23.795 29.288a29.746 29.746 0 0 0-4.371 15.555c0 16.499 13.423 29.921 29.921 29.921h131.637a7.5 7.5 0 0 0 7.498-7.688 7.5 7.5 0 0 0-8.307-7.311H96.065c-8.228 0-14.921-6.694-14.921-14.921s6.693-14.921 14.921-14.921H163.9c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5H76.643c-8.228 0-14.922-6.694-14.922-14.921s6.694-14.921 14.922-14.921H163.9c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5H30.38c-8.228 0-14.921-6.694-14.921-14.921s6.693-14.921 14.921-14.921H163.9c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5H62.547c-8.228 0-14.921-6.694-14.921-14.921s6.693-14.921 14.921-14.921h23.485c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5H62.547c-16.498 0-29.921 13.423-29.921 29.921a29.719 29.719 0 0 0 4.003 14.921H30.38C13.882 84.636.459 98.059.459 114.557s13.423 29.919 29.921 29.919zM506.814 196.74H389.248a7.497 7.497 0 0 0-4.629 1.599l-5.613 4.403c-13.495 10.588-30.375 16.42-47.529 16.42h-12.272a7.5 7.5 0 0 0-8.309 7.5 7.5 7.5 0 0 0 7.5 7.5h13.081c20.496 0 40.664-6.967 56.788-19.618l3.574-2.804h114.976a7.5 7.5 0 1 0-.001-15z\" fill=\"currentColor\" opacity=\"1\" data-original=\"currentColor\" class=\"\"></path>
                      <path d=\"M192.215 150.164c0 15.372 12.506 27.878 27.878 27.878s27.879-12.506 27.879-27.878-12.507-27.878-27.879-27.878-27.878 12.506-27.878 27.878zm40.757 0c0 7.101-5.777 12.878-12.879 12.878-7.101 0-12.878-5.777-12.878-12.878s5.777-12.878 12.878-12.878c7.101-.001 12.879 5.777 12.879 12.878zM273.049 203.771c-12.599 0-22.848 10.25-22.848 22.848s10.249 22.847 22.848 22.847 22.848-10.249 22.848-22.847-10.25-22.848-22.848-22.848zm0 30.695c-4.327 0-7.848-3.52-7.848-7.847s3.521-7.848 7.848-7.848 7.848 3.521 7.848 7.848-3.521 7.847-7.848 7.847zM474.178 493.298h-9.202l-73.199-62.323c-3.155-2.686-7.888-2.305-10.573.849s-2.305 7.887.849 10.572l59.785 50.902H43.105l108.164-92.092a77.855 77.855 0 0 1 50.423-18.558h81.558a77.851 77.851 0 0 1 50.423 18.558l24.029 20.458a7.498 7.498 0 0 0 10.573-.849 7.5 7.5 0 0 0-.849-10.572l-24.029-20.458a92.867 92.867 0 0 0-60.147-22.137h-51.158v-26.806h15.44c24.205 0 43.896-19.692 43.896-43.897v-8.808c0-6.785-5.52-12.305-12.305-12.305h-18.135c-19.99 0-36.891 13.437-42.174 31.749-5.716-4.945-13.156-7.947-21.29-7.947h-15.061c-6.942 0-12.591 5.648-12.591 12.592v7.399c0 17.97 14.619 32.589 32.589 32.589h14.629v15.433h-15.399a92.867 92.867 0 0 0-60.147 22.137L19.967 493.298H7.5c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h466.678a7.5 7.5 0 0 0 0-15zM232.092 319.73c0-15.934 12.963-28.897 28.897-28.897h15.439v6.112c0 15.934-12.963 28.897-28.896 28.897h-15.44zm-16.978 17.485h-12.651c-9.698 0-17.589-7.89-17.589-17.589v-4.991h12.651c9.698 0 17.589 7.89 17.589 17.589z\" fill=\"currentColor\" opacity=\"1\" data-original=\"currentColor\" class=\"\"></path>
                      <path d=\"M178.358 429.065c0 13.218 10.754 23.972 23.972 23.972s23.972-10.753 23.972-23.972-10.754-23.972-23.972-23.972-23.972 10.753-23.972 23.972zm32.944 0c0 4.947-4.024 8.972-8.972 8.972s-8.972-4.025-8.972-8.972 4.024-8.972 8.972-8.972 8.972 4.024 8.972 8.972zM252.23 445.536c0 15.706 12.777 28.484 28.483 28.484s28.484-12.778 28.484-28.484-12.778-28.484-28.484-28.484-28.483 12.778-28.483 28.484zm41.968 0c0 7.435-6.049 13.484-13.484 13.484s-13.483-6.049-13.483-13.484 6.049-13.484 13.483-13.484c7.435 0 13.484 6.049 13.484 13.484z\" fill=\"currentColor\" opacity=\"1\" data-original=\"currentColor\" class=\"\"></path>
                    </g>
                  </svg>
                </div>
                <div class=\"service-item-content\">
                  <h3 class=\"service-heading\">Mulching</h3>
                  <p>
                    Gravida sodales condimentum pellen tesq accumsan orci quam
                    sagittis sapie
                  </p>
                </div>
              </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
              <div class=\"service-item\">
                <span class=\"number\">03</span>
                <div class=\"service-item-icon\">
                  <svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"80\" height=\"80\" x=\"0\" y=\"0\" viewBox=\"0 0 516.53 516.53\" style=\"enable-background: new 0 0 512 512\" xml:space=\"preserve\" class=\"\">
                    <g>
                      <path d=\"M504.085 341.447a113.617 113.617 0 0 0-11.524-27.805c3.866-6.212 3.104-14.506-2.288-19.897l-5.804-5.804v-67.388c0-10.907-8.398-19.878-19.066-20.817V73.099h4.012c8.301 0 15.054-6.753 15.054-15.054V37.599c0-8.301-6.753-15.054-15.054-15.054h-23.242a7.5 7.5 0 0 0 0 15l23.296.054-.054 20.5-241.554-.054.054-20.5H414.21a7.5 7.5 0 0 0 0-15H227.916c-8.301 0-15.054 6.753-15.054 15.054v20.446c0 8.301 6.753 15.054 15.054 15.054h14.719L231.27 201.13c-5.215 2.077-9.463 6.215-11.642 11.675l-14.014 35.128h-27.323l-24.417-28.857a16.73 16.73 0 0 0-12.795-5.936H99.071c-9.242 0-16.761 7.519-16.761 16.761v18.66a44.759 44.759 0 0 0-35.97 33.278L24.937 367.09C9.676 380.359 0 399.894 0 421.658c0 39.881 32.446 72.327 72.328 72.327 37.349 0 68.174-28.457 71.938-64.827h25.905v12.546c0 8.282 6.738 15.02 15.02 15.02h64.364c8.282 0 15.02-6.738 15.02-15.02v-12.546h29.374c-3.278 6.098-2.356 13.875 2.785 19.016l19.555 19.554a16 16 0 0 0 11.388 4.718c3.045 0 5.961-.839 8.506-2.431a113.556 113.556 0 0 0 27.808 11.525c1.662 7.123 8.064 12.445 15.686 12.445h27.655c7.602 0 13.99-5.293 15.672-12.441a113.582 113.582 0 0 0 27.814-11.525 15.986 15.986 0 0 0 8.514 2.427c4.302 0 8.346-1.675 11.388-4.717l19.555-19.555c5.396-5.396 6.156-13.7 2.29-19.901a113.607 113.607 0 0 0 11.522-27.801c7.123-1.662 12.445-8.064 12.445-15.686v-27.655c-.002-7.621-5.324-14.023-12.447-15.684zm-53.681-141.805h-15.681V73.099h15.681zM419.723 73.099v126.543h-142.46l11.233-126.543zm-146.286 0-11.233 126.543h-15.743l11.234-126.543zM99.071 228.14h42.008c.519 0 1.008.227 1.344.624l16.219 19.169H97.311v-18.032c0-.971.79-1.761 1.76-1.761zm-51.11 108.845h167.157c12.315 0 22.334-10.019 22.334-22.334v-16.152c0-12.315-10.019-22.334-22.334-22.334h-77.364a7.5 7.5 0 0 0 0 15h77.364c4.044 0 7.334 3.29 7.334 7.334v16.152c0 4.044-3.29 7.334-7.334 7.334H51.727l7.738-30.821h46.327a7.5 7.5 0 0 0 0-15h-40.76a29.774 29.774 0 0 1 24.779-13.231h120.886a7.5 7.5 0 0 0 6.966-4.721l15.897-39.849a5.883 5.883 0 0 1 5.49-3.721h224.51a5.916 5.916 0 0 1 5.91 5.91v52.522c-5.348-4.343-12.853-4.747-18.636-1.165a113.598 113.598 0 0 0-27.818-11.532c-1.662-7.123-8.063-12.445-15.685-12.445h-27.655c-7.602 0-13.99 5.294-15.672 12.441a113.583 113.583 0 0 0-27.818 11.527c-6.213-3.868-14.506-3.104-19.897 2.288l-19.555 19.555c-5.375 5.375-6.149 13.637-2.28 19.884a113.572 113.572 0 0 0-11.531 27.818c-7.123 1.662-12.445 8.063-12.445 15.685v27.655c0 7.602 5.293 13.99 12.441 15.672 1.242 4.67 2.784 9.24 4.603 13.699h-24.12c-2.277-5.402-7.626-9.204-13.847-9.204h-64.364c-6.221 0-11.569 3.802-13.847 9.204h-27.078c-3.764-36.371-34.589-64.828-71.938-64.828a71.896 71.896 0 0 0-28.994 6.086zm24.367 142c-31.61 0-57.328-25.717-57.328-57.327s25.717-57.328 57.328-57.328 57.327 25.717 57.327 57.328-25.717 57.327-57.327 57.327zm177.24-37.262h-.013l-64.384-.02.02-21.75 64.384.02zm251.962-56.937c0 .609-.496 1.105-1.189 1.105-4.816 0-8.956 3.287-10.065 7.992a98.695 98.695 0 0 1-12.139 29.288c-2.543 4.113-1.939 9.365 1.447 12.75l.084.084a1.105 1.105 0 0 1 0 1.562l-19.555 19.555a1.085 1.085 0 0 1-.781.323c-.208 0-.514-.056-.761-.303a3.326 3.326 0 0 0-.084-.084c-3.406-3.407-8.658-4.01-12.77-1.467a98.657 98.657 0 0 1-29.288 12.138c-4.706 1.11-7.992 5.25-7.992 10.15 0 .609-.496 1.105-1.104 1.105h-27.655c-.609 0-1.105-.496-1.105-1.189 0-4.816-3.287-8.956-7.992-10.066a98.69 98.69 0 0 1-29.287-12.137 10.35 10.35 0 0 0-5.455-1.561c-2.68 0-5.338 1.049-7.38 3.091a1.085 1.085 0 0 1-.781.323c-.208 0-.513-.056-.781-.324l-19.555-19.555c-.431-.431-.431-1.132.064-1.627 3.406-3.406 4.009-8.657 1.466-12.77a98.66 98.66 0 0 1-12.138-29.287c-1.11-4.706-5.25-7.992-10.15-7.992a1.107 1.107 0 0 1-1.105-1.105V357.13c0-.609.496-1.104 1.189-1.104 4.816 0 8.956-3.287 10.066-7.992a98.661 98.661 0 0 1 12.138-29.288c2.542-4.112 1.939-9.364-1.531-12.833a1.106 1.106 0 0 1 0-1.563l19.555-19.555c.431-.431 1.132-.431 1.626.064 3.407 3.408 8.658 4.011 12.77 1.467a98.666 98.666 0 0 1 29.288-12.138c4.706-1.11 7.992-5.25 7.992-10.15 0-.609.496-1.105 1.105-1.105h27.655c.609 0 1.104.496 1.104 1.189 0 4.816 3.287 8.956 7.992 10.066a98.664 98.664 0 0 1 29.288 12.139c4.113 2.543 9.365 1.939 12.833-1.531a1.107 1.107 0 0 1 1.563 0l19.555 19.555c.431.431.431 1.132-.062 1.625-3.408 3.406-4.012 8.658-1.468 12.771a98.666 98.666 0 0 1 12.138 29.288c1.11 4.706 5.25 7.992 10.066 7.992h.084c.609 0 1.105.496 1.105 1.104z\" fill=\"currentColor\" opacity=\"1\" data-original=\"currentColor\" class=\"\"></path>
                      <path d=\"M454.895 335.721a7.5 7.5 0 0 0-3.834 9.889 62.412 62.412 0 0 1 5.335 25.349c0 34.678-28.213 62.891-62.891 62.891s-62.891-28.213-62.891-62.891c0-34.679 28.213-62.892 62.891-62.892a62.934 62.934 0 0 1 40.397 14.703 7.5 7.5 0 0 0 10.566-.923 7.5 7.5 0 0 0-.923-10.566 77.96 77.96 0 0 0-50.041-18.213c-42.949 0-77.891 34.942-77.891 77.892 0 42.949 34.942 77.891 77.891 77.891s77.891-34.942 77.891-77.891c0-10.895-2.224-21.46-6.611-31.403a7.5 7.5 0 0 0-9.889-3.836zM72.328 381.807c-21.974 0-39.851 17.877-39.851 39.851s17.877 39.851 39.851 39.851 39.851-17.877 39.851-39.851-17.878-39.851-39.851-39.851zm0 64.702c-13.703 0-24.851-11.148-24.851-24.851s11.148-24.851 24.851-24.851 24.851 11.148 24.851 24.851-11.149 24.851-24.851 24.851z\" fill=\"currentColor\" opacity=\"1\" data-original=\"currentColor\" class=\"\"></path>
                      <path d=\"M393.504 328.829c-23.23 0-42.13 18.899-42.13 42.13 0 23.23 18.899 42.129 42.13 42.129s42.13-18.899 42.13-42.129-18.9-42.13-42.13-42.13zm0 69.26c-14.959 0-27.13-12.17-27.13-27.129s12.17-27.13 27.13-27.13 27.13 12.17 27.13 27.13c0 14.958-12.171 27.129-27.13 27.129zM249.861 265.585a7.487 7.487 0 0 0 2.663.491 7.503 7.503 0 0 0 7.013-4.838l9.438-24.841a7.5 7.5 0 0 0-14.022-5.328l-9.438 24.841a7.499 7.499 0 0 0 4.346 9.675zM285.384 265.585a7.487 7.487 0 0 0 2.663.491 7.502 7.502 0 0 0 7.012-4.838l9.439-24.841a7.5 7.5 0 0 0-4.347-9.675 7.5 7.5 0 0 0-9.675 4.347l-9.439 24.841a7.5 7.5 0 0 0 4.347 9.675z\" fill=\"currentColor\" opacity=\"1\" data-original=\"currentColor\" class=\"\"></path>
                    </g>
                  </svg>
                </div>
                <div class=\"service-item-content\">
                  <h3 class=\"service-heading\">Plowing</h3>
                  <p>
                    Gravida sodales condimentum pellen tesq accumsan orci quam
                    sagittis sapie
                  </p>
                </div>
              </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
              <div class=\"service-item\">
                <span class=\"number\">04</span>
                <div class=\"service-item-icon\">
                  <svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"80\" height=\"80\" x=\"0\" y=\"0\" viewBox=\"0 0 509.389 509.389\" style=\"enable-background: new 0 0 512 512\" xml:space=\"preserve\" class=\"\">
                    <g>
                      <path d=\"M495.69 14.267A46.636 46.636 0 0 0 458.364.766a46.637 46.637 0 0 0-34.257 20.05l-24.614 35.749a309.594 309.594 0 0 1-37.289 44.521 7.5 7.5 0 0 0 10.544 10.668 324.596 324.596 0 0 0 39.1-46.684l24.614-35.749a31.674 31.674 0 0 1 23.268-13.618 31.66 31.66 0 0 1 25.354 9.17 31.681 31.681 0 0 1 9.171 25.355 31.679 31.679 0 0 1-13.618 23.267l-35.75 24.615a324.066 324.066 0 0 0-59.859 53.246l-22.502 25.667a5.412 5.412 0 0 1-3.933 1.86c-1.518.071-2.966-.518-4.047-1.599l-21.873-21.872c-1.081-1.082-1.649-2.52-1.599-4.048s.711-2.925 1.86-3.933l15.802-13.854a7.5 7.5 0 0 0-9.889-11.279l-15.802 13.854a20.546 20.546 0 0 0-6.964 14.719 20.37 20.37 0 0 0 .64 5.69l-35.241 35.241c-7.726-5.323-17.119-7.656-26.65-6.449-8.734 1.104-16.614 5.058-22.612 11.157l-37.903-37.903a28.552 28.552 0 0 0-22.3-8.292 28.547 28.547 0 0 0-20.847 11.457c-23.749 31.972-43.447 60.009-60.222 85.713a7.5 7.5 0 0 0 6.275 11.6 7.495 7.495 0 0 0 6.288-3.402c16.606-25.447 36.135-53.239 59.7-84.966a13.562 13.562 0 0 1 9.903-5.441 13.585 13.585 0 0 1 10.595 3.939l39.789 39.789-63.489 107.398c-5.606 9.484-4.179 21.121 3.554 28.957 4.724 4.785 10.89 7.271 17.211 7.271 4.233-.001 8.536-1.115 12.519-3.399l40.792-24.114a7.499 7.499 0 1 0-7.632-12.912l-40.706 24.064c-4.745 2.723-9.055 1.038-11.506-1.446-1.129-1.144-4.561-5.302-1.318-10.787L239.37 211.63c3.736-6.32 10.058-10.474 17.342-11.395 7.292-.918 14.44 1.529 19.633 6.722l25.938 25.938c5.187 5.186 7.654 12.36 6.771 19.686-.878 7.28-4.911 13.598-10.99 17.288l-44.019 26.021a7.5 7.5 0 0 0 7.632 12.912l38.725-22.893 40.397 40.396a13.558 13.558 0 0 1 3.938 10.564 13.606 13.606 0 0 1-5.428 9.926c-54.818 40.993-97.27 69.301-137.646 91.785-50.099 27.898-95.647 45.713-139.25 54.462-13.202 2.648-26.235-1.337-35.759-10.935a40.033 40.033 0 0 1-10.799-36.472c10.129-48.517 33.232-101.845 70.63-163.033a7.501 7.501 0 0 0-12.799-7.823c-38.309 62.679-62.028 117.563-72.515 167.79-3.796 18.186 1.75 36.916 14.835 50.103 10.368 10.45 24.27 16.146 38.625 16.145 3.564 0 7.159-.352 10.732-1.068 45.149-9.06 92.12-27.398 143.597-56.063 40.984-22.823 83.956-51.469 139.331-92.878a28.597 28.597 0 0 0 11.407-20.864 28.554 28.554 0 0 0-8.292-22.245l-38.525-38.525c6.079-6.031 10.002-13.987 11.063-22.799 1.106-9.18-1.037-18.215-5.937-25.753l35.39-35.39a20.4 20.4 0 0 0 5.022.654 20.546 20.546 0 0 0 15.384-6.975l22.502-25.667a309.032 309.032 0 0 1 57.086-50.779l35.749-24.614a46.635 46.635 0 0 0 20.05-34.256 46.63 46.63 0 0 0-13.5-37.328zM340.732 184.685l-32.723 32.723-15.459-15.459 32.723-32.723z\" fill=\"currentColor\" opacity=\"1\" data-original=\"currentColor\"></path>
                    </g>
                  </svg>
                </div>
                <div class=\"service-item-content\">
                  <h3 class=\"service-heading\">Mowing</h3>
                  <p>
                    Gravida sodales condimentum pellen tesq accumsan orci quam
                    sagittis sapie
                  </p>
                </div>
              </div>
            </div>

            <div class=\"col-lg-3 col-md-6\">
              <div class=\"service-item\">
                <span class=\"number\">05</span>
                <div class=\"service-item-icon\">
                  <svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"80\" height=\"80\" x=\"0\" y=\"0\" viewBox=\"0 0 513.089 513.089\" style=\"enable-background: new 0 0 512 512\" xml:space=\"preserve\" class=\"\">
                    <g>
                      <path d=\"M194.209 386.877a7.497 7.497 0 0 0-9.15 5.363 75.07 75.07 0 0 0-2.428 18.947c0 13.789 3.615 27 10.454 38.204a7.494 7.494 0 0 0 10.308 2.495 7.5 7.5 0 0 0 2.494-10.309c-5.401-8.851-8.257-19.359-8.257-30.39a60.09 60.09 0 0 1 1.941-15.16 7.497 7.497 0 0 0-5.362-9.15z\" fill=\"currentColor\" opacity=\"1\" data-original=\"currentColor\"></path>
                      <path d=\"M382.56 0h-27.319c-12.654 0-25.236 3.119-36.386 9.021a7.5 7.5 0 0 0 7.018 13.258c9.124-4.83 19.005-7.278 29.368-7.278h27.222v12.022c0 34.679-28.213 62.892-62.892 62.892h-27.222V77.893c0-13.309 4.12-26.038 11.914-36.811a7.5 7.5 0 0 0-12.153-8.793c-9.657 13.347-14.762 29.117-14.762 45.604V119.154a88.294 88.294 0 0 1-14.296 48.23l-20.501 31.543a46.65 46.65 0 0 0-9.615-13.916l-1.273-1.273v-14.053c0-21.604-9.58-41.872-26.284-55.608a7.5 7.5 0 0 0-9.528 11.586c13.226 10.876 20.812 26.922 20.812 44.022v9.66h-29.069c-31.412 0-56.968-25.556-56.968-56.968v-9.66h29.069c3.454 0 6.976.329 10.467.977a7.5 7.5 0 0 0 2.738-14.748 72.57 72.57 0 0 0-13.205-1.229h-31.883c-6.72 0-12.187 5.467-12.187 12.186v12.474c0 39.684 32.284 71.968 71.968 71.968h33.463l1.273 1.273c5.979 5.979 9.271 13.927 9.271 22.381v98.306a79.003 79.003 0 0 0-21.446 5.114c-4.152-2.798-9.597-3.045-13.983-.509-30.558 17.671-49.541 52.263-49.541 90.277 0 56.188 41.481 101.901 92.47 101.901s92.47-45.713 92.47-101.901c0-.237-.004-.473-.009-.709l-.005-.334a7.5 7.5 0 0 0-7.499-7.433h-.068a7.5 7.5 0 0 0-7.433 7.567l.014.909c0 47.917-34.753 86.901-77.47 86.901s-77.47-38.984-77.47-86.901c0-32.212 15.656-61.449 40.948-76.643l40.182 34.094c5.225 4.433 13.1 4.099 17.929-.761l25.512-25.668c11.649 10.022 20.473 23.408 25.562 38.809a7.496 7.496 0 0 0 9.475 4.768 7.5 7.5 0 0 0 4.768-9.474c-6.15-18.613-17.027-34.756-31.454-46.681-4.011-3.317-9.358-3.923-13.824-1.93-10.53-6.377-22.136-10.243-34.128-11.384v-29.695h18.365c25.013 0 45.362-20.35 45.362-45.362v-7.928c0-6.115-4.975-11.089-11.089-11.089h-22.276c-11.667 0-22.318 4.429-30.362 11.693v-13.713l29.028-44.665a103.263 103.263 0 0 0 16.72-56.404v-14.239h27.222c42.949 0 77.892-34.942 77.892-77.892v-12.12C397.462 6.685 390.777 0 382.56 0zM251.211 356.136l-27.468-23.306a63.694 63.694 0 0 1 15.358-1.884c10.366 0 20.534 2.525 29.851 7.34zm25.752-118.894h18.365v4.017c0 16.742-13.62 30.362-30.362 30.362h-18.365v-4.017c0-16.741 13.62-30.362 30.362-30.362z\" fill=\"currentColor\" opacity=\"1\" data-original=\"currentColor\"></path>
                    </g>
                  </svg>
                </div>
                <div class=\"service-item-content\">
                  <h3 class=\"service-heading\">Seeding</h3>
                  <p>
                    Gravida sodales condimentum pellen tesq accumsan orci quam
                    sagittis sapie
                  </p>
                </div>
              </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
              <div class=\"service-item\">
                <span class=\"number\">06</span>
                <div class=\"service-item-icon\">
                  <svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"80\" height=\"80\" x=\"0\" y=\"0\" viewBox=\"0 0 511.67 511.67\" style=\"enable-background: new 0 0 512 512\" xml:space=\"preserve\" class=\"\">
                    <g>
                      <path d=\"M492.96 296.401v-59.276c0-63.338-24.665-122.886-69.452-167.673C378.721 24.666 319.174 0 255.835 0c-54.517 0-107.757 18.967-149.914 53.407a7.5 7.5 0 1 0 9.491 11.616C154.896 32.765 204.767 15 255.835 15c59.332 0 115.112 23.105 157.066 65.059 41.953 41.954 65.059 97.734 65.059 157.066v58.7h-15v-58.7C462.96 122.916 370.044 30 255.835 30S48.71 122.916 48.71 237.125v58.7h-15v-58.7c0-56.142 21.01-109.737 59.158-150.913a7.502 7.502 0 0 0-11.004-10.195C41.139 119.975 18.71 177.19 18.71 237.125v59.276c-10.029 2.3-17.535 11.291-17.535 22.008v5.81c0 10.194 6.791 18.828 16.085 21.627l16.782 99.17c6.535 38.622 39.71 66.654 78.882 66.654h285.822c39.172 0 72.347-28.032 78.882-66.654l16.782-99.17c9.294-2.798 16.085-11.432 16.085-21.627v-5.81c0-10.717-7.506-19.708-17.535-22.008zM63.71 237.125C63.71 131.187 149.896 45 255.835 45S447.96 131.187 447.96 237.125v58.7h-27.888a64.77 64.77 0 0 0 7.259-29.747c0-9.561-2.046-18.787-6.081-27.423a7.5 7.5 0 0 0-13.59 6.35c3.1 6.633 4.671 13.723 4.671 21.073a49.851 49.851 0 0 1-9.875 29.747h-82.073a68.421 68.421 0 0 0 3.912-22.766l-.003-.369a10.737 10.737 0 0 0 2.441-7.707l-.074-.952a81.022 81.022 0 0 0-6.053-25.058c9.161-14.126 24.883-22.763 41.856-22.763a49.676 49.676 0 0 1 26.83 7.844 7.5 7.5 0 0 0 8.086-12.634 64.65 64.65 0 0 0-34.916-10.21c-19.407 0-37.547 8.686-49.744 23.261a81.08 81.08 0 0 0-25.89-24.171l-7.325-4.298v-19.86c0-6.111-4.972-11.083-11.083-11.083h-24.17c-6.111 0-11.083 4.972-11.083 11.083v19.86l-7.325 4.298a81.067 81.067 0 0 0-24.083 21.633l-21.606-40.574a68.923 68.923 0 0 0-37.588-32.526 39.21 39.21 0 0 0-31.641 2.285 39.215 39.215 0 0 0-19.556 24.977 68.922 68.922 0 0 0 6.006 49.343l37.481 70.388H63.71zm88.14 58.7-41.235-77.438a53.95 53.95 0 0 1-4.701-38.625c1.687-6.691 5.971-12.162 12.061-15.405 6.091-3.244 13.022-3.745 19.516-1.409a53.936 53.936 0 0 1 28.384 23.614L146.29 196.99a7.5 7.5 0 0 0 7.051 13.241l19.627-10.451 13.619 25.575-19.627 10.451a7.5 7.5 0 0 0 7.051 13.241l17.809-9.483a81.015 81.015 0 0 0-5.807 24.466l-.074.961a10.774 10.774 0 0 0 1.468 6.319c-.018.6-.03 1.185-.03 1.752a68.427 68.427 0 0 0 3.914 22.766H151.85zm116.357-89.059 11.029 6.472a66.163 66.163 0 0 1 31.323 43.794l-23.74-16.479a13.027 13.027 0 0 0-17.511 2.36l-12.974 15.524-12.974-15.525c-2.59-3.099-6.283-4.719-10.029-4.719-2.584 0-5.193.771-7.481 2.359l-23.74 16.478a66.163 66.163 0 0 1 31.323-43.794l11.029-6.472a7.5 7.5 0 0 0 3.704-6.469v-20.238h16.336v20.238a7.504 7.504 0 0 0 3.705 6.471zm-60.729 89.059a53.472 53.472 0 0 1-5.062-20.774c.171-.105.342-.21.509-.326l30.046-20.854 15.047 18.007c2.065 2.471 5.097 3.888 8.317 3.888s6.252-1.417 8.317-3.888v-.001l15.047-18.006 29.574 20.527a53.458 53.458 0 0 1-5.081 21.428h-96.714zm288.017 28.394c0 4.182-3.402 7.584-7.584 7.584H101.084c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h377.952l-5.751 33.987h-14.299c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h11.76l-7.907 46.723a64.83 64.83 0 0 1-64.093 54.157H112.924a64.83 64.83 0 0 1-64.093-54.157l-7.907-46.723h11.76c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5H38.386l-5.751-33.987h36.487c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5H23.759c-4.182 0-7.584-3.402-7.584-7.584v-5.81c0-4.182 3.402-7.584 7.584-7.584h464.152c4.182 0 7.584 3.402 7.584 7.584z\" fill=\"currentColor\" opacity=\"1\" data-original=\"currentColor\"></path>
                      <path d=\"M246.338 395.79h21.993c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-21.993c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5zM174.455 395.79h21.994c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-21.994c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5zM102.573 395.79h21.994c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-21.994a7.5 7.5 0 0 0 0 15zM315.221 395.79h21.994c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-21.994c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5zM387.103 395.79h21.994c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-21.994c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5zM246.338 474.186h21.993c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-21.993c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5zM174.455 474.186h21.994c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-21.994c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5zM102.573 474.186h21.994c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-21.994a7.5 7.5 0 0 0 0 15zM337.215 459.186h-21.994c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h21.994a7.5 7.5 0 0 0 0-15zM387.103 474.186h21.994c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-21.994c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5zM273.606 430.229a7.5 7.5 0 0 0 7.5 7.5H303.1c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-21.994a7.5 7.5 0 0 0-7.5 7.5zM201.725 430.229a7.5 7.5 0 0 0 7.5 7.5h21.994c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-21.994a7.5 7.5 0 0 0-7.5 7.5zM129.843 430.229a7.5 7.5 0 0 0 7.5 7.5h21.993c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-21.993a7.5 7.5 0 0 0-7.5 7.5zM87.454 422.729H67.46c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h19.994c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5zM342.49 430.229a7.5 7.5 0 0 0 7.5 7.5h21.993c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5H349.99a7.5 7.5 0 0 0-7.5 7.5zM414.372 430.229a7.5 7.5 0 0 0 7.5 7.5h21.994c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-21.994a7.5 7.5 0 0 0-7.5 7.5z\" fill=\"currentColor\" opacity=\"1\" data-original=\"currentColor\"></path>
                    </g>
                  </svg>
                </div>
                <div class=\"service-item-content\">
                  <h3 class=\"service-heading\">Fresh Vegetables</h3>
                  <p>
                    Gravida sodales condimentum pellen tesq accumsan orci quam
                    sagittis sapie
                  </p>
                </div>
              </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
              <div class=\"service-item\">
                <span class=\"number\">07</span>
                <div class=\"service-item-icon\">
                  <svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"80\" height=\"80\" x=\"0\" y=\"0\" viewBox=\"0 0 512.805 512.805\" style=\"enable-background: new 0 0 512 512\" xml:space=\"preserve\" class=\"\">
                    <g>
                      <path d=\"M505.305 50.503h-50.094v-7.141c0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v7.141h-50.094c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5h50.094v29.428h-15.309c-7.223 0-13.385 4.557-15.809 10.939h-33.847l-16.98-9.451a7.5 7.5 0 0 0-7.295 13.107l18.682 10.397a7.507 7.507 0 0 0 3.647.946h34.681v15.505h-32.393a7.495 7.495 0 0 0-5.565 2.473l-47.127 52.176a49.438 49.438 0 0 1-36.627 16.273h-60.732a49.442 49.442 0 0 1-36.627-16.273l-47.127-52.176a7.5 7.5 0 0 0-5.565-2.473h-31.393V120.87h33.681a7.507 7.507 0 0 0 3.647-.946l64.468-35.883a64.829 64.829 0 0 1 31.454-8.163h35.656a64.819 64.819 0 0 1 31.454 8.164l17.778 9.896a7.5 7.5 0 0 0 7.295-13.107l-17.778-9.895a79.844 79.844 0 0 0-38.749-10.058h-35.656a79.854 79.854 0 0 0-38.749 10.057l-62.767 34.936h-32.847c-2.424-6.383-8.587-10.939-15.809-10.939H72.594V65.503h50.094c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5H72.594v-7.141c0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v7.141H7.5c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5h50.094v29.428H42.285c-9.331 0-16.922 7.591-16.922 16.922v37.917c0 20.438 16.628 37.066 37.066 37.066h5.329c19.899 0 36.18-15.765 37.025-35.461h28.101l31.968 35.393-22.399 27.123a21.63 21.63 0 0 0-4.939 13.742v47.817c0 12.898 10.494 23.393 23.394 23.393 12.898 0 23.393-10.494 23.393-23.393v-32.069l38.482-21.157c.917.04 1.834.073 2.755.073h7.432v13.542l-8.567 8.567a13.242 13.242 0 0 0-3.903 9.424v12.244c0 7.191 5.729 13.055 12.86 13.304v31.344c-4.637 2.472-7.804 7.354-7.804 12.965v21.867c0 8.097 6.588 14.685 14.686 14.685h31.326c8.098 0 14.686-6.588 14.686-14.685v-21.867c0-5.611-3.167-10.493-7.804-12.965v-31.32h1.533c7.349 0 13.327-5.979 13.327-13.327V253.83c0-3.56-1.387-6.906-3.903-9.423l-8.567-8.568v-13.542h5.432c.921 0 1.838-.034 2.755-.073l38.482 21.157v32.069c0 12.898 10.494 23.393 23.394 23.393 12.898 0 23.393-10.494 23.393-23.393v-6.886c0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v6.886c0 4.628-3.765 8.393-8.393 8.393s-8.394-3.765-8.394-8.393v-36.505a7.5 7.5 0 0 0-3.887-6.572l-27.481-15.109c8.638-3.622 16.49-9.101 22.889-16.186l2.763-3.06 20.994 25.422a6.596 6.596 0 0 1 1.507 4.191v8.97c0 4.143 3.357 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-8.97c0-5.004-1.755-9.885-4.94-13.742l-22.398-27.122 31.968-35.393h29.101c.844 19.696 17.125 35.461 37.025 35.461h5.329c20.438 0 37.066-16.628 37.066-37.066v-37.917c0-9.331-7.591-16.922-16.922-16.922h-15.309V65.503h50.094c4.143 0 7.5-3.357 7.5-7.5s-3.361-7.5-7.503-7.5zm-463.02 59.428h45.617c1.06 0 1.922.862 1.922 1.922v10.341H40.363v-10.341c0-1.06.863-1.922 1.922-1.922zm25.474 61.905H62.43c-12.167 0-22.066-9.899-22.066-22.066v-12.576h49.461v12.576c-.001 12.167-9.899 22.066-22.066 22.066zm105.428 60.537a7.501 7.501 0 0 0-3.887 6.572v36.505c0 4.628-3.766 8.393-8.394 8.393s-8.393-3.765-8.393-8.393v-47.817c0-1.526.535-3.016 1.507-4.192l20.994-25.422 2.763 3.06c6.4 7.085 14.251 12.563 22.889 16.186zm98.064 112.865h-30.697v-21.237h30.697zm-7.804-36.237h-15.09v-29.6h15.09zm4.586-64.753 10.274 10.275v9.878h-42.811v-9.878l10.274-10.275a7.498 7.498 0 0 0 2.196-5.303v-16.648h17.869v16.648a7.509 7.509 0 0 0 2.198 5.303zm182.342-72.412h-5.329c-12.167 0-22.065-9.899-22.065-22.066v-12.576h49.461v12.576c-.001 12.167-9.9 22.066-22.067 22.066zm22.066-59.983v10.341H422.98v-10.341c0-1.06.862-1.922 1.922-1.922h45.617c1.06 0 1.922.862 1.922 1.922zM362.367 383.195c6.981-.812 13.229-4.296 17.591-9.808s6.317-12.393 5.504-19.374c-.812-6.982-4.296-13.229-9.808-17.592-2.043-1.617-8.26-6.537-34.74-7.778a13.377 13.377 0 0 0-11.103 5.056 13.396 13.396 0 0 0-2.37 11.969c7.289 25.484 13.507 30.406 15.551 32.023 4.694 3.716 10.382 5.685 16.279 5.685 1.027 0 2.061-.06 3.096-.181zm-19.86-39.447c15.467.902 22.253 3.181 23.839 4.436a11.245 11.245 0 0 1 4.218 7.564c.349 3.002-.491 5.961-2.367 8.331s-4.562 3.868-7.564 4.218c-3 .352-5.961-.491-8.331-2.367-1.587-1.256-5.364-7.336-9.795-22.182zM397.513 429.988c-2.044-1.617-8.263-6.54-34.74-7.778a13.416 13.416 0 0 0-11.103 5.057 13.392 13.392 0 0 0-2.37 11.967c7.289 25.486 13.507 30.407 15.551 32.024 4.695 3.716 10.382 5.685 16.279 5.685 1.026 0 2.06-.061 3.095-.181 6.982-.812 13.23-4.296 17.592-9.808s6.317-12.393 5.504-19.375c-.813-6.981-4.297-13.229-9.808-17.591zm-7.458 27.658a11.243 11.243 0 0 1-7.564 4.217 11.251 11.251 0 0 1-8.331-2.366c-1.586-1.256-5.363-7.337-9.793-22.182 15.464.9 22.251 3.18 23.838 4.436a11.245 11.245 0 0 1 4.218 7.564 11.25 11.25 0 0 1-2.368 8.331zM477.456 361.45c-2.044-1.617-8.263-6.54-34.74-7.778a13.403 13.403 0 0 0-11.103 5.057 13.392 13.392 0 0 0-2.37 11.967c7.289 25.486 13.507 30.407 15.551 32.024 4.695 3.716 10.382 5.685 16.279 5.685 1.026 0 2.06-.061 3.095-.181 6.982-.812 13.23-4.296 17.592-9.808s6.317-12.393 5.504-19.375c-.813-6.981-4.296-13.229-9.808-17.591zm-7.458 27.657c-1.876 2.37-4.562 3.867-7.564 4.217s-5.961-.492-8.331-2.366c-1.586-1.256-5.363-7.337-9.793-22.182 15.464.9 22.251 3.18 23.838 4.436a11.245 11.245 0 0 1 4.218 7.564 11.248 11.248 0 0 1-2.368 8.331zM171.891 328.644c-26.48 1.241-32.697 6.161-34.74 7.778-5.512 4.362-8.995 10.609-9.808 17.592-.813 6.981 1.142 13.862 5.504 19.374 4.361 5.512 10.609 8.995 17.591 9.808 1.036.121 2.068.181 3.096.181 5.897 0 11.585-1.969 16.279-5.685 2.044-1.617 8.262-6.539 15.551-32.023a13.396 13.396 0 0 0-2.37-11.969 13.39 13.39 0 0 0-11.103-5.056zm-11.387 37.286a11.231 11.231 0 0 1-8.331 2.367c-3.002-.35-5.688-1.848-7.564-4.218s-2.716-5.329-2.367-8.331a11.245 11.245 0 0 1 4.218-7.564c1.586-1.255 8.372-3.533 23.839-4.436-4.432 14.846-8.209 20.926-9.795 22.182zM150.032 422.21c-26.478 1.238-32.696 6.161-34.74 7.778-5.512 4.361-8.995 10.609-9.808 17.591s1.142 13.863 5.504 19.375c4.361 5.512 10.609 8.995 17.592 9.808 1.035.121 2.067.181 3.095.181 5.896-.001 11.585-1.97 16.279-5.685 2.044-1.617 8.262-6.538 15.551-32.024a13.392 13.392 0 0 0-2.37-11.967 13.385 13.385 0 0 0-11.103-5.057zm-11.386 37.286a11.253 11.253 0 0 1-8.331 2.366c-3.003-.35-5.688-1.847-7.564-4.217s-2.716-5.329-2.367-8.331a11.245 11.245 0 0 1 4.218-7.564c1.587-1.256 8.374-3.535 23.838-4.436-4.431 14.845-8.209 20.926-9.794 22.182zM70.089 353.672c-26.478 1.238-32.696 6.161-34.74 7.778-5.512 4.361-8.995 10.609-9.808 17.591s1.142 13.863 5.504 19.375c4.361 5.512 10.609 8.995 17.592 9.808 1.035.121 2.067.181 3.095.181 5.896-.001 11.585-1.97 16.279-5.685 2.044-1.617 8.262-6.538 15.551-32.024a13.392 13.392 0 0 0-2.37-11.967 13.374 13.374 0 0 0-11.103-5.057zm-11.387 37.286a11.243 11.243 0 0 1-8.331 2.366c-3.003-.35-5.688-1.847-7.564-4.217s-2.716-5.329-2.367-8.331a11.245 11.245 0 0 1 4.218-7.564c1.587-1.256 8.374-3.535 23.838-4.436-4.431 14.845-8.208 20.926-9.794 22.182z\" fill=\"currentColor\" opacity=\"1\" data-original=\"currentColor\"></path>
                      <path d=\"M213.116 133.756h14.881c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5h-14.881c-12.212 0-22.147 9.936-22.147 22.147v13.102c0 12.212 9.936 22.146 22.147 22.146h85.572c12.212 0 22.147-9.935 22.147-22.146v-13.102c0-12.212-9.936-22.147-22.147-22.147h-38.729c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5h38.729a7.155 7.155 0 0 1 7.147 7.147v13.102c0 3.94-3.206 7.146-7.147 7.146h-85.572c-3.941 0-7.147-3.206-7.147-7.146v-13.102a7.155 7.155 0 0 1 7.147-7.147z\" fill=\"currentColor\" opacity=\"1\" data-original=\"currentColor\"></path>
                    </g>
                  </svg>
                </div>
                <div class=\"service-item-content\">
                  <h3 class=\"service-heading\">Watering</h3>
                  <p>
                    Gravida sodales condimentum pellen tesq accumsan orci quam
                    sagittis sapie
                  </p>
                </div>
              </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
              <div class=\"service-item\">
                <span class=\"number\">08</span>
                <div class=\"service-item-icon\">
                  <svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"80\" height=\"80\" x=\"0\" y=\"0\" viewBox=\"0 0 511.67 511.67\" style=\"enable-background: new 0 0 512 512\" xml:space=\"preserve\" class=\"\">
                    <g>
                      <path d=\"M492.96 296.401v-59.276c0-63.338-24.665-122.886-69.452-167.673C378.721 24.666 319.174 0 255.835 0c-54.517 0-107.757 18.967-149.914 53.407a7.5 7.5 0 1 0 9.491 11.616C154.896 32.765 204.767 15 255.835 15c59.332 0 115.112 23.105 157.066 65.059 41.953 41.954 65.059 97.734 65.059 157.066v58.7h-15v-58.7C462.96 122.916 370.044 30 255.835 30S48.71 122.916 48.71 237.125v58.7h-15v-58.7c0-56.142 21.01-109.737 59.158-150.913a7.502 7.502 0 0 0-11.004-10.195C41.139 119.975 18.71 177.19 18.71 237.125v59.276c-10.029 2.3-17.535 11.291-17.535 22.008v5.81c0 10.194 6.791 18.828 16.085 21.627l16.782 99.17c6.535 38.622 39.71 66.654 78.882 66.654h285.822c39.172 0 72.347-28.032 78.882-66.654l16.782-99.17c9.294-2.798 16.085-11.432 16.085-21.627v-5.81c0-10.717-7.506-19.708-17.535-22.008zM63.71 237.125C63.71 131.187 149.896 45 255.835 45S447.96 131.187 447.96 237.125v58.7h-27.888a64.77 64.77 0 0 0 7.259-29.747c0-9.561-2.046-18.787-6.081-27.423a7.5 7.5 0 0 0-13.59 6.35c3.1 6.633 4.671 13.723 4.671 21.073a49.851 49.851 0 0 1-9.875 29.747h-82.073a68.421 68.421 0 0 0 3.912-22.766l-.003-.369a10.737 10.737 0 0 0 2.441-7.707l-.074-.952a81.022 81.022 0 0 0-6.053-25.058c9.161-14.126 24.883-22.763 41.856-22.763a49.676 49.676 0 0 1 26.83 7.844 7.5 7.5 0 0 0 8.086-12.634 64.65 64.65 0 0 0-34.916-10.21c-19.407 0-37.547 8.686-49.744 23.261a81.08 81.08 0 0 0-25.89-24.171l-7.325-4.298v-19.86c0-6.111-4.972-11.083-11.083-11.083h-24.17c-6.111 0-11.083 4.972-11.083 11.083v19.86l-7.325 4.298a81.067 81.067 0 0 0-24.083 21.633l-21.606-40.574a68.923 68.923 0 0 0-37.588-32.526 39.21 39.21 0 0 0-31.641 2.285 39.215 39.215 0 0 0-19.556 24.977 68.922 68.922 0 0 0 6.006 49.343l37.481 70.388H63.71zm88.14 58.7-41.235-77.438a53.95 53.95 0 0 1-4.701-38.625c1.687-6.691 5.971-12.162 12.061-15.405 6.091-3.244 13.022-3.745 19.516-1.409a53.936 53.936 0 0 1 28.384 23.614L146.29 196.99a7.5 7.5 0 0 0 7.051 13.241l19.627-10.451 13.619 25.575-19.627 10.451a7.5 7.5 0 0 0 7.051 13.241l17.809-9.483a81.015 81.015 0 0 0-5.807 24.466l-.074.961a10.774 10.774 0 0 0 1.468 6.319c-.018.6-.03 1.185-.03 1.752a68.427 68.427 0 0 0 3.914 22.766H151.85zm116.357-89.059 11.029 6.472a66.163 66.163 0 0 1 31.323 43.794l-23.74-16.479a13.027 13.027 0 0 0-17.511 2.36l-12.974 15.524-12.974-15.525c-2.59-3.099-6.283-4.719-10.029-4.719-2.584 0-5.193.771-7.481 2.359l-23.74 16.478a66.163 66.163 0 0 1 31.323-43.794l11.029-6.472a7.5 7.5 0 0 0 3.704-6.469v-20.238h16.336v20.238a7.504 7.504 0 0 0 3.705 6.471zm-60.729 89.059a53.472 53.472 0 0 1-5.062-20.774c.171-.105.342-.21.509-.326l30.046-20.854 15.047 18.007c2.065 2.471 5.097 3.888 8.317 3.888s6.252-1.417 8.317-3.888v-.001l15.047-18.006 29.574 20.527a53.458 53.458 0 0 1-5.081 21.428h-96.714zm288.017 28.394c0 4.182-3.402 7.584-7.584 7.584H101.084c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h377.952l-5.751 33.987h-14.299c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h11.76l-7.907 46.723a64.83 64.83 0 0 1-64.093 54.157H112.924a64.83 64.83 0 0 1-64.093-54.157l-7.907-46.723h11.76c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5H38.386l-5.751-33.987h36.487c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5H23.759c-4.182 0-7.584-3.402-7.584-7.584v-5.81c0-4.182 3.402-7.584 7.584-7.584h464.152c4.182 0 7.584 3.402 7.584 7.584z\" fill=\"currentColor\" opacity=\"1\" data-original=\"currentColor\"></path>
                      <path d=\"M246.338 395.79h21.993c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-21.993c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5zM174.455 395.79h21.994c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-21.994c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5zM102.573 395.79h21.994c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-21.994a7.5 7.5 0 0 0 0 15zM315.221 395.79h21.994c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-21.994c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5zM387.103 395.79h21.994c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-21.994c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5zM246.338 474.186h21.993c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-21.993c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5zM174.455 474.186h21.994c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-21.994c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5zM102.573 474.186h21.994c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-21.994a7.5 7.5 0 0 0 0 15zM337.215 459.186h-21.994c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h21.994a7.5 7.5 0 0 0 0-15zM387.103 474.186h21.994c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-21.994c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5zM273.606 430.229a7.5 7.5 0 0 0 7.5 7.5H303.1c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-21.994a7.5 7.5 0 0 0-7.5 7.5zM201.725 430.229a7.5 7.5 0 0 0 7.5 7.5h21.994c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-21.994a7.5 7.5 0 0 0-7.5 7.5zM129.843 430.229a7.5 7.5 0 0 0 7.5 7.5h21.993c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-21.993a7.5 7.5 0 0 0-7.5 7.5zM87.454 422.729H67.46c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h19.994c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5zM342.49 430.229a7.5 7.5 0 0 0 7.5 7.5h21.993c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5H349.99a7.5 7.5 0 0 0-7.5 7.5zM414.372 430.229a7.5 7.5 0 0 0 7.5 7.5h21.994c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5h-21.994a7.5 7.5 0 0 0-7.5 7.5z\" fill=\"currentColor\" opacity=\"1\" data-original=\"currentColor\"></path>
                    </g>
                  </svg>
                </div>
                <div class=\"service-item-content\">
                  <h3 class=\"service-heading\">Vegetable selling</h3>
                  <p>
                    Gravida sodales condimentum pellen tesq accumsan orci quam
                    sagittis sapie
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Services Section -->

    <!-- About Section -->
    <section id=\"about\" class=\"about section\">

      <div class=\"content\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-lg-6 mb-4 mb-lg-0\">
              <img src=\"assets/img/img_long_5.jpg\" alt=\"Image \" class=\"img-fluid img-overlap\" data-aos=\"zoom-out\">
            </div>
            <div class=\"col-lg-5 ml-auto\" data-aos=\"fade-up\" data-aos-delay=\"100\">
              <h3 class=\"content-subtitle text-white opacity-50\">Why Choose Us</h3>
              <h2 class=\"content-title mb-4\">
                More than <strong>50 year experience</strong> in agriculture
                industry
              </h2>
              <p class=\"opacity-50\">
                Reprehenderit, odio laboriosam? Blanditiis quae ullam quasi illum
                minima nostrum perspiciatis error consequatur sit nulla.
              </p>

              <div class=\"row my-5\">
                <div class=\"col-lg-12 d-flex align-items-start mb-4\">
                  <i class=\"bi bi-cloud-rain me-4 display-6\"></i>
                  <div>
                    <h4 class=\"m-0 h5 text-white\">Plants needs rain</h4>
                    <p class=\"text-white opacity-50\">Lorem ipsum dolor sit amet.</p>
                  </div>
                </div>
                <div class=\"col-lg-12 d-flex align-items-start mb-4\">
                  <i class=\"bi bi-heart me-4 display-6\"></i>
                  <div>
                    <h4 class=\"m-0 h5 text-white\">Love organic foods</h4>
                    <p class=\"text-white opacity-50\">Lorem ipsum dolor sit amet.</p>
                  </div>
                </div>
                <div class=\"col-lg-12 d-flex align-items-start\">
                  <i class=\"bi bi-shop me-4 display-6\"></i>
                  <div>
                    <h4 class=\"m-0 h5 text-white\">Sell vegies</h4>
                    <p class=\"text-white opacity-50\">Lorem ipsum dolor sit amet.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /About Section -->

    <!-- About 3 Section -->
    <section id=\"about-3\" class=\"about-3 section\">

      <div class=\"container\">
        <div class=\"row gy-4 justify-content-between align-items-center\">
          <div class=\"col-lg-6 order-lg-2 position-relative\" data-aos=\"zoom-out\">
            <img src=\"asset{{('assets/img/img_sq_1.jpg')}}\" alt=\"Image\" class=\"img-fluid\">
            <a href=\"https://www.youtube.com/watch?v=Y7f98aduVJ8\" class=\"glightbox pulsating-play-btn\">
              <span class=\"play\"><i class=\"bi bi-play-fill\"></i></span>
            </a>
          </div>
          <div class=\"col-lg-5 order-lg-1\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <h2 class=\"content-title mb-4\">Plants Make Life Better</h2>
            <p class=\"mb-4\">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim
              necessitatibus placeat, atque qui voluptatem velit explicabo vitae
              repellendus architecto provident nisi ullam minus asperiores commodi!
              Tenetur, repellat aliquam nihil illo.
            </p>
            <ul class=\"list-unstyled list-check\">
              <li>Lorem ipsum dolor sit amet</li>
              <li>Velit explicabo vitae repellendu</li>
              <li>Repellat aliquam nihil illo</li>
            </ul>

            <p><a href=\"#\" class=\"btn-cta\">Get in touch</a></p>
          </div>
        </div>
      </div>
    </section><!-- /About 3 Section -->

    <!-- Services 2 Section -->
    <section id=\"services-2\" class=\"services-2 section dark-background\">
      <!-- Section Title -->
      <div class=\"container section-title\" data-aos=\"fade-up\">
        <h2>Services</h2>
        <p>Necessitatibus eius consequatur</p>
      </div><!-- End Section Title -->

      <div class=\"services-carousel-wrap\">
        <div class=\"container\">
          <div class=\"swiper init-swiper\">
            <script type=\"application/json\" class=\"swiper-config\">
              {
                \"loop\": true,
                \"speed\": 600,
                \"autoplay\": {
                  \"delay\": 5000
                },
                \"slidesPerView\": \"auto\",
                \"pagination\": {
                  \"el\": \".swiper-pagination\",
                  \"type\": \"bullets\",
                  \"clickable\": true
                },
                \"navigation\": {
                  \"nextEl\": \".js-custom-next\",
                  \"prevEl\": \".js-custom-prev\"
                },
                \"breakpoints\": {
                  \"320\": {
                    \"slidesPerView\": 1,
                    \"spaceBetween\": 40
                  },
                  \"1200\": {
                    \"slidesPerView\": 3,
                    \"spaceBetween\": 40
                  }
                }
              }
            </script>
            <button class=\"navigation-prev js-custom-prev\">
              <i class=\"bi bi-arrow-left-short\"></i>
            </button>
            <button class=\"navigation-next js-custom-next\">
              <i class=\"bi bi-arrow-right-short\"></i>
            </button>
            <div class=\"swiper-wrapper\">
              <div class=\"swiper-slide\">
                <div class=\"service-item\">
                  <div class=\"service-item-contents\">
                    <a href=\"#\">
                      <span class=\"service-item-category\">We do</span>
                      <h2 class=\"service-item-title\">Planting</h2>
                    </a>
                  </div>
                  <img src=\" asset{{('assets/img/img_sq_1.jpg')}}\" alt=\"Image\" class=\"img-fluid\">
                </div>
              </div>
              <div class=\"swiper-slide\">
                <div class=\"service-item\">
                  <div class=\"service-item-contents\">
                    <a href=\"#\">
                      <span class=\"service-item-category\">We do</span>
                      <h2 class=\"service-item-title\">Mulching</h2>
                    </a>
                  </div>
                  <img src=\"asset{{('assets/img/img_sq_3.jpg')}}\" alt=\"Image\" class=\"img-fluid\">
                </div>
              </div>
              <div class=\"swiper-slide\">
                <div class=\"service-item\">
                  <div class=\"service-item-contents\">
                    <a href=\"#\">
                      <span class=\"service-item-category\">We do</span>
                      <h2 class=\"service-item-title\">Watering</h2>
                    </a>
                  </div>
                  <img src=\"asset{{('assets/img/img_sq_8.jpg')}}\" alt=\"Image\" class=\"img-fluid\">
                </div>
              </div>

              <div class=\"swiper-slide\">
                <div class=\"service-item\">
                  <div class=\"service-item-contents\">
                    <a href=\"#\">
                      <span class=\"service-item-category\">We do</span>
                      <h2 class=\"service-item-title\">Fertilizing</h2>
                    </a>
                  </div>
                  <img src=\"asset{{('assets/img/img_sq_4.jpg')}}\" alt=\"Image\" class=\"img-fluid\">
                </div>
              </div>
              <div class=\"swiper-slide\">
                <div class=\"service-item\">
                  <div class=\"service-item-contents\">
                    <a href=\"#\">
                      <span class=\"service-item-category\">We do</span>
                      <h2 class=\"service-item-title\">Harvesting</h2>
                    </a>
                  </div>
                  <img src=\"asset{{('assets/img/img_sq_5.jpg')}}\" alt=\"Image\" class=\"img-fluid\">
                </div>
              </div>
              <div class=\"swiper-slide\">
                <div class=\"service-item\">
                  <div class=\"service-item-contents\">
                    <a href=\"#\">
                      <span class=\"service-item-category\">We do</span>
                      <h2 class=\"service-item-title\">Mowing</h2>
                    </a>
                  </div>
                  <img src=\"asset{{('assets/img/img_sq_6.jpg')}}\" alt=\"Image\" class=\"img-fluid\">
                  
                </div>
              </div>
              <div class=\"swiper-slide\">
                <div class=\"service-item\">
                  <div class=\"service-item-contents\">
                    <a href=\"#\">
                      <span class=\"service-item-category\">We do</span>
                      <h2 class=\"service-item-title\">Seeding Plants</h2>
                    </a>
                  </div>
                  <img src=\"{{('assets/img/img_sq_8.jpg')}}\" alt=\"Image\" class=\"img-fluid\">
                </div>
              </div>
            </div>
            <div class=\"swiper-pagination\"></div>
          </div>
        </div>
      </div>
    </section><!-- /Services 2 Section -->

    <!-- Testimonials Section -->
    <section class=\"testimonials-12 testimonials section\" id=\"testimonials\">
      <!-- Section Title -->
      <div class=\"container section-title\" data-aos=\"fade-up\">
        <h2>TESTIMONIALS</h2>
        <p>Necessitatibus eius consequatur</p>
      </div><!-- End Section Title -->

      <div class=\"testimonial-wrap\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-6 mb-4 mb-md-4\">
              <div class=\"testimonial\">
                <img src=\"asset{{('assets/img/testimonials/testimonials-1.jpg')}}\" alt=\"Testimonial author\">
                <blockquote>
                  <p>
                    “Lorem ipsum dolor sit, amet consectetur adipisicing
                    elit. Provident deleniti iusto molestias, dolore vel fugiat
                    ab placeat ea?”
                  </p>
                </blockquote>
                <p class=\"client-name\">James Smith</p>
              </div>
            </div>
            <div class=\"col-md-6 mb-4 mb-md-4\">
              <div class=\"testimonial\">
                <img src=\"asset{{('assets/img/testimonials/testimonials-2.jpg')}}\" alt=\"Testimonial author\">
                <blockquote>
                  <p>
                    “Lorem ipsum dolor sit, amet consectetur adipisicing
                    elit. Provident deleniti iusto molestias, dolore vel fugiat
                    ab placeat ea?”
                  </p>
                </blockquote>
                <p class=\"client-name\">Kate Smith</p>
              </div>
            </div>
            <div class=\"col-md-6 mb-4 mb-md-4\">
              <div class=\"testimonial\">
                <img src=\"assets/img/testimonials/testimonials-3.jpg\" alt=\"Testimonial author\">
                <blockquote>
                  <p>
                    “Lorem ipsum dolor sit, amet consectetur adipisicing
                    elit. Provident deleniti iusto molestias, dolore vel fugiat
                    ab placeat ea?”
                  </p>
                </blockquote>
                <p class=\"client-name\">Claire Anderson</p>
              </div>
            </div>
            <div class=\"col-md-6 mb-4 mb-md-4\">
              <div class=\"testimonial\">
                <img src=\"assets/img/testimonials/testimonials-4.jpg\" alt=\"Testimonial author\">
                <blockquote>
                  <p>
                    “Lorem ipsum dolor sit, amet consectetur adipisicing
                    elit. Provident deleniti iusto molestias, dolore vel fugiat
                    ab placeat ea?”
                  </p>
                </blockquote>
                <p class=\"client-name\">Dan Smith</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Testimonials Section -->

    <!-- Recent Posts Section -->
    <section id=\"recent-posts\" class=\"recent-posts section\">

      <!-- Section Title -->
      <div class=\"container section-title\" data-aos=\"fade-up\">
        <h2>Recent Posts</h2>
        <p>Necessitatibus eius consequatur</p>
      </div><!-- End Section Title -->

      <div class=\"container\">

        <div class=\"row gy-5\">

          <div class=\"col-xl-4 col-md-6\">
            <div class=\"post-item position-relative h-100\" data-aos=\"fade-up\" data-aos-delay=\"100\">

              <div class=\"post-img position-relative overflow-hidden\">
                <img src=\"assets/img/blog/blog-1.jpg\" class=\"img-fluid\" alt=\"\">
                <span class=\"post-date\">December 12</span>
              </div>

              <div class=\"post-content d-flex flex-column\">

                <h3 class=\"post-title\">Eum ad dolor et. Autem aut fugiat debitis</h3>

                <div class=\"meta d-flex align-items-center\">
                  <div class=\"d-flex align-items-center\">
                    <i class=\"bi bi-person\"></i> <span class=\"ps-2\">Julia Parker</span>
                  </div>
                  <span class=\"px-3 text-black-50\">/</span>
                  <div class=\"d-flex align-items-center\">
                    <i class=\"bi bi-folder2\"></i> <span class=\"ps-2\">Politics</span>
                  </div>
                </div>

                <hr>

                <a href=\"blog-details.html\" class=\"readmore stretched-link\"><span>Read More</span><i class=\"bi bi-arrow-right\"></i></a>

              </div>

            </div>
          </div><!-- End post item -->

          <div class=\"col-xl-4 col-md-6\">
            <div class=\"post-item position-relative h-100\" data-aos=\"fade-up\" data-aos-delay=\"200\">

              <div class=\"post-img position-relative overflow-hidden\">
                <img src=\"assets/img/blog/blog-2.jpg\" class=\"img-fluid\" alt=\"\">
                <span class=\"post-date\">July 17</span>
              </div>

              <div class=\"post-content d-flex flex-column\">

                <h3 class=\"post-title\">Et repellendus molestiae qui est sed omnis</h3>

                <div class=\"meta d-flex align-items-center\">
                  <div class=\"d-flex align-items-center\">
                    <i class=\"bi bi-person\"></i> <span class=\"ps-2\">Mario Douglas</span>
                  </div>
                  <span class=\"px-3 text-black-50\">/</span>
                  <div class=\"d-flex align-items-center\">
                    <i class=\"bi bi-folder2\"></i> <span class=\"ps-2\">Sports</span>
                  </div>
                </div>

                <hr>

                <a href=\"blog-details.html\" class=\"readmore stretched-link\"><span>Read More</span><i class=\"bi bi-arrow-right\"></i></a>

              </div>

            </div>
          </div><!-- End post item -->

          <div class=\"col-xl-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"300\">
            <div class=\"post-item position-relative h-100\">

              <div class=\"post-img position-relative overflow-hidden\">
                <img src=\"assets/img/blog/blog-3.jpg\" class=\"img-fluid\" alt=\"\">
                <span class=\"post-date\">September 05</span>
              </div>

              <div class=\"post-content d-flex flex-column\">

                <h3 class=\"post-title\">Quia assumenda est et veritati tirana ploder</h3>

                <div class=\"meta d-flex align-items-center\">
                  <div class=\"d-flex align-items-center\">
                    <i class=\"bi bi-person\"></i> <span class=\"ps-2\">Lisa Hunter</span>
                  </div>
                  <span class=\"px-3 text-black-50\">/</span>
                  <div class=\"d-flex align-items-center\">
                    <i class=\"bi bi-folder2\"></i> <span class=\"ps-2\">Economics</span>
                  </div>
                </div>

                <hr>

                <a href=\"blog-details.html\" class=\"readmore stretched-link\"><span>Read More</span><i class=\"bi bi-arrow-right\"></i></a>

              </div>

            </div>
          </div><!-- End post item -->

        </div>

      </div>

    </section><!-- /Recent Posts Section -->

    <!-- Call To Action Section -->
    <section id=\"call-to-action\" class=\"call-to-action section light-background\">

      <div class=\"content\">
        <div class=\"container\">
          <div class=\"row align-items-center\">
            <div class=\"col-lg-6\">
              <h3>Subscribe To Our Newsletter</h3>
              <p class=\"opacity-50\">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Nesciunt, reprehenderit!
              </p>
            </div>
            <div class=\"col-lg-6\">
              <form action=\"forms/newsletter.php\" class=\"form-subscribe php-email-form\">
                <div class=\"form-group d-flex align-items-stretch\">
                  <input type=\"email\" name=\"email\" class=\"form-control h-100\" placeholder=\"Enter your e-mail\">
                  <input type=\"submit\" class=\"btn btn-secondary px-4\" value=\"Subcribe\">
                </div>
                <div class=\"loading\">Loading</div>
                <div class=\"error-message\"></div>
                <div class=\"sent-message\">
                  Your subscription request has been sent. Thank you!
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Call To Action Section -->

  </main>

  <footer id=\"footer\" class=\"footer dark-background\">

    <div class=\"footer-top\">
      <div class=\"container\">
        <div class=\"row gy-4\">
          <div class=\"col-lg-4 col-md-6 footer-about\">
            <a href=\"index.html\" class=\"logo d-flex align-items-center\">
              <span class=\"sitename\">AgriCulture</span>
            </a>
            <div class=\"footer-contact pt-3\">
              <p>A108 Adam Street</p>
              <p>New York, NY 535022</p>
              <p class=\"mt-3\"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
              <p><strong>Email:</strong> <span>info@example.com</span></p>
            </div>
          </div>

          <div class=\"col-lg-2 col-md-3 footer-links\">
            <h4>Useful Links</h4>
            <ul>
              <li><a href=\"#\">Home</a></li>
              <li><a href=\"#\">About us</a></li>
              <li><a href=\"#\">Services</a></li>
              <li><a href=\"#\">Terms of service</a></li>
              <li><a href=\"#\">Privacy policy</a></li>
            </ul>
          </div>

          <div class=\"col-lg-2 col-md-3 footer-links\">
            <h4>Our Services</h4>
            <ul>
              <li><a href=\"#\">Web Design</a></li>
              <li><a href=\"#\">Web Development</a></li>
              <li><a href=\"#\">Product Management</a></li>
              <li><a href=\"#\">Marketing</a></li>
              <li><a href=\"#\">Graphic Design</a></li>
            </ul>
          </div>

          <div class=\"col-lg-2 col-md-3 footer-links\">
            <h4>Hic solutasetp</h4>
            <ul>
              <li><a href=\"#\">Molestiae accusamus iure</a></li>
              <li><a href=\"#\">Excepturi dignissimos</a></li>
              <li><a href=\"#\">Suscipit distinctio</a></li>
              <li><a href=\"#\">Dilecta</a></li>
              <li><a href=\"#\">Sit quas consectetur</a></li>
            </ul>
          </div>

          <div class=\"col-lg-2 col-md-3 footer-links\">
            <h4>Nobis illum</h4>
            <ul>
              <li><a href=\"#\">Ipsam</a></li>
              <li><a href=\"#\">Laudantium dolorum</a></li>
              <li><a href=\"#\">Dinera</a></li>
              <li><a href=\"#\">Trodelas</a></li>
              <li><a href=\"#\">Flexo</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class=\"copyright text-center\">
      <div class=\"container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center\">

        <div class=\"d-flex flex-column align-items-center align-items-lg-start\">
          <div>
            © Copyright <strong><span>MyWebsite</span></strong>. All Rights Reserved
          </div>
          <div class=\"credits\">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
            Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a> Distributed by <a href=\"https://themewagon.com\">ThemeWagon</a>
          </div>
        </div>

        <div class=\"social-links order-first order-lg-last mb-3 mb-lg-0\">
          <a href=\"\"><i class=\"bi bi-twitter-x\"></i></a>
          <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
          <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
          <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
        </div>

      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href=\"#\" id=\"scroll-top\" class=\"scroll-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

  <!-- Preloader -->
  <div id=\"preloader\"></div>
  
     {% endblock  %}

     {%  block js %}


   
  <script src=\"{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
<script src=\"{{ asset('assets/vendor/php-email-form/validate.js') }}\"></script>
<script src=\"{{ asset('assets/vendor/aos/aos.js') }}\"></script>
<script src=\"{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}\"></script>
<script src=\"{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}\"></script>

<!-- Main JS File -->
<script src=\"{{ asset('assets/js/main.js') }}\"></script>
     
     
     {%   endblock %}


</body>

</html>", "base.html.twig", "C:\\Users\\OmarA\\OneDrive\\Bureau\\integration_workshop_user1\\templates\\base.html.twig");
    }
}
