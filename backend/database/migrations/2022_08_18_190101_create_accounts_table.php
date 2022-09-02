<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ownerId');
            $table->foreign('ownerId')->references('id')->on('users');
            $table->bigInteger('balance');
            $table->enum('type', [
                'BankAccount',
                'UserAccount',
                'DepositAccount',
                'CreditAccount'
            ]);
            $table->integer('periodOfPayment')->nullable();
            $table->dateTime('expiration')->nullable();
            $table->integer('interest')->nullable();
            $table->enum('currency', [
                'USD', 'GBP', 'EUR', 'UAH'
            ]);
            $table->boolean('active')->default(true);
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
        Schema::dropIfExists('accounts');
    }
};
