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
        Schema::create('student_registrations', function (Blueprint $table) {
           

            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email');
            $table->string('DOB');
            $table->integer('mobileNumber');
            $table->string('gender');
            $table->string('martialStatus');
            $table->string('address');
            $table->string('nationality');
            $table->string('state');
            $table->string('province');
            $table->string('district');
            $table->string('city');
            $table->string('fatherName');
            $table->string('motherName');           
            $table->string('fatherOccupation');
            $table->string('bankName');
            $table->integer('iban');
            $table->integer('cnic');
            $table->string('pass');
  



            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_registrations');
    }
};
