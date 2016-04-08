<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLights_socketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('lights_sockets', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('code');
                $table->string('type');
                $table->string('name');
                $table->integer('voltage');
                $table->integer('status');
                $table->timestamps();
                $table->softDeletes();
            });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('lights_sockets');
    }

}
