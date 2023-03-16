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
        Schema::create('hst_about_us', function (Blueprint $table) {
            $table->id();
            $table->string('headingAboutUs');
            $table->longText('subTextAboutUs')->nullable();
            $table->string('headingAboutUsTeam');
            $table->longText('subTextAboutUsTeam')->nullable();
            $table->string('headingAboutUsClient');
            $table->longText('subTextAboutUsClient')->nullable();
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
        Schema::dropIfExists('about_us');
    }
};
