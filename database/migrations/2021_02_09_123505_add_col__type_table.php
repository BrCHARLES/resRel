<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::table('types', function (Blueprint $table) {
        $table->boolean('actif')->default(1);
    });
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    }
} 