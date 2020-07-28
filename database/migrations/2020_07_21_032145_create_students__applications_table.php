<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students__applications', function (Blueprint $table) {
            $table->id();
            $table->string('userid');
            $table->string('name');
            $table->string('fname');
            $table->string('mname');
            $table->string('email');
            $table->string('phone');
            $table->date('dob');
            $table->string('course');
            $table->string('branch');
            $table->string('sgpa');
            $table->string('company');
            $table->string('designation');
            $table->string('package');
            $table->date('apply_by');
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
        Schema::dropIfExists('students__applications');
    }
}
