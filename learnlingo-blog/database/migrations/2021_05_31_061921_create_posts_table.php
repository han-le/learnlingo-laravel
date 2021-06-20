<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
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
            $table->foreignId('category_id');
            $table->string('featured_img')->default('https://learnlingo.co/wp-content/uploads/2021/06/lift-the-spirit_-1.png');
            $table->string('post_title');
            $table->string('slug')->unique();
            $table->text("excerpt");
            $table->text('post_content');
            $table->integer('views');
            $table->boolean('must_read');
            $table->boolean('featured_1');
            $table->boolean('featured_2');
            $table->boolean('feature_3');
            $table->timestamp("published_at")->nullable();
            $table->string('post_status')->default("draft");
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
}
