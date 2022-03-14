<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('title')->unique();
            $table->string('description');
            $table->string('writer');
            $table->string('type');
            $table->string('language');
            $table->string('cover_img');
            $table->integer('nb_pages');
            $table->float('size');
            $table->boolean('direct_link');
            $table->timestamp('publised_date');   
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
        Schema::dropIfExists('favorit_books');
        Schema::dropIfExists('reading_now');
        Schema::dropIfExists('finised_reading');
        Schema::dropIfExists('comments');
        Schema::dropIfExists('dowlonds_links');
    }
}
