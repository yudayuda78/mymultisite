<?php

use Illuminate\Support\Facades\Route;

Route::domain('mymultisite.test')->group(function () {
    Route::get('/', function () {
        abort(404);
    });
});

Route::domain('{subdomain}.mymultisite.test')->group(function () {
    Route::get('/', function ($subdomain) {
        return view('subdomain', compact('subdomain'));
    });
});
