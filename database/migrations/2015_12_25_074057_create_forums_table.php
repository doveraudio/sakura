<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('forums', function(Blueprint $table){
            $table->increments('id');
            $table->integer('parent_id')->unsigned();
            $table->integer('created_by')->unsigned();
            $table->integer('owned_by')->unsigned();
            $table->string('title',512);
            $table->text('description');
            $table->timestamps();
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
        Schema::dropIfExists('forums');
    }
}
