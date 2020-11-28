<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAcceptApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_accept_applications', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('loan_application_id');
            $table->string('loan_type');
            $table->string('loan_for')->nullable();
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
        Schema::dropIfExists('user_accept_applications');
    }
}
