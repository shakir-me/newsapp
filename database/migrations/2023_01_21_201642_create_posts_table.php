<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->bigInteger('category_id');
            $table->bigInteger('tag_id');
            $table->string('title');
            $table->string('slug');
            $table->longText('shor_desc')->nullable();
            $table->longText('long_desc')->nullable();
            $table->string('status');
            $table->string('slider_news')->nullable();
            $table->string('bracking_news')->nullable();
            $table->string('featured_news')->nullable();
            $table->string('popular_news')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
