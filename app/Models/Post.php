<?php

namespace App\Models;
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
                'title' => 'Judul Artikel3',
                'author' => 'Muhammad Alif al Husain',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Error dolores modi officiis maxime itaque! Suscipit esse eligendi asperiores tenetur eum, velit maiores! Veniam, quo quam eaque sunt blanditiis laborum quidem?',   
            
            ],
        ];
         
    }
    public static function find($slug){
        return Arr::first(static::allData(), function($post) use ($slug){
            return $post['slug'] == $slug;
        });
    }
}
?>
