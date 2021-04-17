<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome2/', function () {
    return view('welcome2');
});->

Route::get('/login', function () {
    return view('login');
});

//test1