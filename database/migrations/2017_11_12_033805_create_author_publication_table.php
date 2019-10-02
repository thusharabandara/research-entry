<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorPublicationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('author_publication', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('author_id')->unsigned();
            $table->integer('publication_id')->unsigned();
            $table->foreign('author_id')->references('id')->on('user_register_tb')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('publication_id')->references('id')->on('publications')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('author_publication');
    }
}
