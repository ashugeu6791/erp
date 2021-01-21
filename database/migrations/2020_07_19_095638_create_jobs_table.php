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
            $table->string('image')->nullable(); 
            $table->string('designation');
            $table->text('role');
            $table->string('jlocation');
            $table->string('ilocation');
            $table->string('package');
            $table->text('salary_details');
            $table->string('bond');
            $table->date('apply_by');
            $table->text('selection_details');
            $table->float('tenthpercentage');
            $table->float('twelfthpercentage');
            $table->float('sgpa');
            $table->integer('backlogs');
            $table->json('courses');
            $table->json('branches');
            $table->json('year');
            $table->integer('eligibles_geu')->nullable();
            $table->integer('eligibles_gehu')->nullable();
            $table->integer('eligibles_gehub')->nullable();
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
