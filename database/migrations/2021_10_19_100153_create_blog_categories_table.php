<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_categories', function (Blueprint $table) {
            $table->id();
            $table->integer('parent_id')->unsigned()->default(1); # unsigned - от 0 и выше и по умалчанию значение 1

            $table->string('slug')->unique(); # название категорий, уникально
            $table->string('title'); # название категорий в транслите
            $table->text('description')->nullable(); # описание, nullable - по умолчанию можно не заполнять

            $table->timestamps(); # создание двух полей, когда была создана и когда запись обновлена
            $table->softDeletes(); # когда запись удалена
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_categories');
    }
}
