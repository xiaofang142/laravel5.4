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

/*
 * 后台模块路由
 * */
Route::group(['namespace' => 'Admin','prefix' => 'admin'], function () {
    Route::get('/','IndexController@index');
    Route::get('/bar','IndexController@bar');
    Route::get('/top','IndexController@top');
    Route::get('/menu','IndexController@menu');
    Route::get('/main','IndexController@main');
    Route::get('/admin','AdminController@index');
    Route::get('/admin/add','AdminController@add');
    Route::get('/admin/delete/id/{id?}','AdminController@delete');
    Route::get('/admin/update/id/{id?}','AdminController@update');
});