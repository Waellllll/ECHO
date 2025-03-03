<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/front/article' => [[['_route' => 'app_article_index', '_controller' => 'App\\Controller\\ArticleController::index'], null, ['GET' => 0], null, false, false, null]],
        '/front/new' => [[['_route' => 'app_article_new', '_controller' => 'App\\Controller\\ArticleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/back/article' => [[['_route' => 'app_articleback_index', '_controller' => 'App\\Controller\\ArticleController::indexback'], null, ['GET' => 0], null, false, false, null]],
        '/back/article/new' => [[['_route' => 'app_articleback_new', '_controller' => 'App\\Controller\\ArticleController::newback'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/chatbot/send' => [[['_route' => 'chatbot_send', '_controller' => 'App\\Controller\\ChatBotController::handleMessage'], null, ['POST' => 0], null, false, false, null]],
        '/' => [[['_route' => 'app_comment_index', '_controller' => 'App\\Controller\\CommentController::index'], null, ['GET' => 0], null, false, false, null]],
        '/front/comment/new' => [[['_route' => 'app_comment_new', '_controller' => 'App\\Controller\\CommentController::new'], null, ['POST' => 0], null, false, false, null]],
        '/conseil' => [[['_route' => 'app_conseil_index', '_controller' => 'App\\Controller\\ConseilController::index'], null, ['GET' => 0], null, false, false, null]],
        '/conseil/front' => [[['_route' => 'app_conseil_index_front', '_controller' => 'App\\Controller\\ConseilController::index_front'], null, ['GET' => 0], null, false, false, null]],
        '/conseil/new' => [[['_route' => 'app_conseil_new', '_controller' => 'App\\Controller\\ConseilController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\DashboardController::dashboard'], null, ['GET' => 0], null, false, false, null]],
        '/elearning' => [[['_route' => 'app_elearning_index', '_controller' => 'App\\Controller\\ElearningController::index'], null, ['GET' => 0], null, false, false, null]],
        '/elearning/front' => [[['_route' => 'app_elearning_front', '_controller' => 'App\\Controller\\ElearningController::front'], null, ['GET' => 0], null, false, false, null]],
        '/elearning/new' => [[['_route' => 'app_elearning_new', '_controller' => 'App\\Controller\\ElearningController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/elearning/api/elearning/search' => [[['_route' => 'api_elearning_search', '_controller' => 'App\\Controller\\ElearningController::search'], null, ['GET' => 0], null, false, false, null]],
        '/homeback' => [[['_route' => 'homeback', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index1'], null, null, null, false, false, null]],
        '/materiel' => [[['_route' => 'app_materiel_index', '_controller' => 'App\\Controller\\MaterielController::index'], null, ['GET' => 0], null, false, false, null]],
        '/materiel/new' => [[['_route' => 'app_materiel_new', '_controller' => 'App\\Controller\\MaterielController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamation' => [[['_route' => 'app_reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/reclamation/new' => [[['_route' => 'app_reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegisterController::register'], null, null, null, false, false, null]],
        '/reservation' => [[['_route' => 'app_reservation_index', '_controller' => 'App\\Controller\\ReservationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/ajouterT' => [[['_route' => 'ajouterT', '_controller' => 'App\\Controller\\TerrainController::index'], null, null, null, false, false, null]],
        '/terrains' => [[['_route' => 'terrain_list', '_controller' => 'App\\Controller\\TerrainController::list'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/workshop' => [[['_route' => 'app_workshop_index', '_controller' => 'App\\Controller\\WorkshopController::index'], null, ['GET' => 0], null, false, false, null]],
        '/workshop/f' => [[['_route' => 'app_workshop_indexf', '_controller' => 'App\\Controller\\WorkshopController::indexf'], null, ['GET' => 0], null, false, false, null]],
        '/workshop/new' => [[['_route' => 'app_workshop_new', '_controller' => 'App\\Controller\\WorkshopController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/front/(?'
                    .'|article/([^/]++)/edit(*:233)'
                    .'|([^/]++)(*:249)'
                    .'|comment/([^/]++)/edit(*:278)'
                .')'
                .'|/back/(?'
                    .'|article/([^/]++)(?'
                        .'|/edit(*:320)'
                        .'|(*:328)'
                    .')'
                    .'|comment/([^/]++)(*:353)'
                .')'
                .'|/co(?'
                    .'|mment/([^/]++)(*:382)'
                    .'|nseil/([^/]++)(?'
                        .'|(*:407)'
                        .'|/edit(*:420)'
                        .'|(*:428)'
                    .')'
                .')'
                .'|/e(?'
                    .'|learning/(?'
                        .'|([^/]++)(*:463)'
                        .'|front/([^/]++)(*:485)'
                        .'|([^/]++)(?'
                            .'|/edit(*:509)'
                            .'|(*:517)'
                        .')'
                    .')'
                    .'|dit(?'
                        .'|/([^/]++)(*:542)'
                        .'|I/([^/]++)(*:560)'
                    .')'
                .')'
                .'|/materiel/([^/]++)(?'
                    .'|/(?'
                        .'|front(*:600)'
                        .'|edit(*:612)'
                    .')'
                    .'|(*:621)'
                .')'
                .'|/re(?'
                    .'|clamation/([^/]++)(?'
                        .'|(*:657)'
                        .'|/edit(*:670)'
                        .'|(*:678)'
                    .')'
                    .'|se(?'
                        .'|rvation/(?'
                            .'|new/([^/]++)(*:715)'
                            .'|([^/]++)(?'
                                .'|(*:734)'
                                .'|/edit(*:747)'
                                .'|(*:755)'
                            .')'
                        .')'
                        .'|t\\-password/reset(?:/([^/]++))?(*:796)'
                    .')'
                .')'
                .'|/delete(?'
                    .'|/([^/]++)(*:825)'
                    .'|I/([^/]++)(*:843)'
                .')'
                .'|/intervention/([^/]++)/([^/]++)(*:883)'
                .'|/user/(?'
                    .'|([^/]++)(?'
                        .'|(*:911)'
                        .'|/edit(*:924)'
                    .')'
                    .'|delete/([^/]++)(*:948)'
                    .'|profile/(?'
                        .'|([^/]++)(*:975)'
                        .'|delete/([^/]++)(*:998)'
                    .')'
                .')'
                .'|/workshop/(?'
                    .'|([^/]++)(*:1029)'
                    .'|f/([^/]++)(*:1048)'
                    .'|([^/]++)(?'
                        .'|/edit(*:1073)'
                        .'|(*:1082)'
                    .')'
                    .'|pdf/([^/]++)(*:1104)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        233 => [[['_route' => 'app_article_edit', '_controller' => 'App\\Controller\\ArticleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        249 => [[['_route' => 'app_article_delete', '_controller' => 'App\\Controller\\ArticleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        278 => [[['_route' => 'app_comment_edit', '_controller' => 'App\\Controller\\CommentController::edit'], ['commentid'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        320 => [[['_route' => 'app_articleback_edit', '_controller' => 'App\\Controller\\ArticleController::editback'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        328 => [[['_route' => 'app_articleback_delete', '_controller' => 'App\\Controller\\ArticleController::deleteback'], ['id'], ['POST' => 0], null, false, true, null]],
        353 => [[['_route' => 'app_commentback_delete', '_controller' => 'App\\Controller\\CommentController::deleteback'], ['id'], ['POST' => 0], null, false, true, null]],
        382 => [[['_route' => 'app_comment_delete', '_controller' => 'App\\Controller\\CommentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        407 => [[['_route' => 'app_conseil_show', '_controller' => 'App\\Controller\\ConseilController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        420 => [[['_route' => 'app_conseil_edit', '_controller' => 'App\\Controller\\ConseilController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        428 => [[['_route' => 'app_conseil_delete', '_controller' => 'App\\Controller\\ConseilController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        463 => [[['_route' => 'app_elearning_show', '_controller' => 'App\\Controller\\ElearningController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        485 => [[['_route' => 'app_elearning_showfront', '_controller' => 'App\\Controller\\ElearningController::showfront'], ['id'], ['GET' => 0], null, false, true, null]],
        509 => [[['_route' => 'app_elearning_edit', '_controller' => 'App\\Controller\\ElearningController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        517 => [[['_route' => 'app_elearning_delete', '_controller' => 'App\\Controller\\ElearningController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        542 => [[['_route' => 'edit', '_controller' => 'App\\Controller\\TerrainController::update'], ['id'], null, null, false, true, null]],
        560 => [[['_route' => 'editI', '_controller' => 'App\\Controller\\TerrainController::updateI'], ['id'], null, null, false, true, null]],
        600 => [[['_route' => 'app_materiel_front_index', '_controller' => 'App\\Controller\\MaterielController::materiels'], ['id'], ['GET' => 0], null, false, false, null]],
        612 => [[['_route' => 'app_materiel_edit', '_controller' => 'App\\Controller\\MaterielController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        621 => [
            [['_route' => 'app_materiel_show', '_controller' => 'App\\Controller\\MaterielController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_materiel_delete', '_controller' => 'App\\Controller\\MaterielController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        657 => [[['_route' => 'app_reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        670 => [[['_route' => 'app_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        678 => [[['_route' => 'app_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        715 => [[['_route' => 'app_reservation_new', '_controller' => 'App\\Controller\\ReservationController::new'], ['workshop'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        734 => [[['_route' => 'app_reservation_show', '_controller' => 'App\\Controller\\ReservationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        747 => [[['_route' => 'app_reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        755 => [[['_route' => 'app_reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        796 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        825 => [[['_route' => 'delete', '_controller' => 'App\\Controller\\TerrainController::delete'], ['id'], null, null, false, true, null]],
        843 => [[['_route' => 'deleteI', '_controller' => 'App\\Controller\\TerrainController::deleteI'], ['id'], null, null, false, true, null]],
        883 => [[['_route' => 'intervention', '_controller' => 'App\\Controller\\TerrainController::intervenir'], ['idT', 'userId'], null, null, false, true, null]],
        911 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        924 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        948 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['GET' => 0], null, false, true, null]],
        975 => [[['_route' => 'app_user_profile', '_controller' => 'App\\Controller\\UserController::profile'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        998 => [[['_route' => 'app_user_delete_self', '_controller' => 'App\\Controller\\UserController::deleteSelf'], ['id'], ['POST' => 0], null, false, true, null]],
        1029 => [[['_route' => 'app_workshop_show', '_controller' => 'App\\Controller\\WorkshopController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1048 => [[['_route' => 'app_workshop_showf', '_controller' => 'App\\Controller\\WorkshopController::showf'], ['id'], ['GET' => 0], null, false, true, null]],
        1073 => [[['_route' => 'app_workshop_edit', '_controller' => 'App\\Controller\\WorkshopController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1082 => [[['_route' => 'app_workshop_delete', '_controller' => 'App\\Controller\\WorkshopController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1104 => [
            [['_route' => 'app_workshop_pdf', '_controller' => 'App\\Controller\\WorkshopController::generatePdf'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
