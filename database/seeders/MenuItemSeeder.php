<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MenuItem;

class MenuItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run()
    {

        MenuItem::create([
            'name' => 'Hot Cappuccino',
            'price_s' => 8.50,
            'price_l' => 10.50,
            'image' => 'front/img/menu-item-1.jpg',
            'category' => 'hot',
        ]);

        MenuItem::create([
            'name' => 'Hot Americano',
            'price_s' => 9.50,
            'price_l' => 12.50,
            'image' => 'front/img/menu-item-2.jpg',
            'category' => 'hot',
        ]);

        MenuItem::create([
            'name' => 'Hot Latte',
            'price_s' => 11.75,
            'price_l' => 14.75,
            'image' => 'front/img/menu-item-3.jpg',
            'category' => 'hot',
        ]);

        MenuItem::create([
            'name' => 'Hot Espresso',
            'price_s' => 11.75,
            'price_l' => 14.75,
            'image' => 'front/img/menu-item-4.jpg',
            'category' => 'hot',
        ]);

        MenuItem::create([
            'name' => 'Iced Cappuccino',
            'price_s' => 10.00,
            'price_l' => 15.00,
            'image' => 'front/img/menu-item-5.jpg',
            'category' => 'ice',
        ]);

        MenuItem::create([
            'name' => 'Iced Americano',
            'price_s' => 12.50,
            'price_l' => 16.50,
            'image' => 'front/img/menu-item-6.jpg',
            'category' => 'ice',
        ]);

        MenuItem::create([
            'name' => 'Iced Milky Latte',
            'price_s' => 14.00,
            'price_l' => 18.00,
            'image' => 'front/img/menu-item-7.jpg',
            'category' => 'ice',
        ]);

        MenuItem::create([
            'name' => 'Iced Espresso',
            'price_s' => 10.00,
            'price_l' => 15.00,
            'image' => 'front/img/menu-item-8.jpg',
            'category' => 'ice',
        ]);

    }
}
