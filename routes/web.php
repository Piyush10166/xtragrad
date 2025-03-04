<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/course-detail', function () {
    return view('course_detail');
});
