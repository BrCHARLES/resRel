<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelationsRessources extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relations_ressources', function (Blueprint $table) {
            $table->integer('relation_id')->unsigned();
            $table->integer('ressource_id')->unsigned();
            $table->foreign('relation_id')
                ->references('id')
                ->on('relations')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('ressource_id')
                ->references('id')
                ->on('ressources')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relations_ressources');
    }
}
