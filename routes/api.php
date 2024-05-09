<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/user', function(){
    return view('post');
    return response()->json([
        'info' => 'Berhasil mengubah data',
        'data' => [
            'isBookmarked' => true,
        ],
    ]);
});

Route::post('/user', function(){
    return 'Ini response POST dari route user';
});

Route::put('/user/{id}', function(){
    return response()->json([
        'info' => 'Berhasil mengubah data',
        'data' => [
            'isBookmarked' => true,
        ],
    ]);
});

Route::delete('/user/{id}', function () {
    return 'Ini response DELETE dari route user';
});