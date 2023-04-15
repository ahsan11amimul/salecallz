<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDealLendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deal_lenders', function (Blueprint $table) {
            $table->id();
            $table->integer('deal_id');
            $table->integer('lender_id');
            $table->Integer('processed_by')->nullable();
            $table->string('notes')->nullable();
            
            $table->double('funded_amount')->nullable();
            $table->date('funded_date')->nullable();
            $table->date('date_sent')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('deal_lenders');
    }
}
