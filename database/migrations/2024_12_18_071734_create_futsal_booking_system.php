<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFutsalBookingSystem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        // Lapangan table
        Schema::create('lapangan', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('location');
            $table->decimal('price_per_hour', 10, 2);
            $table->string('image')->nullable();
            $table->timestamps();
        });

        // Payments table
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('midtrans_transaction_id')->nullable();
            $table->string('reference_type'); // booking, sparing, or main_bareng
            $table->unsignedBigInteger('reference_id'); // Related transaction ID
            $table->decimal('amount', 10, 2);
            $table->enum('status', ['pending', 'completed', 'failed'])->default('pending');
            $table->timestamps();
        });

        // Bookings table
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('lapangan_id')->constrained('lapangan')->onDelete('cascade');
            $table->date('booking_date');
            $table->time('start_time');
            $table->time('end_time');
            $table->enum('status', ['pending', 'confirmed', 'cancelled'])->default('pending');
            $table->foreignId('payment_id')->nullable()->constrained('payments')->onDelete('set null');
            $table->timestamps();
        });

        // Sparings table
        Schema::create('sparings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('lapangan_id')->constrained('lapangan')->onDelete('cascade');
            $table->date('sparing_date');
            $table->time('start_time');
            $table->time('end_time');
            $table->string('opponent_team')->nullable();
            $table->enum('status', ['pending', 'confirmed', 'cancelled'])->default('pending');
            $table->foreignId('payment_id')->nullable()->constrained('payments')->onDelete('set null');
            $table->timestamps();
        });

        // Main Bareng table
        Schema::create('main_bareng', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('lapangan_id')->constrained('lapangan')->onDelete('cascade');
            $table->date('play_date');
            $table->time('start_time');
            $table->time('end_time');
            $table->integer('max_players');
            $table->enum('status', ['pending', 'confirmed', 'cancelled'])->default('pending');
            $table->foreignId('payment_id')->nullable()->constrained('payments')->onDelete('set null');
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
        Schema::dropIfExists('main_bareng');
        Schema::dropIfExists('sparings');
        Schema::dropIfExists('bookings');
        Schema::dropIfExists('payments');
        Schema::dropIfExists('lapangan');
        Schema::dropIfExists('users');
    }
}
