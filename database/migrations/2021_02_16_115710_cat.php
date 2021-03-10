<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     
    public function up()
    {
    	Schema::create('categories', function(Blueprint $table) {
			$table->increments('id'); 
			$table->string('name', 80);
			$table->string('image')->nullable();
            $table->string('icon')->nullable();
			$table->integer('color_id')->unsigned();
			$table->foreign('color_id')
				  ->references('id')
				  ->on('colors')
				  ->onDelete('restrict')
				  ->onUpdate('restrict');
		});
	}

	
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
	{
		Schema::table('cats', function(Blueprint $table) {
			$table->dropForeign('cats_color_id_foreign');
		});
		Schema::drop('cats');
	}
}
