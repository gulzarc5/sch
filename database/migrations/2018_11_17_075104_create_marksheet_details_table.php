<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarksheetDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marksheet_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('marksheet_details_id')->unique(); 
            $table->string('marksheet_id');
            $table->string('subject_id');
            $table->string('marks');
            $table->string('pass_marks');
            $table->string('total_marks');
            $table->string('percentage');
            $table->string('grade');
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
        Schema::dropIfExists('marksheet_details');
    }
}
