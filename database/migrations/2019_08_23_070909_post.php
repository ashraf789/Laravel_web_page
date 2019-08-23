<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Post extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function(Blueprint $table){
            $table->increments('id');
            $table->string('title');
            $table->string('article');
            $table->string('user_id');
            $table->timestamp('create_at');
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
        });
    }

    /**
     * Reverse the migrations.
     * Delete old table if exist
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post');
    }
}
