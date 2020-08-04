<?php



Route::get('/', function () {
    return view('welcome');
});
// aula 1
// Route::get('lista-usuarios', "UserController@listUser");
// aula 2
// Route::group(['namespace' => 'Form'], function () {
//     // VERBO GET
//     Route::get('usuarios', 'TestController@listAllUsers')->name('users');
//     Route::get('usuarios/novo', 'TestController@formAddUser')->name('users.formUser');
//     Route::get('usuarios/editar/{user}', 'TestController@formEditUser')->name('users.formEditUser');
//     //rotas com parametros passar sempre após as rotas com palavras fixas como user/novo,
//     Route::get('usuarios/{user}', 'TestController@listUser')->name('users.listUser');
//     // VERBO POST
//     //Nomeclatura quando utiliza-se o name em qualquer momento pode-se alterar a rota inicial
//     // ou seja usuario/store pode ser alterado a qualquer momento, pois oque importa é o name->('user.store')
//     // Route::post('')
//     Route::post('usuario/store', 'TestController@storeUser')->name('users.store');
//     // VERBO PUT/PATH
//     Route::put('usuario/edit/{user}', 'TestController@edit')->name('users.edit');
//     // VERBO DELETE
//     Route::delete('usuario/destroy/{user}', 'TestController@destroy')->name('user.destroy');
// });
// aula 3
//codigo para criar automatizado  faz a injecao de dependencias
// php artisan make:controller Form\\TestController --resource --model=User
//rota unica que retorna e cria todas as rotas dos sistema
// +--------+-----------+------------------------+--------------+--------------------------------------------------+--------------+
// | Domain | Method    | URI                    | Name         | Action                                           | Middleware   |
// +--------+-----------+------------------------+--------------+--------------------------------------------------+--------------+
// |        | GET|HEAD  | /                      |              | Closure                                          | web          |
// |        | GET|HEAD  | api/user               |              | Closure                                          | api,auth:api |
// |        | GET|HEAD  | usuarios               | user.index   | App\Http\Controllers\Form\TestController@index   | web          |
// |        | POST      | usuarios               | user.store   | App\Http\Controllers\Form\TestController@store   | web          |
// |        | GET|HEAD  | usuarios/novo          | user.create  | App\Http\Controllers\Form\TestController@create  | web          |
// |        | GET|HEAD  | usuarios/{user}        | user.show    | App\Http\Controllers\Form\TestController@show    | web          |
// |        | PUT|PATCH | usuarios/{user}        | user.update  | App\Http\Controllers\Form\TestController@update  | web          |
// |        | DELETE    | usuarios/{user}        | user.destroy | App\Http\Controllers\Form\TestController@destroy | web          |
// |        | GET|HEAD  | usuarios/{user}/editar | user.edit    | App\Http\Controllers\Form\TestController@edit    | web          |
// +--------+-----------+------------------------+--------------+--------------------------------------------------+--------------+
// usuarios é o padrao em portugues 'controller a ser excultado ' NAMEs e o nome da rota nome definido pelo metodos  parametros efetua a conversao
Route::resource('usuarios', 'Form\\TestController')->names('user')->parameters(['usuarios' => 'user']);
