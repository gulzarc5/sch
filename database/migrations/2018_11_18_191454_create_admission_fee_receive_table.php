<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmissionFeeReceiveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admission_fee_receive', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fee_receive_id')->unique();
            $table->string('fee_catagory_id');
            $table->string('amount');
            $table->string('year');
            $table->string('month');
            $table->string('admission_id');
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
        Schema::dropIfExists('admission_fee_receive');
    }
}
