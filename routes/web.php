<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Post;



Route::get('/', function () {
    return view('welcome', ['title' => 'HomePage']);
});


Route::get('/about', function () {
    return view('about', ['title' => 'AboutPage']);

});

Route::get('/posts', function () {
    return view('posts', ['title' => 'BlogPage', 'posts' => Post::all()
        ]);
});

Route::get('/posts/{post:slug}', function (Post $post){

    $post -> load('author_id');
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'ContactPage']);
});