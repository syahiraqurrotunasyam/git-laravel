<?php

use illuminate\Database\Migrations\Migration;
use illuminate\Database\Schema\Blueprint;
use illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migratons.
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('blog_post', function (Blueprint $table) {
            $table->bigInteger('id_blog_post')->autoIncrement();
            $table->string('title');
            $table->string('author');
            $table->text('body');
            $table->timestamps();
            $table->bigInteger('id_user')->unsigned()->nullable();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     
     *@return void 
     */

    public function down()
    {
        Schema::dropIfExists('blog_post');
    }
};
