<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
 // Tambahkan baris ini

class Post extends Model
{
    protected $fillable = ['title', 'author', 'slug', 'body'];
    // Isi model Post
}
