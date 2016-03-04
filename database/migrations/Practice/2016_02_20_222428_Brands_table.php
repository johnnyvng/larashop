<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Brands', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            // $table->timestamps('create_at');
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
        Schema::drop('Brands');
    }
}
