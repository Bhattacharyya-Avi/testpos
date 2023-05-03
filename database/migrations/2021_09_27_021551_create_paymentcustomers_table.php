<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentcustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paymentcustomers', function (Blueprint $table) {
            $table->id();
            $table->integer('sale_id');
            $table->string('payment_date');
            $table->string('customer_id');
            $table->string('refer');
            $table->integer('amount');
            $table->integer('pay');
            $table->integer('due');
            $table->string('pay_method');
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
        Schema::dropIfExists('paymentcustomers');
    }
}