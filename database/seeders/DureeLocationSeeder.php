<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DureeLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('duree_locations')->insert(
            [
                ['libel'=>'Day', 'numberHours'=>24],
                ['libel'=>'Mid-Day', 'numberHours'=>12],
            ]
        );
    }
}
