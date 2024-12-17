<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id')->constrained('bookings')->onDelete('cascade');
            $table->decimal('amount', 10, 2);
            $table->string('payment_method', 50); // transfer, cash, e-wallet
            $table->string('payment_status', 20)->default('unpaid'); // unpaid, paid, failed
            $table->timestamp('payment_date')->useCurrent();
        });
    }

    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
