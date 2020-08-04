<?php



Route::get('/', function () {
    return view('welcome');
});

 // Route::get('lista-usuarios', "UserController@listUser");
Route::group(['namespace' => 'Form'], function () {
    // VERBO GET
    Route::get('usuarios', 'TestController@listAllUsers')->name('users');
    Route::get('usuarios/novo', 'TestController@formAddUser')->name('users.formUser');
    Route::get('usuarios/editar/{user}', 'TestController@formEditUser')->name('users.formEditUser');
    //rotas com parametros passar sempre após as rotas com palavras fixas como user/novo,
    Route::get('usuarios/{user}', 'TestController@listUser')->name('users.listUser');
    // VERBO POST
    //Nomeclatura quando utiliza-se o name em qualquer momento pode-se alterar a rota inicial
    // ou seja usuario/store pode ser alterado a qualquer momento, pois oque importa é o name->('user.store')
    // Route::post('')
    Route::post('usuario/store', 'TestController@storeUser')->name('users.store');
    // VERBO PUT/PATH
    Route::put('usuario/edit/{user}', 'TestController@edit')->name('users.edit');
    // VERBO DELETE
    Route::delete('usuario/destroy/{user}', 'TestController@destroy')->name('user.destroy');
});
