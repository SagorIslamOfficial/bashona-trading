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
        Schema::create('hst_connect_to_fly_companies', function (Blueprint $table) {
            $table->id();
            $table->string('headingConnectToFlyCompany');
            $table->longText('subTextConnectToFlyCompany')->nullable();
            $table->string('headingConnectToFlyCompanyService');
            $table->longText('subTextConnectToFlyCompanyService')->nullable();
            $table->string('headingConnectToFlyCompanyTeam');
            $table->longText('subTextConnectToFlyCompanyTeam')->nullable();
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
        Schema::dropIfExists('connect_to_fly_companies');
    }
};
