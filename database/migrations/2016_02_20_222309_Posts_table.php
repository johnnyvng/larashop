<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('URL')->unique();
            $table->string('title', 140);
            $table->string('description', 170);
            $table->text('content');
            $table->tinyInteger('blog');
//          $table->timestamps('create_at');
            $table->timestamps();
            $table->string('create_at_ip', 45);
            $table->string('updated_at_ip', 45);
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Posts');
    }
}
