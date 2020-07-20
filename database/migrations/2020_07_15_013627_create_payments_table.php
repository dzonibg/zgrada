<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger("apartment_number");
            $table->date("payment_date")->nullable();
            $table->integer("payment_month")->nullable();
            $table->string('payment_month_name')->nullable();
            $table->integer("paid");
            $table->string("payment_method")->nullable();
            $table->timestamps();

//            $table->foreign('apartment_number')->references("number")->on("apartments");


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
