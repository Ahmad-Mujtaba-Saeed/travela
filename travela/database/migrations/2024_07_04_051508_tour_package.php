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
        Schema::create('tourPackage', function (Blueprint $table) {
            $table->id();
            $table->string('Location');
            $table->string('Cost');
            $table->string('ImgName');
            $table->unsignedBigInteger('CategoryID');
            $table->integer('Days');
            $table->string('ShortDescription');
            $table->longText('DetailedDescription');
            $table->string('Rating');
            $table->timestamps();
            $table->foreign('CategoryID')
                ->references('id')
                ->on('tourCategory')
                ->onDelete('cascade');
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
