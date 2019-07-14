<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// SOAL
Route::resource('soal','Api\Soal\SoalController')->except([
    'create','edit'
]);

// PENGATURAN
Route::resource('pengaturan','Api\Pengaturan\PengaturanController')->except([
    'create','edit','store','destroy',
]);

// USER
Route::resource('user','Api\User\UserController')->except([
    'create','edit'
]);

Route::post('user/login','Api\User\UserController@login');