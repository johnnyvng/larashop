<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Products', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name', 255)->unique();
                $table->string('title', 140);
                $table->string('description', 500);
                $table->integer('price');
                $table->integer('category_id')->unsigned();
                $table->integer('brand_id')->unsigned();
                $table->timestamps();
                $table->string('created_at_ip', 45);                           
                $table->string('updated_at_ip', 45);
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Products');
    }
}
