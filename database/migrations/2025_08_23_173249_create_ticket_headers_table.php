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
        Schema::create('ticket_headers', function (Blueprint $table) {
            $table->id();
            $table->string('version', 8);
            $table->integer('ticketTypeId');
            $table->boolean('success');
            $table->integer('providerId');
            $table->string('application', 32);
            $table->string('ticketType', 32);
            $table->string('node', 64);
            $table->timestampTz('ticketCreationTimestamp');
            $table->timestampTz('sessionCreationTimestamp');
            $table->string('sessionId', 128);
            $table->string('transactionId', 128)->nullable();
            $table->integer('sequenceId')->nullable();
            $table->unsignedBigInteger('subscriberId')->nullable();
            $table->string('subscriberAddress', 32)->nullable();
            $table->string('subscriberType', 32)->nullable();
            $table->string('subscriberState', 32)->nullable();
            $table->string('additionalStateInformation', 128)->nullable();
            $table->integer('subscriberLanguage')->nullable();
            $table->string('notificationChannel', 32)->nullable();
            $table->string('errorCode', 32)->nullable();
            $table->unsignedBigInteger('groupId')->nullable();
            $table->unsignedBigInteger('billingAccountId')->nullable();
            $table->unsignedBigInteger('customerId')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket_headers');
    }
};
