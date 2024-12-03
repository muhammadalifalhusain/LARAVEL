<?php

namespace Database\Seeders;
use App\Models\Post;
use App\Models\Category;



use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([
            CategorySeeder::class,  // Pastikan ini ditambahkan
        ]);

        Post::factory(100) -> recycle([
            Category::all(),
            User::factory(5) -> create()
        ]) -> create();
    }
}
