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
    return view('posts', [
        'title' => 'BlogPage',
        'posts' => Post::filter()->latest()->simplePaginate(6)
    ]);
});


Route::get('/posts/{post:slug}', function (Post $post){

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'ContactPage']);
});

Route::get('/authors/{user:username}', function (User $user){
    $posts = $user->posts()->with('category', 'author')->simplePaginate(10);
    $totalPosts = $user->posts()->count();

    return view('posts', ['title' => $totalPosts . 'Articles by :' . $user->name, 'posts'=> $posts]);
});
Route::get('/categories/{category:slug}', function (Category $category) {
    $posts = $category->posts()->with('category', 'author')->simplePaginate(6);

    return view('posts', [
        'title' => 'Articles Category: ' . $category->name,
        'posts' => $posts
    ]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
