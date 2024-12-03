<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category; 

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    protected $model = Category::class;
    public function run(): void
    {
        //
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
            'color' => 'red',
        ]);

        Category::create([
            'name' => 'Kriptografi',
            'slug' => 'kriptografi',
            'color' => 'blue',
        ]);

        Category::create([
            'name' => 'Data Mining',
            'slug' => 'data-mining',
            'color' => 'yellow',
        ]);

        Category::create([
            'name' => 'UI UX',
            'slug' => 'ui-ux',
            'color' => 'green',
        ]);
    }
}
