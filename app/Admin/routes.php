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

    /******account*******/
    $router->resource('account','AccountController');
    $router->resource('account_type','AccountTypeController');

    /******wuye*********/
    $router->resource('wuye','WuYeTypeController');

    /******new_house*******/
    $router->resource('newhouse','NewHouseController');

    /******new_house*******/
    $router->resource('oldhouse','OldHouseController');


    /******area*******/
    $router->resource('area','AreaController');

    /******sell_status*******/
    $router->resource('sell_status','HouseSellStatusController');

    /******trait_tag*******/
    $router->resource('trait_tag','HouseTraitTagController');

    /******group_buy*******/
    $router->resource('group_buy','GroupBuyController');

    /******seeHouseGroup*******/
    $router->resource('seeHouseGroup','SeeHouseGroupController');

    /*****Article**********/
    $router->resource('article','ArticleController');
    $router->resource('article_cla','ArticleClassifyController');

    /******api_area*******/
    Route::get('/api/area/parent','AreaController@getAreaParent');

});


