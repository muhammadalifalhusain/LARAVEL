<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Category;
use Illuminate\Support\Arr;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;


class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'author_id', 'slug', 'body'];
    // Isi model Post
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class); // Menghubungkan 'author_id' ke model 'User'
    }
    
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class); // Menghubungkan 'author_id' ke model 'User'

    }

    public function scopeFilter(Builder $query): void {
        $search = request('search');
        
        if (!empty($search)) {
            $query->where('title', 'like', '%' . $search . '%')
                  ->orWhere('slug', 'like', '%' . $search . '%')  // Optional: untuk mencari berdasarkan slug juga
                  ->orWhereHas('author', function ($query) use ($search) {
                      $query->where('name', 'like', '%' . $search . '%');
                  })
                  ->orWhereHas('category', function ($query) use ($search) {
                      $query->where('name', 'like', '%' . $search . '%'); // Pencarian berdasarkan nama kategori
                  });
        }
    }
    
    }
    

