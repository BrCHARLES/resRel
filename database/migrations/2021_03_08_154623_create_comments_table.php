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
            $table->id();
            // $table->integer('comment_id')->unsigned()->nullable();
            // $table->integer('nid')->unsigned()->nullable();
			// $table->foreign('nid')
			// 	  ->references('id')
			// 	  ->on('ressources')
			// 	  ->onDelete('restrict')
			// 	  ->onUpdate('restrict');
            // $table->integer('user_id')->unsigned();
			// $table->foreign('user_id')
			// 	  ->references('id')
			// 	  ->on('users')
			// 	  ->onDelete('restrict')
			// 	  ->onUpdate('restrict');
            $table->timestamp('date_time')->nullable();
            // $table->string('content')->nullable();
            // $table->integer('comment_status')->nullable();
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
