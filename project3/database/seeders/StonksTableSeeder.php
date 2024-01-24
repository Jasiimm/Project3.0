<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StonksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */  public function run()
    {
        // Sample data for pizzas
        $pizzas = [
            [
                'name' => 'Margherita',
                'description' => 'Classic Margherita Pizza',
                'image' => 'margherita.jpg',
                'price' => 12.99,
            ],
            [
                'name' => 'Pepperoni',
                'description' => 'Pepperoni Pizza with Extra Cheese',
                'image' => 'pepperoni.jpg',
                'price' => 14.99,
            ],
            [
                'name' => 'Vegetarian',
                'description' => 'Vegetarian Pizza with Fresh Veggies',
                'image' => 'vegetarian.jpg',
                'price' => 13.99,
            ],
            [
                'name' => 'Hawaiian',
                'description' => 'Hawaiian Pizza with Ham and Pineapple',
                'image' => 'hawaiian.jpg',
                'price' => 15.99,
            ],
            [
                'name' => 'BBQ Chicken',
                'description' => 'BBQ Chicken Pizza with Barbecue Sauce',
                'image' => 'bbq_chicken.jpg',
                'price' => 16.99,
            ],
            [
                'name' => 'Supreme',
                'description' => 'Supreme Pizza with a Variety of Toppings',
                'image' => 'supreme.jpg',
                'price' => 17.99,
            ],
            [
                'name' => 'Meat Lovers',
                'description' => 'Meat Lovers Pizza with Extra Meat',
                'image' => 'meat_lovers.jpg',
                'price' => 18.99,
            ],
            [
                'name' => 'Buffalo Chicken',
                'description' => 'Buffalo Chicken Pizza with Hot Sauce',
                'image' => 'buffalo_chicken.jpg',
                'price' => 16.99,
            ],
            [
                'name' => 'Mushroom',
                'description' => 'Mushroom Pizza with Fresh Mushrooms',
                'image' => 'mushroom.jpg',
                'price' => 13.99,
            ],
            [
                'name' => 'Sausage',
                'description' => 'Sausage Pizza with Italian Sausage',
                'image' => 'sausage.jpg',
                'price' => 14.99,
            ],
            [
                'name' => 'Veggie Lovers',
                'description' => 'Veggie Lovers Pizza with a Variety of Veggies',
                'image' => 'veggie_lovers.jpg',
                'price' => 15.99,
            ],
            [
                'name' => 'Bacon',
                'description' => 'Bacon Pizza with Crispy Bacon',
                'image' => 'bacon.jpg',
                'price' => 14.99,
            ],
    
        ];

        // Insert data into the 'stonks' table
        foreach ($pizzas as $pizza) {
            DB::table('stonks')->insert($pizza);
        }
    }
}