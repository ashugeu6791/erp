<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->text('company_description');
            $table->string('designation');
            $table->text('role');
            $table->string('jlocation');
            $table->string('ilocation');
            $table->string('package');
            $table->text('salary_details');
            $table->string('bond');
            $table->date('apply_by');
            $table->text('selection_details');
            $table->string('tenthpercentage');
            $table->string('twelfthpercentage');
            $table->string('sgpa');
            $table->string('backlogs');
            $table->json('courses');
            $table->json('branches');
            $table->json('year');
            $table->string('verification_token');
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
        Schema::dropIfExists('jobs');
    }
}
