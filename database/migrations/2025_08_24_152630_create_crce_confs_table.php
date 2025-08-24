<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('crce_confs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ticketHeaderId')->constrained('ticket_headers')->cascadeOnDelete();

            $table->string('recordVersion', 8);
            $table->string('operation', 32);
            $table->string('feature', 64)->nullable();
            $table->integer('sequenceTotal')->nullable();
            $table->string('bundleCode', 32)->nullable();
            $table->bigInteger('oppId')->nullable();
            $table->string('serviceType', 64)->nullable();
            $table->string('customerCareUser', 32)->nullable();
            $table->string('subscriberLanguage', 64);
            $table->string('subscriberImsi', 32);
            $table->string('accountStatus', 32);
            $table->bigInteger('tariffId');
            $table->bigInteger('nextTariffId')->nullable();
            $table->bigInteger('poolId')->nullable();
            $table->bigInteger('transactionFee');
            $table->bigInteger('oldValue')->nullable();
            $table->bigInteger('newValue')->nullable();
            $table->string('accountCurrency', 64)->nullable();
            $table->bigInteger('addAmount')->nullable();
            $table->bigInteger('setBalance')->nullable();
            $table->bigInteger('accountClosingBalance')->nullable();
            $table->bigInteger('accountId')->nullable();
            $table->bigInteger('accountDescriptorId')->nullable();
            $table->string('accountReferenceId', 32)->nullable();
            $table->string('accountType', 32)->nullable();
            $table->bigInteger('accountLimit')->nullable();
            $table->string('fnfAction', 32)->nullable();
            $table->string('fnfNumber', 32)->nullable();
            $table->timestampTz('billingPeriodStartDate')->nullable();
            $table->timestampTz('billingPeriodEndDate')->nullable();
            $table->timestampTz('subscriberActivationDate')->nullable();
            $table->timestampTz('subscriberExpiryDate')->nullable();
            $table->string('costControlLimitName', 32)->nullable();
            $table->string('chargingResult', 32);
            $table->string('revenueCode', 128)->nullable();
            $table->string('transparentData', 1024)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crce_confs');
    }
};
