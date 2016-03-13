<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddImagesToThePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('image')->nullable()->after('content');
            $table->unsignedInteger('category_id')->nullable()->after('blog');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('image');
            $table->dropColumn('category_id');
        });
    }
/*
    $table->string('image')->nullable()->after('content'); adds a string field image after the column content. 
    The new column can accept null values.
    $table->unsignedInteger('category_id')->nullable()->after('blog'); adds an unsigned integer category_id after the column blog. 
    The new column can accept null values.
*/

}
