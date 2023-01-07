<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $product = Product::create([
            'titre' => 'Formation PHP', 
            'description' => 'formation php',
            'vendeur' => 'adaa sas',
            'image' => 'cours.png'
        ]);

        $product = Product::create([
            'titre' => 'Formation laravel', 
            'description' => 'formation laravel',
            'vendeur' => 'adaa sas',
            'image' => 'cours.png'
        ]);

        $product = Product::create([
            'titre' => 'Formation react js', 
            'description' => 'formation react js',
            'vendeur' => 'adaa sas',
            'image' => 'cours.png'
        ]);

        $product = Product::create([
            'titre' => 'Formation Nuxt js', 
            'description' => 'formation Nuxt Js',
            'vendeur' => 'adaa sas',
            'image' => 'cours.png'
        ]);
    }
}
