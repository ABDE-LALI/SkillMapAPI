<?php

namespace Database\Seeders;

use App\Models\Categorie;
use App\Models\Service;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Service::factory()->count(15)->create();
        Categorie::factory()->count(15)->create();
        User::factory()->count(15)->create();
    }
}
