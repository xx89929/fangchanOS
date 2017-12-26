<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {
    $router->resource('users',UserController::class);
    $router->get('/', 'HomeController@index');

    /******movies*******/
    $router->resource('movies','MoviesController');
//    $router->match(['get','post'],'movies','MoviesController@index')->name('movies.show');
//    $router->match(['get','post'],'movies/create','MoviesController@create')->name('movies.create');
//    $router->post('movies/{id}/edit','MoviesController@edit')->name('movies.edit');
//    $router->post('movies/{id}/destroy','MoviesController@destroy')->name('movies.destroy');
});
