<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;


class Post{
    public static function allData(){
        return [
            [    
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel1',
                'author' => 'Muhammad Alif al Husain',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Error dolores modi officiis maxime itaque! Suscipit esse eligendi asperiores tenetur eum, velit maiores! Veniam, quo quam eaque sunt blanditiis laborum quidem?',   
            
            ],
            [    
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel2',
                'author' => 'Muhammad Alif al Husain',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Error dolores modi officiis maxime itaque! Suscipit esse eligendi asperiores tenetur eum, velit maiores! Veniam, quo quam eaque sunt blanditiis laborum quidem?',   
            
            ],
            [    
                'id' => 3,
                'slug' => 'judul-artikel-3',
                'title' => 'Judul Artike3',
                'author' => 'Muhammad Alif al Husain',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Error dolores modi officiis maxime itaque! Suscipit esse eligendi asperiores tenetur eum, velit maiores! Veniam, quo quam eaque sunt blanditiis laborum quidem?',   
            
            ],
        ];
         
    }
}

Route::get('/', function () {
    return view('welcome', ['title' => 'HomePage']);
});


Route::get('/about', function () {
    return view('about', ['title' => 'AboutPage']);

});

Route::get('/posts', function () {
    return view('posts', ['title' => 'BlogPage', 'posts' => Post::allData()
        ]);
});

Route::get('/posts/{slug}', function ($slug){

    $post = Arr::first(Post::allData(), function($post) use ($slug){
        return $post['slug'] == $slug;
    });
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'ContactPage']);
});