<?php

namespace Database\Seeders;

use App\Models\Card;
use App\Models\Category;
use App\Models\Product;
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

        //1-user
        User::factory(5)->create();

        //2-category
        $categories_type = [
            'Mobile Application',
            'B2B Solution',
            'ERP System',
            'Websites'
        ];

        foreach ($categories_type as $type) {
            Category::factory()->create([
                'title' => $type,
            ]);
        }

        //3-card
        Card::factory(30)->create();

        //4-product
        Product::factory(400)->create();
    }
}
