<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('words', function (Blueprint $table) {
            $table->id();
            $table->string("value");
            $table->string("transkription")->nullable();
            $table->unsignedBigInteger("bridge_id");
            $table->foreign('bridge_id')->references('id')->on('bridge');
            $table->unsignedBigInteger("language_id");
            $table->foreign('language_id')->references('id')->on('languages');
            $table->unsignedBigInteger("synonym_id");
            $table->foreign('synonym_id')->references('id')->on('synonyms');
            $table->longText('description')->nullable();
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
        Schema::dropIfExists('words');
    }
}
