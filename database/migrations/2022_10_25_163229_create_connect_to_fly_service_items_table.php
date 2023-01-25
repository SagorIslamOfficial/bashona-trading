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
        Schema::create('connect_to_fly_service_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('connect_to_fly_service_category_id')->unsigned();
            $table->string('name');
            $table->string('slug');
            $table->string('company');
            $table->string('image');
            $table->longText('images');
            $table->string('project_heading');
            $table->longText('project_description');
            $table->string('project_details_heading')->nullable();
            $table->string('project_client')->nullable();
            $table->string('project_client_content')->nullable();
            $table->string('project_date')->nullable();
            $table->string('project_date_content')->nullable();
            $table->string('project_skills')->nullable();
            $table->string('project_skills_content')->nullable();
            $table->string('project_url')->nullable();
            $table->string('project_url_content')->nullable();
            $table->string('project_link')->nullable();
            $table->string('portfolio_heading');
            $table->longText('portfolio_images');

            $table->foreign('connect_to_fly_service_category_id', 'connect_to_fly_service_item')
                ->references('id')->on('connect_to_fly_service_categories')
                ->onDelete('cascade');
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
        Schema::dropIfExists('connect_to_fly_service_items');
    }
};
