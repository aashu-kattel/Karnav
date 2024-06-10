<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return file_get_contents(public_path('new_home.html'));
});
