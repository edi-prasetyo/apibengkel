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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('invoice')->unique();
            $table->integer('user_id');
            $table->string('full_name');
            $table->string('phone_number');

            $table->string('province');
            $table->string('city');
            $table->string('address')->nullable();
            $table->text('notes')->nullable();

            $table->enum('status', ['pending', 'processing', 'completed', 'decline'])->default('pending');
            $table->bigInteger('grand_total');

            $table->boolean('payment_status')->default(0)->comment('paid', 'unpaid');
            $table->string('payment_method')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
