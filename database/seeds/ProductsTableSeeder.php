<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'title' => 'Samsung Galaxy S10',
                'slug' => 'samsung_galaxy_s10',
                'price' => 1100,
                'description' => 'Android 10, 512GB 8GB RAM, 1440 x 3040 pixels(~550 ppi)'
            ],
            [
                'title' => 'Dell G7 17 Gaming Laptop',
                'slug' => 'dell_g7_17_gaming_laptop',
                'price' => 1499,
                'description' => 'Intel Core i7-9750H, NVIDIA GeForce RTX 2070, 256 GB SSD, 16GB RAM'
            ],
            [
                'title' => 'Apple Watch Series 3',
                'slug' => 'apple_watch_series_3',
                'price' => 229,
                'description' => '38mm, Water resistant 50 meters, Always-On Retina display'
            ],
            [
                'title' => 'Microsoft Surface 13.5 Touchscreen',
                'slug' => 'microsoft_surface_13_5_touchscreen',
                'price' => 729,
                'description' => 'Intel Core i5, 4GB RAM, 128GB SSD, Windows 10'
            ],
            [
                'title' => 'Google Pixel 3 XL 2018',
                'slug' => 'google_pixel_3_xl_2018',
                'price' => 820,
                'description' => 'Android 10, 128GB 4GB RAM, 1440 x 2960 pixels (~523 ppi)'
            ],
            [
                'title' => 'Samsung Galaxy Watch 2019',
                'slug' => 'samsung_galaxy_watch_2019',
                'price' => 595,
                'description' => '46mm, Bluetooth, Wi-Fi, GPS Smartwatch'
            ],
            [
                'title' => 'Apple iPhone X 2017',
                'slug' => 'apple_iphone_x_2017',
                'price' => 579,
                'description' => '256 GB, 5.8-inch Super Retina screen'
            ],
            [
                'title' => 'Refurbished Apple MacBook Pro 2012',
                'slug' => 'refurbished_apple_macbook_pro_2012',
                'price' => 424,
                'description' => '15.4" Laptop, Intel i7 Quad Core 2.3GHz, 4GB RAM, 500GB HDD'
            ],
            [
                'title' => 'Amazfit Bip Smartwatch',
                'slug' => 'amazfit_bip_smartwatch',
                'price' => 79,
                'description' => 'Sleep quality monitor, IP68 water resistant and dustproof'
            ],
            [
                'title' => 'HP Pavilion 15 Laptop',
                'slug' => 'hp_pavilion_15_laptop',
                'price' => 699,
                'description' => '15.6" Touchscreen, Intel Core i7-8550U, 1TB HDD, 8GB RAM'
            ]
        ]);
    }
}
