<?php

use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Project;
use App\Models\User;

Route::get('/', function () {
    return view('pages.home', [
        'title' => 'Home Pages',
    ]);
})->name('home');

Route::get('/about', function () {
    return view('pages.about', [
        'title' => 'About Pages',
        'name' => 'tegar pratama',
    ]);
})->name('about');

Route::get('/project', function () {
    return view('pages.project', [
        'title' => 'All Project Pages',
        'projects' => Project::latest()->paginate(5),
        'categories' => Category::all(),
    ]);
})->name('project');


Route::get('/project/{project:slug}', function (Project $project) {
    return view('pages.single_post', [
        'title' => 'Details Project',
        'project' => $project,
    ]);
});

Route::get('/category/{category:slug}', function (Category $category) {
    $posts = $category->projectss()->paginate(6);
    return view('pages.categories', [
        'title' => 'All Category By : ' . $category->name,
        'posts' => $posts,
    ]);
});
