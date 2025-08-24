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
        Schema::create('crce_cdr', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ticketHeaderId')->constrained('ticket_headers')->cascadeOnDelete();

            $table->string('recordVersion', 8)->nullable();
            $table->string('operation', 32);
            $table->string('feature', 32);
            $table->integer('sequenceTotal')->nullable();
            $table->string('subscriberImsi', 32);
            $table->string('callingPartyAddress', 32);
            $table->boolean('isCallerIdSuppressed');
            $table->string('calledPartyAddress', 32)->nullable();
            $table->string('destinationNetwork', 128)->nullable();
            $table->string('destinationZone', 128)->nullable();
            $table->string('trafficType', 32);
            $table->string('apn', 64)->nullable();
            $table->integer('ratingGroupId')->nullable();
            $table->string('messageType', 32)->nullable();
            $table->string('bearerType', 32)->nullable();
            $table->boolean('isRoaming')->nullable();
            $table->string('subscriberLocation', 32)->nullable();
            $table->string('locationNetwork', 128)->nullable();
            $table->string('locationZone', 128)->nullable();
            $table->timestampTz('answerTimestamp')->nullable();
            $table->bigInteger('maximumCallCost')->nullable();
            $table->bigInteger('callDuration')->nullable();
            $table->bigInteger('ticketCallDuration')->nullable();
            $table->bigInteger('chargedDuration')->nullable();
            $table->bigInteger('ticketChargedDuration')->nullable();
            $table->bigInteger('numberOfSegments')->nullable();
            $table->bigInteger('transferredUnits')->nullable();
            $table->bigInteger('transferredBytes')->nullable();
            $table->bigInteger('ticketTransferredBytes')->nullable();
            $table->bigInteger('chargedBytes')->nullable();
            $table->bigInteger('ticketChargedBytes')->nullable();
            $table->bigInteger('numberOfSms')->nullable();
            $table->bigInteger('ticketNumberOfSms')->nullable();
            $table->string('referenceNumber', 128);
            $table->boolean('isChargeFreeAction');
            $table->integer('tariffId');
            $table->bigInteger('poolId')->nullable();
            $table->bigInteger('accountDescriptorId');
            $table->string('accountReferenceId', 32)->nullable();
            $table->bigInteger('accountDifference');
            $table->bigInteger('chargeAmount');
            $table->bigInteger('accountId')->nullable();
            $table->string('accountCurrency', 64);
            $table->bigInteger('accountClosingBalance');
            $table->string('accountType', 32)->nullable();
            $table->string('chargingResult', 32);
            $table->bigInteger('ratingFilterId')->nullable();
            $table->string('revenueCode', 128)->nullable();
            $table->text('transparentData')->nullable();
            $table->json('additionalRatingInformation')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crce_cdr');
    }
};
