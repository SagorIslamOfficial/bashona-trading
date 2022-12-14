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
        Schema::create('partial_headers', function (Blueprint $table) {
            $table->id();
            $table->string('number_1');
            $table->string('number_2')->nullable();
            $table->string('email_1');
            $table->string('email_2')->nullable();
            $table->string('logo');
            $table->text('text');
            $table->string('slug');
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
        Schema::dropIfExists('partial_headers');
    }
};
