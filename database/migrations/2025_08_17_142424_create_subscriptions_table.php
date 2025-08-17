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
        Schema::create('subscriptions', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('email');
        $table->string('phone');
        $table->string('address');
        $table->string('city');
        $table->string('subscription_type'); // weekly, monthly, yearly, year_member
        $table->decimal('price', 8, 2);
        $table->string('status'); // success, pending, failed
        $table->string('order_id');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscriptions');
    }
};
