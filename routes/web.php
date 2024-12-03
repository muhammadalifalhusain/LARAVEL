<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;



Route::get('/', function () {
    return view('welcome', ['title' => 'HomePage']);
});


Route::get('/about', function () {
    return view('about', ['title' => 'AboutPage']);

});

Route::get('/posts', function () {
    $posts = Post::with(['author', 'category'])->get();
    return view('posts', ['title' => 'BlogPage', 'posts' => $posts
        ]);
});

Route::get('/posts/{post:slug}', function (Post $post){

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'ContactPage']);
});

Route::get('/authors/{user:username}', function (User $user){
    $posts = $user -> posts -> load ('category' , 'author');

    return view('posts', ['title' => count($posts) . 'Articles by :' . $user->name, 'posts' => $user->posts]);
});
Route::get('/categories/{category:slug}', function (Category $category){
    $posts = $category -> posts -> load ('category' , 'author');
    return view('posts', ['title' =>  'Articles Category :' . $category->name, 'posts' => $posts]);
});