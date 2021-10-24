<?php

namespace Database\Factories;

use App\Models\BlogPost;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BlogPostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BlogPost::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
            $title = $this->faker->sentence(rand(3, 8), true); # определяем заголовок, предложение и длинна предложения
            $txt = $this->faker->realText(rand(1000, 4000)); # дай нам реальный текст самой статьи
            $isPublished = rand(1, 5) > 1; # опубликован пост или нет и раз в 5 случаях будет не опубликован

            $created_At = $this->faker->dateTimeBetween('-3 months', '-2 months');

            return [
                'category_id'   => rand(1, 11),
                'user_id'       => (rand(1, 5)) ==5 ? 1 : 2, # создание пользователя, крайне редко будет 1 пользователь, в основном 2
                'title'         => $title,
                'slug'          => str::slug($title), # порождаем слаг по заголовку
                'excerpt'       => $this->faker->text(rand(40, 100)),
                'content_raw'   => $txt,
                'content_html'  => $txt,
                'is_published'  => $isPublished, # опубликовано или нет
                'published_at'  => $isPublished ? $this->faker->dateTimeBetween('-2 months', '-1 days') : null, # когда было опубликовано
                'created_at'    => $created_At,
                'updated_at'    => $created_At,
            ];
        }
}
