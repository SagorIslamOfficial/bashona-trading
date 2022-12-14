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
        Schema::create('art_venture_items', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('art_venture_category_id')->unsigned();
            $table->string('name');
            $table->string('slug');
            $table->string('company');
            $table->string('image');
            $table->longText('images');
            $table->string('project_heading');
            $table->longText('project_description');
            $table->string('project_details_heading');
            $table->string('project_client');
            $table->string('project_client_content');
            $table->string('project_date');
            $table->string('project_date_content');
            $table->string('project_skills');
            $table->string('project_skills_content');
            $table->string('project_url');
            $table->string('project_url_content');
            $table->string('project_link');
            $table->string('portfolio_heading');
            $table->longText('portfolio_images');

            $table->foreign('art_venture_category_id')
                ->references('id')->on('art_venture_categories')
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
        Schema::dropIfExists('art_venture_items');
    }
};
