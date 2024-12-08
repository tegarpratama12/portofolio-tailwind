<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Post;


Route::get('/', function () {
    return view('pages.home', [
        'title' => 'Home Page',
    ]);
})->name('home');

Route::get('/about', function () {
    return view('pages.about', [
        'title' => 'About Page',
        'name' => 'tegar pratama',
    ]);
})->name('about');

Route::get('/project', function () {
    return view('pages.project', [
        'title' => 'Project Page',
        'posts' => Post::all()
    ]);
})->name('project');

// Route::get('/post/{slug}', function ($slug) {

//     $post = Post::find($slug);
//     return view('pages.single_post', [
//         'post' => $post,
//         'title' => 'halaman single post',
//     ]);
// });

Route::get('/post/{slug}', function ($slug) {
    $post = Post::find($slug);
    return view('pages.single_post', [
        'post' => $post,
        'title' => 'halaman single post',
    ]);
});
