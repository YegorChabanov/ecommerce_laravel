<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            [
                'title' => 'About Us',
                'slug' => 'about_us',
                'intro' => 'Authentic products from Apple, Samsung, HP, Dell and other Brands',
                'content' => 'Offering quality products with the best prices! We hope you enjoy our products as much as we enjoy offering them to you.'
            ],
            [
                'title' => 'Shipping Policy',
                'slug' => 'shipping_policy',
                'intro' => 'Free shipping for all orders, no matter what!',
                'content' => '100% of orders are shipped within one business day. Orders placed over the weekend are dispatched on Mondays'
            ],
            [
                'title' => 'Warranty Terms',
                'slug' => 'warranty_terms',
                'intro' => 'What is the Warranty for our products?',
                'content' => 'The warranty period is indicated in the description of each product on the site. The warranty is provided for a period from 14 days up to 36 months, depending on the product'
            ],
            [
                'title' => 'Order & Returns',
                'slug' => 'order_returns',
                'intro' => 'If I am not satisfied with my order, how do I deal with it?',
                'content' => 'Products can be returned within 48 hours from the date of delivery. Payment Refunds are applicable only in case of damaged product or delivery of incorrect product'
            ],
            [
                'title' => 'Sale 10% off on every smartphone!',
                'slug' => 'sale_10_on_every_smartphone',
                'intro' => 'Don\'t miss it! Get Shopping!',
                'content' => 'We want to celebrate Valentine\'s Day with you! Therefore there is a 10% discount on every smartphone until 15.02.2020! We wish you a nice time with your soul mate'
            ],
            [
                'title' => 'iPhone 11',
                'slug' => 'iphone_11',
                'intro' => 'The phone most people should buy!',
                'content' => 'A great phone, the iPhone 11 is the default Apple flagship for the this year and it’s worthy of that crown. An excellent camera and strong battery life make this is an easy choice'
            ]
        ]);
    }
}
