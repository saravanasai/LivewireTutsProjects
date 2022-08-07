<?php

use App\Models\ChatBotApp\ChatBot;
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

Route::group(['prefix' => 'bot-trainer', 'as' => 'bot-trainer.'], function () {

    Route::get('/', function () {
        return view('App.bot-trainer.index');
    })->name('index');
});

Route::group(['prefix' => 'chat-bot', 'as' => 'chat-bot.'], function () {

    Route::get('/', function () {
        return view('App.chat-bot.index');
    })->name('index');

    Route::post('send-message',function(Request $request){

        $query = ChatBot::query();

       $reponse=$query->where('question', 'LIKE', '%' . $request->message . '%')->first('answer');

        if($reponse)
        {

        sleep(rand(1,5));

        return response()->json(["data"=>$reponse],200);
        }
        return response()->json(["data"=>"Sry I cannot Answer this"],200);


    })->name('sendMessage');

});
