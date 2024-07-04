<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tourGuides', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('ImgName');
            $table->string('flink');
            $table->string('tlink');
            $table->string('ilink');
            $table->string('llink');
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
};
