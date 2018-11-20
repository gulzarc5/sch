<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmissionFeeStructureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admission_fee_structure', function (Blueprint $table) {
            $table->increments('id');
            $table->string('admission_fee_structure_id')->unique();
            $table->string('class_id');
            $table->string('catagory_id');
            $table->string('amount');
            $table->string('year');
            $table->string('medium_id');
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
        Schema::dropIfExists('admission_fee_structure');
    }
}
