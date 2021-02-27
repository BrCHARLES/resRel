<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRessourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ressources', function (Blueprint $table) {
            $table->id();
            $table->integer('cat_id')->unsigned();
			$table->foreign('cat_id')
				  ->references('id')
				  ->on('cats')
				  ->onDelete('restrict')
				  ->onUpdate('restrict');
            $table->string('ressource_title');
            $table->date('ressource_date');
            $table->string('ressource_description');
            $table->string('ressource_image');
            $table->string('video_url');
            $table->integer('video_id');
            $table->string('content_type');
            $table->string('size');
            $table->boolean('active');
            $table->string('lang')->nullable();
            $table->integer('user_id')->nullable();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
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
        Schema::dropIfExists('ressources');
    }
}