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

Route::get('/', function () {
    return view('welcome');
});

Route::get('test',function(){
    echo route('test',['account'=>'account','id'=>1]);

});

Route::group(['domain' => 'www.myapp.com'], function () {
    Route::get('user/{id}', function ($id) {
        echo 'this is www.wyapp.com web';
    })->name('test');
});

Route::group(['middleware'=>'test'],function(){
    Route::get('test1',function(){
        echo 'test1路由';
    });
});

Route::group(['prefix'=>'admin'],function(){
    Route::get('index','Admin\IndexController@index');
    Route::get('index2','Admin\IndexController@index2');
});

