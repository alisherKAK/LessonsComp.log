<?php

/**
 * ----------
 * WEB ROUTES
 * ----------
 * @var Klein $router
 */

use Klein\Klein;
use Klein\Request;
use Klein\Response;

$router->get('/', function (Request $request, Response $response) {
    return action('Site@index', $request, $response);
});
