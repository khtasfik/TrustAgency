<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoanApplicationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loan_application', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('status');
            $table->string('account_name')->nullable();
            $table->string('account_number')->nullable();
            $table->string('expairation')->nullable();
            $table->string('cvv')->nullable();
            $table->string('city_required')->nullable();
            $table->string('branch_requirwd')->nullable();
            $table->string('loan_type')->nullable();
            $table->string('loan_amount')->nullable();
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
        Schema::dropIfExists('loan_application');
    }
}
