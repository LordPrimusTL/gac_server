<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppendixHymnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appendix_hymns', function (Blueprint $table) {
            $table->increments('id');
            $table->string('english');
            $table->string('yoruba');
            $table->string('has_chorus');
            $table->string('bible_text');
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
        Schema::dropIfExists('appendix_hymns');
    }
}
