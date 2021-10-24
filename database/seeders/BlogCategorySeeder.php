<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [];

        $cName = 'Без категорий';
        $categories[] = [
            'title'     => $cName,
            'slug'      => str::slug($cName),
            'parent_id' => 0,
        ];

        for ($i = 2; $i <=11; $i++) {
            $cName = 'Категория #' . $i;
            $parentId = ($i > 4) ? rand(1, 4) : 1; # определяет родительскую категорию, если i>4 то выберится категория между 1 и 4 иначе без категорий

            $categories[] = [
                'title' => $cName,
                'slug' => str::slug($cName),
                'parent_id' => $parentId,

            ];
        }

        \DB::table('blog_categories')->insert($categories);
    }
}
