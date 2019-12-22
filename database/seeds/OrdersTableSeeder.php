<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            [
                'customer_name' => 'John Doe',
                'email' => 'john_doe@gmail.com',
                'phone' => '555-555-1234',
                'feedback' => 'You truly get out what you put in. No bullshit.'
            ],
            [
                'customer_name' => 'Vitali Klitschko',
                'email' => 'tomorrow_day@gmail.com',
                'phone' => '093-937-9992',
                'feedback' => 'I wouldn\'t recommended! I wanted to buy sushi, but only electronics are on sale here.'
            ],
            [
                'customer_name' => 'Kim Jong-un',
                'email' => 'kim_jong_un@gmail.com',
                'phone' => '940-028-1112',
                'feedback' => 'Very professional and responsive. Would recommend to all my friends'
            ],
            [
                'customer_name' => 'Elon Musk',
                'email' => 'elon_musk@gmail.com',
                'phone' => '579-881-1822',
                'feedback' => 'Ofigenno! Very good fast service. It made me happy.'
            ],
            [
                'customer_name' => 'Sherlock Holmes',
                'email' => 'sherlock_holmes@gmail.com',
                'phone' => '782-432-4409',
                'feedback' => 'Great! No problems at all.'
            ]
        ]);
    }
}
