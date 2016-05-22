<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use Eloquent\User;

Route::get('/crear', function () {
   $user = User::create([
        'name' => 'Lynda Morales',
        'email' => 'l@italomoralesf.com',
        'password' => bcrypt('123456'),
        'gender' => 'f',
        'biography' => 'Alumna de PHP'
    ]);
   
   return 'Usuario guardado';
});

Route::get('/update', function() {
    $user = User::find(1);
    $user->gender = 'm';
    $user->biography = 'Alumno de Styde';
    $user->save();
    return "Usuario actualizado";
});

Route::get('/', function () {
    return view('welcome');
});