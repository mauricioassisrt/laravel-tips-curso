<?php



Route::get('/', function () {
    return view('welcome');
});


Route::get('lista-usuarios', "UserController@listUser");
