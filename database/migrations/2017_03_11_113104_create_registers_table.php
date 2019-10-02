<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_register_tb', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('familyname');
            $table->string('gender');
            $table->string('dob');
            $table->string('email');
            $table->string('avatar')->default('default.jpg');
            $table->text('aboutme')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('user_register_tb');
    }
}
