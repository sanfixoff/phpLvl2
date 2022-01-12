<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 2; $i++)
            \Illuminate\Support\Facades\DB::table('categories')->insert([
                'title' => 'Telephones ',
                'img' => 'categories.jpg',
                'desc' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне',
                'alias' => 'phones'
            ]);
    }
}
