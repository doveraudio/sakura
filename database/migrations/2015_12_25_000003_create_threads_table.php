<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThreadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::dropIfExists('threads');
        Schema::create('threads', function(Blueprint $table) {

            $table->increments('id');
            $table->string('title', 96);
            $table->integer('created_by');
            $table->integer('owner_id');
            $table->integer('forum_id');
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
         Schema::dropIfExists('threads');
        
    }
}
