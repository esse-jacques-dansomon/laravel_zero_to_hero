<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_articles')->insert(
            [
                ['name'=>'Car'],
                ['name'=>'Boats'],
                ['name'=>'Electronics'],
                ['name'=>'Cameras'],
                ['name'=>'Mansions'],
                ['name'=>'Villas'],
            ]
        );
    }
}
