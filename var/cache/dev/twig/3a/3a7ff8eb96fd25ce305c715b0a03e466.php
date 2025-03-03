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
class __TwigTemplate_3c704dca94fed574aea631a02bca59e5 extends Template
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
        // line 18
        yield from $this->unwrap()->yieldBlock('stylesheet', $context, $blocks);
        // line 26
        yield "
  <style>
    .chat-bubble {
      position: fixed;
      bottom: 120px;
      left: 20px;
      width: 50px;
      height: 50px;
      background-color: rgb(34, 200, 13);
      color: #fff;
      border-radius: 50%;
      text-align: center;
      line-height: 50px;
      cursor: pointer;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
      font-family: Arial, sans-serif;
      z-index: 9999;
    }

    .chat-container {
      position: fixed;
      bottom: 80px;
      left: 20px;
      width: 300px;
      max-height: 400px;
      display: none;
      flex-direction: column;
      border: 1px solid #ccc;
      background: #fafafa;
      border-radius: 5px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
      font-family: Arial, sans-serif;
      z-index: 9999;
    }

    .chat-header {
      background: rgb(7, 63, 0);
      color: #fff;
      padding: 10px;
      font-weight: bold;
      border-radius: 5px 5px 0 0;
    }

    .chat-log {
      flex: 1;
      overflow-y: auto;
      padding: 5px;
    }

    .chat-log .user-message {
      color: blue;
      margin: 3px 0;
    }

    .chat-log .bot-reply {
      color: green;
      margin: 3px 0;
    }

    .chat-input {
      display: flex;
      gap: 5px;
      padding: 5px;
      background: #eee;
      border-radius: 0 0 5px 5px;
    }

    .chat-input input[type=\"text\"] {
      flex: 1;
      padding: 5px;
    }

    .chat-input button {
      padding: 5px 10px;
      background: rgb(51, 255, 0);
      color: #fff;
      border: none;
      cursor: pointer;
      border-radius: 4px;
    }

    .close-chat {
      float: right;
      cursor: pointer;
      margin-right: 10px;
      font-weight: bold;
      font-size: 1.2rem;
    }

    .close-chat:hover {
      color: #ccc;
    }
  </style>
</head>

<body class=\"index-page\">
  <!-- The floating bubble -->
  <div class=\"chat-bubble\" id=\"chatBubble\">Chat</div>

  <!-- The hidden chat container -->
  <div class=\"chat-container\" id=\"chatContainer\">
    <div class=\"chat-header\">
      My ChatBot
      <span class=\"close-chat\" id=\"closeChatBtn\" title=\"Close Chat\">×</span>
    </div>
    <div class=\"chat-log\" id=\"chatLog\"></div>
    <div class=\"chat-input\">
      <input type=\"text\" id=\"userMessage\" placeholder=\"Type your message...\" />
      <button id=\"sendBtn\">Send</button>
    </div>
  </div>

  <header id=\"header\" class=\"header d-flex align-items-center position-relative\">
    <div class=\"container-fluid container-xl position-relative d-flex align-items-center justify-content-between\">
            <a href=\"index.html\" class=\"logo d-flex align-items-center\">
        <img src=\"";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        yield "\" alt=\"GreenBridge\">
      </a>

      <nav id=\"navmenu\" class=\"navmenu\">
        <ul>
          <li><a href=\"";
        // line 146
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\" class=\"active\">Home</a></li>
           <li><a href=\"";
        // line 147
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("terrain_list");
        yield "\">Terrains</a></li>
          <li><a href=\"";
        // line 148
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_workshop_indexf");
        yield "\">Workshop</a></li>
          <li><a href=\"";
        // line 149
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_elearning_front");
        yield "\">E-Learning</a></li>
          <li><a href=\"";
        // line 150
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_index");
        yield "\">Blog</a></li>
          <li><a href=\"";
        // line 151
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_conseil_index_front");
        yield "\">Conseil</a></li>
          <li class=\"dropdown\">
          ";
        // line 153
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 153, $this->source); })()), "user", [], "any", false, false, false, 153)) {
            // line 154
            yield "            <a href=\"#\"><span>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 154, $this->source); })()), "user", [], "any", false, false, false, 154), "nom", [], "any", false, false, false, 154), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 154, $this->source); })()), "user", [], "any", false, false, false, 154), "prenom", [], "any", false, false, false, 154), "html", null, true);
            yield "</span> <i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
          ";
        }
        // line 156
        yield "            <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"navbarDropdown\">
                    ";
        // line 157
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 157, $this->source); })()), "user", [], "any", false, false, false, 157)) {
            // line 158
            yield "                <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_profile", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 159, $this->source); })()), "user", [], "any", false, false, false, 159), "id", [], "any", false, false, false, 159)]), "html", null, true);
            yield "\">
                        Profil
                        </a>
                    </li>
                ";
        }
        // line 164
        yield "                    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 165
            yield "                        <li><a class=\"dropdown-item\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homeback");
            yield "\">Aller au back-Office</a></li>
                    ";
        }
        // line 167
        yield "                    <li><hr class=\"dropdown-divider\"></li>
                    <li><a class=\"dropdown-item\" href=\"";
        // line 168
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">Logout</a></li>
                  </ul>
          </li>
        </ul>
        <i class=\"mobile-nav-toggle d-xl-none bi bi-list\"></i>
      </nav>
        <i class=\"mobile-nav-toggle d-xl-none bi bi-list\"></i>
      </nav>
    </div>
  </header>

  <main class=\"main\">
    ";
        // line 180
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 183
        yield "  </main>

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
  <a href=\"#\" id=\"scroll-top\" class=\"scroll-top d-flex align-items-center justify-content-center\">
    <i class=\"bi bi-arrow-up-short\"></i>
  </a>

  <!-- Preloader -->
  <div id=\"preloader\"></div>

  ";
        // line 271
        yield from $this->unwrap()->yieldBlock('js', $context, $blocks);
        // line 342
        yield "</body>

</html>
";
        
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

    // line 18
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

        // line 19
        yield "    <link href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/main.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 180
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

        // line 181
        yield "    <!-- Your page content goes here -->
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 271
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

        // line 272
        yield "    <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 273
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/php-email-form/validate.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 274
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 275
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 276
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        yield "\"></script>
    <!-- Main JS File -->
    <script src=\"";
        // line 278
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        yield "\"></script>
    <script>
      // DOM elements
      const chatBubble = document.getElementById('chatBubble');
      const chatContainer = document.getElementById('chatContainer');
      const chatLog = document.getElementById('chatLog');
      const userMessageInput = document.getElementById('userMessage');
      const sendBtn = document.getElementById('sendBtn');
      const closeChatBtn = document.getElementById('closeChatBtn');

      // Toggle chat container on bubble click
      chatBubble.addEventListener('click', () => {
        if (chatContainer.style.display === 'none' || chatContainer.style.display === '') {
          chatContainer.style.display = 'flex';
        } else {
          chatContainer.style.display = 'none';
        }
      });

      closeChatBtn.addEventListener('click', () => {
        chatContainer.style.display = 'none';
      });

      // Append a message to the chat log
      function appendMessage(text, className) {
        const msgDiv = document.createElement('div');
        msgDiv.className = className;
        msgDiv.textContent = text;
        chatLog.appendChild(msgDiv);
        chatLog.scrollTop = chatLog.scrollHeight; // auto-scroll
      }

      // Send message on button click or Enter key
      sendBtn.addEventListener('click', sendMessage);
      userMessageInput.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') {
          sendMessage();
        }
      });

      // The main function to send the user’s message via AJAX
      function sendMessage() {
        const userMessage = userMessageInput.value.trim();
        if (!userMessage) return;
        appendMessage(\"You: \" + userMessage, 'user-message');
        userMessageInput.value = '';

        // AJAX request to Symfony controller (example: /chatbot/send)
        fetch('/chatbot/send', {
          method: 'POST',
          headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
          body: new URLSearchParams({ message: userMessage })
        })
        .then(response => response.json())
        .then(data => {
          appendMessage(\"Bot: \" + data.reply, 'bot-reply');
        })
        .catch(error => {
          console.error('Error:', error);
          appendMessage(\"Bot: Sorry, there was an error.\", 'bot-reply');
        });
      }
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
        return array (  520 => 278,  515 => 276,  511 => 275,  507 => 274,  503 => 273,  498 => 272,  485 => 271,  473 => 181,  460 => 180,  447 => 24,  443 => 23,  439 => 22,  435 => 21,  431 => 20,  426 => 19,  413 => 18,  390 => 7,  376 => 342,  374 => 271,  284 => 183,  282 => 180,  267 => 168,  264 => 167,  258 => 165,  255 => 164,  247 => 159,  244 => 158,  242 => 157,  239 => 156,  231 => 154,  229 => 153,  224 => 151,  220 => 150,  216 => 149,  212 => 148,  208 => 147,  204 => 146,  196 => 141,  79 => 26,  77 => 18,  66 => 10,  60 => 7,  52 => 1,);
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
  <link rel=\"shortcut icon\" href=\"{{ asset('assetsback/images/greenbridge.png.png') }}\">

  <!-- Google Fonts -->
  <link href=\"https://fonts.googleapis.com\" rel=\"preconnect\">
  <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\" crossorigin>
  <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;700&display=swap\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  {% block stylesheet %}
    <link href=\"{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/vendor/aos/aos.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/css/main.css') }}\" rel=\"stylesheet\">
  {% endblock %}

  <style>
    .chat-bubble {
      position: fixed;
      bottom: 120px;
      left: 20px;
      width: 50px;
      height: 50px;
      background-color: rgb(34, 200, 13);
      color: #fff;
      border-radius: 50%;
      text-align: center;
      line-height: 50px;
      cursor: pointer;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
      font-family: Arial, sans-serif;
      z-index: 9999;
    }

    .chat-container {
      position: fixed;
      bottom: 80px;
      left: 20px;
      width: 300px;
      max-height: 400px;
      display: none;
      flex-direction: column;
      border: 1px solid #ccc;
      background: #fafafa;
      border-radius: 5px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
      font-family: Arial, sans-serif;
      z-index: 9999;
    }

    .chat-header {
      background: rgb(7, 63, 0);
      color: #fff;
      padding: 10px;
      font-weight: bold;
      border-radius: 5px 5px 0 0;
    }

    .chat-log {
      flex: 1;
      overflow-y: auto;
      padding: 5px;
    }

    .chat-log .user-message {
      color: blue;
      margin: 3px 0;
    }

    .chat-log .bot-reply {
      color: green;
      margin: 3px 0;
    }

    .chat-input {
      display: flex;
      gap: 5px;
      padding: 5px;
      background: #eee;
      border-radius: 0 0 5px 5px;
    }

    .chat-input input[type=\"text\"] {
      flex: 1;
      padding: 5px;
    }

    .chat-input button {
      padding: 5px 10px;
      background: rgb(51, 255, 0);
      color: #fff;
      border: none;
      cursor: pointer;
      border-radius: 4px;
    }

    .close-chat {
      float: right;
      cursor: pointer;
      margin-right: 10px;
      font-weight: bold;
      font-size: 1.2rem;
    }

    .close-chat:hover {
      color: #ccc;
    }
  </style>
</head>

<body class=\"index-page\">
  <!-- The floating bubble -->
  <div class=\"chat-bubble\" id=\"chatBubble\">Chat</div>

  <!-- The hidden chat container -->
  <div class=\"chat-container\" id=\"chatContainer\">
    <div class=\"chat-header\">
      My ChatBot
      <span class=\"close-chat\" id=\"closeChatBtn\" title=\"Close Chat\">×</span>
    </div>
    <div class=\"chat-log\" id=\"chatLog\"></div>
    <div class=\"chat-input\">
      <input type=\"text\" id=\"userMessage\" placeholder=\"Type your message...\" />
      <button id=\"sendBtn\">Send</button>
    </div>
  </div>

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
          <li><a href=\"{{ path('app_article_index') }}\">Blog</a></li>
          <li><a href=\"{{ path('app_conseil_index_front') }}\">Conseil</a></li>
          <li class=\"dropdown\">
          {% if app.user %}
            <a href=\"#\"><span>{{ app.user.nom }} {{ app.user.prenom }}</span> <i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
          {% endif %}
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
        <i class=\"mobile-nav-toggle d-xl-none bi bi-list\"></i>
      </nav>
    </div>
  </header>

  <main class=\"main\">
    {% block body %}
    <!-- Your page content goes here -->
    {% endblock %}
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
  <a href=\"#\" id=\"scroll-top\" class=\"scroll-top d-flex align-items-center justify-content-center\">
    <i class=\"bi bi-arrow-up-short\"></i>
  </a>

  <!-- Preloader -->
  <div id=\"preloader\"></div>

  {% block js %}
    <script src=\"{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/php-email-form/validate.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/aos/aos.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}\"></script>
    <!-- Main JS File -->
    <script src=\"{{ asset('assets/js/main.js') }}\"></script>
    <script>
      // DOM elements
      const chatBubble = document.getElementById('chatBubble');
      const chatContainer = document.getElementById('chatContainer');
      const chatLog = document.getElementById('chatLog');
      const userMessageInput = document.getElementById('userMessage');
      const sendBtn = document.getElementById('sendBtn');
      const closeChatBtn = document.getElementById('closeChatBtn');

      // Toggle chat container on bubble click
      chatBubble.addEventListener('click', () => {
        if (chatContainer.style.display === 'none' || chatContainer.style.display === '') {
          chatContainer.style.display = 'flex';
        } else {
          chatContainer.style.display = 'none';
        }
      });

      closeChatBtn.addEventListener('click', () => {
        chatContainer.style.display = 'none';
      });

      // Append a message to the chat log
      function appendMessage(text, className) {
        const msgDiv = document.createElement('div');
        msgDiv.className = className;
        msgDiv.textContent = text;
        chatLog.appendChild(msgDiv);
        chatLog.scrollTop = chatLog.scrollHeight; // auto-scroll
      }

      // Send message on button click or Enter key
      sendBtn.addEventListener('click', sendMessage);
      userMessageInput.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') {
          sendMessage();
        }
      });

      // The main function to send the user’s message via AJAX
      function sendMessage() {
        const userMessage = userMessageInput.value.trim();
        if (!userMessage) return;
        appendMessage(\"You: \" + userMessage, 'user-message');
        userMessageInput.value = '';

        // AJAX request to Symfony controller (example: /chatbot/send)
        fetch('/chatbot/send', {
          method: 'POST',
          headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
          body: new URLSearchParams({ message: userMessage })
        })
        .then(response => response.json())
        .then(data => {
          appendMessage(\"Bot: \" + data.reply, 'bot-reply');
        })
        .catch(error => {
          console.error('Error:', error);
          appendMessage(\"Bot: Sorry, there was an error.\", 'bot-reply');
        });
      }
    </script>
  {% endblock %}
</body>

</html>
", "base.html.twig", "C:\\xampp1\\htdocs\\integration_workshop_user1\\templates\\base.html.twig");
    }
}
