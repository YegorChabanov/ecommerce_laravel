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
                'description' => 'Android 10, 512GB, 8GB RAM, 1440 x 3040 pixels(~550 ppi)',
                'image' => '/img/products/samsung_galaxy_s10.jpg',
                'category_id' => 2,
                'is_top_seller' => 0
            ],
            [
                'title' => 'Dell G7 17"',
                'slug' => 'dell_g7_17',
                'price' => 1499,
                'description' => 'Intel Core i7-9750H, NVIDIA GeForce RTX 2070, 256 GB SSD, 16GB RAM',
                'image' => '/img/products/dell_g7_17.jpg',
                'category_id' => 1,
                'is_top_seller' => 0
            ],
            [
                'title' => 'Apple Watch Series 3',
                'slug' => 'apple_watch_series_3',
                'price' => 229,
                'description' => '38mm, Water resistant 50 meters, Always-On Retina display',
                'image' => '/img/products/apple_watch_series_3.jpg',
                'category_id' => 6,
                'is_top_seller' => 0
            ],
            [
                'title' => 'Microsoft Surface',
                'slug' => 'microsoft_surface',
                'price' => 729,
                'description' => '13.5" Screen, Intel Core i5, 4GB RAM, 128GB SSD, Windows 10',
                'image' => '/img/products/microsoft_surface.jpg',
                'category_id' => 1,
                'is_top_seller' => 0
            ],
            [
                'title' => 'Google Pixel 3 XL',
                'slug' => 'google_pixel_3_xl',
                'price' => 820,
                'description' => 'Android 10, 128GB 4GB RAM, 1440 x 2960 pixels (~523 ppi)',
                'image' => '/img/products/google_pixel_3_xl.jpg',
                'category_id' => 2,
                'is_top_seller' => 0
            ],
            [
                'title' => 'Galaxy Watch 2019',
                'slug' => 'galaxy_watch_2019',
                'price' => 595,
                'description' => '46mm, Bluetooth, Wi-Fi, GPS Smartwatch',
                'image' => '/img/products/galaxy_watch_2019.jpg',
                'category_id' => 6,
                'is_top_seller' => 0
            ],
            [
                'title' => 'Apple iPhone X',
                'slug' => 'apple_iphone_x',
                'price' => 579,
                'description' => '256 GB, 5.8-inch Super Retina screen',
                'image' => '/img/products/apple_iphone_x.jpg',
                'category_id' => 2,
                'is_top_seller' => 0
            ],
            [
                'title' => 'Apple MacBook Pro',
                'slug' => 'apple_macbook_pro',
                'price' => 424,
                'description' => '15.4" Laptop, Intel i7 Quad Core 2.3GHz, 4GB RAM, 500GB HDD, Year: 2012, Refurbished',
                'image' => '/img/products/apple_macbook_pro.jpg',
                'category_id' => 1,
                'is_top_seller' => 0
            ],
            [
                'title' => 'Amazfit Smartwatch',
                'slug' => 'amazfit_smartwatch',
                'price' => 79,
                'description' => 'Sleep quality monitor, IP68 water resistant and dustproof',
                'image' => '/img/products/amazfit_smartwatch.jpg',
                'category_id' => 6,
                'is_top_seller' => 0
            ],
            [
                'title' => 'HP Pavilion 15',
                'slug' => 'hp_pavilion_15',
                'price' => 699,
                'description' => '15.6" Touchscreen, Intel Core i7-8550U, 1TB HDD, 8GB RAM',
                'image' => '/img/products/hp_pavilion_15.jpg',
                'category_id' => 1,
                'is_top_seller' => 0
            ],
            [
                'title' => 'Dell XPS 13',
                'slug' => 'dell_xps_13',
                'price' => 1591,
                'description' => '13.3" IPS (1920x1080) Full HD, Intel Core i5-8250U, RAM 8 GB, SSD 256 GB, Intel UHD Graphics 620',
                'image' => '/img/products/dell_xps_13.jpg',
                'category_id' => 1,
                'is_top_seller' => 0
            ],
            [
                'title' => 'Beats by Dr. Dre Pro',
                'slug' => 'beats_by_dr_dre_pro',
                'price' => 425,
                'description' => 'Eye-catching design, Great sensitivity, 1.8-meter cable, Bluetooth: 2.1-3.0',
                'image' => '/img/products/beats_by_dr_dre_pro.jpg',
                'category_id' => 4,
                'is_top_seller' => 1
            ],
            [
                'title' => 'iPhone 11 128GB',
                'slug' => 'iphone_11_128_gb',
                'price' => 999,
                'description' => 'IP68, Liquid Retina IPS 6.1" (828x1792 pixels), iOS 13, 128 GB',
                'image' => '/img/products/iphone_11_128_gb.jpg',
                'category_id' => 2,
                'is_top_seller' => 1
            ],
            [
                'title' => 'MateBook X Pro',
                'slug' => 'matebook_x_pro',
                'price' => 1583,
                'description' => 'HUAWEI, 13.9 ", 3000 x 2000, 260 PPI, 16 GB RAM, 256 GB SSD, Intel Core i7-8550U, NVIDIA GeForce MX150 with 2 GB GDDR5',
                'image' => '/img/products/matebook_x_pro.jpg',
                'category_id' => 1,
                'is_top_seller' => 1
            ],
            [
                'title' => 'Apple iPad Mini 2019',
                'slug' => 'apple_ipad_mini_2019',
                'price' => 520,
                'description' => '7.9" IPS (1536 x 2048 Pixels), 64GB, iOS 12.1.3',
                'image' => '/img/products/apple_ipad_mini_2019.jpg',
                'category_id' => 3,
                'is_top_seller' => 1
            ],
            [
                'title' => 'Galaxy Tab S5e LTE',
                'slug' => 'galaxt_tab_s5e_lte',
                'price' => 499,
                'description' => '10.5" Super AMOLED Screen (2560 x 1600 Pixels), 64GB, Octa-Core, 6GB RAM',
                'image' => '/img/products/galaxt_tab_s5e_lte.jpg',
                'category_id' => 3,
                'is_top_seller' => 0
            ],
            [
                'title' => 'Apple iPad Pro 12.9',
                'slug' => 'apple_ipad_pro_12_9',
                'price' => 1479,
                'description' => '12.9" 2732x2048 Retina Display, 64 GB storage, iOS 12, 4 GB RAM',
                'image' => '/img/products/apple_ipad_pro_12_9.jpg',
                'category_id' => 3,
                'is_top_seller' => 0
            ],
            [
                'title' => 'Apple AirPods 2',
                'slug' => 'apple_air_pods_2',
                'price' => 139,
                'description' => 'Quick access to Siri, Bluetooth 5.0, More than 24 hours listening time, up to 18 hours talk time',
                'image' => '/img/products/apple_air_pods_2.jpg',
                'category_id' => 4,
                'is_top_seller' => 0
            ],
            [
                'title' => 'Xiaomi Redmi Airdots',
                'slug' => 'xiaomi_redmi_airdots',
                'price' => 41,
                'description' => 'Bluetooth 5.0, Up to 15 Hours of Playback with Case, Charging Time: 20 Minutes',
                'image' => '/img/products/xiaomi_redmi_airdots.jpg',
                'category_id' => 4,
                'is_top_seller' => 0
            ],
            [
                'title' => 'GoPro HERO 8',
                'slug' => 'gopro_hero_8',
                'price' => 583,
                'description' => '4K video at 120fps, Full HD video at 480fps, Waterproof, Touch Screen',
                'image' => '/img/products/gopro_hero_8.jpg',
                'category_id' => 5,
                'is_top_seller' => 0
            ],
            [
                'title' => 'Sony FDR-X3000',
                'slug' => 'sony_fdr_x3000',
                'price' => 499,
                'description' => '8,2 MP Sony sensor, 4K (3840x2160), Waterproof',
                'image' => '/img/products/sony_fdr_x3000.jpg',
                'category_id' => 5,
                'is_top_seller' => 0
            ],
            [
                'title' => 'Sharp LC-32HI5012E',
                'slug' => 'sharp_lc_32hi5012e',
                'price' => 208,
                'description' => '32" HD (1366x768), Aquos Net+ Smart TV, 3x HDMI port',
                'image' => '/img/products/sharp_lc_32hi5012e.jpg',
                'category_id' => 7,
                'is_top_seller' => 0
            ],
            [
                'title' => 'Philips 50PUS6203',
                'slug' => 'philips_50pus6203',
                'price' => 521,
                'description' => '50" 4К Ultra HD (3840x2160), Philips Smart TV, 3x HDMI port',
                'image' => '/img/products/philips_50pus6203.jpg',
                'category_id' => 7,
                'is_top_seller' => 0
            ],
            [
                'title' => 'Samsung 65" 8K',
                'slug' => 'samsung_65_8k',
                'price' => 6250,
                'description' => '65" 8K (7680х4320), Tizen Smart TV, 4x HDMI port',
                'image' => '/img/products/samsung_65_8k.jpg',
                'category_id' => 7,
                'is_top_seller' => 0
            ]
        ]);
    }
}
