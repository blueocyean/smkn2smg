<?php

use App\Http\Controllers\Authcontroller;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[Authcontroller::class,'login'])->name('login');