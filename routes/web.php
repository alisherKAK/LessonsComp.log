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

$router->get('/', function(){
    return action('Site@index');
});

$router->with('/login', function () use ($router) {
    $router->get('/?', function (){
       return action('Login@form');
    });

    $router->post('/?', function($req, $res){
       return action('Login@make', $req, $res);
    });
});

$router->get('/logout', function($req, $res) {
    return action('Login@logout', $req, $res);
});

//CRUD books
$router->with('/books', function () use ($router){
    $router->get('/?', function (){
        return action('Book@index');
    });

    $router->get('/create', function ($req, $res){
        return action('Book@create', $req, $res);
    });

    $router->post('/create', function($req, $res) {
        return action('Book@createPost', $req, $res);
    });

    $router->get('/update/[i:id]', function($req, $res){
        return action('Book@update', $req, $res);
    });

    $router->post('/update/[i:id]', function($req, $res){
        return action('Book@updatePost', $req, $res);
    });

    $router->post('/delete/[i:id]', function($req, $res){
        return action('Book@delete', $req, $res);
    });

    $router->get('/[i:id]', function($req, $res) {
        return action('Book@details', $req, $res);
    });
});