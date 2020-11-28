<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserLoanAppliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_loan_applies', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('loan_amount');
            $table->string('loan_type');
            $table->string('loan_for');
            $table->string('status');
            $table->string('document');
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
        Schema::dropIfExists('user_loan_applies');
    }
}
