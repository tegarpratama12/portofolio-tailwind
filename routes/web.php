<?php

use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Project;
use App\Models\User;

// Route::get('/', function () {
//     return view('pages.home', [
//         'title' => 'Home Pages',
//     ]);
// })->name('home');

Route::get('/', function () {
    $body = 'Hai, aku Mohammad Tegar Wahyu Pratama, seorang lulusan Teknik Informatika dari Universitas Islam Nahdlatul Ulama Jepara. Dunia coding sudah jadi bagian besar dari hidupku, dan aku cukup mahir menggunakan beberapa framework seperti Laravel, Tailwind CSS, Bootstrap, serta Python. Aku senang banget mengeksplorasi teknologi, mulai dari membangun aplikasi hingga mengembangkan desain web yang menarik dan fungsional. Tapi, nggak cuma soal coding, aku juga punya passion lain di dunia desain interior dan pembuatan furniture. Bagiku, ada kepuasan tersendiri ketika bisa memadukan sisi teknis dari ilmu pemrograman dengan kreativitas desain. Baik itu menciptakan solusi digital atau merancang sesuatu yang bisa dinikmati secara visual, aku selalu berusaha memberikan yang terbaik di setiap hal yang aku kerjakan';
    return view('pages.about', [
        'title' => 'About Pages',
        'name' => 'tegar pratama',
        'projects' => Project::orderBy('created_at', 'desc')->limit(5)->get(),
        'body' => $body,
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
