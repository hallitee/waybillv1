<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		     Schema::create('emails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('location');
            $table->string('company');
            $table->string('to')->nullable();
            $table->string('copi')->nullable();
            $table->string('bcopy')->nullable();		
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
    }
}
