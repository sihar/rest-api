<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('room_id')->constrained('rooms');
            $table->foreignId('customer_id')->constrained('customers');
            $table->date('checkin_date');
            $table->date('checkout_date')->nullable();
            $table->decimal('total_price', 10, 2)->default(0);
            $table->timestamps();
            $table->softDeletes();

            $table->index(['room_id']);
            $table->index(['customer_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
