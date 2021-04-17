<?php
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome2/', function () {
    return view('welcome2');
});


Route::get('/login', [LoginController::class,'login']);
