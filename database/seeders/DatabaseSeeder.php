<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Client;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TypeArticleSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(StatusLocationSeeder::class);
        $this->call(DureeLocationSeeder::class);
        Article::factory(1000)->create();
        Client::factory(100)->create();
        User::factory(10)->create();
    }
}
