<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login'); // Asegurate de tener esta vista en resources/views/auth/login.blade.php
})->name('login');
