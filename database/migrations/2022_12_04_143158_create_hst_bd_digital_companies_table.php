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
        Schema::create('hst_bd_digital_companies', function (Blueprint $table) {
            $table->id();
            $table->string('headingBdDigitalCompany');
            $table->longText('subTextBdDigitalCompany')->nullable();
            $table->string('headingBdDigitalCompanyService');
            $table->longText('subTextBdDigitalCompanyService')->nullable();
            $table->string('headingBdDigitalCompanyTeam');
            $table->longText('subTextBdDigitalCompanyTeam')->nullable();
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
        Schema::dropIfExists('bd_digital_companies');
    }
};
