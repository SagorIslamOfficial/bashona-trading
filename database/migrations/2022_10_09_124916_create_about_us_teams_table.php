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
        Schema::create('about_us_teams', function (Blueprint $table) {
            $table->id();
            //hey mate, I know this codes sucks but someone push me to do this. u already know this one. i asked to create like real dynamic, but he refused. welcome to ....... :)
            $table->string('name');
            $table->string('name1');
            $table->string('position1');
            $table->text('description1');
            $table->string('phone1');
            $table->string('email1');
            $table->string('image1');
            $table->string('name2');
            $table->string('position2');
            $table->text('description2');
            $table->string('phone2');
            $table->string('email2');
            $table->string('image2');
            $table->string('name3');
            $table->string('position3');
            $table->text('description3');
            $table->string('phone3');
            $table->string('email3');
            $table->string('image3');
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
        Schema::dropIfExists('about_us_teams');
    }
};
