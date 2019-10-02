<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authorContacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('phone_no');
            $table->string('mobile_no');
            $table->string('email')->unique();
            $table->string('website');
            $table->string('twitter');
            $table->string('facebook_id');
            $table->string('linkedin_id');
            $table->string('googleplus_id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('user_register_tb')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('authorContacts');
    }
}
