<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Arr;
use App\Models\User;


class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'author_id', 'slug', 'body'];
    // Isi model Post
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id'); // Menghubungkan 'author_id' ke model 'User'
    }
}
