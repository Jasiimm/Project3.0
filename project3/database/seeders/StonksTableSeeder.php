<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class StonksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */  public function run()
    {
        Product::create([
            'imagePath' => 'https://www.dominos.nl/ManagedAssets/NL/product/PMAR/NL_PMAR_all_hero_10620.jpg?v1182494538',
            'title' => 'Pizza Margaritha',
            'description' => 'Tomatensaus, extra mozzarella & pizzakruiden',
            'price' => 15.00,
        ]);

        Product::create([
            'imagePath' => 'https://www.dominos.nl/ManagedAssets/NL/product/PPPE/NL_PPPE_all_hero_7823.jpg?v-1169967010',
            'title' => 'Pizza Pepperoni',
            'description' => 'Tomatensaus, mozzarella & pepperoni',
            'price' => 20.00,
        ]);

        Product::create([
            'imagePath' => 'https://www.dominos.nl/ManagedAssets/NL/product/PSHO/NL_PSHO_all_hero_9068.jpg?v29382211',
            'title' => 'Pizza Shoarma',
            'description' => 'Tomatensaus, mozzarella, shoarma & een swirl van knoflooksaus.',
            'price' => 25.00,
        ]);

        Product::create([
            'imagePath' => 'https://www.dominos.nl/ManagedAssets/NL/product/PVVE/NL_PVVE_all_hero_10620.jpg?v-2012043579',
            'title' => 'Vegan Veggie',
            'description' => 'Tomatensaus, Vegan Kaas, Champignons, Paprika, Spinazie',
            'price' => 15.00,
        ]);
    }
}