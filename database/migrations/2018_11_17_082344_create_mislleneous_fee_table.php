<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMislleneousFeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mislleneous_fee', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mislleneous_fee_id')->unique();
            $table->string('std_id');
            $table->string('transaction_id');
            $table->string('fee_type_id');
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
        Schema::dropIfExists('mislleneous_fee');
    }
}
