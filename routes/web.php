<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route:: get('/greet/{name}', action: function($name): string(
//     return "Hello, $name"
// )

// )

Route::get('/sum/{x}/{y}', action: function($x, $y): string{
    $sum = $x + $y;
    return "The sum of the $x and $y is $sum";
});