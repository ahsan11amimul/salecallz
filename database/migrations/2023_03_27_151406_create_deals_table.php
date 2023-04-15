<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deals', function (Blueprint $table) {
            $table->id();
            $table->string('sale_rep');
            $table->string('sale_rep2');
            $table->string('company_name');
            $table->string('marchant_name');
            $table->string('phone_number');
            $table->string('email');
            $table->string('request_amount');
            $table->date('date_submitted');
            $table->date('last_contacted')->nullable();
            $table->string('status')->default('Submitted');
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
        Schema::dropIfExists('deals');
    }
}
