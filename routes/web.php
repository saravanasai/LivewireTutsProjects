<?php

use App\Models\EmployeeApp\Employee;
use Illuminate\Http\Request;
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


Route::group(['prefix' => 'counter', 'as' => 'counter.'], function () {

    Route::get('/', function () {
        return view('App.Counter.index');
    })->name('index');
});


Route::group(['prefix' => 'calculater', 'as' => 'calculater.'], function () {

    Route::get('/', function () {
        return view('App.Calculater.index');
    })->name('index');
});

Route::group(['prefix' => 'todo-application', 'as' => 'todo.'], function () {

    Route::get('/', function () {
        return view('App.Todos.index');
    })->name('index');
});


Route::group(['prefix' => 'dependent-dropdown', 'as' => 'dependent-dropdown.'], function () {

    Route::get('/', function () {
        return view('App.DependentDropdown.index');
    })->name('index');
});

Route::group(['prefix' => 'employee', 'as' => 'employee.'], function () {

    Route::get('/', function () {
        return view('App.Employee.index');
    })->name('index');

    Route::put('/update/{id}', function (Request $request, $id) {

        Employee::find($id)->update(["{$request->column}" => $request->info]);

    })->name('update');
});
