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
    return "Welcome to adaa product";
});


$router->group(['prefix' => 'api'], function() use ($router){
    /**route login and register */
    $router->post('register', 'AuthController@register');
    $router->post('login', 'AuthController@login');

    $router->group(['middleware' => 'auth'], function() use ($router){
        /**route authentificated */
        $router->post('logout', 'AuthController@logout');
        $router->get('refresh', 'AuthController@refresh');
        $router->post('refresh', 'AuthController@refresh');
        $router->post('profile', 'AuthController@profile');

        /**route product */
        $router->get('product', 'ProductController@showAllProducts');
        $router->get('product/{id}', 'ProductController@ShowOneProducts');
        $router->post('product', 'ProductController@create');
        $router->put('product/{id}', 'ProductController@update');
        $router->delete('product/{id}', 'ProductController@delete');
        
    });
});
