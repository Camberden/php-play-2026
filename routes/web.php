<?php

use Illuminate\Support\Facades\Route;

$latest_update = "Tuesday, January 20th, 2026";

Route::get('/', function () use ($latest_update) {
    return view('welcome', 
    ['greeting' => 'Hello again, ',
    'person' => 'Chrispy!',
    'current_time' => now()->format('Y-m-d H:i:s'),
    'latest_update' => $latest_update,
    ]);
});

Route::get('/about', function() {
    return view('about', ['person' => 'Chrispy',]);
});

Route::get('/contact', function () {
    return view('contact', ['person' => 'Chrispy']);
});