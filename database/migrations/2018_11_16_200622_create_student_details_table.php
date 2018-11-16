<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('std_id');
            $table->date('d_o_b');
            $table->string('gender');
            $table->string('catagory');
            $table->string('blood_group');
            $table->string('birth_place');
            $table->string('nationality');
            $table->string('religion');
            $table->string('mobile_no');
            $table->string('email');
            $table->string('img_path');
            $table->string('created_by');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_details');
    }
}
