<?php


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});



Route::group(['namespace' => 'Home'],function (){
    Route::get('/','HomeController@index')->name('/');
    Route::get('newhouse','NewHouseController@index')->name('newhouse');
    Route::get('newhouse/info','NewHouseController@index_info')->name('newhouse.info');
    Route::get('oldhouse','OldHouseController@index')->name('oldhouse');
    Route::get('oldhouse/info','OldHouseController@info')->name('oldhouse.info');
    Route::get('houseadv','HouseAdvController@index')->name('houseadv');
    Route::get('seehousegroup','SeeHouseGroupController@index')->name('seehousegroup');
    Route::get('groupbuy','GroupBuyController@index')->name('groupbuy');
    Route::post('apiUpImg','CommonController@ApiEditImg');

    Route::get('map','HouseMapController@index')->name('house.map');
});