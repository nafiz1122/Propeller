<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_forms', function (Blueprint $table) {
            $table->id();
            $table->string("patient_type");
            $table->string("appoint_time");
            $table->string("patient_name");
            $table->string("patient_gender");
            $table->string("patient_phone");
            $table->string("patient_ex_phone");
            $table->string("patient_age");
            $table->string("patient_district");
            $table->string("patient_upazila");
            $table->string("patient_union");
            $table->string("current_diseases");
            $table->string("current_medicine");
            $table->string("prescription_image");
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
        Schema::dropIfExists('patient_forms');
    }
}
