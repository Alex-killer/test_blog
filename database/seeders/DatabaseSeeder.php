<?php

namespace Database\Seeders;

use App\Models\BlogPost;
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
        {
            $this->call(UserSeeder::class); # создание юзеров
            $this->call(BlogCategorySeeder::class); # создание категорий
            BlogPost::factory()->count(100)->create();
        }
    }
}
