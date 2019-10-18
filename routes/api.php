<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//LIBROS
Route::post('/libro', 'LibrosController@store');
Route::delete('/libro/{libro_id}', 'LibrosController@destroy');
Route::put('/libro/{libro_id}', 'LibrosController@update');
Route::get('libros', 'LibrosController@index');
Route::get('libro/{libro_id}', 'LibrosController@show');

//EDITORIALES
Route::post('/editorial', 'EditorialesController@store');
Route::delete('/editorial/{editorial_id}', 'EditorialesController@destroy');
Route::put('/editorial/{editorial_id}', 'EditorialesController@update' );
Route::get('/editoriales', 'EditorialesController@index');
Route::get('/editorial/{editorial_id}', 'EditorialesController@show');

//PASSWORD
Route::put('/password{user_id}', 'UpdatePasswordController@update');

//TOKEN
//Rutas sin necesidad de proveer de un token válido
Route::post('login', 'AuthController@login');
Route::post('/register', 'AuthController@register');
//Rutas con necesidad de token válido para poder accederse
Route::group(['middleware' => 'auth.jwt'], function(){
    Route::post('/logout', 'AuthController@logout');
});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
