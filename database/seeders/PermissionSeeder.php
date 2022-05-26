<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert(
            [
                ['name'=>'Ajouter un Client'],
                ['name'=>'Modifier un Client'],
                ['name'=>'Supprimer un Client'],

                ['name'=>'Ajouter un Article'],
                ['name'=>'Modifier un Article'],
                ['name'=>'Supprimer un Article'],

                ['name'=>'Ajouter une Location'],
                ['name'=>'Modifier une Location'],
                ['name'=>'Supprimer une Location'],
            ]


        );
    }
}
