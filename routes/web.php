<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home', [
        'title' => 'Home Page',
    ]);
})->name('home');

Route::get('/about', function() {
    return view('pages.about', [
        'title' => 'About Page',
    ]);
})->name('about');

Route::get('/project', function() {
    return view('pages.project', [
        'title' => 'Project Page',
    ]);
})->name('project');
