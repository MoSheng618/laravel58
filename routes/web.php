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

/*
 * index 页面信息
 * */
Route::get('test',function(){
    \Illuminate\Support\Facades\Session::put("name",'xiaoming');
  return response("ceshi")->cookie('name','xiaoming',10);
});

Route::get('/',"index\IndexController@index");
