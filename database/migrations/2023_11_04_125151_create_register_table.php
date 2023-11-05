<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register', function (Blueprint $table) {
            $table->id();
            $table->string('name',25);
            $table->string('dob',10);
            $table->integer('age');
            $table->string('gender',10);
            $table->string('email',25);
            $table->integer('mobile');
            $table->string('door',5);
            $table->string('street',15);
            $table->string('locality',15);
            $table->string('district',15);
            $table->string('state',15);
            $table->integer('pincode');
            $table->string('password',25);
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
        Schema::dropIfExists('register');
    }
}
