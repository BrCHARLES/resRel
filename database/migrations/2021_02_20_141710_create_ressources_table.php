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
            $table->increments('id')->unsigned();
            $table->string('ressource_title')->nullable();
            $table->string('ressource_stitle')->nullable();
            $table->date('ressource_date')->nullable();
            $table->text('ressource_description')->nullable();
            $table->string('ressource_image')->nullable();
            $table->string('video_url')->nullable();
            $table->integer('video_id')->nullable();
            $table->string('content_type')->nullable();
            $table->string('size')->nullable();
            $table->boolean('active')->nullable();
            $table->string('lang')->nullable();
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
