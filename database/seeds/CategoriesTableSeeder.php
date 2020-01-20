<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Laptops',
                'icon' => 'fas fa-laptop'
            ],
            [
                'name' => 'Smartphone',
                'icon' => 'fas fa-mobile-alt'
            ],
            [
                'name' => 'Tablet',
                'icon' => 'fas fa-tablet-alt'
            ],
            [
                'name' => 'Headphones',
                'icon' => 'fas fa-headphones-alt'
            ],
            [
                'name' => 'Camera',
                'icon' => 'fas fa-camera-retro'
            ],
            [
                'name' => 'Smart Watches',
                'icon' => 'far fa-clock'
            ],
            [
                'name' => 'TV',
                'icon' => 'fas fa-tv'
            ]
        ]);
    }
}
