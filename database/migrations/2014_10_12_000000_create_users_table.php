<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstname')->nullable();
            $table->string('middlename')->nullable();
            $table->string('lastname')->nullable();
            $table->string('address')->nullable();
            $table->string('birthdate')->nullable();
            $table->integer('age')->nullable();
            $table->string('contact')->nullable();
            $table->string('course')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('pass')->nullable();
            $table->integer('sidn')->nullable();
            $table->unsignedBigInteger('campus_id')->nullable();
            $table->integer('isvoted')->default(0);
            $table->integer('isadmin')->default(0);
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
        Schema::dropIfExists('users');
    }
}
