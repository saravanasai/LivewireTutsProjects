<?php

use Illuminate\Support\Facades\Route;

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
    return view('app');
})->name('home');


Route::group(['prefix'=>'counter','as'=>'counter.'],function(){

    Route::get('/', function () {
        return view('App.Counter.index');
    })->name('index');



});


Route::group(['prefix'=>'calculater','as'=>'calculater.'],function(){

    Route::get('/', function () {
        return view('App.Calculater.index');
    })->name('index');



});

