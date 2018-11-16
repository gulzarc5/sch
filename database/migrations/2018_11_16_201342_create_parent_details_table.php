<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parent_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('parent_id')->unique();
            $table->string('parent_name');
            $table->string('relation');
            $table->string('mobile_no');
            $table->string('email');
            $table->date('d_o_b');
            $table->string('education');
            $table->string('income');
            $table->string('occupation');
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
        Schema::dropIfExists('parent_details');
    }
}
