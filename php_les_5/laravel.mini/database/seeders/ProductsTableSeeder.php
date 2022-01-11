<?php

namespace Database\Seeders;

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
        for ($i = 1; $i < 4; $i++)
        \Illuminate\Support\Facades\DB::table('products')->insert([
            'title' => 'Product '. $i,
            'price' => rand(50 ,2000),
            'in stock' => '1',
            'description' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне',
        ]);

    }
}
