<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesMapTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articlesMapTags', function (Blueprint $table) {
            $table->integer('articles_id');
            $table->integer('tags_id');
            $table->timestamps();
            $table->primary(['articles_id','tags_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('articlesMapTags');
    }
}
