<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id')->unsigned(); # id категорий к которой пренадлежит пост, ссылка на данные из blog_category
            $table->integer('user_id')->unsigned(); # id автора статьи

            $table->string('slug')->unique(); # название
            $table->string('title'); # транслит названия

            $table->text('excerpt')->nullable(); # выводить кусок статьи

            $table->text('content_raw');
            $table->text('content_html');

            #дата публикации
            $table->boolean('is_published')->default(false); # опубликована ли статья, по умолчанию false
            $table->timestamp('published_at')->nullable(); # когда она опубликована

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_posts');
    }
}
