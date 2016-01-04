<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::dropIfExists('profiles');
        Schema::create('profiles', function(Blueprint $table){
            
            $table->increments('id');
            $table->integer('user_id');
            $table->string('headline', 256);
            $table->string('firstname', 64);
            $table->string('lastname', 64);
            $table->date('birthdate');
            $table->text('biography');
            
                    
                    
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
        Schema::dropIfExists('profiles');
    }
}
