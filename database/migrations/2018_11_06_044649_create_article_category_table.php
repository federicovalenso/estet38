<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_category', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('article_id', false, true);
            $table->foreign('article_id')->references('id')->on('articles');
            $table->integer('category_id', false, true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema:table('article_category', function (Blueprint $table) {
            $table->dropForeign('article_category_article_id_foreign');
        });
        Schema::dropIfExists('article_category');
    }
}
