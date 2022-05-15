<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {

    $router->group(['prefix' => 'usuario'], function () use ($router) {
        $router->get('', 'UsuarioController@index');
        $router->post('', 'UsuarioController@store');
        $router->get('{id}', 'UsuarioController@show');
        $router->put('{id}', 'UsuarioController@update');
        $router->delete('{id}', 'UsuarioController@destroy');
        $router->get('{idUsuario}/contas', 'ContaController@contasPorUsuario');
        $router->get('{idUsuario}/contas', 'ContaController@contasEmConjunto');
    });

    $router->group(['prefix' => 'conta'], function () use ($router) {
        $router->get('', 'ContaController@index');
        $router->post('', 'ContaController@store');
        $router->get('{id}', 'ContaController@show');
        $router->put('{id}', 'ContaController@update');
        $router->delete('{id}', 'ContaController@destroy');
    });

});
