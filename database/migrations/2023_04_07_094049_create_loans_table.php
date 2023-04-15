<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->string('loan_number')->nullable();
            $table->unsignedBigInteger('deal_id')->nullable();
            $table->unsignedBigInteger('lender_id')->nullable();
            $table->double('funded_amount')->nullable();
            $table->double('requested_amount')->nullable();

            $table->double('balance')->nullable();
            $table->double('rate')->nullable();            
            $table->double('total_amount')->nullable();
            $table->string('day_of_week')->nullable();
            $table->integer('payment_frequency')->nullable();
            $table->double('total_commision')->nullable();
            $table->double('total_bonus')->nullable();
            $table->double('bonus_office')->nullable();
            $table->double('bonus_rep1')->nullable();
            $table->double('commision_office')->nullable();
            $table->double('payments')->nullable();
            $table->date('date_funded')->nullable();
            $table->date('date_updated')->nullable();
            $table->string('sale_rep')->nullable();
            $table->string('sale_rep2')->nullable();
            $table->string('status')->nullable();
            $table->string('note')->nullable();
            $table->string('history')->nullable();
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
        Schema::dropIfExists('loans');
    }
}
