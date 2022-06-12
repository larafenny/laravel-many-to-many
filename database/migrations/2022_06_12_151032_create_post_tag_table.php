<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_tag', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();

            //genero colonna post_id
            $table->unsignedBigInteger('post_id');
            //definisco la relazione tra la colonna post_id appena generata che è una chiave esterna che si riferisce a id sulla colonna posts
            $table->foreign('post_id')->references('id')->on('posts');

            //genero colonna tag_id
            $table->unsignedBigInteger('tag_id');
            //definisco la relazione tra la colonna tag_id appena generata che è una chiave esterna che si riferisce a id sulla colonna posts
            $table->foreign('tag_id')->references('id')->on('tags');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_tag');
    }
}
