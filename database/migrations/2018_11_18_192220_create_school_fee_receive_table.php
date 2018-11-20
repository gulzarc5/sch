<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolFeeReceiveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_fee_receive', function (Blueprint $table) {
            $table->increments('id');
            $table->string('school_fee_receive_id')->unique();
            $table->string('std_id');
            $table->string('fee_type');
            $table->string('amount');
            $table->string('year');
            $table->string('month');
            $table->string('is_paid');
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
        Schema::dropIfExists('school_fee_receive');
    }
}
