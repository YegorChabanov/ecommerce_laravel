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
                'intro' => 'Authentic products from Apple, Samsung, HP, Dell and more',
                'content' => 'Offering quality products with the best prices! We hope you enjoy our products as much as we enjoy offering them to you.'
            ],
            [
                'title' => 'Contact Us',
                'slug' => 'contact_us',
                'intro' => 'How can we help you?',
                'content' => 'We’d love to hear from you! Whether you have a question about our products, shipping, or anything else, our team is ready to answer all your questions'
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
            ]
        ]);
    }
}
