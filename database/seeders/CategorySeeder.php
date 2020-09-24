<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categories = [
            'Outdoors & Adventure',
            'Tech',
            'Family',
            'Sports & Fitness',
            'Lerning',
            'Photography',
            'Food & Drink',
            'Writing',
            'Music',
            'Movments',
            'Movies',
            'Sci-Fi',
            'Beliefs',
            'Arts',
            'Books',
            'Dance',
            'Fashion & Beauty',
            'Hobbies & Crafts',
            'Programming',
            'Machine Learning',
            'Personal Blog',
            'Others',
        ];

        foreach($categories as $category){
            DB::table('categories')->insert([
                'display_name' => $category,
            ]);
        }
    }
}
