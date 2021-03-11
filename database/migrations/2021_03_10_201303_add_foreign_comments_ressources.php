<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignCommentsRessources extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comments', function (Blueprint $table){

            $table->integer('nid')->unsigned()->index();
            $table->foreign('nid')
                ->unsigned()
                ->references('id')
                ->on('ressources')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->bigInteger('user_id')->unsigned()->index();
            $table->foreign('user_id')
                ->nullable()
                ->unsigned()
                ->references('id')
                ->on('users')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->integer('comment_status')->nullable();
        });

        Schema::table('ressources', function (Blueprint $table){
            $table->bigInteger('cat_id')->nullable()->unsigned()->index();
			$table->foreign('cat_id')
                ->nullable()
                ->references('id')
                ->on('cats')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->bigInteger('comment_id')->nullable()->unsigned()->index();
			$table->foreign('comment_id')
                ->nullable()
                ->references('id')
                ->on('comments')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            
            $table->bigInteger('user_id')->nullable()->unsigned()->index();
            $table->foreign('user_id')
                ->nullable()
                ->unsigned()
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
        //
    }
}
