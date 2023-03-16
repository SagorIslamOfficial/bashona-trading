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
            $table->string('name')->nullable();

            $table->string('rightName')->nullable();
            $table->string('rightPosition')->nullable();
            $table->text('rightMessage')->nullable();
            $table->string('rightPhone')->nullable();
            $table->string('rightEmail')->nullable();
            $table->string('rightImage')->nullable();

            $table->string('leftName')->nullable();
            $table->string('leftPosition')->nullable();
            $table->text('leftMessage')->nullable();
            $table->string('leftPhone')->nullable();
            $table->string('leftEmail')->nullable();
            $table->string('leftImage')->nullable();

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
