<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('userid')->unique();
            $table->string('name')->nullable();
            $table->string('fname')->nullable();
            $table->string('mname')->nullable();
            $table->string('email')->nullable();
            $table->string('phone');
            $table->date('dob')->nullable();
            $table->string('tenthBoard');
            $table->string('tenthPercentage');
            $table->string('twelfthBoard');
            $table->string('twelfthPercentage');
            $table->string('course');
            $table->string('branch');
            $table->string('sgpa');
            $table->string('backlogs')->nullable();
            $table->string('grad_year');
            $table->string('admitcard')->default('no');
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
        Schema::dropIfExists('students');
    }
}
