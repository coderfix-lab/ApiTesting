<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'TestController@index');

Route::any('/icon', 'TestController@icon');

Route::get('/captcha', 'TestController@captcha');

Route::post('/icon/upload', 'TestController@ajaxUpload');

Route::any('/ajax/create', 'TestController@store');
//Route::get('/ajax/create', 'TestController@store');

//下载文件
Route::get('/icon/download/{path}', 'TestController@download');


//短视频传播渠道播放次数查询
Route::get('/play/times', 'TestController@playtimes');
//ajax查询路经
Route::post('/play/get', 'TestController@gettimes');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/