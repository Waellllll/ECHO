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

/* baseback.html.twig */
class __TwigTemplate_ee3bb3bea39788fd7bff47aa5bb7fcb2 extends Template
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
            'titleback' => [$this, 'block_titleback'],
            'stylesheetsback' => [$this, 'block_stylesheetsback'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseback.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseback.html.twig"));

        // line 1
        yield "
<!doctype html>
<html lang=\"en\" dir=\"ltr\">
  <head>
    <meta charset=\"utf-8\">
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
      <title>";
        // line 7
        yield from $this->unwrap()->yieldBlock('titleback', $context, $blocks);
        yield "</title>
      ";
        // line 8
        yield from $this->unwrap()->yieldBlock('stylesheetsback', $context, $blocks);
        // line 33
        yield "      <style>
    /* Personnalisation de la couleur des boutons */
    :root {
      --bs-primary: #28a745; /* Vert */
      --bs-primary-shade-20: #218838; /* Vert plus foncé */
      --bs-primary-rgb: 40, 167, 69; /* RGB du vert */
      --bs-primary-tint-20: #35d074; /* Vert clair */
    }

    .btn.btn-primary {
      color: var(--bs-white);
      background-color: var(--bs-primary);
      border-color: var(--bs-primary);
    }

    .btn.btn-primary:hover {
      color: var(--bs-white);
      background-color: var(--bs-primary-shade-20);
      border-color: var(--bs-primary-shade-20);
    }

    .btn.btn-primary:focus {
      color: var(--bs-white);
      background-color: var(--bs-primary-shade-20);
      border-color: var(--bs-primary-shade-20);
    }

    .btn.btn-primary:active, .btn.btn-primary.active {
      color: var(--bs-white);
      background-color: var(--bs-primary-shade-20);
      border-color: var(--bs-primary-shade-20);
    }
  </style>
  </head>
  <body class=\"  \">
  
   
    <!-- loader END -->
    
    <aside class=\"sidebar sidebar-default sidebar-white sidebar-base navs-rounded-all \">
        <div class=\"sidebar-header d-flex align-items-center justify-content-start\">
            <a href=\"../dashboard/index.html\" class=\"navbar-brand\">
                
                <!--Logo start-->
                
            <div class=\"logo-mini\">
           <img src=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/images/greenbridge.png.png"), "html", null, true);
        yield "\" alt=\"Logo\" class=\"logo-img\" width=\"45\" height=\"50\">
              </div>

                <!--logo End-->
                
                
                
                
                <h4 class=\"logo-title\"> GreenBridge </h4>
            </a>
            <div class=\"sidebar-toggle\" data-toggle=\"sidebar\" data-active=\"true\">
                <i class=\"icon\">
                    <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path d=\"M4.25 12.2744L19.25 12.2744\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"></path>
                        <path d=\"M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"></path>
                    </svg>
                </i>
            </div>
        </div>
        <div class=\"sidebar-body pt-0 data-scrollbar\">
            <div class=\"sidebar-list\">
                <!-- Sidebar Menu Start -->
                <ul class=\"navbar-nav iq-main-menu\" id=\"sidebar-menu\">
                    <li class=\"nav-item static-item\">
                        <a class=\"nav-link static-item disabled\" href=\"#\" tabindex=\"-1\">
                            <span class=\"default-icon\">Home</span>
                            <span class=\"mini-icon\">-</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link active d-flex align-items-center\" aria-current=\"page\" href=\"";
        // line 109
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\">
                            <span class=\"me-2\">Dashboard</span> <!-- \"me-2\" ajoute un espace entre le texte et l'icône -->
                            <i class=\"icon\">
                                <svg width=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-20\">
                                    <path opacity=\"0.4\" d=\"M16.0756 2H19.4616C20.8639 2 22.0001 3.14585 22.0001 4.55996V7.97452C22.0001 9.38864 20.8639 10.5345 19.4616 10.5345H16.0756C14.6734 10.5345 13.5371 9.38864 13.5371 7.97452V4.55996C13.5371 3.14585 14.6734 2 16.0756 2Z\" fill=\"currentColor\"></path>
                                    <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z\" fill=\"currentColor\"></path>
                                </svg>
                            </i>
                        </a>
                    </li>
           
                    
                    <li><hr class=\"hr-horizontal\"></li>
                    <li class=\"nav-item static-item\">
                        <a class=\"nav-link static-item disabled\" href=\"#\" tabindex=\"-1\">
                            <span class=\"default-icon\">Pages</span>
                            <span class=\"mini-icon\">-</span>
                        </a>
                    </li>
                    
          
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#sidebar-user\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebar-user\">
                            <i class=\"icon\">
                                <svg class=\"icon-20\" width=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path d=\"M11.9488 14.54C8.49884 14.54 5.58789 15.1038 5.58789 17.2795C5.58789 19.4562 8.51765 20.0001 11.9488 20.0001C15.3988 20.0001 18.3098 19.4364 18.3098 17.2606C18.3098 15.084 15.38 14.54 11.9488 14.54Z\" fill=\"currentColor\"></path>
                                    <path opacity=\"0.4\" d=\"M11.949 12.467C14.2851 12.467 16.1583 10.5831 16.1583 8.23351C16.1583 5.88306 14.2851 4 11.949 4C9.61293 4 7.73975 5.88306 7.73975 8.23351C7.73975 10.5831 9.61293 12.467 11.949 12.467Z\" fill=\"currentColor\"></path>
                                    <path opacity=\"0.4\" d=\"M21.0881 9.21923C21.6925 6.84176 19.9205 4.70654 17.664 4.70654C17.4187 4.70654 17.1841 4.73356 16.9549 4.77949C16.9244 4.78669 16.8904 4.802 16.8725 4.82902C16.8519 4.86324 16.8671 4.90917 16.8895 4.93889C17.5673 5.89528 17.9568 7.0597 17.9568 8.30967C17.9568 9.50741 17.5996 10.6241 16.9728 11.5508C16.9083 11.6462 16.9656 11.775 17.0793 11.7948C17.2369 11.8227 17.3981 11.8371 17.5629 11.8416C19.2059 11.8849 20.6807 10.8213 21.0881 9.21923Z\" fill=\"currentColor\"></path>
                                    <path d=\"M22.8094 14.817C22.5086 14.1722 21.7824 13.73 20.6783 13.513C20.1572 13.3851 18.747 13.205 17.4352 13.2293C17.4155 13.232 17.4048 13.2455 17.403 13.2545C17.4003 13.2671 17.4057 13.2887 17.4316 13.3022C18.0378 13.6039 20.3811 14.916 20.0865 17.6834C20.074 17.8032 20.1698 17.9068 20.2888 17.8888C20.8655 17.8059 22.3492 17.4853 22.8094 16.4866C23.0637 15.9589 23.0637 15.3456 22.8094 14.817Z\" fill=\"currentColor\"></path>
                                    <path opacity=\"0.4\" d=\"M7.04459 4.77973C6.81626 4.7329 6.58077 4.70679 6.33543 4.70679C4.07901 4.70679 2.30701 6.84201 2.9123 9.21947C3.31882 10.8216 4.79355 11.8851 6.43661 11.8419C6.60136 11.8374 6.76343 11.8221 6.92013 11.7951C7.03384 11.7753 7.09115 11.6465 7.02668 11.551C6.3999 10.6234 6.04263 9.50765 6.04263 8.30991C6.04263 7.05904 6.43303 5.89462 7.11085 4.93913C7.13234 4.90941 7.14845 4.86348 7.12696 4.82926C7.10906 4.80135 7.07593 4.78694 7.04459 4.77973Z\" fill=\"currentColor\"></path>
                                    <path d=\"M3.32156 13.5127C2.21752 13.7297 1.49225 14.1719 1.19139 14.8167C0.936203 15.3453 0.936203 15.9586 1.19139 16.4872C1.65163 17.4851 3.13531 17.8066 3.71195 17.8885C3.83104 17.9065 3.92595 17.8038 3.91342 17.6832C3.61883 14.9167 5.9621 13.6046 6.56918 13.3029C6.59425 13.2885 6.59962 13.2677 6.59694 13.2542C6.59515 13.2452 6.5853 13.2317 6.5656 13.2299C5.25294 13.2047 3.84358 13.3848 3.32156 13.5127Z\" fill=\"currentColor\"></path>
                                </svg>
                            </i>
                            <span class=\"item-name\">Users</span>
                            <i class=\"right-icon\">
                                <svg class=\"icon-18\" xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5l7 7-7 7\" />
                                </svg>
                            </i>
                        </a>
                        <ul class=\"sub-nav collapse\" id=\"sidebar-user\" data-bs-parent=\"#sidebar-menu\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link \" href=\"";
        // line 151
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        yield "\">
                                    <i class=\"icon\">
                                        <svg class=\"icon-10\" xmlns=\"http://www.w3.org/2000/svg\" width=\"10\" viewBox=\"0 0 24 24\" fill=\"currentColor\">
                                            <g>
                                            <circle cx=\"12\" cy=\"12\" r=\"8\" fill=\"currentColor\"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <i class=\"sidenav-mini-icon\"> A </i>
                                    <span class=\"item-name\">Add User</span>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link \" href=\"";
        // line 164
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\">
                                    <i class=\"icon\">
                                        <svg class=\"icon-10\" xmlns=\"http://www.w3.org/2000/svg\" width=\"10\" viewBox=\"0 0 24 24\" fill=\"currentColor\">
                                            <g>
                                            <circle cx=\"12\" cy=\"12\" r=\"8\" fill=\"currentColor\"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <i class=\"sidenav-mini-icon\"> U </i>
                                    <span class=\"item-name\">User List</span>
                                </a>
                            </li>
                        </ul>
                    </li>
    <li class=\"nav-item\">
    <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#sidebar-event\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebar-event\">
        <i class=\"icon\">
            <svg class=\"icon-20\" width=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M9 2l1 4m5-4l-1 4M2 9l4 1m16 0l-4 1M4 17l3-3m13 0l-3-3m-9 9l1-4m5 4l-1-4\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"/>
                <circle cx=\"12\" cy=\"12\" r=\"5\" stroke=\"currentColor\" stroke-width=\"2\"/>
            </svg>
        </i>
        <span class=\"item-name\">Conseil</span>
        <i class=\"right-icon\">
            <svg class=\"icon-18\" xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5l7 7-7 7\" />
            </svg>
        </i>
    </a>
    <ul class=\"sub-nav collapse\" id=\"sidebar-event\" data-bs-parent=\"#sidebar-menu\">
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
        // line 195
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conseil_index");
        yield "\">
                <i class=\"icon\">
                    <svg class=\"icon-10\" xmlns=\"http://www.w3.org/2000/svg\" width=\"10\" viewBox=\"0 0 24 24\" fill=\"currentColor\">
                        <g>
                            <circle cx=\"12\" cy=\"12\" r=\"8\" fill=\"currentColor\"></circle>
                        </g>
                    </svg>
                </i>
                <i class=\"sidenav-mini-icon\"> L </i>
                <span class=\"item-name\">Liste des Conseils</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
        // line 208
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conseil_new");
        yield "\">
                <i class=\"icon\">
                    <svg class=\"icon-10\" xmlns=\"http://www.w3.org/2000/svg\" width=\"10\" viewBox=\"0 0 24 24\" fill=\"currentColor\">
                        <g>
                            <circle cx=\"12\" cy=\"12\" r=\"8\" fill=\"currentColor\"></circle>
                        </g>
                    </svg>
                </i>
                <i class=\"sidenav-mini-icon\"> A </i>
                <span class=\"item-name\">Ajouter un Conseil</span>
            </a>
        </li>
        
       </ul>
      </li>
      <li class=\"nav-item\">
      <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#sidebar-terrain\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebar-terrain\">
        <i class=\"icon\">
            <svg class=\"icon-20\" width=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M5 16h14M3 12h18M4 8h16M2 4h20M6 16l-1 4h14l-1-4\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"/>
                <circle cx=\"8\" cy=\"20\" r=\"2\" stroke=\"currentColor\" stroke-width=\"2\"/>
                <circle cx=\"16\" cy=\"20\" r=\"2\" stroke=\"currentColor\" stroke-width=\"2\"/>
            </svg>
        </i>
        <span class=\"item-name\">Terrain </span>
        <i class=\"right-icon\">
            <svg class=\"icon-18\" xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5l7 7-7 7\" />
            </svg>
        </i>
    </a>
    <ul class=\"sub-nav collapse\" id=\"sidebar-terrain\" data-bs-parent=\"#sidebar-menu\">
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
        // line 241
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("terrain_list");
        yield "\">
                <i class=\"icon\">
                    <svg class=\"icon-10\" xmlns=\"http://www.w3.org/2000/svg\" width=\"10\" viewBox=\"0 0 24 24\" fill=\"currentColor\">
                        <g>
                            <circle cx=\"12\" cy=\"12\" r=\"8\" fill=\"currentColor\"></circle>
                        </g>
                    </svg>
                </i>
                <i class=\"sidenav-mini-icon\"> L </i>
                <span class=\"item-name\">Liste des Terrains</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
        // line 254
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouterT");
        yield "\">
                <i class=\"icon\">
                    <svg class=\"icon-10\" xmlns=\"http://www.w3.org/2000/svg\" width=\"10\" viewBox=\"0 0 24 24\" fill=\"currentColor\">
                        <g>
                            <circle cx=\"12\" cy=\"12\" r=\"8\" fill=\"currentColor\"></circle>
                        </g>
                    </svg>
                </i>
                <i class=\"sidenav-mini-icon\"> A </i>
                <span class=\"item-name\">Ajouter un Terrain</span>
            </a>
        </li>
    </ul>
     </li>
     <li class=\"nav-item\">
    <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#sidebar-interventions\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebar-interventions\">
        <i class=\"icon\">
            <svg class=\"icon-20\" width=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M22 12h-4l-2 2v2l2 2h4M2 12h4l2 2v2l-2 2H2M12 2v4l2 2h2l2-2V2M12 22v-4l2-2h2l2 2v4M6 6l12 12\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"/>
            </svg>
        </i>
        <span class=\"item-name\">Workshop</span>
        <i class=\"right-icon\">
            <svg class=\"icon-18\" xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5l7 7-7 7\" />
            </svg>
        </i>
    </a>
    <ul class=\"sub-nav collapse\" id=\"sidebar-interventions\" data-bs-parent=\"#sidebar-menu\">
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
        // line 284
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_workshop_index");
        yield "\">
                <i class=\"icon\">
                    <svg class=\"icon-10\" xmlns=\"http://www.w3.org/2000/svg\" width=\"10\" viewBox=\"0 0 24 24\" fill=\"currentColor\">
                        <g>
                            <circle cx=\"12\" cy=\"12\" r=\"8\" fill=\"currentColor\"></circle>
                        </g>
                    </svg>
                </i>
                <i class=\"sidenav-mini-icon\"> L </i>
                <span class=\"item-name\">Liste des Workshops</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
        // line 297
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_workshop_index");
        yield "\">
                <i class=\"icon\">
                    <svg class=\"icon-10\" xmlns=\"http://www.w3.org/2000/svg\" width=\"10\" viewBox=\"0 0 24 24\" fill=\"currentColor\">
                        <g>
                            <circle cx=\"12\" cy=\"12\" r=\"8\" fill=\"currentColor\"></circle>
                        </g>
                    </svg>
                </i>
                <i class=\"sidenav-mini-icon\"> A </i>
                <span class=\"item-name\">Ajouter un Workshop</span>
            </a>
        </li>
       </ul>
       </li>


             <li class=\"nav-item\">
    <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#sidebar-reservation\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebar-reservation\">
        <i class=\"icon\">
            <svg class=\"icon-20\" width=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M3 8h18M3 12h18M3 16h18M5 4h2M17 4h2\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"/>
                <rect x=\"3\" y=\"6\" width=\"18\" height=\"14\" rx=\"2\" stroke=\"currentColor\" stroke-width=\"2\"/>
            </svg>
        </i>
        <span class=\"item-name\">Réservations</span>
        <i class=\"right-icon\">
            <svg class=\"icon-18\" xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5l7 7-7 7\" />
            </svg>
        </i>
    </a>
    <ul class=\"sub-nav collapse\" id=\"sidebar-reservation\" data-bs-parent=\"#sidebar-menu\">
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
        // line 330
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_index");
        yield "\">
                <i class=\"icon\">
                    <svg class=\"icon-10\" xmlns=\"http://www.w3.org/2000/svg\" width=\"10\" viewBox=\"0 0 24 24\" fill=\"currentColor\">
                        <g>
                            <circle cx=\"12\" cy=\"12\" r=\"8\" fill=\"currentColor\"></circle>
                        </g>
                    </svg>
                </i>
                <i class=\"sidenav-mini-icon\"> L </i>
                <span class=\"item-name\">Liste des Réservations</span>
            </a>
        </li>

    </ul>
</li>

    <li class=\"nav-item\">
    <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#sidebar-posts\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebar-posts\">
        <i class=\"icon\">
            <svg class=\"icon-20\" width=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M3 4h18v16H3z\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                <path d=\"M7 8h10M7 12h5\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"/>
            </svg>
        </i>
        <span class=\"item-name\">Blog</span>
        <i class=\"right-icon\">
            <svg class=\"icon-18\" xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5l7 7-7 7\" />
            </svg>
        </i>
    </a>
    <ul class=\"sub-nav collapse\" id=\"sidebar-posts\" data-bs-parent=\"#sidebar-menu\">
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"";
        // line 363
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articleback_index");
        yield "\">
                <i class=\"icon\">
                    <svg class=\"icon-10\" xmlns=\"http://www.w3.org/2000/svg\" width=\"10\" viewBox=\"0 0 24 24\" fill=\"currentColor\">
                        <circle cx=\"12\" cy=\"12\" r=\"8\" fill=\"currentColor\"></circle>
                    </svg>
                </i>
                <i class=\"sidenav-mini-icon\"> L </i>
                <span class=\"item-name\">Blog</span>
            </a>
        </li>
      
    </ul>
    </li>
    
<li class=\"nav-item\">
    <!-- Menu pour gérer les matériels (outils, équipements, etc.) -->
    <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#sidebar-materials\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebar-materials\">
        <i class=\"icon\">
            <!-- Icône représentant une boîte à outils -->
            <svg class=\"icon-20\" width=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M7 7h10v10H7z\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"/>
                <path d=\"M2 12h4M18 12h4M12 2v4M12 18v4\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"/>
            </svg>
        </i>
        <span class=\"item-name\">Matériels</span>
        <i class=\"right-icon\">
            <svg class=\"icon-18\" xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5l7 7-7 7\" />
            </svg>
        </i>
    </a>
    <ul class=\"sub-nav collapse\" id=\"sidebar-materials\" data-bs-parent=\"#sidebar-menu\">
        <!-- Liste des matériels -->
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 397
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_index");
        yield "\">
                <i class=\"icon\">
                    <svg class=\"icon-10\" xmlns=\"http://www.w3.org/2000/svg\" width=\"10\" viewBox=\"0 0 24 24\" fill=\"currentColor\">
                        <circle cx=\"12\" cy=\"12\" r=\"8\" fill=\"currentColor\"></circle>
                    </svg>
                </i>
                <i class=\"sidenav-mini-icon\"> L </i>
                <span class=\"item-name\">Liste des Matériels</span>
            </a>
        </li>
        <!-- Ajouter un matériel -->
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 409
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_new");
        yield "\">
                <i class=\"icon\">
                    <svg class=\"icon-10\" xmlns=\"http://www.w3.org/2000/svg\" width=\"10\" viewBox=\"0 0 24 24\" fill=\"currentColor\">
                        <circle cx=\"12\" cy=\"12\" r=\"8\" fill=\"currentColor\"></circle>
                    </svg>
                </i>
                <i class=\"sidenav-mini-icon\"> A </i>
                <span class=\"item-name\">Ajouter un Matériel</span>
            </a>
        </li>
    </ul>
</li>
<li class=\"nav-item\">
    <!-- Menu pour gérer l'apprentissage en ligne -->
    <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#sidebar-elearning\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebar-elearning\">
        <i class=\"icon\">
            <!-- Icône différente pour l'e-learning, représentant un livre ouvert ou une étude -->
            <svg class=\"icon-20\" width=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M12 6v12M6 12h12\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
            </svg>
        </i>
        <span class=\"item-name\">E-Learning</span>
        <i class=\"right-icon\">
            <svg class=\"icon-18\" xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5l7 7-7 7\" />
            </svg>
        </i>
    </a>
    <ul class=\"sub-nav collapse\" id=\"sidebar-elearning\" data-bs-parent=\"#sidebar-menu\">
        <!-- Liste des modules e-learning -->
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 440
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_elearning_index");
        yield "\">
                <i class=\"icon\">
                    <svg class=\"icon-10\" xmlns=\"http://www.w3.org/2000/svg\" width=\"10\" viewBox=\"0 0 24 24\" fill=\"currentColor\">
                        <circle cx=\"12\" cy=\"12\" r=\"8\" fill=\"currentColor\"></circle>
                    </svg>
                </i>
                <i class=\"sidenav-mini-icon\"> L </i>
                <span class=\"item-name\">Liste des Modules</span>
            </a>
        </li>
        <!-- Ajouter un module -->
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 452
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_elearning_new");
        yield "\">
                <i class=\"icon\">
                    <svg class=\"icon-10\" xmlns=\"http://www.w3.org/2000/svg\" width=\"10\" viewBox=\"0 0 24 24\" fill=\"currentColor\">
                        <circle cx=\"12\" cy=\"12\" r=\"8\" fill=\"currentColor\"></circle>
                    </svg>
                </i>
                <i class=\"sidenav-mini-icon\"> A </i>
                <span class=\"item-name\">Ajouter un Module</span>
            </a>
        </li>
    </ul>
</li>
<li class=\"nav-item\">
    <!-- Menu pour afficher les consignes et instructions -->
    <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#sidebar-guidelines\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebar-guidelines\">
        <i class=\"icon\">
            <!-- Icône représentant un document (consigne) -->
            <svg class=\"icon-20\" width=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M4 6l8-4 8 4v12l-8 4-8-4V6z\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"/>
                <path d=\"M12 12v4M8 10h8\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"/>
            </svg>
        </i>
        <span class=\"item-name\">Reclamation</span>
        <i class=\"right-icon\">
            <svg class=\"icon-18\" xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5l7 7-7 7\" />
            </svg>
        </i>
    </a>
    <ul class=\"sub-nav collapse\" id=\"sidebar-guidelines\" data-bs-parent=\"#sidebar-menu\">
        <!-- Liste des consignes -->
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 484
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index");
        yield "\">
                <i class=\"icon\">
                    <svg class=\"icon-10\" xmlns=\"http://www.w3.org/2000/svg\" width=\"10\" viewBox=\"0 0 24 24\" fill=\"currentColor\">
                        <circle cx=\"12\" cy=\"12\" r=\"8\" fill=\"currentColor\"></circle>
                    </svg>
                </i>
                <i class=\"sidenav-mini-icon\"> L </i>
                <span class=\"item-name\">Liste des Reclamations</span>
            </a>
        </li>
    </ul>
</li>

 

                    
                    

                <!-- Sidebar Menu End -->        </div>
        </div>
        <div class=\"sidebar-footer\"></div>
    </aside>    <main class=\"main-content\">
      <div class=\"position-relative iq-banner\">
        <!--Nav Start-->
        <nav class=\"nav navbar navbar-expand-lg navbar-light iq-navbar\">
          
           
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
              <span class=\"navbar-toggler-icon\">
                  <span class=\"mt-2 navbar-toggler-bar bar1\"></span>
                  <span class=\"navbar-toggler-bar bar2\"></span>
                  <span class=\"navbar-toggler-bar bar3\"></span>
                </span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
              <ul class=\"mb-2 navbar-nav ms-auto align-items-center navbar-list mb-lg-0\">
                
                <li class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"search-toggle nav-link\" id=\"dropdownMenuButton2\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <img src=\"";
        // line 523
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/images/Flag/flag001.png"), "html", null, true);
        yield "\" class=\"img-fluid rounded-circle\" alt=\"user\" style=\"height: 30px; min-width: 30px; width: 30px;\">
                    <span class=\"bg-primary\"></span>
                    </a>
                    <div class=\"p-0 sub-drop dropdown-menu dropdown-menu-end\" aria-labelledby=\"dropdownMenuButton2\">
                        <div class=\"m-0 border-0 shadow-none card\">
                            <div class=\"p-0 \">
                                <ul class=\"p-0 list-group list-group-flush\">
                                    <li class=\"iq-sub-card list-group-item\"><a class=\"p-0\" href=\"#\"><img src=\"";
        // line 530
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/images/Flag/flag-03.png"), "html", null, true);
        yield "\" alt=\"img-flaf\" class=\"img-fluid me-2\" style=\"width: 15px;height: 15px;min-width: 15px;\"/>Spanish</a></li>
                                    <li class=\"iq-sub-card list-group-item\"><a class=\"p-0\" href=\"#\"><img src=\"";
        // line 531
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/images/Flag/flag-04.png"), "html", null, true);
        yield "\" alt=\"img-flaf\" class=\"img-fluid me-2\" style=\"width: 15px;height: 15px;min-width: 15px;\"/>Italian</a></li>
                                    <li class=\"iq-sub-card list-group-item\"><a class=\"p-0\" href=\"#\"><img src=\"";
        // line 532
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/images/Flag/flag-02.png"), "html", null, true);
        yield "\" alt=\"img-flaf\" class=\"img-fluid me-2\" style=\"width: 15px;height: 15px;min-width: 15px;\"/>French</a></li>
                                    <li class=\"iq-sub-card list-group-item\"><a class=\"p-0\" href=\"#\"><img src=\"";
        // line 533
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/images/Flag/flag-05.png"), "html", null, true);
        yield "\" alt=\"img-flaf\" class=\"img-fluid me-2\" style=\"width: 15px;height: 15px;min-width: 15px;\"/>German</a></li>
                                    <li class=\"iq-sub-card list-group-item\"><a class=\"p-0\" href=\"#\"><img src=\"";
        // line 534
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/images/Flag/flag-06.png"), "html", null, true);
        yield "\" alt=\"img-flaf\" class=\"img-fluid me-2\" style=\"width: 15px;height: 15px;min-width: 15px;\"/>Japanese</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class=\"nav-item dropdown\">
                  <a href=\"#\"  class=\"nav-link\" id=\"notification-drop\" data-bs-toggle=\"dropdown\" >
                      <svg class=\"icon-24\" width=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path d=\"M19.7695 11.6453C19.039 10.7923 18.7071 10.0531 18.7071 8.79716V8.37013C18.7071 6.73354 18.3304 5.67907 17.5115 4.62459C16.2493 2.98699 14.1244 2 12.0442 2H11.9558C9.91935 2 7.86106 2.94167 6.577 4.5128C5.71333 5.58842 5.29293 6.68822 5.29293 8.37013V8.79716C5.29293 10.0531 4.98284 10.7923 4.23049 11.6453C3.67691 12.2738 3.5 13.0815 3.5 13.9557C3.5 14.8309 3.78723 15.6598 4.36367 16.3336C5.11602 17.1413 6.17846 17.6569 7.26375 17.7466C8.83505 17.9258 10.4063 17.9933 12.0005 17.9933C13.5937 17.9933 15.165 17.8805 16.7372 17.7466C17.8215 17.6569 18.884 17.1413 19.6363 16.3336C20.2118 15.6598 20.5 14.8309 20.5 13.9557C20.5 13.0815 20.3231 12.2738 19.7695 11.6453Z\" fill=\"currentColor\"></path>
                        <path opacity=\"0.4\" d=\"M14.0088 19.2283C13.5088 19.1215 10.4627 19.1215 9.96275 19.2283C9.53539 19.327 9.07324 19.5566 9.07324 20.0602C9.09809 20.5406 9.37935 20.9646 9.76895 21.2335L9.76795 21.2345C10.2718 21.6273 10.8632 21.877 11.4824 21.9667C11.8123 22.012 12.1482 22.01 12.4901 21.9667C13.1083 21.877 13.6997 21.6273 14.2036 21.2345L14.2026 21.2335C14.5922 20.9646 14.8734 20.5406 14.8983 20.0602C14.8983 19.5566 14.4361 19.327 14.0088 19.2283Z\" fill=\"currentColor\"></path>
                      </svg>
                      <span class=\"bg-danger dots\"></span>
                  </a>
                  <div class=\"p-0 sub-drop dropdown-menu dropdown-menu-end\" aria-labelledby=\"notification-drop\">
                      <div class=\"m-0 shadow-none card\">
                        <div class=\"py-3 card-header d-flex justify-content-between bg-primary\">
                            <div class=\"header-title\">
                              <h5 class=\"mb-0 text-white\">All Notifications</h5>
                            </div>
                        </div>
                        <div class=\"p-0 card-body\">
                            <a href=\"#\" class=\"iq-sub-card\">
                              <div class=\"d-flex align-items-center\">
                                  <img class=\"p-1 avatar-40 rounded-pill bg-soft-primary\" src=\"";
        // line 558
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/images/shapes/01.png"), "html", null, true);
        yield "\" alt=\"\">
                                  <div class=\"ms-3 w-100\">
                                    <h6 class=\"mb-0 \">Emma Watson Bni</h6>
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <p class=\"mb-0\">95 MB</p>
                                        <small class=\"float-end font-size-12\">Just Now</small>
                                    </div>
                                  </div>
                              </div>
                            </a>
                            <a href=\"#\" class=\"iq-sub-card\">
                              <div class=\"d-flex align-items-center\">
                                  <div class=\"\">
                                    <img class=\"p-1 avatar-40 rounded-pill bg-soft-primary\" src=\"";
        // line 571
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/images/shapes/02.png"), "html", null, true);
        yield "\" alt=\"\">
                                  </div>
                                  <div class=\"ms-3 w-100\">
                                    <h6 class=\"mb-0 \">New customer is join</h6>
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <p class=\"mb-0\">Cyst Bni</p>
                                        <small class=\"float-end font-size-12\">5 days ago</small>
                                    </div>
                                  </div>
                              </div>
                            </a>
                            <a href=\"#\" class=\"iq-sub-card\">
                              <div class=\"d-flex align-items-center\">
                                  <img class=\"p-1 avatar-40 rounded-pill bg-soft-primary\" src=\"";
        // line 584
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/images/shapes/03.png"), "html", null, true);
        yield "\" alt=\"\">
                                  <div class=\"ms-3 w-100\">
                                    <h6 class=\"mb-0 \">Two customer is left</h6>
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <p class=\"mb-0\">Cyst Bni</p>
                                        <small class=\"float-end font-size-12\">2 days ago</small>
                                    </div>
                                  </div>
                              </div>
                            </a>
                            <a href=\"#\" class=\"iq-sub-card\">
                              <div class=\"d-flex align-items-center\">
                                  <img class=\"p-1 avatar-40 rounded-pill bg-soft-primary\" src=\"";
        // line 596
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/images/shapes/04.png"), "html", null, true);
        yield "\" alt=\"\">
                                  <div class=\"w-100 ms-3\">
                                    <h6 class=\"mb-0 \">New Mail from Fenny</h6>
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <p class=\"mb-0\">Cyst Bni</p>
                                        <small class=\"float-end font-size-12\">3 days ago</small>
                                    </div>
                                  </div>
                              </div>
                            </a>
                        </div>
                      </div>
                  </div>
                </li>
                <li class=\"nav-item dropdown\">
                  <a href=\"#\" class=\"nav-link\" id=\"mail-drop\" data-bs-toggle=\"dropdown\"  aria-haspopup=\"true\" aria-expanded=\"false\">
                    <svg class=\"icon-24\" width=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                      <path opacity=\"0.4\" d=\"M22 15.94C22 18.73 19.76 20.99 16.97 21H16.96H7.05C4.27 21 2 18.75 2 15.96V15.95C2 15.95 2.006 11.524 2.014 9.298C2.015 8.88 2.495 8.646 2.822 8.906C5.198 10.791 9.447 14.228 9.5 14.273C10.21 14.842 11.11 15.163 12.03 15.163C12.95 15.163 13.85 14.842 14.56 14.262C14.613 14.227 18.767 10.893 21.179 8.977C21.507 8.716 21.989 8.95 21.99 9.367C22 11.576 22 15.94 22 15.94Z\" fill=\"currentColor\"></path>
                      <path d=\"M21.4759 5.67351C20.6099 4.04151 18.9059 2.99951 17.0299 2.99951H7.04988C5.17388 2.99951 3.46988 4.04151 2.60388 5.67351C2.40988 6.03851 2.50188 6.49351 2.82488 6.75151L10.2499 12.6905C10.7699 13.1105 11.3999 13.3195 12.0299 13.3195C12.0339 13.3195 12.0369 13.3195 12.0399 13.3195C12.0429 13.3195 12.0469 13.3195 12.0499 13.3195C12.6799 13.3195 13.3099 13.1105 13.8299 12.6905L21.2549 6.75151C21.5779 6.49351 21.6699 6.03851 21.4759 5.67351Z\" fill=\"currentColor\"></path>
                    </svg>
                    <span class=\"bg-primary count-mail\"></span>
                  </a>
                  <div class=\"p-0 sub-drop dropdown-menu dropdown-menu-end\" aria-labelledby=\"mail-drop\">
                      <div class=\"m-0 shadow-none card\">
                        <div class=\"py-3 card-header d-flex justify-content-between bg-primary\">
                            <div class=\"header-title\">
                              <h5 class=\"mb-0 text-white\">All Message</h5>
                            </div>
                        </div>
                        <div class=\"p-0 card-body \">
                            <a href=\"#\" class=\"iq-sub-card\">
                              <div class=\"d-flex align-items-center\">
                                  <div class=\"\">
                                    <img class=\"p-1 avatar-40 rounded-pill bg-soft-primary\" src=\"";
        // line 629
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/images/shapes/01.png"), "html", null, true);
        yield "\" alt=\"\">
                                  </div>
                                  <div class=\"ms-3\">
                                    <h6 class=\"mb-0 \">Bni Emma Watson</h6>
                                    <small class=\"float-start font-size-12\">13 Jun</small>
                                  </div>
                              </div>
                            </a>
                            <a href=\"#\" class=\"iq-sub-card\">
                              <div class=\"d-flex align-items-center\">
                                  <div class=\"\">
                                    <img class=\"p-1 avatar-40 rounded-pill bg-soft-primary\" src=\"";
        // line 640
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/images/shapes/02.png"), "html", null, true);
        yield "\" alt=\"\">
                                  </div>
                                  <div class=\"ms-3\">
                                    <h6 class=\"mb-0 \">Lorem Ipsum Watson</h6>
                                    <small class=\"float-start font-size-12\">20 Apr</small>
                                  </div>
                              </div>
                            </a>
                            <a href=\"#\" class=\"iq-sub-card\">
                              <div class=\"d-flex align-items-center\">
                                  <div class=\"\">
                                    <img class=\"p-1 avatar-40 rounded-pill bg-soft-primary\" src=\"";
        // line 651
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/images/shapes/03.png"), "html", null, true);
        yield "\" alt=\"\">
                                  </div>
                                  <div class=\"ms-3\">
                                    <h6 class=\"mb-0 \">Why do we use it?</h6>
                                    <small class=\"float-start font-size-12\">30 Jun</small>
                                  </div>
                              </div>
                            </a>
                            <a href=\"#\" class=\"iq-sub-card\">
                              <div class=\"d-flex align-items-center\">
                                  <div class=\"\">
                                    <img class=\"p-1 avatar-40 rounded-pill bg-soft-primary\" src=\"";
        // line 662
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/images/shapes/04.png"), "html", null, true);
        yield "\" alt=\"\">
                                  </div>
                                  <div class=\"ms-3\">
                                    <h6 class=\"mb-0 \">Variations Passages</h6>
                                    <small class=\"float-start font-size-12\">12 Sep</small>
                                  </div>
                              </div>
                            </a>
                            <a href=\"#\" class=\"iq-sub-card\">
                              <div class=\"d-flex align-items-center\">
                                  <div class=\"\">
                                    <img class=\"p-1 avatar-40 rounded-pill bg-soft-primary\" src=\"";
        // line 673
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/images/shapes/05.png"), "html", null, true);
        yield "\" alt=\"\">
                                  </div>
                                  <div class=\"ms-3\">
                                    <h6 class=\"mb-0 \">Lorem Ipsum generators</h6>
                                    <small class=\"float-start font-size-12\">5 Dec</small>
                                  </div>
                              </div>
                            </a>
                        </div>
                      </div>
                  </div>
                </li>
                <li class=\"nav-item dropdown\">
                  <a class=\"py-0 nav-link d-flex align-items-center\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                    <img src=\"";
        // line 687
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/images/avatars/01.png"), "html", null, true);
        yield "\" alt=\"User-Profile\" class=\"theme-color-default-img img-fluid avatar avatar-50 avatar-rounded\">
                    <img src=\"";
        // line 688
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/images/avatars/avtar_1.png"), "html", null, true);
        yield "\" alt=\"User-Profile\" class=\"theme-color-purple-img img-fluid avatar avatar-50 avatar-rounded\">
                    <img src=\"";
        // line 689
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/images/avatars/avtar_2.png"), "html", null, true);
        yield "\" alt=\"User-Profile\" class=\"theme-color-blue-img img-fluid avatar avatar-50 avatar-rounded\">
                    <img src=\"";
        // line 690
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/images/avatars/avtar_4.png"), "html", null, true);
        yield "\" alt=\"User-Profile\" class=\"theme-color-green-img img-fluid avatar avatar-50 avatar-rounded\">
                    <img src=\"";
        // line 691
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/images/avatars/avtar_5.png"), "html", null, true);
        yield "\" alt=\"User-Profile\" class=\"theme-color-yellow-img img-fluid avatar avatar-50 avatar-rounded\">
                    <img src=\"";
        // line 692
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/images/avatars/avtar_3.png"), "html", null, true);
        yield "\" alt=\"User-Profile\" class=\"theme-color-pink-img img-fluid avatar avatar-50 avatar-rounded\">
                    ";
        // line 693
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 693, $this->source); })()), "user", [], "any", false, false, false, 693)) {
            // line 694
            yield "                        <div class=\"caption ms-3 d-none d-md-block\">
                            <h6 class=\"mb-0 caption-title\">";
            // line 695
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 695, $this->source); })()), "user", [], "any", false, false, false, 695), "nom", [], "any", false, false, false, 695), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 695, $this->source); })()), "user", [], "any", false, false, false, 695), "prenom", [], "any", false, false, false, 695), "html", null, true);
            yield "</h6>
                            <p class=\"mb-0 caption-sub-title\"> Administrator</p>
                        </div>
                    ";
        } else {
            // line 699
            yield "                        <div class=\"caption ms-3 d-none d-md-block\">
                            <h6 class=\"mb-0 caption-title\">Guest</h6>
                            <p class=\"mb-0 caption-sub-title\"> Please log in</p>
                        </div>
                    ";
        }
        // line 704
        yield "                  </a>
                  <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"navbarDropdown\">
                    <li><a class=\"dropdown-item\" href=\"\">Profile</a></li>
                    <li><a class=\"dropdown-item\" href=\"";
        // line 707
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">Aller au Front-Office</a></li>
                    <li><hr class=\"dropdown-divider\"></li>
                    <li><a class=\"dropdown-item\" href=\"";
        // line 709
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">Logout</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>         


         ";
        // line 718
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 724
        yield "










  ";
        // line 735
        yield from $this->unwrap()->yieldBlock('js', $context, $blocks);
        // line 768
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
    public function block_titleback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titleback"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titleback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheetsback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheetsback"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheetsback"));

        // line 9
        yield "      <!-- Favicon -->
      <link rel=\"shortcut icon\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/images/greenbridge.png.png"), "html", null, true);
        yield "\">
      
      <!-- Library / Plugin Css Build -->
      <link rel=\"stylesheet\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/css/core/libs.min.css"), "html", null, true);
        yield "\">
      
      <!-- Aos Animation Css -->
      <link rel=\"stylesheet\" href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/vendor/aos/dist/aos.css"), "html", null, true);
        yield "\">
      
      <!-- Hope Ui Design System Css -->
      <link rel=\"stylesheet\" href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/css/hope-ui.min.css?v=4.0.0"), "html", null, true);
        yield "\">
      
      <!-- Custom Css -->
      <link rel=\"stylesheet\" href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/css/custom.min.css?v=4.0.0"), "html", null, true);
        yield "\">
      
      <!-- Dark Css -->
      <link rel=\"stylesheet\" href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/css/dark.min.css"), "html", null, true);
        yield "\">
      
      <!-- Customizer Css -->
      <link rel=\"stylesheet\" href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/css/customizer.min.css"), "html", null, true);
        yield "\">
      
      <!-- RTL Css -->
      <link rel=\"stylesheet\" href=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/css/rtl.min.css"), "html", null, true);
        yield "\">
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 718
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

        // line 719
        yield "

        

         ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 735
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

        // line 736
        yield "    <!-- Library Bundle Script -->
    <script src=\"";
        // line 737
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/js/core/libs.min.js"), "html", null, true);
        yield "\"></script>
    
    <!-- External Library Bundle Script -->
    <script src=\"";
        // line 740
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/js/core/external.min.js"), "html", null, true);
        yield "\"></script>
    
    <!-- Widgetchart Script -->
    <script src=\"";
        // line 743
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/js/charts/widgetcharts.js"), "html", null, true);
        yield "\"></script>
    
    <!-- mapchart Script -->
    <script src=\"";
        // line 746
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/js/charts/vectore-chart.j"), "html", null, true);
        yield "s\"></script>
    <script src=\"";
        // line 747
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/js/charts/dashboard.js"), "html", null, true);
        yield "\" ></script>
    
    <!-- fslightbox Script -->
    <script src=\"";
        // line 750
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/js/plugins/fslightbox.js"), "html", null, true);
        yield "\"></script>
    
    <!-- Settings Script -->
    <script src=\"";
        // line 753
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/js/plugins/setting.js"), "html", null, true);
        yield "\"></script>
    
    <!-- Slider-tab Script -->
    <script src=\"";
        // line 756
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/js/plugins/slider-tabs.js"), "html", null, true);
        yield "\"></script>
    
    <!-- Form Wizard Script -->
    <script src=\"";
        // line 759
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/js/plugins/form-wizard.js"), "html", null, true);
        yield "\"></script>
    
    <!-- AOS Animation Plugin-->
    <script src=\"";
        // line 762
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/vendor/aos/dist/aos.js"), "html", null, true);
        yield "\"></script>
    
    <!-- App Script -->
    <script src=\"";
        // line 765
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsback/js/hope-ui.js"), "html", null, true);
        yield "\" defer></script>
    
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
        return "baseback.html.twig";
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
        return array (  1110 => 765,  1104 => 762,  1098 => 759,  1092 => 756,  1086 => 753,  1080 => 750,  1074 => 747,  1070 => 746,  1064 => 743,  1058 => 740,  1052 => 737,  1049 => 736,  1036 => 735,  1021 => 719,  1008 => 718,  995 => 31,  989 => 28,  983 => 25,  977 => 22,  971 => 19,  965 => 16,  959 => 13,  953 => 10,  950 => 9,  937 => 8,  915 => 7,  902 => 768,  900 => 735,  887 => 724,  885 => 718,  873 => 709,  868 => 707,  863 => 704,  856 => 699,  847 => 695,  844 => 694,  842 => 693,  838 => 692,  834 => 691,  830 => 690,  826 => 689,  822 => 688,  818 => 687,  801 => 673,  787 => 662,  773 => 651,  759 => 640,  745 => 629,  709 => 596,  694 => 584,  678 => 571,  662 => 558,  635 => 534,  631 => 533,  627 => 532,  623 => 531,  619 => 530,  609 => 523,  567 => 484,  532 => 452,  517 => 440,  483 => 409,  468 => 397,  431 => 363,  395 => 330,  359 => 297,  343 => 284,  310 => 254,  294 => 241,  258 => 208,  242 => 195,  208 => 164,  192 => 151,  147 => 109,  114 => 79,  66 => 33,  64 => 8,  60 => 7,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
<!doctype html>
<html lang=\"en\" dir=\"ltr\">
  <head>
    <meta charset=\"utf-8\">
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
      <title>{% block titleback %}{% endblock %}</title>
      {% block stylesheetsback %}
      <!-- Favicon -->
      <link rel=\"shortcut icon\" href=\"{{asset('assetsback/images/greenbridge.png.png')}}\">
      
      <!-- Library / Plugin Css Build -->
      <link rel=\"stylesheet\" href=\"{{asset('assetsback/css/core/libs.min.css')}}\">
      
      <!-- Aos Animation Css -->
      <link rel=\"stylesheet\" href=\"{{asset('assetsback/vendor/aos/dist/aos.css')}}\">
      
      <!-- Hope Ui Design System Css -->
      <link rel=\"stylesheet\" href=\"{{asset('assetsback/css/hope-ui.min.css?v=4.0.0')}}\">
      
      <!-- Custom Css -->
      <link rel=\"stylesheet\" href=\"{{asset('assetsback/css/custom.min.css?v=4.0.0')}}\">
      
      <!-- Dark Css -->
      <link rel=\"stylesheet\" href=\"{{asset('assetsback/css/dark.min.css')}}\">
      
      <!-- Customizer Css -->
      <link rel=\"stylesheet\" href=\"{{asset('assetsback/css/customizer.min.css')}}\">
      
      <!-- RTL Css -->
      <link rel=\"stylesheet\" href=\"{{asset('assetsback/css/rtl.min.css')}}\">
      {% endblock %}
      <style>
    /* Personnalisation de la couleur des boutons */
    :root {
      --bs-primary: #28a745; /* Vert */
      --bs-primary-shade-20: #218838; /* Vert plus foncé */
      --bs-primary-rgb: 40, 167, 69; /* RGB du vert */
      --bs-primary-tint-20: #35d074; /* Vert clair */
    }

    .btn.btn-primary {
      color: var(--bs-white);
      background-color: var(--bs-primary);
      border-color: var(--bs-primary);
    }

    .btn.btn-primary:hover {
      color: var(--bs-white);
      background-color: var(--bs-primary-shade-20);
      border-color: var(--bs-primary-shade-20);
    }

    .btn.btn-primary:focus {
      color: var(--bs-white);
      background-color: var(--bs-primary-shade-20);
      border-color: var(--bs-primary-shade-20);
    }

    .btn.btn-primary:active, .btn.btn-primary.active {
      color: var(--bs-white);
      background-color: var(--bs-primary-shade-20);
      border-color: var(--bs-primary-shade-20);
    }
  </style>
  </head>
  <body class=\"  \">
  
   
    <!-- loader END -->
    
    <aside class=\"sidebar sidebar-default sidebar-white sidebar-base navs-rounded-all \">
        <div class=\"sidebar-header d-flex align-items-center justify-content-start\">
            <a href=\"../dashboard/index.html\" class=\"navbar-brand\">
                
                <!--Logo start-->
                
            <div class=\"logo-mini\">
           <img src=\"{{asset('assetsback/images/greenbridge.png.png')}}\" alt=\"Logo\" class=\"logo-img\" width=\"45\" height=\"50\">
              </div>

                <!--logo End-->
                
                
                
                
                <h4 class=\"logo-title\"> GreenBridge </h4>
            </a>
            <div class=\"sidebar-toggle\" data-toggle=\"sidebar\" data-active=\"true\">
                <i class=\"icon\">
                    <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path d=\"M4.25 12.2744L19.25 12.2744\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"></path>
                        <path d=\"M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976\" stroke=\"currentColor\" stroke-width=\"1.5\" stroke-linecap=\"round\" stroke-linejoin=\"round\"></path>
                    </svg>
                </i>
            </div>
        </div>
        <div class=\"sidebar-body pt-0 data-scrollbar\">
            <div class=\"sidebar-list\">
                <!-- Sidebar Menu Start -->
                <ul class=\"navbar-nav iq-main-menu\" id=\"sidebar-menu\">
                    <li class=\"nav-item static-item\">
                        <a class=\"nav-link static-item disabled\" href=\"#\" tabindex=\"-1\">
                            <span class=\"default-icon\">Home</span>
                            <span class=\"mini-icon\">-</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link active d-flex align-items-center\" aria-current=\"page\" href=\"{{ path('app_dashboard') }}\">
                            <span class=\"me-2\">Dashboard</span> <!-- \"me-2\" ajoute un espace entre le texte et l'icône -->
                            <i class=\"icon\">
                                <svg width=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" class=\"icon-20\">
                                    <path opacity=\"0.4\" d=\"M16.0756 2H19.4616C20.8639 2 22.0001 3.14585 22.0001 4.55996V7.97452C22.0001 9.38864 20.8639 10.5345 19.4616 10.5345H16.0756C14.6734 10.5345 13.5371 9.38864 13.5371 7.97452V4.55996C13.5371 3.14585 14.6734 2 16.0756 2Z\" fill=\"currentColor\"></path>
                                    <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z\" fill=\"currentColor\"></path>
                                </svg>
                            </i>
                        </a>
                    </li>
           
                    
                    <li><hr class=\"hr-horizontal\"></li>
                    <li class=\"nav-item static-item\">
                        <a class=\"nav-link static-item disabled\" href=\"#\" tabindex=\"-1\">
                            <span class=\"default-icon\">Pages</span>
                            <span class=\"mini-icon\">-</span>
                        </a>
                    </li>
                    
          
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#sidebar-user\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebar-user\">
                            <i class=\"icon\">
                                <svg class=\"icon-20\" width=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path d=\"M11.9488 14.54C8.49884 14.54 5.58789 15.1038 5.58789 17.2795C5.58789 19.4562 8.51765 20.0001 11.9488 20.0001C15.3988 20.0001 18.3098 19.4364 18.3098 17.2606C18.3098 15.084 15.38 14.54 11.9488 14.54Z\" fill=\"currentColor\"></path>
                                    <path opacity=\"0.4\" d=\"M11.949 12.467C14.2851 12.467 16.1583 10.5831 16.1583 8.23351C16.1583 5.88306 14.2851 4 11.949 4C9.61293 4 7.73975 5.88306 7.73975 8.23351C7.73975 10.5831 9.61293 12.467 11.949 12.467Z\" fill=\"currentColor\"></path>
                                    <path opacity=\"0.4\" d=\"M21.0881 9.21923C21.6925 6.84176 19.9205 4.70654 17.664 4.70654C17.4187 4.70654 17.1841 4.73356 16.9549 4.77949C16.9244 4.78669 16.8904 4.802 16.8725 4.82902C16.8519 4.86324 16.8671 4.90917 16.8895 4.93889C17.5673 5.89528 17.9568 7.0597 17.9568 8.30967C17.9568 9.50741 17.5996 10.6241 16.9728 11.5508C16.9083 11.6462 16.9656 11.775 17.0793 11.7948C17.2369 11.8227 17.3981 11.8371 17.5629 11.8416C19.2059 11.8849 20.6807 10.8213 21.0881 9.21923Z\" fill=\"currentColor\"></path>
                                    <path d=\"M22.8094 14.817C22.5086 14.1722 21.7824 13.73 20.6783 13.513C20.1572 13.3851 18.747 13.205 17.4352 13.2293C17.4155 13.232 17.4048 13.2455 17.403 13.2545C17.4003 13.2671 17.4057 13.2887 17.4316 13.3022C18.0378 13.6039 20.3811 14.916 20.0865 17.6834C20.074 17.8032 20.1698 17.9068 20.2888 17.8888C20.8655 17.8059 22.3492 17.4853 22.8094 16.4866C23.0637 15.9589 23.0637 15.3456 22.8094 14.817Z\" fill=\"currentColor\"></path>
                                    <path opacity=\"0.4\" d=\"M7.04459 4.77973C6.81626 4.7329 6.58077 4.70679 6.33543 4.70679C4.07901 4.70679 2.30701 6.84201 2.9123 9.21947C3.31882 10.8216 4.79355 11.8851 6.43661 11.8419C6.60136 11.8374 6.76343 11.8221 6.92013 11.7951C7.03384 11.7753 7.09115 11.6465 7.02668 11.551C6.3999 10.6234 6.04263 9.50765 6.04263 8.30991C6.04263 7.05904 6.43303 5.89462 7.11085 4.93913C7.13234 4.90941 7.14845 4.86348 7.12696 4.82926C7.10906 4.80135 7.07593 4.78694 7.04459 4.77973Z\" fill=\"currentColor\"></path>
                                    <path d=\"M3.32156 13.5127C2.21752 13.7297 1.49225 14.1719 1.19139 14.8167C0.936203 15.3453 0.936203 15.9586 1.19139 16.4872C1.65163 17.4851 3.13531 17.8066 3.71195 17.8885C3.83104 17.9065 3.92595 17.8038 3.91342 17.6832C3.61883 14.9167 5.9621 13.6046 6.56918 13.3029C6.59425 13.2885 6.59962 13.2677 6.59694 13.2542C6.59515 13.2452 6.5853 13.2317 6.5656 13.2299C5.25294 13.2047 3.84358 13.3848 3.32156 13.5127Z\" fill=\"currentColor\"></path>
                                </svg>
                            </i>
                            <span class=\"item-name\">Users</span>
                            <i class=\"right-icon\">
                                <svg class=\"icon-18\" xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5l7 7-7 7\" />
                                </svg>
                            </i>
                        </a>
                        <ul class=\"sub-nav collapse\" id=\"sidebar-user\" data-bs-parent=\"#sidebar-menu\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link \" href=\"{{path('app_user_new')}}\">
                                    <i class=\"icon\">
                                        <svg class=\"icon-10\" xmlns=\"http://www.w3.org/2000/svg\" width=\"10\" viewBox=\"0 0 24 24\" fill=\"currentColor\">
                                            <g>
                                            <circle cx=\"12\" cy=\"12\" r=\"8\" fill=\"currentColor\"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <i class=\"sidenav-mini-icon\"> A </i>
                                    <span class=\"item-name\">Add User</span>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link \" href=\"{{path('app_user_index')}}\">
                                    <i class=\"icon\">
                                        <svg class=\"icon-10\" xmlns=\"http://www.w3.org/2000/svg\" width=\"10\" viewBox=\"0 0 24 24\" fill=\"currentColor\">
                                            <g>
                                            <circle cx=\"12\" cy=\"12\" r=\"8\" fill=\"currentColor\"></circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <i class=\"sidenav-mini-icon\"> U </i>
                                    <span class=\"item-name\">User List</span>
                                </a>
                            </li>
                        </ul>
                    </li>
    <li class=\"nav-item\">
    <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#sidebar-event\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebar-event\">
        <i class=\"icon\">
            <svg class=\"icon-20\" width=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M9 2l1 4m5-4l-1 4M2 9l4 1m16 0l-4 1M4 17l3-3m13 0l-3-3m-9 9l1-4m5 4l-1-4\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"/>
                <circle cx=\"12\" cy=\"12\" r=\"5\" stroke=\"currentColor\" stroke-width=\"2\"/>
            </svg>
        </i>
        <span class=\"item-name\">Conseil</span>
        <i class=\"right-icon\">
            <svg class=\"icon-18\" xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5l7 7-7 7\" />
            </svg>
        </i>
    </a>
    <ul class=\"sub-nav collapse\" id=\"sidebar-event\" data-bs-parent=\"#sidebar-menu\">
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"{{path('app_conseil_index')}}\">
                <i class=\"icon\">
                    <svg class=\"icon-10\" xmlns=\"http://www.w3.org/2000/svg\" width=\"10\" viewBox=\"0 0 24 24\" fill=\"currentColor\">
                        <g>
                            <circle cx=\"12\" cy=\"12\" r=\"8\" fill=\"currentColor\"></circle>
                        </g>
                    </svg>
                </i>
                <i class=\"sidenav-mini-icon\"> L </i>
                <span class=\"item-name\">Liste des Conseils</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"{{path('app_conseil_new')}}\">
                <i class=\"icon\">
                    <svg class=\"icon-10\" xmlns=\"http://www.w3.org/2000/svg\" width=\"10\" viewBox=\"0 0 24 24\" fill=\"currentColor\">
                        <g>
                            <circle cx=\"12\" cy=\"12\" r=\"8\" fill=\"currentColor\"></circle>
                        </g>
                    </svg>
                </i>
                <i class=\"sidenav-mini-icon\"> A </i>
                <span class=\"item-name\">Ajouter un Conseil</span>
            </a>
        </li>
        
       </ul>
      </li>
      <li class=\"nav-item\">
      <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#sidebar-terrain\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebar-terrain\">
        <i class=\"icon\">
            <svg class=\"icon-20\" width=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M5 16h14M3 12h18M4 8h16M2 4h20M6 16l-1 4h14l-1-4\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"/>
                <circle cx=\"8\" cy=\"20\" r=\"2\" stroke=\"currentColor\" stroke-width=\"2\"/>
                <circle cx=\"16\" cy=\"20\" r=\"2\" stroke=\"currentColor\" stroke-width=\"2\"/>
            </svg>
        </i>
        <span class=\"item-name\">Terrain </span>
        <i class=\"right-icon\">
            <svg class=\"icon-18\" xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5l7 7-7 7\" />
            </svg>
        </i>
    </a>
    <ul class=\"sub-nav collapse\" id=\"sidebar-terrain\" data-bs-parent=\"#sidebar-menu\">
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"{{ path('terrain_list') }}\">
                <i class=\"icon\">
                    <svg class=\"icon-10\" xmlns=\"http://www.w3.org/2000/svg\" width=\"10\" viewBox=\"0 0 24 24\" fill=\"currentColor\">
                        <g>
                            <circle cx=\"12\" cy=\"12\" r=\"8\" fill=\"currentColor\"></circle>
                        </g>
                    </svg>
                </i>
                <i class=\"sidenav-mini-icon\"> L </i>
                <span class=\"item-name\">Liste des Terrains</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"{{ path('ajouterT') }}\">
                <i class=\"icon\">
                    <svg class=\"icon-10\" xmlns=\"http://www.w3.org/2000/svg\" width=\"10\" viewBox=\"0 0 24 24\" fill=\"currentColor\">
                        <g>
                            <circle cx=\"12\" cy=\"12\" r=\"8\" fill=\"currentColor\"></circle>
                        </g>
                    </svg>
                </i>
                <i class=\"sidenav-mini-icon\"> A </i>
                <span class=\"item-name\">Ajouter un Terrain</span>
            </a>
        </li>
    </ul>
     </li>
     <li class=\"nav-item\">
    <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#sidebar-interventions\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebar-interventions\">
        <i class=\"icon\">
            <svg class=\"icon-20\" width=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M22 12h-4l-2 2v2l2 2h4M2 12h4l2 2v2l-2 2H2M12 2v4l2 2h2l2-2V2M12 22v-4l2-2h2l2 2v4M6 6l12 12\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"/>
            </svg>
        </i>
        <span class=\"item-name\">Workshop</span>
        <i class=\"right-icon\">
            <svg class=\"icon-18\" xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5l7 7-7 7\" />
            </svg>
        </i>
    </a>
    <ul class=\"sub-nav collapse\" id=\"sidebar-interventions\" data-bs-parent=\"#sidebar-menu\">
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"{{ path('app_workshop_index') }}\">
                <i class=\"icon\">
                    <svg class=\"icon-10\" xmlns=\"http://www.w3.org/2000/svg\" width=\"10\" viewBox=\"0 0 24 24\" fill=\"currentColor\">
                        <g>
                            <circle cx=\"12\" cy=\"12\" r=\"8\" fill=\"currentColor\"></circle>
                        </g>
                    </svg>
                </i>
                <i class=\"sidenav-mini-icon\"> L </i>
                <span class=\"item-name\">Liste des Workshops</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"{{ path('app_workshop_index') }}\">
                <i class=\"icon\">
                    <svg class=\"icon-10\" xmlns=\"http://www.w3.org/2000/svg\" width=\"10\" viewBox=\"0 0 24 24\" fill=\"currentColor\">
                        <g>
                            <circle cx=\"12\" cy=\"12\" r=\"8\" fill=\"currentColor\"></circle>
                        </g>
                    </svg>
                </i>
                <i class=\"sidenav-mini-icon\"> A </i>
                <span class=\"item-name\">Ajouter un Workshop</span>
            </a>
        </li>
       </ul>
       </li>


             <li class=\"nav-item\">
    <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#sidebar-reservation\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebar-reservation\">
        <i class=\"icon\">
            <svg class=\"icon-20\" width=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M3 8h18M3 12h18M3 16h18M5 4h2M17 4h2\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"/>
                <rect x=\"3\" y=\"6\" width=\"18\" height=\"14\" rx=\"2\" stroke=\"currentColor\" stroke-width=\"2\"/>
            </svg>
        </i>
        <span class=\"item-name\">Réservations</span>
        <i class=\"right-icon\">
            <svg class=\"icon-18\" xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5l7 7-7 7\" />
            </svg>
        </i>
    </a>
    <ul class=\"sub-nav collapse\" id=\"sidebar-reservation\" data-bs-parent=\"#sidebar-menu\">
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"{{ path('app_reservation_index') }}\">
                <i class=\"icon\">
                    <svg class=\"icon-10\" xmlns=\"http://www.w3.org/2000/svg\" width=\"10\" viewBox=\"0 0 24 24\" fill=\"currentColor\">
                        <g>
                            <circle cx=\"12\" cy=\"12\" r=\"8\" fill=\"currentColor\"></circle>
                        </g>
                    </svg>
                </i>
                <i class=\"sidenav-mini-icon\"> L </i>
                <span class=\"item-name\">Liste des Réservations</span>
            </a>
        </li>

    </ul>
</li>

    <li class=\"nav-item\">
    <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#sidebar-posts\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebar-posts\">
        <i class=\"icon\">
            <svg class=\"icon-20\" width=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M3 4h18v16H3z\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
                <path d=\"M7 8h10M7 12h5\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"/>
            </svg>
        </i>
        <span class=\"item-name\">Blog</span>
        <i class=\"right-icon\">
            <svg class=\"icon-18\" xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5l7 7-7 7\" />
            </svg>
        </i>
    </a>
    <ul class=\"sub-nav collapse\" id=\"sidebar-posts\" data-bs-parent=\"#sidebar-menu\">
        <li class=\"nav-item\">
            <a class=\"nav-link \" href=\"{{path('app_articleback_index')}}\">
                <i class=\"icon\">
                    <svg class=\"icon-10\" xmlns=\"http://www.w3.org/2000/svg\" width=\"10\" viewBox=\"0 0 24 24\" fill=\"currentColor\">
                        <circle cx=\"12\" cy=\"12\" r=\"8\" fill=\"currentColor\"></circle>
                    </svg>
                </i>
                <i class=\"sidenav-mini-icon\"> L </i>
                <span class=\"item-name\">Blog</span>
            </a>
        </li>
      
    </ul>
    </li>
    
<li class=\"nav-item\">
    <!-- Menu pour gérer les matériels (outils, équipements, etc.) -->
    <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#sidebar-materials\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebar-materials\">
        <i class=\"icon\">
            <!-- Icône représentant une boîte à outils -->
            <svg class=\"icon-20\" width=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M7 7h10v10H7z\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"/>
                <path d=\"M2 12h4M18 12h4M12 2v4M12 18v4\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"/>
            </svg>
        </i>
        <span class=\"item-name\">Matériels</span>
        <i class=\"right-icon\">
            <svg class=\"icon-18\" xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5l7 7-7 7\" />
            </svg>
        </i>
    </a>
    <ul class=\"sub-nav collapse\" id=\"sidebar-materials\" data-bs-parent=\"#sidebar-menu\">
        <!-- Liste des matériels -->
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{path('app_materiel_index')}}\">
                <i class=\"icon\">
                    <svg class=\"icon-10\" xmlns=\"http://www.w3.org/2000/svg\" width=\"10\" viewBox=\"0 0 24 24\" fill=\"currentColor\">
                        <circle cx=\"12\" cy=\"12\" r=\"8\" fill=\"currentColor\"></circle>
                    </svg>
                </i>
                <i class=\"sidenav-mini-icon\"> L </i>
                <span class=\"item-name\">Liste des Matériels</span>
            </a>
        </li>
        <!-- Ajouter un matériel -->
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{path('app_materiel_new')}}\">
                <i class=\"icon\">
                    <svg class=\"icon-10\" xmlns=\"http://www.w3.org/2000/svg\" width=\"10\" viewBox=\"0 0 24 24\" fill=\"currentColor\">
                        <circle cx=\"12\" cy=\"12\" r=\"8\" fill=\"currentColor\"></circle>
                    </svg>
                </i>
                <i class=\"sidenav-mini-icon\"> A </i>
                <span class=\"item-name\">Ajouter un Matériel</span>
            </a>
        </li>
    </ul>
</li>
<li class=\"nav-item\">
    <!-- Menu pour gérer l'apprentissage en ligne -->
    <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#sidebar-elearning\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebar-elearning\">
        <i class=\"icon\">
            <!-- Icône différente pour l'e-learning, représentant un livre ouvert ou une étude -->
            <svg class=\"icon-20\" width=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M12 6v12M6 12h12\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
            </svg>
        </i>
        <span class=\"item-name\">E-Learning</span>
        <i class=\"right-icon\">
            <svg class=\"icon-18\" xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5l7 7-7 7\" />
            </svg>
        </i>
    </a>
    <ul class=\"sub-nav collapse\" id=\"sidebar-elearning\" data-bs-parent=\"#sidebar-menu\">
        <!-- Liste des modules e-learning -->
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{path('app_elearning_index')}}\">
                <i class=\"icon\">
                    <svg class=\"icon-10\" xmlns=\"http://www.w3.org/2000/svg\" width=\"10\" viewBox=\"0 0 24 24\" fill=\"currentColor\">
                        <circle cx=\"12\" cy=\"12\" r=\"8\" fill=\"currentColor\"></circle>
                    </svg>
                </i>
                <i class=\"sidenav-mini-icon\"> L </i>
                <span class=\"item-name\">Liste des Modules</span>
            </a>
        </li>
        <!-- Ajouter un module -->
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{path('app_elearning_new')}}\">
                <i class=\"icon\">
                    <svg class=\"icon-10\" xmlns=\"http://www.w3.org/2000/svg\" width=\"10\" viewBox=\"0 0 24 24\" fill=\"currentColor\">
                        <circle cx=\"12\" cy=\"12\" r=\"8\" fill=\"currentColor\"></circle>
                    </svg>
                </i>
                <i class=\"sidenav-mini-icon\"> A </i>
                <span class=\"item-name\">Ajouter un Module</span>
            </a>
        </li>
    </ul>
</li>
<li class=\"nav-item\">
    <!-- Menu pour afficher les consignes et instructions -->
    <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#sidebar-guidelines\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebar-guidelines\">
        <i class=\"icon\">
            <!-- Icône représentant un document (consigne) -->
            <svg class=\"icon-20\" width=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M4 6l8-4 8 4v12l-8 4-8-4V6z\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"/>
                <path d=\"M12 12v4M8 10h8\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\"/>
            </svg>
        </i>
        <span class=\"item-name\">Reclamation</span>
        <i class=\"right-icon\">
            <svg class=\"icon-18\" xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 5l7 7-7 7\" />
            </svg>
        </i>
    </a>
    <ul class=\"sub-nav collapse\" id=\"sidebar-guidelines\" data-bs-parent=\"#sidebar-menu\">
        <!-- Liste des consignes -->
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{path('app_reclamation_index')}}\">
                <i class=\"icon\">
                    <svg class=\"icon-10\" xmlns=\"http://www.w3.org/2000/svg\" width=\"10\" viewBox=\"0 0 24 24\" fill=\"currentColor\">
                        <circle cx=\"12\" cy=\"12\" r=\"8\" fill=\"currentColor\"></circle>
                    </svg>
                </i>
                <i class=\"sidenav-mini-icon\"> L </i>
                <span class=\"item-name\">Liste des Reclamations</span>
            </a>
        </li>
    </ul>
</li>

 

                    
                    

                <!-- Sidebar Menu End -->        </div>
        </div>
        <div class=\"sidebar-footer\"></div>
    </aside>    <main class=\"main-content\">
      <div class=\"position-relative iq-banner\">
        <!--Nav Start-->
        <nav class=\"nav navbar navbar-expand-lg navbar-light iq-navbar\">
          
           
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
              <span class=\"navbar-toggler-icon\">
                  <span class=\"mt-2 navbar-toggler-bar bar1\"></span>
                  <span class=\"navbar-toggler-bar bar2\"></span>
                  <span class=\"navbar-toggler-bar bar3\"></span>
                </span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
              <ul class=\"mb-2 navbar-nav ms-auto align-items-center navbar-list mb-lg-0\">
                
                <li class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"search-toggle nav-link\" id=\"dropdownMenuButton2\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <img src=\"{{asset('assetsback/images/Flag/flag001.png')}}\" class=\"img-fluid rounded-circle\" alt=\"user\" style=\"height: 30px; min-width: 30px; width: 30px;\">
                    <span class=\"bg-primary\"></span>
                    </a>
                    <div class=\"p-0 sub-drop dropdown-menu dropdown-menu-end\" aria-labelledby=\"dropdownMenuButton2\">
                        <div class=\"m-0 border-0 shadow-none card\">
                            <div class=\"p-0 \">
                                <ul class=\"p-0 list-group list-group-flush\">
                                    <li class=\"iq-sub-card list-group-item\"><a class=\"p-0\" href=\"#\"><img src=\"{{asset('assetsback/images/Flag/flag-03.png')}}\" alt=\"img-flaf\" class=\"img-fluid me-2\" style=\"width: 15px;height: 15px;min-width: 15px;\"/>Spanish</a></li>
                                    <li class=\"iq-sub-card list-group-item\"><a class=\"p-0\" href=\"#\"><img src=\"{{asset('assetsback/images/Flag/flag-04.png')}}\" alt=\"img-flaf\" class=\"img-fluid me-2\" style=\"width: 15px;height: 15px;min-width: 15px;\"/>Italian</a></li>
                                    <li class=\"iq-sub-card list-group-item\"><a class=\"p-0\" href=\"#\"><img src=\"{{asset('assetsback/images/Flag/flag-02.png')}}\" alt=\"img-flaf\" class=\"img-fluid me-2\" style=\"width: 15px;height: 15px;min-width: 15px;\"/>French</a></li>
                                    <li class=\"iq-sub-card list-group-item\"><a class=\"p-0\" href=\"#\"><img src=\"{{asset('assetsback/images/Flag/flag-05.png')}}\" alt=\"img-flaf\" class=\"img-fluid me-2\" style=\"width: 15px;height: 15px;min-width: 15px;\"/>German</a></li>
                                    <li class=\"iq-sub-card list-group-item\"><a class=\"p-0\" href=\"#\"><img src=\"{{asset('assetsback/images/Flag/flag-06.png')}}\" alt=\"img-flaf\" class=\"img-fluid me-2\" style=\"width: 15px;height: 15px;min-width: 15px;\"/>Japanese</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class=\"nav-item dropdown\">
                  <a href=\"#\"  class=\"nav-link\" id=\"notification-drop\" data-bs-toggle=\"dropdown\" >
                      <svg class=\"icon-24\" width=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path d=\"M19.7695 11.6453C19.039 10.7923 18.7071 10.0531 18.7071 8.79716V8.37013C18.7071 6.73354 18.3304 5.67907 17.5115 4.62459C16.2493 2.98699 14.1244 2 12.0442 2H11.9558C9.91935 2 7.86106 2.94167 6.577 4.5128C5.71333 5.58842 5.29293 6.68822 5.29293 8.37013V8.79716C5.29293 10.0531 4.98284 10.7923 4.23049 11.6453C3.67691 12.2738 3.5 13.0815 3.5 13.9557C3.5 14.8309 3.78723 15.6598 4.36367 16.3336C5.11602 17.1413 6.17846 17.6569 7.26375 17.7466C8.83505 17.9258 10.4063 17.9933 12.0005 17.9933C13.5937 17.9933 15.165 17.8805 16.7372 17.7466C17.8215 17.6569 18.884 17.1413 19.6363 16.3336C20.2118 15.6598 20.5 14.8309 20.5 13.9557C20.5 13.0815 20.3231 12.2738 19.7695 11.6453Z\" fill=\"currentColor\"></path>
                        <path opacity=\"0.4\" d=\"M14.0088 19.2283C13.5088 19.1215 10.4627 19.1215 9.96275 19.2283C9.53539 19.327 9.07324 19.5566 9.07324 20.0602C9.09809 20.5406 9.37935 20.9646 9.76895 21.2335L9.76795 21.2345C10.2718 21.6273 10.8632 21.877 11.4824 21.9667C11.8123 22.012 12.1482 22.01 12.4901 21.9667C13.1083 21.877 13.6997 21.6273 14.2036 21.2345L14.2026 21.2335C14.5922 20.9646 14.8734 20.5406 14.8983 20.0602C14.8983 19.5566 14.4361 19.327 14.0088 19.2283Z\" fill=\"currentColor\"></path>
                      </svg>
                      <span class=\"bg-danger dots\"></span>
                  </a>
                  <div class=\"p-0 sub-drop dropdown-menu dropdown-menu-end\" aria-labelledby=\"notification-drop\">
                      <div class=\"m-0 shadow-none card\">
                        <div class=\"py-3 card-header d-flex justify-content-between bg-primary\">
                            <div class=\"header-title\">
                              <h5 class=\"mb-0 text-white\">All Notifications</h5>
                            </div>
                        </div>
                        <div class=\"p-0 card-body\">
                            <a href=\"#\" class=\"iq-sub-card\">
                              <div class=\"d-flex align-items-center\">
                                  <img class=\"p-1 avatar-40 rounded-pill bg-soft-primary\" src=\"{{asset('assetsback/images/shapes/01.png')}}\" alt=\"\">
                                  <div class=\"ms-3 w-100\">
                                    <h6 class=\"mb-0 \">Emma Watson Bni</h6>
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <p class=\"mb-0\">95 MB</p>
                                        <small class=\"float-end font-size-12\">Just Now</small>
                                    </div>
                                  </div>
                              </div>
                            </a>
                            <a href=\"#\" class=\"iq-sub-card\">
                              <div class=\"d-flex align-items-center\">
                                  <div class=\"\">
                                    <img class=\"p-1 avatar-40 rounded-pill bg-soft-primary\" src=\"{{asset('assetsback/images/shapes/02.png')}}\" alt=\"\">
                                  </div>
                                  <div class=\"ms-3 w-100\">
                                    <h6 class=\"mb-0 \">New customer is join</h6>
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <p class=\"mb-0\">Cyst Bni</p>
                                        <small class=\"float-end font-size-12\">5 days ago</small>
                                    </div>
                                  </div>
                              </div>
                            </a>
                            <a href=\"#\" class=\"iq-sub-card\">
                              <div class=\"d-flex align-items-center\">
                                  <img class=\"p-1 avatar-40 rounded-pill bg-soft-primary\" src=\"{{asset('assetsback/images/shapes/03.png')}}\" alt=\"\">
                                  <div class=\"ms-3 w-100\">
                                    <h6 class=\"mb-0 \">Two customer is left</h6>
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <p class=\"mb-0\">Cyst Bni</p>
                                        <small class=\"float-end font-size-12\">2 days ago</small>
                                    </div>
                                  </div>
                              </div>
                            </a>
                            <a href=\"#\" class=\"iq-sub-card\">
                              <div class=\"d-flex align-items-center\">
                                  <img class=\"p-1 avatar-40 rounded-pill bg-soft-primary\" src=\"{{asset('assetsback/images/shapes/04.png')}}\" alt=\"\">
                                  <div class=\"w-100 ms-3\">
                                    <h6 class=\"mb-0 \">New Mail from Fenny</h6>
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <p class=\"mb-0\">Cyst Bni</p>
                                        <small class=\"float-end font-size-12\">3 days ago</small>
                                    </div>
                                  </div>
                              </div>
                            </a>
                        </div>
                      </div>
                  </div>
                </li>
                <li class=\"nav-item dropdown\">
                  <a href=\"#\" class=\"nav-link\" id=\"mail-drop\" data-bs-toggle=\"dropdown\"  aria-haspopup=\"true\" aria-expanded=\"false\">
                    <svg class=\"icon-24\" width=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                      <path opacity=\"0.4\" d=\"M22 15.94C22 18.73 19.76 20.99 16.97 21H16.96H7.05C4.27 21 2 18.75 2 15.96V15.95C2 15.95 2.006 11.524 2.014 9.298C2.015 8.88 2.495 8.646 2.822 8.906C5.198 10.791 9.447 14.228 9.5 14.273C10.21 14.842 11.11 15.163 12.03 15.163C12.95 15.163 13.85 14.842 14.56 14.262C14.613 14.227 18.767 10.893 21.179 8.977C21.507 8.716 21.989 8.95 21.99 9.367C22 11.576 22 15.94 22 15.94Z\" fill=\"currentColor\"></path>
                      <path d=\"M21.4759 5.67351C20.6099 4.04151 18.9059 2.99951 17.0299 2.99951H7.04988C5.17388 2.99951 3.46988 4.04151 2.60388 5.67351C2.40988 6.03851 2.50188 6.49351 2.82488 6.75151L10.2499 12.6905C10.7699 13.1105 11.3999 13.3195 12.0299 13.3195C12.0339 13.3195 12.0369 13.3195 12.0399 13.3195C12.0429 13.3195 12.0469 13.3195 12.0499 13.3195C12.6799 13.3195 13.3099 13.1105 13.8299 12.6905L21.2549 6.75151C21.5779 6.49351 21.6699 6.03851 21.4759 5.67351Z\" fill=\"currentColor\"></path>
                    </svg>
                    <span class=\"bg-primary count-mail\"></span>
                  </a>
                  <div class=\"p-0 sub-drop dropdown-menu dropdown-menu-end\" aria-labelledby=\"mail-drop\">
                      <div class=\"m-0 shadow-none card\">
                        <div class=\"py-3 card-header d-flex justify-content-between bg-primary\">
                            <div class=\"header-title\">
                              <h5 class=\"mb-0 text-white\">All Message</h5>
                            </div>
                        </div>
                        <div class=\"p-0 card-body \">
                            <a href=\"#\" class=\"iq-sub-card\">
                              <div class=\"d-flex align-items-center\">
                                  <div class=\"\">
                                    <img class=\"p-1 avatar-40 rounded-pill bg-soft-primary\" src=\"{{asset('assetsback/images/shapes/01.png')}}\" alt=\"\">
                                  </div>
                                  <div class=\"ms-3\">
                                    <h6 class=\"mb-0 \">Bni Emma Watson</h6>
                                    <small class=\"float-start font-size-12\">13 Jun</small>
                                  </div>
                              </div>
                            </a>
                            <a href=\"#\" class=\"iq-sub-card\">
                              <div class=\"d-flex align-items-center\">
                                  <div class=\"\">
                                    <img class=\"p-1 avatar-40 rounded-pill bg-soft-primary\" src=\"{{asset('assetsback/images/shapes/02.png')}}\" alt=\"\">
                                  </div>
                                  <div class=\"ms-3\">
                                    <h6 class=\"mb-0 \">Lorem Ipsum Watson</h6>
                                    <small class=\"float-start font-size-12\">20 Apr</small>
                                  </div>
                              </div>
                            </a>
                            <a href=\"#\" class=\"iq-sub-card\">
                              <div class=\"d-flex align-items-center\">
                                  <div class=\"\">
                                    <img class=\"p-1 avatar-40 rounded-pill bg-soft-primary\" src=\"{{asset('assetsback/images/shapes/03.png')}}\" alt=\"\">
                                  </div>
                                  <div class=\"ms-3\">
                                    <h6 class=\"mb-0 \">Why do we use it?</h6>
                                    <small class=\"float-start font-size-12\">30 Jun</small>
                                  </div>
                              </div>
                            </a>
                            <a href=\"#\" class=\"iq-sub-card\">
                              <div class=\"d-flex align-items-center\">
                                  <div class=\"\">
                                    <img class=\"p-1 avatar-40 rounded-pill bg-soft-primary\" src=\"{{asset('assetsback/images/shapes/04.png')}}\" alt=\"\">
                                  </div>
                                  <div class=\"ms-3\">
                                    <h6 class=\"mb-0 \">Variations Passages</h6>
                                    <small class=\"float-start font-size-12\">12 Sep</small>
                                  </div>
                              </div>
                            </a>
                            <a href=\"#\" class=\"iq-sub-card\">
                              <div class=\"d-flex align-items-center\">
                                  <div class=\"\">
                                    <img class=\"p-1 avatar-40 rounded-pill bg-soft-primary\" src=\"{{asset('assetsback/images/shapes/05.png')}}\" alt=\"\">
                                  </div>
                                  <div class=\"ms-3\">
                                    <h6 class=\"mb-0 \">Lorem Ipsum generators</h6>
                                    <small class=\"float-start font-size-12\">5 Dec</small>
                                  </div>
                              </div>
                            </a>
                        </div>
                      </div>
                  </div>
                </li>
                <li class=\"nav-item dropdown\">
                  <a class=\"py-0 nav-link d-flex align-items-center\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                    <img src=\"{{asset('assetsback/images/avatars/01.png')}}\" alt=\"User-Profile\" class=\"theme-color-default-img img-fluid avatar avatar-50 avatar-rounded\">
                    <img src=\"{{asset('assetsback/images/avatars/avtar_1.png')}}\" alt=\"User-Profile\" class=\"theme-color-purple-img img-fluid avatar avatar-50 avatar-rounded\">
                    <img src=\"{{asset('assetsback/images/avatars/avtar_2.png')}}\" alt=\"User-Profile\" class=\"theme-color-blue-img img-fluid avatar avatar-50 avatar-rounded\">
                    <img src=\"{{asset('assetsback/images/avatars/avtar_4.png')}}\" alt=\"User-Profile\" class=\"theme-color-green-img img-fluid avatar avatar-50 avatar-rounded\">
                    <img src=\"{{asset('assetsback/images/avatars/avtar_5.png')}}\" alt=\"User-Profile\" class=\"theme-color-yellow-img img-fluid avatar avatar-50 avatar-rounded\">
                    <img src=\"{{asset('assetsback/images/avatars/avtar_3.png')}}\" alt=\"User-Profile\" class=\"theme-color-pink-img img-fluid avatar avatar-50 avatar-rounded\">
                    {% if app.user %}
                        <div class=\"caption ms-3 d-none d-md-block\">
                            <h6 class=\"mb-0 caption-title\">{{ app.user.nom }} {{ app.user.prenom }}</h6>
                            <p class=\"mb-0 caption-sub-title\"> Administrator</p>
                        </div>
                    {% else %}
                        <div class=\"caption ms-3 d-none d-md-block\">
                            <h6 class=\"mb-0 caption-title\">Guest</h6>
                            <p class=\"mb-0 caption-sub-title\"> Please log in</p>
                        </div>
                    {% endif %}
                  </a>
                  <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"navbarDropdown\">
                    <li><a class=\"dropdown-item\" href=\"\">Profile</a></li>
                    <li><a class=\"dropdown-item\" href=\"{{ path('home') }}\">Aller au Front-Office</a></li>
                    <li><hr class=\"dropdown-divider\"></li>
                    <li><a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">Logout</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>         


         {% block body %}


        

         {% endblock %}











  {% block js %}
    <!-- Library Bundle Script -->
    <script src=\"{{asset('assetsback/js/core/libs.min.js')}}\"></script>
    
    <!-- External Library Bundle Script -->
    <script src=\"{{asset('assetsback/js/core/external.min.js')}}\"></script>
    
    <!-- Widgetchart Script -->
    <script src=\"{{asset('assetsback/js/charts/widgetcharts.js')}}\"></script>
    
    <!-- mapchart Script -->
    <script src=\"{{asset('assetsback/js/charts/vectore-chart.j')}}s\"></script>
    <script src=\"{{asset('assetsback/js/charts/dashboard.js')}}\" ></script>
    
    <!-- fslightbox Script -->
    <script src=\"{{asset('assetsback/js/plugins/fslightbox.js')}}\"></script>
    
    <!-- Settings Script -->
    <script src=\"{{asset('assetsback/js/plugins/setting.js')}}\"></script>
    
    <!-- Slider-tab Script -->
    <script src=\"{{asset('assetsback/js/plugins/slider-tabs.js')}}\"></script>
    
    <!-- Form Wizard Script -->
    <script src=\"{{asset('assetsback/js/plugins/form-wizard.js')}}\"></script>
    
    <!-- AOS Animation Plugin-->
    <script src=\"{{asset('assetsback/vendor/aos/dist/aos.js')}}\"></script>
    
    <!-- App Script -->
    <script src=\"{{asset('assetsback/js/hope-ui.js')}}\" defer></script>
    
    {% endblock %}

  </body>
</html>", "baseback.html.twig", "C:\\xampp1\\htdocs\\integration_workshop_user1\\templates\\baseback.html.twig");
    }
}
