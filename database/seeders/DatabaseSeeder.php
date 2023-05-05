<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\FooterContent;
use App\Models\HeroContent;
use App\Models\Product;
use App\Models\SectionContent;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

         \App\Models\User::factory(1)->create();
          Category::factory(3)->create();
         Product::factory(10)->afterCreating(function($product){
             $category = Category::all()->random()->first();
             $product->categories()->attach([$category->id]);

         })->create();

         HeroContent::factory(1)->create();
         SectionContent::factory(2)->create();
         FooterContent::factory(1)->create();


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


    }
}
