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
        Schema::create('whats_apps', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->string('message')->nullable();
            $table->string('color')->nullable();
            $table->string('text')->nullable();
            $table->string('theme')->nullable();
            $table->string('position')->nullable();
            $table->string('radius')->nullable();
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
        Schema::dropIfExists('whats_apps');
    }
};
