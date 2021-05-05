<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    protected $connection = 'pgsql';
    
    public function up()
    {
        Schema::create('beers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('brewery');
            $table->string('img_url');
            $table->string('style');
            $table->float('abv');
            $table->string('description');
            $table->string('tasting_notes');
            $table->integer('likes');
            $table->string('recommended_drinking');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beers');
    }
}
