<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddExtraFieldsToTablePost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Posts', function (Blueprint $table) {
            $table->timestamps('create_at');
            $table->timestamps('updated_at');
            $table->string('create_at_ip', 45);
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
        Schema::table('Posts', function (Blueprint $table) {
            $table->dropColumn('create_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('create_at_ip');
            $table->dropColumn('updated_at_ip');
        });
    }
}
