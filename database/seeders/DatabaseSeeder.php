<?php

namespace Database\Seeders;

use App\Models\Advertisement;
use App\Models\AdvertisementCategory;
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

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@classified.com',
            'password' => bcrypt('admin'),
        ]);

        $categories = [
            'Electronics',
            'Furniture',
            'Clothing',
            'Books',
            'Toys',
            'Sports Equipment',
            'Automotive',
            'Real Estate',
            'Health & Beauty',
            'Miscellaneous'
        ];

        // Create categories
        foreach ($categories as $category) {
            AdvertisementCategory::create([
                'name' => $category,
                'slug' => strtolower(str_replace(' ', '-', $category)),
                'description' => "Description for $category",
                'status' => 1,
            ]);

            // Create advertisements for each category
            Advertisement::factory(5)->create([
                'category_id' => AdvertisementCategory::where('name', $category)->first()->id,
            ]);
        }
    }
}
