<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResCustomersBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('res_customers_banks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('customer_bank_name')->nullable();
            $table->string('acc_number',200)->unique();
            $table->string('sanitized_acc_number')->nullable();
            $table->string('acc_holder_name')->nullable();
            $table->integer('customer_id')->nullable()->index();
            $table->integer('bank_id')->nullable()->index();
            $table->integer('currency_id')->nullable()->index();
            $table->string('branch_office')->nullable();
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
        Schema::dropIfExists('res_customers_banks');
    }
}
