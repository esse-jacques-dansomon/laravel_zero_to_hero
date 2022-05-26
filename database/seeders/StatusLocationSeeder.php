<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('status_locations')->insert(
            [
                ['statusName'=>'En retard'],
                ['statusName'=>'Rendu'],
                ['statusName'=>'Payer'],
                ['statusName'=>'Pas Encore Payer'],
            ]
        );
    }
}
