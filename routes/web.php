<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['greeting' => 'Hello again, ', 'person' => 'Chrispy!']);
});
