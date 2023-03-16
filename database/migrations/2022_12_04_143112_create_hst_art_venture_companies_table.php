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
        Schema::create('hst_art_venture_companies', function (Blueprint $table) {
            $table->id();
            $table->string('headingArtVentureCompany');
            $table->longText('subTextArtVentureCompany')->nullable();
            $table->string('headingArtVentureCompanyService');
            $table->longText('subTextArtVentureCompanyService')->nullable();
            $table->string('headingArtVentureCompanyTeam');
            $table->longText('subTextArtVentureCompanyTeam')->nullable();
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
        Schema::dropIfExists('art_venture_companies');
    }
};
