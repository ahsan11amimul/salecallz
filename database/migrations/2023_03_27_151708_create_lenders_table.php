<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lenders', function (Blueprint $table) {
            $table->id();

            $table->string('company_name');
            $table->string('primary_contact');
            $table->string('code');
            $table->string('phone');
            $table->string('email');
            $table->string('assigned')->default('not');
            $table->string('email2')->nullable();
            $table->date('last_contacted')->nullable();
            $table->string('position')->nullable();
            

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
        Schema::dropIfExists('lenders');
    }
}
