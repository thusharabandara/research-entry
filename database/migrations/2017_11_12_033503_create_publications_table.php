<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('type')->unsigned();
            $table->string('publication_date');
            $table->integer('publisher_id');
            $table->integer('category')->unsigned();
            $table->integer('subcategory')->unsigned();
            $table->integer('third_level_subcategory')->unsigned();
            $table->integer('pages')->unsigned();

            //publication file details
            $table->string('name');
            $table->string('filename');
            $table->longText('file');
            $table->string('mime');
            $table->unsignedInteger('size');
            $table->string('description');
           
            $table->timestamps();

            //Define foreign keys
            $table->foreign('type')->references('id')->on('publicationTypes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('category')->references('id')->on('publicationCategories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('subcategory')->references('id')->on('publicationSubCategories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('third_level_subcategory')->references('id')->on('publicationThirdLevelSubCategories')->onDelete('cascade')->onUpdate('cascade');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publications');
    }
}
