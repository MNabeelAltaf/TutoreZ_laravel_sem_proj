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

        // teaching requests form 

        Schema::create('teaching_requests', function (Blueprint $table) {
           
            $table->bigIncrements('id');
            $table->string('SFirstName');
            $table->string('SLastName');
            $table->string('SEmail');
            $table->integer('SContactNumber');
            $table->string('SAddress');
            $table->string('SCity');
            $table->string('SCourse');
            $table->string('STeachingHour');
            $table->integer('Tid');
            $table->string('TName');
            $table->string('Description');
            $table->string('PaymentMethod');
            $table->string('TeachingMode');


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
        Schema::dropIfExists('teaching_requests');
    }
};
