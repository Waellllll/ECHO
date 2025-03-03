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
        '/' => [[['_route' => 'app_comment_index', '_controller' => 'App\\Controller\\CommentController::index'], null, ['GET' => 0], null, false, false, null]],
        '/front/comment/new' => [[['_route' => 'app_comment_new', '_controller' => 'App\\Controller\\CommentController::new'], null, ['POST' => 0], null, false, false, null]],
        '/conseil' => [[['_route' => 'app_conseil_index', '_controller' => 'App\\Controller\\ConseilController::index'], null, ['GET' => 0], null, false, false, null]],
        '/conseil/new' => [[['_route' => 'app_conseil_new', '_controller' => 'App\\Controller\\ConseilController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/api(?'
                    .'|/(?'
                        .'|\\.well\\-known/genid/([^/]++)(*:46)'
                        .'|validation_errors/([^/]++)(*:79)'
                    .')'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:115)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:146)'
                        .'|contexts/([^.]+)(?:\\.(jsonld))?(*:185)'
                        .'|errors/(\\d+)(?:\\.([^/]++))?(*:220)'
                        .'|validation_errors/([^/]++)(?'
                            .'|(*:257)'
                        .')'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:299)'
                    .'|wdt/([^/]++)(*:319)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:361)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:398)'
                                .'|router(*:412)'
                                .'|exception(?'
                                    .'|(*:432)'
                                    .'|\\.css(*:445)'
                                .')'
                            .')'
                            .'|(*:455)'
                        .')'
                    .')'
                .')'
                .'|/front/(?'
                    .'|article/([^/]++)/edit(*:497)'
                    .'|([^/]++)(*:513)'
                    .'|comment/([^/]++)/edit(*:542)'
                .')'
                .'|/back/(?'
                    .'|article/([^/]++)(?'
                        .'|/edit(*:584)'
                        .'|(*:592)'
                    .')'
                    .'|comment/([^/]++)(*:617)'
                .')'
                .'|/co(?'
                    .'|mment/([^/]++)(*:646)'
                    .'|nseil/([^/]++)(?'
                        .'|(*:671)'
                        .'|/edit(*:684)'
                        .'|(*:692)'
                    .')'
                .')'
                .'|/e(?'
                    .'|learning/(?'
                        .'|([^/]++)(*:727)'
                        .'|front/([^/]++)(*:749)'
                        .'|([^/]++)(?'
                            .'|/edit(*:773)'
                            .'|(*:781)'
                        .')'
                    .')'
                    .'|dit(?'
                        .'|/([^/]++)(*:806)'
                        .'|I/([^/]++)(*:824)'
                    .')'
                .')'
                .'|/materiel/([^/]++)(?'
                    .'|(*:855)'
                    .'|/edit(*:868)'
                    .'|(*:876)'
                .')'
                .'|/re(?'
                    .'|clamation/([^/]++)(?'
                        .'|(*:912)'
                        .'|/edit(*:925)'
                        .'|(*:933)'
                    .')'
                    .'|servation/(?'
                        .'|new/([^/]++)(*:967)'
                        .'|([^/]++)(?'
                            .'|(*:986)'
                            .'|/edit(*:999)'
                            .'|(*:1007)'
                        .')'
                    .')'
                .')'
                .'|/delete(?'
                    .'|/([^/]++)(*:1038)'
                    .'|I/([^/]++)(*:1057)'
                .')'
                .'|/intervention/([^/]++)/([^/]++)(*:1098)'
                .'|/user/(?'
                    .'|([^/]++)(?'
                        .'|(*:1127)'
                        .'|/edit(*:1141)'
                    .')'
                    .'|delete/([^/]++)(*:1166)'
                    .'|profile/(?'
                        .'|([^/]++)(*:1194)'
                        .'|delete/([^/]++)(*:1218)'
                    .')'
                .')'
                .'|/workshop/(?'
                    .'|([^/]++)(*:1250)'
                    .'|f/([^/]++)(*:1269)'
                    .'|([^/]++)(?'
                        .'|/edit(*:1294)'
                        .'|(*:1303)'
                    .')'
                    .'|pdf/([^/]++)(*:1325)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        46 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        79 => [[['_route' => 'api_validation_errors', '_controller' => 'api_platform.action.not_exposed'], ['id'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        115 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        146 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        185 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        220 => [[['_route' => '_api_errors', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\State\\ApiResource\\Error', '_api_operation_name' => '_api_errors'], ['status', '_format'], ['GET' => 0], null, false, true, null]],
        257 => [
            [['_route' => '_api_validation_errors_problem', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_problem'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_hydra', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_hydra'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_jsonapi', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_jsonapi'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        299 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        319 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        361 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        398 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        412 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        432 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        445 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        455 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        497 => [[['_route' => 'app_article_edit', '_controller' => 'App\\Controller\\ArticleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        513 => [[['_route' => 'app_article_delete', '_controller' => 'App\\Controller\\ArticleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        542 => [[['_route' => 'app_comment_edit', '_controller' => 'App\\Controller\\CommentController::edit'], ['commentid'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        584 => [[['_route' => 'app_articleback_edit', '_controller' => 'App\\Controller\\ArticleController::editback'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        592 => [[['_route' => 'app_articleback_delete', '_controller' => 'App\\Controller\\ArticleController::deleteback'], ['id'], ['POST' => 0], null, false, true, null]],
        617 => [[['_route' => 'app_commentback_delete', '_controller' => 'App\\Controller\\CommentController::deleteback'], ['id'], ['POST' => 0], null, false, true, null]],
        646 => [[['_route' => 'app_comment_delete', '_controller' => 'App\\Controller\\CommentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        671 => [[['_route' => 'app_conseil_show', '_controller' => 'App\\Controller\\ConseilController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        684 => [[['_route' => 'app_conseil_edit', '_controller' => 'App\\Controller\\ConseilController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        692 => [[['_route' => 'app_conseil_delete', '_controller' => 'App\\Controller\\ConseilController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        727 => [[['_route' => 'app_elearning_show', '_controller' => 'App\\Controller\\ElearningController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        749 => [[['_route' => 'app_elearning_showfront', '_controller' => 'App\\Controller\\ElearningController::showfront'], ['id'], ['GET' => 0], null, false, true, null]],
        773 => [[['_route' => 'app_elearning_edit', '_controller' => 'App\\Controller\\ElearningController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        781 => [[['_route' => 'app_elearning_delete', '_controller' => 'App\\Controller\\ElearningController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        806 => [[['_route' => 'edit', '_controller' => 'App\\Controller\\TerrainController::update'], ['id'], null, null, false, true, null]],
        824 => [[['_route' => 'editI', '_controller' => 'App\\Controller\\TerrainController::updateI'], ['id'], null, null, false, true, null]],
        855 => [[['_route' => 'app_materiel_show', '_controller' => 'App\\Controller\\MaterielController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        868 => [[['_route' => 'app_materiel_edit', '_controller' => 'App\\Controller\\MaterielController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        876 => [[['_route' => 'app_materiel_delete', '_controller' => 'App\\Controller\\MaterielController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        912 => [[['_route' => 'app_reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        925 => [[['_route' => 'app_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        933 => [[['_route' => 'app_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        967 => [[['_route' => 'app_reservation_new', '_controller' => 'App\\Controller\\ReservationController::new'], ['workshop'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        986 => [[['_route' => 'app_reservation_show', '_controller' => 'App\\Controller\\ReservationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        999 => [[['_route' => 'app_reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1007 => [[['_route' => 'app_reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1038 => [[['_route' => 'delete', '_controller' => 'App\\Controller\\TerrainController::delete'], ['id'], null, null, false, true, null]],
        1057 => [[['_route' => 'deleteI', '_controller' => 'App\\Controller\\TerrainController::deleteI'], ['id'], null, null, false, true, null]],
        1098 => [[['_route' => 'intervention', '_controller' => 'App\\Controller\\TerrainController::intervenir'], ['idT', 'userId'], null, null, false, true, null]],
        1127 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1141 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1166 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['GET' => 0], null, false, true, null]],
        1194 => [[['_route' => 'app_user_profile', '_controller' => 'App\\Controller\\UserController::profile'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1218 => [[['_route' => 'app_user_delete_self', '_controller' => 'App\\Controller\\UserController::deleteSelf'], ['id'], ['POST' => 0], null, false, true, null]],
        1250 => [[['_route' => 'app_workshop_show', '_controller' => 'App\\Controller\\WorkshopController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1269 => [[['_route' => 'app_workshop_showf', '_controller' => 'App\\Controller\\WorkshopController::showf'], ['id'], ['GET' => 0], null, false, true, null]],
        1294 => [[['_route' => 'app_workshop_edit', '_controller' => 'App\\Controller\\WorkshopController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1303 => [[['_route' => 'app_workshop_delete', '_controller' => 'App\\Controller\\WorkshopController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1325 => [
            [['_route' => 'app_workshop_pdf', '_controller' => 'App\\Controller\\WorkshopController::generatePdf'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
