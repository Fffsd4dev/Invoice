<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/dashboard1', function () {
    return view('old-dashboard');
});

Route::get('/image/{path}', function ($path) {
    $fullPath = storage_path("app/public/{$path}");

    if (!file_exists($fullPath)) {
        abort(404);
    }

    return Response::file($fullPath, [
        "Access-Control-Allow-Origin" => "http://localhost:5173",
        "Access-Control-Allow-Methods" => "GET, OPTIONS",
        "Access-Control-Allow-Headers" => "*",
    ]);
})->where('path', '.*');


