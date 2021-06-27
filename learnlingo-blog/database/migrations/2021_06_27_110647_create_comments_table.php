<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id(); //bigint
            $table->foreignId('post_id')->constrained()->cascadeOnDelete();
            $table->string('comment_author');
            $table->string('comment_author_email');
            $table->text('comment_content');
            $table->boolean('comment_approved');
            $table->unsignedBigInteger('comment_parent')->nullable();
            $table->foreignId('user_id')->nullable();
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
        Schema::dropIfExists('comments');
    }
}
