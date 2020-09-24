<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FontSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fonts = [
            'Montserrat, sans-serif;',
            'Roboto, sans-serif',
            'Cairo, sans-serif',
            'Amiri, sans-serif',
            'Patrick Hand, cursive',
            'Handlee, cursive',
            'Patrick Hand SC, cursive',
            'Gochi Hand, cursive',
            'Lucida Console, Courier, monospace',
            'Arial, Helvetica, sans-serif',
            'Impact, Charcoal, sans-serif',
            'Times New Roman, Times, serif',
        ];

        foreach($fonts as $font){
            DB::table('fonts')->insert([
                'name' => $font,
            ]);
        }
    }
}
