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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/espece/index' => [[['_route' => 'espece_index', '_controller' => 'App\\Controller\\EspeceController::index'], null, null, null, false, false, null]],
        '/espece/create' => [[['_route' => 'espece_create', '_controller' => 'App\\Controller\\EspeceController::create'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/message/index' => [[['_route' => 'message_index', '_controller' => 'App\\Controller\\MessageController::index'], null, null, null, false, false, null]],
        '/message/create' => [[['_route' => 'message_create', '_controller' => 'App\\Controller\\MessageController::create'], null, null, null, false, false, null]],
        '/montage/create' => [[['_route' => 'montage_create', '_controller' => 'App\\Controller\\MontageController::create'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/espece/(?'
                    .'|update/([^/]++)(*:195)'
                    .'|delete/([^/]++)(*:218)'
                .')'
                .'|/m(?'
                    .'|essage/(?'
                        .'|update/([^/]++)(*:257)'
                        .'|delete/([^/]++)(*:280)'
                    .')'
                    .'|ontage/(?'
                        .'|index(?:/([^/]++))?(*:318)'
                        .'|u(?'
                            .'|pdate/([^/]++)(*:344)'
                            .'|nlink/([^/]++)/([^/]++)(*:375)'
                        .')'
                        .'|delete/([^/]++)(*:399)'
                        .'|link/([^/]++)(?:/([^/]++))?(*:434)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        195 => [[['_route' => 'espece_update', '_controller' => 'App\\Controller\\EspeceController::create'], ['id'], null, null, false, true, null]],
        218 => [[['_route' => 'espece_delete', '_controller' => 'App\\Controller\\EspeceController::delete'], ['id'], null, null, false, true, null]],
        257 => [[['_route' => 'message_update', '_controller' => 'App\\Controller\\MessageController::create'], ['id'], null, null, false, true, null]],
        280 => [[['_route' => 'message_delete', '_controller' => 'App\\Controller\\MessageController::delete'], ['id'], null, null, false, true, null]],
        318 => [[['_route' => 'montage_index', 'espece_id' => null, '_controller' => 'App\\Controller\\MontageController::index'], ['espece_id'], null, null, false, true, null]],
        344 => [[['_route' => 'montage_update', '_controller' => 'App\\Controller\\MontageController::create'], ['id'], null, null, false, true, null]],
        375 => [[['_route' => 'unlink_espece', '_controller' => 'App\\Controller\\MontageController::unlinkEspece'], ['id', 'espece_id'], null, null, false, true, null]],
        399 => [[['_route' => 'montage_delete', '_controller' => 'App\\Controller\\MontageController::delete'], ['id'], null, null, false, true, null]],
        434 => [
            [['_route' => 'link_espece', 'espece_id' => null, '_controller' => 'App\\Controller\\MontageController::linkEspece'], ['id', 'espece_id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
