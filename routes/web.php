<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['title' => 'HomePage']);
});


Route::get('/about', function () {
    return view('about', ['title' => 'AboutPage']);

});

Route::get('/posts', function () {
    return view('posts', ['title' => 'BlogPage', 'posts' => [
    [    
        'title' => 'Judul Artikel1',
        'author' => 'Muhammad Alif al Husain',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Error dolores modi officiis maxime itaque! Suscipit esse eligendi asperiores tenetur eum, velit maiores! Veniam, quo quam eaque sunt blanditiis laborum quidem?',   
    
    ],
    [    
        'title' => 'Judul Artikel2',
        'author' => 'Muhammad Alif al Husain',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Error dolores modi officiis maxime itaque! Suscipit esse eligendi asperiores tenetur eum, velit maiores! Veniam, quo quam eaque sunt blanditiis laborum quidem?',   
    
    ],
    [    
        'title' => 'Judul Artike3',
        'author' => 'Muhammad Alif al Husain',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Error dolores modi officiis maxime itaque! Suscipit esse eligendi asperiores tenetur eum, velit maiores! Veniam, quo quam eaque sunt blanditiis laborum quidem?',   
    
    ],


        ]]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'ContactPage']);
});